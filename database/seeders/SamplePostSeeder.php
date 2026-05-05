<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class SamplePostSeeder extends Seeder
{
    public function run(): void
    {
        $content = '<h2>Giới thiệu</h2>'
            . '<p>Đây là bài viết <strong>test</strong> được tạo tự động để kiểm tra template Lexus có render đúng không. '
            . 'Bài viết được lấy từ DB qua admin module mới và hiển thị qua route <code>/blogs/{slug}</code>.</p>'
            . '<h2>Hệ thống DIRECT4</h2>'
            . '<p>Lexus DIRECT4 là công nghệ kiểm soát lực kéo bốn bánh tiên tiến với khả năng phân phối công suất linh hoạt từ 100:0 đến 0:100 trong tích tắc.</p>'
            . '<blockquote><p>"RX 500h F SPORT PERFORMANCE là minh chứng cho triết lý Experience Amazing của Lexus."</p></blockquote>'
            . '<h2>Thiết kế ngoại thất</h2>'
            . '<p>Ngôn ngữ thiết kế thế hệ mới với những đường nét sắc cạnh, kết hợp cùng bộ la-zăng hợp kim 21 inch matte black.</p>'
            . '<ul><li><strong>Cản trước F SPORT</strong> — thiết kế riêng với khe gió lớn</li>'
            . '<li><strong>Gương chiếu hậu Gloss Black</strong></li>'
            . '<li><strong>Cánh gió đuôi tích hợp</strong></li>'
            . '<li><strong>Ống xả kép thể thao</strong></li></ul>'
            . '<h2>Kết luận</h2>'
            . '<p>RX 500h F SPORT PERFORMANCE xứng đáng là <em>chiếc Lexus thú vị nhất từ trước đến nay</em>, '
            . 'kết hợp hoàn hảo giữa hiệu năng cao và sự sang trọng truyền thống.</p>';

        $post = Post::create([
            'title' => 'Lexus RX 500h F SPORT — Định nghĩa mới về SUV hiệu năng cao',
            'slug' => Post::makeUniqueSlug('lexus-rx-500h-f-sport'),
            'excerpt' => 'Khám phá những đột phá công nghệ trên RX 500h với hệ thống DIRECT4, động cơ hybrid tăng áp 2.4L và thiết kế ngoại thất thể thao.',
            'content' => $content,
            'status' => 'published',
            'published_at' => now()->subDays(2),
            'reading_time' => Post::calcReadingTime($content),
            'meta_title' => 'Lexus RX 500h F SPORT — Đánh giá chi tiết 2026',
            'meta_description' => 'Đánh giá chi tiết Lexus RX 500h F SPORT PERFORMANCE: hệ thống DIRECT4, động cơ hybrid 371HP, thiết kế thể thao và trải nghiệm lái đẳng cấp.',
            'focus_keyword' => 'Lexus RX 500h',
            'meta_keywords' => 'Lexus RX 500h, F SPORT, DIRECT4, SUV hybrid, Lexus Vietnam',
        ]);

        $post->syncTagsByName(['Lexus', 'RX 500h', 'F SPORT', 'Hybrid', 'SUV']);

        $this->command->info("Created post id={$post->id}, slug={$post->slug}");
    }
}
