<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $postId = $this->route('post')?->id;

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'status' => ['required', Rule::in(['draft', 'scheduled', 'published'])],
            'scheduled_at' => ['nullable', 'date', 'required_if:status,scheduled'],

            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['nullable', 'string', 'max:255'],
            'canonical_url' => ['nullable', 'url', 'max:255'],
            'focus_keyword' => ['nullable', 'string', 'max:100'],

            'og_title' => ['nullable', 'string', 'max:255'],
            'og_description' => ['nullable', 'string', 'max:255'],

            'noindex' => ['nullable', 'boolean'],

            'tags' => ['nullable', 'string', 'max:1000'],

            // Ảnh: KHÔNG dùng rule 'image'/'mimes' vì cần fileinfo.
            // Service ImageUploader sẽ tự validate qua extension + magic bytes.
            'featured_image_file' => ['nullable', 'file', 'max:5120'],
            'og_image_file' => ['nullable', 'file', 'max:5120'],

            'remove_featured_image' => ['nullable', 'boolean'],
            'remove_og_image' => ['nullable', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Tiêu đề bắt buộc.',
            'content.required' => 'Nội dung bắt buộc.',
            'meta_description.max' => 'Meta description tối đa 160 ký tự.',
            'scheduled_at.required_if' => 'Cần thời điểm đăng khi chọn lên lịch.',
            'canonical_url.url' => 'Canonical URL không hợp lệ.',
        ];
    }
}
