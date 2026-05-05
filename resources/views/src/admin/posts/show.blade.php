@extends('layouts.admin.index')

@section('content')
<div class="main-content">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div>
                        <a href="{{ route('admin.posts.index', ['tab' => $post->status]) }}"
                           class="btn btn-sm btn-soft-secondary">
                            <i class="feather-arrow-left"></i> Quay lại
                        </a>
                        @if ($post->isPublished())
                            <span class="badge bg-soft-success text-success ms-2">Đã đăng</span>
                        @elseif ($post->isScheduled())
                            <span class="badge bg-soft-info text-info ms-2">Lên lịch</span>
                        @else
                            <span class="badge bg-soft-warning text-warning ms-2">Bài chờ</span>
                        @endif
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        @if ($post->isPublished())
                            <form method="POST" action="{{ route('admin.posts.unpublish', $post) }}"
                                  onsubmit="return confirm('Gỡ bài này xuống?')">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-warning">
                                    <i class="feather-pause"></i> Gỡ xuống
                                </button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('admin.posts.publish', $post) }}"
                                  onsubmit="return confirm('Đăng bài này?')">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="feather-check"></i> Đăng ngay
                                </button>
                            </form>
                        @endif
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-secondary">
                            <i class="feather-edit-2"></i> Sửa
                        </a>
                        <form method="POST" action="{{ route('admin.posts.destroy', $post) }}"
                              onsubmit="return confirm('Xoá bài này? Không thể hoàn tác.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="feather-trash-2"></i> Xoá
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    @if ($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                             class="img-fluid mb-3" style="border-radius:8px">
                    @endif

                    <h2 class="mb-2">{{ $post->title }}</h2>
                    <div class="text-muted fs-13 mb-3">
                        <span><i class="feather-link"></i> /{{ $post->slug }}</span>
                        · <span><i class="feather-clock"></i> {{ $post->reading_time }} phút đọc</span>
                        · <span><i class="feather-eye"></i> {{ number_format($post->views) }} lượt xem</span>
                        @if ($post->published_at)
                            · <span><i class="feather-calendar"></i> {{ $post->published_at->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}</span>
                        @endif
                    </div>

                    @if ($post->tags->count())
                        <div class="mb-3">
                            @foreach ($post->tags as $tag)
                                <span class="badge bg-soft-secondary text-secondary">#{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    @endif

                    @if ($post->excerpt)
                        <div class="alert alert-light fs-14 fst-italic">{{ $post->excerpt }}</div>
                    @endif

                    <div class="post-content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar SEO --}}
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <strong>Điểm SEO</strong>
                    <span class="badge {{ $seo['score'] >= 80 ? 'bg-success' : ($seo['score'] >= 50 ? 'bg-warning' : 'bg-danger') }}">
                        {{ $seo['score'] }}/100
                    </span>
                </div>
                <div class="card-body">
                    <div class="progress mb-3" style="height:8px">
                        <div class="progress-bar {{ $seo['score'] >= 80 ? 'bg-success' : ($seo['score'] >= 50 ? 'bg-warning' : 'bg-danger') }}"
                             style="width: {{ $seo['score'] }}%"></div>
                    </div>
                    <ul class="list-unstyled mb-0 fs-13">
                        @foreach ($seo['checks'] as $check)
                            <li class="mb-2">
                                @if ($check['pass'])
                                    <i class="feather-check-circle text-success"></i>
                                @else
                                    <i class="feather-x-circle text-danger"></i>
                                @endif
                                {{ $check['label'] }}
                                @if (!empty($check['hint']))
                                    <small class="text-muted d-block ms-4">{{ $check['hint'] }}</small>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header"><strong>Snippet xem trước (Google)</strong></div>
                <div class="card-body" style="font-family:arial,sans-serif">
                    <div style="color:#1a0dab;font-size:18px;line-height:1.3">{{ $post->effectiveMetaTitle() }}</div>
                    <div style="color:#006621;font-size:13px">{{ url('/blogs/' . $post->slug) }}</div>
                    <div style="color:#545454;font-size:13px;line-height:1.4">{{ $post->effectiveMetaDescription() }}</div>
                </div>
            </div>

            @if ($post->meta_keywords || $post->focus_keyword || $post->canonical_url)
                <div class="card mb-3">
                    <div class="card-header"><strong>SEO khác</strong></div>
                    <div class="card-body fs-13">
                        @if ($post->focus_keyword)
                            <div class="mb-2"><strong>Focus keyword:</strong> {{ $post->focus_keyword }}</div>
                        @endif
                        @if ($post->meta_keywords)
                            <div class="mb-2"><strong>Keywords:</strong> {{ $post->meta_keywords }}</div>
                        @endif
                        @if ($post->canonical_url)
                            <div class="mb-2"><strong>Canonical:</strong> <span class="text-truncate d-block">{{ $post->canonical_url }}</span></div>
                        @endif
                        @if ($post->noindex)
                            <div class="text-danger"><i class="feather-eye-off"></i> noindex (ẩn khỏi search)</div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('css')
<style>
    .post-content img { max-width:100%; height:auto; margin:1rem 0; border-radius:6px; }
    .post-content p { margin-bottom: 1rem; line-height: 1.7; }
    .post-content h2, .post-content h3, .post-content h4 { margin-top: 1.5rem; margin-bottom: 0.75rem; }
    .post-content blockquote { border-left: 4px solid #ddd; padding-left: 1rem; color: #666; margin: 1rem 0; }
    .post-content table { width: 100%; border-collapse: collapse; margin: 1rem 0; }
    .post-content table td, .post-content table th { border: 1px solid #ddd; padding: 0.5rem; }
</style>
@endpush
@endsection
