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
                                <span>LM</span>
                                <span class="new">Thế hệ 2</span>
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
                                <img src="{{ asset('web/assets/images/lm/anh-main.jpg') }}"
                                    alt="Lexus LM 500h" id="mainImage">
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
                                    src="{{ asset('web/assets/images/lm/anh-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/lm/anh-2.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/lm/anh-3.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/lm/anh-4.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/lm/anh-5.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> Hybrid Performance — DIRECT4
                        </div>
                        <h1 class="product-title">Lexus LM</h1>
                        <p class="product-subtitle">2.4T-HEV DIRECT4 Pin nickel hydride kim loại lưỡng cực</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.9</strong> (183 đánh giá)</span>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option active"
                                    onclick="selectVersion(this,'8.950.000.000','LM 500h 4 chỗ',367,'6.8s','8.7L','DIRECT4')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LM 500h — 4 chỗ VIP</div>
                                    </div>
                                    <div class="vo-price">8.950.000.000đ</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'7.530.000.000','LM 500h 6 chỗ',367,'6.8s','8.7L','DIRECT4')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">LM 500h — 6 chỗ</div>
                                    </div>
                                    <div class="vo-price">7.530.000.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">8.950.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~85 triệu/tháng</strong> với lãi suất
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
                            </div>
                        </div>

                        <!-- Quick Specs -->
                        <div class="quick-specs">
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                <div class="qs-value" id="qs-hp"></div>
                                <div class="qs-label">Mã lực</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                <div class="qs-value" id="qs-acc">6.8s</div>
                                <div class="qs-label">0-100 km/h</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                <div class="qs-value" id="qs-fuel">8.7L</div>
                                <div class="qs-label">/ 100km</div>
                            </div>
                            <div class="qs-item">
                                <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                <div class="qs-value" id="qs-drive">AWD</div>
                                <div class="qs-label">DIRECT4</div>
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
                    <img src="{{ asset('web/assets/images/lm/intro.jpg') }}"
                        alt="Lexus LM thế hệ thứ 2 — MPV hạng sang đỉnh cao">
                    <div class="intro-year-badge">
                        <div class="iyb-year">2</div>
                        <div class="iyb-label">Thế hệ</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">Không Gian Tĩnh Lặng Đỉnh Cao</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Với yêu cầu về độ tỉ mỉ của LM thế hệ thứ hai, sự yên tĩnh chính là yếu tố được đề cao hàng đầu. Không gian nội thất mang đến cảm giác thư giãn, yên bình để nạp lại năng lượng.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">Thiết kế tối ưu, tạo điều kiện thích hợp giúp chủ nhân có thể điều hành các hoạt động kinh doanh ngay cả khi không ở văn phòng. Thiết kế nội thất độc đáo, yên tĩnh nhưng vẫn đảm bảo vận hành mạnh mẽ và tiết kiệm nhiên liệu nhờ động cơ 2,4L I4 Turbo Tăng áp. Lấy cảm hứng từ trải nghiệm trực quan đặt con người làm trung tâm, dấu ấn trải nghiệm lái Lexus – Lexus Driving Signature (LDS) mang tới trải nghiệm lái xe khác biệt và đầy thú vị. Chỉ tại Lexus, sự tỉ mỉ, chú ý đến từng chi tiết mới có thể tạo nên một không gian tinh tế như vậy.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">2</div>
                            <div class="ms-label">Thế hệ phát triển</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">2</div>
                            <div class="ms-label">Phiên bản chỗ ngồi</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">275</div>
                            <div class="ms-label">Mã lực tổng hợp</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">#1</div>
                            <div class="ms-label">MPV hạng sang VN</div>
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
            <h2 class="section-title">Bảng Màu Nội Thất & Ngoại Thất</h2>
            <p class="section-desc">Tạo nên chiếc LM mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, thiết kế bánh xe và chất liệu nội thất.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheels')">Thiết Kế Bánh Xe</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Nội Thất</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lm/mau-den.jpg') }}" alt="Màu đen">
                            </div>
                            <div class="ti-abbr">Đen</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lm/mau-trang.jpg') }}" alt="Màu trắng">
                            </div>
                            <div class="ti-abbr">Trắng</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lm/mau-xam.jpg') }}" alt="Màu xám">
                            </div>
                            <div class="ti-abbr">Bạc</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/lm/mau-do.jpg') }}" alt="Màu đỏ">
                            </div>
                            <div class="ti-abbr">Đỏ</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BÁNH XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus LM
                    cung cấp nhiều tùy chọn thiết kế bánh xe phù hợp với từng phiên bản và phong cách cá nhân.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/banh-xe-1.jpg') }}" alt="Bánh xe phiên bản 4 chỗ">
                        <div class="item-card-label">Bánh xe hợp kim nhôm 19 inch<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LM 500h 4 chỗ</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/banh-xe-2.jpg') }}" alt="Bánh xe phiên bản 6 chỗ">
                        <div class="item-card-label">Bánh xe hợp kim nhôm <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản LM 500h 6 chỗ</span></div>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Nội thất LM là sự hội tụ giữa không gian thoải mái của phòng khách và sự yên tĩnh tại văn phòng. Khách hàng có thể lựa chọn phiên bản bốn hoặc sáu chỗ tùy theo nhu cầu cá nhân.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/noi-that-1.jpg') }}" alt="Nội thất">
                        <div class="item-card-label">Nội thất<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Tổng quan cabin</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/noi-that-hang-sau.jpg') }}" alt="Nội thất hàng ghế sau">
                        <div class="item-card-label">Nội thất hàng ghế sau</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/noi-that-4-cho.jpg') }}" alt="Nội thất phiên bản 4 chỗ">
                        <div class="item-card-label">Phiên bản 4 chỗ<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Tập trung tiện ích hành khách VIP</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/lm/noi-that-6-cho.jpg') }}" alt="Nội thất phiên bản 6 chỗ">
                        <div class="item-card-label">Phiên bản 6 chỗ<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phục vụ doanh nghiệp & gia đình</span></div>
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
            <p class="section-desc">Lexus LM trang bị hệ dẫn động 2.4T-HEV DIRECT4 với pin nickel hydride kim loại lưỡng cực — kết hợp hoàn hảo giữa sức mạnh và tiết kiệm nhiên liệu.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-24t')">2.4T-HEV DIRECT4</button>
            </div>

            <!-- 2.4T-HEV DIRECT4 -->
            <div class="variant-pane active" id="vt-24t">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/lm/dong-co.jpg') }}" alt="Hệ dẫn động 2.4T-HEV DIRECT4">
                        <div class="powertrain-badge">2.4T-HEV DIRECT4</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động Cơ 2.4L I4 Turbo Tăng Áp</h3>
                        <p>Hệ dẫn động 2.4T-HEV DIRECT 4 bao gồm động cơ xăng tăng áp 4 xy lanh thẳng hàng dung tích 2,4L tích hợp bộ điều khiển công suất (PCU) và mô tơ điện 64 kW, ghép nối với hộp số tự động 6 cấp. Cầu sau được trang bị cụm dẫn động eAxle công suất 76 kW cung cấp sức kéo tức thời cho bánh sau.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">64 kW</div>
                                <div class="pt-spec-label">Mô tơ trước</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">76 kW</div>
                                <div class="pt-spec-label">eAxle sau</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">6.8s</div>
                                <div class="pt-spec-label">0-100 km/h</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">6 cấp</div>
                                <div class="pt-spec-label">Hộp số AT</div>
                            </div>
                        </div>
                        <div class="hybrid-components" style="margin-top:28px;">
                            <h4>Cấu hình hệ thống</h4>
                            <div class="hc-list">
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ xăng tăng áp 2.4L I4 Turbo</div>
                                <div class="hc-item"><i class="bi bi-lightning-charge"></i> Mô tơ điện 64 kW tích hợp PCU</div>
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số tự động 6 cấp</div>
                                <div class="hc-item"><i class="bi bi-battery-charging"></i> Pin nickel hydride kim loại lưỡng cực</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Cụm eAxle 76 kW dẫn động cầu sau</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Hệ dẫn động 4 bánh DIRECT 4 tiêu chuẩn điều phối lực truyền động giữa cầu trước và cầu sau chỉ trong một phần nghìn giây trong mọi tình huống, giúp nâng cao khả năng điều khiển và mang lại cảm giác thoải mái tối đa cho hành khách.</p>
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
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Cấu trúc khung gầm và thân xe của LM sử dụng hệ thống thanh giằng được gia cố, mang đến cảm giác lái thoải mái và an toàn hơn. Độ cứng tổng thể được cải thiện, giảm đáng kể chuyển động vặn xoắn, lắc dọc và lắc ngang.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lm/treo-truoc.jpg') }}"
                            alt="Hệ thống treo trước MacPherson Lexus LM">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo trước — MacPherson</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/lm/treo-sau.jpg') }}"
                            alt="Hệ thống treo sau tay đòn kép Lexus LM">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo sau — Tay đòn kép</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-wind"></i>Khung xe nhẹ</h4>
                        <p class="chassis-info-desc">LM thế hệ mới sử dụng các tấm ốp mỏng hơn, giúp giảm 12,3 kg trọng lượng xe. Cửa trượt bằng nhôm thiết kế mới dày 0,7 mm, giúp giảm thêm 18,5 kg nhưng vẫn đảm bảo an toàn.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/lm/khung-gam.jpg') }}"
                            alt="Cấu trúc khung gầm Lexus LM">
                    </div>
                    <div class="chassis-info-box mt-3">
                        <h4 class="chassis-info-title"><i class="bi bi-shield-check"></i>Cải tiến kết cấu hệ thống treo</h4>
                        <p class="chassis-info-desc">Kết cấu của hệ thống treo MacPherson phía trước và tay đòn kép phía sau được cải tiến để gia tăng khả năng hấp thụ lực tác động từ mặt đường.</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Hệ thống treo thích ứng (AVS)</h4>
                        <p class="chassis-info-desc">Hệ thống treo AVS giúp cải thiện độ ổn định để mang lại trải nghiệm lái xe thoải mái hơn. Bộ giảm chấn được trang bị cơ cấu van siêu nhạy theo tần số đầu tiên trên thế giới, giúp tăng hiệu quả giảm tiếng ồn và độ rung bên trong cabin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế LM Thế Hệ 2</h2>
            <p class="section-desc">Thay vì sử dụng thiết kế lưới tản nhiệt hình con suốt cổ điển, cấu trúc liền mạch thế hệ mới bắt đầu được áp dụng — tạo điểm nhấn cho Phong thái mạnh mẽ. Các tỷ lệ của LM vẫn được đảm bảo với kiểu dáng đẹp, rộng và tập trung vào tính thẩm mỹ tối ưu cho hàng ghế sau.</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lm/mat-truoc.jpg')}}"
                            alt="Góc chính diện phía trước Lexus LM">
                        <div class="design-caption">
                            <h4>Mặt trước — Cấu trúc liền mạch thế hệ mới</h4>
                            <p>Các kỹ sư đã tạo nên ngoại hình của LM với một góc nhìn mới mẻ. Thay vì lưới tản nhiệt hình con suốt cổ điển, cấu trúc liền mạch thế hệ mới tạo điểm nhấn Phong thái mạnh mẽ.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lm/mat-sau.jpg')}}"
                            alt="Góc chính diện phía sau Lexus LM">
                        <div class="design-caption">
                            <h4>Đuôi xe tinh tế — Thiết kế hướng đến hàng ghế sau</h4>
                            <p>Tỷ lệ của LM được đảm bảo với kiểu dáng đẹp, rộng và tập trung vào tính thẩm mỹ tối ưu, mang lại sự thoải mái và hiệu suất vượt trội cho hàng ghế sau.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lm/mat-ben.jpg')}}"
                            alt="Mặt bên xe Lexus LM">
                        <div class="design-caption">
                            <h4>Thân xe — Khí động học tối ưu</h4>
                            <p>Thiết kế khí động học được tối ưu hóa toàn diện, đảm bảo sự êm ái, sang trọng trong mọi hành trình.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Lưới tản nhiệt liền mạch</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Tỷ lệ xe rộng & thẩm mỹ</div>
                    <div class="feature-chip"><i class="bi bi-wind"></i> Khí động học tối ưu</div>
                    <div class="feature-chip"><i class="bi bi-circle"></i> Bánh xe hợp kim nhôm</div>
                    <div class="feature-chip"><i class="bi bi-arrow-down"></i> Trọng tâm thấp</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/lm/noi-that-cabin.jpg')}}"
                            alt="Nội thất Lexus LM — Phòng khách di động">
                        <div class="design-caption">
                            <h4>Phòng khách di động — Văn phòng riêng tư</h4>
                            <p>Nội thất LM là sự hội tụ giữa không gian thoải mái của phòng khách và sự yên tĩnh tại văn phòng. Đặc biệt, phía sau cabin là sự hòa quyện hoàn hảo giữa hai thế giới riêng biệt trong không gian rộng rãi, đầy đủ tiện nghi.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lm/noi-that-4cho.jpg')}}"
                            alt="Nội thất phiên bản 4 chỗ Lexus LM">
                        <div class="design-caption">
                            <h4>Phiên bản 4 chỗ — VIP Executive</h4>
                            <p>Tập trung vào các tiện ích của ghế hành khách, phù hợp chủ nhân có tài xế riêng. Thiết kế tối giản, ngăn nắp với tầm nhìn ngoại vi rộng.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/lm/noi-that-6cho.jpg')}}"
                            alt="Nội thất phiên bản 6 chỗ Lexus LM">
                        <div class="design-caption">
                            <h4>Phiên bản 6 chỗ — Gia đình & Doanh nghiệp</h4>
                            <p>Hướng đến phục vụ nhu cầu di chuyển của doanh nghiệp và hộ gia đình với công nghệ tiên tiến phục vụ con người, đảm bảo sự thoải mái tối ưu nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> Màn hình giải trí hàng ghế sau</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà đa vùng độc lập</div>
                    <div class="feature-chip"><i class="bi bi-door-open"></i> Cửa trượt điện</div>
                    <div class="feature-chip"><i class="bi bi-person"></i> Ghế chỉnh điện đa hướng</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh cao cấp</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CÔNG NGHỆ ==================== -->
    <section class="technology-section section-padding" id="technology">
        <div class="container">
            <div class="section-tag">An toàn & tiện nghi</div>
            <h2 class="section-title">Công Nghệ Tiên Phong</h2>
            <p class="section-desc">LM được trang bị hàng loạt công nghệ an toàn chủ động tiên tiến nhất từ Lexus Safety System+.</p>

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
                                    <img src="{{ asset('web/assets/images/lm/pcs.jpg') }}" alt="PCS">
                                </div>
                                <div class="ti-name">Hệ Thống Cảnh Báo Tiền Va Chạm</div>
                                <div class="ti-abbr">PCS — Pre-Collision System</div>
                                <div class="ti-desc">Phát hiện phương tiện và người đi bộ phía trước, tự động phanh khẩn cấp để ngăn ngừa hoặc giảm thiểu va chạm.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/drcc.jpg') }}" alt="DRCC">
                                </div>
                                <div class="ti-name">Điều Khiển Hành Trình Thích Ứng</div>
                                <div class="ti-abbr">DRCC — Dynamic Radar Cruise Control</div>
                                <div class="ti-desc">Tự động duy trì khoảng cách an toàn với xe phía trước ở mọi dải tốc độ, kể cả dừng hẳn trong kẹt xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/lda.jpg') }}" alt="LDA">
                                </div>
                                <div class="ti-name">Cảnh Báo Lệch Làn Đường</div>
                                <div class="ti-abbr">LDA — Lane Departure Alert</div>
                                <div class="ti-desc">Cảnh báo người lái khi xe có xu hướng lệch ra ngoài làn đường, giảm nguy cơ tai nạn trên đường dài.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/lta.jpg') }}" alt="LTA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Theo Dõi Làn Đường</div>
                                <div class="ti-abbr">LTA — Lane Tracing Assist</div>
                                <div class="ti-desc">Hỗ trợ giữ xe đi đúng giữa làn đường, giảm mệt mỏi khi lái đường dài trên cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/ahs.jpg') }}" alt="AHS">
                                </div>
                                <div class="ti-name">Đèn Pha Thích Ứng</div>
                                <div class="ti-abbr">AHS — Adaptive High-beam System</div>
                                <div class="ti-desc">Tự động điều chỉnh vùng chiếu sáng, tránh chói mắt xe đối diện trong khi chiếu sáng tối đa vùng ngoài.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/sea.jpg') }}" alt="SEA">
                                </div>
                                <div class="ti-name">Hỗ Trợ Ra Khỏi Xe An Toàn</div>
                                <div class="ti-abbr">SEA — Safe Exit Assist</div>
                                <div class="ti-desc">Cảnh báo và kiểm soát cửa xe khi phát hiện phương tiện đang đến gần từ phía sau.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/bsm.jpg') }}" alt="BSM">
                                </div>
                                <div class="ti-name">Cảnh Báo Điểm Mù</div>
                                <div class="ti-abbr">BSM — Blind Spot Monitor</div>
                                <div class="ti-desc">Cảnh báo bằng ánh sáng và âm thanh khi có phương tiện trong vùng điểm mù khi chuyển làn đường.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/lm/teammate.jpg') }}" alt="Lexus Teammate">
                                </div>
                                <div class="ti-name">Hỗ Trợ Đỗ Xe Thông Minh</div>
                                <div class="ti-abbr">Lexus Teammate — Advanced Parking</div>
                                <div class="ti-desc">Tính năng hỗ trợ đỗ xe thông minh Lexus Teammate giúp điều khiển xe ra vào chỗ đỗ một cách dễ dàng, chính xác.</div>
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
                    <div class="conv-item"><i class="bi bi-door-closed"></i> Hệ thống chốt điện tử e-Latch có cơ cấu hỗ trợ đóng cửa</div>
                    <div class="conv-item"><i class="bi bi-camera-video"></i> Gương chiếu hậu kỹ thuật số</div>
                    <div class="conv-item"><i class="bi bi-box-arrow-in-down"></i> Hệ thống cửa hít</div>
                    <div class="conv-item"><i class="bi bi-p-square"></i> Phanh đỗ điện tử EPB + Auto Hold</div>
                    <div class="conv-item"><i class="bi bi-arrows-fullscreen"></i> Lexus Driving Signature (LDS)</div>
                    <div class="conv-item"><i class="bi bi-broadcast-pin"></i> Hệ thống âm thanh cao cấp</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THÔNG SỐ KỸ THUẬT ==================== -->
    <section class="specs-section section-padding" id="specs">
        <div class="container">
            <div class="section-tag">Dữ liệu kỹ thuật</div>
            <h2 class="section-title">Thông Số Kỹ Thuật</h2>
            <div class="specs-grid">
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-lightning-charge"></i> Động Cơ & Hiệu Năng</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">2.4L I4 Turbo HEV DIRECT4</span></div>
                        <div class="spec-row"><span class="spec-name">Mô tơ điện trước</span><span class="spec-value">64 kW</span></div>
                        <div class="spec-row"><span class="spec-name">cụm eAxle cầu sau</span><span class="spec-value">76 kW</span></div>
                        <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">Tự động 6 cấp</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ dẫn động</span><span class="spec-value">AWD DIRECT4</span></div>
                        <div class="spec-row"><span class="spec-name">Tăng tốc 0-100 km/h</span><span class="spec-value">6.8 giây</span></div>
                        <div class="spec-row"><span class="spec-name">Pin hybrid</span><span class="spec-value">Nickel hydride kim loại lưỡng cực</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-rulers"></i> Kích Thước & Không Gian</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Kích thước xe</span><span class="spec-value">Xem hình kích thước</span></div>
                        <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">4 hoặc 6 người</span></div>
                        <div class="spec-row"><span class="spec-name">Phiên bản 4 chỗ</span><span class="spec-value">VIP Executive</span></div>
                        <div class="spec-row"><span class="spec-name">Phiên bản 6 chỗ</span><span class="spec-value">Doanh nghiệp & Gia đình</span></div>
                        <div class="spec-row"><span class="spec-name">Cửa trượt</span><span class="spec-value">Nhôm 0.7mm — nhẹ hơn 18.5 kg</span></div>
                        <div class="spec-row"><span class="spec-name">Giảm trọng lượng tổng</span><span class="spec-value">-12.3 kg (tấm ốp mỏng hơn)</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Treo</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span class="spec-value">MacPherson cải tiến</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span class="spec-value">Tay đòn kép cải tiến</span></div>
                        <div class="spec-row"><span class="spec-name">Treo thích ứng</span><span class="spec-value">AVS — van siêu nhạy theo tần số</span></div>
                        <div class="spec-row"><span class="spec-name">Vật liệu treo</span><span class="spec-value">Nhôm — giảm khối lượng</span></div>
                        <div class="spec-row"><span class="spec-name">Phanh trước / sau</span><span class="spec-value">Đĩa thông gió</span></div>
                        <div class="spec-row"><span class="spec-name">Thanh giằng</span><span class="spec-value">Gia cố — tăng độ cứng tổng thể</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-fuel-pump"></i> Nhiên Liệu & Môi Trường</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Loại nhiên liệu</span><span class="spec-value">Xăng RON 95 + Hybrid</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ thống hybrid</span><span class="spec-value">2.4T-HEV DIRECT4</span></div>
                        <div class="spec-row"><span class="spec-name">Động cơ điện trước</span><span class="spec-value">Có — 64 kW</span></div>
                        <div class="spec-row"><span class="spec-name">Động cơ điện sau</span><span class="spec-value">Có — eAxle 76 kW</span></div>
                        <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span class="spec-value">Euro 6</span></div>
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
                images: ['{{ asset('web/assets/images/lm/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-trang.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-trang.jpg') }}'
                ]
            },
            black: {
                name: 'Màu đen',
                images: ['{{ asset('web/assets/images/lm/mau-den.jpg') }}',
                    '{{ asset('web/assets/images/lm/anh-1.jpg') }}',
                    '{{ asset('web/assets/images/lm/anh-2.jpg') }}',
                    '{{ asset('web/assets/images/lm/anh-3.jpg') }}',
                    '{{ asset('web/assets/images/lm/anh-4.jpg') }}'
                ]
            },
            silver: {
                name: 'Màu xám',
                images: ['{{ asset('web/assets/images/lm/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xam.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xam.jpg') }}'
                ]
            },
            red: {
                name: 'Màu đỏ',
                images: ['{{ asset('web/assets/images/lm/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-do.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-do.jpg') }}'
                ]
            },
            green: {
                name: 'Màu xanh',
                images: ['{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}'
                ]
            },
            blue: {
                name: 'Màu xanh dương',
                images: ['{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}',
                    '{{ asset('web/assets/images/lm/mau-xanh.jpg') }}'
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
