<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Support\SeoBuilder;

class ProductsController extends Controller
{
    private function carData(string $key, string $view)
    {
        $car = config("seo.cars.$key");
        $fullName = 'Lexus ' . $car['model'];
        $priceTy = number_format($car['price'] / 1_000_000_000, 2, ',', '.');

        $seo = [
            'title' => "{$fullName} {$car['model_year']} - Giá Lăn Bánh & Khuyến Mãi | Lexus Thăng Long",
            'description' => "{$fullName} {$car['model_year']} giá từ {$priceTy} tỷ. Đại lý chính hãng Lexus Thăng Long ưu đãi lớn, hỗ trợ trả góp 70%. Hotline: 0962.896.582.",
            'keywords' => "{$fullName}, giá {$fullName}, {$car['name']} {$car['model_year']}, mua {$car['name']} chính hãng, Lexus Thăng Long",
            'og_type' => 'product',
            'og_image' => SeoBuilder::siteUrl() . $car['image'],
            'schemas' => [
                SeoBuilder::carSchema($key),
                SeoBuilder::faqSchema(SeoBuilder::carFaq($key)),
            ],
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Dòng xe Lexus', 'url' => '/'],
            ['name' => $car['name'] . ' Series'],
        ];

        return view($view, compact('seo', 'breadcrumbs', 'car'));
    }

    public function index()
    {
        return $this->carData('rx', 'src.web.products.index');
    }

    public function lm()
    {
        return $this->carData('lm', 'src.web.products.lm');
    }

    public function nx()
    {
        return $this->carData('nx', 'src.web.products.nx');
    }

    public function lx()
    {
        return $this->carData('lx', 'src.web.products.lx');
    }

    public function ls()
    {
        return $this->carData('ls', 'src.web.products.ls');
    }

    public function gx()
    {
        return $this->carData('gx', 'src.web.products.gx');
    }

    public function es()
    {
        return $this->carData('es', 'src.web.products.es');
    }
}
