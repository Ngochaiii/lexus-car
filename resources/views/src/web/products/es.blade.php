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
                                <span>ES 350h</span>
                                <span class="new">Thế hệ 8</span>
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
                                <img src="{{ asset('web/assets/images/es/anh-1.jpg') }}" alt="Lexus ES 350h 2026"
                                    id="mainImage">
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
                                    src="{{ asset('web/assets/images/es/mau-trang.jpg') }}" alt="chiếc ES mang dấu ấn riêng"></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/es/mau-den.jpg') }}" alt="chiếc ES mang dấu ấn riêng"></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/es/mau-xam.jpg') }}" alt="chiếc ES mang dấu ấn riêng"></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/es/mau-xanh-duong.jpg') }}" alt="chiếc ES mang dấu ấn riêng"></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/es/mau-dong.jpg') }}" alt="chiếc ES mang dấu ấn riêng"></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> Hybrid Thế Hệ 6 — e-CVT AWD
                        </div>
                        <h1 class="product-title">Lexus ES</h1>
                        <p class="product-subtitle">ES 350h 2026 — 2.5L HEV e-CVT AWD</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.7</strong> (189 đánh giá)</span>
                        </div>
                        <!-- Colour -->
                        <div class="option-group">
                            <div class="option-label">
                                <span><i class="bi bi-palette me-2"></i>Màu ngoại thất</span>
                                <span class="selected-value" id="selectedColor">Trắng</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option active" style="--color:#F5F5F5" data-color="white"
                                    data-name="Trắng" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#1A1A1A" data-color="black" data-name="Đen"
                                    onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#808080" data-color="gray" data-name="Xám"
                                    onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#C0C0C0" data-color="silver" data-name="Bạc"
                                    onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#191970" data-color="blue" data-name="Xanh dương"
                                    onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#B87333" data-color="copper" data-name="Đồng"
                                    onclick="selectColor(this)"></div>
                            </div>
                        </div>
                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option"
                                    onclick="selectVersion(this,'ĐANG CẬP NHẬP','ES 350h FWD',244,'8.5s','5.0L','FWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">ES 350h FWD</div>
                                    </div>
                                    <div class="vo-price">ĐANG CẬP NHẬP</div>
                                </div>
                                <div class="version-option active"
                                    onclick="selectVersion(this,'ĐANG CẬP NHẬP','ES 350h AWD Premium',244,'8.3s','5.2L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">ES 350h AWD Premium</div>
                                    </div>
                                    <div class="vo-price">ĐANG CẬP NHẬP</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'ĐANG CẬP NHẬP','ES 350h AWD Luxury',244,'8.3s','5.2L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">ES 350h AWD Luxury</div>
                                    </div>
                                    <div class="vo-price">ĐANG CẬP NHẬP</div>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">ĐANG CẬP NHẬP <span> </span></div>
                                </div>
                            </div>
                            <div class="quick-specs"
                                style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">244</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">8.3s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">5.2L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">AWD</div>
                                    <div class="qs-label">e-CVT</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~28 triệu/tháng</strong> với lãi
                                    suất
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
                                <a href="{{ route('web.home.regis') }}" class="btn-action primary"><i
                                        class="bi bi-calendar-check"></i> Đặt
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
                                <div class="dealer-location"><i class="bi bi-geo-alt"></i> Ngã tư Phạm Hùng + Dương Đình
                                    Nghệ Tổ dân, phố số 8, Phường, Cầu Giấy, Hà Nội 100000, Việt Nam
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
                    <img src="{{ asset('web/assets/images/es/gioi-thieu.jpg') }}"
                        alt="Lexus ES 350h 2026 — Thế hệ thứ 8 hoàn toàn mới">
                    <div class="intro-year-badge">
                        <div class="iyb-year">2026</div>
                        <div class="iyb-label">Thế hệ thứ 8</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">Bước Chuyển Mình Điện Hóa</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Sự xuất hiện của Lexus ES 350h 2026 đánh dấu bước
                        chuyển mình quan trọng của Lexus trong chiến lược điện hóa tại Việt Nam. Không chỉ đơn thuần là bản
                        nâng cấp, đây là thế hệ thứ 8 hoàn toàn mới, thay đổi mạnh từ thiết kế, nền tảng cho tới công nghệ.
                    </p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">ES 350h giờ đây không chỉ
                        dành cho doanh nhân trung niên, mà bắt đầu hướng tới khách hàng trẻ hơn. Với ngôn ngữ thiết kế mới
                        mang hơi hướng tương lai, thân xe dài và rộng hơn, không gian cabin được mở rộng cùng phong cách
                        Spindle Body hiện đại — ES 2026 là định nghĩa mới cho sedan hạng sang hybrid tại Việt Nam.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">8</div>
                            <div class="ms-label">Thế hệ phát triển</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">6</div>
                            <div class="ms-label">Thế hệ Hybrid</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">244</div>
                            <div class="ms-label">Mã lực tổng hợp</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">#1</div>
                            <div class="ms-label">Sedan hybrid hạng sang</div>
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
            <p class="section-desc">Tạo nên chiếc ES mang dấu ấn riêng với 6 lựa chọn màu ngoại thất và 3 màu nội thất,
                cùng các chất liệu ghế, ốp nội thất và thiết kế mâm xe cao cấp.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-interior')">Màu Nội Thất</button>
                {{-- <button class="colour-tab" onclick="switchColour(this,'ct-wheels')">Mâm Xe</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Ghế(Màu & Chất liệu)</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-trim')">Ốp Nội Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheel')">Vô Lăng</button> --}}
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-trang.jpg') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Màu trắng</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-den.jpg') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Màu đen</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-xam.jpg') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Màu xám</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-bac.jpg') }}" alt="Màu bạc">
                            </div>
                            <div class="ti-abbr">Màu bạc</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-xanh-duong.jpg') }}" alt="Xanh dương">
                            </div>
                            <div class="ti-abbr">Xanh dương</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/es/mau-dong.jpg') }}" alt="Màu đồng">
                            </div>
                            <div class="ti-abbr">Màu đồng</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT MÀU -->
            <div class="colour-pane" id="ct-interior">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ba lựa chọn
                    màu nội thất cao cấp phù hợp với từng phong cách — từ thanh lịch cổ điển đến hiện đại trẻ trung.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/noithat-den.jpg') }}" alt="Nội thất đen">
                        <div class="item-card-label">Nội thất Đen<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Sang trọng cổ điển</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/noithat-trang.jpg') }}" alt="Nội thất trắng">
                        <div class="item-card-label">Nội thất Trắng<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Hiện đại tinh tế</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/noithat-nau.jpg') }}" alt="Nội thất nâu">
                        <div class="item-card-label">Nội thất Nâu<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Ấm áp thư giãn</span></div>
                    </div>
                </div>
            </div>

            <!-- MÂM XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus ES
                    cung cấp nhiều tùy chọn mâm xe với các kiểu thiết kế phù hợp cho từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/mam-1.jpg') }}" alt="Mâm tiêu chuẩn">
                        <div class="item-card-label">Mâm hợp kim nhôm <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h FWD</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/mam-2.jpg') }}" alt="Mâm cao cấp">
                        <div class="item-card-label">Mâm hợp kim nhôm cao cấp<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Premium</span>
                        </div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/mam-3.jpg') }}" alt="Mâm Luxury">
                        <div class="item-card-label">Mâm hợp kim đa chấu <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Luxury</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-info-circle me-2"></i>ES 350h AWD Luxury:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Thiết kế mâm đa chấu sắc nét, sơn đen
                        bóng đánh bóng độc quyền, tăng tính khí động học.</span>
                </div>
            </div>

            <!-- CHẤT LIỆU GHẾ -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ghế bọc da
                    cao cấp với thiết kế công thái học, mang lại sự sang trọng và thoải mái tối đa cho cả hành trình dài.
                </p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/ghe-den.jpg') }}" alt="Ghế da đen">
                        <div class="item-card-label">Ghế Da Đen<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Mặc định các phiên bản</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/ghe-trang.jpg') }}" alt="Ghế da trắng">
                        <div class="item-card-label">Ghế Da Trắng<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/ghe-nau.jpg') }}" alt="Ghế da nâu">
                        <div class="item-card-label">Ghế Da Nâu<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Premium</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ỐP NỘI THẤT -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp nội thất
                    đa dạng phong cách từ gỗ tự nhiên sang trọng đến nhôm hiện đại, tạo nên bầu không khí cabin theo sở
                    thích cá nhân.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/op-1.jpg') }}" alt="Ốp gỗ tự nhiên">
                        <div class="item-card-label">Ốp Gỗ Tự Nhiên<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/op-2.jpg') }}" alt="Ốp hợp kim cao cấp">
                        <div class="item-card-label">Ốp Hợp Kim Cao Cấp <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h AWD Premium</span>
                        </div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/op-3.jpg') }}" alt="Ốp piano black">
                        <div class="item-card-label">Ốp Piano Black<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản ES 350h FWD</span></div>
                    </div>
                </div>
            </div>

            <!-- VÔ LĂNG -->
            <div class="colour-pane" id="ct-wheel">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Vô lăng 3
                    chấu thiết kế hiện đại với các tùy chọn chất liệu bọc da cao cấp và chi tiết gỗ sang trọng.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/volang-1.jpg') }}" alt="Vô lăng bọc da">
                        <div class="item-card-label">Vô Lăng Bọc Da <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên
                                bản ES 350h FWD</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/volang-2.jpg') }}" alt="Vô lăng da kèm tích hợp">
                        <div class="item-card-label">Vô Lăng Da Đục Lỗ (Phiên bản ES 350h AWD Premium)</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/es/volang-3.jpg') }}" alt="Vô lăng da kết hợp gỗ">
                        <div class="item-card-label">Vô Lăng Gỗ Kết Hợp Da (Phiên bản ES 350h AWD Luxury)</div>
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
            <p class="section-desc">Lexus ES 350h sở hữu hệ thống hybrid thế hệ thứ 6 được tinh chỉnh để tối ưu hoá hiệu
                quả và hiệu suất — mang đến trải nghiệm vận hành mượt mà cùng khả năng tiết kiệm nhiên liệu vượt trội.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-350h-awd')">ES 350h — 2.5L Hybrid
                    AWD</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-350h-fwd')">ES 350h — 2.5L Hybrid FWD</button>
            </div>

            <!-- ES 350h AWD -->
            <div class="variant-pane active" id="vt-350h-awd">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/es/dong-co-hybrid.jpg') }}"
                            alt="Hệ thống Hybrid ES 350h 2.5L">
                        <div class="powertrain-badge">2.5L HEV AWD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-battery-charging-fill me-2"></i>Hệ Thống Hybrid 2.5L Thế Hệ 6</h3>
                        <p>Phiên bản 350h sử dụng động cơ xăng 2.5L kết hợp mô-tơ điện với công suất tổng hợp 244 mã lực.
                            Hybrid thế hệ mới mượt mà hơn, ít "gào máy" khi tăng tốc, đồng thời tiết kiệm nhiên liệu đáng
                            kể — lợi thế lớn tại Việt Nam. Vẫn giữ được triết lý êm – nhẹ – thư giãn đặc trưng của Lexus.
                        </p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">244 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">175 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">8.3s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">e-CVT</div>
                                <div class="pt-spec-label">Hộp số</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Thành phần hệ thống Hybrid</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ xăng 2.5L 4 xi-lanh</div>
                                <div class="hc-item"><i class="bi bi-lightning-charge"></i> Mô-tơ điện công suất cao</div>
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số vô cấp điện tử e-CVT</div>
                                <div class="hc-item"><i class="bi bi-cpu"></i> Bộ điều khiển hybrid thế hệ 6</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Dẫn động 4 bánh AWD</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">
                            Trải nghiệm thiên về "chill" hơn là "phấn khích" — phù hợp với khách hàng yêu cầu sự êm ái,
                            thư giãn và tiết kiệm nhiên liệu trong các hành trình dài.</p>
                    </div>
                </div>
            </div>

            <!-- ES 350h FWD -->
            <div class="variant-pane" id="vt-350h-fwd">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/es/dong-co-fwd.jpg') }}" alt="Hệ thống Hybrid ES 350h FWD">
                        <div class="powertrain-badge">2.5L HEV FWD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Hệ Thống Hybrid 2.5L Dẫn Động Cầu Trước</h3>
                        <p>Phiên bản dẫn động cầu trước FWD cung cấp khả năng vận hành mượt mà với ưu thế tiết kiệm nhiên
                            liệu tối đa. Động cơ hybrid thế hệ 6 kết hợp mô-tơ điện mang lại trải nghiệm lái êm nhẹ, ít
                            tiếng ồn và thân thiện với môi trường.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">244 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">8.5s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">5.0L</div>
                                <div class="pt-spec-label">/100km</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">FWD</div>
                                <div class="pt-spec-label">Dẫn động</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Cấu hình hệ thống</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ xăng 2.5L 4 xi-lanh</div>
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số vô cấp điện tử e-CVT
                                </div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Dẫn động cầu trước FWD</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KHUNG GẦM ==================== -->
    {{-- <section class="chassis-section" id="chassis">
        <div class="container">
            <div class="section-tag">Nền tảng kỹ thuật</div>
            <h2 class="section-title">Khung Gầm & Hệ Thống Treo</h2>
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Nền tảng hoàn toàn mới của ES thế hệ
                8 với trục cơ sở tăng, trọng tâm thấp — truyền lực dẫn động xuống mặt đường một cách hiệu quả, đồng thời
                mang đến khả năng êm ái tối đa trong mọi điều kiện vận hành.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/es/treo-truoc.jpg') }}" alt="Hệ thống treo trước Lexus ES">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo trước — MacPherson</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/es/treo-sau.jpg') }}" alt="Hệ thống treo sau Lexus ES">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo sau — Đa liên kết</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-wind"></i>Hiệu suất khí động học</h4>
                        <p class="chassis-info-desc">Thân xe dài và rộng hơn với phong cách Spindle Body — thiết kế khí
                            động học được tối ưu hoá giúp giảm lực cản không khí, tăng ổn định tốc độ cao và cải thiện
                            hiệu suất nhiên liệu đáng kể.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/es/khung-gam.jpg') }}"
                            alt="Sơ đồ khung gầm Lexus ES thế hệ 8">
                    </div>
                    <div class="chassis-legend">
                        <div class="legend-item"><span class="legend-color c1"></span>Ma-tít đàn hồi cao</div>
                        <div class="legend-item"><span class="legend-color c2"></span>Keo dán kết cấu</div>
                        <div class="legend-item"><span class="legend-color c3"></span>Keo dán đàn hồi cao</div>
                        <div class="legend-item"><span class="legend-color c4"></span>Hàn bước ngắn</div>
                        <div class="legend-item"><span class="legend-color c5"></span>Hàn vít laser</div>
                        <div class="legend-item"><span class="legend-color c6"></span>Gia tăng độ cứng vững</div>
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Thân xe độ cứng cao</h4>
                        <p class="chassis-info-desc">Cấu trúc thân xe thế hệ 8 được gia cố với công nghệ hàn laser và keo
                            đàn hồi cao, tăng độ cứng vững và giảm rung chấn hiệu quả.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Hệ thống treo / giảm xóc</h4>
                        <p class="chassis-info-desc">Hệ thống treo trước MacPherson và treo sau đa liên kết được tinh chỉnh
                            để tối ưu sự êm ái — đúng chất xe "ông chủ" với trải nghiệm thư giãn cho hàng ghế sau.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế ES Thế Hệ 8</h2>
            <p class="section-desc">So với thế hệ trước, ES 2026 mang ngôn ngữ thiết kế mới mang hơi hướng tương lai.
                Thân xe dài và rộng hơn, tăng không gian cabin. Phong cách "Spindle Body" thay cho lưới tản nhiệt truyền
                thống với đường nét sắc sảo, trẻ trung hơn — không còn quá "già" như ES cũ.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-tech')">Màn Hình & HUD</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/dau-xe.jpg') }}" alt="Đầu xe Lexus ES — Spindle Body">
                        <div class="design-caption">
                            <h4>Đầu xe — Spindle Body tương lai</h4>
                            <p>Phong cách "Spindle Body" thay cho lưới tản nhiệt truyền thống, tích hợp liền mạch với cụm
                                đèn LED sắc sảo — biểu tượng của ngôn ngữ thiết kế Lexus thế hệ mới.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/duoi-xe.jpg') }}"
                            alt="Đuôi xe Lexus ES — Đèn hậu liên kết">
                        <div class="design-caption">
                            <h4>Đuôi xe hiện đại</h4>
                            <p>Dải đèn hậu liên kết ngang tạo cảm giác chiều rộng và sự chuyển động. Đường viền đuôi xe
                                kéo dài nhấn mạnh tỷ lệ khí động học của sedan hạng sang.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{ asset('web/assets/images/es/hong-xe.jpg') }}"
                            alt="Hông xe Lexus ES — dáng sedan sang trọng">
                        <div class="design-caption">
                            <h4>Hông xe — Thân xe dài & rộng hơn</h4>
                            <p>Trục cơ sở tăng đáng kể, đường mái dốc mượt mà kết hợp đường gân sườn mạnh mẽ tạo dáng
                                đứng đầy uy lực, gợi cảm giác chuyển động ngay cả khi đứng yên.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Cụm đèn pha LED</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Spindle Body</div>
                    <div class="feature-chip"><i class="bi bi-arrow-down"></i> Trọng tâm thấp</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Trục cơ sở mở rộng</div>
                    <div class="feature-chip"><i class="bi bi-wind"></i> Khí động học tối ưu</div>
                    <div class="feature-chip"><i class="bi bi-stars"></i> Ngôn ngữ thiết kế tương lai</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{ asset('web/assets/images/es/cabin-tong-quan.jpg') }}"
                            alt="Nội thất Lexus ES — Cabin sang trọng">
                        <div class="design-caption">
                            <h4>Cabin sang trọng, hiện đại</h4>
                            <p>Khoang cabin là nơi ES luôn làm tốt, và bản 2026 còn nâng cấp thêm với vật liệu cao cấp
                                (gỗ, da, chi tiết hoàn thiện tinh xảo), không gian rộng hơn nhờ trục cơ sở tăng — đúng
                                chất sedan êm và thoải mái nhất phân khúc.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/hang-ghe-sau.jpg') }}" alt="Hàng ghế sau Lexus ES">
                        <div class="design-caption">
                            <h4>Hàng ghế sau — Đúng chất xe "ông chủ"</h4>
                            <p>Tăng trải nghiệm cho hàng ghế sau với không gian rộng rãi hơn, ghế công thái học giúp ngồi
                                lâu ít mệt — lý tưởng cho các chuyến di chuyển dài.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/thao-tac.jpg') }}" alt="Bảng điều khiển Lexus ES">
                        <div class="design-caption">
                            <h4>Thao tác thanh lịch</h4>
                            <p>Bố trí ghế và bảng điều khiển được thiết kế lấy người dùng làm trung tâm, các nút điều
                                khiển được sắp xếp hợp lý mang đến trải nghiệm thanh lịch và trực quan.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> HUD trên kính chắn gió</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Âm thanh cao cấp</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà đa vùng</div>
                    <div class="feature-chip"><i class="bi bi-person"></i> Ghế công thái học</div>
                    <div class="feature-chip"><i class="bi bi-tree"></i> Nội thất gỗ tự nhiên</div>
                    <div class="feature-chip"><i class="bi bi-arrows-fullscreen"></i> Không gian rộng mở</div>
                </div>
            </div>

            <!-- MÀHÌNH & HUD -->
            <div class="design-pane" id="dp-tech">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/man-hinh-14.jpg') }}"
                            alt="Màn hình chính 14 inch Lexus ES">
                        <div class="design-caption">
                            <h4>Màn hình chính 14 inch</h4>
                            <p>Màn hình trung tâm lớn khoảng 14 inch sắc nét, hỗ trợ kết nối điện thoại không dây Apple
                                CarPlay và Android Auto, tích hợp hệ thống giải trí mới.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/man-hinh-123.jpg') }}"
                            alt="Màn hình đa thông tin 12.3 inch">
                        <div class="design-caption">
                            <h4>Màn hình đa thông tin 12.3 inch</h4>
                            <p>Đồng hồ kỹ thuật số 12.3 inch hiển thị thông tin lái xe trực quan, rõ nét trong mọi điều
                                kiện ánh sáng. Có thể tuỳ chỉnh giao diện theo chế độ lái đã chọn.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{ asset('web/assets/images/es/hud.jpg') }}"
                            alt="HUD Lexus ES — Hiển thị trên kính chắn gió">
                        <div class="design-caption">
                            <h4>HUD — Màn hình hiển thị trên kính chắn gió</h4>
                            <p>Giúp người lái chủ động nắm được điều kiện đường quanh xe và thao tác vận hành dễ dàng
                                với tầm nhìn hướng về phía trước mà không cần nhìn xuống tay lái.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{ asset('web/assets/images/es/guong-ky-thuat-so.jpg') }}"
                            alt="Gương chiếu hậu kỹ thuật số">
                        <div class="design-caption">
                            <h4>Gương chiếu hậu kỹ thuật số</h4>
                            <p>Gương chiếu hậu kỹ thuật số với camera độ phân giải cao, cho tầm nhìn rõ nét trong mọi
                                điều kiện thời tiết, không bị che khuất bởi hành khách phía sau — công nghệ tiên phong
                                trong phân khúc sedan hạng sang.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> 14 inch Touchscreen</div>
                    <div class="feature-chip"><i class="bi bi-speedometer"></i> Đồng hồ 12.3 inch Digital</div>
                    <div class="feature-chip"><i class="bi bi-eye"></i> HUD kính chắn gió</div>
                    <div class="feature-chip"><i class="bi bi-phone"></i> Apple CarPlay / Android Auto</div>
                    <div class="feature-chip"><i class="bi bi-wifi"></i> Kết nối không dây</div>
                    <div class="feature-chip"><i class="bi bi-camera-video"></i> Gương chiếu hậu số</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ES EQUIPMENT ==================== -->
    <section class="equipment-section section-padding" id="fsport">
        <div class="container">
            <div class="section-tag">Trang bị đặc trưng</div>
            <h2 class="section-title">Trang Bị ES 350h 2026</h2>
            <p class="section-desc">Thế hệ thứ 8 hoàn toàn mới mang đến loạt trang bị cao cấp từ ngoại thất đến nội thất,
                định hình phong cách sedan hạng sang hybrid mới — tinh tế, hiện đại và đậm chất Lexus.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this,'exterior')">Ngoại Thất (A —
                    I)</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this,'interior')">Nội Thất (A — H)</button>
            </div>

            <!-- NGOẠI THẤT A–I -->
            <div class="equipment-content active" id="exterior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Spindle Body Mới</h4>
                        <p class="ec-desc">Phong cách Spindle Body thay cho lưới tản nhiệt truyền thống, tạo ngôn ngữ
                            thiết kế liền mạch và tương lai.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Cụm Đèn Pha LED</h4>
                        <p class="ec-desc">Cụm đèn pha LED sắc nét với đường nét mạnh mẽ, tạo điểm nhấn đặc trưng cho
                            thế hệ ES 2026.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Thân Xe Dài & Rộng Hơn</h4>
                        <p class="ec-desc">Kích thước tổng thể lớn hơn thế hệ trước, tăng không gian cabin và tạo vóc
                            dáng uy nghi của sedan hạng sang.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Trục Cơ Sở Mở Rộng</h4>
                        <p class="ec-desc">Trục cơ sở tăng mang đến không gian rộng rãi hơn cho hàng ghế sau, đúng chất
                            xe "ông chủ".</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Đường Nét Sắc Sảo</h4>
                        <p class="ec-desc">Đường nét sắc sảo, trẻ trung hơn — không còn quá "già" như ES cũ, hướng đến
                            khách hàng trẻ.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Dải Đèn Hậu Liên Kết</h4>
                        <p class="ec-desc">Dải đèn hậu liên kết ngang tạo cảm giác chiều rộng, thể hiện sự chuyển động
                            ngay khi đứng yên.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Mâm Hợp Kim Cao Cấp</h4>
                        <p class="ec-desc">Mâm hợp kim nhôm đa chấu với thiết kế hiện đại, tăng tính khí động học và
                            thẩm mỹ.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Gương Chiếu Hậu Kỹ Thuật Số</h4>
                        <p class="ec-desc">Gương chiếu hậu kỹ thuật số với camera độ phân giải cao, cho tầm nhìn rõ nét
                            trong mọi điều kiện.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">I</div>
                        <h4 class="ec-title">6 Tùy Chọn Màu Ngoại Thất</h4>
                        <p class="ec-desc">Trắng, Đen, Xám, Bạc, Xanh dương, Đồng — đa dạng lựa chọn phù hợp với nhiều
                            phong cách cá nhân.</p>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT A–H -->
            <div class="equipment-content" id="interior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Màn Hình Chính 14 inch</h4>
                        <p class="ec-desc">Màn hình trung tâm lớn khoảng 14 inch sắc nét, hỗ trợ kết nối điện thoại
                            không dây — trung tâm giải trí và điều khiển hiện đại.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Đồng Hồ Kỹ Thuật Số 12.3 inch</h4>
                        <p class="ec-desc">Màn hình đa thông tin 12.3 inch hiển thị thông tin lái xe trực quan, rõ nét
                            trong mọi điều kiện ánh sáng.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Màn Hình HUD</h4>
                        <p class="ec-desc">Hiển thị thông tin trên kính chắn gió giúp người lái tập trung hướng về phía
                            trước mà không cần nhìn xuống tay lái.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Vật Liệu Cao Cấp</h4>
                        <p class="ec-desc">Gỗ tự nhiên, da cao cấp và các chi tiết hoàn thiện tinh xảo — đúng chất Lexus
                            sang trọng và tinh tế.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Ghế Công Thái Học</h4>
                        <p class="ec-desc">Thiết kế ghế công thái học giúp ngồi lâu ít mệt — lý tưởng cho các chuyến đi
                            dài và doanh nhân bận rộn.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">ES 2026</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Không Gian Cabin Rộng</h4>
                        <p class="ec-desc">Trục cơ sở mở rộng giúp tăng không gian cabin — đặc biệt là hàng ghế sau, tạo
                            trải nghiệm thư giãn tối đa.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">3 Màu Nội Thất</h4>
                        <p class="ec-desc">Đen sang trọng, Trắng tinh khôi và Nâu ấm áp — ba lựa chọn phù hợp với mọi
                            phong cách cá nhân.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Kết Nối Điện Thoại Không Dây</h4>
                        <p class="ec-desc">Hệ thống giải trí mới hỗ trợ Apple CarPlay và Android Auto không dây — tiện
                            lợi và hiện đại.</p>
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
            <p class="section-desc">ES 2026 dự kiến trang bị thế hệ mới của Lexus Safety System+ 4.0 — hàng loạt công
                nghệ an toàn chủ động tiên tiến nhất từ Lexus.</p>

            <!-- An toàn chủ động -->
            <div class="tech-category">
                <h3 class="tech-category-title">
                    <span class="tech-item-icon">
                        <div class="ti-icon"><i class="bi bi-shield-check"></i></div>
                    </span>
                    Hệ Thống An Toàn Chủ Động — Lexus Safety System+ 4.0
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/pcs.jpg') }}" alt="PCS">
                                </div>
                                <div class="ti-name">Cảnh Báo Tiền Va Chạm</div>
                                <div class="ti-abbr">PCS — Pre-Collision System</div>
                                <div class="ti-desc">Hệ thống cảnh báo và tự động phanh khi phát hiện nguy cơ va chạm
                                    phía trước với phương tiện, người đi bộ hay xe đạp.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/drcc.jpg') }}" alt="DRCC">
                                </div>
                                <div class="ti-name">Kiểm Soát Hành Trình Chủ Động</div>
                                <div class="ti-abbr">DRCC — Dynamic Radar Cruise Control</div>
                                <div class="ti-desc">Tự động duy trì khoảng cách an toàn với xe phía trước ở mọi dải tốc
                                    độ, kể cả dừng hẳn trong kẹt xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/lda.jpg') }}" alt="LDA">
                                </div>
                                <div class="ti-name">Cảnh Báo Lệch Làn</div>
                                <div class="ti-abbr">LDA — Lane Departure Alert</div>
                                <div class="ti-desc">Phát hiện và cảnh báo khi xe có dấu hiệu lệch khỏi làn đường đang
                                    di chuyển mà không có tín hiệu xi-nhan.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/lta.jpg') }}" alt="LTA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Giữ Làn Xe</div>
                                <div class="ti-abbr">LTA — Lane Tracing Assist</div>
                                <div class="ti-desc">Hỗ trợ giữ xe đi đúng giữa làn đường, giảm mệt mỏi khi lái đường
                                    dài trên cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/rsa.jpg') }}" alt="RSA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Theo Dõi Biển Báo</div>
                                <div class="ti-abbr">RSA — Road Sign Assist</div>
                                <div class="ti-desc">Nhận diện biển báo giao thông và hiển thị trên màn hình thông tin
                                    giúp người lái không bỏ sót thông tin quan trọng.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/ahb.jpg') }}" alt="AHB">
                                </div>
                                <div class="ti-name">Hệ Thống Đèn Pha Tự Động</div>
                                <div class="ti-abbr">AHB — Automatic High Beam</div>
                                <div class="ti-desc">Tự động chuyển đổi giữa đèn pha và đèn cốt theo điều kiện giao
                                    thông, không cần tác động của người lái.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/es/pda.jpg') }}" alt="PDA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Lái Chủ Động</div>
                                <div class="ti-abbr">PDA — Proactive Driving Assist</div>
                                <div class="ti-desc">Hỗ trợ người lái chủ động dự đoán và phản ứng với các tình huống
                                    giao thông — giảm mệt mỏi và tăng an toàn.</div>
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
                    <div class="conv-item"><i class="bi bi-sliders"></i> Hệ thống lựa chọn chế độ lái (Eco / Normal /
                        Sport / Custom)</div>
                    <div class="conv-item"><i class="bi bi-p-square"></i> Phanh đỗ điện tử EPB + tính năng giữ phanh Auto
                        Hold</div>
                    <div class="conv-item"><i class="bi bi-music-note-beamed"></i> Hệ thống giải trí mới thế hệ 8</div>
                    <div class="conv-item"><i class="bi bi-phone"></i> Kết nối điện thoại không dây</div>
                    <div class="conv-item"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh Panorama</div>
                    <div class="conv-item"><i class="bi bi-droplet"></i> Gạt mưa tích hợp vòi phun nước rửa kính</div>
                    <div class="conv-item"><i class="bi bi-person-fill"></i> Ghế công thái học chỉnh điện đa hướng</div>
                    <div class="conv-item"><i class="bi bi-thermometer-half"></i> Điều hoà đa vùng độc lập</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
    <section class="specs-section section-padding" id="specs">
        <div class="container">
            <div class="section-tag">Dữ liệu kỹ thuật</div>
            <h2 class="section-title">Tính Năng Chính</h2>
            <p class="section-subtitle">ES 250 / ES 250 F-Sport / ES 300h</p>

            <div class="specs-grid">
                <!-- 1. NGOẠI THẤT -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-lightbulb"></i> Ngoại Thất</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Đèn chiếu xa/gần</span><span class="spec-value">3
                                bóng LED Blade scan</span></div>
                        <div class="spec-row"><span class="spec-name">Đèn ban ngày (DRL)</span><span
                                class="spec-value">LED</span></div>
                        <div class="spec-row"><span class="spec-name">Đèn thích ứng (AHS/AHB/ALS)</span><span
                                class="spec-value">F-Sport, ES 300h</span></div>
                        <div class="spec-row"><span class="spec-name">Đèn báo phanh</span><span
                                class="spec-value">LED</span></div>
                        <div class="spec-row"><span class="spec-name">Gạt mưa tự động</span><span class="spec-value">Tiêu
                                chuẩn</span></div>
                        <div class="spec-row"><span class="spec-name">Gương chiếu hậu đa tính năng</span><span
                                class="spec-value">Chỉnh/gập điện, sấy, nhớ</span></div>
                        <div class="spec-row"><span class="spec-name">Cửa khoang hành lý điện</span><span
                                class="spec-value">Không chạm</span></div>
                    </div>
                </div>

                <!-- 2. GHẾ NGỒI -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-person"></i> Ghế Ngồi</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Chất liệu</span><span class="spec-value">Da cao cấp
                                / F-Sport / Semi-aniline</span></div>
                        <div class="spec-row"><span class="spec-name">Ghế lái chỉnh điện</span><span
                                class="spec-value">10 hướng (8 hướng F-Sport)</span></div>
                        <div class="spec-row"><span class="spec-name">Ghế phụ chỉnh điện</span><span class="spec-value">8
                                hướng (10 hướng ES 300h)</span></div>
                        <div class="spec-row"><span class="spec-name">Nhớ vị trí ghế</span><span class="spec-value">3 vị
                                trí</span></div>
                        <div class="spec-row"><span class="spec-name">Sưởi & làm mát ghế</span><span
                                class="spec-value">Tiêu chuẩn</span></div>
                        <div class="spec-row"><span class="spec-name">Ghế sau chỉnh điện</span><span class="spec-value">2
                                hướng (ES 300h)</span></div>
                        <div class="spec-row"><span class="spec-name">Hỗ trợ ra vào</span><span class="spec-value">Tiêu
                                chuẩn</span></div>
                    </div>
                </div>

                <!-- 3. TIỆN NGHI & GIẢI TRÍ -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-music-note-beamed"></i> Tiện Nghi & Giải Trí</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Điều hòa tự động</span><span class="spec-value">2
                                vùng (3 vùng ES 300h)</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ thống âm thanh</span><span
                                class="spec-value">Lexus Premium / Mark Levinson</span></div>
                        <div class="spec-row"><span class="spec-name">Số loa</span><span class="spec-value">10 loa (17
                                loa ES 300h)</span></div>
                        <div class="spec-row"><span class="spec-name">Màn hình trung tâm</span><span
                                class="spec-value">12.3 inch</span></div>
                        <div class="spec-row"><span class="spec-name">Kết nối</span><span class="spec-value">Apple
                                CarPlay & Android Auto</span></div>
                        <div class="spec-row"><span class="spec-name">Head-Up Display (HUD)</span><span
                                class="spec-value">240 x 90</span></div>
                        <div class="spec-row"><span class="spec-name">Sạc không dây & chìa khóa thẻ</span><span
                                class="spec-value">Tiêu chuẩn</span></div>
                    </div>
                </div>

                <!-- 4. AN TOÀN CHỦ ĐỘNG -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-shield-check"></i> An Toàn Chủ Động</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Ga tự động theo radar</span><span
                                class="spec-value">DRCC</span></div>
                        <div class="spec-row"><span class="spec-name">An toàn tiền va chạm</span><span
                                class="spec-value">PCS</span></div>
                        <div class="spec-row"><span class="spec-name">Cảnh báo lệch/theo dõi làn</span><span
                                class="spec-value">LDA + LTA</span></div>
                        <div class="spec-row"><span class="spec-name">Cảnh báo điểm mù</span><span
                                class="spec-value">BSM</span></div>
                        <div class="spec-row"><span class="spec-name">Cảnh báo cắt ngang khi lùi</span><span
                                class="spec-value">RCTA</span></div>
                        <div class="spec-row"><span class="spec-name">Ổn định & vào cua chủ động</span><span
                                class="spec-value">VSC + ACA + HAC</span></div>
                        <div class="spec-row"><span class="spec-name">Hỗ trợ lực phanh</span><span class="spec-value">BA
                                + EBD + Phanh đỗ điện tử</span></div>
                    </div>
                </div>

                <!-- 5. AN TOÀN BỊ ĐỘNG -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-shield-fill-check"></i> An Toàn Bị Động</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Số lượng túi khí</span><span class="spec-value">10
                                túi khí</span></div>
                        <div class="spec-row"><span class="spec-name">Camera lùi</span><span class="spec-value">Tiêu
                                chuẩn</span></div>
                        <div class="spec-row"><span class="spec-name">Cảm biến khoảng cách</span><span
                                class="spec-value">8 cảm biến trước/sau</span></div>
                        <div class="spec-row"><span class="spec-name">Cảnh báo áp suất lốp</span><span
                                class="spec-value">TPWS</span></div>
                        <div class="spec-row"><span class="spec-name">Móc ghế trẻ em</span><span
                                class="spec-value">ISOFIX</span></div>
                        <div class="spec-row"><span class="spec-name">Khung xe an toàn</span><span class="spec-value">Mũi
                                xe hấp thụ xung lực</span></div>
                        <div class="spec-row"><span class="spec-name">Rèm che nắng</span><span class="spec-value">Cửa sau
                                + kính sau chỉnh điện</span></div>
                    </div>
                </div>

                <!-- 6. TAY LÁI & ĐIỀU KHIỂN -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-sliders"></i> Tay Lái & Điều Khiển</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Tay lái chỉnh điện</span><span
                                class="spec-value">Nhớ vị trí</span></div>
                        <div class="spec-row"><span class="spec-name">Sưởi tay lái</span><span class="spec-value">Tiêu
                                chuẩn</span></div>
                        <div class="spec-row"><span class="spec-name">Lẫy chuyển số</span><span class="spec-value">Tích
                                hợp tay lái</span></div>
                        <div class="spec-row"><span class="spec-name">Hỗ trợ ra vào</span><span class="spec-value">Tự
                                động lùi tay lái</span></div>
                        <div class="spec-row"><span class="spec-name">Cửa sổ trời</span><span class="spec-value">1 chạm,
                                chống kẹt</span></div>
                        <div class="spec-row"><span class="spec-name">Lọc không khí</span><span class="spec-value">Lọc
                                bụi & phấn hoa</span></div>
                        <div class="spec-row"><span class="spec-name">Cửa gió thông minh</span><span
                                class="spec-value">Tự động điều chỉnh</span></div>
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
                name: 'Trắng',
                images: ['{{ asset('web/assets/images/es/trang-1.jpg') }}',
                    '{{ asset('web/assets/images/es/trang-2.jpg') }}',
                    '{{ asset('web/assets/images/es/trang-3.jpg') }}',
                    '{{ asset('web/assets/images/es/trang-4.jpg') }}',
                    '{{ asset('web/assets/images/es/trang-5.jpg') }}'
                ]
            },
            black: {
                name: 'Đen',
                images: ['{{ asset('web/assets/images/es/den-1.jpg') }}',
                    '{{ asset('web/assets/images/es/den-2.jpg') }}',
                    '{{ asset('web/assets/images/es/den-3.jpg') }}',
                    '{{ asset('web/assets/images/es/den-4.jpg') }}',
                    '{{ asset('web/assets/images/es/den-5.jpg') }}'
                ]
            },
            gray: {
                name: 'Xám',
                images: ['{{ asset('web/assets/images/es/xam-1.jpg') }}',
                    '{{ asset('web/assets/images/es/xam-2.jpg') }}',
                    '{{ asset('web/assets/images/es/xam-3.jpg') }}',
                    '{{ asset('web/assets/images/es/xam-4.jpg') }}',
                    '{{ asset('web/assets/images/es/xam-5.jpg') }}'
                ]
            },
            silver: {
                name: 'Bạc',
                images: ['{{ asset('web/assets/images/es/bac-1.jpg') }}',
                    '{{ asset('web/assets/images/es/bac-2.jpg') }}',
                    '{{ asset('web/assets/images/es/bac-3.jpg') }}',
                    '{{ asset('web/assets/images/es/bac-4.jpg') }}',
                    '{{ asset('web/assets/images/es/bac-5.jpg') }}'
                ]
            },
            blue: {
                name: 'Xanh dương',
                images: ['{{ asset('web/assets/images/es/xanhduong-1.jpg') }}',
                    '{{ asset('web/assets/images/es/xanhduong-2.jpg') }}',
                    '{{ asset('web/assets/images/es/xanhduong-3.jpg') }}',
                    '{{ asset('web/assets/images/es/xanhduong-4.jpg') }}',
                    '{{ asset('web/assets/images/es/xanhduong-5.jpg') }}'
                ]
            },
            copper: {
                name: 'Đồng',
                images: ['{{ asset('web/assets/images/es/dong-1.jpg') }}',
                    '{{ asset('web/assets/images/es/dong-2.jpg') }}',
                    '{{ asset('web/assets/images/es/dong-3.jpg') }}',
                    '{{ asset('web/assets/images/es/dong-4.jpg') }}',
                    '{{ asset('web/assets/images/es/dong-5.jpg') }}'
                ]
            }
        };
        let currentColor = 'white',
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
                t.querySelector('img').src = imgs[i].replace('w=1000', 'w=300').replace('q=85', 'q=60');
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
            selectedVersion = {
                price,
                name
            };
        }

        const _activeVer = document.querySelector('.version-option.active');
        if (_activeVer) {
            selectedVersion = {
                price: _activeVer.querySelector('.vo-price').textContent,
                name: _activeVer.querySelector('.vo-name').textContent
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

        /* ===================== COLOUR SWATCH (showcase) ===================== */
        function selectSwatch(el, name, imgUrl) {
            el.closest('.swatch-row').querySelectorAll('.sw').forEach(s => s.classList.remove('active'));
            el.classList.add('active');
            document.getElementById('extPreviewName').textContent = name;
            document.getElementById('extPreviewImg').src = imgUrl;
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
        function submitInquiry(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const orig = btn.innerHTML;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Đang gửi...';
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>Đã gửi thành công!';
                btn.style.background = 'var(--lexus-green)';
                setTimeout(() => {
                    btn.innerHTML = orig;
                    btn.style.background = '';
                    btn.disabled = false;
                    e.target.reset();
                }, 3000);
            }, 1500);
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
    <script>
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
            margin-top: 2px;
        }
    </style>
@endpush
