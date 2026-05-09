<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::published()->with('tags');

        if ($q = trim((string) $request->query('q'))) {
            $query->where(function ($w) use ($q) {
                $w->where('title', 'like', "%{$q}%")
                  ->orWhere('excerpt', 'like', "%{$q}%");
            });
        }

        if ($tagSlug = $request->query('tag')) {
            $query->whereHas('tags', fn($t) => $t->where('slug', $tagSlug));
        }

        $featured = (clone $query)->orderByDesc('views')->first();

        $postsQuery = $query->latest('published_at');
        if ($featured) {
            $postsQuery->where('id', '!=', $featured->id);
        }
        $posts = $postsQuery->paginate(8)->withQueryString();

        $tags = Tag::orderBy('name')->get();

        $seo = [
            'title' => 'Tin Tức & Cẩm Nang Xe Lexus - Đánh Giá, So Sánh, Khuyến Mãi | Lexus Thăng Long',
            'description' => 'Cập nhật tin tức xe Lexus mới nhất: bảng giá, đánh giá, so sánh các dòng RX, NX, ES, LX, LS. Cẩm nang chọn mua xe sang từ chuyên gia Lexus Thăng Long.',
            'keywords' => 'tin tức Lexus, đánh giá xe Lexus, bảng giá Lexus, cẩm nang Lexus',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Tin tức & Cẩm nang'],
        ];

        return view('src.web.blogs.index', compact('posts', 'featured', 'tags', 'seo', 'breadcrumbs'));
    }

    public function detail(Post $post)
    {
        // 404 nếu chưa publish
        abort_unless($post->isPublished(), 404);

        $post->load('tags');

        // Tăng view (best-effort)
        $post->increment('views');

        // Bài liên quan: cùng tag, fallback latest
        $tagIds = $post->tags->pluck('id');
        $relatedQuery = Post::published()
            ->where('id', '!=', $post->id)
            ->with('tags');

        if ($tagIds->isNotEmpty()) {
            $relatedQuery->whereHas('tags', fn($t) => $t->whereIn('tags.id', $tagIds));
        }
        $related = $relatedQuery->latest('published_at')->take(3)->get();

        if ($related->count() < 3) {
            $fillNeeded = 3 - $related->count();
            $existingIds = $related->pluck('id')->push($post->id);
            $fill = Post::published()
                ->whereNotIn('id', $existingIds)
                ->latest('published_at')
                ->take($fillNeeded)
                ->get();
            $related = $related->concat($fill);
        }

        // Sidebar: bài mới
        $recent = Post::published()
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(4)
            ->get();

        $tags = Tag::orderBy('name')->get();

        // Prev / next
        $prev = Post::published()
            ->where('published_at', '<', $post->published_at)
            ->latest('published_at')
            ->first();
        $next = Post::published()
            ->where('published_at', '>', $post->published_at)
            ->oldest('published_at')
            ->first();

        $siteUrl = rtrim(config('seo.site_url'), '/');
        $seo = [
            'title' => $post->effectiveMetaTitle() . ' | Lexus Thăng Long',
            'description' => $post->effectiveMetaDescription(),
            'keywords' => $post->meta_keywords ?: $post->tags->pluck('name')->implode(', '),
            'canonical' => $post->canonical_url ?: ($siteUrl . '/blogs/' . $post->slug),
            'og_type' => 'article',
            'og_image' => $post->effectiveOgImage()
                ? (str_starts_with($post->effectiveOgImage(), 'http') ? $post->effectiveOgImage() : $siteUrl . '/' . ltrim($post->effectiveOgImage(), '/'))
                : null,
            'robots' => $post->noindex ? 'noindex, nofollow' : null,
            'schemas' => [[
                '@context' => 'https://schema.org',
                '@type' => 'Article',
                'mainEntityOfPage' => $siteUrl . '/blogs/' . $post->slug,
                'headline' => $post->title,
                'description' => $post->effectiveMetaDescription(),
                'image' => $post->effectiveOgImage(),
                'author' => ['@type' => 'Organization', 'name' => config('seo.organization.name')],
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => config('seo.organization.name'),
                    'logo' => ['@type' => 'ImageObject', 'url' => $siteUrl . '/web/assets/images/lexus_logo.png'],
                ],
                'datePublished' => optional($post->published_at)->toIso8601String(),
                'dateModified' => optional($post->updated_at ?? $post->published_at)->toIso8601String(),
            ]],
        ];
        $seo = array_filter($seo, fn($v) => $v !== null);

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Tin tức', 'url' => route('web.blogs')],
            ['name' => \Illuminate\Support\Str::limit($post->title, 50)],
        ];

        return view('src.web.blogs.detail', compact('post', 'related', 'recent', 'tags', 'prev', 'next', 'seo', 'breadcrumbs'));
    }
}
