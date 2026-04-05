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
                                <span>Sedan</span>
                                <span class="new">Đầu Bảng</span>
                                <span class="hybrid">Multi Stage Hybrid</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" title="Yêu thích" onclick="toggleFavorite(this)"><i
                                        class="bi bi-heart"></i></button>
                                <button class="gallery-action-btn" title="So sánh"><i
                                        class="bi bi-arrow-left-right"></i></button>
                                <button class="gallery-action-btn" title="Chia sẻ"><i class="bi bi-share"></i></button>
                            </div>
                            <div class="gallery-main">
                                <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}"
                                    alt="Lexus LS 500h" id="mainImage">
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
                                    src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> Multi Stage Hybrid — Sedan Đầu Bảng
                        </div>
                        <h1 class="product-title">Lexus LS</h1>
                        <p class="product-subtitle">500h — V6 3.5L Multi Stage Hybrid AWD</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.9</strong> (186 đánh giá)</span>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option active"
                                    onclick="selectVersion(this,'8.030.000.000','LS 500 V6 Twin Turbo RWD',295,'5.4s','10.4L','RWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LS 500h — V6 3.5L Twin Turbo RWD</div>
                                    </div>
                                    <div class="vo-price">8.030.000.000đ</div>
                                </div>
                                {{-- <div class="version-option"
                                    onclick="selectVersion(this,'7.030.000.000','LS 500 V6 Twin Turbo RWD',415,'5.4s','10.4L','RWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LS 500 — V6 3.5L Twin Turbo RWD</div>
                                    </div>
                                    <div class="vo-price">7.030.000.000đ</div>
                                </div> --}}
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">8.030.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="quick-specs" style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">295</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">5.4s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">10.4L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">RWD</div>
                                    <div class="qs-label">Dẫn động</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~80 triệu/tháng</strong> với lãi suất
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
                                    data-name="Passion Red Mica" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#191970" data-color="blue"
                                    data-name="Structural Blue" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color:#6B4226" data-color="brown"
                                    data-name="Terracotta Brown" onclick="selectColor(this)"></div>
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
                    <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}"
                        alt="Lexus LS 500h — Sedan hạng sang đầu bảng">
                    <div class="intro-year-badge">
                        <div class="iyb-year">1989</div>
                        <div class="iyb-label">Năm ra mắt</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">Chuẩn Mực Sedan Hạng Sang Tương Lai</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Đối với Lexus, thiết kế một chiếc sedan hàng đầu
                        không chỉ là tạo ra một chiếc xe sang trọng. Chiếc LS còn là chuẩn mực cho định nghĩa về xe sang
                        trong tương lai — mẫu xe tiên phong với sự kết tinh của văn hóa Nhật Bản, vượt xa mọi kỳ vọng của
                        khách hàng.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">LS được phát triển dựa trên
                        sự hợp nhất giữa thiết kế ấn tượng giàu cảm xúc của một chiếc sedan đầu bảng với khả năng vận hành
                        đạt đến đỉnh cao của sự thanh lịch, thoải mái và thân thiện môi trường, cùng chất lượng hoàn mỹ đến
                        từ nghệ thuật chế tác bậc thầy của những nghệ nhân (Takumi) Nhật Bản và các công nghệ sản xuất hiện
                        đại nhất.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">35+</div>
                            <div class="ms-label">Năm tiên phong</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">2</div>
                            <div class="ms-label">Phiên bản động cơ</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">10</div>
                            <div class="ms-label">Cấp số Hybrid</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">#1</div>
                            <div class="ms-label">Sedan hạng sang Nhật</div>
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
            <p class="section-desc">Tạo nên chiếc LS mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, chất liệu
                nội thất và ốp trang trí phản ánh nghệ thuật Takumi Nhật Bản.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Nội Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-trim')">Ốp Trang Trí</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-anniversary')">Phiên Bản 30 Năm</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-den.jpg') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Caviar Black</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-trang.jpg') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Sonic White Pearl</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-xam.jpg') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Sonic Titanium</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-do.jpg') }}" alt="Màu đỏ">
                            </div>
                            <div class="ti-abbr">Passion Red Mica</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-xanh.jpg') }}" alt="Xanh Structural">
                            </div>
                            <div class="ti-abbr">Structural Blue</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/ls/mau-nau.jpg') }}" alt="Nâu Terracotta">
                            </div>
                            <div class="ti-abbr">Terracotta Brown</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Nội thất
                    được hoàn thiện tinh xảo mang giá trị thẩm mỹ cao của nghệ thuật chế tác Nhật Bản, dệt nên không gian
                    độc đáo chạm đến mọi giác quan.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/noi-that-den.jpg') }}" alt="Nội thất đen">
                        <div class="item-card-label">Da đen Black<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Tất cả phiên bản</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/noi-that-trang.jpg') }}" alt="Nội thất trắng kem">
                        <div class="item-card-label">Kem Flaxen<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phong cách sang trọng</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/noi-that-nau.jpg') }}" alt="Nội thất nâu">
                        <div class="item-card-label">Nâu Chestnut<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phong cách ấm áp</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/noi-that-xanh.jpg') }}" alt="Nội thất xanh navy">
                        <div class="item-card-label">Xanh Navy<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản đặc biệt</span></div>
                    </div>
                </div>
            </div>

            <!-- ỐP TRANG TRÍ -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp trang
                    trí được lựa chọn kỹ lưỡng, từ gỗ tự nhiên cao cấp đến sợi carbon, phản ánh nghệ thuật chế tác Takumi
                    trong từng chi tiết nhỏ nhất.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/op-go.jpg') }}" alt="Ốp gỗ">
                        <div class="item-card-label">Gỗ Bamboo cao cấp<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phong cách truyền thống Nhật Bản</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/op-nhom.jpg') }}" alt="Ốp nhôm">
                        <div class="item-card-label">Nhôm xước cao cấp<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phong cách hiện đại</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/op-carbon.jpg') }}" alt="Ốp carbon">
                        <div class="item-card-label">Sợi carbon<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phong cách thể thao</span></div>
                    </div>
                </div>
            </div>

            <!-- PHIÊN BẢN 30 NĂM -->
            <div class="colour-pane" id="ct-anniversary">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Phiên bản
                    đặc biệt kỷ niệm 30 năm ra mắt dòng xe LS — một cột mốc lịch sử của Lexus với những chi tiết độc quyền
                    chưa từng có.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/30nam-1.jpg') }}" alt="Phiên bản 30 năm">
                        <div class="item-card-label">Ngoại thất đặc biệt<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Kỷ niệm 30 năm LS</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/30nam-2.jpg') }}" alt="Nội thất 30 năm">
                        <div class="item-card-label">Nội thất độc quyền<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Chi tiết kỷ niệm đặc biệt</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/ls/30nam-3.jpg') }}" alt="Logo 30 năm">
                        <div class="item-card-label">Logo kỷ niệm 30 năm<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản giới hạn</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-award me-2"></i>Phiên bản kỷ niệm 30 năm:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Số lượng giới hạn toàn cầu, trang bị
                        những chi tiết hoàn thiện độc quyền kỷ niệm chặng đường 30 năm của dòng xe LS huyền thoại.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== HỆ TRUYỀN ĐỘNG ==================== -->
    <section class="powertrain-section section-padding" id="powertrain">
        <div class="container">
            <div class="section-tag">Động lực học</div>
            <h2 class="section-title">Hệ Thống Truyền Động</h2>
            <p class="section-desc">Lexus LS cung cấp hai hệ thống động cơ V6 3.5L tiên tiến — phiên bản tăng áp kép
                thuần xăng và phiên bản Multi Stage Hybrid đột phá với 10 cấp số ảo.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-500h')">LS 500h — Multi Stage Hybrid</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-500')">LS 500 — V6 Twin Turbo</button>
            </div>

            <!-- LS 500h HYBRID -->
            <div class="variant-pane active" id="vt-500h">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt="Hệ thống Multi Stage Hybrid LS 500h">
                        <div class="powertrain-badge">Multi Stage Hybrid</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-battery-charging-fill me-2"></i>Hệ Thống Multi Stage Hybrid 10 Cấp</h3>
                        <p>Cơ chế điều khiển sang số 10 cấp của hệ thống Multi Stage Hybrid mang đến cảm giác tăng tốc
                            ngay lập tức, đồng bộ với sự gia tăng tốc độ vòng quay động cơ và nhịp chuyển số tuyệt vời.
                            Thiết bị điều khiển Multi Stage điều chỉnh sự phối hợp của động cơ xăng và động cơ điện, tối
                            đa hóa mô-men xoắn và gia tăng lực kéo thêm 24%.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">295 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">6.7s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7.5L</div>
                                <div class="pt-spec-label">/100km</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">10 cấp</div>
                                <div class="pt-spec-label">Ảo Hybrid</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Công nghệ động cơ V6 3.5L (8GR-FXS)</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Dual VVT-i (cửa nạp mở rộng VVT-iW)</div>
                                <div class="hc-item"><i class="bi bi-droplet"></i> Phun nhiên liệu trực tiếp D-4S</div>
                                <div class="hc-item"><i class="bi bi-lightning-charge"></i> Mô tơ điện hiệu suất cao AWD</div>
                                <div class="hc-item"><i class="bi bi-speedometer2"></i> Vòng tua tối đa nâng lên 6,600 vòng/phút</div>
                                <div class="hc-item"><i class="bi bi-cpu"></i> Đạt công suất tối đa từ vận tốc 50 km/h</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LS 500 TURBO -->
            <div class="variant-pane" id="vt-500">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}" alt="Động cơ LS 500 V6 Twin Turbo">
                        <div class="powertrain-badge">V6 3.5L TT</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động Cơ V6 3.5L Tăng Áp Kép (V35A-FTS)</h3>
                        <p>Được phát triển dành riêng cho Lexus, động cơ LS mới đã được thiết kế lại, sử dụng công nghệ
                            đốt cháy tốc độ cao và bộ tăng áp hiệu suất cao mang đến công suất vượt trội cùng hiệu quả
                            nhiên liệu tuyệt vời. Động cơ tạo ra mô-men xoắn cực đại ngay tại vòng tua thấp cùng khả năng
                            tăng tốc mạnh mẽ ngay khi đạp ga.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">415 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">650 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">5.4s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">10 cấp</div>
                                <div class="pt-spec-label">Hộp số AT</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Cấu hình hệ thống</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ V6 3.5L Twin Turbo (V35A-FTS)</div>
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số tự động 10 cấp sang số trực tiếp</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Hệ dẫn động cầu sau FR (RWD)</div>
                                <div class="hc-item"><i class="bi bi-droplet"></i> Công nghệ đốt cháy tốc độ cao</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Hộp số
                            tự động 10 cấp sang số trực tiếp giúp chuyển số chính xác với phản ứng tức thì, nâng tầm cảm
                            giác lái đầy hứng khởi. Mô-men xoắn cực đại ngay tại vòng tua thấp — phản ứng tức thì ngay
                            khi đạp ga.</p>
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
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Thân xe đa vật liệu độ cứng cao
                kết hợp hệ dẫn động cầu sau FR tinh chỉnh từ LC, cùng hệ thống VDIM + LDH tích hợp quản lý góc lái cả
                bốn bánh — đỉnh cao của kỹ thuật Lexus.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}"
                            alt="Hệ thống treo LS">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo trước — Dầu ma sát thấp</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}"
                            alt="Hệ thống treo sau LS">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo sau — Liên kết tay đòn mới</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Thân Xe Đa Vật Liệu</h4>
                        <p class="chassis-info-desc">Thân xe đạt đến độ cứng cao, trọng lượng nhẹ và hiệu quả an toàn
                            xuất sắc nhờ cấu trúc tối ưu hóa, kết hợp thép dập nóng chịu lực cho các chi tiết quan trọng
                            như thanh dọc gầm xe, trụ bên và trần xe.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}"
                            alt="VDIM + LDH Lexus LS">
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-cpu"></i>VDIM + LDH — Quản Lý Động Lực Học Hợp Nhất</h4>
                        <p class="chassis-info-desc">VDIM quản lý cùng lúc động cơ, phanh, hệ thống lái và các hệ thống
                            khác như một thể thống nhất. LDH tối ưu hóa góc lái của cả bốn bánh xe dựa trên tốc độ xe và
                            góc xoay vô lăng để tìm ra động lực học lý tưởng nhất.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-arrows-move"></i>Hệ Dẫn Động FR — Tinh Chỉnh Từ LC</h4>
                        <p class="chassis-info-desc">LS thừa hưởng hệ dẫn động cầu sau được tinh chỉnh từ chiếc coupe
                            thể thao LC của Lexus, tối ưu hóa phân bổ trọng lượng trước-sau và mô-men quán tính xe, mang
                            lại khả năng chuyển đổi mượt mà tự nhiên khi vào cua.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Ổn Định Tốc Độ Cao</h4>
                        <p class="chassis-info-desc">Hệ thống LDH mang đến sự ổn định tuyệt vời của xe ở tốc độ cao và
                            phản ứng lái nhạy bén ở tốc độ trung bình trên các cung đường quanh co như đường đồi núi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế LS — Táo Bạo Đầy Đam Mê</h2>
            <p class="section-desc">Ngoại thất hợp nhất những đường nét gợi cảm với nền tảng khung gầm trọng tâm thấp.
                Nội thất "Sự tiện nghi tiên phong" kết hợp nghệ thuật chế tác Takumi Nhật Bản và công nghệ hiện đại nhất.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-rear')">Khoang Hành Khách</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/dau-xe.jpg')}}"
                            alt="Đầu xe Lexus LS">
                        <div class="design-caption">
                            <h4>Đầu Xe — Spindle Grille Thế Hệ Mới</h4>
                            <p>Lưới tản nhiệt Spindle thế hệ mới kết hợp đèn pha LED sắc nét tạo nên diện mạo sedan đầu
                                bảng đầy uy nghiêm và cá tính.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/duoi-xe.jpg')}}"
                            alt="Đuôi xe Lexus LS">
                        <div class="design-caption">
                            <h4>Đuôi Xe — Đèn Hậu Liên Kết</h4>
                            <p>Đường nét đuôi xe mạnh mẽ với dải đèn hậu liên kết tạo chiều rộng ấn tượng, nhấn mạnh
                                tỷ lệ hoàn hảo của một chiếc sedan hạng sang đầu bảng.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg')}}"
                            alt="Tổng thể Lexus LS">
                        <div class="design-caption">
                            <h4>Thân Xe — Trọng Tâm Thấp & Đường Nét Gợi Cảm</h4>
                            <p>Thiết kế "Táo bạo đầy đam mê" hợp nhất những đường nét gợi cảm với nền tảng khung gầm
                                trọng tâm thấp, khơi gợi những trải nghiệm hứng khởi sau tay lái và ghi dấu ấn độc đáo
                                về phong cách.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Đèn pha LED thế hệ mới</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Spindle Grille đặc trưng</div>
                    <div class="feature-chip"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="feature-chip"><i class="bi bi-arrow-down"></i> Trọng tâm thấp</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Wheelbase 3,000mm</div>
                    <div class="feature-chip"><i class="bi bi-wind"></i> Khí động học tối ưu</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/ls/volang.jpg')}}"
                            alt="Vô lăng Lexus LS">
                        <div class="design-caption">
                            <h4>Khoang Lái — Thuận Tiện Tập Trung</h4>
                            <p>Khoang lái được thiết kế thuận tiện cho việc tập trung lái xe với vô lăng bọc da cao cấp,
                                màn hình HUD kích thước lớn hiển thị trên kính chắn gió và hệ thống điều khiển trực quan.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/can-so.jpg')}}"
                            alt="Cần số Lexus LS">
                        <div class="design-caption">
                            <h4>Cần Số & Công Tắc Chế Độ Lái</h4>
                            <p>Cần số tinh tế kết hợp công tắc chọn chế độ lái tích hợp trực quan, mang đến trải nghiệm
                                điều khiển hoàn hảo phản ánh nghệ thuật Takumi trong từng chi tiết.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/tapli-cua.jpg')}}"
                            alt="Táp li cửa Lexus LS">
                        <div class="design-caption">
                            <h4>Táp Li Cửa — Nghệ Thuật Chế Tác Takumi</h4>
                            <p>Các chi tiết hoàn thiện tinh xảo trên táp li cửa mang giá trị thẩm mỹ cao của nghệ thuật
                                chế tác Nhật Bản, dệt nên không gian nội thất độc đáo chạm đến mọi giác quan.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> HUD kích thước lớn</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Âm thanh cao cấp</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời panoramic</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà tự động đa vùng</div>
                    <div class="feature-chip"><i class="bi bi-camera-video"></i> Hệ thống quan sát toàn cảnh</div>
                    <div class="feature-chip"><i class="bi bi-sliders"></i> Công tắc chọn chế độ lái</div>
                </div>
            </div>

            <!-- KHOANG HÀNH KHÁCH -->
            <div class="design-pane" id="dp-rear">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/ls/ghe-sau.jpg')}}"
                            alt="Ghế sau Lexus LS">
                        <div class="design-caption">
                            <h4>Ghế Sau — Tự Động Ngả & Tiện Nghi Tinh Tế</h4>
                            <p>Ghế sau tự động ngả mang đến sự thoải mái tuyệt đỉnh. Khoang hành khách tiện nghi tinh tế
                                xứng tầm một chiếc sedan sang trọng hàng đầu, kết hợp không gian rộng rãi và trang bị
                                đầy đủ.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/man-hinh-giai-tri.jpg')}}"
                            alt="Màn hình giải trí ghế sau Lexus LS">
                        <div class="design-caption">
                            <h4>Màn Hình Giải Trí Hàng Ghế Sau</h4>
                            <p>Hệ thống giải trí riêng cho hành khách hàng sau, mang lại trải nghiệm di chuyển đẳng cấp
                                với đầy đủ tiện ích giải trí và điều khiển.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/ls/man-hinh-dieu-khien.jpg')}}"
                            alt="Màn hình điều khiển phía sau Lexus LS">
                        <div class="design-caption">
                            <h4>Bảng Điều Khiển Hàng Ghế Sau</h4>
                            <p>Bảng điều khiển riêng cho hàng ghế sau giúp hành khách tự điều chỉnh điều hòa, ghế,
                                màn trập cửa và hệ thống giải trí một cách tiện lợi.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-person-check"></i> Ghế sau tự động ngả</div>
                    <div class="feature-chip"><i class="bi bi-display"></i> Màn hình giải trí riêng</div>
                    <div class="feature-chip"><i class="bi bi-controller"></i> Bảng điều khiển phía sau</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hòa độc lập hàng sau</div>
                    <div class="feature-chip"><i class="bi bi-phone"></i> Sạc không dây hàng sau</div>
                    <div class="feature-chip"><i class="bi bi-window-sidebar"></i> Màn trập cửa điện</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CÔNG NGHỆ ==================== -->
    <section class="technology-section section-padding" id="technology">
        <div class="container">
            <div class="section-tag">An toàn & tiện nghi</div>
            <h2 class="section-title">Công Nghệ Tiên Phong</h2>
            <p class="section-desc">LS được trang bị hệ thống an toàn chủ động toàn diện và các tiện nghi công nghệ cao
                phản ánh vị thế sedan đầu bảng của Lexus.</p>

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
                                <div class="ti-abbr">PCS — Pre-Collision System</div>
                                <div class="ti-desc">Phát hiện và cảnh báo nguy cơ va chạm phía trước, hỗ trợ phanh
                                    khẩn cấp tự động để giảm thiểu hoặc tránh va chạm.</div>
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
                                <div class="ti-abbr">DRCC — Dynamic Radar Cruise Control</div>
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
                                <div class="ti-abbr">LTA — Lane Tracing Assist</div>
                                <div class="ti-desc">Hỗ trợ giữ xe đi đúng giữa làn đường, giảm mệt mỏi khi lái
                                    đường dài trên cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/AHB.webp') }}" alt="AHS">
                                </div>
                                <div class="ti-name">Đèn Pha Tự Động Thích Ứng</div>
                                <div class="ti-abbr">AHS + Đèn góc LED / Đa thời tiết</div>
                                <div class="ti-desc">Tự động điều chỉnh vùng chiếu sáng. Đèn góc LED tăng tầm nhìn
                                    khi vào cua. Chế độ chiếu sáng đa thời tiết tối ưu.</div>
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
                                <div class="ti-desc">Cảnh báo bằng ánh sáng và âm thanh khi có phương tiện trong
                                    vùng điểm mù khi chuyển làn đường.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/pksa.png') }}" alt="PKSA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Cảnh Báo Đỗ Xe</div>
                                <div class="ti-abbr">PKSA — Parking Support Alert</div>
                                <div class="ti-desc">Cảnh báo bằng âm thanh và hình ảnh khi phát hiện vật cản xung
                                    quanh xe trong quá trình đỗ xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/puh.png') }}" alt="PUH">
                                </div>
                                <div class="ti-name">Kết Cấu Mui Xe An Toàn</div>
                                <div class="ti-abbr">PUH — Pop-Up Hood</div>
                                <div class="ti-desc">Tự động nâng phần đuôi mui xe lên khi phát hiện va chạm với
                                    người đi bộ, giảm thiểu chấn thương đầu.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/srs.png') }}" alt="SRS">
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
                    <div class="conv-item"><i class="bi bi-display"></i> Màn hình HUD kích thước lớn hiển thị trên kính chắn gió</div>
                    <div class="conv-item"><i class="bi bi-person-check"></i> Ghế sau tự động ngả điều chỉnh điện</div>
                    <div class="conv-item"><i class="bi bi-camera-video"></i> Hệ thống quan sát toàn cảnh 360°</div>
                    <div class="conv-item"><i class="bi bi-sliders"></i> Lựa chọn chế độ lái (Eco / Normal / Sport / Sport+)</div>
                    <div class="conv-item"><i class="bi bi-cpu"></i> VDIM + LDH — Quản lý động lực học hợp nhất 4 bánh</div>
                    <div class="conv-item"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh cao cấp đa loa</div>
                    <div class="conv-item"><i class="bi bi-phone"></i> Sạc không dây & kết nối Apple CarPlay / Android Auto</div>
                    <div class="conv-item"><i class="bi bi-eye-fill"></i> Gương chiếu hậu kỹ thuật số</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
