<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Str;

/**
 * Chấm điểm SEO đơn giản — không thay thế công cụ chuyên dụng,
 * chỉ giúp admin self-check khi soạn bài.
 *
 * Trả về: ['score' => int 0-100, 'checks' => [['label', 'pass', 'hint?']]]
 */
class SeoAnalyzer
{
    public function analyze(Post $post): array
    {
        $checks = [];
        $title = $post->title ?? '';
        $metaDesc = $post->meta_description ?? '';
        $slug = $post->slug ?? '';
        $focus = strtolower(trim($post->focus_keyword ?? ''));
        $contentText = trim(strip_tags($post->content ?? ''));
        $contentLower = mb_strtolower($contentText);
        $titleLower = mb_strtolower($title);

        // 1. Title length
        $titleLen = mb_strlen($title);
        $checks[] = [
            'label' => 'Tiêu đề độ dài 30–60 ký tự',
            'pass' => $titleLen >= 30 && $titleLen <= 60,
            'hint' => "Hiện tại: {$titleLen} ký tự",
        ];

        // 2. Meta description length
        $mdLen = mb_strlen($metaDesc);
        $checks[] = [
            'label' => 'Meta description 120–160 ký tự',
            'pass' => $mdLen >= 120 && $mdLen <= 160,
            'hint' => $mdLen === 0 ? 'Chưa có' : "Hiện tại: {$mdLen} ký tự",
        ];

        // 3. Slug ngắn
        $checks[] = [
            'label' => 'Slug ngắn gọn (<= 60 ký tự, không dấu)',
            'pass' => $slug !== '' && mb_strlen($slug) <= 60 && $slug === Str::slug($slug),
        ];

        // 4-7: nếu có focus keyword
        if ($focus !== '') {
            $checks[] = [
                'label' => 'Focus keyword có trong tiêu đề',
                'pass' => str_contains($titleLower, $focus),
            ];
            $checks[] = [
                'label' => 'Focus keyword có trong meta description',
                'pass' => $metaDesc !== '' && str_contains(mb_strtolower($metaDesc), $focus),
            ];
            $checks[] = [
                'label' => 'Focus keyword có trong slug',
                'pass' => str_contains($slug, Str::slug($focus)),
            ];
            $checks[] = [
                'label' => 'Focus keyword xuất hiện trong nội dung',
                'pass' => str_contains($contentLower, $focus),
            ];
        } else {
            $checks[] = ['label' => 'Đã đặt focus keyword', 'pass' => false];
        }

        // 8. Content length
        $words = $contentText === '' ? 0 : str_word_count($contentText);
        $checks[] = [
            'label' => 'Nội dung tối thiểu 300 từ',
            'pass' => $words >= 300,
            'hint' => "Hiện tại: {$words} từ",
        ];

        // 9. Có heading (h2/h3) trong content
        $hasHeading = (bool) preg_match('/<h[23]\b/i', $post->content ?? '');
        $checks[] = [
            'label' => 'Có heading H2 hoặc H3 trong nội dung',
            'pass' => $hasHeading,
        ];

        // 10. Có ảnh featured
        $checks[] = [
            'label' => 'Có ảnh đại diện (featured image)',
            'pass' => !empty($post->featured_image),
        ];

        // 11. Ảnh trong content có alt
        $hasImg = preg_match_all('/<img\b[^>]*>/i', $post->content ?? '', $matches);
        if ($hasImg) {
            $allHaveAlt = true;
            foreach ($matches[0] as $img) {
                if (!preg_match('/\balt\s*=\s*"[^"]+"/i', $img)) {
                    $allHaveAlt = false;
                    break;
                }
            }
            $checks[] = [
                'label' => 'Tất cả ảnh trong nội dung có alt',
                'pass' => $allHaveAlt,
            ];
        }

        $passed = count(array_filter($checks, fn($c) => $c['pass']));
        $total = count($checks);
        $score = $total === 0 ? 0 : (int) round($passed * 100 / $total);

        return [
            'score' => $score,
            'passed' => $passed,
            'total' => $total,
            'checks' => $checks,
        ];
    }
}
