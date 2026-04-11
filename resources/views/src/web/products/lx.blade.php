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
                                <span>F SPORT</span>
                                <span class="new">V6 Twin Turbo</span>
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
                                <img src="{{ asset('web/assets/images/lx/anh-main.webp') }}"
                                    alt="Lexus LX 600 F SPORT" id="mainImage">
                            </div>
                            <button class="gallery-nav prev" onclick="changeImage(-1)"><i
                                    class="bi bi-chevron-left"></i></button>
                            <button class="gallery-nav next" onclick="changeImage(1)"><i
                                    class="bi bi-chevron-right"></i></button>
                            <div class="gallery-counter"><span id="currentIndex">1</span> / <span id="totalImages">5</span>
                            </div>
                        </div>
                        <div class="gallery-thumbs">
                            <div class="gallery-thumb active" onclick="setImage(0,this)"><img
                                    src="{{ asset('web/assets/images/lx/anh-main.webp') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/lx/anh-2.webp') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/lx/anh-3.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/lx/anh-4.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/lx/anh-5.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> V6 3.5L Twin Turbo — 409 HP
                        </div>
                        <h1 class="product-title">Lexus LX</h1>
                        <p class="product-subtitle">600 — 3.5L V6 Twin Turbo | 10AT | AWD</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.9</strong> (132 đánh giá)</span>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option active"
                                    onclick="selectVersion(this,'8.590.000.000','LX 600 Urban 7 chỗ',409,'6.7s','12.2L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LX 600 — Urban 7 chỗ</div>
                                    </div>
                                    <div class="vo-price">8.590.000.000đ</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'8.840.000.000','LX 600 F SPORT',409,'6.7s','12.2L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LX 600 — F SPORT</div>
                                    </div>
                                    <div class="vo-price">8.840.000.000đ</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'9.700.000.000','LX 600 VIP 4 chỗ',409,'6.7s','12.2L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LX 600 — VIP 4 chỗ</div>
                                    </div>
                                    <div class="vo-price">9.700.000.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">8.590.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="quick-specs" style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">409</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">6.7s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">12.2L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">AWD</div>
                                    <div class="qs-label">4WD</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~105 triệu/tháng</strong> với lãi suất
                                    ưu đãi</div>
                            </div>
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
                    <img src="{{ asset('web/assets/images/lx/intro.jpg') }}"
                        alt="Lexus LX 600 — SUV địa hình hạng sang tiên phong">
                    <div class="intro-year-badge">
                        <div class="iyb-year">1996</div>
                        <div class="iyb-label">Năm tiên phong</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">SUV Địa Hình Hạng Sang Đỉnh Cao</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Chiều dài cơ sở 2,850 mm và các góc gầm xe được
                        truyền lại qua nhiều thế hệ LX đã thành công rực rỡ với khả năng vận hành vượt trội trên đường địa
                        hình. Kế thừa đặc điểm này, Lexus đã phát triển một nền tảng mới kết hợp sức mạnh của dòng xe địa
                        hình thực thụ với phong cách thành thị tinh tế.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">Các trụ phía trước đã được
                        kéo về phía sau để tạo ra một thiết kế thể thao mạnh mẽ với khoang hành khách lùi sau, thân xe
                        chắc chắn cùng mâm xe 22 inch — lớn nhất trong các dòng sản phẩm Lexus — tạo nên ấn tượng vừa
                        năng động vừa sang trọng. Ba phiên bản Urban, F SPORT và VIP đáp ứng trọn vẹn mọi nhu cầu từ đi
                        địa hình đến đẳng cấp doanh nhân.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">3</div>
                            <div class="ms-label">Phiên bản</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">409</div>
                            <div class="ms-label">Mã lực V6</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">22"</div>
                            <div class="ms-label">Mâm lớn nhất Lexus</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">6</div>
                            <div class="ms-label">Chế độ địa hình MTS</div>
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
            <p class="section-desc">Tạo nên chiếc LX mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, chất liệu
                ghế, ốp nội thất và mâm xe 22 inch độc quyền.</p>

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
                                <img src="{{ asset('web/assets/images/lx/mau-den.webp') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Màu đen — Caviar Black</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lx/mau-trang.webp') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Màu trắng — Sonic White</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lx/mau-xam.jpg') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Màu xám — Sonic Titanium</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lx/mau-do.jpg') }}" alt="Màu đỏ">
                            </div>
                            <div class="ti-abbr">Màu đỏ — Matador Red</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MÂM XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus LX
                    trang bị mâm xe hợp kim nhôm 22 inch — lớn nhất trong các dòng sản phẩm Lexus — với nhiều kiểu thiết
                    kế phù hợp cho từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/mam-urban.webp') }}" alt="Mâm 22 inch Urban">
                        <div class="item-card-label">Mâm hợp kim nhôm 22 inch<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LX 600 Urban</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/mam-fsport.webp') }}" alt="Mâm 22 inch F SPORT">
                        <div class="item-card-label">Mâm hợp kim nhôm 22 inch dập nguyên khối<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LX 600 F SPORT</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/mam-vip.jpg') }}" alt="Mâm 22 inch VIP">
                        <div class="item-card-label">Mâm hợp kim nhôm 22 inch sang trọng<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LX 600 VIP</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-info-circle me-2"></i>LX 600 F SPORT:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Mâm xe thể thao hợp kim nhôm 22 inch
                        được dập nguyên khối — độc quyền F SPORT với màu sơn jet black đặc trưng.</span>
                </div>
            </div>

            <!-- CHẤT LIỆU GHẾ -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ghế bọc da
                    cao cấp với nhiều lựa chọn màu sắc và chất liệu theo từng phiên bản, mang lại sự sang trọng và thoải
                    mái tối đa.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-den.png') }}" alt="Ghế đen">
                        <div class="item-card-label">Đen black</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-nau.png') }}" alt="Ghế nâu">
                        <div class="item-card-label">Nâu Sunflare Brown</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-trang.png') }}" alt="Ghế trắng">
                        <div class="item-card-label">Trắng White & Dark Sepia</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-hazel.png') }}" alt="Ghế Hazel">
                        <div class="item-card-label">Nâu Hazel</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-den2.png') }}" alt="Ghế đen 2">
                        <div class="item-card-label">Đen black</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-crimson.png') }}" alt="Ghế Crimson">
                        <div class="item-card-label">Đổ thẫm Crimson</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/ghe-do.png') }}" alt="Ghế đỏ">
                        <div class="item-card-label">Đỏ Flare Red</div>
                    </div>
                </div>
            </div>

            <!-- ỐP NỘI THẤT -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp trang
                    trí cánh cửa và nội thất đa dạng từ gỗ sang trọng đến nhôm Hadori thể thao, tạo nên bầu không khí
                    cabin đẳng cấp theo từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/op-go.jpg') }}" alt="Ốp gỗ VIP">
                        <div class="item-card-label">Ốp gỗ sang trọng<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LX 600 VIP</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/op-nhom.webp') }}" alt="Ốp nhôm Hadori F SPORT">
                        <div class="item-card-label">Nhôm Hadori — họa tiết kiếm Nhật<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản F SPORT độc quyền</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lx/op-noi-that.webp') }}" alt="Ốp nội thất Urban">
                        <div class="item-card-label">Ốp nội thất cao cấp<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản Urban</span></div>
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
            <p class="section-desc">Lexus LX 600 được trang bị động cơ V6 3.5L tăng áp kép mạnh mẽ nhất trong lịch sử
                dòng LX, kết hợp hộp số 10 cấp và hệ dẫn động 4 bánh toàn thời gian.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-engine')">Động Cơ V6 3.5L Twin Turbo</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-transmission')">Hộp Số & Hệ Dẫn Động</button>
            </div>

            <!-- ĐỘNG CƠ -->
            <div class="variant-pane active" id="vt-engine">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/lx/dong-co.webp') }}" alt="Động cơ LX 600 3.5L V6 Twin Turbo">
                        <div class="powertrain-badge">3.5L V6 TT</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động Cơ 3.5L V6 Tăng Áp Kép</h3>
                        <p>Động cơ xăng 3,5 lít V6 tăng áp kép cho công suất cực đại 305kW (409HP) và mô-men xoắn cực đại
                            650Nm. Trang bị công nghệ D-4ST với kim phun trực tiếp nhiều lỗ, cùng với hành trình pít tông
                            dài và quá trình đốt cháy tốc độ cao đạt được nhờ việc tối ưu hóa góc hoạt động van nạp/xả và
                            bộ tăng áp kép hiệu suất cao.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">409 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">650 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">V6</div>
                                <div class="pt-spec-label">Cấu hình</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Công nghệ động cơ D-4ST</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Bộ tăng áp kép hiệu suất cao</div>
                                <div class="hc-item"><i class="bi bi-droplet"></i> Kim phun nhiên liệu trực tiếp nhiều lỗ D-4ST</div>
                                <div class="hc-item"><i class="bi bi-shield-check"></i> Vòng bi & phớt dầu chống nước — chống bụi</div>
                                <div class="hc-item"><i class="bi bi-arrow-down-circle"></i> Khay dầu tối ưu vận hành dốc ±45°</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Bộ tăng
                            áp kép hiệu suất cao cung cấp đặc tính mô-men xoắn lớn và tuyến tính giúp tăng tốc mạnh mẽ ngay
                            từ tốc độ thấp, tạo ra sức mạnh lớn và khả năng điều khiển dễ dàng khi lái xe ở cả điều kiện
                            địa hình và đô thị.</p>
                    </div>
                </div>
            </div>

            <!-- HỘP SỐ & DẪN ĐỘNG -->
            <div class="variant-pane" id="vt-transmission">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/lx/hop-so.jpg') }}" alt="Hệ dẫn động 4 bánh LX 600">
                        <div class="powertrain-badge">10AT 4WD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-arrow-repeat me-2"></i>Hộp Số 10 Cấp Sang Số Trực Tiếp</h3>
                        <p>Hộp số tự động 10 cấp sang số trực tiếp với tính năng khóa biến mô thủy lực được kích hoạt ở hầu
                            hết các phạm vi tốc độ trừ khi khởi động. Số lượng cấp số lớn hơn và tỷ số truyền tổng thể được
                            mở rộng hơn so với thế hệ trước, tạo nên khả năng thay đổi tốc độ liền mạch và êm ái.</p>
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
                                <div class="pt-spec-value">6 chế độ</div>
                                <div class="pt-spec-label">MTS địa hình</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">H4 / L4</div>
                                <div class="pt-spec-label">Chuyển số địa hình</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Hệ Thống Lựa Chọn Đa Địa Hình MTS — 6 Chế Độ</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-cpu"></i> Auto — tự động chọn chế độ tối ưu theo cảm biến</div>
                                <div class="hc-item"><i class="bi bi-snow2"></i> Dirt/Sand — địa hình cát & đất</div>
                                <div class="hc-item"><i class="bi bi-water"></i> Mud — địa hình bùn lầy</div>
                                <div class="hc-item"><i class="bi bi-triangle"></i> Rock — địa hình núi đá tốc độ cực thấp</div>
                                <div class="hc-item"><i class="bi bi-snow"></i> Snow — địa hình tuyết</div>
                                <div class="hc-item"><i class="bi bi-tree"></i> Deep Snow/Mogul — tuyết sâu & gồ ghề</div>
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
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Hệ thống treo thích ứng AVS kết hợp
                kiểm soát độ cao chủ động AHC và lái trợ lực điện EPS mang đến khả năng vận hành hoàn hảo trên mọi địa
                hình từ núi đá đến đô thị.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lx/treo-avs.jpg') }}"
                            alt="Hệ thống treo thích ứng AVS Lexus LX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo thích ứng AVS</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lx/treo-ahc.webp') }}"
                            alt="Kiểm soát độ cao chủ động AHC Lexus LX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Kiểm soát độ cao chủ động AHC</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-arrows-vertical"></i>Hệ Thống AHC — 4 Mức Độ Cao</h4>
                        <p class="chassis-info-desc">AHC tự động điều chỉnh chiều cao xe tối ưu dựa trên lựa chọn chế độ
                            lái và điều kiện đường: Normal, High 1, High 2 và Low. Chế độ Low hỗ trợ ra vào xe dễ dàng,
                            tự động nâng lên khi xe khởi hành.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/lx/khung-gam.webp') }}"
                            alt="Hệ thống khung gầm Lexus LX 600">
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Treo Thích Ứng AVS</h4>
                        <p class="chassis-info-desc">AVS sử dụng hệ thống van điện tử tuyến tính để tạo ra phản ứng chuyển
                            đổi lực tuyệt vời, điều khiển chính xác liền mạch lực giảm xóc, đáp ứng hoàn hảo nhiều loại
                            mặt đường và điều kiện vận hành khác nhau.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Lái Trợ Lực Điện EPS</h4>
                        <p class="chassis-info-desc">EPS mang đến khả năng phản hồi tuyến tính ngay từ khi bắt đầu đánh
                            lái. Tốc độ thấp — đánh lái nhẹ nhàng tự tin. Tốc độ cao — lực vừa phải, điều khiển chính xác
                            theo ý định người lái.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-stoplights"></i>Phanh Điều Khiển Điện Tử ECB</h4>
                        <p class="chassis-info-desc">Cảm biến theo dõi mức độ đạp phanh tạo ra lực phanh tối ưu, đạt được
                            đặc tính phanh tuyến tính hơn trong mọi điều kiện vận hành.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế LX 600</h2>
            <p class="section-desc">Kết hợp sức mạnh của dòng xe địa hình thực thụ với phong cách thành thị tinh tế.
                Mâm xe 22 inch lớn nhất Lexus cùng thân xe chắc chắn tạo nên ấn tượng vừa năng động vừa sang trọng.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-vip')">Phiên Bản VIP</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/ngoai-that-fsport.webp')}}"
                            alt="Ngoại thất Lexus LX 600 F SPORT">
                        <div class="design-caption">
                            <h4>Ngoại Thất F SPORT — Mạnh Mẽ & Thể Thao</h4>
                            <p>Lưới tản nhiệt họa tiết chữ F với viền mạ đen jet black, mâm xe thể thao 22 inch dập nguyên
                                khối và màu sơn độc đáo nhấn mạnh sự bền bỉ của F SPORT.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/ngoai-that-urban.webp')}}"
                            alt="Ngoại thất Lexus LX 600 Urban">
                        <div class="design-caption">
                            <h4>Ngoại Thất Urban — Thanh Lịch & Đô Thị</h4>
                            <p>Thiết kế thể thao mạnh mẽ với khoang hành khách lùi sau, thân xe chắc chắn và mâm xe 22
                                inch tạo nên ấn tượng năng động trong môi trường đô thị.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lx/ngoai-that-ben.jpg')}}"
                            alt="Góc nhìn tổng thể Lexus LX 600">
                        <div class="design-caption">
                            <h4>Thân Xe — Chiều Dài Cơ Sở 2,850mm</h4>
                            <p>Các trụ phía trước kéo về phía sau tạo ra thiết kế thể thao mạnh mẽ. Mâm xe 22 inch —
                                lớn nhất trong dòng sản phẩm Lexus — tạo nên tỷ lệ uy lực và đẳng cấp.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Đèn pha LED tích hợp</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Lưới Spindle thế hệ mới</div>
                    <div class="feature-chip"><i class="bi bi-circle"></i> Mâm 22" lớn nhất Lexus</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Wheelbase 2,850mm</div>
                    <div class="feature-chip"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="feature-chip"><i class="bi bi-door-closed"></i> Cửa hít điện tử</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lx/noi-that-1.jpg')}}"
                            alt="Nội thất Lexus LX 600">
                        <div class="design-caption">
                            <h4>Nội Thất — Sang Trọng & Tiên Tiến</h4>
                            <p>Màn hình điều khiển trung tâm hiện đại kết hợp nội thất da cao cấp. Hệ thống điều hòa chủ
                                động Lexus, âm thanh vòm 3 chiều Mark Levinson tạo nên trải nghiệm cabin đẳng cấp.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/noi-that-urban.webp')}}"
                            alt="Nội thất 7 chỗ Lexus LX 600 Urban">
                        <div class="design-caption">
                            <h4>Cabin 7 Chỗ — Phiên Bản Urban</h4>
                            <p>Không gian cabin rộng rãi 7 chỗ ngồi với vật liệu cao cấp và trang bị tiện nghi đầy đủ phù
                                hợp cho gia đình và doanh nghiệp.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/noi-that-fsport.webp')}}"
                            alt="Nội thất F SPORT Lexus LX 600">
                        <div class="design-caption">
                            <h4>Nội Thất F SPORT — Flare Red & Black</h4>
                            <p>Màu nội thất F SPORT đỏ Flare Red và đen Black ấn tượng, kết hợp cùng ốp trang trí nhôm
                                Hadori lấy cảm hứng từ họa tiết trên thanh kiếm Nhật.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> Màn hình điều khiển trung tâm</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Mark Levinson® 3D</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà chủ động Lexus</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời panoramic</div>
                    <div class="feature-chip"><i class="bi bi-door-open"></i> Cửa hít điện (trước & sau)</div>
                    <div class="feature-chip"><i class="bi bi-box-arrow-in-down"></i> Cửa hậu rảnh tay</div>
                </div>
            </div>

            <!-- PHIÊN BẢN VIP -->
            <div class="design-pane" id="dp-vip">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lx/vip-1.jpg')}}"
                            alt="Phiên bản VIP Lexus LX 600">
                        <div class="design-caption">
                            <h4>Phiên Bản VIP — Không Gian Thư Giãn Đỉnh Cao</h4>
                            <p>Phiên bản VIP sở hữu không gian hàng ghế thứ hai vô cùng rộng rãi cho hai người, được
                                trang bị các chức năng chu đáo để mang đến chuyến đi thoải mái, ngay cả khi di chuyển
                                hành trình dài hay trên đường địa hình.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/vip-ghe.jpg')}}"
                            alt="Ghế VIP Lexus LX 600">
                        <div class="design-caption">
                            <h4>Ghế Sau Chỉnh Điện — Góc Ngả 48°</h4>
                            <p>Chức năng thư giãn, nhớ vị trí, đệm đỡ chân ottoman và đèn đọc sách. Ghế sau bên phải
                                ngả tối đa 48 độ với đệm đỡ chân ottoman sang trọng.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lx/vip-rse.jpg')}}"
                            alt="RSE Lexus LX 600 VIP">
                        <div class="design-caption">
                            <h4>Hệ Thống Giải Trí RSE & Bảng Điều Khiển Sau</h4>
                            <p>Hệ thống giải trí cho hàng ghế sau RSE kết hợp bảng điều khiển tiện nghi phía sau, mang
                                đến trải nghiệm di chuyển như phòng khách VIP.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-person-check"></i> Ghế VIP chỉnh điện 4 chỗ</div>
                    <div class="feature-chip"><i class="bi bi-arrows-angle-expand"></i> Ngả 48° + Ottoman</div>
                    <div class="feature-chip"><i class="bi bi-display"></i> RSE hàng ghế sau</div>
                    <div class="feature-chip"><i class="bi bi-lightbulb"></i> Đèn đọc sách VIP</div>
                    <div class="feature-chip"><i class="bi bi-controller"></i> Bảng điều khiển phía sau</div>
                    <div class="feature-chip"><i class="bi bi-bookmark-check"></i> Nhớ vị trí ghế</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== F SPORT EQUIPMENT ==================== -->
    <section class="equipment-section section-padding" id="fsport">
        <div class="container">
            <div class="section-tag">Phiên bản đặc biệt</div>
            <h2 class="section-title">Trang Bị F SPORT PERFORMANCE</h2>
            <p class="section-desc">Phiên bản LX 600 F SPORT sở hữu hiệu suất vận hành hứng khởi, đạt được thông qua
                loạt cải tiến độc quyền từ ngoại thất đến nội thất và vận hành.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this,'exterior')">Ngoại Thất F SPORT</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this,'interior')">Nội Thất & Vận Hành</button>
            </div>

            <!-- NGOẠI THẤT F SPORT -->
            <div class="equipment-content active" id="exterior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Lưới Tản Nhiệt Họa Tiết Chữ F</h4>
                        <p class="ec-desc">Lưới tản nhiệt họa tiết chữ F với viền mạ đen jet black được thiết kế để nâng
                            cao hiệu suất làm mát, tạo ấn tượng mạnh mẽ và nổi bật ngay từ cái nhìn đầu tiên.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Mâm 22" Dập Nguyên Khối</h4>
                        <p class="ec-desc">Mâm xe thể thao hợp kim nhôm 22 inch được dập nguyên khối, màu sơn độc đáo
                            nhấn mạnh sự bền bỉ và phong cách F SPORT.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Cản Sau Họa Tiết Chữ F</h4>
                        <p class="ec-desc">Họa tiết chữ F ở phần dưới cản sau tạo nên tính nhất quán thể thao xuyên suốt
                            từ đầu đến đuôi xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Màu Sơn Độc Quyền F SPORT</h4>
                        <p class="ec-desc">Màu sơn độc đáo nhấn mạnh sự bền bỉ và cá tính thể thao, chỉ có trên phiên
                            bản F SPORT.</p>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT & VẬN HÀNH F SPORT -->
            <div class="equipment-content" id="interior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Nội Thất Flare Red & Black</h4>
                        <p class="ec-desc">Màu nội thất F SPORT đỏ Flare Red và đen Black ấn tượng, kết hợp cùng ốp trang
                            trí nhôm Hadori lấy cảm hứng từ họa tiết trên thanh kiếm Nhật Bản.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Vô Lăng & Cần Số Da Đục Lỗ</h4>
                        <p class="ec-desc">Da thật đục lỗ được sử dụng trên vô lăng và cần số, tăng cường trải nghiệm
                            cầm nắm và cảm giác thể thao trong từng thao tác.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Bàn Đạp Nhôm Thể Thao</h4>
                        <p class="ec-desc">Bàn đạp nhôm và bệ nghỉ chân thể thao được cải thiện khả năng thao tác,
                            mang lại cảm giác kết nối chân thực với xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Thanh Cân Bằng Giảm Chấn</h4>
                        <p class="ec-desc">Thanh cân bằng giảm chấn phía trước/phía sau và thanh cân bằng phía sau tăng
                            cường độ ổn định khi xử lý, đặc biệt trong điều kiện đường đô thị.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Vi Sai Hạn Chế Trượt Torsen</h4>
                        <p class="ec-desc">Bộ vi sai hạn chế trượt Torsen phân bổ lực truyền động tối ưu theo tải trọng
                            bánh sau trái phải, tăng cường độ bám đường khi tăng tốc vào cua.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Hiệu Chỉnh EPS & AVS Độc Quyền</h4>
                        <p class="ec-desc">Hiệu chỉnh độc quyền cho hệ thống EPS và AVS làm sắc nét độ ổn định xử lý và
                            đạt được sự phản hồi thể thao thuần chất F SPORT.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Logo F SPORT Đa Điểm</h4>
                        <p class="ec-desc">Logo F SPORT được bố trí trên tựa đầu, vô lăng và bệ bước chân, khẳng định
                            khí chất thể thao ở mọi chi tiết.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Ghế Trước Hỗ Trợ Bên Nâng Cao</h4>
                        <p class="ec-desc">Phần đệm và phần hỗ trợ bên của ghế trước được cải thiện, mang đến tư thế
                            lái ổn định kể cả trong điều kiện vào cua tốc độ cao.</p>
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
            <p class="section-desc">LX 600 được trang bị hệ thống an toàn chủ động toàn diện nhất của Lexus, kết hợp
                công nghệ địa hình và tiện nghi hàng đầu.</p>

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
                                    <img src="{{ asset('web/assets/images/rx/RRCC.webp') }}" alt="PCS">
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
                                <div class="ti-name">Điều Khiển Hành Trình Thích Ứng</div>
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
                                    <img src="{{ asset('web/assets/images/rx/LTA.webp') }}" alt="LTA/LDA">
                                </div>
                                <div class="ti-name">Hỗ Trợ & Cảnh Báo Làn Đường</div>
                                <div class="ti-abbr">LTA + LDA + Giữ trung tâm làn</div>
                                <div class="ti-desc">Hỗ trợ theo dõi làn đường, cảnh báo lệch làn và chức năng giữ xe
                                    ở trung tâm làn đường khi lái đường cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/AHB.webp') }}" alt="BladeScan AHS">
                                </div>
                                <div class="ti-name">Đèn Pha Tự Động BladeScan</div>
                                <div class="ti-abbr">BladeScan AHS — Quét tốc độ cao</div>
                                <div class="ti-desc">Tự động điều chỉnh vùng chiếu sáng, tránh chói mắt xe đối diện
                                    trong khi chiếu sáng tối đa vùng ngoài.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/BSM.webp') }}" alt="BSM/RCTA">
                                </div>
                                <div class="ti-name">Cảnh Báo Điểm Mù & Cắt Ngang</div>
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
                                    <img src="{{ asset('web/assets/images/pksb.png') }}" alt="PKSB">
                                </div>
                                <div class="ti-name">Phanh An Toàn Khi Đỗ Xe</div>
                                <div class="ti-abbr">PKSB — Vật tĩnh, xe & người đi bộ</div>
                                <div class="ti-desc">Phanh tự động khi phát hiện vật cản phía trước/sau khi đỗ xe, bao
                                    gồm phương tiện và người đi bộ tiếp cận từ phía sau.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/SEA.webp') }}" alt="Túi khí SRS">
                                </div>
                                <div class="ti-name">Hệ Thống Túi Khí SRS</div>
                                <div class="ti-abbr">SRS Airbag System</div>
                                <div class="ti-desc">Hệ thống túi khí SRS đa điểm bảo vệ toàn diện cho người lái và
                                    hành khách trong mọi tình huống va chạm.</div>
                            </a>
                        </div>
                    </div>
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
                    <div class="conv-item"><i class="bi bi-door-closed"></i> Chức năng cửa hít điện tử (cửa trước & sau)</div>
                    <div class="conv-item"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="conv-item"><i class="bi bi-thermometer-half"></i> Hệ thống điều hòa chủ động Lexus</div>
                    <div class="conv-item"><i class="bi bi-sun"></i> Giá nóc nhôm / Cửa sổ trời panoramic điện</div>
                    <div class="conv-item"><i class="bi bi-box-arrow-in-down"></i> Cửa hậu điện — rảnh tay, chống kẹt, nhớ vị trí</div>
                    <div class="conv-item"><i class="bi bi-stairs"></i> Bệ bước chân tích hợp</div>
                    <div class="conv-item"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh vòm 3 chiều Mark Levinson®</div>
                    <div class="conv-item"><i class="bi bi-speedometer"></i> Cảnh báo áp suất lốp AL-TPWS tự động xác định vị trí</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
    <section class="specs-section section-padding" id="specs">
    <div class="container">
        <div class="section-tag">Dữ liệu kỹ thuật</div>
        <h2 class="section-title">Thông Số Kỹ Thuật — LX 600</h2>
        <div class="specs-grid">

            <!-- CARD 1: Kích Thước & Trọng Lượng -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-rulers"></i> Kích Thước & Trọng Lượng</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao (VIP / URBAN)</span><span class="spec-value">5,100 × 1,990 × 1,865 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao (F SPORT)</span><span class="spec-value">5,090 × 1,990 × 1,865 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều dài cơ sở</span><span class="spec-value">2,850 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều rộng cơ sở</span><span class="spec-value">1,675 mm (trước) / 1,680 mm (sau)</span></div>
                    <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">4 (VIP) / 7 (URBAN) / 5 (F SPORT)</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng không tải</span><span class="spec-value">2,660 (VIP) / 2,650 (URBAN) / 2,615 (F SPORT) kg</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng toàn tải</span><span class="spec-value">3,280 kg</span></div>
                    <div class="spec-row"><span class="spec-name">Khoảng sáng gầm xe</span><span class="spec-value">205 mm</span></div>
                </div>
            </div>

            <!-- CARD 2: Không Gian & Nhiên Liệu -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-box-seam"></i> Không Gian & Nhiên Liệu</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Dung tích hành lý (thường)</span><span class="spec-value">767 L (VIP) / 174 L (URBAN) / 1,109 L (F SPORT)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích hành lý (gập ghế 3)</span><span class="spec-value">982 L (URBAN)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích hành lý (gập ghế 2&3)</span><span class="spec-value">1,960 L (VIP & F SPORT) / 1,871 L (URBAN)</span></div>
                    <div class="spec-row"><span class="spec-name">Bình nhiên liệu chính</span><span class="spec-value">80 L</span></div>
                    <div class="spec-row"><span class="spec-name">Bình nhiên liệu phụ</span><span class="spec-value">30 L</span></div>
                    <div class="spec-row"><span class="spec-name">Bán kính quay vòng tối thiểu</span><span class="spec-value">6 m</span></div>
                    <div class="spec-row"><span class="spec-name">Lốp dự phòng</span><span class="spec-value">Lốp thường</span></div>
                </div>
            </div>

            <!-- CARD 3: Động Cơ -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge"></i> Động Cơ</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Mã động cơ</span><span class="spec-value">V35A-FTS</span></div>
                    <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">V6, tăng áp kép, Twin Turbo</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">3,445 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất cực đại</span><span class="spec-value">409 Hp (305 kW) / 5,200 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">650 Nm / 2,000–3,600 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">10AT</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span class="spec-value">EURO 5</span></div>
                </div>
            </div>

            <!-- CARD 4: Vận Hành & Tiêu Thụ Nhiên Liệu -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-fuel-pump"></i> Vận Hành & Tiêu Thụ Nhiên Liệu</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống truyền động</span><span class="spec-value">AWD</span></div>
                    <div class="spec-row"><span class="spec-name">Chế độ lái</span><span class="spec-value">Normal / Eco / Comfort / Sport S / Sport S+ / Customize</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL ngoài đô thị</span><span class="spec-value">11.59 / 12.01 / 12.12 L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL trong đô thị</span><span class="spec-value">17.98 / 18.88 / 18.89 L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL kết hợp</span><span class="spec-value">13.94 / 14.53 / 14.59 L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tự động ngắt động cơ</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Thứ tự: VIP / URBAN / F SPORT</span><span class="spec-value">—</span></div>
                </div>
            </div>

            <!-- CARD 5: Khung Gầm & Treo -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Treo</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span class="spec-value">Tay đòn kép</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span class="spec-value">Đa điểm</span></div>
                    <div class="spec-row"><span class="spec-name">Treo thích ứng (AVS)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Điều chỉnh chiều cao chủ động (AHC)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh trước / sau</span><span class="spec-value">Đĩa</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống lái</span><span class="spec-value">Trợ lực điện</span></div>
                    <div class="spec-row"><span class="spec-name">Bánh xe & Lốp</span><span class="spec-value">265/50R22 — Lốp thường</span></div>
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
                    '{{ asset('web/assets/images/lx/mau-trang1.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-trang2.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-trang3.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-trang4.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-trang5.jpg') }}'
                ]
            },
            black: {
                name: 'Caviar Black',
                images: [
                    '{{ asset('web/assets/images/lx/mau-den1.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-den2.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-den3.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-den4.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-den5.jpg') }}'
                ]
            },
            silver: {
                name: 'Sonic Titanium',
                images: [
                    '{{ asset('web/assets/images/lx/mau-xam1.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-xam2.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-xam3.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-xam4.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-xam5.jpg') }}'
                ]
            },
            green: {
                name: 'Nori Green Pearl',
                images: [
                    '{{ asset('web/assets/images/lx/mau-xanh1.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-xanh2.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-xanh3.webp') }}',
                    '{{ asset('web/assets/images/lx/mau-xanh4.jpg') }}',
                    '{{ asset('web/assets/images/lx/mau-xanh5.jpg') }}'
                ]
            },
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
