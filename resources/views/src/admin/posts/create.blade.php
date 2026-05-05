@extends('layouts.admin.index')

@section('content')
<div class="main-content">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4 class="mb-0">Tạo bài viết mới</h4>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-soft-secondary">
            <i class="feather-arrow-left"></i> Quay lại
        </a>
    </div>

    @include('src.admin.posts._form', [
        'post' => $post,
        'action' => route('admin.posts.store'),
        'isEdit' => false,
    ])
</div>
@endsection
