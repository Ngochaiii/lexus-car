@extends('layouts.web.default')

@section('content')
    <!-- HERO -->
<section class="hero">
    <div class="hero-grid"></div><div class="hero-glow"></div><div class="hero-glow2"></div>
    <div class="container hero-c">
        <div class="row">
            <div class="col-lg-7">
                <div class="h-over">Lexus Safety System+</div>
                <h1 class="h-title">Công Nghệ<br><span class="hl it">Tiên Phong</span><br>Bảo Vệ Bạn</h1>
                <p class="h-desc">Hệ sinh thái công nghệ toàn diện của Lexus — từ an toàn chủ động, chiếu sáng thông minh đến hỗ trợ lái xe thế hệ mới — mang đến trải nghiệm an toàn tuyệt đối trên mọi hành trình.</p>
                <div class="h-stats">
                    <div class="hsi"><div class="hsi-n">19</div><div class="hsi-l">Công nghệ</div></div>
                    <div class="hsi"><div class="hsi-n">5</div><div class="hsi-l">Hệ thống</div></div>
                    <div class="hsi"><div class="hsi-n">360°</div><div class="hsi-l">Bảo vệ</div></div>
                </div>
                <div class="h-btns">
                    <a href="#tech-grid" class="btn-pl"><i class="bi bi-grid-3x3-gap"></i> Khám phá tất cả</a>
                    <a href="lexus-rx500h-detail.html" class="btn-ol"><i class="bi bi-car-front"></i> Xem trên RX Series</a>
                </div>
            </div>
        </div>
    </div>
    <div class="h-float">
        <div class="fb"><div class="fb-ic"><i class="bi bi-speedometer2"></i></div><div><div class="fb-ab">DRCC</div><div class="fb-nm">Hành Trình Thích Ứng</div></div><div class="fb-dot"></div></div>
        <div class="fb"><div class="fb-ic"><i class="bi bi-eye"></i></div><div><div class="fb-ab">LTA</div><div class="fb-nm">Theo Dõi Làn Đường</div></div><div class="fb-dot"></div></div>
        <div class="fb"><div class="fb-ic"><i class="bi bi-shield-check"></i></div><div><div class="fb-ab">PCS</div><div class="fb-nm">Tiền Va Chạm</div></div><div class="fb-dot"></div></div>
        <div class="fb"><div class="fb-ic"><i class="bi bi-lightbulb"></i></div><div><div class="fb-ab">AHS</div><div class="fb-nm">Đèn Pha Thích Ứng</div></div><div class="fb-dot"></div></div>
        <div class="fb"><div class="fb-ic"><i class="bi bi-p-circle"></i></div><div><div class="fb-ab">PKSB</div><div class="fb-nm">Phanh An Toàn Đỗ Xe</div></div><div class="fb-dot"></div></div>
    </div>
</section>

<!-- LSS -->
<section class="lss-sec">
    <div class="container" style="position:relative;z-index:1">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="lss-tag">Lexus Safety System+</div>
                <h2 class="lss-title">Ba Trụ Cột<br><span style="color:var(--gold)">Bảo Vệ Hoàn Hảo</span></h2>
                <p class="lss-desc">Lexus Safety System+ là hệ sinh thái công nghệ an toàn thế hệ mới, tích hợp radar, camera và AI để tạo nên lá chắn bảo vệ 360°.</p>
                <a href="#tech-grid" class="btn-pl"><i class="bi bi-arrow-down-circle"></i> Xem chi tiết các công nghệ</a>
            </div>
            <div class="col-lg-6">
                <div class="lss-pills">
                    <div class="lss-pill"><div class="lp-ic"><i class="bi bi-eye-fill"></i></div><div class="lp-t">Phát Hiện Sớm</div><div class="lp-d">Radar + Camera theo dõi 360° môi trường xung quanh liên tục.</div></div>
                    <div class="lss-pill"><div class="lp-ic"><i class="bi bi-cpu-fill"></i></div><div class="lp-t">Xử Lý Thông Minh</div><div class="lp-d">AI phân tích tình huống và đưa ra phản ứng tối ưu trong tích tắc.</div></div>
                    <div class="lss-pill"><div class="lp-ic"><i class="bi bi-shield-fill-check"></i></div><div class="lp-t">Can Thiệp Kịp Thời</div><div class="lp-d">Cảnh báo, hỗ trợ lái hoặc phanh tự động để ngăn ngừa tai nạn.</div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FILTER -->
<div class="filter-wrap" id="tech-filter">
    <div class="container pb-3">
        <div class="fbar">
            <button class="fbtn a" data-f="all"><i class="bi bi-grid-3x3-gap-fill"></i> Tất cả <span class="fcnt">19</span></button>
            <button class="fbtn" data-f="safety"><i class="bi bi-shield-check"></i> An Toàn <span class="fcnt">7</span></button>
            <button class="fbtn" data-f="lighting"><i class="bi bi-lightbulb-fill"></i> Chiếu Sáng <span class="fcnt">2</span></button>
            <button class="fbtn" data-f="protection"><i class="bi bi-heart-pulse-fill"></i> Bảo Vệ <span class="fcnt">3</span></button>
            <button class="fbtn" data-f="comfort"><i class="bi bi-stars"></i> Tiện Nghi <span class="fcnt">5</span></button>
            <button class="fbtn" data-f="parking"><i class="bi bi-p-square-fill"></i> Đỗ Xe <span class="fcnt">2</span></button>
        </div>
    </div>
</div>

<!-- TECH GRID -->
<section class="tech-sec">
<div class="container">