<section class="specs-section section-padding" id="specs">
    <div class="container">
        <div class="section-tag">Dữ liệu kỹ thuật</div>
        <h2 class="section-title">Thông Số Kỹ Thuật — LS 500 & LS 500h</h2>
        <div class="specs-grid">

            <!-- CARD 1: Kích Thước & Không Gian -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-rulers"></i> Kích Thước & Không Gian</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao</span><span class="spec-value">5,235 × 1,900 × 1,450 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Chiều dài cơ sở</span><span class="spec-value">3,125 mm</span></div>
                    <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">5</span></div>
                    <div class="spec-row"><span class="spec-name">Khoảng sáng gầm xe</span><span class="spec-value">144 mm (LS 500) / 147 mm (LS 500h)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích khoang hành lý</span><span class="spec-value">440 L</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích bình nhiên liệu</span><span class="spec-value">82 L</span></div>
                    <div class="spec-row"><span class="spec-name">Bán kính quay vòng tối thiểu</span><span class="spec-value">5.7 m</span></div>
                </div>
            </div>

            <!-- CARD 2: Động Cơ — LS 500 -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge"></i> Động Cơ — LS 500</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">V6, D4-S, Twin Turbo</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">3,445 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất cực đại</span><span class="spec-value">415 Hp / 6,000 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">599 Nm / 1,600–4,800 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">10AT</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span class="spec-value">EURO 5</span></div>
                    <div class="spec-row"><span class="spec-name">Tự động ngắt động cơ</span><span class="spec-value">Có</span></div>
                </div>
            </div>

            <!-- CARD 3: Động Cơ — LS 500h -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-lightning-charge-fill"></i> Động Cơ — LS 500h</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">V6, D4-S (Hybrid)</span></div>
                    <div class="spec-row"><span class="spec-name">Dung tích</span><span class="spec-value">3,456 cm³</span></div>
                    <div class="spec-row"><span class="spec-name">Công suất động cơ xăng</span><span class="spec-value">295 Hp / 5,800 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Mô-men xoắn cực đại</span><span class="spec-value">350 Nm / 5,100 RPM</span></div>
                    <div class="spec-row"><span class="spec-name">Tổng công suất hệ thống</span><span class="spec-value"><strong>354 Hp</strong></span></div>
                    <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">Multi Stage Hybrid</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span class="spec-value">EURO 5</span></div>
                </div>
            </div>

            <!-- CARD 4: Vận Hành & Tiêu Thụ Nhiên Liệu -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-fuel-pump"></i> Vận Hành & Tiêu Thụ Nhiên Liệu</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống truyền động</span><span class="spec-value">RWD</span></div>
                    <div class="spec-row"><span class="spec-name">Chế độ lái</span><span class="spec-value">Eco / Normal / Comfort / Sport / Sport+ / Customize</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL ngoài đô thị</span><span class="spec-value">7.8 (LS 500) / 7.84 (LS 500h) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL trong đô thị</span><span class="spec-value">16.66 (LS 500) / 3.52 (LS 500h) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Tiêu thụ NL kết hợp</span><span class="spec-value">11.07 (LS 500) / 6.24 (LS 500h) L/100km</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng không tải</span><span class="spec-value">2,235–2,290 kg (LS 500) / 2,295 kg (LS 500h)</span></div>
                    <div class="spec-row"><span class="spec-name">Trọng lượng toàn tải</span><span class="spec-value">2,670 kg (LS 500) / 2,725 kg (LS 500h)</span></div>
                </div>
            </div>

            <!-- CARD 5: Khung Gầm & Treo -->
            <div class="specs-card">
                <div class="specs-card-header">
                    <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Treo</h4>
                </div>
                <div class="specs-card-body">
                    <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span class="spec-value">Khí nén</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span class="spec-value">Khí nén</span></div>
                    <div class="spec-row"><span class="spec-name">Treo thích ứng (AVS)</span><span class="spec-value">Có</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh trước</span><span class="spec-value">Đĩa thông gió</span></div>
                    <div class="spec-row"><span class="spec-name">Phanh sau</span><span class="spec-value">Đĩa thông gió</span></div>
                    <div class="spec-row"><span class="spec-name">Hệ thống lái</span><span class="spec-value">Trợ lực điện</span></div>
                    <div class="spec-row"><span class="spec-name">Mâm xe & Lốp xe</span><span class="spec-value">245/45R20 — Run flat</span></div>
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
                name: 'Sonic White Pearl',
                images: [
                    '{{ asset('web/assets/images/ls/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-trang.jpg') }}'
                ]
            },
            black: {
                name: 'Caviar Black',
                images: [
                    '{{ asset('web/assets/images/lexus-ls500h-thong-so-tong-quan-1.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-den.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-den.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-den.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-den.jpg') }}'
                ]
            },
            silver: {
                name: 'Sonic Titanium',
                images: [
                    '{{ asset('web/assets/images/ls/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xam.jpg') }}'
                ]
            },
            red: {
                name: 'Passion Red Mica',
                images: [
                    '{{ asset('web/assets/images/ls/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-do.jpg') }}'
                ]
            },
            blue: {
                name: 'Structural Blue',
                images: [
                    '{{ asset('web/assets/images/ls/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-xanh.jpg') }}'
                ]
            },
            brown: {
                name: 'Terracotta Brown',
                images: [
                    '{{ asset('web/assets/images/ls/mau-nau.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-nau.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-nau.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-nau.jpg') }}',
                    '{{ asset('web/assets/images/ls/mau-nau.jpg') }}'
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

        /* ===================== COLOUR TABS ===================== */
        function switchColour(btn, paneId) {
            document.querySelectorAll('.colour-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.colour-pane').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(paneId).classList.add('active');
        }

        /* ===================== ITEM CARDS ===================== */
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
