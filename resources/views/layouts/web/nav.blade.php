<!-- NAV -->
<nav class="nav-lx" id="nav">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="lexus-homepage.html" class="n-brand">LEXUS</a>
            <div class="d-none d-lg-flex align-items-center gap-1">
                <a href="lexus-homepage.html" class="n-link">Trang chủ</a>
                <a href="lexus-homepage.html#models" class="n-link">Sản phẩm</a>
                <a href="lexus-rx500h-detail.html" class="n-link">RX Series</a>
                <a href="#" class="n-link a">Công nghệ</a>
                <a href="lexus-homepage.html#news" class="n-link">Tin tức</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="btn-gold d-none d-md-inline-flex">Đặt lịch lái thử</a>
                <button id="mobileMenuBtn" class="d-lg-none" style="background:none;border:none;color:#fff;font-size:1.4rem;padding:4px 8px;z-index:1001;position:relative" aria-label="Menu"><i class="bi bi-list" id="menuIcon"></i></button>
            </div>
        </div>
    </div>
</nav>

<!-- MOBILE MENU DRAWER -->
<div id="mobileDrawer" style="
    position:fixed;inset:0;z-index:999;
    background:rgba(10,10,10,.97);
    backdrop-filter:blur(24px);
    display:flex;flex-direction:column;
    padding:80px 32px 40px;
    transform:translateX(100%);
    transition:transform .35s cubic-bezier(.4,0,.2,1);
    pointer-events:none;
">
    <div style="flex:1;display:flex;flex-direction:column;gap:4px">
        <a href="lexus-homepage.html" class="mob-lk">Trang chủ</a>
        <a href="lexus-homepage.html#models" class="mob-lk">Sản phẩm</a>
        <a href="lexus-rx500h-detail.html" class="mob-lk">RX Series</a>
        <a href="#" class="mob-lk active">Công nghệ</a>
        <a href="lexus-homepage.html#news" class="mob-lk">Tin tức</a>
    </div>
    <a href="#" style="
        display:block;background:var(--gold);color:var(--black);
        text-align:center;padding:16px;border-radius:var(--r);
        font-weight:700;font-size:.9rem;letter-spacing:.05em;
        margin-top:24px;
    ">Đặt lịch lái thử</a>
    <div style="margin-top:20px;display:flex;gap:16px;justify-content:center">
        <a href="#" style="color:var(--muted);font-size:1.1rem"><i class="bi bi-facebook"></i></a>
        <a href="#" style="color:var(--muted);font-size:1.1rem"><i class="bi bi-instagram"></i></a>
        <a href="#" style="color:var(--muted);font-size:1.1rem"><i class="bi bi-youtube"></i></a>
    </div>
</div>
<style>
    .mob-lk{
        display:block;color:var(--text);font-size:1.2rem;font-weight:600;
        padding:16px 0;border-bottom:1px solid var(--gray);
        text-decoration:none;transition:color .2s;letter-spacing:.02em;
    }
    .mob-lk:hover,.mob-lk.active{color:var(--gold)}
    .mob-lk.active{font-family:'Playfair Display',serif;font-size:1.3rem}
    body.menu-open{overflow:hidden}
</style>
