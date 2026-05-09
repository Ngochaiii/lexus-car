@extends('layouts.web.default')

@section('content')
<section class="legal-page" style="padding:60px 0;background:#fff;color:#111">
    <div class="container" style="max-width:880px">
        <h1 style="font-family:'Playfair Display',serif;font-size:2.4rem;margin-bottom:8px">{{ $pageTitle }}</h1>
        <p style="color:#666;margin-bottom:32px">Cập nhật ngày {{ now()->format('d/m/Y') }}</p>

        @foreach($sections as $sec)
            <article style="margin-bottom:28px">
                <h2 style="font-size:1.2rem;font-weight:700;margin-bottom:10px">{{ $sec['heading'] }}</h2>
                <p style="line-height:1.75;color:#222">{{ $sec['body'] }}</p>
            </article>
        @endforeach

        <div style="margin-top:48px;padding:24px;background:#f7f5f1;border-radius:12px">
            <p style="margin:0;color:#444">
                Mọi thắc mắc xin liên hệ
                <a href="tel:+84962896582" style="color:#a47c2a;font-weight:600">0962.896.582</a>
                hoặc
                <a href="mailto:contact@tuvangiaxelexus.com" style="color:#a47c2a;font-weight:600">contact@tuvangiaxelexus.com</a>.
            </p>
        </div>
    </div>
</section>
@endsection
