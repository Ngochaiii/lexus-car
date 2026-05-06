<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

/**
 * Upload ảnh KHÔNG phụ thuộc ext-fileinfo.
 *
 * Validate qua: tên file (extension) + magic bytes thay vì $file->getMimeType().
 * Lưu file bằng PHP file_put_contents() thay vì Storage::put() — tránh hoàn toàn
 * Symfony Mime + Flysystem detector (vì những lib này có thể `new finfo()` ngầm).
 */
class ImageUploader
{
    private const ALLOWED_EXT = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    /** Magic bytes (hex) đầu file cho từng loại ảnh */
    private const SIGNATURES = [
        'jpg'  => ['ffd8ff'],
        'jpeg' => ['ffd8ff'],
        'png'  => ['89504e470d0a1a0a'],
        'gif'  => ['474946383761', '474946383961'],
        'webp' => ['52494646'], // RIFF — sau đó "WEBP" ở offset 8
    ];

    /**
     * Lưu ảnh upload vào disk public, trả về path tương đối (vd "posts/featured/abc.jpg").
     *
     * @param  string  $folder  vd "posts/featured", "posts/content"
     * @param  int  $maxBytes   mặc định 5MB
     * @throws \RuntimeException khi file không hợp lệ
     */
    public function store(UploadedFile $file, string $folder, int $maxBytes = 5_242_880): string
    {
        if ($file->getSize() > $maxBytes) {
            throw new \RuntimeException('File quá lớn (tối đa ' . round($maxBytes / 1024 / 1024, 1) . ' MB).');
        }

        $ext = strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION));
        if (!in_array($ext, self::ALLOWED_EXT, true)) {
            throw new \RuntimeException('Định dạng không hỗ trợ. Chỉ cho phép: jpg, png, gif, webp.');
        }

        $bytes = file_get_contents($file->getRealPath());
        if ($bytes === false || $bytes === '') {
            throw new \RuntimeException('Không đọc được file upload.');
        }

        if (!$this->hasValidSignature($ext, $bytes)) {
            throw new \RuntimeException('File không phải ảnh hợp lệ (header sai).');
        }

        if ($ext === 'webp' && substr($bytes, 8, 4) !== 'WEBP') {
            throw new \RuntimeException('File webp không hợp lệ.');
        }

        $folder = trim($folder, '/');
        $filename = md5($bytes . microtime(true)) . '.' . $ext;
        $relativePath = $folder . '/' . $filename;

        $publicDiskRoot = $this->publicDiskRoot();
        $absoluteDir = $publicDiskRoot . '/' . $folder;
        $absolutePath = $publicDiskRoot . '/' . $relativePath;

        // Tạo folder nếu chưa có
        if (!is_dir($absoluteDir)) {
            if (!mkdir($absoluteDir, 0775, true) && !is_dir($absoluteDir)) {
                throw new \RuntimeException("Không tạo được thư mục: {$absoluteDir}");
            }
        }

        // Ghi raw bytes — PHP native, KHÔNG đụng Symfony Mime / Flysystem
        $written = file_put_contents($absolutePath, $bytes);
        if ($written === false) {
            throw new \RuntimeException('Không ghi được file: ' . $absolutePath);
        }
        @chmod($absolutePath, 0664);

        return $relativePath;
    }

    /**
     * Xoá ảnh khỏi disk public nếu tồn tại.
     */
    public function delete(?string $path): void
    {
        if (!$path) {
            return;
        }
        $absolute = $this->publicDiskRoot() . '/' . ltrim($path, '/');
        if (is_file($absolute)) {
            @unlink($absolute);
        }
    }

    private function publicDiskRoot(): string
    {
        // Lấy root của disk 'public' từ config — fallback storage_path('app/public')
        $configured = config('filesystems.disks.public.root');
        return rtrim($configured ?: storage_path('app/public'), '/');
    }

    private function hasValidSignature(string $ext, string $bytes): bool
    {
        $head = bin2hex(substr($bytes, 0, 8));
        foreach (self::SIGNATURES[$ext] ?? [] as $sig) {
            if (str_starts_with($head, $sig)) {
                return true;
            }
        }
        return false;
    }
}