<!-- ═══ AN TOÀN CHỦ ĐỘNG ═══ -->
<div class="cgroup" data-category="safety">
    <div class="c-hdr">
        <div class="c-ic"><i class="bi bi-shield-check"></i></div>
        <div class="c-ttl">An Toàn Chủ Động</div>
        <span class="c-cnt">7 công nghệ</span>
        <div class="c-ln"></div>
    </div>
    <div class="row g-4">

        <!-- LTA -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="LTA" src="{{asset('web/assets/images/lta.webp')}}" alt="Hệ thống LTA — Theo dõi làn đường">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="10" y="30" width="100" height="20" rx="3" fill="#C4A052" opacity=".15"/>
                        <line x1="60" y1="0" x2="60" y2="80" stroke="#C4A052" stroke-width="1.5" stroke-dasharray="6 4" opacity=".4"/>
                        <line x1="30" y1="0" x2="30" y2="80" stroke="#888" stroke-width="1" stroke-dasharray="4 4" opacity=".3"/>
                        <line x1="90" y1="0" x2="90" y2="80" stroke="#888" stroke-width="1" stroke-dasharray="4 4" opacity=".3"/>
                        <rect x="47" y="33" width="26" height="14" rx="2" fill="#C4A052" opacity=".5"/>
                        <path d="M55 36 L60 42 L65 36" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".8"/>
                        <circle cx="60" cy="20" r="8" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".6"/>
                        <path d="M57 20 L59 22 L63 17" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".8"/>
                    </svg>
                    <div class="ph-lbl">LTA — Theo Dõi Làn Đường</div>
                </div>
                <div class="img-swap-hint">img slot · LTA</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">LTA <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-arrows-collapse-vertical"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Hỗ Trợ Theo Dõi Làn Đường</div><div class="tc-ds">Khi di chuyển trên đường cao tốc hay cung đường không hiển thị rõ vạch kẻ đường, LTA cảnh báo người lái về khả năng lệch làn và hỗ trợ điều chỉnh lái. Khi DRCC được kích hoạt, hệ thống hỗ trợ giữ xe ở trung tâm làn đường mượt mà, đồng thời hỗ trợ di chuyển theo xe phía trước khi khó nhận ra vạch kẻ đường.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- DRCC -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="DRCC" src="{{asset('web/assets/images/lexus-lm350-dynamic-radar-cruise-control.jpg')}}" alt="Hệ thống DRCC">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="5" y="42" width="50" height="22" rx="4" fill="#C4A052" opacity=".2"/>
                        <rect x="65" y="30" width="50" height="22" rx="4" fill="#888" opacity=".15"/>
                        <path d="M55 53 Q60 45 65 41" stroke="#C4A052" stroke-width="2" stroke-dasharray="5 3" opacity=".7"/>
                        <circle cx="60" cy="37" r="6" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".6"/>
                        <text x="60" y="41" text-anchor="middle" fill="#C4A052" font-size="8" opacity=".8">↔</text>
                        <path d="M10 70 Q30 55 60 53 Q90 51 110 45" stroke="#C4A052" stroke-width="1" opacity=".3" fill="none"/>
                    </svg>
                    <div class="ph-lbl">DRCC — Hành Trình Chủ Động</div>
                </div>
                <div class="img-swap-hint">img slot · DRCC</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">DRCC <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-speedometer2"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Điều Khiển Hành Trình Chủ Động</div><div class="tc-ds">Ngoài duy trì tốc độ không đổi, DRCC sử dụng ra-đa và camera để phát hiện phương tiện phía trước và chủ động duy trì khoảng cách thích hợp ở mọi dải tốc độ. Kết hợp với LTA tạo nên trải nghiệm lái bán tự động hoàn hảo trên cao tốc và đường dài.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- PCS -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="PCS" src="{{asset('web/assets/images/lexus-lm-500h-antoan.jpg')}}" alt="Hệ thống PCS">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <circle cx="90" cy="30" r="15" stroke="#ef4444" stroke-width="1.5" fill="none" opacity=".5"/>
                        <circle cx="90" cy="30" r="8" stroke="#ef4444" stroke-width="1" fill="rgba(239,68,68,.15)" opacity=".7"/>
                        <rect x="10" y="42" width="50" height="22" rx="4" fill="#C4A052" opacity=".25"/>
                        <path d="M60 53 L75 38" stroke="#ef4444" stroke-width="2" stroke-dasharray="4 2" opacity=".8"/>
                        <text x="85" y="67" fill="#ef4444" font-size="9" opacity=".7">⚠</text>
                        <path d="M20 52 L25 47 L30 52" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".6"/>
                    </svg>
                    <div class="ph-lbl">PCS — An Toàn Tiền Va Chạm</div>
                </div>
                <div class="img-swap-hint">img slot · PCS</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">PCS <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-exclamation-triangle"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống An Toàn Tiền Va Chạm</div><div class="tc-ds">Khi radar bước sóng milimet và camera đơn phát hiện khả năng va chạm với phương tiện, người đi bộ hoặc xe đạp phía trước, hệ thống cảnh báo và kích hoạt phanh hỗ trợ. Nếu không thể đạp phanh, PCS chủ động phanh để tránh hoặc giảm thiểu va chạm tối đa.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- BSM -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="BSM" src="{{asset('web/assets/images/canh-bao-diem-mu-5.webp')}}" alt="Hệ thống BSM">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="40" y="25" width="40" height="30" rx="4" fill="#C4A052" opacity=".2"/>
                        <path d="M15 40 Q25 35 40 38" stroke="#fbbf24" stroke-width="2" fill="none" opacity=".7"/>
                        <circle cx="15" cy="40" r="6" fill="#fbbf24" opacity=".4"/>
                        <circle cx="15" cy="40" r="3" fill="#fbbf24" opacity=".8"/>
                        <rect x="72" y="28" width="6" height="3" rx="1" fill="#fbbf24" opacity=".9"/>
                        <path d="M78 29.5 L84 29.5" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <text x="85" y="33" fill="#fbbf24" font-size="8" opacity=".8">●</text>
                    </svg>
                    <div class="ph-lbl">BSM — Cảnh Báo Điểm Mù</div>
                </div>
                <div class="img-swap-hint">img slot · BSM</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">BSM <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-eye-slash"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Cảnh Báo Điểm Mù</div><div class="tc-ds">Radar bước sóng milimet đặt ở cản sau phát hiện xe chạy ở làn bên cạnh đang di chuyển vào vùng không thể nhìn thấy trên gương chiếu hậu. Khi có xe tiến vào điểm mù, đèn cảnh báo LED trên gương chiếu hậu cùng phía ngay lập tức kích hoạt để bảo vệ người lái khi chuyển làn.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- LDA -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="LDA" src="{{asset('web/assets/images/anh-2-4.jpg')}}" alt="Hệ thống LDA">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <line x1="40" y1="5" x2="40" y2="75" stroke="#888" stroke-width="1" stroke-dasharray="5 3" opacity=".4"/>
                        <line x1="80" y1="5" x2="80" y2="75" stroke="#888" stroke-width="1" stroke-dasharray="5 3" opacity=".4"/>
                        <rect x="48" y="30" width="24" height="16" rx="3" fill="#C4A052" opacity=".25"/>
                        <path d="M48 38 L30 38" stroke="#ef4444" stroke-width="2" stroke-dasharray="4 2" opacity=".8"/>
                        <circle cx="27" cy="38" r="5" stroke="#ef4444" stroke-width="1.5" fill="none" opacity=".7"/>
                        <text x="24" y="41" fill="#ef4444" font-size="8" opacity=".9">!</text>
                        <path d="M52 35 L45 30 L52 25" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".7"/>
                    </svg>
                    <div class="ph-lbl">LDA — Cảnh Báo Lệch Làn</div>
                </div>
                <div class="img-swap-hint">img slot · LDA</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">LDA <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-arrow-left-right"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Cảnh Báo Lệch Làn Đường</div><div class="tc-ds">Lane Departure Alert cảnh báo người lái về khả năng lệch làn thông qua âm thanh, đèn báo và rung vô lăng. Hệ thống có thể hỗ trợ một phần hoạt động đánh lái để duy trì xe trong làn đường hiện tại, giúp quá trình điều khiển xe thoải mái và an toàn hơn.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- RCTA -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="RCTA" src="{{asset('web/assets/images/he-thong-rcta-1.webp')}}" alt="Hệ thống RCTA">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="40" y="10" width="40" height="25" rx="4" fill="#C4A052" opacity=".2"/>
                        <path d="M5 60 L45 45" stroke="#3b82f6" stroke-width="2" opacity=".7"/>
                        <circle cx="5" cy="60" r="6" fill="#3b82f6" opacity=".4"/>
                        <path d="M115 55 L75 45" stroke="#3b82f6" stroke-width="2" opacity=".7" stroke-dasharray="5 3"/>
                        <circle cx="115" cy="55" r="6" fill="#3b82f6" opacity=".3"/>
                        <path d="M45 44 L50 40 L50 48" stroke="#fbbf24" stroke-width="1.5" fill="none" opacity=".8"/>
                        <text x="55" y="70" fill="#3b82f6" font-size="8" opacity=".8">RCTA</text>
                    </svg>
                    <div class="ph-lbl">RCTA — Cảnh Báo Khi Lùi</div>
                </div>
                <div class="img-swap-hint">img slot · RCTA</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">RCTA <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-arrows-angle-contract"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Cảnh Báo Phương Tiện Cắt Ngang Khi Lùi</div><div class="tc-ds">RCTA sử dụng radar bước sóng milimet ở cản sau để phát hiện phương tiện đang đến gần ở khu vực khó quan sát phía sau xe khi lùi. Khi phát hiện mối nguy, hệ thống cảnh báo bằng âm thanh và đèn báo trên gương chiếu hậu, hỗ trợ quá trình lùi xe an toàn hơn nhiều.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- STOP WARNING -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="STOP_WARNING" src="{{asset('web/assets/images/cruise-control-la-gi-3.webp')}}" alt="Cảnh báo khi dừng">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="40" y="20" width="40" height="25" rx="4" fill="#C4A052" opacity=".2"/>
                        <path d="M10 70 L40 55" stroke="#22c55e" stroke-width="2" stroke-dasharray="5 3" opacity=".8"/>
                        <circle cx="10" cy="70" r="5" fill="#22c55e" opacity=".5"/>
                        <rect x="72" y="48" width="3" height="6" rx="1" fill="#fbbf24" opacity=".9"/>
                        <path d="M75 51 L82 48" stroke="#fbbf24" stroke-width="1.5" opacity=".7"/>
                        <circle cx="85" cy="47" r="4" stroke="#fbbf24" stroke-width="1.5" fill="rgba(251,191,36,.15)" opacity=".8"/>
                        <text x="46" y="75" fill="#22c55e" font-size="7" opacity=".8">⬡ STOP WARN</text>
                    </svg>
                    <div class="ph-lbl">Cảnh Báo Khi Dừng</div>
                </div>
                <div class="img-swap-hint">img slot · STOP_WARNING</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:1rem;">STOP <span class="tc-dot dot-sf"></span></div><div class="tc-icon"><i class="bi bi-stop-circle"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Chức Năng Cảnh Báo Khi Dừng</div><div class="tc-ds">Hệ thống sử dụng cảm biến để phát hiện xe đạp và các phương tiện đang tiến đến từ phía sau khi xe đang dừng. Nếu mở cửa khi có nguy cơ va chạm, đèn gương nhấp nháy gấp và âm thanh cảnh báo phát ra để bảo vệ người trong xe, giúp tránh các tai nạn không đáng có.</div></div>
            <div class="tc-ft"><span class="tc-tag t-sf">An Toàn</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

    </div>
