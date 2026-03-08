<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.admin.header_css')
    @stack('css')
    <title>{{ 'admin ' }}</title>
</head>

<body>
    @include('layouts.admin.nav')
    @include('layouts.admin.header')
    <main class="nxl-container">
        @yield('content')
    </main>
    @include('layouts.admin.footer')
    @include('layouts.admin.footer_js')
    @stack('js')
</body>

</html>
