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
                                <span class="new">Thế hệ mới</span>
                                <span class="hybrid">Hybrid</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" title="Yêu thích" onclick="toggleFavorite(this)"><i
                                        class="bi bi-heart"></i></button>
                                <button class="gallery-action-btn" title="So sánh"><i
                                        class="bi bi-arrow-left-right"></i></button>
                                <button class="gallery-action-btn" title="Chia sẻ"><i class="bi bi-share"></i></button>
                            </div>
                            <div class="gallery-main">
                                <img src="{{ asset('web/assets/images/nx/anh-1.jpg') }}"
                                    alt="Lexus NX 350h F SPORT" id="mainImage">
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
                                    src="{{ asset('web/assets/images/nx/anh-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/nx/anh-2.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/nx/anh-3.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/nx/anh-4.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/nx/anh-5.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> Hybrid Performance — E-Four
                        </div>
                        <h1 class="product-title">Lexus NX</h1>
                        <p class="product-subtitle"> 2.5L HEV E-Four</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.8</strong> (198 đánh giá)</span>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option active"
                                    onclick="selectVersion(this,'3.270.000.000','NX 350h — 2.5L Hybrid E-Four',243,'8.1s','6.0L','E-Four')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">NX 350h — 2.5L Hybrid E-Four</div>
                                    </div>
                                    <div class="vo-price">3.270.000.000đ</div>
                                </div>
                                {{-- <div class="version-option"
                                    onclick="selectVersion(this,'2.340.000.000','NX 350h 2.5L HEV E-Four',243,'8.1s','6.0L','E-Four')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">NX 350h — 2.5L Hybrid E-Four</div>
                                    </div>
                                    <div class="vo-price">2.340.000.000đ</div>
                                </div> --}}
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">3.270.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="quick-specs" style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">243</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">8.1s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">6.0L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">E-Four</div>
                                    <div class="qs-label">Dẫn động</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~28 triệu/tháng</strong> với lãi suất
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
                                <div class="color-option" style="--color:#8B0000" data-color="red"
                                    data-name="Matador Red Mica" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#2F4F4F" data-color="green"
                                    data-name="Nori Green Pearl" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#191970" data-color="blue"
                                    data-name="Deep Blue Mica" onclick="selectColor(this)"></div>
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
                                <div class="dealer-location"><i class="bi bi-geo-alt"></i>Ngã tư Phạm Hùng + Dương Đình Nghệ Tổ dân, phố số 8, Phường, Cầu Giấy, Hà Nội 100000, Việt Nam
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
                    <img src="{{ asset('web/assets/images/nx/gioi-thieu.jpg') }}"
                        alt="Lexus NX — Crossover hạng sang thế hệ mới">
                    <div class="intro-year-badge">
                        <div class="iyb-year">2014</div>
                        <div class="iyb-label">Năm ra mắt</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">Thách Thức Ngôn Ngữ Thiết Kế Thế Hệ Mới</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Với NX, Lexus không ngừng thách thức thiết lập ngôn
                        ngữ thiết kế cho thế hệ mới thông qua việc "theo đuổi tính độc đáo trong từng đường nét" và "tính tối
                        giản trong công nghệ", để tạo nên hình khối rắn chắc và sắc nét đặc trưng của Lexus dựa trên khả năng
                        vận hành hứng khởi.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">Khoang lái được hình thành lấy
                        cảm hứng từ Tazuna — triết lý dựa trên việc tạo ra một không gian tràn ngập tinh thần hiếu khách
                        "omotenashi" đến mọi vị trí, đồng thời tạo ra kết nối trực quan giữa xe và người lái, để người lái
                        hoàn toàn tập trung vào các thao tác điều khiển xe. Thiết kế ngoại thất thể hiện sự rắn rỏi, năng động
                        với tạo hình cuốn hút trên nền tảng khung gầm hoàn toàn mới.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">2</div>
                            <div class="ms-label">Phiên bản động cơ</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">10+</div>
                            <div class="ms-label">Năm phát triển</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">TNGA</div>
                            <div class="ms-label">Nền tảng khung gầm</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">#1</div>
                            <div class="ms-label">SUV compact hạng sang</div>
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
            <p class="section-desc">Tạo nên chiếc NX mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, chất liệu
                ghế, ốp nội thất và mâm xe.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheels')">Mâm Xe</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Ghế (Màu & Chất liệu)</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-trim')">Ốp Nội Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheel')">Vô Lăng</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-den.jpg') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Màu đen</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-trang.jpg') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Màu trắng</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-xam.jpg') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Màu xám</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-do.jpg') }}" alt="Màu đỏ">
                            </div>
                            <div class="ti-abbr">Màu đỏ</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-xanh-reu.jpg') }}" alt="Xanh rêu">
                            </div>
                            <div class="ti-abbr">Xanh rêu</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-xanh-duong.jpg') }}" alt="Xanh dương">
                            </div>
                            <div class="ti-abbr">Xanh dương</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/nx/mau-cam.jpg') }}" alt="Xanh cam">
                            </div>
                            <div class="ti-abbr">Xanh dương</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MÂM XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus NX
                    cung cấp nhiều tùy chọn mâm xe từ 18 đến 20 inch với các kiểu thiết kế phù hợp cho từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/mam-xe-1.jpg') }}" alt="Mâm xe tiêu chuẩn">
                        <div class="item-card-label">Mâm xe hợp kim nhôm 18 inch<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản NX 350h</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/mam-xe-2.jpg') }}" alt="Mâm xe 20 inch">
                        <div class="item-card-label">Mâm xe hợp kim nhôm 20 inch<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản NX 350 F SPORT</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-info-circle me-2"></i>NX 350 F SPORT:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Lốp 235/50R20 — Mâm hợp kim nhôm
                        20×8J sơn đen bóng Matte Black độc quyền F SPORT.</span>
                </div>
            </div>

            <!-- CHẤT LIỆU GHẾ -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ghế bọc da
                    cao cấp với nhiều lựa chọn màu sắc và chất liệu, mang lại sự sang trọng và thoải mái tối đa.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-den.jpg') }}" alt="Ghế đen">
                        <div class="item-card-label">Đen & Kem - Black & Rich Cream<br></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-trang.jpg') }}" alt="Ghế trắng">
                        <div class="item-card-label">Trắng White (Phiên bản F SPORT)</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-nau.jpg') }}" alt="Ghế nâu">
                        <div class="item-card-label">Nâu Hazel</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-do1.jpg') }}" alt="Ghế đỏ">
                        <div class="item-card-label">Đỏ Dank ROSE</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-do2.jpg') }}" alt="ghế đen black">
                        <div class="item-card-label">Đen - Black</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-do3.jpg') }}" alt="ghế đen black">
                        <div class="item-card-label">Đỏ - Flare Red(Phiên bản F SPORT)</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/ghe-do4.jpg') }}" alt="ghế đen black">
                        <div class="item-card-label">Đen - Black (Phiên bản F SPORT)</div>
                    </div>
                </div>
            </div>

            <!-- ỐP NỘI THẤT -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp trang trí cánh cửa đa dạng phong cách từ gỗ tự nhiên sang trọng đến nhôm thể thao.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/op-1.jpg') }}" alt="Ốp gỗ">
                        <div class="item-card-label">Gỗ Open Pore Ash/Sumi Black Finish<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản NX 350h</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/op-2.jpg') }}" alt="Ốp nhôm">
                        <div class="item-card-label">Nhôm Dark Spin Aluminum<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản NX 350 F SPORT</span></div>
                    </div>
                </div>
            </div>

            <!-- VÔ LĂNG -->
            <div class="colour-pane" id="ct-wheel">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Vô lăng 3
                    chấu thiết kế thể thao với các tùy chọn chất liệu bọc da và lẫy chuyển số bằng nhôm F SPORT.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/volang-1.jpg') }}"
                            alt="Vô lăng F SPORT bọc da">
                        <div class="item-card-label">Da bọc F SPORT<br><span style="color:var(--lexus-gold);font-size:0.7rem;">Phiên
                                bản NX 350 F SPORT</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/nx/volang-2.jpg') }}" alt="Vô lăng gỗ kết hợp da">
                        <div class="item-card-label">Gỗ kết hợp da (Phiên bản NX 350h)</div>
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
            <p class="section-desc">Lexus NX cung cấp hai nền tảng động cơ tiên tiến — đáp ứng mọi nhu cầu từ hiệu năng
                thuần tuý đến tiết kiệm nhiên liệu vượt trội.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-350')">NX 350 — 2.4L Turbo AWD</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-350h')">NX 350h — 2.5L Hybrid HEV</button>
            </div>

            <!-- NX 350 F SPORT -->
            <div class="variant-pane active" id="vt-350">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/nx/dongco-24l.jpg') }}" alt="Động cơ NX 350 2.4L Turbo AWD">
                        <div class="powertrain-badge">2.4L-T AWD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động cơ 2.4L Tăng Áp AWD</h3>
                        <p>Động cơ tăng áp 4 xi-lanh thẳng hàng 2,4 lít với khả năng tăng tốc sắc nét, mang lại phản ứng
                            tăng tốc vượt trội và lực truyền động mạnh mẽ. Được phát triển dựa trên công nghệ động cơ TNGA,
                            nó sở hữu bộ tăng áp hiệu suất cao, hệ thống phun nhiên liệu trực tiếp và hệ thống làm mát biến
                            thiên điều khiển bởi động cơ điện. Nhờ khả năng sinh mô-men xoắn dồi dào, nó mang lại hiệu suất
                            vận hành mạnh mẽ và hứng khởi, đồng thời đạt được hiệu suất môi trường tuyệt vời.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">279 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">430 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7.7s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">8 cấp</div>
                                <div class="pt-spec-label">Hộp số AT</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Cấu hình hệ thống</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ xăng tăng áp 2.4L-T</div>
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số tự động 8 cấp sang số trực tiếp</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Dẫn động 4 bánh toàn thời gian AWD</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Hộp số
                            tự động 8 cấp sang số trực tiếp đạt được cả khả năng vận hành hứng khởi với cảm giác lái trực
                            tiếp và khả năng tiết kiệm nhiên liệu tuyệt vời. Kết hợp cùng động cơ tăng áp 2,4 lít, được tinh
                            chỉnh để đạt được hiệu suất vận hành mạnh mẽ với phản ứng vòng tua máy thấp đặc trưng.</p>
                    </div>
                </div>
            </div>

            <!-- NX 350h -->
            <div class="variant-pane" id="vt-350h">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/nx/dongco-25l.jpg') }}" alt="Hệ thống Hybrid NX 350h 2.5L HEV">
                        <div class="powertrain-badge">2.5L HEV E-Four</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-battery-charging-fill me-2"></i>Hệ Thống Hybrid 2.5L HEV</h3>
                        <p>Động cơ 4 xi-lanh thẳng hàng 2,5 lít với buồng đốt hiệu suất cao kết hợp với các công nghệ tiên
                            tiến bao gồm kim phun trực tiếp nhiều lỗ, bơm dầu biến thiên, hệ thống điều phối van biến thiên
                            thông minh bằng động cơ điện VVT-iE tạo nên khả năng vận hành mượt mà cùng hiệu suất nhiên liệu
                            vượt trội.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">188 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7,9s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">6.0L</div>
                                <div class="pt-spec-label">/100km</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">E-Four</div>
                                <div class="pt-spec-label">AWD điện</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Thành phần hệ thống Hybrid</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ 4 xi-lanh thẳng hàng 2.5L</div>
                                <div class="hc-item"><i class="bi bi-lightning-charge"></i> Mô tơ điện công suất cao</div>
                                <div class="hc-item"><i class="bi bi-battery-charging"></i> Pin Ni-MH hiệu năng cao</div>
                                <div class="hc-item"><i class="bi bi-cpu"></i> Hệ thống điều phối van biến thiên VVT-iE</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Hệ dẫn động E-Four AWD điện tử</div>
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
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Lexus hướng đến cảm giác lái chính
                xác với thân xe ổn định cao trên đường thẳng, cân bằng trước sau ấn tượng và độ bám đường cao. Bạc lót hệ
                thống treo có đặc tính xoắn thấp kết hợp cùng các bộ giảm xóc giúp triệt tiêu chấn động và rung lắc hiệu
                quả.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/nx/treo-truoc.jpg') }}"
                            alt="Hệ thống treo trước MacPherson Lexus NX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo trước — MacPherson</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/nx/treo-sau.jpg') }}"
                            alt="Hệ thống treo sau đa liên kết Lexus NX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo sau — Đa liên kết</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-wind"></i>Hiệu suất khí động học</h4>
                        <p class="chassis-info-desc">Hiệu suất khí động học của NX được phát triển dựa trên các công nghệ
                            điều khiển tiên tiến, sử dụng các lực khí động học tác động lên phía trước, hai bên, phía sau và
                            thậm chí cả dưới sàn xe để nâng cao hiệu suất vận hành.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/nx/khung-gam.jpg') }}"
                            alt="Sơ đồ cấu trúc thân xe Lexus NX TNGA">
                    </div>
                    <div class="chassis-legend">
                        <div class="legend-item"><span class="legend-color c1"></span>Keo dán kết cấu</div>
                        <div class="legend-item"><span class="legend-color c2"></span>Cấu trúc khoá đôi lắp ca pô</div>
                        <div class="legend-item"><span class="legend-color c3"></span>Keo dán đàn hồi cao</div>
                        <div class="legend-item"><span class="legend-color c4"></span>Cấu trúc khung hẹp phía sau </div>
                        <div class="legend-item"><span class="legend-color c5"></span>Gia cố băng tap lô độ cứng cao</div>
                        <div class="legend-item"><span class="legend-color c6"></span>Hàn bước ngắn</div>
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Thân xe trọng lượng nhẹ, độ cứng cao</h4>
                        <p class="chassis-info-desc">Điểm kết nối các bộ phận khung xe đã được gia cường bằng nhiều cách,
                            bao gồm mở rộng diện tích các mối nối, tối ưu hóa việc áp dụng các công nghệ và vật liệu liên
                            kết ở các vị trí khác nhau.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Cấu trúc bu lông siết trực tiếp</h4>
                        <p class="chassis-info-desc">Việc áp dụng cấu trúc bu lông siết trực tiếp giúp tăng cường độ cứng
                            dọc trục và giảm trọng lượng không được treo, góp phần tạo nên cảm giác lái rõ ràng với phản hồi
                            trực tiếp và sự thoải mái tuyệt vời.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế NX Thế Hệ Mới</h2>
            <p class="section-desc">Thiết kế ngoại thất của NX thể hiện sự rắn rỏi, năng động với tạo hình cuốn hút trên
                nền tảng khung gầm hoàn toàn mới. Không gian nội thất tích hợp tiện ích tiên tiến và công nghệ hiện đại với
                thiết kế đơn giản thuận tiện cho người sử dụng.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-tech')">Màn Hình & HUD</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/mat-truoc.jpg')}}"
                            alt="Mặt trước Lexus NX — Lưới Spindle">
                        <div class="design-caption">
                            <h4>Mặt trước mạnh mẽ — Spindle không viền</h4>
                            <p>Lưới tản nhiệt Spindle không viền đặc trưng Lexus tích hợp liền mạch với cụm đèn LED sắc nét.
                                Hình khối rắn chắc và sắc nét thể hiện rõ ngôn ngữ thiết kế thế hệ mới của Lexus.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/duoi-xe.jpg')}}"
                            alt="Đuôi xe Lexus NX — Đèn hậu liên kết">
                        <div class="design-caption">
                            <h4>Đuôi xe thể thao — Đèn hậu liên kết</h4>
                            <p>Dải đèn hậu liên kết ngang tạo cảm giác chiều rộng và sự chuyển động. Thiết kế đuôi xe gọn
                                gàng, năng động với ống xả thể thao.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/nx/than-xe.jpg')}}"
                            alt="Góc nhìn bên hông Lexus NX">
                        <div class="design-caption">
                            <h4>Thân xe — Hình khối rắn chắc & sắc nét</h4>
                            <p>Sườn xe với đường gân mạnh mẽ tạo bóng đổ ấn tượng, kết hợp mâm xe hợp kim nhôm tạo dáng
                                đứng đầy uy lực. Gợi cảm giác chuyển động ngay cả khi đứng yên.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Đèn LED liên kết</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Lưới Spindle không viền</div>
                    <div class="feature-chip"><i class="bi bi-circle"></i> Mâm 20" F SPORT</div>
                    <div class="feature-chip"><i class="bi bi-arrow-down"></i> Hình khối rắn chắc</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Tạo hình sắc nét</div>
                    <div class="feature-chip"><i class="bi bi-wind"></i> Khí động học tối ưu</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/nx/cabin.jpg')}}"
                            alt="Nội thất Lexus NX — Cabin Tazuna">
                        <div class="design-caption">
                            <h4>Cabin lấy cảm hứng từ Tazuna</h4>
                            <p>Khoang lái được hình thành lấy cảm hứng từ Tazuna — triết lý tạo ra không gian tràn ngập tinh
                                thần hiếu khách "omotenashi", tạo kết nối trực quan giữa xe và người lái để hoàn toàn tập
                                trung vào thao tác điều khiển xe.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/ghe-fsport.jpg')}}"
                            alt="Ghế thể thao F SPORT Lexus NX">
                        <div class="design-caption">
                            <h4>Ghế thể thao F SPORT</h4>
                            <p>Thiết kế ghế F SPORT được thiết kế đặc biệt để mang tới sự hỗ trợ vững chắc, đáp ứng trải
                                nghiệm lái thể thao phấn khích.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/bang-dieu-khien.jpg')}}"
                            alt="Màn hình điều khiển trung tâm Lexus NX">
                        <div class="design-caption">
                            <h4>Bảng điều khiển tối giản</h4>
                            <p>Không gian nội thất tích hợp tiện ích tiên tiến và công nghệ hiện đại với thiết kế đơn giản,
                                thuận tiện cho người sử dụng.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> HUD trên kính chắn gió</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Âm thanh Mark Levinson®</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà tự động</div>
                    <div class="feature-chip"><i class="bi bi-phone"></i> Sạc không dây</div>
                    <div class="feature-chip"><i class="bi bi-person"></i> Ghế chỉnh điện</div>
                </div>
            </div>

            <!-- MÀHÌNH & HUD -->
            <div class="design-pane" id="dp-tech">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/man-hinh.jpg')}}"
                            alt="Màn hình cảm ứng Lexus NX">
                        <div class="design-caption">
                            <h4>Màn hình cảm ứng trung tâm</h4>
                            <p>Màn hình trung tâm sắc nét, hỗ trợ Apple CarPlay và Android Auto không dây, tích hợp điều
                                hướng thời gian thực và hệ thống âm thanh cao cấp.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/nx/dong-ho.jpg')}}"
                            alt="Đồng hồ tốc độ F SPORT Lexus NX">
                        <div class="design-caption">
                            <h4>Đồng hồ tốc độ F SPORT</h4>
                            <p>Ở chế độ SPORT S+, đồng hồ tốc độ F SPORT chuyển sang kiểu xe đua. Hiển thị thông tin lái xe
                                trực quan, rõ nét trong mọi điều kiện ánh sáng.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/nx/hud.jpg')}}"
                            alt="HUD Lexus NX — Hiển thị trên kính chắn gió">
                        <div class="design-caption">
                            <h4>HUD — Màn hình hiển thị trên kính chắn gió</h4>
                            <p>Tính năng hiển thị hướng dẫn vận hành giúp người lái chủ động nắm được điều kiện đường quanh
                                xe và thao tác vận hành dễ dàng với tầm nhìn hướng về phía trước.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> Touchscreen trung tâm</div>
                    <div class="feature-chip"><i class="bi bi-speedometer"></i> Đồng hồ F SPORT Digital</div>
                    <div class="feature-chip"><i class="bi bi-eye"></i> HUD kính chắn gió</div>
                    <div class="feature-chip"><i class="bi bi-phone"></i> Apple CarPlay / Android Auto</div>
                    <div class="feature-chip"><i class="bi bi-wifi"></i> Kết nối không dây</div>
                    <div class="feature-chip"><i class="bi bi-camera-video"></i> Camera 360°</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== F SPORT EQUIPMENT ==================== -->
    <section class="equipment-section section-padding" id="fsport">
        <div class="container">
            <div class="section-tag">Phiên bản đặc biệt</div>
            <h2 class="section-title">Trang Bị F SPORT PERFORMANCE</h2>
            <p class="section-desc">Phiên bản NX 350 F SPORT được trang bị những nâng cấp vận hành chuyên biệt và chi tiết
                độc quyền từ ngoại thất đến nội thất, tạo nên diện mạo thể thao và đẳng cấp riêng biệt.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this,'exterior')">Ngoại Thất</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this,'interior')">Nội Thất F SPORT</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="equipment-content active" id="exterior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Lưới Tản Nhiệt Không Viền</h4>
                        <p class="ec-desc">Họa tiết mắt lưới F SPORT đặc trưng, cùng lưới tản nhiệt bên và viền cụm đèn
                            sau độc quyền F SPORT.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Logo F SPORT</h4>
                        <p class="ec-desc">Logo F SPORT độc quyền đặt tại vị trí nổi bật, khẳng định đẳng cấp thể thao của
                            phiên bản hiệu năng cao.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Ốp Gương Piano Black</h4>
                        <p class="ec-desc">Ốp gương chiếu hậu sơn đen Piano Black sang trọng, tạo điểm nhấn thể thao nổi
                            bật.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Mâm 20" F SPORT</h4>
                        <p class="ec-desc">Mâm hợp kim nhôm 20 inch sơn đen bóng Matte Black đặc trưng F SPORT
                            PERFORMANCE.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Viền Cửa Sổ Đen</h4>
                        <p class="ec-desc">Viền cửa sổ màu đen tạo điểm nhấn thể thao nổi bật, tương phản ấn tượng với màu
                            thân xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Cản Trước/Sau Thể Thao</h4>
                        <p class="ec-desc">Cản trước và cản sau thiết kế thể thao, sơn cùng màu thân xe với viền đen Piano
                            Black cao cấp.</p>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT F SPORT -->
            <div class="equipment-content" id="interior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Vô Lăng F SPORT</h4>
                        <p class="ec-desc">Vô lăng F SPORT có thiết kế mới với tiết diện được tối ưu mang đến trải nghiệm
                            lái thể thao. Kèm lẫy chuyển số bằng nhôm tích hợp.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Ghế F SPORT</h4>
                        <p class="ec-desc">Ghế F SPORT được thiết kế đặc biệt để mang tới sự hỗ trợ vững chắc, đáp ứng
                            trải nghiệm lái thể thao phấn khích.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Đồng Hồ Tốc Độ F SPORT</h4>
                        <p class="ec-desc">Ở chế độ SPORT S+, đồng hồ tốc độ F SPORT chuyển sang kiểu xe đua với hiển thị
                            thể thao thuần túy.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Bàn Đạp Thể Thao Nhôm</h4>
                        <p class="ec-desc">Bàn đạp và bệ nghỉ chân thể thao bằng nhôm xước cao cấp, tạo cảm giác kết nối
                            chân thực với xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Cần Số Bọc Da F SPORT</h4>
                        <p class="ec-desc">Cần số bọc da đục lỗ F SPORT, mang lại cảm giác cầm nắm chắc chắn và thể thao
                            trong từng thao tác.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Bộ Giảm Chấn AVS F SPORT</h4>
                        <p class="ec-desc">Bộ giảm chấn F SPORT phía trước và phía sau nhanh chóng hấp thụ các rung động.
                            Hệ thống treo thích ứng AVS kiểu điện từ tuyến tính đạt được phản ứng chuyển đổi lực giảm chấn
                            tuyệt vời.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Logo F SPORT Nội Thất</h4>
                        <p class="ec-desc">Logo F SPORT trang trí nội thất ở vị trí nổi bật, khẳng định đây là phiên bản
                            đặc biệt.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Ốp Bệ Bước Chân Đen</h4>
                        <p class="ec-desc">Ốp bệ bước chân màu đen bảo vệ và tạo điểm nhấn thể thao mỗi khi bước vào
                            cabin.</p>
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
            <p class="section-desc">NX được trang bị hàng loạt công nghệ an toàn chủ động tiên tiến nhất từ Lexus Safety
                System+.</p>

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
                                    <img src="{{ asset('web/assets/images/rx/PCS.webp') }}" alt="PCS">
                                </div>
                                <div class="ti-name">Hệ Thống An Toàn Tiền Va Chạm</div>
                                <div class="ti-abbr">PCS — Pre-Collision System</div>
                                <div class="ti-desc">Phát hiện và cảnh báo nguy cơ va chạm phía trước, hỗ trợ phanh khẩn
                                    cấp tự động để giảm thiểu hoặc tránh va chạm.</div>
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
                                <div class="ti-abbr">DRCC — Dynamic Radar Cruise Control (ở mọi tốc độ)</div>
                                <div class="ti-desc">Tự động duy trì khoảng cách an toàn với xe phía trước ở mọi dải tốc
                                    độ, kể cả dừng hẳn trong kẹt xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/LTA.webp') }}" alt="LDA/LTA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Theo Dõi Làn Đường</div>
                                <div class="ti-abbr">LDA / LTA — Lane Departure & Tracing Assist</div>
                                <div class="ti-desc">Cảnh báo lệch làn và hỗ trợ giữ xe đi đúng giữa làn đường, giảm mệt
                                    mỏi khi lái đường dài.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/PKSB.webp') }}" alt="PKSB">
                                </div>
                                <div class="ti-name">Phanh An Toàn Khi Đỗ</div>
                                <div class="ti-abbr">PKSB — Parking Support Brake</div>
                                <div class="ti-desc">Tự động phanh khi phát hiện vật cản trong quá trình đỗ xe tiến và lùi
                                    ở tốc độ thấp.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/BSM.webp') }}" alt="BSM">
                                </div>
                                <div class="ti-name">Cảnh Báo Điểm Mù</div>
                                <div class="ti-abbr">BSM — Blind Spot Monitor</div>
                                <div class="ti-desc">Cảnh báo bằng ánh sáng và âm thanh khi có phương tiện trong vùng điểm
                                    mù khi chuyển làn đường.</div>
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
                                <div class="ti-desc">Hệ thống túi khí SRS đa điểm bảo vệ toàn diện cho người lái và hành
                                    khách trong mọi tình huống va chạm.</div>
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
                    <div class="conv-item"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh / cửa sổ trời</div>
                    <div class="conv-item"><i class="bi bi-sliders"></i> Lựa chọn chế độ lái (Eco / Normal / Sport / Sport+)</div>
                    <div class="conv-item"><i class="bi bi-phone"></i> Sạc không dây cho điện thoại</div>
                    <div class="conv-item"><i class="bi bi-camera-video"></i> Hệ thống quan sát toàn cảnh / Camera 360°</div>
                    <div class="conv-item"><i class="bi bi-eye"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="conv-item"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh vòm cao cấp Mark Levinson®</div>
                    <div class="conv-item"><i class="bi bi-box-arrow-in-down"></i> Tính năng mở cốp cảm ứng / đá cốp</div>
                    <div class="conv-item"><i class="bi bi-steering2"></i> Bố cục buồng lái Tazuna giúp người lái tập trung điều khiển</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
    <section class="specs-section section-padding" id="specs">
    <div class="container">
        <div class="section-tag">Dữ liệu kỹ thuật</div>
        <h2 class="section-title">Thông Số Kỹ Thuật — NX 350h & NX 350 F SPORT</h2>
        <div class="specs-grid">

            <!-- CARD 1: Kích Thước & Không Gian -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-rulers"></i> Kích Thước & Không Gian</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao</span><span class="spec-value">4,660 × 1,865 × 1,670 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều dài cơ sở</span><span class="spec-value">2,690 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều rộng cơ sở</span><span class="spec-value">1,610 mm (trước) / 1,635 mm (sau)</span></div>
                    <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">5</span></div>
                    <div class="spec-row"><span class="spec-name">Khoảng sáng gầm xe</span><span class="spec-value">195 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích khoang hành lý</span><span class="spec-value">520 L / 1,411 L (tối đa)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích bình nhiên liệu</span><span class="spec-value">55 L</span></div>
                </div>
            </div>

            <!-- CARD 2: Động Cơ — NX 350h -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge"></i> Động Cơ — NX 350h</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Mã động cơ</span><span class="spec-value">A25A-FXS</span></div>
                    <div class="spec-row"><span class="spec-name">Loại</span><span class="spec-value">I4, 4 strokes (Hybrid)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">2,487 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất cực đại</span><span class="spec-value">188 Hp (140 kW) / 6,000 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">239 Nm / 4,300–4,500 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô tơ điện trước / sau</span><span class="spec-value">180 Hp (134 kW) / 54 Hp (40 kW)</span></div>
                    <div class="spec-row"><span class="spec-name">Tổng công suất hệ thống</span><span class="spec-value"><strong>240 Hp (179 kW)</strong></span></div>
                </div>
            </div>

            <!-- CARD 3: Động Cơ — NX 350 F SPORT -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge-fill"></i> Động Cơ — NX 350 F SPORT</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Mã động cơ</span><span class="spec-value">T24A-FTS</span></div>
                    <div class="spec-row"><span class="spec-name">Loại</span><span class="spec-value">I4, 4 strokes Turbo</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">2,393 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất cực đại</span><span class="spec-value"><strong>275 Hp (205 kW)</strong> / 6,000 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">430 Nm / 1,700–3,600 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">8AT</span></div>
                    <div class="spec-row"><span class="spec-name">Chế độ lái</span><span class="spec-value">Eco / Normal / Sport S / Sport S+ / Customize</span></div>
                </div>
            </div>

            <!-- CARD 4: Vận Hành & Tiêu Thụ Nhiên Liệu -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-fuel-pump"></i> Vận Hành & Tiêu Thụ Nhiên Liệu</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống truyền động</span><span class="spec-value">AWD</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span class="spec-value">EURO 6</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL ngoài đô thị</span><span class="spec-value">6.77 (350h) / 9.43 (F SPORT) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL trong đô thị</span><span class="spec-value">6.44 (350h) / 13.02 (F SPORT) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL kết hợp</span><span class="spec-value">6.65 (350h) / 10.75 (F SPORT) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng không tải</span><span class="spec-value">1,830 (350h) / 1,810 (F SPORT) kg</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng toàn tải</span><span class="spec-value">2,380 (350h) / 2,370 (F SPORT) kg</span></div>
                </div>
            </div>

            <!-- CARD 5: Khung Gầm & Treo -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Treo</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span class="spec-value">MacPherson</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span class="spec-value">Double Wishbone</span></div>
                    <div class="spec-row"><span class="spec-name">Treo thích ứng (AVS)</span><span class="spec-value">Không (350h) / Có (F SPORT)</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh trước / sau</span><span class="spec-value">Đĩa</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống lái</span><span class="spec-value">Trợ lực điện</span></div>
                    <div class="spec-row"><span class="spec-name">Mâm xe & Lốp</span><span class="spec-value">235/50R20 — Run flat</span></div>
                    <div class="spec-row"><span class="spec-name">Bán kính quay vòng tối thiểu</span><span class="spec-value">5.8 m</span></div>
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
                name: 'Màu trắng',
                images: ['{{ asset('web/assets/images/nx/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-trang1.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-trang2.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-trang3.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-trang4.jpg') }}'
                ]
            },
            black: {
                name: 'Màu đen',
                images: ['{{ asset('web/assets/images/nx/mau-den.jpg') }}',
                    '{{ asset('web/assets/images/nx/anh-1.jpg') }}',
                    '{{ asset('web/assets/images/nx/anh-2.jpg') }}',
                    '{{ asset('web/assets/images/nx/anh-3.jpg') }}',
                    '{{ asset('web/assets/images/nx/anh-4.jpg') }}'
                ]
            },
            silver: {
                name: 'Màu xám',
                images: ['{{ asset('web/assets/images/nx/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xam1.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xam2.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xam3.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xam4.jpg') }}'
                ]
            },
            red: {
                name: 'Màu đỏ',
                images: ['{{ asset('web/assets/images/nx/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-do1.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-do2.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-do3.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-do4.jpg') }}'
                ]
            },
            green: {
                name: 'Xanh rêu',
                images: ['{{ asset('web/assets/images/nx/mau-xanh-reu.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-reu1.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-reu2.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-reu3.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-reu4.jpg') }}'
                ]
            },
            blue: {
                name: 'Màu xanh dương',
                images: ['{{ asset('web/assets/images/nx/mau-xanh-duong.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-duong1.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-duong2.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-duong3.jpg') }}',
                    '{{ asset('web/assets/images/nx/mau-xanh-duong4.jpg') }}'
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
