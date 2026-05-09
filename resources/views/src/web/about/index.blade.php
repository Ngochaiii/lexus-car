@extends('layouts.web.default')

@php $org = config('seo.organization'); @endphp

@section('content')
<section class="about-hero" style="padding:80px 0;background:linear-gradient(135deg,#0a0a0a 0%,#1a1a1a 100%);color:#fff">
    <div class="container">
        <h1 style="font-family:'Playfair Display',serif;font-size:2.8rem;margin-bottom:16px">Lexus Thăng Long</h1>
        <p style="font-size:1.2rem;color:#c9b27a;letter-spacing:.05em">Đại lý ủy quyền chính hãng Lexus tại Hà Nội</p>
        <p style="max-width:780px;color:#bbb;line-height:1.8;margin-top:20px">
            Là một trong những đại lý ủy quyền uy tín hàng đầu của Lexus tại Việt Nam, Lexus Thăng Long mang đến trải nghiệm
            mua xe và hậu mãi đẳng cấp 5 sao theo tiêu chuẩn toàn cầu của thương hiệu Lexus.
        </p>
    </div>
</section>

<section style="padding:60px 0;background:#fff;color:#111">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;margin-bottom:20px">Thông tin doanh nghiệp</h2>
                <table style="width:100%;line-height:1.9">
                    <tr><td style="font-weight:600;width:200px">Tên đầy đủ:</td><td>{{ $org['legal_name'] }}</td></tr>
                    <tr><td style="font-weight:600">Tên viết tắt:</td><td>{{ $org['name'] }}</td></tr>
                    <tr><td style="font-weight:600">Mã số thuế:</td><td>010xxxxxxx</td></tr>
                    <tr><td style="font-weight:600">Địa chỉ:</td><td>{{ $org['street'] }}, {{ $org['locality'] }}, {{ $org['region'] }}</td></tr>
                    <tr><td style="font-weight:600">Hotline:</td><td><a href="tel:{{ $org['phone'] }}" style="color:#a47c2a;font-weight:600">{{ $org['phone_display'] }}</a></td></tr>
                    <tr><td style="font-weight:600">Email:</td><td><a href="mailto:{{ $org['email'] }}" style="color:#a47c2a">{{ $org['email'] }}</a></td></tr>
                    <tr><td style="font-weight:600">Giờ làm việc:</td><td>Thứ 2 - Chủ Nhật, {{ $org['opens'] }} - {{ $org['closes'] }}</td></tr>
                </table>
            </div>
            <div class="col-lg-6">
                <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;margin-bottom:20px">Vị trí showroom</h2>
                <div style="border-radius:12px;overflow:hidden;box-shadow:0 8px 24px rgba(0,0,0,.1)">
                    <iframe
                        src="https://www.google.com/maps?q={{ $org['lat'] }},{{ $org['lng'] }}&hl=vi&z=15&output=embed"
                        width="100%" height="360" style="border:0;display:block" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Bản đồ showroom Lexus Thăng Long"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:60px 0;background:#f7f5f1;color:#111">
    <div class="container">
        <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;margin-bottom:24px;text-align:center">Lý do chọn Lexus Thăng Long</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div style="background:#fff;padding:28px;border-radius:12px;height:100%">
                    <div style="font-size:2rem;color:#a47c2a"><i class="bi bi-patch-check-fill"></i></div>
                    <h3 style="font-size:1.1rem;font-weight:700;margin:12px 0">Đại lý ủy quyền chính hãng</h3>
                    <p style="color:#555;line-height:1.7">Có giấy chứng nhận đại lý ủy quyền trực tiếp từ Lexus Việt Nam, đảm bảo nguồn gốc, chất lượng và quyền lợi bảo hành toàn cầu.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background:#fff;padding:28px;border-radius:12px;height:100%">
                    <div style="font-size:2rem;color:#a47c2a"><i class="bi bi-shield-fill-check"></i></div>
                    <h3 style="font-size:1.1rem;font-weight:700;margin:12px 0">Bảo hành 5 năm / 100.000 km</h3>
                    <p style="color:#555;line-height:1.7">Cứu hộ Lexus 24/7, dịch vụ Lexus Care, bảo dưỡng định kỳ chuẩn quốc tế tại xưởng dịch vụ chính hãng.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background:#fff;padding:28px;border-radius:12px;height:100%">
                    <div style="font-size:2rem;color:#a47c2a"><i class="bi bi-people-fill"></i></div>
                    <h3 style="font-size:1.1rem;font-weight:700;margin:12px 0">Đội ngũ tư vấn chuyên sâu</h3>
                    <p style="color:#555;line-height:1.7">Tư vấn viên có nhiều năm kinh nghiệm, am hiểu từng dòng xe, hỗ trợ khách hàng từ lựa chọn cấu hình đến trả góp.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
