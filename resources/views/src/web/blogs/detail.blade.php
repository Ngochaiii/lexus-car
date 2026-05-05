@extends('layouts.web.default')

@php
    $heroImage = $post->featured_image
        ? asset('storage/' . $post->featured_image)
        : asset('web/assets/images/blog/default.jpg');

    $ogImage = $post->effectiveOgImage()
        ? asset('storage/' . $post->effectiveOgImage())
        : $heroImage;

    $url = url('/blogs/' . $post->slug);
@endphp

@section('page_title', $post->effectiveMetaTitle() . ' — Lexus Vietnam')

@section('seo_meta')
    <meta name="description" content="{{ $post->effectiveMetaDescription() }}">
    @if ($post->meta_keywords)
        <meta name="keywords" content="{{ $post->meta_keywords }}">
    @endif
    @if ($post->noindex)
        <meta name="robots" content="noindex,nofollow">
    @endif
    <link rel="canonical" href="{{ $post->canonical_url ?: $url }}">

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->og_title ?: $post->effectiveMetaTitle() }}">
    <meta property="og:description" content="{{ $post->og_description ?: $post->effectiveMetaDescription() }}">
    <meta property="og:url" content="{{ $url }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">

    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $post->title,
        'description' => $post->effectiveMetaDescription(),
        'image' => [$ogImage],
        'datePublished' => optional($post->published_at)->toIso8601String(),
        'dateModified' => $post->updated_at->toIso8601String(),
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $url],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Lexus Vietnam',
            'logo' => ['@type' => 'ImageObject', 'url' => asset('web/assets/images/lexus_logo.png')],
        ],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endsection

