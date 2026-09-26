<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $seo = [
            'title' => 'Giới Thiệu Lexus Thăng Long - Đại Lý Ủy Quyền Chính Hãng Hà Nội | Lexus Thăng Long',
            'description' => 'Lexus Thăng Long - đại lý ủy quyền chính hãng Lexus tại Hà Nội. Showroom tại Phạm Hùng, Nam Từ Liêm, đội ngũ chuyên gia tư vấn xe sang.',
            'keywords' => 'giới thiệu Lexus Thăng Long, đại lý Lexus Hà Nội, showroom Lexus',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Giới thiệu Lexus Thăng Long'],
        ];

        return view('src.web.about.index', compact('seo', 'breadcrumbs'));
    }
}
