<?php

namespace App\Support;

class SeoBuilder
{
    public static function siteUrl(): string
    {
        return rtrim(config('seo.site_url'), '/');
    }

    public static function carSchema(string $key): array
    {
        $car = config("seo.cars.$key");
        if (!$car) {
            return [];
        }
        $siteUrl = self::siteUrl();

        return [
            '@context' => 'https://schema.org',
            '@type' => 'Car',
            'name' => 'Lexus ' . $car['model'] . ' ' . $car['model_year'],
            'description' => $car['description'],
            'image' => [$siteUrl . $car['image']],
            'brand' => ['@type' => 'Brand', 'name' => 'Lexus'],
            'manufacturer' => ['@type' => 'Organization', 'name' => 'Lexus'],
            'model' => $car['model'],
            'vehicleModelDate' => $car['model_year'],
            'fuelType' => $car['fuel'],
            'vehicleEngine' => [
                '@type' => 'EngineSpecification',
                'engineDisplacement' => $car['engine'],
            ],
            'offers' => [
                '@type' => 'Offer',
                'url' => $siteUrl . '/lexus-' . $key,
                'priceCurrency' => 'VND',
                'price' => $car['price'],
                'availability' => 'https://schema.org/InStock',
                'seller' => [
                    '@type' => 'AutoDealer',
                    'name' => config('seo.organization.name'),
                ],
            ],
        ];
    }

    /**
     * @param array<int, array{question:string, answer:string}> $items
     */
    public static function faqSchema(array $items): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn($i) => [
                '@type' => 'Question',
                'name' => $i['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $i['answer'],
                ],
            ], $items),
        ];
    }

    public static function carFaq(string $key): array
    {
        $car = config("seo.cars.$key");
        if (!$car) return [];

        $name = 'Lexus ' . $car['model'];
        $price = number_format($car['price'] / 1_000_000_000, 2, ',', '.');
        $org = config('seo.organization');

        return [
            [
                'question' => "Giá lăn bánh {$name} {$car['model_year']} bao nhiêu?",
                'answer' => "Giá niêm yết {$name} {$car['model_year']} từ {$price} tỷ VNĐ. Liên hệ {$org['phone_display']} để nhận báo giá lăn bánh chi tiết tại Hà Nội.",
            ],
            [
                'question' => "Mua {$name} chính hãng ở đâu uy tín?",
                'answer' => "{$org['name']} là đại lý ủy quyền chính hãng Lexus tại {$org['region']}. Showroom tại {$org['street']}, {$org['locality']}.",
            ],
            [
                'question' => "{$name} có chế độ bảo hành thế nào?",
                'answer' => "{$name} được bảo hành chính hãng 5 năm hoặc 100.000 km tùy điều kiện nào đến trước, kèm dịch vụ cứu hộ 24/7.",
            ],
            [
                'question' => "Lexus {$car['name']} có hỗ trợ trả góp không?",
                'answer' => "Có. {$org['name']} hỗ trợ trả góp đến 70% giá trị xe qua các ngân hàng đối tác, lãi suất ưu đãi, thủ tục nhanh trong ngày.",
            ],
        ];
    }
}
