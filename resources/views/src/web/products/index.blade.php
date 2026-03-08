@extends('layouts.web.default')

@section('content')
    <!-- ==================== PRODUCT SECTION ==================== -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <!-- ========= LEFT: GALLERY ========= -->
                <div class="col-lg-7">
                    <div class="product-gallery">
                        <div class="gallery-main-wrap">
                            <div class="gallery-badge">
                                <span>F SPORT</span>
                                <span class="new">Mới 2026</span>
                                <span class="hybrid">Hybrid</span>
                            </div>
                            <div class="gallery-actions">
                                <button class="gallery-action-btn" title="Yêu thích" onclick="toggleFavorite(this)">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <button class="gallery-action-btn" title="So sánh">
                                    <i class="bi bi-arrow-left-right"></i>
                                </button>
                                <button class="gallery-action-btn" title="Chia sẻ">
                                    <i class="bi bi-share"></i>
                                </button>
                            </div>
                            <div class="gallery-main">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=1000&q=85"
                                    alt="Lexus RX 500h" id="mainImage">
                            </div>
                            <button class="gallery-nav prev" onclick="changeImage(-1)"><i
                                    class="bi bi-chevron-left"></i></button>
                            <button class="gallery-nav next" onclick="changeImage(1)"><i
                                    class="bi bi-chevron-right"></i></button>
                            <div class="gallery-counter"><span id="currentIndex">1</span> / <span id="totalImages">5</span>
                            </div>
                        </div>

                        <div class="gallery-thumbs">
                            <div class="gallery-thumb active" onclick="setImage(0, this)">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=60"
                                    alt="Thumb 1">
                            </div>
                            <div class="gallery-thumb" onclick="setImage(1, this)">
                                <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=300&q=60"
                                    alt="Thumb 2">
                            </div>
                            <div class="gallery-thumb" onclick="setImage(2, this)">
                                <img src="https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?w=300&q=60"
                                    alt="Thumb 3">
                            </div>
                            <div class="gallery-thumb" onclick="setImage(3, this)">
                                <img src="https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=300&q=60"
                                    alt="Thumb 4">
                            </div>
                            <div class="gallery-thumb" onclick="setImage(4, this)">
                                <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=300&q=60"
                                    alt="Thumb 5">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========= RIGHT: PRODUCT INFO ========= -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge">
                            <i class="bi bi-lightning-charge-fill"></i>
                            Hybrid Performance
                        </div>

                        <h1 class="product-title">Lexus RX 500h</h1>
                        <p class="product-subtitle">F SPORT PERFORMANCE
                            2.4L-T HEV DIRECT4</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.8</strong>
                                (124 đánh giá)</span>
                        </div>

                        <!-- Price Box -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm
                                        yết</div>
                                    <div class="price-value">4.310.000.000<span>
                                            VNĐ</span></div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">
                                    Trả góp từ <strong>~45
                                        triệu/tháng</strong> với lãi suất ưu
                                    đãi
                                </div>
                            </div>
                        </div>

                        <!-- Color Selector -->
                        <div class="option-group">
                            <div class="option-label">
                                <span><i class="bi bi-palette me-2"></i>Màu
                                    ngoại thất</span>
                                <span class="selected-value" id="selectedColor">Caviar Black</span>
                            </div>
                            <div class="color-options">
                                <div class="color-option" style="--color: #F5F5F5" data-color="white"
                                    data-name="Sonic White" onclick="selectColor(this)"></div>
                                <div class="color-option active" style="--color: #1A1A1A" data-color="black"
                                    data-name="Caviar Black" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color: #C0C0C0" data-color="silver"
                                    data-name="Sonic Titanium" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color: #8B0000" data-color="red"
                                    data-name="Matador Red Mica" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color: #2F4F4F" data-color="green"
                                    data-name="Nori Green Pearl" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color: #B87333" data-color="copper"
                                    data-name="Copper Crest" onclick="selectColor(this)"></div>
                                <div class="color-option" style="--color: #191970" data-color="blue"
                                    data-name="Deep Blue Mica" onclick="selectColor(this)"></div>
                            </div>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label">
                                <span><i class="bi bi-gear me-2"></i>Phiên
                                    bản</span>
                            </div>
                            <div class="version-options">
                                <div class="version-option" onclick="selectVersion(this, '3.850.000.000')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">RX 350h
                                            Premium</div>
                                    </div>
                                    <div class="vo-price">3.850.000.000đ</div>
                                </div>
                                <div class="version-option active" onclick="selectVersion(this, '4.310.000.000')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">RX 500h F SPORT
                                            PERFORMANCE</div>
                                    </div>
                                    <div class="vo-price">4.310.000.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Specs -->
                        <div class="quick-specs">
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                <div class="qs-value">371</div>
                                <div class="qs-label">Mã lực</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                <div class="qs-value">5.9s</div>
                                <div class="qs-label">0-100 km/h</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                <div class="qs-value">8.1L</div>
                                <div class="qs-label">/ 100km</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                <div class="qs-value">AWD</div>
                                <div class="qs-label">DIRECT4</div>
                            </div>
                        </div>

                        <!-- Inquiry Form -->
                        <div class="inquiry-box">
                            <div class="inquiry-header">
                                <h3><i class="bi bi-envelope-paper me-2"></i>Đăng
                                    Ký Tư Vấn</h3>
                                <p>Để lại thông tin, chúng tôi sẽ liên hệ
                                    trong 30 phút</p>
                            </div>

                            <form class="inquiry-form" id="inquiryForm" onsubmit="submitInquiry(event)">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Họ và tên
                                            *</label>
                                        <input type="text" class="form-control" placeholder="Nguyễn Văn A" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Số điện
                                            thoại *</label>
                                        <input type="tel" class="form-control" placeholder="0912 345 678" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ghi
                                        chú</label>
                                    <textarea class="form-control" placeholder="Tôi muốn tư vấn về..."></textarea>
                                </div>
                                <button type="submit" class="btn-submit-inquiry" id="submitBtn">
                                    <i class="bi bi-send-fill"></i> Gửi Yêu
                                    Cầu Tư Vấn
                                </button>
                            </form>

                            <div class="inquiry-divider">
                                <span>Hoặc</span>
                            </div>

                            <div class="action-buttons">
                                <a href="#" class="btn-action primary">
                                    <i class="bi bi-calendar-check"></i> Đặt
                                    Lịch Lái Thử
                                </a>
                                <!-- <a href="#" class="btn-action secondary">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                            Tải Brochure PDF
                                        </a> -->
                                <a href="tel:19001234" class="btn-action hotline">
                                    <i class="bi bi-telephone"></i>
                                    <span>Hotline: </span>
                                    <span class="hotline-number">1900 1234
                                        56</span>
                                </a>
                            </div>
                        </div>

                        <!-- Dealer Info -->
                        <div class="dealer-info">
                            <div class="dealer-avatar">
                                <i class="bi bi-building"></i>
                            </div>
                            <div class="dealer-content">
                                <div class="dealer-name">Lexus Thăng
                                    Long</div>
                                <div class="dealer-location">
                                    <i class="bi bi-geo-alt"></i> 68 Trần
                                    Duy Hưng, Cầu Giấy, Hà Nội
                                </div>
                                <div class="dealer-status">
                                    Đang mở cửa • Đóng cửa lúc 19:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== GALLERY SECTION ==================== -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div class="section-title center text-center">Thư Viện Hình
                Ảnh</div>
            <p class="text-center mb-5" style="color:var(--lexus-text-muted);">Khám phá vẻ đẹp của
                Lexus RX 500h F SPORT
                PERFORMANCE</p>

            <div class="gallery-main-wrap">
                <div class="gallery-main">
                    <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1400&q=85"
                        alt="Lexus RX 500h" id="mainGalleryImg">
                </div>
                <button class="gallery-nav prev" onclick="changeGallery(-1)"><i class="bi bi-chevron-left"></i></button>
                <button class="gallery-nav next" onclick="changeGallery(1)"><i class="bi bi-chevron-right"></i></button>
                <div class="gallery-counter"><span id="galleryCounter">1</span> / 5</div>
            </div>

            <div class="gallery-thumbs">
                <div class="gallery-thumb active" onclick="setGallery(0, this)">
                    <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=400&q=70" alt="Thumb 1">
                </div>
                <div class="gallery-thumb" onclick="setGallery(1, this)">
                    <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=400&q=70" alt="Thumb 2">
                </div>
                <div class="gallery-thumb" onclick="setGallery(2, this)">
                    <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=400&q=70" alt="Thumb 3">
                </div>
                <div class="gallery-thumb" onclick="setGallery(3, this)">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=400&q=70" alt="Thumb 4">
                </div>
                <div class="gallery-thumb" onclick="setGallery(4, this)">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=400&q=70" alt="Thumb 5">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FEATURE HOTSPOT SECTION ==================== -->
    <section class="hotspot-section">
        <div class="container">
            <div class="section-title">Dấu Ấn Trải Nghiệm Lái</div>
            <p style="color:var(--lexus-text-muted);max-width:700px;">Trang
                bị đặc biệt trên phiên bản F SPORT PERFORMANCE
                mang đến trải nghiệm lái thể thao đỉnh cao.</p>

            <div class="hotspot-container">
                <div class="hotspot-image-wrap">
                    <div class="hotspot-image">
                        <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&q=80"
                            alt="Lexus RX Front">
                        <!-- Hotspot points -->
                        <div class="hotspot-point" style="top:35%;left:20%;" onclick="showHotspot('A')" data-point="A">A
                        </div>
                        <div class="hotspot-point" style="top:28%;left:45%;" onclick="showHotspot('B')" data-point="B">B
                        </div>
                        <div class="hotspot-point" style="top:18%;left:55%;" onclick="showHotspot('C')" data-point="C">C
                        </div>
                        <div class="hotspot-point" style="top:40%;left:35%;" onclick="showHotspot('D')" data-point="D">D
                        </div>
                        <div class="hotspot-point" style="top:48%;left:38%;" onclick="showHotspot('E')" data-point="E">E
                        </div>
                        <div class="hotspot-point" style="top:65%;left:52%;" onclick="showHotspot('F')" data-point="F">F
                        </div>
                        <div class="hotspot-point" style="top:68%;left:28%;" onclick="showHotspot('G')" data-point="G">G
                        </div>
                        <div class="hotspot-point" style="top:15%;left:68%;" onclick="showHotspot('H')" data-point="H">H
                        </div>
                    </div>
                    <div class="hotspot-image">
                        <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=800&q=80"
                            alt="Lexus RX Rear">
                        <div class="hotspot-point" style="top:55%;left:60%;" onclick="showHotspot('I')" data-point="I">I
                        </div>
                    </div>
                </div>

                <div class="hotspot-info-panel" id="hotspotPanel">
                    <div class="hotspot-info-title">
                        <span class="point-label" id="hotspotLetter">A</span>
                        <span id="hotspotTitle">Lưới tản nhiệt không
                            viền</span>
                    </div>
                    <div class="hotspot-info-desc" id="hotspotDesc">
                        Lưới tản nhiệt thiết kế đặc biệt với họa tiết mắt
                        lưới tinh xảo, mang đến vẻ ngoài thể thao và khí
                        động học tối ưu cho phiên bản F SPORT PERFORMANCE.
                    </div>
                </div>

                <div class="feature-thumbnails">
                    <div class="feature-thumb" onclick="showHotspot('B')">
                        <div class="feature-thumb-img">
                            <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=300&q=70"
                                alt="F Sport Logo">
                        </div>
                        <div class="feature-thumb-label">
                            <strong>B_Logo F SPORT</strong><br>
                            Huy hiệu F SPORT đặc trưng
                        </div>
                    </div>
                    <div class="feature-thumb" onclick="showHotspot('G')">
                        <div class="feature-thumb-img">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=300&q=70"
                                alt="Wheels">
                        </div>
                        <div class="feature-thumb-label">
                            <strong>G_Lốp 235/50R21 101W</strong><br>
                            Mâm hợp kim 21x8J sơn đen bóng Matte Black
                        </div>
                    </div>
                    <div class="feature-thumb" onclick="showHotspot('D')">
                        <div class="feature-thumb-img">
                            <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                alt="Front Trim">
                        </div>
                        <div class="feature-thumb-label">
                            <strong>D_Viền cản trước</strong><br>
                            Sơn cùng màu thân xe
                        </div>
                    </div>
                    <div class="feature-thumb" onclick="showHotspot('I')">
                        <div class="feature-thumb-img">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=300&q=70"
                                alt="Rear Trim">
                        </div>
                        <div class="feature-thumb-label">
                            <strong>I_Viền cản sau</strong><br>
                            Sơn đen Piano Black cao cấp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== POWERTRAIN SECTION ==================== -->
    <section class="powertrain-section section-padding">
        <div class="container">
            <h2 class="section-title">Hệ Thống Hybrid Hiệu Năng Cao</h2>
            <p class="section-desc">Hệ thống Hybrid trên RX 500h F SPORT
                PERFORMANCE bao gồm động cơ xăng tăng áp 2.4L-T, động cơ
                điện phía trước, hộp số tự động 6 cấp, động cơ điện công
                suất cao phía sau và pin hybrid niken hiệu năng cao. Điều
                này giúp khai thác hiệu quả mô men xoắn của động cơ tăng áp
                và khả năng đáp ứng mô men nhanh nhạy của động cơ điện tạo
                cảm giác trực tiếp và liền mạch.</p>

            <div class="powertrain-grid">
                <div class="powertrain-image">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=900&q=80"
                        alt="Động cơ Hybrid">
                    <div class="powertrain-badge">2.4L Turbo HEV</div>
                </div>
                <div class="powertrain-content">
                    <h3><i class="bi bi-lightning-charge-fill me-2"></i>Công
                        nghệ DIRECT4</h3>
                    <p>Công nghệ mới DIRECT4 được liên kết với hệ thống HEV
                        đưa trải nghiệm lái lên một tầm cao mới. Hệ thống
                        này kiểm soát dẫn động 4 bánh chính xác, giúp tối đa
                        hoá lực bám đường từng bánh, đồng thời cung cấp khả
                        năng kiểm soát trạng thái thân xe.</p>

                    <div class="powertrain-specs">
                        <div class="pt-spec">
                            <div class="pt-spec-value">371 HP</div>
                            <div class="pt-spec-label">Công suất tổng
                                hợp</div>
                        </div>
                        <div class="pt-spec">
                            <div class="pt-spec-value">460 Nm</div>
                            <div class="pt-spec-label">Mô-men xoắn</div>
                        </div>
                        <div class="pt-spec">
                            <div class="pt-spec-value">5.9s</div>
                            <div class="pt-spec-label">0-100 km/h</div>
                        </div>
                        <div class="pt-spec">
                            <div class="pt-spec-value">8.1L</div>
                            <div class="pt-spec-label">Tiêu thụ/100km</div>
                        </div>
                    </div>

                    <div class="hybrid-components">
                        <h4>Thành phần hệ thống Hybrid</h4>
                        <div class="hc-list">
                            <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ
                                xăng tăng áp 2.4L-T</div>
                            <div class="hc-item"><i class="bi bi-lightning-charge"></i> Động
                                cơ điện phía trước</div>
                            <div class="hc-item"><i class="bi bi-box"></i>
                                Hộp số tự động 6 cấp</div>
                            <div class="hc-item"><i class="bi bi-lightning-charge"></i> Động
                                cơ điện công suất cao phía sau</div>
                            <div class="hc-item"><i class="bi bi-battery-charging"></i> Pin
                                hybrid Ni-MH hiệu năng cao</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== CHASSIS SECTION ==================== -->
    <section class="chassis-section">
        <div class="container">
            <div class="section-title">Khung Gầm & Hệ Thống Treo</div>
            <p style="color:var(--lexus-text-muted);max-width:700px;">Nền
                tảng GA-K với độ cứng cao cùng hệ thống treo
                thích ứng AVS mang đến trải nghiệm lái êm ái và chính
                xác.</p>

            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=600&q=80"
                            alt="Front Suspension">
                        <div class="chassis-img-label">
                            <i class="bi bi-gear-fill me-2" style="color:var(--lexus-gold);"></i>
                            Hệ thống treo phía trước MacPherson
                        </div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=600&q=80"
                            alt="Rear Suspension">
                        <div class="chassis-img-label">
                            <i class="bi bi-gear-fill me-2" style="color:var(--lexus-gold);"></i>
                            Hệ thống treo phía sau đa liên kết
                        </div>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1400&q=85"
                            alt="Chassis Diagram">
                    </div>
                    <div class="chassis-legend">
                        <div class="legend-item">
                            <span class="legend-color c1"></span>
                            Ma-tít đàn hồi cao
                        </div>
                        <div class="legend-item">
                            <span class="legend-color c2"></span>
                            Keo dán kết cấu
                        </div>
                        <div class="legend-item">
                            <span class="legend-color c3"></span>
                            Keo dán đàn hồi cao
                        </div>
                        <div class="legend-item">
                            <span class="legend-color c4"></span>
                            Hàn bước ngắn
                        </div>
                        <div class="legend-item">
                            <span class="legend-color c5"></span>
                            Hàn vít laser
                        </div>
                        <div class="legend-item">
                            <span class="legend-color c6"></span>
                            Gia tăng độ cứng vững
                        </div>
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title">
                            <i class="bi bi-shield-check"></i>
                            Thân xe độ cứng cao
                        </h4>
                        <p class="chassis-info-desc">
                            Phần phía sau của khung gầm GA-K được thiết kế
                            đặc
                            biệt để phù hợp với hệ thống treo liên kết đa
                            điểm. Khung thân sau cung cấp cơ độ chịu xoắn
                            cao hỗ
                            trợ chắc chắn hệ thống treo trong quá trình
                            tăng tốc, giảm tốc và vào cua. Bọt xốp độ cứng
                            cao
                            được bổ trí tối ưu xung quanh cửa hậu giúp gia
                            cố
                            hiệu quả đồng thời tạo nên thân xe nhẹ với độ
                            cứng
                            cao.
                        </p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title">
                            <i class="bi bi-speedometer2"></i>
                            Hệ thống treo/giảm xóc
                        </h4>
                        <p class="chassis-info-desc">
                            Hệ thống treo trước MacPherson và hệ thống treo
                            sau
                            liên kết đa điểm truyền lực dẫn động xuống mặt
                            đường một cách hiệu quả, đồng thời mang đến khả
                            năng
                            thay đổi liên mạch tư thế thân xe. Hệ thống
                            treo thích ứng AVS điện tử tuyến tính điều chỉnh
                            xuất sắc phản ứng lực giảm chấn, nhờ đó làm sắc
                            nét
                            hơn hiệu suất lái và đạt được mức độ êm ái ấn
                            tượng.
                        </p>
                    </div>
                </div>
            </div>

            <div class="chassis-info-grid">
                <div class="chassis-info-box">
                    <h4 class="chassis-info-title">
                        <i class="bi bi-speedometer2"></i>
                        Hệ thống treo/giảm xóc
                    </h4>
                    <p class="chassis-info-desc">
                        Hệ thống treo trước MacPherson và hệ thống treo sau
                        liên kết đa điểm truyền lực dẫn động xuống mặt
                        đường một cách hiệu quả, đồng thời mang đến khả năng
                        thay đổi liên mạch tư thế thân xe. Hệ thống
                        treo thích ứng AVS điện tử tuyến tính điều chỉnh
                        xuất sắc phản ứng lực giảm chấn, nhờ đó làm sắc nét
                        hơn hiệu suất lái và đạt được mức độ êm ái ấn tượng.
                    </p>
                </div>
                <div class="chassis-info-box">
                    <h4 class="chassis-info-title">
                        <i class="bi bi-shield-check"></i>
                        Thân xe độ cứng cao
                    </h4>
                    <p class="chassis-info-desc">
                        Phần phía sau của khung gầm GA-K được thiết kế đặc
                        biệt để phù hợp với hệ thống treo liên kết đa
                        điểm. Khung thân sau cung cấp cơ độ chịu xoắn cao hỗ
                        trợ chắc chắn hệ thống treo trong quá trình
                        tăng tốc, giảm tốc và vào cua. Bọt xốp độ cứng cao
                        được bổ trí tối ưu xung quanh cửa hậu giúp gia cố
                        hiệu quả đồng thời tạo nên thân xe nhẹ với độ cứng
                        cao.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== F SPORT EQUIPMENT SECTION ==================== -->
    <section class="equipment-section section-padding">
        <div class="container">
            <h2 class="section-title">Trang Bị F SPORT PERFORMANCE</h2>
            <p class="section-desc">Phiên bản F SPORT PERFORMANCE được trang
                bị những chi tiết độc quyền, tạo nên diện mạo thể thao và
                đẳng cấp riêng biệt.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this, 'exterior')">Ngoại
                    Thất</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this, 'interior')">Nội
                    Thất</button>
            </div>

            <!-- Exterior Equipment -->
            <div class="equipment-content active" id="exterior">
                <div class="equipment-grid">
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Lưới Tản Nhiệt Không Viền</h4>
                        <p class="ec-desc">Hoạ tiết mắt lưới F SPORT đặc
                            trưng, cùng lưới tản nhiệt bên, cốp khoang hành
                            lý & viền cụm đèn sau.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Logo F SPORT</h4>
                        <p class="ec-desc">Logo F SPORT độc quyền thể hiện
                            đẳng cấp phiên bản hiệu năng cao.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Ốp Gương Piano Black</h4>
                        <p class="ec-desc">Ốp gương chiếu hậu bên ngoài sơn
                            đen Piano Black sang trọng.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Viền Dưới Cản Trước</h4>
                        <p class="ec-desc">Viền dưới cản trước sơn cùng màu
                            thân xe, tạo sự liền mạch.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Viền Cạnh Bên Cản Trước</h4>
                        <p class="ec-desc">Viền cạnh bên cản trước sơn cùng
                            màu thân xe, thiết kế thể thao.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Sườn Xe Đồng Màu</h4>
                        <p class="ec-desc">Sườn xe sơn cùng màu thân xe, tạo
                            tổng thể hài hòa.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Mâm 21" Matte Black</h4>
                        <p class="ec-desc">Lốp 235/50R21 101W kết hợp mâm
                            hợp kim nhôm 21x8 sơn đen bóng Matte Black.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Viền Cửa Sổ Đen</h4>
                        <p class="ec-desc">Viền cửa sổ màu đen tạo điểm nhấn
                            thể thao.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">I</div>
                        <h4 class="ec-title">Cản Sau Thể Thao</h4>
                        <p class="ec-desc">Phần dưới cản sau sơn cùng màu
                            thân xe, viền cản sau sơn đen Piano Black.</p>
                    </div>
                </div>
            </div>

            <!-- Interior Equipment -->
            <div class="equipment-content" id="interior">
                <div class="equipment-grid">
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Vô Lăng Bọc Da Đục Lỗ</h4>
                        <p class="ec-desc">Vô lăng 3 chấu bọc da đục lỗ cao
                            cấp, tích hợp lẫy chuyển số bằng nhôm.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Cần Số Bọc Da</h4>
                        <p class="ec-desc">Cần số bọc da đục lỗ, mang lại
                            cảm giác cầm nắm chắc chắn và thể thao.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Màn Hình Tốc Độ TFT</h4>
                        <p class="ec-desc">Màn hình đồng hồ TFT full
                            digital, hiển thị thông tin rõ nét và hiện
                            đại.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Bàn Đạp Thể Thao Nhôm</h4>
                        <p class="ec-desc">Bàn đạp và bệ nghỉ chân thể thao
                            bằng nhôm, tạo cảm giác lái thể thao.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Chi Tiết Trang Trí Nhôm</h4>
                        <p class="ec-desc">Chi tiết trang trí bằng nhôm xước
                            cao cấp, tạo điểm nhấn sang trọng.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Ghế Thể Thao Bọc Da</h4>
                        <p class="ec-desc">Ghế thể thao bọc da cao cấp với
                            khả năng ôm giữ tuyệt vời khi vào cua.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Logo F SPORT Nội Thất</h4>
                        <p class="ec-desc">Logo F SPORT trang trí nội thất,
                            khẳng định phiên bản đặc biệt.</p>
                    </div>
                    <div class="equipment-card">
                        <span class="ec-badge">Độc quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Ốp Bệ Bước Chân Đen</h4>
                        <p class="ec-desc">Ốp bệ bước chân màu đen, bảo vệ
                            và tạo điểm nhấn thể thao.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TECHNOLOGY SECTION ==================== -->
    <section class="technology-section section-padding">
        <div class="container">
            <h2 class="section-title">Công Nghệ Tiên Phong</h2>
            <p class="section-desc">RX 500h F SPORT PERFORMANCE được trang
                bị hàng loạt công nghệ an toàn và tiện nghi tiên tiến nhất
                từ Lexus.</p>

            <!-- Advanced Safety -->
            <div class="tech-category">
                <h3 class="tech-category-title">
                    <i class="bi bi-shield-check"></i>
                    Công Nghệ An Toàn Chủ Động
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Điều Khiển Hành Trình Thích
                                Ứng</div>
                            <div class="ti-abbr">DRCC - Dynamic Radar Cruise
                                Control</div>
                            <div class="ti-desc">Hoạt động ở mọi dải tốc độ,
                                tự động điều chỉnh khoảng cách với xe phía
                                trước.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Hỗ Trợ Theo Dõi Làn
                                Đường</div>
                            <div class="ti-abbr">LTA - Lane Tracing
                                Assist</div>
                            <div class="ti-desc">Hỗ trợ giữ xe đi đúng làn
                                đường, giảm mệt mỏi khi lái xe đường
                                dài.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Đèn Trước Tự Động Thích
                                Ứng</div>
                            <div class="ti-abbr">BladeScan AHS - Adaptive
                                High-beam System</div>
                            <div class="ti-desc">Công nghệ quét tốc độ cao,
                                tự động điều chỉnh vùng chiếu sáng.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Đèn Pha Tự Động</div>
                            <div class="ti-abbr">AHB - Automatic High
                                Beam</div>
                            <div class="ti-desc">Tự động chuyển đổi giữa đèn
                                pha và đèn cốt theo điều kiện giao
                                thông.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Cảnh Báo Điểm Mù</div>
                            <div class="ti-abbr">BSM - Blind Spot
                                Monitor</div>
                            <div class="ti-desc">Cảnh báo khi có phương tiện
                                trong vùng điểm mù khi chuyển làn.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Hỗ Trợ Ra Khỏi Xe An
                                Toàn</div>
                            <div class="ti-abbr">SEA - Safe Exit
                                Assist</div>
                            <div class="ti-desc">Tính năng kiểm soát mở cửa,
                                cảnh báo khi có phương tiện đến gần.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=300&q=70"
                                    alt="Front Trim">
                            </div>
                            <div class="ti-name">Phanh An Toàn Khi Đỗ</div>
                            <div class="ti-abbr">PKSB - Parking Support
                                Brake</div>
                            <div class="ti-desc">Tự động phanh khi phát hiện
                                vật cản trong quá trình đỗ xe.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Convenience Features -->
            <div class="tech-category">
                <h3 class="tech-category-title">
                    <i class="bi bi-stars"></i>
                    Tính Năng Tiện Nghi
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-sliders"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Hệ Thống Lựa Chọn Chế Độ
                                Lái</div>
                            <div class="ti-desc">Eco, Normal, Sport, Sport+,
                                Custom - tùy chỉnh trải nghiệm lái theo sở
                                thích.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-p-square"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Phanh Đỗ Điện Tử</div>
                            <div class="ti-abbr">EPB - Electronic Parking
                                Brake</div>
                            <div class="ti-desc">Phanh đỗ điện tử với tính
                                năng Auto Hold tiện lợi.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-arrows-fullscreen"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Chế Độ Tối Ưu Hoá Lực
                                Bám</div>
                            <div class="ti-desc">Tự động điều chỉnh lực kéo
                                giữa các bánh để tối đa hoá khả năng bám
                                đường.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-arrow-down-circle"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Hỗ Trợ Xuống Dốc</div>
                            <div class="ti-abbr">DAC - Downhill Assist
                                Control</div>
                            <div class="ti-desc">Kiểm soát tốc độ tự động
                                khi xuống dốc đứng.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-sun"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Cửa Sổ Trời Toàn Cảnh</div>
                            <div class="ti-desc">Cửa sổ trời panorama rộng
                                lớn, mang ánh sáng tự nhiên vào cabin.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-droplet"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Gạt Mưa Tích Hợp Vòi
                                Phun</div>
                            <div class="ti-desc">Gạt mưa tự động với vòi
                                phun nước rửa kính tích hợp.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-door-closed"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Mở Cửa Nút Chốt Điện
                                Tử</div>
                            <div class="ti-abbr">e-latch</div>
                            <div class="ti-desc">Hệ thống mở cửa kiểu nút
                                chốt điện tử hiện đại và tiện lợi.</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-icon"><i class="bi bi-box-arrow-in-down"></i></div>
                        <div class="ti-content">
                            <div class="ti-name">Mở Cửa Hậu Rảnh Tay</div>
                            <div class="ti-desc">Tính năng mở cửa hậu bằng
                                chân, tiện lợi khi tay đang bận.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SPECS SECTION ==================== -->
    <section class="specs-section section-padding">
        <div class="container">
            <h2 class="section-title">Thông Số Kỹ Thuật</h2>

            <div class="specs-grid">
                <!-- Engine Specs -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-lightning-charge"></i> Động Cơ &
                            Hiệu Năng</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row">
                            <span class="spec-name">Loại động cơ</span>
                            <span class="spec-value">2.4L Turbo Hybrid
                                (2.4L-T HEV)</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Công suất tổng
                                hợp</span>
                            <span class="spec-value">371 HP</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Mô-men xoắn</span>
                            <span class="spec-value">460 Nm</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Hộp số</span>
                            <span class="spec-value">Tự động 6 cấp</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Hệ dẫn động</span>
                            <span class="spec-value">AWD DIRECT4</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Tăng tốc 0-100
                                km/h</span>
                            <span class="spec-value">5.9 giây</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Pin hybrid</span>
                            <span class="spec-value">Bipolar Ni-MH hiệu năng
                                cao</span>
                        </div>
                    </div>
                </div>

                <!-- Dimensions -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-rulers"></i> Kích Thước</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row">
                            <span class="spec-name">Dài x Rộng x Cao</span>
                            <span class="spec-value">4,890 x 1,920 x 1,695
                                mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Chiều dài cơ sở</span>
                            <span class="spec-value">2,850 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Khoảng sáng gầm</span>
                            <span class="spec-value">200 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Dung tích khoang hành
                                lý</span>
                            <span class="spec-value">612 lít</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Dung tích bình nhiên
                                liệu</span>
                            <span class="spec-value">65 lít</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Số chỗ ngồi</span>
                            <span class="spec-value">5 người</span>
                        </div>
                    </div>
                </div>

                <!-- Chassis -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-gear-wide-connected"></i> Khung
                            Gầm & Lốp</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row">
                            <span class="spec-name">Hệ thống treo
                                trước</span>
                            <span class="spec-value">MacPherson</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Hệ thống treo sau</span>
                            <span class="spec-value">Multi-link</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Phanh trước/sau</span>
                            <span class="spec-value">Đĩa thông gió</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Kích thước lốp</span>
                            <span class="spec-value">235/50R21 101W</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Mâm hợp kim</span>
                            <span class="spec-value">21x8 Matte Black</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Phanh đỗ</span>
                            <span class="spec-value">EPB điện tử</span>
                        </div>
                    </div>
                </div>

                <!-- Fuel & Battery -->
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-fuel-pump"></i> Nhiên Liệu & Môi
                            Trường</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row">
                            <span class="spec-name">Tiêu thụ nhiên
                                liệu</span>
                            <span class="spec-value">8.1 L/100km</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Loại nhiên liệu</span>
                            <span class="spec-value">Xăng RON 95</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Động cơ điện
                                trước</span>
                            <span class="spec-value">Có</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Động cơ điện sau</span>
                            <span class="spec-value">Công suất cao</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Tiêu chuẩn khí
                                thải</span>
                            <span class="spec-value">Euro 6</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-name">Lượng CO2 thải ra</span>
                            <span class="spec-value">184 g/km</span>
                        </div>
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
                    <div class="nb-sub">Đăng ký nhận tin tức mới nhất từ
                        Lexus Vietnam</div>
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
        // ===================== GALLERY BY COLOR =====================
        const colorGalleries = {
            'white': {
                name: 'Sonic White',
                images: [
                    'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1000&q=85',
                    'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=1000&q=85',
                    'https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=1000&q=85',
                    'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=1000&q=85'
                ]
            },
            'black': {
                name: 'Caviar Black',
                images: [
                    'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=1000&q=85',
                    'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=1000&q=85',
                    'https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?w=1000&q=85',
                    'https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=1000&q=85'
                ]
            },
            'silver': {
                name: 'Sonic Titanium',
                images: [
                    'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?w=1000&q=85',
                    'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=1000&q=85',
                    'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1000&q=85',
                    'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?w=1000&q=85'
                ]
            },
            'red': {
                name: 'Matador Red Mica',
                images: [
                    'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=1000&q=85',
                    'https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?w=1000&q=85',
                    'https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=1000&q=85',
                    'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=1000&q=85',
                    'https://images.unsplash.com/photo-1526726538690-5cbf956ae2fd?w=1000&q=85'
                ]
            },
            'green': {
                name: 'Nori Green Pearl',
                images: [
                    'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=1000&q=85',
                    'https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?w=1000&q=85',
                    'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=1000&q=85',
                    'https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=1000&q=85'
                ]
            },
            'copper': {
                name: 'Copper Crest',
                images: [
                    'https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=1000&q=85',
                    'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=1000&q=85',
                    'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=1000&q=85',
                    'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1000&q=85'
                ]
            },
            'blue': {
                name: 'Deep Blue Mica',
                images: [
                    'https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=1000&q=85',
                    'https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?w=1000&q=85',
                    'https://images.unsplash.com/photo-1553440569-bcc63803a83d?w=1000&q=85',
                    'https://images.unsplash.com/photo-1619682817481-e994891cd1f5?w=1000&q=85',
                    'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?w=1000&q=85'
                ]
            }
        };

        let currentColor = 'black';
        let currentImageIndex = 0;

        function changeImage(direction) {
            const images = colorGalleries[currentColor].images;
            currentImageIndex += direction;
            if (currentImageIndex >= images.length) currentImageIndex = 0;
            if (currentImageIndex < 0) currentImageIndex = images.length - 1;
            updateGallery();
        }

        function setImage(index, thumb) {
            currentImageIndex = index;
            updateGallery();
        }

        function updateGallery() {
            const images = colorGalleries[currentColor].images;
            document.getElementById('mainImage').src = images[currentImageIndex];
            document.getElementById('currentIndex').textContent = currentImageIndex + 1;
            document.getElementById('totalImages').textContent = images.length;

            document.querySelectorAll('.gallery-thumb').forEach((t, i) => {
                t.classList.toggle('active', i === currentImageIndex);
                t.querySelector('img').src = images[i].replace('w=1000', 'w=300').replace('q=85', 'q=60');
            });
        }

        // ===================== COLOR SELECTOR =====================
        function selectColor(el) {
            document.querySelectorAll('.color-option').forEach(c => c.classList.remove('active'));
            el.classList.add('active');

            currentColor = el.dataset.color;
            currentImageIndex = 0;

            document.getElementById('selectedColor').textContent = colorGalleries[currentColor].name;
            updateGallery();
        }

        // ===================== VERSION SELECTOR =====================
        function selectVersion(el, price) {
            document.querySelectorAll('.version-option').forEach(v => v.classList.remove('active'));
            el.classList.add('active');
            document.querySelector('.price-value').innerHTML = price.replace(/\B(?=(\d{3})+(?!\d))/g, '.') +
                '<span> VNĐ</span>';
        }

        // ===================== FAVORITE =====================
        function toggleFavorite(btn) {
            const icon = btn.querySelector('i');
            if (icon.classList.contains('bi-heart')) {
                icon.classList.replace('bi-heart', 'bi-heart-fill');
                btn.style.background = 'var(--lexus-gold)';
                btn.style.color = 'var(--lexus-black)';
            } else {
                icon.classList.replace('bi-heart-fill', 'bi-heart');
                btn.style.background = '';
                btn.style.color = '';
            }
        }

        // ===================== EQUIPMENT TABS =====================
        function switchEquipmentTab(tab, contentId) {
            document.querySelectorAll('.equipment-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.equipment-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById(contentId).classList.add('active');
        }

        // ===================== INQUIRY FORM =====================
        function submitInquiry(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const originalText = btn.innerHTML;

            btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Đang gửi...';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Đã gửi thành công!';
                btn.style.background = 'var(--lexus-green)';

                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                    btn.disabled = false;
                    e.target.reset();
                }, 3000);
            }, 1500);
        }

        // ===================== NAVBAR SCROLL =====================
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const backToTop = document.getElementById('backToTop');

            navbar.classList.toggle('scrolled', window.scrollY > 100);
            backToTop.classList.toggle('show', window.scrollY > 400);
        });
    </script>
    <script>
        // ===================== GALLERY =====================
        const galleryImages = [
            'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1400&q=85',
            'https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=1400&q=85',
            'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=1400&q=85',
            'https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=1400&q=85',
            'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=1400&q=85'
        ];
        let currentGallery = 0;

        function setGallery(index, thumb) {
            currentGallery = index;
            document.getElementById('mainGalleryImg').src = galleryImages[index];
            document.getElementById('galleryCounter').textContent = index + 1;
            document.querySelectorAll('.gallery-thumb').forEach(t => t.classList.remove('active'));
            if (thumb) thumb.classList.add('active');
            else document.querySelectorAll('.gallery-thumb')[index].classList.add('active');
        }

        function changeGallery(dir) {
            currentGallery = (currentGallery + dir + galleryImages.length) % galleryImages.length;
            setGallery(currentGallery);
        }

        // ===================== HOTSPOT =====================
        const hotspotData = {
            'A': {
                title: 'Lưới tản nhiệt không viền',
                desc: 'Lưới tản nhiệt thiết kế đặc biệt với họa tiết mắt lưới tinh xảo, mang đến vẻ ngoài thể thao và khí động học tối ưu cho phiên bản F SPORT PERFORMANCE.'
            },
            'B': {
                title: 'Logo F SPORT',
                desc: 'Huy hiệu F SPORT độc quyền được đặt tại vị trí nổi bật, khẳng định đẳng cấp thể thao của phiên bản hiệu năng cao.'
            },
            'C': {
                title: 'Ốp gương chiếu hậu',
                desc: 'Ốp gương bên ngoài sơn đen Piano Black cao cấp, tạo điểm nhấn thể thao cho ngoại thất.'
            },
            'D': {
                title: 'Viền dưới cản trước',
                desc: 'Viền dưới cản trước sơn cùng màu thân xe, tạo nên sự liền mạch và thể thao.'
            },
            'E': {
                title: 'Viền cạnh bên cản trước',
                desc: 'Viền cạnh bên cản trước sơn cùng màu thân xe, hoàn thiện thiết kế F SPORT đặc trưng.'
            },
            'F': {
                title: 'Sườn xe',
                desc: 'Sườn xe sơn cùng màu thân xe với đường gân mạnh mẽ, tạo cảm giác chuyển động ngay cả khi đứng yên.'
            },
            'G': {
                title: 'Lốp 235/50R21 101W & Mâm 21 inch',
                desc: 'Mâm hợp kim nhôm 21x8J với thiết kế thể thao, sơn đen bóng Matte Black đặc trưng của F SPORT PERFORMANCE.'
            },
            'H': {
                title: 'Viền cửa sổ',
                desc: 'Viền cửa sổ màu đen tạo điểm nhấn thể thao cho ngoại thất.'
            },
            'I': {
                title: 'Phần dưới cản sau',
                desc: 'Viền cản sau sơn đen Piano Black cao cấp, kết hợp với ống xả kép thể thao.'
            }
        };

        function showHotspot(point) {
            const data = hotspotData[point];
            document.getElementById('hotspotLetter').textContent = point;
            document.getElementById('hotspotTitle').textContent = data.title;
            document.getElementById('hotspotDesc').textContent = data.desc;

            document.querySelectorAll('.hotspot-point').forEach(p => p.classList.remove('active'));
            document.querySelector(`.hotspot-point[data-point="${point}"]`)?.classList.add('active');

            document.getElementById('hotspotPanel').scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        }

        // ===================== SPECS TABS =====================
        function switchSpecsTab(tab, btn) {
            document.querySelectorAll('.specs-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.specs-content').forEach(c => c.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('specs-' + tab).classList.add('active');
        }

        // ===================== FORM SUBMIT =====================
        function handleFormSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Đang gửi...';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i> Đặt lịch thành công!';
                btn.style.background = 'var(--lexus-green)';
            }, 1500);
        }

        // ===================== NAVBAR SCROLL =====================
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const backToTop = document.getElementById('backToTop');

            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            if (window.scrollY > 400) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        // ===================== SCROLL REVEAL =====================
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-title, .spec-highlight, .feature-category, .powertrain-card, .chassis-img-card')
            .forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });
    </script>
@endpush
