<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostImage extends Model
{
    public $timestamps = false;

    protected $fillable = ['post_id', 'path'];

    protected static function booted(): void
    {
        // Khi xoá record ảnh thì xoá file vật lý — dùng PHP native, không qua Storage
        static::deleting(function (self $image) {
            if (!$image->path) {
                return;
            }
            $root = config('filesystems.disks.public.root') ?: storage_path('app/public');
            $absolute = rtrim($root, '/') . '/' . ltrim($image->path, '/');
            if (is_file($absolute)) {
                @unlink($absolute);
            }
        });
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
