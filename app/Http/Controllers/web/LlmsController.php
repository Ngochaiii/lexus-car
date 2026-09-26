<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;

/**
 * /llms.txt — bản tóm tắt site dạng Markdown cho các LLM / AI search (GEO).
 * Sinh từ config/seo.php để giá và thông tin đại lý luôn khớp với trang.
 */
class LlmsController extends Controller
{
    public function index()
    {
        $org = config('seo.organization');
        $cars = config('seo.cars');

        $lines = [];
        $lines[] = '# ' . config('seo.site_name');
        $lines[] = '';
        $lines[] = '> ' . config('seo.default_description');
        $lines[] = '';
        $lines[] = "- Địa chỉ showroom: {$org['street']}, {$org['locality']}, {$org['region']}";
        $lines[] = "- Hotline / Zalo: {$org['phone_display']}";
        $lines[] = "- Email: {$org['email']}";
        $lines[] = "- Giờ mở cửa: {$org['opens']}–{$org['closes']}, tất cả các ngày trong tuần";
        $lines[] = '- Giá xe dưới đây là giá niêm yết tham khảo (VNĐ), chưa gồm chi phí lăn bánh. Cập nhật: ' . now()->format('m/Y');
        $lines[] = '';

        $lines[] = '## Dòng xe';
        $lines[] = '';
        foreach ($cars as $key => $car) {
            $price = number_format($car['price'] / 1_000_000_000, 2, ',', '.');
            $lines[] = "- [{$car['name']} – {$car['model']} {$car['model_year']}](" . route('products.' . $key) . "): "
                . "từ {$price} tỷ VNĐ; {$car['fuel']}, {$car['engine']}. {$car['description']}";
        }
        $lines[] = '';

        $lines[] = '## Dịch vụ & chính sách';
        $lines[] = '';
        $lines[] = '- [Đặt lịch lái thử](' . route('web.home.regis') . ')';
        $lines[] = '- [Công nghệ Lexus](' . route('tech_car.index') . ')';
        $lines[] = '- [Chính sách bảo hành](' . route('legal.warranty') . ')';
        $lines[] = '- [Chính sách giao xe](' . route('legal.delivery') . ')';
        $lines[] = '- [Chính sách đổi trả](' . route('legal.return') . ')';
        $lines[] = '- [Giới thiệu đại lý](' . route('web.about') . ')';
        $lines[] = '';

        $posts = Post::published()->latest('published_at')->take(20)->get(['slug', 'title', 'excerpt']);
        if ($posts->isNotEmpty()) {
            $lines[] = '## Bài viết';
            $lines[] = '';
            foreach ($posts as $post) {
                $excerpt = $post->excerpt ? ': ' . trim(strip_tags($post->excerpt)) : '';
                $lines[] = "- [{$post->title}](" . route('web.blogs.detail', $post->slug) . "){$excerpt}";
            }
            $lines[] = '';
        }

        return response(implode("\n", $lines))
            ->header('Content-Type', 'text/plain; charset=UTF-8');
    }
}
