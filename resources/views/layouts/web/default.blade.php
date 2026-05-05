<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'Lexus Vietnam — Experience Amazing | Xe Sang Trọng Chính Hãng')</title>

    <!-- ✅ FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('web/assets/images/lexus_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('web/assets/images/lexus_logo.png') }}">

    @hasSection('seo_meta')
        @yield('seo_meta')
    @else
        <meta name="description" content="Khám phá bộ sưu tập xe Lexus chính hãng tại Việt Nam. RX 500h, NX 350h, ES 300h, LX 600 và nhiều dòng xe sang trọng khác. Dịch vụ hậu mãi đẳng cấp 5 sao.">
        <meta name="keywords" content="Lexus Vietnam, xe Lexus, RX 500h, NX 350h, ES 300h, xe sang trọng, xe hybrid, xe điện">
        <meta property="og:title" content="Lexus Vietnam — Experience Amazing">
        <meta property="og:description" content="Trải nghiệm sự hoàn hảo trong từng chi tiết với các mẫu xe sang trọng từ Lexus Vietnam.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://lexus-es.com">
        <meta property="og:image" content="https://lexus-es.com/web/assets/images/es-250-overview.jpg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <link rel="canonical" href="https://lexus-es.com">

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "AutoDealer",
                "name": "Lexus Vietnam",
                "description": "Đại lý xe Lexus chính hãng tại Việt Nam",
                "url": "https://lexus-es.com",
                "telephone": "1900123456",
                "address": {"@type":"PostalAddress","streetAddress":"360 Điện Biên Phủ","addressLocality":"Hà Nội","addressCountry":"VN"},
                "aggregateRating": {"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"2500"},
                "openingHours": "Mo-Su 08:00-18:00",
                "sameAs": ["https://facebook.com/lexusvn","https://youtube.com/lexusvn"]
            }
        </script>
    @endif

    @stack('css')
    @include('layouts.web.header_css')
</head>

<body>
    @include('layouts.web.nav')
    @include('layouts.web.breadrumb')
    @yield('content')
    @include('layouts.web.footer')
    @include('layouts.web.footer_js')
    @stack('js')
</body>

</html>
