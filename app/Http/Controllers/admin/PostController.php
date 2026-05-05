<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use App\Services\ImageUploader;
use App\Services\SeoAnalyzer;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(
        private ImageUploader $uploader,
        private SeoAnalyzer $seoAnalyzer,
    ) {
    }

    public function index(Request $request)
    {
        $tab = $request->query('tab');
        $tab = in_array($tab, ['draft', 'scheduled', 'published'], true) ? $tab : 'draft';

        $posts = Post::with('tags')
            ->where('status', $tab)
            ->latest('updated_at')
            ->paginate(20)
            ->withQueryString();

        $counts = [
            'draft' => Post::draft()->count(),
            'scheduled' => Post::scheduled()->count(),
            'published' => Post::published()->count(),
        ];

        return view('src.admin.posts.index', compact('posts', 'tab', 'counts'));
    }

    public function create()
    {
        $post = new Post(['status' => 'draft']);
        return view('src.admin.posts.create', compact('post'));
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $post = new Post();

        $this->fillPost($post, $data, $request);
        $post->save();
        $post->syncTagsByName($request->input('tags'));

        return redirect()->route('admin.posts.show', $post)
            ->with('success', 'Đã tạo bài viết.');
    }

    public function show(Post $post)
    {
        $post->load('tags');
        $seo = $this->seoAnalyzer->analyze($post);
        return view('src.admin.posts.show', compact('post', 'seo'));
    }

    public function edit(Post $post)
    {
        $post->load('tags');
        return view('src.admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->fillPost($post, $data, $request);
        $post->save();
        $post->syncTagsByName($request->input('tags'));

        return redirect()->route('admin.posts.show', $post)
            ->with('success', 'Đã lưu thay đổi.');
    }

    public function publish(Post $post)
    {
        $post->update([
            'status' => Post::STATUS_PUBLISHED,
            'published_at' => $post->published_at ?? now(),
        ]);
        return back()->with('success', 'Đã đăng: ' . $post->title);
    }

    public function unpublish(Post $post)
    {
        $post->update(['status' => Post::STATUS_DRAFT]);
        return back()->with('success', 'Đã gỡ: ' . $post->title);
    }

    public function destroy(Post $post)
    {
        // Xoá ảnh featured + og + ảnh trong content
        $this->uploader->delete($post->featured_image);
        $this->uploader->delete($post->og_image);
        $post->images()->get()->each->delete();

        $title = $post->title;
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Đã xoá: ' . $title);
    }

    /**
     * Phân tích SEO real-time qua AJAX (nếu muốn dùng ở form).
     */
    public function analyzeSeo(Request $request)
    {
        $post = new Post($request->only([
            'title', 'slug', 'content', 'meta_description',
            'focus_keyword', 'featured_image',
        ]));
        return response()->json($this->seoAnalyzer->analyze($post));
    }

    /**
     * Fill các field từ validated data + xử lý ảnh upload.
     */
    private function fillPost(Post $post, array $data, PostRequest $request): void
    {
        $post->title = $data['title'];
        $post->slug = Post::makeUniqueSlug($data['slug'] ?: $data['title'], $post->id);
        $post->excerpt = $data['excerpt'] ?? null;
        $post->content = $data['content'];
        $post->status = $data['status'];
        $post->scheduled_at = $data['scheduled_at'] ?? null;

        $post->meta_title = $data['meta_title'] ?? null;
        $post->meta_description = $data['meta_description'] ?? null;
        $post->meta_keywords = $data['meta_keywords'] ?? null;
        $post->canonical_url = $data['canonical_url'] ?? null;
        $post->focus_keyword = $data['focus_keyword'] ?? null;
        $post->og_title = $data['og_title'] ?? null;
        $post->og_description = $data['og_description'] ?? null;
        $post->noindex = (bool) ($data['noindex'] ?? false);

        // Featured image
        if ($request->boolean('remove_featured_image')) {
            $this->uploader->delete($post->featured_image);
            $post->featured_image = null;
        }
        if ($request->hasFile('featured_image_file')) {
            $this->uploader->delete($post->featured_image);
            $post->featured_image = $this->uploader->store(
                $request->file('featured_image_file'),
                'posts/featured'
            );
        }

        // OG image
        if ($request->boolean('remove_og_image')) {
            $this->uploader->delete($post->og_image);
            $post->og_image = null;
        }
        if ($request->hasFile('og_image_file')) {
            $this->uploader->delete($post->og_image);
            $post->og_image = $this->uploader->store(
                $request->file('og_image_file'),
                'posts/og'
            );
        }

        // Auto fill published_at lần đầu publish
        if ($post->status === Post::STATUS_PUBLISHED && !$post->published_at) {
            $post->published_at = now();
        }

        $post->reading_time = Post::calcReadingTime($post->content);
    }
}
