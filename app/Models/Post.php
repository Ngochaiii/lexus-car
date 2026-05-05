<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public const STATUS_DRAFT = 'draft';
    public const STATUS_SCHEDULED = 'scheduled';
    public const STATUS_PUBLISHED = 'published';

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'featured_image',
        'status', 'published_at', 'scheduled_at', 'views', 'reading_time',
        'meta_title', 'meta_description', 'meta_keywords',
        'canonical_url', 'focus_keyword',
        'og_title', 'og_description', 'og_image', 'noindex',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'scheduled_at' => 'datetime',
        'noindex' => 'bool',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(PostImage::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function scopeDraft($q)     { return $q->where('status', self::STATUS_DRAFT); }
    public function scopeScheduled($q) { return $q->where('status', self::STATUS_SCHEDULED); }
    public function scopePublished($q) { return $q->where('status', self::STATUS_PUBLISHED); }

    public function isPublished(): bool { return $this->status === self::STATUS_PUBLISHED; }
    public function isDraft(): bool     { return $this->status === self::STATUS_DRAFT; }
    public function isScheduled(): bool { return $this->status === self::STATUS_SCHEDULED; }

    /**
     * Frontend route binding theo slug. Admin route giữ nguyên dùng id.
     * (Admin route đã đặt parameter là {post}, sẽ tự dùng resolveRouteBinding;
     *  còn frontend dùng {post:slug} explicit).
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }

    /**
     * Sinh slug duy nhất, append -2, -3... nếu trùng.
     */
    public static function makeUniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = Str::slug($base) ?: 'post';
        $original = $slug;
        $i = 2;
        while (static::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = $original . '-' . $i++;
        }
        return $slug;
    }

    /**
     * Đồng bộ tags theo danh sách tên (free-text). Tự tạo tag mới nếu chưa có.
     *
     * @param array<int, string>|string $names
     */
    public function syncTagsByName($names): void
    {
        if (is_string($names)) {
            $names = array_filter(array_map('trim', explode(',', $names)));
        }
        $names = array_values(array_unique(array_filter($names ?? [], fn($n) => trim((string) $n) !== '')));

        $ids = [];
        foreach ($names as $name) {
            $slug = Str::slug($name);
            if ($slug === '') continue;
            $tag = Tag::firstOrCreate(['slug' => $slug], ['name' => $name]);
            $ids[] = $tag->id;
        }
        $this->tags()->sync($ids);
    }

    /**
     * Tính reading time (phút) từ content HTML.
     */
    public static function calcReadingTime(?string $contentHtml): int
    {
        $text = trim(preg_replace('/\s+/u', ' ', strip_tags((string) $contentHtml)) ?? '');
        if ($text === '') return 1;
        $wordCount = str_word_count($text);
        // Tiếng Việt từ thường có dấu cách, ~200wpm
        $minutes = (int) ceil($wordCount / 200);
        return max(1, min(255, $minutes));
    }

    // SEO helpers (fallback values)
    public function effectiveMetaTitle(): string
    {
        return $this->meta_title ?: $this->title;
    }
    public function effectiveMetaDescription(): string
    {
        return $this->meta_description ?: (string) Str::limit(strip_tags($this->excerpt ?: $this->content), 155);
    }
    public function effectiveOgImage(): ?string
    {
        return $this->og_image ?: $this->featured_image;
    }
}