</div>

<!-- ═══ CHIẾU SÁNG ═══ -->
<div class="cgroup" data-category="lighting">
    <div class="c-hdr">
        <div class="c-ic" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24;"><i class="bi bi-lightbulb-fill"></i></div>
        <div class="c-ttl">Chiếu Sáng Thông Minh</div>
        <span class="c-cnt" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24;">2 công nghệ</span>
        <div class="c-ln"></div>
    </div>
    <div class="row g-4">

        <!-- AHS -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="AHS" src="{{asset('web/assets/images/cong-nghe-den-pha-tu-dong-thich-ung-ahs-tren-xe-lexus-2.webp')}}" alt="Hệ thống AHS BladeScan">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <path d="M20 40 L70 20 L70 60 Z" fill="#fbbf24" opacity=".15"/>
                        <path d="M20 40 L65 25" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <path d="M20 40 L65 35" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <path d="M20 40 L65 40" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <path d="M20 40 L65 45" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <path d="M20 40 L65 55" stroke="#fbbf24" stroke-width="1.5" opacity=".6"/>
                        <rect x="90" y="25" width="20" height="30" rx="3" fill="#C4A052" opacity=".2"/>
                        <path d="M70 25 L88 28" stroke="#fbbf24" stroke-width="1" stroke-dasharray="3 2" opacity=".4"/>
                        <path d="M70 55 L88 52" stroke="#fbbf24" stroke-width="1" stroke-dasharray="3 2" opacity=".4"/>
                        <text x="65" y="75" fill="#fbbf24" font-size="7" opacity=".7">AHS BladeScan</text>
                        <circle cx="20" cy="40" r="5" fill="#fbbf24" opacity=".6"/>
                    </svg>
                    <div class="ph-lbl">AHS BladeScan — Đèn Pha Thích Ứng</div>
                </div>
                <div class="img-swap-hint">img slot · AHS</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">AHS <span class="tc-dot dot-lt"></span></div><div class="tc-icon" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24;"><i class="bi bi-lightbulb"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Đèn Pha Tự Động Thích Ứng BladeScan</div><div class="tc-ds">AHS theo dõi đèn pha xe ngược chiều, đèn hậu xe cùng chiều và ánh sáng xung quanh. Khi phát hiện xe trong vùng chiếu sáng, hệ thống chủ động bật/tắt 8 đèn LED phía trên và 16 đèn LED phía dưới ở mỗi bên để tối ưu hoá chiếu sáng, tránh rọi thẳng vào xe khác mà vẫn đảm bảo tầm nhìn tối ưu cho người lái.</div></div>
            <div class="tc-ft"><span class="tc-tag t-lt">Chiếu Sáng</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- LED Corner -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="LED_CORNER" src="{{asset('web/assets/images/Den-LED-xe-Lexus.jpg')}}" alt="Đèn góc LED">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <path d="M70 50 L20 20" stroke="#fbbf24" stroke-width="2" opacity=".6"/>
                        <path d="M70 50 L30 15" stroke="#fbbf24" stroke-width="1.5" stroke-dasharray="4 2" opacity=".5"/>
                        <path d="M70 50 L120 20" stroke="#fbbf24" stroke-width="2" opacity=".6"/>
                        <path d="M70 50 L110 15" stroke="#fbbf24" stroke-width="1.5" stroke-dasharray="4 2" opacity=".5"/>
                        <path d="M40 65 L70 50 L100 65" fill="#C4A052" opacity=".2"/>
                        <circle cx="70" cy="50" r="8" fill="#fbbf24" opacity=".2"/>
                        <circle cx="70" cy="50" r="4" fill="#fbbf24" opacity=".6"/>
                        <path d="M30 55 Q40 60 55 58" stroke="#888" stroke-width="1" stroke-dasharray="3 2" opacity=".4"/>
                        <text x="45" y="75" fill="#fbbf24" font-size="7" opacity=".7">LED Corner Light</text>
                    </svg>
                    <div class="ph-lbl">LED Corner — Chiếu Sáng Góc Cua</div>
                </div>
                <div class="img-swap-hint">img slot · LED_CORNER</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:1.1rem;">LED+ <span class="tc-dot dot-lt"></span></div><div class="tc-icon" style="background:rgba(251,191,36,.08);border-color:rgba(251,191,36,.2);color:#fbbf24;"><i class="bi bi-brightness-high"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Đèn Góc LED & Chế Độ Chiếu Sáng Đa Thời Tiết</div><div class="tc-ds">Đèn góc LED phân bổ thêm ánh sáng cho phía trước và hai bên xe, giúp người lái yên tâm khi rẽ trái/phải vào ban đêm và khi trời mưa. Chế độ đa thời tiết giảm chói do đèn pha trong điều kiện sương mù ban đêm, đồng thời cung cấp đủ ánh sáng phía trước để có tầm nhìn tối ưu.</div></div>
            <div class="tc-ft"><span class="tc-tag t-lt">Chiếu Sáng</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

    </div>
</div>

