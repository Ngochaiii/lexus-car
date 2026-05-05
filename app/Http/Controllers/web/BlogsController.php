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

        return view('src.web.blogs.index', compact('posts', 'featured', 'tags'));
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

        return view('src.web.blogs.detail', compact('post', 'related', 'recent', 'tags', 'prev', 'next'));
    }
}