@section('content')
    <!-- ==================== ARTICLE HERO ==================== -->
    <section class="article-hero">
        <img src="{{ $heroImage }}" alt="{{ $post->title }}">
        <div class="ah-overlay">
            <div class="container">
                <div class="ah-content">
                    <ul class="ah-breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="bi bi-house"></i> Trang chủ</a></li>
                        <li class="sep"><i class="bi bi-chevron-right"></i></li>
                        <li><a href="{{ route('web.blogs') }}">Blog</a></li>
                        <li class="sep"><i class="bi bi-chevron-right"></i></li>
                        <li class="current">{{ $post->title }}</li>
                    </ul>

                    @if ($post->tags->count())
                        <div class="ah-tags">
                            @foreach ($post->tags as $i => $tag)
                                <span class="aht {{ $i > 0 ? 'secondary' : '' }}">{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif

                    <h1 class="ah-title">{{ $post->title }}</h1>

                    <div class="ah-meta">
                        @if ($post->published_at)
                            <span class="ahm-item"><i class="bi bi-calendar3"></i>
                                {{ $post->published_at->timezone('Asia/Ho_Chi_Minh')->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}
                            </span>
                        @endif
                        <span class="ahm-item"><i class="bi bi-clock"></i> {{ $post->reading_time }} phút đọc</span>
                        <span class="ahm-item"><i class="bi bi-eye"></i> {{ number_format($post->views) }} lượt xem</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ARTICLE CONTENT ==================== -->
    <div class="container article-wrapper">
        <div class="row g-4">
            <!-- ========= LEFT: ARTICLE ========= -->
            <div class="col-lg-8">
                <div class="article-body anim" id="articleBody">
                    {!! $post->content !!}

                    <!-- Tags & Share -->
                    <div class="article-actions">
                        @if ($post->tags->count())
                            <div class="aa-tags">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('web.blogs', ['tag' => $tag->slug]) }}" class="aat" style="text-decoration:none">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        @endif
                        <div class="aa-share">
                            <span>Chia sẻ:</span>
                            <a class="share-btn fb" target="_blank" rel="noopener"
                               href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
                               title="Facebook"><i class="bi bi-facebook"></i></a>
                            <a class="share-btn tw" target="_blank" rel="noopener"
                               href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($post->title) }}"
                               title="X / Twitter"><i class="bi bi-twitter-x"></i></a>
                            <a class="share-btn ln" target="_blank" rel="noopener"
                               href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}"
                               title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a class="share-btn wa" target="_blank" rel="noopener"
                               href="https://wa.me/?text={{ urlencode($post->title . ' ' . $url) }}"
                               title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                            <button class="share-btn cp" title="Copy link" onclick="copyLink(this)"><i class="bi bi-link-45deg"></i></button>
                        </div>
                    </div>
                </div>

                <!-- POST NAVIGATION -->
                @if ($prev || $next)
                    <div class="post-nav anim anim-d2">
                        @if ($prev)
                            <a href="{{ route('web.blogs.detail', $prev) }}" class="pn-item prev">
                                <span class="pn-label"><i class="bi bi-arrow-left"></i> Bài trước</span>
                                <span class="pn-title">{{ $prev->title }}</span>
                            </a>
                        @else
                            <span></span>
                        @endif
                        @if ($next)
                            <a href="{{ route('web.blogs.detail', $next) }}" class="pn-item next">
                                <span class="pn-label">Bài tiếp <i class="bi bi-arrow-right"></i></span>
                                <span class="pn-title">{{ $next->title }}</span>
                            </a>
                        @endif
                    </div>
                @endif
            </div>

            <!-- ========= RIGHT: SIDEBAR ========= -->
            <div class="col-lg-4">
                <!-- Table of Contents -->
                <div class="sidebar-card anim" style="position:sticky;top:80px;">
                    <div class="sidebar-title"><i class="bi bi-list-nested"></i> Mục Lục</div>
                    <ul class="toc-list" id="tocList">
                        {{-- Auto-build từ <h2> trong content (xem JS bên dưới) --}}
                    </ul>
                </div>

                <!-- Recent Posts -->
                @if ($recent->count())
                    <div class="sidebar-card anim anim-d1">
                        <div class="sidebar-title"><i class="bi bi-clock-history"></i> Bài Viết Mới</div>
                        @foreach ($recent as $rp)
                            <div class="recent-post">
                                <div class="rp-img">
                                    <img src="{{ $rp->featured_image ? asset('storage/'.$rp->featured_image) : asset('web/assets/images/blog/default.jpg') }}" alt="{{ $rp->title }}">
                                </div>
                                <div>
                                    <div class="rp-title"><a href="{{ route('web.blogs.detail', $rp) }}">{{ $rp->title }}</a></div>
                                    <div class="rp-date">
                                        <i class="bi bi-calendar3"></i>
                                        {{ optional($rp->published_at)->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Tags -->
                @if ($tags->count())
                    <div class="sidebar-card anim anim-d2">
                        <div class="sidebar-title"><i class="bi bi-tags"></i> Tags</div>
                        <div class="tag-cloud">
                            @foreach ($tags as $t)
                                <a href="{{ route('web.blogs', ['tag' => $t->slug]) }}"
                                   class="tag {{ $post->tags->contains('id', $t->id) ? 'active' : '' }}"
                                   style="text-decoration:none">{{ $t->name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Newsletter -->
                <div class="sb-newsletter anim anim-d3">
                    <div class="sbn-icon"><i class="bi bi-envelope-paper-fill"></i></div>
                    <h5>Đăng Ký Nhận Tin</h5>
                    <p>Nhận bài viết mới nhất và ưu đãi độc quyền từ Lexus Vietnam.</p>
                    <input type="email" placeholder="Email của bạn...">
                    <button class="btn-nl" onclick="subscribeNL(this)"><i class="bi bi-send-fill"></i> Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== RELATED POSTS ==================== -->
    @if ($related->count())
        <section class="related-section">
            <div class="container">
                <div class="sec-head">
                    <h2>Bài Viết Tương Tự</h2>
                    <a href="{{ route('web.blogs') }}" class="view-all">Xem tất cả <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="row g-4">
                    @foreach ($related as $rel)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <div class="bc-img">
                                    <img src="{{ $rel->featured_image ? asset('storage/'.$rel->featured_image) : asset('web/assets/images/blog/default.jpg') }}" alt="{{ $rel->title }}">
                                    @if ($rel->tags->first())
                                        <span class="bc-tag">{{ $rel->tags->first()->name }}</span>
                                    @endif
                                </div>
                                <div class="bc-body">
                                    <div class="bc-date">
                                        <i class="bi bi-calendar3"></i>
                                        {{ optional($rel->published_at)->locale('vi')->isoFormat('D [Tháng] M, YYYY') }}
                                    </div>
                                    <h3 class="bc-title">
                                        <a href="{{ route('web.blogs.detail', $rel) }}">{{ $rel->title }}</a>
                                    </h3>
                                    <p class="bc-excerpt">
                                        {{ \Illuminate\Support\Str::limit($rel->excerpt ?: strip_tags($rel->content), 120) }}
                                    </p>
                                    <div class="bc-footer">
                                        <div class="bc-stats">
                                            <span><i class="bi bi-eye"></i> {{ number_format($rel->views) }}</span>
                                            <span><i class="bi bi-clock"></i> {{ $rel->reading_time }}p</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

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

@push('css')
<style>
    /* CKEditor 5 default classes → map sang style template Lexus */
    .article-body figure.image,
    .article-body figure.image-style-block-align-left,
    .article-body figure.image-style-block-align-right,
    .article-body figure.image-style-side {
        margin: 24px 0;
        border-radius: var(--radius, 8px);
        overflow: hidden;
    }
    .article-body figure.image img { width: 100%; height: auto; display: block; }
    .article-body figure.image figcaption {
        font-size: 0.85rem;
        color: var(--lexus-text-muted, #888);
        text-align: center;
        padding: 8px 12px;
        font-style: italic;
    }
    .article-body img { max-width: 100%; height: auto; }
    .article-body table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        font-size: 0.95rem;
    }
    .article-body table td, .article-body table th {
        border: 1px solid rgba(255,255,255,0.1);
        padding: 0.75rem;
    }
    .article-body table th { background: rgba(255,255,255,0.05); font-weight: 600; }
    .article-body ul, .article-body ol { padding-left: 1.5rem; margin-bottom: 1rem; }
    .article-body li { margin-bottom: 0.4rem; line-height: 1.7; }
    .article-body h2, .article-body h3, .article-body h4 { scroll-margin-top: 90px; }
</style>
@endpush

@push('js')
<script>
    // ====== Reading Progress + navbar scroll (giữ logic gốc nếu có) ======
    window.addEventListener('scroll', () => {
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolled = (window.scrollY / docHeight) * 100;
        const rp = document.getElementById('readingProgress');
        if (rp) rp.style.width = scrolled + '%';
        const navbar = document.getElementById('navbar');
        if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 100);
        const btt = document.getElementById('backToTop');
        if (btt) btt.classList.toggle('show', window.scrollY > 400);
        const fs = document.getElementById('floatShare');
        if (fs) fs.classList.toggle('show', window.scrollY > 600);
    });

    // ====== Auto-build TOC từ <h2> trong article body ======
    (function buildTOC() {
        const body = document.getElementById('articleBody');
        const toc = document.getElementById('tocList');
        if (!body || !toc) return;

        const headings = body.querySelectorAll('h2');
        if (!headings.length) {
            toc.parentElement.style.display = 'none';
            return;
        }

        const slugify = (s) => s.toString().toLowerCase()
            .normalize('NFD').replace(/[̀-ͯ]/g, '')
            .replace(/đ/g, 'd').replace(/[^a-z0-9\s-]/g, '')
            .trim().replace(/\s+/g, '-').replace(/-+/g, '-');

        headings.forEach((h, idx) => {
            if (!h.id) h.id = 'sec-' + (slugify(h.textContent) || idx);
            const li = document.createElement('li');
            li.textContent = h.textContent;
            li.dataset.target = h.id;
            li.addEventListener('click', () => {
                const target = document.getElementById(li.dataset.target);
                const top = target.getBoundingClientRect().top + window.scrollY - 80;
                window.scrollTo({ top, behavior: 'smooth' });
                document.querySelectorAll('#tocList li').forEach(x => x.classList.remove('active'));
                li.classList.add('active');
            });
            if (idx === 0) li.classList.add('active');
            toc.appendChild(li);
        });

        const tocItems = toc.querySelectorAll('li');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    tocItems.forEach(li => li.classList.toggle('active', li.dataset.target === id));
                }
            });
        }, { rootMargin: '-100px 0px -60% 0px' });
        headings.forEach(h => observer.observe(h));
    })();

    // ====== Copy link ======
    function copyLink(btn) {
        navigator.clipboard.writeText(window.location.href).then(() => {
            const icon = btn.querySelector('i');
            icon.classList.replace('bi-link-45deg', 'bi-check-lg');
            setTimeout(() => icon.classList.replace('bi-check-lg', 'bi-link-45deg'), 2000);
        });
    }

    // ====== Newsletter ======
    function subscribeNL(btn) {
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
</script>
@endpush
