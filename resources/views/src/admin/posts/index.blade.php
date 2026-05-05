@extends('layouts.admin.index')

@section('content')
<div class="main-content">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="card stretch stretch-full">

            <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-2">
                <h5 class="card-title mb-0">
                    Quản lý bài viết
                    <span class="badge bg-soft-primary text-primary ms-1">{{ $counts['draft'] + $counts['scheduled'] + $counts['published'] }}</span>
                </h5>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">
                    <i class="feather-plus"></i> Tạo bài mới
                </a>
            </div>

            <div class="card-body p-0">
                <ul class="nav nav-tabs px-3 pt-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ $tab === 'draft' ? 'active' : '' }}"
                           href="{{ route('admin.posts.index', ['tab' => 'draft']) }}">
                            Bài chờ <span class="badge bg-soft-warning text-warning ms-1">{{ $counts['draft'] }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $tab === 'scheduled' ? 'active' : '' }}"
                           href="{{ route('admin.posts.index', ['tab' => 'scheduled']) }}">
                            Lên lịch <span class="badge bg-soft-info text-info ms-1">{{ $counts['scheduled'] }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $tab === 'published' ? 'active' : '' }}"
                           href="{{ route('admin.posts.index', ['tab' => 'published']) }}">
                            Đã đăng <span class="badge bg-soft-success text-success ms-1">{{ $counts['published'] }}</span>
                        </a>
                    </li>
                </ul>

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="border-b">
                                <th style="width:48px">#</th>
                                <th style="width:80px">Ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Tags</th>
                                <th>Lượt xem</th>
                                <th>Cập nhật</th>
                                <th class="text-end" style="width:200px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration + ($posts->firstItem() - 1) }}</td>
                                    <td>
                                        @if ($post->featured_image)
                                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                 alt="" style="width:60px;height:40px;object-fit:cover;border-radius:4px">
                                        @else
                                            <div class="bg-light text-muted d-flex align-items-center justify-content-center"
                                                 style="width:60px;height:40px;border-radius:4px">
                                                <i class="feather-image"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.posts.show', $post) }}"
                                           class="fw-semibold text-truncate d-block" style="max-width:320px">
                                            {{ $post->title }}
                                        </a>
                                        <span class="fs-12 text-muted">/{{ $post->slug }}</span>
                                    </td>
                                    <td>
                                        @foreach ($post->tags->take(3) as $tag)
                                            <span class="badge bg-soft-secondary text-secondary">{{ $tag->name }}</span>
                                        @endforeach
                                        @if ($post->tags->count() > 3)
                                            <span class="fs-12 text-muted">+{{ $post->tags->count() - 3 }}</span>
                                        @endif
                                    </td>
                                    <td>{{ number_format($post->views) }}</td>
                                    <td>
                                        <span class="d-block fs-13">{{ $post->updated_at->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y') }}</span>
                                        <span class="fs-12 text-muted">{{ $post->updated_at->timezone('Asia/Ho_Chi_Minh')->format('H:i') }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.posts.show', $post) }}"
                                           class="btn btn-sm btn-soft-primary" title="Xem">
                                            <i class="feather-eye"></i>
                                        </a>
                                        @if ($post->isPublished())
                                            <form method="POST" action="{{ route('admin.posts.unpublish', $post) }}" class="d-inline"
                                                  onsubmit="return confirm('Gỡ bài này xuống?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-soft-warning" title="Gỡ"><i class="feather-pause"></i></button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.posts.publish', $post) }}" class="d-inline"
                                                  onsubmit="return confirm('Đăng bài này?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-soft-success" title="Đăng"><i class="feather-check"></i></button>
                                            </form>
                                        @endif
                                        <a href="{{ route('admin.posts.edit', $post) }}"
                                           class="btn btn-sm btn-soft-secondary" title="Sửa"><i class="feather-edit-2"></i></a>
                                        <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" class="d-inline"
                                              onsubmit="return confirm('Xoá bài này? Không thể hoàn tác.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-soft-danger" title="Xoá"><i class="feather-trash-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-5">
                                        <i class="feather-inbox" style="font-size:2rem;display:block;margin-bottom:8px;opacity:.4"></i>
                                        Chưa có bài nào.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
