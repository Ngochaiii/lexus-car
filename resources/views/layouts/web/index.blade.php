<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    @include('partials.seo')

    {{-- Performance hints --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">

    {{-- Preload hero image (homepage LCP) --}}
    <link rel="preload" as="image" href="{{ asset('web/assets/images/image-20210204180128-1.jpeg') }}" fetchpriority="high">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17996413595">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17996413595');
</script>
    @stack('preload')
    @stack('css')
    @include('layouts.web.header_css')

    @include('partials.tracking-head')
</head>

<body>
    @include('partials.tracking-body')
    @include('layouts.web.nav')
    @include('layouts.web.header')
    @include('layouts.web.search')
    <main>
        @yield('content')
    </main>
    @include('layouts.web.footer')
    @include('layouts.web.footer_js')
    @stack('js')
</body>

</html>
