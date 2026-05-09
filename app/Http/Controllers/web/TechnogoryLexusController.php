<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class TechnogoryLexusController extends Controller
{
    public function index()
    {
        $seo = [
            'title' => 'Công Nghệ Lexus - Hybrid, An Toàn, Lexus Safety System+ | Lexus Thăng Long',
            'description' => 'Khám phá các công nghệ tiên phong của Lexus: hệ thống Hybrid Self-Charging, Lexus Safety System+, hệ truyền động Direct4 và nội thất Takumi.',
            'keywords' => 'công nghệ Lexus, Lexus Hybrid, Lexus Safety System, Direct4, Takumi',
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => 'Công nghệ Lexus'],
        ];

        return view('src.web.tech-car.index', compact('seo', 'breadcrumbs'));
    }
}
