@extends('layouts.web.default')

@php
    $defaultImg = asset('web/assets/images/blog/default.jpg');
    $totalPosts = $featured ? $posts->total() + 1 : $posts->total();
@endphp

@section('page_title', 'Blog & Tin Tức — Lexus Vietnam')

@section('content')
    <!-- ==================== PAGE HERO ==================== -->
    <section class="page-hero">
        <div class="container">
            <ul class="breadcrumb-hero">
                <li><a href="{{ url('/') }}"><i class="bi bi-house"></i> Trang chủ</a></li>
                <li class="sep"><i class="bi bi-chevron-right"></i></li>
                <li class="current">Blog & Tin Tức</li>
            </ul>
            <h1>Blog & Tin Tức</h1>
            <p>Khám phá những thông tin mới nhất về Lexus, xu hướng ô tô và trải nghiệm lái xe đẳng cấp.</p>
            <form method="GET" action="{{ route('web.blogs') }}" class="hero-search-blog">
                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm bài viết..."
                       value="{{ request('q') }}">
                <i class="bi bi-search search-icon"></i>
            </form>
            <div class="hero-stats">
                <div class="hs-item"><strong>{{ $totalPosts }}</strong>Bài viết</div>
                <div class="hs-item"><strong>{{ $tags->count() }}</strong>Chủ đề</div>
                <div class="hs-item"><strong>{{ number_format(($featured?->views ?? 0) + $posts->sum('views')) }}</strong>Lượt xem</div>
            </div>
        </div>
    </section>

    <!-- ==================== FILTER BAR ==================== -->
    <div class="blog-filter-bar">
        <div class="container">
            <div class="blog-filter-inner">
                <div class="cat-tabs" id="categoryTabs">
                    <a href="{{ route('web.blogs') }}"
                       class="ct {{ !request('tag') ? 'active' : '' }}">Tất cả</a>
                    @foreach ($tags->take(6) as $tag)
                        <a href="{{ route('web.blogs', ['tag' => $tag->slug]) }}"
                           class="ct {{ request('tag') === $tag->slug ? 'active' : '' }}">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== MAIN CONTENT ==================== -->
    <div class="container" style="padding-top:40px; padding-bottom:60px;">
        <div class="row g-4">
            <!-- ========= LEFT: BLOG CONTENT ========= -->
            <div class="col-lg-8">
                @if ($featured)
                    <!-- FEATURED POST -->
                    <div class="featured-post anim">
                        <div class="fp-img">
                            <img src="{{ $featured->featured_image ? asset('storage/'.$featured->featured_image) : $defaultImg }}"
                                 alt="{{ $featured->title }}">
                            <div class="fp-overlay">
                                <span class="fp-badge"><i class="bi bi-star-fill"></i> Nổi bật</span>
                                <h2 class="fp-title">
                                    <a href="{{ route('web.blogs.detail', $featured) }}">{{ $featured->title }}</a>
                                </h2>
                                <p class="fp-excerpt">
                                    {{ \Illuminate\Support\Str::limit($featured->excerpt ?: strip_tags($featured->content), 180) }}
                                </p>
                                <div class="fp-meta">
                                    @if ($featured->published_at)
                                        <span>{{ $featured->published_at->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}</span>
                                        <span>·</span>
                                    @endif
                                    <span class="fp-read-time"><i class="bi bi-clock"></i> {{ $featured->reading_time }} phút đọc</span>
                                    <span>·</span>
                                    <span><i class="bi bi-eye"></i> {{ number_format($featured->views) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- BLOG GRID -->
                <div class="row g-4" id="blogGrid">
                    @forelse ($posts as $post)
                        <div class="col-md-6 blog-item anim anim-d{{ ($loop->index % 5) + 1 }}">
                            <div class="blog-card">
                                <div class="bc-img">
                                    <img src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : $defaultImg }}"
                                         alt="{{ $post->title }}">
                                    @if ($post->tags->first())
                                        <span class="bc-tag">{{ $post->tags->first()->name }}</span>
                                    @endif
                                </div>
                                <div class="bc-body">
                                    <div class="bc-date">
                                        <i class="bi bi-calendar3"></i>
                                        {{ optional($post->published_at)->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}
                                    </div>
                                    <h3 class="bc-title">
                                        <a href="{{ route('web.blogs.detail', $post) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="bc-excerpt">
                                        {{ \Illuminate\Support\Str::limit($post->excerpt ?: strip_tags($post->content), 130) }}
                                    </p>
                                    <div class="bc-footer">
                                        <div class="bc-stats">
                                            <span><i class="bi bi-eye"></i> {{ number_format($post->views) }}</span>
                                            <span><i class="bi bi-clock"></i> {{ $post->reading_time }}p</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        @if (!$featured)
                            <div class="col-12">
                                <div class="text-center py-5" style="opacity:.7">
                                    <i class="bi bi-inbox" style="font-size:3rem;display:block;margin-bottom:12px"></i>
                                    @if (request('q') || request('tag'))
                                        Không tìm thấy bài viết phù hợp.
                                        <div class="mt-2">
                                            <a href="{{ route('web.blogs') }}" class="btn btn-sm btn-outline-light">Xem tất cả</a>
                                        </div>
                                    @else
                                        Chưa có bài viết nào được đăng.
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforelse
                </div>

                <!-- PAGINATION -->
                @if ($posts->hasPages())
                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>

            <!-- ========= RIGHT: SIDEBAR ========= -->
            <div class="col-lg-4">
                <!-- Recent Posts -->
                <div class="sidebar-card anim anim-d2">
                    <div class="sidebar-title"><i class="bi bi-clock-history"></i> Bài Viết Mới</div>
                    @forelse ($posts->take(4) as $rp)
                        <div class="recent-post">
                            <div class="rp-img">
                                <img src="{{ $rp->featured_image ? asset('storage/'.$rp->featured_image) : $defaultImg }}"
                                     alt="{{ $rp->title }}">
                            </div>
                            <div>
                                <div class="rp-title">
                                    <a href="{{ route('web.blogs.detail', $rp) }}">{{ $rp->title }}</a>
                                </div>
                                <div class="rp-date">
                                    <i class="bi bi-calendar3"></i>
                                    {{ optional($rp->published_at)->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-muted fs-13">Chưa có bài.</div>
                    @endforelse
                </div>

                <!-- Tags -->
                @if ($tags->count())
                    <div class="sidebar-card anim anim-d3">
                        <div class="sidebar-title"><i class="bi bi-tags"></i> Tags Phổ Biến</div>
                        <div class="tag-cloud">
                            @foreach ($tags as $tag)
                                <a href="{{ route('web.blogs', ['tag' => $tag->slug]) }}"
                                   class="tag {{ request('tag') === $tag->slug ? 'active' : '' }}"
                                   style="text-decoration:none">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Newsletter Sidebar -->
                <div class="sb-newsletter anim anim-d4">
                    <div class="sbn-icon"><i class="bi bi-envelope-paper-fill"></i></div>
                    <h5>Đăng Ký Nhận Tin</h5>
                    <p>Nhận bài viết mới nhất và ưu đãi độc quyền từ Lexus Vietnam.</p>
                    <input type="email" placeholder="Email của bạn...">
                    <button class="btn-nl" onclick="subscribeNewsletter(this)"><i class="bi bi-send-fill"></i> Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== NEWSLETTER BOTTOM ==================== -->
    <section class="newsletter-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h3>Experience Amazing</h3>
                    <div class="nb-sub">Đăng ký nhận tin tức mới nhất từ Lexus Vietnam</div>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="nl-form">
                        <input type="email" placeholder="Địa chỉ email">
                        <button class="btn-nls">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
<script>
    function subscribeNewsletter(btn) {
        const input = btn.previousElementSibling;
        if (input.value) {
            btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Đã Đăng Ký!';
            input.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-send-fill"></i> Đăng Ký';
                input.disabled = false;
                input.value = '';
            }, 3000);
        }
    }

    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        const backToTop = document.getElementById('backToTop');
        if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 100);
        if (backToTop) backToTop.classList.toggle('show', window.scrollY > 400);
    });
</script>
@endpush
