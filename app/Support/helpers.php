<?php

if (! function_exists('asset_v')) {
    /**
     * Giống asset() nhưng gắn thêm ?v=<filemtime> để tự bust cache
     * (browser + Cloudflare) mỗi khi file trên đĩa thay đổi.
     */
    function asset_v(string $path): string
    {
        $file = public_path($path);

        if (is_file($file)) {
            return asset($path).'?v='.filemtime($file);
        }

        return asset($path);
    }
}
