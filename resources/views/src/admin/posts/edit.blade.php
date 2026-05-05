@extends('layouts.admin.index')

@section('content')
<div class="main-content">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4 class="mb-0">Sửa bài viết</h4>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-soft-primary">
                <i class="feather-eye"></i> Xem
            </a>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-soft-secondary">
                <i class="feather-arrow-left"></i> Danh sách
            </a>
        </div>
    </div>

    @include('src.admin.posts._form', [
        'post' => $post,
        'action' => route('admin.posts.update', $post),
        'isEdit' => true,
    ])
</div>
@endsection
