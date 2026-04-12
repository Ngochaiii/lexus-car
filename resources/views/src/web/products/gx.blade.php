@extends('layouts.web.default')

@section('content')
    <!-- ==================== PRODUCT SECTION ==================== -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <!-- LEFT: GALLERY -->
                <div class="col-lg-7">
                    <div class="product-gallery">
                        <div class="gallery-main-wrap">
                            <div class="gallery-badge">
                                <span>GX 550</span>
                                <span class="new">V6 3.5L</span>
                                <span class="hybrid">Off-Road</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" title="Yêu thích" onclick="toggleFavorite(this)"><i
                                        class="bi bi-heart"></i></button>
                                <button class="gallery-action-btn" title="So sánh"><i
                                        class="bi bi-arrow-left-right"></i></button>
                                <button class="gallery-action-btn" title="Chia sẻ"><i class="bi bi-share"></i></button>
                            </div>
                            <div class="gallery-main">
                                <img src="{{ asset('web/assets/images/gx/mau-den.webp') }}"
                                    alt="Lexus GX 550" id="mainImage">
                            </div>
                            <button class="gallery-nav prev" onclick="changeImage(-1)"><i
                                    class="bi bi-chevron-left"></i></button>
                            <button class="gallery-nav next" onclick="changeImage(1)"><i
                                    class="bi bi-chevron-right"></i></button>
                            <div class="gallery-counter"><span id="currentIndex">1</span> / <span id="totalImages">4</span>
                            </div>
                        </div>
                        <div class="gallery-thumbs">
                            <div class="gallery-thumb active" onclick="setImage(0,this)"><img
                                    src="{{ asset('web/assets/images/gx/mau-den.webp') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/gx/mau-trang.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/gx/mau-xam.webp') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/gx/mau-xanh.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> V6 3.5L — 349 HP
                        </div>
                        <h1 class="product-title">Lexus GX</h1>
                        <p class="product-subtitle">550 — 3.5L V6 | DirectShift-10AT | 4WD</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.8</strong> (98 đánh giá)</span>
                        </div>
                        <!-- Colour -->
                        <div class="option-group">
                            <div class="option-label">
                                <span><i class="bi bi-palette me-2"></i>Màu ngoại thất</span>
                                <span class="selected-value" id="selectedColor">Caviar Black</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option" style="--color:#F5F5F5" data-color="white"
                                    data-name="Sonic White" onclick="selectColor(this)"></div>
                                <div class="color-option active" style="--color:#1A1A1A" data-color="black"
                                    data-name="Caviar Black" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#C0C0C0" data-color="silver"
                                    data-name="Sonic Titanium" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#2F4F4F" data-color="green"
                                    data-name="Nori Green Pearl" onclick="selectColor(this)"></div>
                            </div>
                        </div>
                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option active"
                                    onclick="selectVersion(this,'6.450.000.000','GX 550 Luxury',349,'7.0s','10.5L','4WD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">GX 550 — Luxury</div>
                                    </div>
                                    <div class="vo-price">6.450.000.000đ</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'6.400.000.000','GX 550 Overtrail',349,'7.0s','10.5L','4WD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">GX 550 — Overtrail</div>
                                    </div>
                                    <div class="vo-price">6.400.000.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">6.450.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="quick-specs" style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">349</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">7.0s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">10.5L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">4WD</div>
                                    <div class="qs-label">4WD</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~70 triệu/tháng</strong> với lãi suất
                                    ưu đãi</div>
                            </div>
                        </div>
                        <!-- Inquiry Form -->
                        <div class="inquiry-box">
                            <div class="inquiry-header">
                                <h3><i class="bi bi-envelope-paper me-2"></i>Đăng Ký Tư Vấn</h3>
                                <p>Để lại thông tin, chúng tôi sẽ liên hệ trong 30 phút</p>
                            </div>
                            <form class="inquiry-form" id="inquiryForm" onsubmit="submitInquiry(event)">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Họ và tên *</label>
                                        <input type="text" class="form-control" placeholder="Nguyễn Văn A" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Số điện thoại *</label>
                                        <input type="tel" class="form-control" placeholder="0912 345 678" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ghi chú</label>
                                    <textarea class="form-control" placeholder="Tôi muốn tư vấn về..."></textarea>
                                </div>
                                <button type="submit" class="btn-submit-inquiry" id="submitBtn">
                                    <i class="bi bi-send-fill"></i> Gửi Yêu Cầu Tư Vấn
                                </button>
                            </form>
                            <div class="inquiry-divider"><span>Hoặc</span></div>
                            <div class="action-buttons">
                                <a href="{{route('web.home.regis')}}" class="btn-action primary"><i class="bi bi-calendar-check"></i> Đặt
                                    Lịch Lái Thử</a>
                                <a href="tel:19001234" class="btn-action hotline">
                                    <i class="bi bi-telephone"></i>
                                    <span>Hotline: </span><span class="hotline-number">1900 1234 56</span>
                                </a>
                            </div>
                        </div>

                        <!-- Dealer Info -->
                        <div class="dealer-info">
                            <div class="dealer-avatar"><i class="bi bi-building"></i></div>
                            <div class="dealer-content">
                                <div class="dealer-name">Lexus Thăng Long</div>
                                <div class="dealer-location"><i class="bi bi-geo-alt"></i> Ngã tư Phạm Hùng + Dương Đình Nghệ Tổ dân, phố số 8, Phường, Cầu Giấy, Hà Nội 100000, Việt Nam