<!-- ═══ BẢO VỆ VA CHẠM ═══ -->
<div class="cgroup" data-category="protection">
    <div class="c-hdr">
        <div class="c-ic" style="background:rgba(239,68,68,.08);border-color:rgba(239,68,68,.2);color:#ef4444;"><i class="bi bi-heart-pulse-fill"></i></div>
        <div class="c-ttl">Bảo Vệ Va Chạm</div>
        <span class="c-cnt" style="background:rgba(239,68,68,.08);border-color:rgba(239,68,68,.2);color:#ef4444;">3 công nghệ</span>
        <div class="c-ln"></div>
    </div>
    <div class="row g-4">

        <!-- PUH -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="PUH" src="{{asset('web/assets/images/xanh.jpg')}}" alt="Kết cấu mui xe an toàn PUH">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <path d="M20 60 Q60 55 100 60" stroke="#C4A052" stroke-width="2" fill="none" opacity=".5"/>
                        <path d="M30 55 Q60 30 90 55" stroke="#C4A052" stroke-width="2" fill="rgba(196,160,82,.1)" opacity=".8"/>
                        <path d="M40 55 Q60 42 80 55" stroke="#ef4444" stroke-width="1.5" stroke-dasharray="4 2" fill="none" opacity=".7"/>
                        <line x1="40" y1="55" x2="40" y2="42" stroke="#ef4444" stroke-width="1" stroke-dasharray="2 2" opacity=".6"/>
                        <line x1="80" y1="55" x2="80" y2="42" stroke="#ef4444" stroke-width="1" stroke-dasharray="2 2" opacity=".6"/>
                        <path d="M55 25 L60 15 L65 25" stroke="#ef4444" stroke-width="2" fill="none" opacity=".8"/>
                        <text x="40" y="75" fill="#ef4444" font-size="7" opacity=".8">PUH Pop-up Hood</text>
                    </svg>
                    <div class="ph-lbl">PUH — Mui Xe Bảo Vệ Người Đi Bộ</div>
                </div>
                <div class="img-swap-hint">img slot · PUH</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">PUH <span class="tc-dot dot-pr"></span></div><div class="tc-icon" style="background:rgba(239,68,68,.08);border-color:rgba(239,68,68,.2);color:#ef4444;"><i class="bi bi-person-arms-up"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Kết Cấu Mui Xe An Toàn</div><div class="tc-ds">Kết cấu mui xe an toàn mang tính đột phá được thiết kế thể thao với mui xe thấp, đồng thời bảo vệ người đi bộ khi xảy ra va chạm trực diện. Khi cảm biến xác định va chạm với người đi bộ, mui xe ngay lập tức bật lên tại bốn điểm tựa để tạo không gian hấp thụ lực tác động, giảm thiểu chấn thương.</div></div>
            <div class="tc-ft"><span class="tc-tag t-pr">Bảo Vệ</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- SRS -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="SRS" src="{{asset('web/assets/images/tui-khi-xe-hoi-thumb.webp')}}" alt="Hệ thống túi khí SRS">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="35" y="25" width="50" height="35" rx="6" fill="#C4A052" opacity=".1" stroke="#C4A052" stroke-width="1" opacity=".3"/>
                        <ellipse cx="60" cy="28" rx="14" ry="10" fill="#ef4444" opacity=".3"/>
                        <ellipse cx="38" cy="42" rx="10" ry="8" fill="#ef4444" opacity=".2"/>
                        <ellipse cx="82" cy="42" rx="10" ry="8" fill="#ef4444" opacity=".2"/>
                        <ellipse cx="60" cy="55" rx="12" ry="8" fill="#ef4444" opacity=".15"/>
                        <text x="38" y="75" fill="#ef4444" font-size="7" opacity=".7">SRS Airbag System</text>
                    </svg>
                    <div class="ph-lbl">SRS — Hệ Thống Túi Khí</div>
                </div>
                <div class="img-swap-hint">img slot · SRS</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">SRS <span class="tc-dot dot-pr"></span></div><div class="tc-icon" style="background:rgba(239,68,68,.08);border-color:rgba(239,68,68,.2);color:#ef4444;"><i class="bi bi-shield-fill"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Túi Khí SRS</div><div class="tc-ds">Hàng ghế trước được trang bị túi khí trước SRS, túi khí đầu gối người lái và túi khí bên SRS. Túi khí rèm SRS bảo vệ người ngồi trong trường hợp va chạm bên. Mỗi loại được tính toán kỹ lưỡng để giảm thiểu lực tác động từ mọi hướng, bảo vệ toàn bộ cơ thể hành khách.</div></div>
            <div class="tc-ft"><span class="tc-tag t-pr">Bảo Vệ</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- PKSB -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="PKSB" src="{{asset('web/assets/images/phanh-tay-dien-tu-1.webp')}}" alt="Hệ thống PKSB">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="35" y="10" width="50" height="28" rx="4" fill="#C4A052" opacity=".2"/>
                        <path d="M10 65 L35 38" stroke="#ef4444" stroke-width="2" opacity=".7"/>
                        <circle cx="10" cy="65" r="6" fill="#ef4444" opacity=".4"/>
                        <path d="M110 60 L85 38" stroke="#ef4444" stroke-width="2" stroke-dasharray="5 3" opacity=".5"/>
                        <circle cx="110" cy="60" r="6" fill="#ef4444" opacity=".25"/>
                        <rect x="50" y="60" width="20" height="4" rx="2" fill="#ef4444" opacity=".6"/>
                        <text x="36" y="75" fill="#ef4444" font-size="7" opacity=".8">PKSB Auto Brake</text>
                    </svg>
                    <div class="ph-lbl">PKSB — Phanh An Toàn Đỗ Xe</div>
                </div>
                <div class="img-swap-hint">img slot · PKSB</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">PKSB <span class="tc-dot dot-pr"></span></div><div class="tc-icon" style="background:rgba(239,68,68,.08);border-color:rgba(239,68,68,.2);color:#ef4444;"><i class="bi bi-sign-stop"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Phanh An Toàn Khi Đỗ Xe</div><div class="tc-ds">PKSB giảm thiệt hại từ thao tác nhầm chân ga khi đỗ xe. Cảnh báo về phương tiện tiếp cận từ phía sau khi lùi và tự động phanh để ngăn va chạm. Đối với người đi bộ phía sau, hệ thống cũng tự động áp dụng phanh để giảm thiểu thương tích nếu xác định nguy cơ cao.</div></div>
            <div class="tc-ft"><span class="tc-tag t-pr">Bảo Vệ</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

    </div>
</div>

