<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PostImage;
use App\Services\ImageUploader;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Endpoint upload ảnh cho CKEditor 5 SimpleUploadAdapter.
 * CKEditor gửi POST multipart với field "upload", expect JSON {url: "..."}.
 */
class MediaController extends Controller
{
    public function __construct(private ImageUploader $uploader)
    {
    }

    public function upload(Request $request): JsonResponse
    {
        try {
            $file = $request->file('upload');
            if (!$file || !$file->isValid()) {
                return response()->json([
                    'error' => ['message' => 'File upload không hợp lệ.']
                ], 422);
            }

            $path = $this->uploader->store($file, 'posts/content');

            // Track ảnh không gắn post → cleanup sau (orphan), post_id=null
            PostImage::create(['path' => $path]);

            return response()->json([
                'url' => asset('storage/' . $path),
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'error' => ['message' => $e->getMessage()],
            ], 422);
        }
    }
}
