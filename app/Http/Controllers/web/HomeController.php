<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $seo = [
            'title' => 'Tư Vấn Mua Xe Lexus Chính Hãng - Bảng Giá & Khuyến Mãi 2026 | Lexus Thăng Long',
            'description' => 'Đại lý ủy quyền chính hãng Lexus Thăng Long. Báo giá lăn bánh các dòng RX 500h, NX 350h, ES 350h, LX 600, LM 350h, LS 500h, GX 550. Hotline: 0962.896.582.',
            'keywords' => 'Lexus Thăng Long, mua xe Lexus, giá xe Lexus 2026, RX 500h, NX 350h, ES 350h, LX 600, đại lý Lexus Hà Nội',
            'og_type' => 'website',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
        ];

        return view('src.web.home.index', compact('seo', 'breadcrumbs'));
    }

    public function regis()
    {
        $seo = [
            'title' => 'Đặt Lịch Lái Thử Xe Lexus Miễn Phí | Lexus Thăng Long',
            'description' => 'Đăng ký lái thử miễn phí các dòng xe Lexus tại showroom Lexus Thăng Long Hà Nội. Tư vấn chuyên sâu, nhận báo giá ưu đãi nhanh trong ngày.',
            'keywords' => 'lái thử Lexus, đặt lịch lái thử, đăng ký Lexus, Lexus Thăng Long',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Đặt lịch lái thử'],
        ];

        return view('src.web.home.regis', compact('seo', 'breadcrumbs'));
    }
}