</div>
                                <div class="dealer-status">Đang mở cửa • Đóng cửa lúc 19:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== GIỚI THIỆU ==================== -->
    <section class="intro-section" id="intro">
        <div class="container">
            <div class="intro-grid">
                <div class="intro-img-wrap">
                    <img src="{{ asset('web/assets/images/gx/intro.jpg') }}"
                        alt="Lexus GX 550 — SUV địa hình hạng sang biểu tượng">
                    <div class="intro-year-badge">
                        <div class="iyb-year">2002</div>
                        <div class="iyb-label">Năm tiên phong</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">SUV Địa Hình Biểu Tượng Của Lexus</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Kể từ khi được giới thiệu vào năm 2002 tại thị trường Mỹ, khả năng vận hành vượt trội của GX đã được kiểm chứng thông qua những thử nghiệm khắc nghiệt trên các địa hình khác nhau, bao gồm cả địa hình sa mạc và địa hình đá hộc.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">Với các yếu tố nền tảng được tinh chỉnh và tối ưu, khả năng chinh phục địa hình của GX được nâng lên một tầm cao mới. Bằng cách hợp tác chặt chẽ với các chuyên gia lái thử xe và thu thập phản hồi quý giá, nhóm phát triển đã tạo nên một chiếc xe địa hình Lexus trứ danh với độ bền, độ tin cậy và hiệu suất xứng tầm.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">2</div>
                            <div class="ms-label">Phiên bản</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">349</div>
                            <div class="ms-label">Mã lực V6</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">10AT</div>
                            <div class="ms-label">DirectShift</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">GA-F</div>
                            <div class="ms-label">Nền tảng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== BẢNG MÀU & CẤU HÌNH ==================== -->
    <section class="colour-section" id="colours">
        <div class="container">
            <div class="section-tag">Cá nhân hoá</div>
            <h2 class="section-title">Bảng Màu & Cấu Hình Nội Ngoại Thất</h2>
            <p class="section-desc">Tạo nên chiếc GX 550 mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, chất liệu ghế và mâm xe độc quyền.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheels')">Mâm Xe</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Ghế (Màu & Chất liệu)</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-trim')">Ốp Nội Thất</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/gx/mau-den.webp') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Màu đen — Caviar Black</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/gx/mau-trang.jpg') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Màu trắng — Sonic White</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/gx/mau-xam.webp') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Màu xám — Sonic Titanium</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/gx/mau-xanh.jpg') }}" alt="Màu xanh">
                            </div>
                            <div class="ti-abbr">Màu xanh — Terrane kaki</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MÂM XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus GX 550
                    trang bị mâm xe hợp kim nhôm đặc trưng cho từng phiên bản, được thiết kế tối ưu cho cả hành trình đô thị
                    và địa hình off-road.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/mam1.webp') }}" alt="Mâm GX 550 Luxury">
                        <div class="item-card-label">Mâm hợp kim nhôm — Phiên bản Luxury<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">GX 550 Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/mam2.jpg') }}" alt="Mâm GX 550 Overtrail">
                        <div class="item-card-label">Mâm hợp kim địa hình — Phiên bản Overtrail<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">GX 550 Overtrail</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-info-circle me-2"></i>GX 550 Overtrail:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Mâm xe địa hình chuyên dụng được thiết
                        kế để tối ưu khả năng bám đường trên mọi loại địa hình từ đá, cát đến bùn lầy.</span>
                </div>
            </div>

            <!-- CHẤT LIỆU GHẾ -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ghế bọc da
                    cao cấp với nhiều lựa chọn màu sắc và chất liệu theo từng phiên bản, mang lại sự sang trọng và thoải
                    mái tối đa ngay cả trong hành trình địa hình dài.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/seat1.png') }}" alt="Ghế nâu">
                        <div class="item-card-label">Da màu nâu Flaxen<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/seat2.png') }}" alt="Ghế đen">
                        <div class="item-card-label">Da màu đen Black<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Tất cả phiên bản</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/seat3.png') }}" alt="Ghế bò Overtrail">
                        <div class="item-card-label">Da tổng hợp bền bỉ<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Overtrail — kháng bẩn</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/seat4.png') }}" alt="Ghế kem">
                        <div class="item-card-label">Da màu kem Parchment<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Luxury — nội thất sáng</span></div>
                    </div>
                </div>
            </div>

            <!-- ỐP NỘI THẤT -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp trang
                    trí cánh cửa và nội thất đa dạng, tạo nên bầu không khí cabin sang trọng và cá tính theo từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/noithat1.jpg') }}" alt="Ốp gỗ Luxury">
                        <div class="item-card-label">Ốp gỗ sang trọng<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản GX 550 Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/gx/noithat2.webp') }}" alt="Ốp nhôm Overtrail">
                        <div class="item-card-label">Nhôm brushed — phong cách địa hình<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản Overtrail</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== HỆ TRUYỀN ĐỘNG ==================== -->
    <section class="powertrain-section section-padding" id="powertrain">
        <div class="container">
            <div class="section-tag">Động lực học</div>
            <h2 class="section-title">Hệ Thống Truyền Động</h2>
            <p class="section-desc">Lexus GX 550 được trang bị động cơ xăng V6 3.5L V35A-FTS kết hợp hộp số tự động 10 cấp DirectShift-10AT, mang đến trải nghiệm lái xe hứng khởi trên mọi địa hình.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-engine')">Động Cơ V6 3.5L</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-transmission')">Hộp Số & Hệ Dẫn Động</button>
            </div>

            <!-- ĐỘNG CƠ -->
            <div class="variant-pane active" id="vt-engine">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/gx/dongco.webp') }}" alt="Động cơ GX 550 3.5L V6">
                        <div class="powertrain-badge">3.5L V6</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động Cơ Xăng V6 3.5L V35A-FTS</h3>
                        <p>Động cơ V35A-FTS kết hợp với hộp số tự động 10 cấp DirectShift-10AT mang đến trải nghiệm lái xe hứng khởi và thú vị. Hộp số DirectShift-10AT có dải tỷ số truyền rộng kết hợp với bộ ly hợp khóa biến mô hoạt động linh hoạt trong hầu hết các tình huống, giúp chuyển số nhanh nhạy và chính xác, mang lại trải nghiệm lái xe nhịp nhàng và dễ chịu.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">349 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">479 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7.0s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">V6</div>
                                <div class="pt-spec-label">Cấu hình</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Công nghệ động cơ V35A-FTS</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Hộp số DirectShift-10AT — tỷ số truyền dải rộng</div>
                                <div class="hc-item"><i class="bi bi-droplet"></i> Bộ ly hợp khóa biến mô — hoạt động linh hoạt đa điều kiện</div>
                                <div class="hc-item"><i class="bi bi-shield-check"></i> Sức kéo dồi dào ngay từ tốc độ thấp</div>
                                <div class="hc-item"><i class="bi bi-arrow-down-circle"></i> Hiệu suất vượt địa hình — kiểm chứng trên sa mạc và đá hộc</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Sức kéo dồi dào và thời gian chuyển số chính xác cùng được tối ưu, mang đến cho người lái những cú tăng ga đầy phấn khích ngay cả khi động cơ đang hoạt động ở tốc độ cao.</p>
                    </div>
                </div>
            </div>

            <!-- HỘP SỐ & DẪN ĐỘNG -->
            <div class="variant-pane" id="vt-transmission">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/gx/hop-so.jpg') }}" alt="Hệ dẫn động 4 bánh GX 550">
                        <div class="powertrain-badge">10AT 4WD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-arrow-repeat me-2"></i>Hộp Số 10 Cấp DirectShift-10AT</h3>
                        <p>Hộp số DirectShift-10AT có dải tỷ số truyền rộng kết hợp với bộ ly hợp khóa biến mô hoạt động linh hoạt trong hầu hết các tình huống, ngoại trừ khi khởi động, giúp chuyển số nhanh nhạy và chính xác, đồng thời cải thiện hiệu quả sử dụng nhiên liệu, khả năng tăng tốc khi khởi động và hiệu suất vượt địa hình.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">10 cấp</div>
                                <div class="pt-spec-label">Hộp số AT</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">4WD</div>
                                <div class="pt-spec-label">Dẫn động</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">BOF</div>
                                <div class="pt-spec-label">Khung gầm rời</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">GA-F</div>
                                <div class="pt-spec-label">Nền tảng</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Hệ Thống Địa Hình GX 550</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-cpu"></i> Multi-Terrain Select — chọn chế độ địa hình thông minh</div>
                                <div class="hc-item"><i class="bi bi-snow2"></i> Crawl Control — hỗ trợ vượt địa hình tốc độ thấp</div>
                                <div class="hc-item"><i class="bi bi-water"></i> Kinetic Dynamic Suspension System KDSS</div>
                                <div class="hc-item"><i class="bi bi-triangle"></i> Kiểm soát ổn định chủ động — phân bổ moment tối ưu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KHUNG GẦM ==================== -->
    <section class="chassis-section" id="chassis">
        <div class="container">
            <div class="section-tag">Nền tảng kỹ thuật</div>
            <h2 class="section-title">Khung Gầm & Hệ Thống Treo</h2>
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">GX là đại diện tiêu biểu cho những mẫu xe địa hình đích thực của Lexus, với cấu trúc khung gầm rời Body-on-frame truyền thống được cải tiến toàn diện trên nền tảng GA-F trứ danh.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/gx/khung-gam.webp') }}"
                            alt="Khung gầm Body-on-frame Lexus GX 550">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Khung gầm rời Body-on-frame GA-F</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/gx/treo-cau-cung.jpg') }}"
                            alt="Hệ thống treo cầu cứng GX 550">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo cầu cứng liên kết 4 điểm</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-arrows-vertical"></i>Thân Xe Đa Vật Liệu</h4>
                        <p class="chassis-info-desc">Thân xe cứng vững được tối ưu bằng vật liệu đa thành phần, tăng cường độ cứng xoắn để nâng cao độ chính xác điều khiển và khả năng hấp thụ lực va chạm.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/gx/khung-gam.webp') }}"
                            alt="Hệ thống khung gầm Lexus GX 550">
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Nền Tảng GA-F — Độ Cứng Nâng Cao</h4>
                        <p class="chassis-info-desc">Cấu trúc khung gầm rời Body-on-frame truyền thống được cải tiến toàn diện. Nền tảng GA-F trứ danh kèm theo độ cứng thân xe được nâng cao mang đến hiệu suất đáng kinh ngạc trên mọi loại địa hình.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Treo Cầu Cứng Liên Kết 4 Điểm</h4>
                        <p class="chassis-info-desc">Hệ thống treo dạng cầu cứng kiểu liên kết 4 điểm với tay đòn điều khiển đặt dọc được thiết kế tối ưu hóa, kết hợp bộ giảm xóc sử dụng van ống lồng độc lập và thiết bị kiểm soát lực ma sát FCD.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-stoplights"></i>Hệ Thống Treo Trước Độc Lập</h4>
                        <p class="chassis-info-desc">Hệ thống treo của GX được thiết kế đặc biệt nhằm mang lại trải nghiệm lái xe thú vị trên cả đường on-road và off-road, mang lại sự cân bằng hoàn hảo giữa thoải mái và vận hành.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế GX 550</h2>
            <p class="section-desc">Vẻ đẹp công năng đầy khí chất với tỷ lệ hoàn mỹ của một chiếc SUV off-road đích thực hoà quyện cùng không gian nội thất sang trọng, mang đến sự thoải mái đặc biệt ngay cả trong những môi trường khắc nghiệt.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/mat-truoc.webp')}}"
                            alt="Ngoại thất Lexus GX 550 ">
                        <div class="design-caption">
                            <h4>Nhìn Chính Diện — Mạnh Mẽ & Khí Chất</h4>
                            <p>Lưới tản nhiệt Spindle thế hệ mới với đèn pha LED sắc nét, cản trước được thiết kế tối ưu cho góc tiếp cận địa hình, tạo nên ấn tượng mạnh mẽ và uy lực.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/mat-sau.jpg')}}"
                            alt="Ngoại thất Lexus GX 550 Luxury">
                        <div class="design-caption">
                            <h4>Đuôi Xe — Thanh Lịch & Cân Đối</h4>
                            <p>Cụm đèn hậu LED 3 chiều kết hợp thân xe cứng vững với tỷ lệ SUV off-road hoàn mỹ, tạo nên vẻ đẹp đặc trưng của dòng GX Lexus.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/gx/tong-quat.webp')}}"
                            alt="Góc nhìn tổng quan Lexus GX 550">
                        <div class="design-caption">
                            <h4>Hình Ảnh Tổng Quan — SUV Off-Road Đích Thực</h4>
                            <p>Kết hợp sức mạnh của dòng xe địa hình thực thụ với phong cách thành thị tinh tế — GX 550 tạo nên một biểu tượng mới về SUV hạng sang vận hành đỉnh cao.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Đèn pha LED tích hợp</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Lưới Spindle thế hệ mới</div>
                    <div class="feature-chip"><i class="bi bi-circle"></i> Mâm xe địa hình chuyên dụng</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Wheelbase 2,850mm</div>
                    <div class="feature-chip"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="feature-chip"><i class="bi bi-door-closed"></i> Bệ bước chân tự động</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/gx/noi-that-1.jpg')}}"
                            alt="Nội thất khoang cabin Lexus GX 550">
                        <div class="design-caption">
                            <h4>Nội Thất Khoang Cabin — Sang Trọng & Tiên Tiến</h4>
                            <p>Không gian cabin sang trọng với màn hình điều khiển trung tâm 14 inch, hệ thống âm thanh Mark Levinson Premium và nội thất da cao cấp, mang đến trải nghiệm đỉnh cao ngay cả trên địa hình khắc nghiệt.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/noi-that-7cho.webp')}}"
                            alt="Nội thất 7 chỗ Lexus GX 550">
                        <div class="design-caption">
                            <h4>Cabin 7 Chỗ — Không Gian Rộng Rãi</h4>
                            <p>Không gian cabin rộng rãi 7 chỗ ngồi với hàng ghế thứ ba linh hoạt, vật liệu cao cấp và trang bị tiện nghi đầy đủ cho cả hành trình đô thị và khám phá thiên nhiên.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/noi-that-overtrail.jpg')}}"
                            alt="Nội thất Overtrail Lexus GX 550">
                        <div class="design-caption">
                            <h4>Nội Thất Overtrail — Bền Bỉ & Cá Tính</h4>
                            <p>Phiên bản Overtrail sử dụng vật liệu nội thất kháng bẩn, ghế bọc da tổng hợp bền bỉ và các điểm nhấn màu Orange Copper đặc trưng tạo nên cá tính địa hình riêng biệt.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> Màn hình 14 inch</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Mark Levinson Premium</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Lexus Climate Concierge</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời / Giá nóc cầu nối</div>
                    <div class="feature-chip"><i class="bi bi-camera-video"></i> Camera toàn cảnh 360°</div>
                    <div class="feature-chip"><i class="bi bi-shield-shaded"></i> Rèm che nắng phía sau</div>
                </div>
            </div>

            {{-- <!-- OVERTRAIL -->
            <div class="design-pane" id="dp-overtrail">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/gx/overtrail.webp')}}"
                            alt="GX 550 Overtrail địa hình">
                        <div class="design-caption">
                            <h4>GX 550 Overtrail — Chinh Phục Mọi Địa Hình</h4>
                            <p>Phiên bản Overtrail được thiết kế đặc biệt cho những người yêu thích khám phá, với các nâng cấp địa hình độc quyền và màu sắc nổi bật Orange Copper đặc trưng.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/overtrail-mat-truoc.webp')}}"
                            alt="Cản trước Overtrail GX 550">
                        <div class="design-caption">
                            <h4>Cản Trước — Góc Tiếp Cận Tối Ưu</h4>
                            <p>Cản trước Overtrail được thiết kế với góc tiếp cận địa hình tối ưu, bảo vệ gầm xe và mang lại khả năng vượt địa hình dốc vượt trội.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/gx/khoang-hanh-ly.jpg')}}"
                            alt="Khoang hành lý GX 550 Overtrail">
                        <div class="design-caption">
                            <h4>Khoang Hành Lý — Thực Dụng & Rộng Rãi</h4>
                            <p>Khoang hành lý Overtrail được tối ưu cho hành trình dài với điểm móc hàng hóa chuyên dụng, dễ dàng vệ sinh và chịu được điều kiện khắc nghiệt.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-person-check"></i> Multi-Terrain Select</div>
                    <div class="feature-chip"><i class="bi bi-arrows-angle-expand"></i> Crawl Control</div>
                    <div class="feature-chip"><i class="bi bi-triangle"></i> Góc địa hình tối ưu</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3-gap"></i> Khung gầm BOF tăng cường</div>
                    <div class="feature-chip"><i class="bi bi-water"></i> KDSS — cân bằng địa hình</div>
                    <div class="feature-chip"><i class="bi bi-bookmark-check"></i> Orange Copper — màu đặc trưng</div>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- ==================== KHẢ NĂNG ĐỊA HÌNH ==================== -->
    <section class="equipment-section section-padding" id="offroad">
        <div class="container">
            <div class="section-tag">Vận hành đỉnh cao</div>
            <h2 class="section-title">Khả Năng Địa Hình GX 550</h2>
            <p class="section-desc">GX 550 được kiểm chứng thông qua những thử nghiệm khắc nghiệt lặp đi lặp lại ở nhiều môi trường khác nhau trên thế giới, từ sa mạc đến địa hình đá hộc.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this,'off-chassis')">Nền Tảng & Gầm Xe</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this,'off-tech')">Hệ Thống Hỗ Trợ Địa Hình</button>
            </div>

            <!-- NỀN TẢNG & GẦM XE -->
            <div class="equipment-content active" id="off-chassis">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">GA-F</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Khung Gầm Rời Body-on-Frame</h4>
                        <p class="ec-desc">Cấu trúc khung gầm rời Body-on-frame truyền thống đã được cải tiến toàn diện trên nền tảng GA-F trứ danh, mang đến độ cứng thân xe nâng cao và hiệu suất vượt địa hình đáng kinh ngạc.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Treo Cầu Cứng 4 Điểm Phía Sau</h4>
                        <p class="ec-desc">Hệ thống treo dạng cầu cứng kiểu liên kết 4 điểm với tay đòn điều khiển đặt dọc được thiết kế tối ưu hóa, cùng thiết bị kiểm soát lực ma sát FCD độc quyền.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Thân Xe Đa Vật Liệu</h4>
                        <p class="ec-desc">Thân xe cứng vững được cấu tạo từ đa vật liệu cao cấp, đồng thời tăng cường độ cứng xoắn, nâng cao khả năng hấp thụ va chạm trên địa hình khắc nghiệt.</p>
                    </div>
                </div>
            </div>

            <!-- HỆ THỐNG HỖ TRỢ ĐỊA HÌNH -->
            <div class="equipment-content" id="off-tech">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">HAC</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Hỗ Trợ Leo Dốc HAC</h4>
                        <p class="ec-desc">Hill-start Assist Control tự động giữ phanh khi dừng trên dốc, ngăn xe bị trôi về phía sau khi khởi hành, đặc biệt hữu ích khi vượt địa hình dốc đứng.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">4WD</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Hệ Dẫn Động 4 Bánh Part-Time</h4>
                        <p class="ec-desc">Hệ dẫn động 4 bánh part-time với hộp phân phối 2 cấp (H4/L4), cho phép chuyển đổi linh hoạt giữa 2WD và 4WD theo điều kiện mặt đường.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">LSD</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Vi Sai Khóa Cầu Sau</h4>
                        <p class="ec-desc">Khóa vi sai cầu sau giúp phân bổ đồng đều moment xoắn giữa 2 bánh sau khi một bánh bị mất lực bám, đặc biệt hiệu quả trên địa hình bùn lầy và đá.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CÔNG NGHỆ ==================== -->
    <section class="technology-section section-padding" id="technology">
        <div class="container">
            <div class="section-tag">An toàn & tiện nghi</div>
            <h2 class="section-title">Công Nghệ Tiên Phong</h2>
            <p class="section-desc">GX 550 được trang bị hệ thống an toàn chủ động toàn diện của Lexus kết hợp công nghệ địa hình và tiện nghi cao cấp hàng đầu.</p>

            <!-- An toàn chủ động -->
            <div class="tech-category">
                <h3 class="tech-category-title">
                    <span class="tech-item-icon">
                        <div class="ti-icon"><i class="bi bi-shield-check"></i></div>
                    </span>
                    Hệ Thống An Toàn Chủ Động — Lexus Safety System+
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/gx/PCS.webp') }}" alt="PCS">
                                </div>
                                <div class="ti-name">Hệ Thống An Toàn Tiền Va Chạm</div>
                                <div class="ti-abbr">PCS — Camera đơn + Ra-đa milimet</div>
                                <div class="ti-desc">Hỗ trợ tránh va chạm thông qua cảm biến camera đơn và ra-đa bước
                                    sóng milimet, tự động phanh khẩn cấp.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/RRCC.webp') }}" alt="DRCC">
                                </div>
                                <div class="ti-name">Điều Khiển Hành Trình Chủ Động</div>
                                <div class="ti-abbr">DRCC — Ở mọi tốc độ</div>
                                <div class="ti-desc">Tự động duy trì khoảng cách an toàn với xe phía trước ở mọi dải
                                    tốc độ, kể cả dừng hẳn trong kẹt xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/LTA.webp') }}" alt="LTA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Theo Dõi Làn Đường</div>
                                <div class="ti-abbr">LTA + LDA — Giữ trung tâm làn</div>
                                <div class="ti-desc">Hỗ trợ theo dõi làn đường, cảnh báo lệch làn và chức năng giữ xe
                                    ở trung tâm làn đường khi lái đường cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/AHB.webp') }}" alt="AHB">
                                </div>
                                <div class="ti-name">Đèn Pha — Cốt Tự Động</div>
                                <div class="ti-abbr">AHB — Automatic High Beam</div>
                                <div class="ti-desc">Tự động chuyển đổi đèn pha và cốt dựa trên điều kiện giao thông,
                                    tối ưu tầm nhìn ban đêm mà không gây chói mắt xe đối diện.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/BSM.webp') }}" alt="BSM">
                                </div>
                                <div class="ti-name">Hệ Thống Cảnh Báo Điểm Mù</div>
                                <div class="ti-abbr">BSM + RCTA — Phương tiện cắt ngang khi lùi</div>
                                <div class="ti-desc">Cảnh báo điểm mù khi chuyển làn và cảnh báo phương tiện cắt ngang
                                    khi lùi xe ra khỏi chỗ đỗ.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/SEA.webp') }}" alt="SEA">
                                </div>
                                <div class="ti-name">Hệ Thống Hỗ Trợ Rời Xe An Toàn</div>
                                <div class="ti-abbr">SEA — Safe Exit Assist</div>
                                <div class="ti-desc">Cảnh báo khi hành khách mở cửa xe trong khi có xe đang tiếp cận từ
                                    phía sau, ngăn ngừa tai nạn khi rời xe.</div>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/RRCC.webp') }}" alt="Dừng khẩn cấp">
                                </div>
                                <div class="ti-name">Hỗ Trợ Dừng Lái Xe Khẩn Cấp</div>
                                <div class="ti-abbr">Emergency Driving Stop System</div>
                                <div class="ti-desc">Tự động dừng xe an toàn khi phát hiện người lái mất khả năng
                                    điều khiển, bảo vệ tính mạng trong tình huống nguy cấp.</div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Tiện nghi -->
            <div class="tech-category">
                <h3 class="tech-category-title">
                    <span class="tech-item-icon">
                        <div class="ti-icon"><i class="bi bi-stars"></i></div>
                    </span>
                    Tính Năng Tiện Nghi & Vận Hành
                </h3>
                <div class="convenience-grid">
                    <div class="conv-item"><i class="bi bi-camera-video"></i> Camera toàn cảnh 360°</div>
                    <div class="conv-item"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="conv-item"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh Mark Levinson Premium Surround Sound</div>
                    <div class="conv-item"><i class="bi bi-soundwave"></i> Loa siêu trần phía sau</div>
                    <div class="conv-item"><i class="bi bi-thermometer-half"></i> Hệ thống điều hoà Lexus Climate Concierge</div>
                    <div class="conv-item"><i class="bi bi-shield-shaded"></i> Rèm che nắng phía sau</div>
                    <div class="conv-item"><i class="bi bi-stairs"></i> Bệ bước chân tự động</div>
                    <div class="conv-item"><i class="bi bi-sun"></i> Cửa sổ trời đơn / Giá nóc dạng cầu nối</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
<section class="specs-section section-padding" id="specs">
    <div class="container">
        <div class="section-tag">Dữ liệu kỹ thuật</div>
        <h2 class="section-title">Thông Số Kỹ Thuật — GX 550</h2>
        <div class="specs-grid">

            <!-- CARD 1: Động Cơ & Hiệu Năng -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge"></i> Động Cơ & Hiệu Năng</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">V35A-FTS, 6 xi lanh chữ V, tăng áp</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">3,445 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất cực đại</span><span class="spec-value">260 kW (349 HP) / 4,800–5,200 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">650 Nm / 2,000–3,600 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">Tự động</span></div>
                    <div class="spec-row"><span class="spec-name">Tốc độ cực đại</span><span class="spec-value">175 km/h</span></div>
                    <div class="spec-row"><span class="spec-name">Tăng tốc 0–100 km/h</span><span class="spec-value">7 giây</span></div>
                </div>
            </div>

            <!-- CARD 2: Kích Thước & Không Gian -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-rulers"></i> Kích Thước & Không Gian</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao</span><span class="spec-value">4,960 × 1,980 × 1,865 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều dài cơ sở</span><span class="spec-value">2,850 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">7</span></div>
                    <div class="spec-row"><span class="spec-name">Khoảng sáng gầm xe</span><span class="spec-value">220 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng toàn tải</span><span class="spec-value">3,175 kg</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích khoang hành lý</span><span class="spec-value">2,178 L (tối đa)</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ số lực cản</span><span class="spec-value">0.40</span></div>
                </div>
            </div>

            <!-- CARD 3: Khung Gầm & Vận Hành -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Vận Hành</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span class="spec-value">Tay đòn kép</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span class="spec-value">Liên kết 4 điểm với lò xo</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống lái</span><span class="spec-value">Trợ lực điện</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh trước</span><span class="spec-value">Đĩa thông gió</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh sau</span><span class="spec-value">Đĩa thông gió</span></div>
                    <div class="spec-row"><span class="spec-name">Bậc lên xuống</span><span class="spec-value">Chỉnh điện</span></div>
                    <div class="spec-row"><span class="spec-name">Thanh giá nóc</span><span class="spec-value">Dạng thanh ray</span></div>
                </div>
            </div>

            <!-- CARD 4: Ghế & Tiện Nghi Nội Thất -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-stars"></i> Ghế & Tiện Nghi Nội Thất</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Chất liệu ghế</span><span class="spec-value">Da Semi-Aniline</span></div>
                    <div class="spec-row"><span class="spec-name">Ghế người lái</span><span class="spec-value">Chỉnh điện 10 hướng — nhớ 3 vị trí</span></div>
                    <div class="spec-row"><span class="spec-name">Sưởi / Làm mát ghế</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Mát-xa ghế</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hàng ghế sau</span><span class="spec-value">Gập 60:40 — Chỉnh cơ</span></div>
                    <div class="spec-row"><span class="spec-name">Gương chiếu hậu kỹ thuật số</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hộp lạnh</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Ốp trang trí Tsuyasumi</span><span class="spec-value">Có</span></div>
                </div>
            </div>

            <!-- CARD 5: Ngoại Thất -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-car-front"></i> Ngoại Thất</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Đèn chiếu gần / xa</span><span class="spec-value">3 LED</span></div>
                    <div class="spec-row"><span class="spec-name">Đèn báo rẽ trước</span><span class="spec-value">LED Sequential</span></div>
                    <div class="spec-row"><span class="spec-name">Đèn ban ngày / sương mù</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Tự động điều chỉnh góc chiếu & pha-cốt</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Đèn báo rẽ sau / phanh cao</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Gương chiếu hậu ngoài</span><span class="spec-value">Chống chói, sấy gương, nhớ vị trí</span></div>
                    <div class="spec-row"><span class="spec-name">Cửa sổ trời toàn cảnh</span><span class="spec-value">Làm mờ — Chỉnh điện</span></div>
                </div>
            </div>

            <!-- CARD 6: Điều Hòa & Màn Hình -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-thermometer-half"></i> Điều Hòa & Màn Hình</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Điều hòa</span><span class="spec-value">3 vùng tự động</span></div>
                    <div class="spec-row"><span class="spec-name">Chức năng Nano-e</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Lọc bụi phấn hoa</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Bảng đồng hồ kỹ thuật số</span><span class="spec-value">12.3 inch</span></div>
                    <div class="spec-row"><span class="spec-name">Màn hình hiển thị đa thông tin</span><span class="spec-value">3 màn hình</span></div>
                    <div class="spec-row"><span class="spec-name">Màn hình HUD</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Màn hình trung tâm</span><span class="spec-value">14 inch</span></div>
                </div>
            </div>

            <!-- CARD 7: Giải Trí & Kết Nối -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-music-note-beamed"></i> Giải Trí & Kết Nối</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống âm thanh Mark Levinson</span><span class="spec-value">21 loa — vòm 3D</span></div>
                    <div class="spec-row"><span class="spec-name">Apple CarPlay & Android Auto</span><span class="spec-value">Có (không dây)</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống dẫn đường</span><span class="spec-value">Bản đồ Việt Nam</span></div>
                    <div class="spec-row"><span class="spec-name">Chìa khóa điện tử / dạng thẻ</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Cổng sạc USB (Type C)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">AM/FM / USB / Bluetooth</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Tấm che nắng cửa sau</span><span class="spec-value">Có</span></div>
                </div>
            </div>

            <!-- CARD 8: An Toàn Chủ Động -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-shield-check"></i> An Toàn Chủ Động</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Chống bó cứng phanh (ABS)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hỗ trợ lực phanh (BA)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Phân phối lực phanh (EBD)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Ổn định thân xe (VSC)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Kiểm soát lực bám (TRC)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Đèn báo phanh khẩn cấp (EBS)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hỗ trợ khởi hành ngang dốc (HAC)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hỗ trợ vào cua chủ động (ACA)</span><span class="spec-value">Có</span></div>
                </div>
            </div>

            <!-- CARD 9: Hỗ Trợ Lái Thông Minh & Đỗ Xe -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-eye"></i> Hỗ Trợ Lái Thông Minh</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Điều khiển hành trình chủ động (DRCC)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">An toàn tiền va chạm (PCS)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Cảnh báo & hỗ trợ làn đường (LDA / LTA)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hỗ trợ ra khỏi xe (SEA)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Cảnh báo điểm mù (BSM)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Cảnh báo phương tiện cắt ngang (RCTA)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Hỗ trợ đỗ xe</span><span class="spec-value">Camera 360</span></div>
                    <div class="spec-row"><span class="spec-name">Túi khí SRS</span><span class="spec-value">8 túi khí</span></div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- ==================== NEWSLETTER ==================== -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h3>Experience Amazing</h3>
                    <div class="nb-sub">Đăng ký nhận tin tức mới nhất từ Lexus Vietnam</div>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="nl-form">
                        <input type="email" placeholder="Địa chỉ email">
                        <button class="btn-nls">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        /* ===================== GALLERY BY COLOUR ===================== */
        const colorGalleries = {
            white: {
                name: 'Sonic White',
                images: [
                    '{{ asset('web/assets/images/gx/mau-trang1.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-trang2.webp') }}',
                    '{{ asset('web/assets/images/gx/mau-trang3.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-trang4.webp') }}'
                ]
            },
            black: {
                name: 'Caviar Black',
                images: [
                    '{{ asset('web/assets/images/gx/mau-den1.webp') }}',
                    '{{ asset('web/assets/images/gx/mau-den2.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-den3.webp') }}',
                    '{{ asset('web/assets/images/gx/mau-den4.jpg') }}'
                ]
            },
            silver: {
                name: 'Sonic Titanium',
                images: [
                    '{{ asset('web/assets/images/gx/mau-xam1.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-xam2.webp') }}',
                    '{{ asset('web/assets/images/gx/mau-xam3.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-xam4.webp') }}'
                ]
            },
            green: {
                name: 'Nori Green Pearl',
                images: [
                    '{{ asset('web/assets/images/gx/mau-xanhla1.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-xanhla2.webp') }}',
                    '{{ asset('web/assets/images/gx/mau-xanhla3.jpg') }}',
                    '{{ asset('web/assets/images/gx/mau-xanhla4.webp') }}'
                ]
            }
        };
        let currentColor = 'black',
            currentImageIndex = 0;

        function changeImage(dir) {
            const imgs = colorGalleries[currentColor].images;
            currentImageIndex = (currentImageIndex + dir + imgs.length) % imgs.length;
            updateGallery();
        }

        function setImage(idx, thumb) {
            currentImageIndex = idx;
            updateGallery();
            document.querySelectorAll('.gallery-thumb').forEach((t, i) => t.classList.toggle('active', i === idx));
        }

        function updateGallery() {
            const imgs = colorGalleries[currentColor].images;
            document.getElementById('mainImage').src = imgs[currentImageIndex];
            document.getElementById('currentIndex').textContent = currentImageIndex + 1;
            document.querySelectorAll('.gallery-thumb').forEach((t, i) => {
                t.classList.toggle('active', i === currentImageIndex);
                t.querySelector('img').src = imgs[i];
            });
        }

        /* ===================== COLOUR SELECTOR (product panel) ===================== */
        function selectColor(el) {
            document.querySelectorAll('.color-option').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            currentColor = el.dataset.color;
            currentImageIndex = 0;
            document.getElementById('selectedColor').textContent = colorGalleries[currentColor].name;
            updateGallery();
        }

        /* ===================== VERSION SELECTOR ===================== */
        let selectedVersion = {};

        function selectVersion(el, price, name, hp, acc, fuel, drive) {
            document.querySelectorAll('.version-option').forEach(v => v.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('priceDisplay').innerHTML = price + '<span> VNĐ</span>';
            document.getElementById('qs-hp').textContent = hp;
            document.getElementById('qs-acc').textContent = acc;
            document.getElementById('qs-fuel').textContent = fuel;
            document.getElementById('qs-drive').textContent = drive;
            selectedVersion = { price, name };
        }

        const _activeVersion = document.querySelector('.version-option.active');
        if (_activeVersion) {
            selectedVersion = {
                price: _activeVersion.querySelector('.vo-price').textContent,
                name: _activeVersion.querySelector('.vo-name').textContent
            };
        }

        /* ===================== FAVOURITE ===================== */
        function toggleFavorite(btn) {
            const icon = btn.querySelector('i');
            const active = icon.classList.contains('bi-heart-fill');
            icon.classList.toggle('bi-heart', active);
            icon.classList.toggle('bi-heart-fill', !active);
            btn.style.background = active ? '' : 'var(--lexus-gold)';
            btn.style.color = active ? '' : 'var(--lexus-black)';
        }

        /* ===================== EQUIPMENT TABS ===================== */
        function switchEquipmentTab(tab, contentId) {
            document.querySelectorAll('.equipment-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.equipment-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(contentId).classList.add('active');
        }

        /* ===================== COLOUR TABS ===================== */
        function switchColour(btn, paneId) {
            document.querySelectorAll('.colour-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.colour-pane').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(paneId).classList.add('active');
        }

        /* ===================== ITEM CARDS (wheels/seats/trim) ===================== */
        function selectCard(el) {
            el.closest('[class*="item-grid"]').querySelectorAll('.item-card').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
        }

        /* ===================== VARIANT TABS (powertrain) ===================== */
        function switchVariant(btn, paneId) {
            document.querySelectorAll('.variant-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.variant-pane').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(paneId).classList.add('active');
        }

        /* ===================== DESIGN TABS ===================== */
        function switchDesign(btn, paneId) {
            document.querySelectorAll('.design-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.design-pane').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(paneId).classList.add('active');
        }

        /* ===================== INQUIRY FORM ===================== */
        function showToast(success = true) {
            const toast = document.createElement('div');
            toast.className = 'toast-notify';
            toast.innerHTML = success ? `
            <div class="toast-icon">✅</div>
            <div>
                <div class="toast-title">Gửi thông tin thành công!</div>
                <div class="toast-sub">Chúng tôi sẽ phản hồi bạn ngay trong thời gian sớm nhất.</div>
            </div>
        ` : `
            <div class="toast-icon">❌</div>
            <div>
                <div class="toast-title">Gửi thất bại!</div>
                <div class="toast-sub">Vui lòng thử lại sau.</div>
            </div>
        `;
            document.body.appendChild(toast);
            setTimeout(() => toast.classList.add('show'), 10);
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 400);
            }, 4000);
        }

        async function submitInquiry(event) {
            event.preventDefault();

            const btn = document.getElementById('submitBtn');
            btn.disabled = true;

            const form = event.target;
            const data = {
                name: form.querySelector('input[type="text"]').value,
                phone: form.querySelector('input[type="tel"]').value,
                email: form.querySelector('input[type="email"]').value || null,
                note: form.querySelector('textarea').value || null,
                car: selectedVersion.name,
                price: selectedVersion.price,
                url: window.location.href
            };

            try {
                const res = await fetch('/api/customers', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                if (res.ok) {
                    showToast(true);
                    form.reset();
                } else {
                    showToast(false);
                }
            } catch (e) {
                showToast(false);
            } finally {
                setTimeout(() => btn.disabled = false, 5000);
            }
        }

        /* ===================== NAVBAR + BACK TO TOP ===================== */
        window.addEventListener('scroll', () => {
            document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 100);
            document.getElementById('backToTop').classList.toggle('show', window.scrollY > 400);
        });

        /* ===================== SCROLL REVEAL ===================== */
        const revealObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.opacity = '1';
                    e.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll(
                '.section-title, .equipment-card, .tech-item, .conv-item, .chassis-info-box, .specs-card, .pt-spec, .ms-item, .design-card, .item-card'
            )
            .forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'all 0.5s ease';
                revealObs.observe(el);
            });
    </script>
@endpush
@push('css')
    <style>
        .toast-notify {
            position: fixed;
            top: 30px;
            right: 30px;
            background: #1a1a2e;
            color: #fff;
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 9999;
            transform: translateX(120%);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .toast-notify.show {
            transform: translateX(0);
        }
        .toast-notify .toast-icon {
            font-size: 24px;
        }
        .toast-notify .toast-title {
            font-weight: 700;
            font-size: 15px;
        }
        .toast-notify .toast-sub {
            font-size: 12px;
            opacity: 0.7;
        }
    </style>
@endpush