<!-- ═══ TIỆN NGHI ═══ -->
<div class="cgroup" data-category="comfort">
    <div class="c-hdr">
        <div class="c-ic" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-stars"></i></div>
        <div class="c-ttl">Tiện Nghi & Thao Tác</div>
        <span class="c-cnt" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;">5 công nghệ</span>
        <div class="c-ln"></div>
    </div>
    <div class="row g-4">

        <!-- HUD -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="HUD" src="{{asset('web/assets/images/hud-la-gi-3.webp')}}" alt="Màn hình HUD 24 inch">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <rect x="10" y="35" width="120" height="30" rx="4" fill="#8b5cf6" opacity=".1" stroke="#8b5cf6" stroke-width="1" opacity=".4"/>
                        <rect x="15" y="39" width="25" height="22" rx="2" fill="#ef4444" opacity=".15"/>
                        <text x="18" y="53" fill="#ef4444" font-size="8" opacity=".8">⚠ 60</text>
                        <rect x="55" y="39" width="30" height="22" rx="2" fill="#8b5cf6" opacity=".15"/>
                        <text x="58" y="53" fill="#8b5cf6" font-size="8" opacity=".8">→ 200m</text>
                        <rect x="100" y="39" width="25" height="22" rx="2" fill="#22c55e" opacity=".15"/>
                        <text x="103" y="53" fill="#22c55e" font-size="8" opacity=".8">● LTA</text>
                        <text x="40" y="75" fill="#8b5cf6" font-size="7" opacity=".7">HUD 24" · 600×150mm</text>
                    </svg>
                    <div class="ph-lbl">HUD 24" — Hiển Thị Trên Kính Chắn Gió</div>
                </div>
                <div class="img-swap-hint">img slot · HUD</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">HUD <span class="tc-dot dot-cm"></span></div><div class="tc-icon" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-display"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Màn Hình 24" Hiển Thị Trên Kính Chắn Gió</div><div class="tc-ds">Màn hình màu kích thước lớn 24 inch (600×150mm) hiển thị thông tin trực quan trên kính chắn gió giúp người lái nắm bắt cảnh báo và nguy hiểm ngay lập tức thông qua hình ảnh động. Màn hình được chia thành các khu vực: nhắc nhở nguy hiểm, hỗ trợ lái xe và biển báo giao thông.</div></div>
            <div class="tc-ft"><span class="tc-tag t-cm">Tiện Nghi</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- PVM -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="PVM" src="{{asset('web/assets/images/customer-relationship.webp')}}" alt="Hệ thống quan sát toàn cảnh PVM">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="35" y="25" width="50" height="30" rx="4" stroke="#8b5cf6" stroke-width="1.5" fill="rgba(139,92,246,.08)" opacity=".8"/>
                        <rect x="45" y="32" width="30" height="16" rx="2" fill="#8b5cf6" opacity=".25"/>
                        <circle cx="60" cy="40" r="5" fill="#8b5cf6" opacity=".4"/>
                        <circle cx="60" cy="40" r="2" fill="#8b5cf6" opacity=".9"/>
                        <line x1="60" y1="20" x2="60" y2="25" stroke="#8b5cf6" stroke-width="1.5" opacity=".6"/>
                        <line x1="60" y1="55" x2="60" y2="60" stroke="#8b5cf6" stroke-width="1.5" opacity=".6"/>
                        <line x1="30" y1="40" x2="35" y2="40" stroke="#8b5cf6" stroke-width="1.5" opacity=".6"/>
                        <line x1="85" y1="40" x2="90" y2="40" stroke="#8b5cf6" stroke-width="1.5" opacity=".6"/>
                        <text x="32" y="75" fill="#8b5cf6" font-size="7" opacity=".7">360° Panoramic View</text>
                    </svg>
                    <div class="ph-lbl">PVM — Quan Sát Toàn Cảnh</div>
                </div>
                <div class="img-swap-hint">img slot · PVM</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:1.1rem;">PVM <span class="tc-dot dot-cm"></span></div><div class="tc-icon" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-camera-video"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Quan Sát Toàn Cảnh</div><div class="tc-ds">Hiển thị hình ảnh xe trên màn hình trung tâm EMV 12.3 inch với góc nhìn từ trên xuống, giúp người lái kiểm tra các khu vực khó nhìn thấy xung quanh trong thời gian thực. Chế độ quan sát bên hông và quan sát phía góc giúp kiểm tra khoảng không gian an toàn khi rẽ trên đường hẹp.</div></div>
            <div class="tc-ft"><span class="tc-tag t-cm">Tiện Nghi</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- AUTO REAR SEAT -->
        <div class="col-xl-4 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="AUTO_SEAT" src="{{asset('web/assets/images/tg4-1763813772705-17638137733472007808675-1763827393125-176382739334267401945.jpg')}}" alt="Ghế sau tự động ngả">
                <div class="ph">
                    <svg class="ph-svg" width="120" height="80" viewBox="0 0 120 80" fill="none">
                        <rect x="20" y="35" width="35" height="30" rx="4" fill="#8b5cf6" opacity=".15" stroke="#8b5cf6" stroke-width="1" opacity=".4"/>
                        <rect x="20" y="15" width="35" height="22" rx="4" fill="#8b5cf6" opacity=".1" stroke="#8b5cf6" stroke-width="1" opacity=".3"/>
                        <rect x="65" y="35" width="35" height="30" rx="4" fill="#C4A052" opacity=".15" stroke="#C4A052" stroke-width="1" opacity=".4"/>
                        <rect x="65" y="20" width="35" height="17" rx="4" fill="#C4A052" opacity=".1" stroke="#C4A052" stroke-width="1" opacity=".3"/>
                        <path d="M57 28 L63 28" stroke="#C4A052" stroke-width="2" opacity=".8"/>
                        <path d="M60 25 L63 28 L60 31" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".8"/>
                        <text x="25" y="75" fill="#8b5cf6" font-size="7" opacity=".7">Auto Seat Recline</text>
                    </svg>
                    <div class="ph-lbl">Ghế Sau Tự Động Ngả</div>
                </div>
                <div class="img-swap-hint">img slot · AUTO_SEAT</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:.95rem;">SEAT <span class="tc-dot dot-cm"></span></div><div class="tc-icon" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-person-workspace"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Ghế Sau Tự Động Ngả</div><div class="tc-ds">Khi ghế sau không có người ngồi, ghế tự động ngả về phía sau đồng bộ với thao tác chuyển cần số. Nếu tựa đầu ghế sau đang ở vị trí cao, tính năng này tự động hạ tựa đầu xuống để cung cấp tầm nhìn rộng hơn qua gương chiếu hậu bên trong, tăng tính tiện nghi và an toàn.</div></div>
            <div class="tc-ft"><span class="tc-tag t-cm">Tiện Nghi</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- SEA -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="SEA" src="{{asset('web/assets/images/he-thong-ho-tro-ra-khoi-xe-an-toan-sea-tren-xe-lexus-1.webp')}}" alt="Hệ thống SEA">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <rect x="40" y="20" width="60" height="35" rx="5" fill="#8b5cf6" opacity=".1" stroke="#8b5cf6" stroke-width="1.5" opacity=".4"/>
                        <path d="M100 37 L100 44" stroke="#8b5cf6" stroke-width="3" opacity=".6"/>
                        <path d="M100 44 L115 44" stroke="#8b5cf6" stroke-width="2" opacity=".5"/>
                        <path d="M10 55 L40 44" stroke="#ef4444" stroke-width="2" stroke-dasharray="5 3" opacity=".7"/>
                        <circle cx="10" cy="55" r="6" fill="#ef4444" opacity=".4"/>
                        <circle cx="10" cy="55" r="3" fill="#ef4444" opacity=".7"/>
                        <path d="M96 30" stroke="#fbbf24" stroke-width="1.5" opacity=".8"/>
                        <ellipse cx="103" cy="27" rx="6" ry="4" fill="#fbbf24" opacity=".4"/>
                        <text x="35" y="75" fill="#8b5cf6" font-size="7" opacity=".7">SEA — Safe Exit Assist</text>
                    </svg>
                    <div class="ph-lbl">SEA — Hỗ Trợ Rời Xe An Toàn</div>
                </div>
                <div class="img-swap-hint">img slot · SEA</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">SEA <span class="tc-dot dot-cm"></span></div><div class="tc-icon" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-door-open"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Hỗ Trợ Rời Xe An Toàn</div><div class="tc-ds">SEA sử dụng BSM để phát hiện phương tiện hoặc xe đạp đến gần từ phía sau khi hành khách rời xe. Nếu xác định có khả năng va chạm khi cửa đang mở, đèn báo trên gương cửa sáng lên. Nếu hành khách cố mở cửa, hệ thống chốt điện tử e-Latch sẽ hủy thao tác mở chốt và cảnh báo bằng còi và màn hình.</div></div>
            <div class="tc-ft"><span class="tc-tag t-cm">Tiện Nghi</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- e-Latch -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="ELATCH" src="{{asset('web/assets/images/3055123-0635a485c0f25155906edeab3db39541.jpg')}}" alt="Hệ thống e-Latch">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <rect x="45" y="15" width="50" height="45" rx="6" fill="#8b5cf6" opacity=".08" stroke="#8b5cf6" stroke-width="1.5" opacity=".4"/>
                        <rect x="55" y="28" width="30" height="20" rx="3" fill="#8b5cf6" opacity=".15"/>
                        <circle cx="70" cy="38" r="6" fill="#8b5cf6" opacity=".3" stroke="#8b5cf6" stroke-width="1.5"/>
                        <circle cx="70" cy="38" r="2" fill="#C4A052" opacity=".9"/>
                        <path d="M70 33 L70 30" stroke="#8b5cf6" stroke-width="2" opacity=".7"/>
                        <path d="M45 37 L35 37" stroke="#C4A052" stroke-width="2" opacity=".6"/>
                        <path d="M35 37 L32 34 L35 37 L32 40" stroke="#C4A052" stroke-width="1.5" fill="none" opacity=".7"/>
                        <text x="32" y="75" fill="#8b5cf6" font-size="7" opacity=".7">e-Latch Electronic Door</text>
                    </svg>
                    <div class="ph-lbl">e-Latch — Chốt Điện Tử</div>
                </div>
                <div class="img-swap-hint">img slot · ELATCH</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:1rem;">e-Latch <span class="tc-dot dot-cm"></span></div><div class="tc-icon" style="background:rgba(139,92,246,.08);border-color:rgba(139,92,246,.2);color:#8b5cf6;"><i class="bi bi-unlock"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Chốt Điện Tử e-Latch</div><div class="tc-ds">Thay thế cơ chế chốt/mở chốt cửa thông thường bằng bộ điều khiển điện tử giúp đóng mở cửa trơn tru không cần đẩy. Để mở vào, chỉ cần nhấn công tắc trong tay nắm cửa và kéo theo cách thông thường. Khi bước ra, cửa mở chỉ bằng một thao tác nhấn công tắc đơn giản.</div></div>
            <div class="tc-ft"><span class="tc-tag t-cm">Tiện Nghi</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

    </div>
</div>

