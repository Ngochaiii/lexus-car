@php $org = config('seo.organization'); @endphp
<footer class="footer-lexus">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="footer-brand">LEXUS THĂNG LONG</div>
                <p class="footer-desc">Đại lý ủy quyền chính hãng Lexus tại Hà Nội. Trải nghiệm sự tuyệt vời trong từng hành trình với những chiếc xe sang trọng và công nghệ tiên tiến nhất từ Lexus.</p>
                <address class="footer-address" style="font-style:normal;color:var(--lexus-text-muted);font-size:.9rem;line-height:1.7">
                    <div><i class="bi bi-geo-alt-fill"></i> {{ $org['street'] }}, {{ $org['locality'] }}, {{ $org['region'] }}</div>
                    <div><i class="bi bi-telephone-fill"></i> <a href="tel:{{ $org['phone'] }}" style="color:inherit">{{ $org['phone_display'] }}</a></div>
                    <div><i class="bi bi-envelope-fill"></i> <a href="mailto:{{ $org['email'] }}" style="color:inherit">{{ $org['email'] }}</a></div>
                    <div><i class="bi bi-building"></i> MST: 010xxxxxxx</div>
                </address>
                <div class="footer-socials">
                    <a href="{{ $org['social'][0] ?? '#' }}" aria-label="Facebook Lexus Thăng Long" rel="noopener"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $org['social'][1] ?? '#' }}" aria-label="YouTube Lexus Thăng Long" rel="noopener"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div>
                <h6 class="footer-title">Dòng xe</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('products.rx') }}">Lexus RX</a></li>
                    <li><a href="{{ route('products.nx') }}">Lexus NX</a></li>
                    <li><a href="{{ route('products.es') }}">Lexus ES</a></li>
                    <li><a href="{{ route('products.ls') }}">Lexus LS</a></li>
                    <li><a href="{{ route('products.lx') }}">Lexus LX</a></li>
                    <li><a href="{{ route('products.lm') }}">Lexus LM</a></li>
                    <li><a href="{{ route('products.gx') }}">Lexus GX</a></li>
                </ul>
            </div>
            <div>
                <h6 class="footer-title">Dịch vụ</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('web.about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('web.home.regis') }}">Đặt lịch lái thử</a></li>
                    <li><a href="{{ route('tech_car.index') }}">Công nghệ Lexus</a></li>
                    <li><a href="{{ route('web.blogs') }}">Tin tức & Cẩm nang</a></li>
                </ul>
            </div>
            <div>
                <h6 class="footer-title">Chính sách</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('legal.privacy') }}">Chính sách bảo mật</a></li>
                    <li><a href="{{ route('legal.terms') }}">Điều khoản sử dụng</a></li>
                    <li><a href="{{ route('legal.warranty') }}">Bảo hành xe</a></li>
                    <li><a href="{{ route('legal.return') }}">Chính sách đổi trả</a></li>
                    <li><a href="{{ route('legal.delivery') }}">Chính sách giao xe</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-trust" style="display:flex;flex-wrap:wrap;gap:24px;align-items:center;justify-content:center;padding:24px 0;border-top:1px solid rgba(255,255,255,.08);margin-top:24px">
            <a href="http://online.gov.vn/" target="_blank" rel="noopener" title="Đã thông báo Bộ Công Thương" style="display:inline-block">
                <img src="{{ asset_v('web/assets/images/lexus_logo.png') }}" alt="Đã thông báo Bộ Công Thương" width="120" height="45" loading="lazy" style="height:45px;width:auto;opacity:.85">
            </a>
            <span style="color:var(--lexus-text-muted);font-size:.85rem">Đại lý ủy quyền chính hãng Lexus Việt Nam</span>
        </div>

        <div class="footer-bottom">
            <span>© {{ date('Y') }} {{ $org['name'] }}. All rights reserved.</span>
            <a href="tel:{{ $org['phone'] }}" style="color:var(--lexus-text-muted)"><i class="bi bi-telephone-fill"></i> Hotline {{ $org['phone_display'] }}</a>
        </div>
    </div>
</footer>

<button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Lên đầu trang">
    <i class="bi bi-chevron-up"></i>
</button>
