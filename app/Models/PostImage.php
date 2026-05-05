<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class PostImage extends Model
{
    public $timestamps = false;

    protected $fillable = ['post_id', 'path'];

    protected static function booted(): void
    {
        // Khi xoá record ảnh thì xoá file vật lý trên disk public
        static::deleting(function (self $image) {
            if ($image->path && Storage::disk('public')->exists($image->path)) {
                Storage::disk('public')->delete($image->path);
            }
        });
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