<!-- ═══ HỖ TRỢ ĐỖ XE ═══ -->
<div class="cgroup" data-category="parking">
    <div class="c-hdr">
        <div class="c-ic" style="background:rgba(59,130,246,.08);border-color:rgba(59,130,246,.2);color:#3b82f6;"><i class="bi bi-p-square-fill"></i></div>
        <div class="c-ttl">Hỗ Trợ Đỗ Xe Thông Minh</div>
        <span class="c-cnt" style="background:rgba(59,130,246,.08);border-color:rgba(59,130,246,.2);color:#3b82f6;">2 công nghệ</span>
        <div class="c-ln"></div>
    </div>
    <div class="row g-4">

        <!-- Teammate -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="TEAMMATE" src="" alt="Lexus Teammate Advanced Park">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <rect x="5" y="5" width="35" height="20" rx="3" stroke="#888" stroke-width="1" fill="rgba(59,130,246,.05)" opacity=".5"/>
                        <rect x="5" y="55" width="35" height="20" rx="3" stroke="#888" stroke-width="1" fill="rgba(59,130,246,.05)" opacity=".5"/>
                        <rect x="100" y="5" width="35" height="20" rx="3" stroke="#888" stroke-width="1" fill="rgba(59,130,246,.05)" opacity=".5"/>
                        <rect x="50" y="30" width="40" height="25" rx="4" fill="#3b82f6" opacity=".2" stroke="#3b82f6" stroke-width="1.5"/>
                        <path d="M55 42 Q70 35 85 42" stroke="#3b82f6" stroke-width="2" fill="none" opacity=".7"/>
                        <circle cx="70" cy="40" r="4" fill="#3b82f6" opacity=".5"/>
                        <path d="M70 55 L70 75" stroke="#3b82f6" stroke-width="2" stroke-dasharray="3 2" opacity=".6"/>
                        <text x="40" y="78" fill="#3b82f6" font-size="7" opacity=".7">Teammate Auto Park</text>
                    </svg>
                    <div class="ph-lbl">TEAMMATE — Đỗ Xe Tự Động</div>
                </div>
                <div class="img-swap-hint">img slot · TEAMMATE</div>
            </div>
            <div class="tc-hd"><div class="tc-ab" style="font-size:.9rem;">TMMT <span class="tc-dot dot-pk"></span></div><div class="tc-icon" style="background:rgba(59,130,246,.08);border-color:rgba(59,130,246,.2);color:#3b82f6;"><i class="bi bi-robot"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hỗ Trợ Đỗ Xe Thông Minh Lexus Teammate</div><div class="tc-ds">Kết hợp thông tin từ camera và cảm biến siêu âm, tính năng nhận diện và đỗ xe vào các điểm đỗ trống một cách tự động. Ngoài điều khiển vô lăng, tăng tốc, phanh và chuyển số, hệ thống liên tục hiển thị toàn cảnh điểm mù và vị trí đỗ mục tiêu. Khi gần chướng ngại vật, phanh tự động được kích hoạt.</div></div>
            <div class="tc-ft"><span class="tc-tag t-pk">Đỗ Xe</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

        <!-- PKSA -->
        <div class="col-xl-6 col-lg-6">
        <div class="tc">
            <div class="tc-img">
                <img data-tech="PKSA" src="" alt="Hệ thống hỗ trợ đỗ xe PKSA">
                <div class="ph">
                    <svg class="ph-svg" width="140" height="80" viewBox="0 0 140 80" fill="none">
                        <rect x="45" y="10" width="50" height="30" rx="4" fill="#3b82f6" opacity=".15" stroke="#3b82f6" stroke-width="1.5"/>
                        <path d="M20 70 L45 40" stroke="#3b82f6" stroke-width="2" opacity=".7"/>
                        <path d="M120 65 L95 40" stroke="#3b82f6" stroke-width="2" stroke-dasharray="5 3" opacity=".6"/>
                        <rect x="0" y="65" width="20" height="15" rx="3" fill="#3b82f6" opacity=".3"/>
                        <rect x="120" y="60" width="20" height="15" rx="3" fill="#3b82f6" opacity=".2"/>
                        <path d="M65 40 L65 70" stroke="#fbbf24" stroke-width="1.5" stroke-dasharray="4 2" opacity=".7"/>
                        <text x="38" y="78" fill="#3b82f6" font-size="7" opacity=".7">PKSA Parking Assist</text>
                    </svg>
                    <div class="ph-lbl">PKSA — Cảnh Báo Đỗ Xe</div>
                </div>
                <div class="img-swap-hint">img slot · PKSA</div>
            </div>
            <div class="tc-hd"><div class="tc-ab">PKSA <span class="tc-dot dot-pk"></span></div><div class="tc-icon" style="background:rgba(59,130,246,.08);border-color:rgba(59,130,246,.2);color:#3b82f6;"><i class="bi bi-car-front-fill"></i></div></div>
            <div class="tc-bd"><div class="tc-nm">Hệ Thống Hỗ Trợ Cảnh Báo Đỗ Xe</div><div class="tc-ds">Hệ thống phát hiện các chướng ngại vật khi đỗ xe như tường, phương tiện khác hay người đi bộ đang tiến đến gần khi xe đang lùi, và cảnh báo người lái trên màn hình cũng như phát ra âm thanh cảnh báo. Hỗ trợ tối đa an toàn khi vào chỗ đỗ hẹp hoặc trong bãi xe đông đúc.</div></div>
            <div class="tc-ft"><span class="tc-tag t-pk">Đỗ Xe</span><span class="tc-lk">Chi tiết <i class="bi bi-arrow-right"></i></span></div>
        </div></div>

    </div>
</div>

</div>
</section>

<!-- SPOTLIGHT: DRCC -->
<section class="sp-sec">
    <div class="container">
        <div class="text-center mb-5">
            <div class="slbl" style="justify-content:center">Công Nghệ Nổi Bật</div>
            <h2 class="s-title">Hai Công Nghệ <span class="hl">Định Nghĩa</span> An Toàn</h2>
        </div>
        <div class="sp-card mb-4">
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="sp-in">
                        <div class="sp-ab">DRCC</div>
                        <h3 class="sp-ti">Điều Khiển Hành Trình Thích Ứng</h3>
                        <div class="sp-su">Dynamic Radar Cruise Control — Mọi Dải Tốc Độ</div>
                        <p class="sp-de">Không chỉ đơn giản là giữ tốc độ không đổi, DRCC là người đồng hành thông minh trên mọi hành trình. Hệ thống kết hợp radar bước sóng milimet và camera để liên tục phân tích môi trường phía trước, dự đoán hành vi của xe dẫn trước và phản ứng một cách mượt mà, tự nhiên như người lái có kinh nghiệm.</p>
                        <div class="sp-feats">
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Hoạt động ở mọi dải tốc độ, kể cả khi dừng và khởi hành lại</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Tự động điều chỉnh khoảng cách an toàn với xe phía trước</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Kết hợp với LTA cho trải nghiệm lái bán tự động trên cao tốc</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Giảm mệt mỏi đáng kể trên các hành trình dài</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sp-img" style="min-height:360px">
                        <!-- SPOTLIGHT IMAGE SLOT: DRCC -->
                        <img data-tech="DRCC_SPOTLIGHT" src="{{asset('web/assets/images/cruise-control_01.jpg')}}" alt="DRCC Spotlight" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0">
                        <div class="sp-ph">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" opacity=".25">
                                <circle cx="50" cy="50" r="45" stroke="#C4A052" stroke-width="2"/>
                                <circle cx="50" cy="50" r="28" stroke="#C4A052" stroke-width="1.5" stroke-dasharray="6 3"/>
                                <circle cx="50" cy="50" r="10" fill="#C4A052" opacity=".4"/>
                                <line x1="50" y1="5" x2="50" y2="95" stroke="#C4A052" stroke-width="1" stroke-dasharray="4 3"/>
                                <line x1="5" y1="50" x2="95" y2="50" stroke="#C4A052" stroke-width="1" stroke-dasharray="4 3"/>
                            </svg>
                            <div style="font-size:.75rem;color:var(--muted);text-align:center">DRCC Spotlight<br><span style="color:var(--gold);font-weight:600">img slot · DRCC_SPOTLIGHT</span></div>
                            <div style="margin-top:20px;display:grid;grid-template-columns:1fr 1fr;gap:12px;width:80%">
                                <div style="background:var(--dark2);border:1px solid var(--gray);border-radius:8px;padding:14px;text-align:center"><div style="font-family:'Playfair Display',serif;font-size:1.4rem;color:var(--gold)">0</div><div style="font-size:.7rem;color:var(--muted)">km/h tối thiểu</div></div>
                                <div style="background:var(--dark2);border:1px solid var(--gray);border-radius:8px;padding:14px;text-align:center"><div style="font-family:'Playfair Display',serif;font-size:1.4rem;color:var(--gold)">180</div><div style="font-size:.7rem;color:var(--muted)">km/h tối đa</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sp-div"></div>

        <!-- SPOTLIGHT: Teammate -->
        <div class="sp-card">
            <div class="row g-0 flex-lg-row-reverse">
                <div class="col-lg-7">
                    <div class="sp-in">
                        <div class="sp-ab">TMMT</div>
                        <h3 class="sp-ti">Lexus Teammate — Đỗ Xe Thông Minh</h3>
                        <div class="sp-su">Advanced Park — Tự Động Hoàn Toàn</div>
                        <p class="sp-de">Lexus Teammate đại diện cho tương lai của việc lái xe đô thị. Với AI phân tích dữ liệu từ camera và cảm biến siêu âm trong thời gian thực, hệ thống nhận diện điểm đỗ trống và thực hiện toàn bộ thao tác đỗ xe — bao gồm điều khiển vô lăng, tăng tốc, phanh và chuyển số — một cách hoàn toàn tự động.</p>
                        <div class="sp-feats">
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Tự động nhận diện điểm đỗ xe đang trống</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Điều khiển tự động: vô lăng, ga, phanh và số</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Hiển thị toàn cảnh điểm mù liên tục trong suốt quá trình đỗ</span></div>
                            <div class="sp-fi"><i class="bi bi-check-circle-fill sp-ic"></i><span>Tự động phanh khi phát hiện chướng ngại vật bất ngờ</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sp-img" style="min-height:360px">
                        <!-- SPOTLIGHT IMAGE SLOT: TEAMMATE -->
                        <img data-tech="TEAMMATE_SPOTLIGHT" src="" alt="Teammate Spotlight" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0">
                        <div class="sp-ph">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" opacity=".25">
                                <rect x="10" y="10" width="60" height="60" rx="8" stroke="#C4A052" stroke-width="2"/>
                                <circle cx="40" cy="32" r="10" stroke="#C4A052" stroke-width="1.5"/>
                                <path d="M25 55 Q40 45 55 55" stroke="#C4A052" stroke-width="2" fill="none"/>
                            </svg>
                            <div style="font-size:.75rem;color:var(--muted);text-align:center">Teammate Spotlight<br><span style="color:var(--gold);font-weight:600">img slot · TEAMMATE_SPOTLIGHT</span></div>
                            <div style="margin-top:20px;width:80%;background:var(--dark2);border:1px solid var(--gray);border-radius:8px;padding:16px">
                                <div style="font-size:.72rem;color:var(--muted);margin-bottom:10px;text-transform:uppercase;letter-spacing:.08em">Các bước tự động</div>
                                <div style="display:flex;flex-direction:column;gap:8px">
                                    <div style="display:flex;align-items:center;gap:8px;font-size:.78rem;color:var(--text)"><span style="width:22px;height:22px;background:var(--gold);color:var(--black);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.65rem;flex-shrink:0">1</span>Dừng cạnh chỗ đỗ, nhấn công tắc</div>
                                    <div style="display:flex;align-items:center;gap:8px;font-size:.78rem;color:var(--text)"><span style="width:22px;height:22px;background:var(--gold);color:var(--black);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.65rem;flex-shrink:0">2</span>Kiểm tra khu vực, xác nhận trên màn hình</div>
                                    <div style="display:flex;align-items:center;gap:8px;font-size:.78rem;color:var(--text)"><span style="width:22px;height:22px;background:var(--gold);color:var(--black);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.65rem;flex-shrink:0">3</span>Hệ thống tự động đỗ xe hoàn toàn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INTERACTIVE TIMELINE -->
