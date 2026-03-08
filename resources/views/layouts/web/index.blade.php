<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexus Vietnam — Experience Amazing | Xe Sang Trọng Chính
        Hãng</title>
    <meta name="description"
        content="Khám phá bộ sưu tập xe Lexus chính hãng tại Việt Nam. RX 500h, NX 350h, ES 300h, LX 600 và nhiều dòng xe sang trọng khác. Dịch vụ hậu mãi đẳng cấp 5 sao.">
    <meta name="keywords" content="Lexus Vietnam, xe Lexus, RX 500h, NX 350h, ES 300h, xe sang trọng, xe hybrid, xe điện">
    <meta property="og:title" content="Lexus Vietnam — Experience Amazing">
    <meta property="og:description"
        content="Trải nghiệm sự hoàn hảo trong từng chi tiết với các mẫu xe sang trọng từ Lexus Vietnam.">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://lexus.com.vn/">

    <!-- JSON-LD Structured Data for SEO -->
    <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "AutoDealer",
            "name": "Lexus Vietnam",
            "description": "Đại lý xe Lexus chính hãng tại Việt Nam",
            "url": "https://lexus.com.vn",
            "telephone": "1900123456",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "360 Điện Biên Phủ",
                "addressLocality": "Hà Nội",
                "addressCountry": "VN"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "2500"
            },
            "openingHours": "Mo-Su 08:00-18:00",
            "sameAs": [
                "https://facebook.com/lexusvn",
                "https://youtube.com/lexusvn"
            ]
            }
        </script>
    @stack('css')
    @include('layouts.web.header_css')
</head>

<body>
    @include('layouts.web.nav')
    @include('layouts.web.header')
    @include('layouts.web.search')
    @yield('content')
    @include('layouts.web.footer')
    @include('layouts.web.footer_js')
    @stack('js')
</body>

</html>
