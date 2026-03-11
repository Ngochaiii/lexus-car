<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarHut - Fast, Simple and Easy</title>
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