<section class="tl-sec">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4">
                <div class="slbl">Hệ Thống Tích Hợp</div>
                <h2 class="s-title mb-3">Tất Cả Hoạt Động <span class="hl">Như Một</span></h2>
                <div class="dg"></div>
                <p class="s-sub">Các công nghệ Lexus không hoạt động độc lập — chúng kết nối thành một hệ sinh thái thông minh, liên tục chia sẻ dữ liệu và phối hợp để mang đến sự bảo vệ toàn diện nhất.</p>
                <div style="margin-top:32px;padding:20px;background:var(--dark2);border:1px solid var(--gray);border-radius:var(--rl)">
                    <div style="font-size:.72rem;font-weight:700;color:var(--muted);text-transform:uppercase;letter-spacing:.1em;margin-bottom:14px">Nhấn để xem chi tiết + ảnh</div>
                    <div style="display:flex;flex-wrap:wrap;gap:8px">
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">DRCC</span>
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">LTA</span>
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">PCS</span>
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">BSM</span>
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">SEA</span>
                        <span style="background:var(--gold-l);border:1px solid var(--gold-m);color:var(--gold);padding:4px 10px;border-radius:20px;font-size:.72rem;font-weight:600">PKSB</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="tl">

                    <div class="tl-item open">
                        <div class="tl-left"><div class="tl-node"><i class="bi bi-eye"></i></div><div class="tl-ln"></div></div>
                        <div><div class="tl-cnt" onclick="toggleTL(this.closest('.tl-item'))">
                            <div class="tl-img">
                                <img data-tech="LTA_TL" src="{{asset('web/assets/images/lta.webp')}}" alt="LTA">
                                <div class="tl-ph"><svg width="60" height="40" viewBox="0 0 60 40" fill="none" opacity=".3"><line x1="20" y1="0" x2="20" y2="40" stroke="#C4A052" stroke-width="1" stroke-dasharray="4 2"/><line x1="40" y1="0" x2="40" y2="40" stroke="#C4A052" stroke-width="1" stroke-dasharray="4 2"/><rect x="23" y="15" width="14" height="10" rx="2" fill="#C4A052"/></svg><div style="font-size:.65rem;color:var(--muted)">img slot · LTA_TL</div></div>
                            </div>
                            <div class="tl-body-wrap">
                                <div class="tl-ch"><span class="tl-ab">LTA</span><span class="tl-nm">Hệ Thống Hỗ Trợ Theo Dõi Làn Đường</span><div class="tl-tg"><i class="bi bi-plus-lg"></i></div></div>
                                <div class="tl-ds">Khi di chuyển trên đường cao tốc hay cung đường không hiển thị rõ vạch kẻ đường, LTA cảnh báo người lái về khả năng lệch làn và hỗ trợ điều chỉnh lái. Khi DRCC được kích hoạt, hệ thống hỗ trợ giữ xe ở trung tâm làn đường một cách mượt mà và ổn định, đồng thời hỗ trợ di chuyển theo hành trình xe phía trước trong trường hợp khó nhận ra vạch kẻ đường.</div>
                            </div>
                        </div></div>
                    </div>

                    <div class="tl-item">
                        <div class="tl-left"><div class="tl-node"><i class="bi bi-speedometer2"></i></div><div class="tl-ln"></div></div>
                        <div><div class="tl-cnt" onclick="toggleTL(this.closest('.tl-item'))">
                            <div class="tl-img">
                                <img data-tech="DRCC_TL" src="" alt="DRCC">
                                <div class="tl-ph"><svg width="60" height="40" viewBox="0 0 60 40" fill="none" opacity=".3"><path d="M5 20 Q15 12 30 15 Q45 18 55 12" stroke="#C4A052" stroke-width="2" fill="none"/><circle cx="30" cy="25" r="8" stroke="#C4A052" stroke-width="1.5" fill="none"/></svg><div style="font-size:.65rem;color:var(--muted)">img slot · DRCC_TL</div></div>
                            </div>
                            <div class="tl-body-wrap">
                                <div class="tl-ch"><span class="tl-ab">DRCC</span><span class="tl-nm">Hệ Thống Điều Khiển Hành Trình Chủ Động</span><div class="tl-tg"><i class="bi bi-plus-lg"></i></div></div>
                                <div class="tl-ds">Sử dụng ra-đa và camera để phát hiện phương tiện phía trước và chủ động duy trì khoảng cách thích hợp ở mọi dải tốc độ. Kết hợp cùng LTA tạo nên hệ thống hỗ trợ lái bán tự động (Level 2) trên các cung đường cao tốc, giảm mệt mỏi đáng kể cho người lái.</div>
                            </div>
                        </div></div>
                    </div>

                    <div class="tl-item">
                        <div class="tl-left"><div class="tl-node"><i class="bi bi-exclamation-diamond"></i></div><div class="tl-ln"></div></div>
                        <div><div class="tl-cnt" onclick="toggleTL(this.closest('.tl-item'))">
                            <div class="tl-img">
                                <img data-tech="PCS_TL" src="" alt="PCS">
                                <div class="tl-ph"><svg width="60" height="40" viewBox="0 0 60 40" fill="none" opacity=".3"><circle cx="45" cy="15" r="10" stroke="#ef4444" stroke-width="1.5" fill="none"/><rect x="5" y="22" width="25" height="14" rx="3" fill="#C4A052" opacity=".5"/><path d="M30 29 L38 20" stroke="#ef4444" stroke-width="2" stroke-dasharray="3 2"/></svg><div style="font-size:.65rem;color:var(--muted)">img slot · PCS_TL</div></div>
                            </div>
                            <div class="tl-body-wrap">
                                <div class="tl-ch"><span class="tl-ab">PCS</span><span class="tl-nm">Hệ Thống An Toàn Tiền Va Chạm</span><div class="tl-tg"><i class="bi bi-plus-lg"></i></div></div>
                                <div class="tl-ds">Phát hiện va chạm có thể xảy ra với phương tiện, người đi bộ hoặc xe đạp phía trước. Cảnh báo người lái và kích hoạt phanh hỗ trợ khi cần. Trong trường hợp không thể đạp phanh, PCS chủ động phanh để tránh hoặc giảm thiểu tối đa lực tác động khi va chạm.</div>
                            </div>
                        </div></div>
                    </div>

                    <div class="tl-item">
                        <div class="tl-left"><div class="tl-node"><i class="bi bi-shield-fill-check"></i></div><div class="tl-ln"></div></div>
                        <div><div class="tl-cnt" onclick="toggleTL(this.closest('.tl-item'))">
                            <div class="tl-img">
                                <img data-tech="SEA_TL" src="" alt="SEA">
                                <div class="tl-ph"><svg width="60" height="40" viewBox="0 0 60 40" fill="none" opacity=".3"><rect x="20" y="10" width="30" height="20" rx="3" stroke="#8b5cf6" stroke-width="1.5" fill="none"/><path d="M50 20 L50 28" stroke="#8b5cf6" stroke-width="2"/><path d="M5 30 L20 22" stroke="#ef4444" stroke-width="2" stroke-dasharray="3 2"/><circle cx="5" cy="30" r="4" fill="#ef4444" opacity=".5"/></svg><div style="font-size:.65rem;color:var(--muted)">img slot · SEA_TL</div></div>
                            </div>
                            <div class="tl-body-wrap">
                                <div class="tl-ch"><span class="tl-ab">SEA</span><span class="tl-nm">Hệ Thống Hỗ Trợ Rời Xe An Toàn</span><div class="tl-tg"><i class="bi bi-plus-lg"></i></div></div>
                                <div class="tl-ds">Dùng BSM phát hiện phương tiện và xe đạp đến gần từ phía sau khi hành khách rời xe. Nếu có khả năng va chạm khi cửa đang mở, đèn báo trên gương cửa sáng lên. Hệ thống e-Latch sẽ hủy thao tác mở chốt và cảnh báo bằng còi, đèn nhấp nháy để bảo vệ hành khách.</div>
                            </div>
                        </div></div>
                    </div>

                    <div class="tl-item">
                        <div class="tl-left"><div class="tl-node"><i class="bi bi-sign-stop-fill"></i></div><div class="tl-ln"></div></div>
                        <div><div class="tl-cnt" onclick="toggleTL(this.closest('.tl-item'))">
                            <div class="tl-img">
                                <img data-tech="PKSB_TL" src="" alt="PKSB">
                                <div class="tl-ph"><svg width="60" height="40" viewBox="0 0 60 40" fill="none" opacity=".3"><rect x="18" y="5" width="24" height="16" rx="3" fill="#C4A052" opacity=".4"/><path d="M5 35 L18 21" stroke="#ef4444" stroke-width="2" opacity=".7"/><circle cx="5" cy="35" r="4" fill="#ef4444" opacity=".5"/><rect x="25" y="30" width="10" height="3" rx="1" fill="#ef4444" opacity=".8"/></svg><div style="font-size:.65rem;color:var(--muted)">img slot · PKSB_TL</div></div>
                            </div>
                            <div class="tl-body-wrap">
                                <div class="tl-ch"><span class="tl-ab">PKSB</span><span class="tl-nm">Hệ Thống Phanh An Toàn Khi Đỗ Xe</span><div class="tl-tg"><i class="bi bi-plus-lg"></i></div></div>
                                <div class="tl-ds">Giảm thiệt hại từ thao tác nhầm chân ga khi đỗ xe. Cảnh báo về phương tiện tiếp cận từ phía sau khi lùi, và tự động phanh để ngăn va chạm với phương tiện cắt ngang hoặc người đi bộ phía sau.</div>
                            </div>
                        </div></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="tech-cta">
    <div class="container cta-in">
        <div class="slbl" style="justify-content:center">Trải Nghiệm Thực Tế</div>
        <h2 class="cta-t">Cảm Nhận <span style="color:var(--gold)">Công Nghệ Sống Động</span><br>Qua Lái Thử Thực Tế</h2>
        <p class="cta-s">Không có gì thay thế được việc tự mình trải nghiệm các công nghệ tiên tiến này trên đường. Đặt lịch lái thử ngay hôm nay.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="#" class="btn-pl"><i class="bi bi-calendar-check"></i> Đặt lịch lái thử</a>
            <a href="lexus-rx500h-detail.html" class="btn-ol"><i class="bi bi-car-front"></i> Xem trên Lexus RX</a>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="nl-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="nl-t">Đăng Ký Nhận Tin</h3>
                <p class="nl-d">Nhận thông tin mới nhất về sản phẩm, ưu đãi và sự kiện từ Lexus Vietnam.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end">
                <div class="nl-form">
                    <input type="email" placeholder="Địa chỉ email của bạn">
                    <button type="button"><i class="bi bi-send"></i> Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
    <script>
    // Navbar
    window.addEventListener('scroll',()=>{
        document.getElementById('nav').classList.toggle('s',window.scrollY>100);
        document.getElementById('btt').classList.toggle('show',window.scrollY>400);
    });

    // Filter
    document.querySelectorAll('.fbtn').forEach(b=>{
        b.addEventListener('click',function(){
            document.querySelectorAll('.fbtn').forEach(x=>x.classList.remove('a'));
            this.classList.add('a');
            const f=this.dataset.f;
            document.querySelectorAll('.cgroup').forEach(g=>{
                g.classList.toggle('hidden',f!=='all'&&g.dataset.category!==f);
            });
            setTimeout(()=>document.getElementById('tech-grid').scrollIntoView({behavior:'smooth',block:'start'}),80);
        });
    });

    // Timeline
    function toggleTL(item){
        const open=item.classList.contains('open');
        document.querySelectorAll('.tl-item').forEach(i=>i.classList.remove('open'));
        if(!open) item.classList.add('open');
    }

    // Scroll reveal
    const obs=new IntersectionObserver(entries=>{
        entries.forEach(e=>{
            if(e.isIntersecting){e.target.style.opacity='1';e.target.style.transform='translateY(0)';}
        });
    },{threshold:.06,rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.tc,.lss-pill,.sp-card,.tl-cnt,.s-title').forEach(el=>{
        el.style.opacity='0';el.style.transform='translateY(24px)';
        el.style.transition='opacity .6s ease, transform .6s ease';
        obs.observe(el);
    });
    document.querySelectorAll('.tc').forEach((c,i)=>{c.style.transitionDelay=`${(i%3)*.08}s`;});

    // ══════════════════════════════════════
    // IMAGE SWAP UTILITY
    // Để thêm ảnh thật, gọi: swapImage('LTA', 'path/to/lta.jpg')
    // Hoặc thêm src trực tiếp vào thẻ <img data-tech="LTA">
    // ══════════════════════════════════════
    window.swapImage = function(techName, src) {
        document.querySelectorAll(`img[data-tech="${techName}"]`).forEach(img=>{
            img.src = src;
            img.style.display = 'block';
        });
    };
    // Ví dụ: swapImage('LTA', 'images/lta.jpg');
    // swapImage('DRCC', 'images/drcc.jpg');
</script>
@endpush
