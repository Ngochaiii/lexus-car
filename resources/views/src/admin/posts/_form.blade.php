{{-- Partial form dùng cho cả create + edit. Required: $post (Post model), $action (URL submit), $isEdit (bool) --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ $action }}" enctype="multipart/form-data" id="post-form">
    @csrf
    @if ($isEdit) @method('PUT') @endif

    <div class="row g-3">
        {{-- Cột chính --}}
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="input-title" class="form-control"
                               value="{{ old('title', $post->title) }}" required maxlength="255">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <div class="input-group">
                            <span class="input-group-text">/blogs/</span>
                            <input type="text" name="slug" id="input-slug" class="form-control"
                                   value="{{ old('slug', $post->slug) }}" maxlength="255"
                                   placeholder="tu-dong-sinh-tu-tieu-de">
                            <button type="button" class="btn btn-outline-secondary" id="btn-gen-slug">
                                <i class="feather-refresh-cw"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tóm tắt (excerpt)</label>
                        <textarea name="excerpt" class="form-control" rows="2" maxlength="500"
                                  placeholder="Mô tả ngắn hiển thị ở trang danh sách">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nội dung <span class="text-danger">*</span></label>
                        <textarea name="content" id="editor" class="form-control">{{ old('content', $post->content) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Tabs SEO / Social --}}
            <div class="card mb-3">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-seo">SEO</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-social">Social (Open Graph)</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        {{-- SEO TAB --}}
                        <div class="tab-pane fade show active" id="tab-seo">
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">
                                    <span>Meta title</span>
                                    <span class="fs-12 text-muted"><span id="cnt-meta-title">0</span>/60</span>
                                </label>
                                <input type="text" name="meta_title" id="input-meta-title" class="form-control"
                                       value="{{ old('meta_title', $post->meta_title) }}" maxlength="255"
                                       placeholder="Để trống sẽ dùng tiêu đề bài">
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between">
                                    <span>Meta description</span>
                                    <span class="fs-12 text-muted"><span id="cnt-meta-desc">0</span>/160</span>
                                </label>
                                <textarea name="meta_description" id="input-meta-desc" class="form-control" rows="2"
                                          maxlength="160">{{ old('meta_description', $post->meta_description) }}</textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Focus keyword</label>
                                    <input type="text" name="focus_keyword" class="form-control"
                                           value="{{ old('focus_keyword', $post->focus_keyword) }}" maxlength="100"
                                           placeholder="Từ khóa chính của bài">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Meta keywords</label>
                                    <input type="text" name="meta_keywords" class="form-control"
                                           value="{{ old('meta_keywords', $post->meta_keywords) }}" maxlength="255"
                                           placeholder="từ khóa 1, từ khóa 2, ...">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="form-label">Canonical URL</label>
                                <input type="url" name="canonical_url" class="form-control"
                                       value="{{ old('canonical_url', $post->canonical_url) }}"
                                       placeholder="https://... (tránh duplicate content)">
                            </div>

                            <div class="form-check mt-3">
                                <input type="hidden" name="noindex" value="0">
                                <input type="checkbox" name="noindex" id="input-noindex" value="1" class="form-check-input"
                                       {{ old('noindex', $post->noindex) ? 'checked' : '' }}>
                                <label for="input-noindex" class="form-check-label">
                                    noindex (ẩn khỏi Google search)
                                </label>
                            </div>
                        </div>

                        {{-- SOCIAL TAB --}}
                        <div class="tab-pane fade" id="tab-social">
                            <div class="mb-3">
                                <label class="form-label">OG Title</label>
                                <input type="text" name="og_title" class="form-control"
                                       value="{{ old('og_title', $post->og_title) }}" maxlength="255"
                                       placeholder="Để trống sẽ dùng tiêu đề bài">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">OG Description</label>
                                <textarea name="og_description" class="form-control" rows="2"
                                          maxlength="255">{{ old('og_description', $post->og_description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">OG Image (1200×630 khuyến nghị)</label>
                                @if ($post->og_image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $post->og_image) }}" alt=""
                                             style="max-width:300px;border-radius:6px">
                                        <div class="form-check mt-1">
                                            <input type="checkbox" name="remove_og_image" value="1" id="rm-og" class="form-check-input">
                                            <label for="rm-og" class="form-check-label fs-12">Xoá ảnh hiện tại</label>
                                        </div>
                                    </div>
                                @endif
                                <input type="file" name="og_image_file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.webp">
                                <div class="form-text">Nếu không upload, sẽ dùng ảnh đại diện của bài.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header"><strong>Trạng thái</strong></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Trạng thái</label>
                        <select name="status" class="form-select" id="input-status">
                            <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>Bài chờ (draft)</option>
                            <option value="scheduled" {{ old('status', $post->status) === 'scheduled' ? 'selected' : '' }}>Lên lịch</option>
                            <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Đã đăng</option>
                        </select>
                    </div>
                    <div class="mb-0" id="schedule-wrapper" style="display:none">
                        <label class="form-label">Đăng vào lúc</label>
                        <input type="datetime-local" name="scheduled_at" class="form-control"
                               value="{{ old('scheduled_at', optional($post->scheduled_at)->format('Y-m-d\TH:i')) }}">
                    </div>
                </div>
                <div class="card-footer d-flex gap-2">
                    <button type="submit" class="btn btn-primary flex-grow-1">
                        <i class="feather-save"></i> Lưu
                    </button>
                    @if ($isEdit)
                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-secondary">Huỷ</a>
                    @else
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Huỷ</a>
                    @endif
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header"><strong>Ảnh đại diện</strong></div>
                <div class="card-body">
                    @if ($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt=""
                             class="img-fluid mb-2" style="border-radius:6px">
                        <div class="form-check mb-2">
                            <input type="checkbox" name="remove_featured_image" value="1" id="rm-feat" class="form-check-input">
                            <label for="rm-feat" class="form-check-label fs-12">Xoá ảnh hiện tại</label>
                        </div>
                    @endif
                    <input type="file" name="featured_image_file" class="form-control" accept=".jpg,.jpeg,.png,.gif,.webp">
                    <div class="form-text">JPG/PNG/GIF/WebP, tối đa 5MB.</div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header"><strong>Tags</strong></div>
                <div class="card-body">
                    <input type="text" name="tags" class="form-control"
                           value="{{ old('tags', $post->tags->pluck('name')->implode(', ')) }}"
                           placeholder="tag1, tag2, tag3">
                    <div class="form-text">Phân cách bằng dấu phẩy. Tag mới sẽ tự tạo.</div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header"><strong>Snippet xem trước (Google)</strong></div>
                <div class="card-body">
                    <div style="font-family:arial,sans-serif">
                        <div style="color:#1a0dab;font-size:18px;line-height:1.3" id="prev-title">Tiêu đề...</div>
                        <div style="color:#006621;font-size:13px" id="prev-url">{{ url('/blogs') }}/...</div>
                        <div style="color:#545454;font-size:13px;line-height:1.4" id="prev-desc">Meta description sẽ hiện ở đây...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@push('css')
<style>
    /* CKEditor 4 wrapper height */
    .cke_chrome { border-radius: 6px; overflow: hidden; }
</style>
@endpush

@push('js')
{{-- CKEditor 4 standard-all — đầy đủ font/size/color, không cần license, không phụ thuộc plugin commercial --}}
<script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>
<script>
(function () {
    if (!window.CKEDITOR) {
        console.error('CKEditor 4 chưa load. Kiểm tra CDN / mạng.');
        return;
    }

    CKEDITOR.replace('editor', {
        height: 500,
        language: 'vi',
        removePlugins: 'elementspath,resize',
        extraPlugins: 'colorbutton,colordialog,font,justify,uploadimage,image2',
        // Endpoint upload ảnh (CKEditor 4 dùng key uploadUrl + filebrowserUploadUrl)
        filebrowserUploadUrl: "{{ route('admin.media.upload') }}?_token={{ csrf_token() }}&_ck=1",
        filebrowserImageUploadUrl: "{{ route('admin.media.upload') }}?_token={{ csrf_token() }}&_ck=1",
        uploadUrl: "{{ route('admin.media.upload') }}?_token={{ csrf_token() }}&_ck=1",
        imageUploadUrl: "{{ route('admin.media.upload') }}?_token={{ csrf_token() }}&_ck=1",
        // Tự động drag-drop / paste ảnh (cần image2 + uploadimage plugin)
        toolbar: [
            { name: 'document', items: ['Source', '-', 'Undo', 'Redo'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'] },
            { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'align', items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
            { name: 'links', items: ['Link', 'Unlink'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
            { name: 'tools', items: ['Maximize'] }
        ],
        // Cho phép giữ class/style/iframe khi paste
        allowedContent: true,
        format_tags: 'p;h2;h3;h4;pre',
        fontSize_sizes: '10/10px;12/12px;14/14px;16/16px;18/18px;20/20px;24/24px;28/28px;32/32px;36/36px;48/48px',
        font_names: 'Mặc định/inherit;DM Sans/DM Sans, sans-serif;Playfair Display/Playfair Display, serif;'
            + 'Arial/Arial, sans-serif;Georgia/Georgia, serif;Tahoma/Tahoma, sans-serif;'
            + 'Times New Roman/Times New Roman, serif;Verdana/Verdana, sans-serif;Courier New/Courier New, monospace',
        contentsCss: [
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
            CKEDITOR.basePath + 'contents.css'
        ]
    });

    // CKEditor 4 không trả JSON {url} mà mong đợi format CKEditor.
    // Adapter: convert response của MediaController ({url:"..."}) sang format CKE4 cần.
    CKEDITOR.on('instanceReady', function (ev) {
        ev.editor.on('fileUploadResponse', function (event) {
            // Ngăn handler mặc định
            event.stop();
            const data = event.data;
            const xhr = data.fileLoader.xhr;
            try {
                const response = JSON.parse(xhr.responseText);
                if (response && response.url) {
                    data.url = response.url;
                } else if (response && response.error) {
                    data.message = response.error.message || 'Upload thất bại';
                    event.cancel();
                }
            } catch (e) {
                data.message = 'Phản hồi server không hợp lệ';
                event.cancel();
            }
        });
    });

    // Sync CKEditor → textarea trước khi submit (đảm bảo content được gửi)
    document.getElementById('post-form')?.addEventListener('submit', function () {
        for (const name in CKEDITOR.instances) {
            CKEDITOR.instances[name].updateElement();
        }
    });

    // ===== Auto-generate slug =====
    const titleEl = document.getElementById('input-title');
    const slugEl = document.getElementById('input-slug');
    const genBtn = document.getElementById('btn-gen-slug');
    let slugTouched = {{ $isEdit ? 'true' : 'false' }};

    function vnSlug(str) {
        return str.toString().toLowerCase()
            .normalize('NFD').replace(/[̀-ͯ]/g, '')
            .replace(/đ/g, 'd').replace(/Đ/g, 'D')
            .replace(/[^a-z0-9\s-]/g, '')
            .trim().replace(/\s+/g, '-').replace(/-+/g, '-');
    }
    if (titleEl && slugEl) {
        slugEl.addEventListener('input', () => slugTouched = true);
        titleEl.addEventListener('input', () => {
            if (!slugTouched) slugEl.value = vnSlug(titleEl.value);
            updatePreview();
        });
        genBtn?.addEventListener('click', () => {
            slugEl.value = vnSlug(titleEl.value);
            slugTouched = true;
            updatePreview();
        });
    }

    // ===== Char counter & Google snippet preview =====
    const mtEl = document.getElementById('input-meta-title');
    const mdEl = document.getElementById('input-meta-desc');
    const cntMt = document.getElementById('cnt-meta-title');
    const cntMd = document.getElementById('cnt-meta-desc');

    const previewTitle = document.getElementById('prev-title');
    const previewUrl = document.getElementById('prev-url');
    const previewDesc = document.getElementById('prev-desc');

    function updatePreview() {
        const t = (mtEl?.value || titleEl?.value || 'Tiêu đề bài viết').slice(0, 60);
        const d = (mdEl?.value || 'Meta description...').slice(0, 160);
        const u = '{{ url('/blogs') }}/' + (slugEl?.value || 'slug-bai-viet');
        if (previewTitle) previewTitle.textContent = t;
        if (previewUrl) previewUrl.textContent = u;
        if (previewDesc) previewDesc.textContent = d;
        if (cntMt) cntMt.textContent = (mtEl?.value || '').length;
        if (cntMd) cntMd.textContent = (mdEl?.value || '').length;
    }
    [mtEl, mdEl, slugEl, titleEl].forEach(el => el?.addEventListener('input', updatePreview));
    updatePreview();

    // ===== Toggle scheduled_at theo status =====
    const statusEl = document.getElementById('input-status');
    const scheduleWrap = document.getElementById('schedule-wrapper');
    function toggleSchedule() {
        if (statusEl?.value === 'scheduled') scheduleWrap.style.display = '';
        else scheduleWrap.style.display = 'none';
    }
    statusEl?.addEventListener('change', toggleSchedule);
    toggleSchedule();
})();
</script>
@endpush
