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
                                <span class="new">Thế hệ 5</span>
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
                                <img src="{{ asset('web/assets/images/rx/lexus-rx-black-line-edition.jpg') }}"
                                    alt="Lexus RX 500h F SPORT PERFORMANCE" id="mainImage">
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
                                    src="{{ asset('web/assets/images/rx/anh-1.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(1,this)"><img
                                    src="{{ asset('web/assets/images/rx/anh-2.webp') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(2,this)"><img
                                    src="{{ asset('web/assets/images/rx/anh-4.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(3,this)"><img
                                    src="{{ asset('web/assets/images/rx/anh-3.jpg') }}" alt=""></div>
                            <div class="gallery-thumb" onclick="setImage(4,this)"><img
                                    src="{{ asset('web/assets/images/rx/anh-5.webp') }}" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="col-lg-5">
                    <div class="product-info">
                        <div class="product-badge"><i class="bi bi-lightning-charge-fill"></i> Hybrid Performance — DIRECT4
                        </div>
                        <h1 class="product-title">Lexus RX</h1>
                        <p class="product-subtitle">F SPORT PERFORMANCE 2.4L-T HEV DIRECT4</p>

                        <div class="product-rating">
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-text"><strong>4.8</strong> (247 đánh giá)</span>
                        </div>

                        <!-- Version Selector -->
                        <div class="option-group">
                            <div class="option-label"><span><i class="bi bi-gear me-2"></i>Phiên bản</span></div>
                            <div class="version-options">
                                <div class="version-option"
                                    onclick="selectVersion(this,'3.350.000.000','RX 350H Premium',187.7,'7.9s','9.8L','AWD')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">RX 350H Premium</div>
                                    </div>
                                    <div class="vo-price">3.350.000.000đ</div>
                                </div>
                                <div class="version-option"
                                    onclick="selectVersion(this,'4.140.000.000','RX 350h Luxury',187.7,'7.9s','6.0L','E-Four')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">RX 350h Luxury</div>
                                    </div>
                                    <div class="vo-price">4.140.000.000đ</div>
                                </div>
                                <div class="version-option active"
                                    onclick="selectVersion(this,'4.490.000.000','RX 500h F SPORT',371,'6,2s','8.1L','DIRECT4')">
                                    <div class="vo-info">
                                        <div class="vo-radio"></div>
                                        <div class="vo-name">RX 500h — F SPORT PERFORMANCE</div>
                                    </div>
                                    <div class="vo-price">4.490.000.000đ</div>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="price-box">
                            <div class="price-row">
                                <div>
                                    <div class="price-label">Giá niêm yết</div>
                                    <div class="price-value" id="priceDisplay">4.490.000.000<span> VNĐ</span></div>
                                </div>
                            </div>
                            <div class="quick-specs" style="margin:16px 0 0;padding:12px 0 0;background:none;border:none;border-top:1px solid var(--lexus-gray);border-radius:0;">
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-lightning-charge"></i></div>
                                    <div class="qs-value" id="qs-hp">371</div>
                                    <div class="qs-label">Mã lực</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-speedometer2"></i></div>
                                    <div class="qs-value" id="qs-acc">6,2s</div>
                                    <div class="qs-label">0-100 km/h</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-fuel-pump"></i></div>
                                    <div class="qs-value" id="qs-fuel">8.1L</div>
                                    <div class="qs-label">/ 100km</div>
                                </div>
                                <div class="qs-item">
                                    <div class="qs-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <div class="qs-value" id="qs-drive">DIRECT4</div>
                                    <div class="qs-label">DIRECT4</div>
                                </div>
                            </div>
                            <div class="price-installment">
                                <i class="bi bi-calculator"></i>
                                <div class="price-installment-text">Trả góp từ <strong>~45 triệu/tháng</strong> với lãi suất
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
                                <div class="color-option" style="--color:#B87333" data-color="copper"
                                    data-name="Copper Crest" onclick="selectColor(this)"></div>
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
                    <img src="{{ asset('web/assets/images/rx/mauxam.webp') }}"
                        alt="Lexus RX thế hệ thứ 5 — Crossover hạng sang tiên phong từ 1998">
                    <div class="intro-year-badge">
                        <div class="iyb-year">1998</div>
                        <div class="iyb-label">Năm tiên phong</div>
                    </div>
                </div>
                <div>
                    <div class="section-tag">Câu chuyện thương hiệu</div>
                    <h2 class="section-title">Tiên Phong Crossover Hạng Sang</h2>
                    <p class="section-desc" style="margin-bottom:20px;">Kể từ khi ra mắt vào năm 1998, RX luôn là dòng xe
                        tiên phong trong phân khúc crossover hạng sang với thiết kế không ngừng hoàn thiện từ cả sự mạnh mẽ
                        lẫn nét tinh tế.</p>
                    <p style="font-size:0.92rem;color:var(--lexus-text-muted);line-height:1.9;">Tiếp nối truyền thống đó,
                        thiết kế của RX thế hệ thứ 5 được tạo nên bởi bản sắc và tỷ lệ độc đáo từ trải nghiệm lái năng động,
                        được thể hiện trong ý tưởng thiết kế đầy quyến rũ và đầy sức sống, gợi lên tổng thể ngoại thất hấp
                        dẫn cùng nguồn năng lượng mãnh liệt. Sở hữu chiều dài cơ sở lớn, trọng tâm thấp, chiều rộng cơ sở
                        trước sau lớn là nền tảng tuyệt vời để tạo nên một phong cách thiết kế đột phá nhấn mạnh vào khả
                        năng vận hành hứng khởi.</p>
                    <div class="intro-milestones">
                        <div class="ms-item">
                            <div class="ms-num">5</div>
                            <div class="ms-label">Thế hệ phát triển</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">25+</div>
                            <div class="ms-label">Năm tiên phong</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">3</div>
                            <div class="ms-label">Phiên bản động cơ</div>
                        </div>
                        <div class="ms-item">
                            <div class="ms-num">#1</div>
                            <div class="ms-label">SUV hạng sang VN</div>
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
            <p class="section-desc">Tạo nên chiếc RX mang dấu ấn riêng với đa dạng lựa chọn màu sắc ngoại thất, chất liệu
                ghế, ốp nội thất và thiết kế mâm xe.</p>

            <div class="colour-tabs">
                <button class="colour-tab active" onclick="switchColour(this,'ct-exterior')">Màu Ngoại Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheels')">Mâm Xe</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-seat')">Ghế(Màu & Chất liệu)</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-trim')">Ốp Nội Thất</button>
                <button class="colour-tab" onclick="switchColour(this,'ct-wheel')">Vô Lăng</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="colour-pane active" id="ct-exterior">
                <div class="tech-grid">
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/ngoai-that.png') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Màu đen </div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/mautrang.jpg') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Màu trắng</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/mauxam.webp') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Màu xám</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/maudo.jpg') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Màu đỏ</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/xanhduong.jpg') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Xanh rêu</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/cam.png') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Màu cam</div>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <div class="feature-thumb-img">
                                <img src="{{ asset('web/assets/images/rx/xanhd1.png') }}" alt="Front Trim">
                            </div>
                            <div class="ti-abbr">Xanh dương</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MÂM XE -->
            <div class="colour-pane" id="ct-wheels">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Lexus RX
                    cung cấp nhiều tùy chọn mâm xe từ 18 đến 21 inch với các kiểu thiết kế phù hợp cho từng phiên bản.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/mam-xe.png') }}" alt="Mâm 21 inch Matte Black">
                        <div class="item-card-label">Mâm xe hợp kim nhôm <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX350 luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/mam-xe2.png') }}" alt="Mâm 20 inch Nhôm đánh bóng">
                        <div class="item-card-label">Mâm xe hợp kim nhôm 21 inch<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản rx 350 premium</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/mam-xe3.png') }}" alt="Mâm 18 inch tiêu chuẩn">
                        <div class="item-card-label">Mâm xe hợp kim nhôm 21 inch <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX500H F-sport</span></div>
                    </div>
                </div>
                <div
                    style="margin-top:16px;background:var(--lexus-dark-2);border:1px solid var(--lexus-gray);border-radius:var(--radius-lg);padding:18px 22px;">
                    <span style="font-size:0.82rem;color:var(--lexus-gold);font-weight:700;"><i
                            class="bi bi-info-circle me-2"></i>RX 500h F SPORT PERFORMANCE:</span>
                    <span style="font-size:0.82rem;color:var(--lexus-text-muted);"> Lốp 235/50R21 101W — Mâm hợp kim nhôm
                        21×8J sơn đen bóng Matte Black độc quyền.</span>
                </div>
            </div>

            <!-- CHẤT LIỆU GHẾ -->
            <div class="colour-pane" id="ct-seat">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ghế bọc da
                    cao cấp với nhiều lựa chọn màu sắc và chất liệu, mang lại sự sang trọng và thoải mái tối đa.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/ghexe1.jpeg') }}" alt="Da đen đục lỗ">
                        <div class="item-card-label">Màu nâu Hazel<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">F SPORT độc quyền</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/ghexe2.jpg') }}" alt="Da kem cao cấp">
                        <div class="item-card-label">Trắng Solis White</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/ghexe.jpg') }}" alt="Da nâu Saddle Tan">
                        <div class="item-card-label">Đen Black</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/ghexe3.jpg') }}" alt="Da nâu Saddle Tan">
                        <div class="item-card-label">Đỏ Dank ROSE</div>
                    </div>
                </div>
                <div class="item-grid-3 mt-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/dasemi.png') }}" alt="Da đen đục lỗ">
                        <div class="item-card-label">Da Semi-aniline<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX 350h LUXURY</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/dasmooth.png') }}" alt="Da kem cao cấp">
                        <div class="item-card-label">Da Smooth<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX 350 PREMIUM vàRX 350h
                                PREMIUM </span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/gheden.png') }}" alt="Da nâu Saddle Tan">
                        <div class="item-card-label">Da smooth<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX500H Performance </span></div>
                    </div>
                </div>
            </div>

            <!-- ỐP NỘI THẤT -->
            <div class="colour-pane" id="ct-trim">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Ốp nội thất
                    đa dạng phong cách từ gỗ tự nhiên sang trọng đến nhôm thể thao, tạo nên bầu không khí cabin theo sở
                    thích cá nhân.</p>
                <div class="item-grid-3">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/op1.png') }}" alt="Chi tiết nhôm xước">
                        <div class="item-card-label">Hoa văn gỗ Sumi Woodgrain<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX350 Luxury</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/op2.png') }}" alt="Gỗ Walnut">
                        <div class="item-card-label">Hoa văn hợp kim cao cấp <br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX500h F-sport</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/op3.png') }}" alt="Piano Black">
                        <div class="item-card-label">Hoa văn xương cá<br><span
                                style="color:var(--lexus-gold);font-size:0.7rem;">Phiên bản RX350 Premium</span></div>
                    </div>
                </div>
            </div>

            <!-- VÔ LĂNG -->
            <div class="colour-pane" id="ct-wheel">
                <p style="font-size:0.92rem;color:var(--lexus-text-muted);max-width:600px;margin-bottom:32px;">Vô lăng 3
                    chấu thiết kế thể thao với các tùy chọn chất liệu bọc da và lẫy chuyển số bằng nhôm.</p>
                <div class="item-grid-4">
                    <div class="item-card active" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/volang1.png') }}"
                            alt="Vô lăng bọc da đục lỗ kèm lẫy số">
                        <div class="item-card-label">Da <br><span style="color:var(--lexus-gold);font-size:0.7rem;">Phiên
                                bản RX350 Premium,RX350h Premium</span></div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/volang2.png') }}" alt="Vô lăng bọc da tiêu chuẩn">
                        <div class="item-card-label">Da (Phiên bản RX500H F-sport performance)</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/volang3.png') }}" alt="Vô lăng bọc gỗ và da">
                        <div class="item-card-label">Gỗ kết hợp da (Phiên bản RX350H Luxury)</div>
                    </div>
                    <div class="item-card" onclick="selectCard(this)">
                        <img src="{{ asset('web/assets/images/rx/volang4.png')}}" alt="Vô lăng bọc gỗ và da">
                        <div class="item-card-label">Vô Lăng Bọc Da Đục Lỗ</div>
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
            <p class="section-desc">Lexus RX cung cấp hai nền tảng động cơ tiên tiến — đáp ứng mọi nhu cầu từ hiệu năng
                thuần tuý đến tiết kiệm nhiên liệu vượt trội.</p>

            <div class="variant-tabs">
                <button class="variant-tab active" onclick="switchVariant(this,'vt-350')">RX 350 — 2.4L Turbo AWD</button>
                <button class="variant-tab" onclick="switchVariant(this,'vt-350h')">RX 350h — 2.5L Hybrid HEV</button>
            </div>

            <!-- RX 350 -->
            <div class="variant-pane active" id="vt-350">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/rx/dongco24l.jpg') }}" alt="Động cơ RX 350 2.4L Turbo AWD">
                        <div class="powertrain-badge">2.4L-T AWD</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-lightning-charge-fill me-2"></i>Động cơ 2.4L Tăng Áp AWD</h3>
                        <p>Động cơ xăng tăng áp 4 xi-lanh thẳng hàng phản ứng nhanh nhạy với tín hiệu bàn đạp ga, cung cấp
                            khả năng tăng tốc vượt trội với sức mạnh truyền động dồi dào. Hệ thống dẫn động 4 bánh toàn thời
                            gian AWD mang đến độ bám đường xuất sắc trong mọi điều kiện thời tiết và địa hình.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">275 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">430 Nm</div>
                                <div class="pt-spec-label">Mô-men xoắn</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7.4s</div>
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
                                <div class="hc-item"><i class="bi bi-arrow-repeat"></i> Hộp số tự động 8 cấp Direct-Shift
                                </div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Dẫn động 4 bánh toàn thời gian
                                    AWD</div>
                            </div>
                        </div>
                        <p style="font-size:0.82rem;color:var(--lexus-text-muted);margin-top:16px;line-height:1.7;">Hộp số
                            tự động 8 cấp sang số trực tiếp mang lại khả năng vận hành mạnh mẽ với phản ứng vòng tua máy
                            thấp đặc trưng của động cơ tăng áp, hiệu suất lái tuyến tính và khả năng tiết kiệm nhiên liệu
                            tuyệt vời.</p>
                    </div>
                </div>
            </div>

            <!-- RX 350h -->
            <div class="variant-pane" id="vt-350h">
                <div class="powertrain-grid">
                    <div class="powertrain-image">
                        <img src="{{ asset('web/assets/images/rx/2,5l.jpg') }}" alt="Hệ thống Hybrid RX 350h 2.5L HEV">
                        <div class="powertrain-badge">2.5L HEV E-Four</div>
                    </div>
                    <div class="powertrain-content">
                        <h3><i class="bi bi-battery-charging-fill me-2"></i>Hệ Thống Hybrid 2.5L HEV</h3>
                        <p>Hệ thống hybrid bao gồm động cơ 4 xi-lanh thẳng hàng 2.5L mạnh mẽ và mô tơ điện công suất cao. Sự
                            kết hợp tối ưu giữa động cơ nhạy bén, pin niken-mutal hybrid lưỡng cực hiệu suất cao và hệ thống
                            điều khiển hybrid được tinh chỉnh mang lại trải nghiệm lái mượt mà, chân thực và hiệu suất tiết
                            kiệm nhiên liệu vượt trội.</p>
                        <div class="powertrain-specs">
                            <div class="pt-spec">
                                <div class="pt-spec-value">188 HP</div>
                                <div class="pt-spec-label">Công suất</div>
                            </div>
                            <div class="pt-spec">
                                <div class="pt-spec-value">7.2s</div>
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
                                <div class="hc-item"><i class="bi bi-gear-fill"></i> Động cơ 4 xi-lanh thẳng hàng 2.5L
                                </div>
                                <div class="hc-item"><i class="bi bi-lightning-charge"></i> Mô tơ điện công suất cao</div>
                                <div class="hc-item"><i class="bi bi-battery-charging"></i> Pin Ni-MH lưỡng cực hiệu năng
                                    cao</div>
                                <div class="hc-item"><i class="bi bi-cpu"></i> Bộ điều khiển hybrid tinh chỉnh</div>
                                <div class="hc-item"><i class="bi bi-globe-americas"></i> Hệ dẫn động E-Four / FF tùy chọn
                                </div>
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
            <p style="color:var(--lexus-text-muted);max-width:700px;margin-bottom:0;">Hệ thống treo trước MacPherson và hệ
                thống treo sau liên kết đa điểm truyền lực dẫn động xuống mặt đường một cách hiệu quả, đồng thời mang đến
                khả năng thay đổi liền mạch tư thế thân xe.</p>
            <div class="chassis-grid">
                <div class="chassis-images">
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/rx/treotruoc.png') }}"
                            alt="Hệ thống treo trước MacPherson Lexus RX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo trước — MacPherson</div>
                    </div>
                    <div class="chassis-img-card">
                        <img src="{{ asset('web/assets/images/rx/treosau.png') }}"
                            alt="Hệ thống treo sau đa liên kết Lexus RX">
                        <div class="chassis-img-label"><i class="bi bi-gear-fill me-2"
                                style="color:var(--lexus-gold);"></i>Hệ thống treo sau — Đa liên kết</div>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-wind"></i>Hiệu suất khí động học</h4>
                        <p class="chassis-info-desc">Thiết kế khí động học được tối ưu hoá từng chi tiết — từ đường viền
                            nóc xuống đến phần dưới gầm xe — giảm lực cản không khí, tăng ổn định tốc độ cao và cải thiện
                            hiệu suất nhiên liệu đáng kể.</p>
                    </div>
                </div>

                <div class="chassis-diagram">
                    <div class="chassis-diagram-img">
                        <img src="{{ asset('web/assets/images/rx/docung.png') }}"
                            alt="Sơ đồ cấu trúc thân xe Lexus RX GK-A">
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
                        <p class="chassis-info-desc">Phần phía sau của khung gầm GK-A được thiết kế đặc biệt để phù hợp với
                            hệ thống treo liên kết đa điểm</p>
                    </div>
                    <div class="chassis-info-box mt-2">
                        <h4 class="chassis-info-title"><i class="bi bi-speedometer2"></i>Hệ thống treo / giảm xóc</h4>
                        <p class="chassis-info-desc">Hệ thống treo trước MacPherson và hệ thống treo sau liên kết đa điểm
                            truyền lực dẫn động xuống mặt đường một cách hiệu quả, đồng thời mang đến khả năng thay đổi liền
                            mạch tư thế thân xe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== THIẾT KẾ ==================== -->
    <section class="design-section" id="design">
        <div class="container">
            <div class="section-tag">Mỹ học & thiết kế</div>
            <h2 class="section-title">Thiết Kế RX Thế Hệ 5</h2>
            <p class="section-desc">Sở hữu chiều dài cơ sở lớn, trọng tâm thấp, chiều rộng cơ sở trước sau lớn là nền tảng
                tuyệt vời để tạo nên một phong cách thiết kế đột phá, nhấn mạnh vào khả năng vận hành hứng khởi cùng trải
                nghiệm lực kéo ấn tượng đến từ hệ thống dẫn động 4 bánh trực tiếp Direct4</p>
            <div class="design-tabs">
                <button class="design-tab active" onclick="switchDesign(this,'dp-exterior')">Ngoại Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-interior')">Nội Thất</button>
                <button class="design-tab" onclick="switchDesign(this,'dp-tech')">Màn Hình & HUD</button>
            </div>

            <!-- NGOẠI THẤT -->
            <div class="design-pane active" id="dp-exterior">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/mattruoc.png')}}"
                            alt="Mặt trước Lexus RX thế hệ 5 — Lưới Spindle">
                        <div class="design-caption">
                            <h4>Mặt trước mạnh mẽ — Spindle không viền</h4>
                            <p>Lưới tản nhiệt Spindle không viền đặc trưng Lexus, tích hợp liền mạch với cụm đèn LED L-shape
                                sắc nét. Sở hữu chiều dài cơ sở lớn, trọng tâm thấp là nền tảng tuyệt vời cho phong cách
                                thiết kế đột phá.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/duoixe.png')}}"
                            alt="Đuôi xe Lexus RX — Đèn hậu liên kết">
                        <div class="design-caption">
                            <h4>Đuôi xe thể thao — Đèn hậu liên kết</h4>
                            <p>Dải đèn hậu liên kết ngang tạo cảm giác chiều rộng và sự chuyển động. Đường viền đuôi xe kéo
                                dài nhấn mạnh tỷ lệ khí động học.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/rx/thanxe.png')}}"
                            alt="Góc nhìn bên hông Lexus RX 500h — dáng thể thao">
                        <div class="design-caption">
                            <h4>Thân xe — Chiều dài cơ sở lớn & trọng tâm thấp</h4>
                            <p>Đường mái dốc mượt mà kết hợp mâm 21 inch Matte Black tạo dáng đứng đầy uy lực. Sườn xe với
                                đường gân mạnh mẽ gợi cảm giác chuyển động ngay cả khi đứng yên.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-eye"></i> Đèn LED L-shape</div>
                    <div class="feature-chip"><i class="bi bi-grid-3x3"></i> Lưới Spindle không viền</div>
                    <div class="feature-chip"><i class="bi bi-circle"></i> Mâm 21" Matte Black</div>
                    <div class="feature-chip"><i class="bi bi-arrow-down"></i> Trọng tâm thấp</div>
                    <div class="feature-chip"><i class="bi bi-rulers"></i> Chiều dài cơ sở mở rộng</div>
                    <div class="feature-chip"><i class="bi bi-wind"></i> Khí động học tối ưu</div>
                </div>
            </div>

            <!-- NỘI THẤT -->
            <div class="design-pane" id="dp-interior">
                <div class="design-row">
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/rx/cabin.png')}}"
                            alt="Nội thất Lexus RX — Cabin lấy người lái làm trung tâm">
                        <div class="design-caption">
                            <h4>Cabin lấy người lái làm trung tâm</h4>
                            <p>Ý tưởng thiết kế nội thất với màn hình hiển thị thông tin trên kính chắn gió HUD kèm theo
                                tính năng hiển thị hướng dẫn vận hành giúp người lái chủ động nắm được điều kiện đường quanh
                                xe và thao tác vận hành dễ dàng với tầm nhìn hướng về phía trước mà không cần nhìn xuống
                                tay.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/duclo.png')}}"
                            alt="Ghế thể thao F SPORT bọc da đục lỗ">
                        <div class="design-caption">
                            <h4>Ghế thể thao F SPORT</h4>
                            <p>Ghế bọc da đục lỗ cao cấp ôm sát cơ thể khi vào cua mạnh, hỗ trợ người lái tối đa trong mọi
                                tình huống lái xe.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/bangdk.png')}}"
                            alt="Bảng điều khiển Lexus RX — tối giản">
                        <div class="design-caption">
                            <h4>Bảng điều khiển tối giản</h4>
                            <p>Thiết kế tập trung vào trải nghiệm lái trực quan. Vô lăng bọc da đục lỗ tích hợp lẫy chuyển
                                số bằng nhôm đặc trưng F SPORT.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> HUD trên kính chắn gió</div>
                    <div class="feature-chip"><i class="bi bi-broadcast-pin"></i> Âm thanh Mark Levinson®</div>
                    <div class="feature-chip"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh</div>
                    <div class="feature-chip"><i class="bi bi-thermometer-half"></i> Điều hoà 3 vùng độc lập</div>
                    <div class="feature-chip"><i class="bi bi-door-open"></i> e-latch mở cửa điện tử</div>
                    <div class="feature-chip"><i class="bi bi-person"></i> Ghế chỉnh điện 14 hướng</div>
                </div>
            </div>

            <!-- MÀHÌNH & HUD -->
            <div class="design-pane" id="dp-tech">
                <div class="design-row">
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/hub2.png')}}"
                            alt="Màn hình cảm ứng 14 inch Lexus RX">
                        <div class="design-caption">
                            <h4>Màn hình cảm ứng 14 inch</h4>
                            <p>Màn hình trung tâm 14 inch sắc nét, hỗ trợ Apple CarPlay và Android Auto không dây, tích hợp
                                điều hướng thời gian thực và hệ thống âm thanh Mark Levinson® 21 loa.</p>
                        </div>
                    </div>
                    <div class="design-card">
                        <img src="{{asset('web/assets/images/rx/hub3.png')}}"
                            alt="Màn hình tốc độ TFT Lexus RX 350 Premium">
                        <div class="design-caption">
                            <h4>Màn hình tốc độ TFT (RX 350 Premium)</h4>
                            <p>Đồng hồ TFT full digital hiển thị thông tin lái xe trực quan, rõ nét trong mọi điều kiện ánh
                                sáng. Có thể tuỳ chỉnh giao diện theo chế độ lái đã chọn.</p>
                        </div>
                    </div>
                    <div class="design-card wide">
                        <img src="{{asset('web/assets/images/rx/hub1.png')}}"
                            alt="HUD Lexus RX — Hiển thị trên kính chắn gió">
                        <div class="design-caption">
                            <h4>HUD — Màn hình hiển thị trên kính chắn gió</h4>
                            <p>Tính năng hiển thị hướng dẫn vận hành giúp người lái chủ động nắm được điều kiện đường quanh
                                xe và thao tác vận hành dễ dàng với tầm nhìn hướng về phía trước mà không cần nhìn xuống
                                tay.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-chips">
                    <div class="feature-chip"><i class="bi bi-display"></i> 14 inch Touchscreen</div>
                    <div class="feature-chip"><i class="bi bi-speedometer"></i> Đồng hồ TFT Digital</div>
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
            <p class="section-desc">Phiên bản F SPORT PERFORMANCE được trang bị những chi tiết độc quyền từ ngoại thất đến
                nội thất, tạo nên diện mạo thể thao và đẳng cấp riêng biệt không thể nhầm lẫn.</p>

            <div class="equipment-tabs">
                <button class="equipment-tab active" onclick="switchEquipmentTab(this,'exterior')">Ngoại Thất (A —
                    I)</button>
                <button class="equipment-tab" onclick="switchEquipmentTab(this,'interior')">Nội Thất (A — H)</button>
            </div>

            <!-- NGOẠI THẤT A–I -->
            <div class="equipment-content active" id="exterior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Lưới Tản Nhiệt Không Viền</h4>
                        <p class="ec-desc">Họa tiết mắt lưới F SPORT đặc trưng, cùng lưới tản nhiệt bên, cốp khoang hành lý
                            & viền cụm đèn sau.</p>
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
                        <p class="ec-desc">Ốp gương chiếu hậu bên ngoài sơn đen Piano Black sang trọng, tạo điểm nhấn thể
                            thao nổi bật.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Viền Dưới Cản Trước</h4>
                        <p class="ec-desc">Viền dưới cản trước sơn cùng màu thân xe, tạo sự liền mạch và hoàn thiện thiết
                            kế thể thao.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Viền Cạnh Bên Cản Trước</h4>
                        <p class="ec-desc">Viền cạnh bên cản trước sơn cùng màu thân xe, hoàn thiện bộ thiết kế F SPORT đặc
                            trưng.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Sườn Xe Đồng Màu</h4>
                        <p class="ec-desc">Sườn xe sơn cùng màu thân xe với đường gân mạnh mẽ, tạo tổng thể hài hoà và cảm
                            giác chuyển động.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">G</div>
                        <h4 class="ec-title">Mâm 21" Matte Black</h4>
                        <p class="ec-desc">Lốp 235/50R21 101W kết hợp mâm hợp kim nhôm 21×8J sơn đen bóng Matte Black đặc
                            trưng F SPORT PERFORMANCE.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">H</div>
                        <h4 class="ec-title">Viền Cửa Sổ Đen</h4>
                        <p class="ec-desc">Viền cửa sổ màu đen tạo điểm nhấn thể thao nổi bật, tương phản ấn tượng với màu
                            thân xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge"
                            style="background:var(--lexus-dark-3);border:1px solid var(--lexus-gold);color:var(--lexus-gold);">Độc
                            quyền</span>
                        <div class="ec-letter">I</div>
                        <h4 class="ec-title">Cản Sau Thể Thao</h4>
                        <p class="ec-desc">Phần dưới cản sau sơn cùng màu thân xe. Viền cản sau sơn đen Piano Black cao
                            cấp.</p>
                    </div>
                </div>
            </div>

            <!-- NỘI THẤT A–H -->
            <div class="equipment-content" id="interior">
                <div class="equipment-grid">
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">A</div>
                        <h4 class="ec-title">Vô Lăng Bọc Da Đục Lỗ</h4>
                        <p class="ec-desc">Vô lăng 3 chấu bọc da đục lỗ cao cấp với lẫy chuyển số bằng nhôm tích hợp — cảm
                            giác lái thể thao tức thì.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">B</div>
                        <h4 class="ec-title">Cần Số Bọc Da Đục Lỗ</h4>
                        <p class="ec-desc">Cần số bọc da đục lỗ, mang lại cảm giác cầm nắm chắc chắn và thể thao trong từng
                            thao tác.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">C</div>
                        <h4 class="ec-title">Màn Hình Tốc Độ TFT</h4>
                        <p class="ec-desc">Màn hình đồng hồ TFT full digital hiển thị thông tin rõ nét và hiện đại, phong
                            cách thể thao thuần túy.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">D</div>
                        <h4 class="ec-title">Bàn Đạp Thể Thao Nhôm</h4>
                        <p class="ec-desc">Bàn đạp và bệ nghỉ chân thể thao bằng nhôm xước cao cấp, tạo cảm giác kết nối
                            chân thực với xe.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">E</div>
                        <h4 class="ec-title">Chi Tiết Trang Trí Nhôm</h4>
                        <p class="ec-desc">Chi tiết trang trí bằng nhôm xước cao cấp, tạo điểm nhấn sang trọng và thể thao
                            trong cabin.</p>
                    </div>
                    <div class="equipment-card"><span class="ec-badge">F SPORT</span>
                        <div class="ec-letter">F</div>
                        <h4 class="ec-title">Ghế Thể Thao Bọc Da</h4>
                        <p class="ec-desc">Ghế thể thao bọc da cao cấp với khả năng ôm giữ tuyệt vời khi vào cua, tạo trải
                            nghiệm lái thuần túy.</p>
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
                        <p class="ec-desc">Ốp bệ bước chân màu đen bảo vệ và tạo điểm nhấn thể thao mỗi khi bước vào cabin.
                        </p>
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
            <p class="section-desc">RX được trang bị hàng loạt công nghệ an toàn chủ động tiên
                tiến nhất từ Lexus Safety System+.</p>

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
                                    <img src="{{ asset('web/assets/images/rx/RRCC.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Điều Khiển Hành Trình Thích Ứng</div>
                                <div class="ti-abbr">DRCC — Dynamic Radar Cruise Control (ở mọi tốc độ)</div>
                                <div class="ti-desc">Tự động duy trì khoảng cách an toàn với xe phía trước ở mọi dải tốc
                                    độ, kể
                                    cả dừng hẳn trong kẹt xe.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/LTA.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Hỗ Trợ Theo Dõi Làn Đường</div>
                                <div class="ti-abbr">LTA — Lane Tracing Assist</div>
                                <div class="ti-desc">Hỗ trợ giữ xe đi đúng giữa làn đường, giảm mệt mỏi khi lái đường dài
                                    trên
                                    cao tốc.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/AHS.jpg') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Đèn Trước Tự Động Thích Ứng</div>
                                <div class="ti-abbr">BladeScan AHS — Công nghệ quét tốc độ cao</div>
                                <div class="ti-desc">Tự động điều chỉnh vùng chiếu sáng, tránh chói mắt xe đối diện trong
                                    khi
                                    chiếu sáng tối đa vùng ngoài.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/AHB.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Đèn Pha Tự Động</div>
                                <div class="ti-abbr">AHB — Automatic High Beam</div>
                                <div class="ti-desc">Tự động chuyển đổi giữa đèn pha và đèn cốt theo điều kiện giao thông,
                                    không cần tác động của người lái.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/BSM.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Cảnh Báo Điểm Mù</div>
                                <div class="ti-abbr">BSM — Blind Spot Monitor</div>
                                <div class="ti-desc">Cảnh báo bằng ánh sáng và âm thanh khi có phương tiện trong vùng điểm
                                    mù
                                    khi chuyển làn đường.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/SEA.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Hỗ Trợ Ra Khỏi Xe An Toàn</div>
                                <div class="ti-abbr">SEA — Safe Exit Assist (kiểm soát mở cửa)</div>
                                <div class="ti-desc">Cảnh báo và kiểm soát cửa xe khi phát hiện phương tiện/xe đạp đang đến
                                    gần
                                    từ phía sau.</div>
                            </a>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="ti-content">
                            <a href="{{ route('tech_car.index') }}">
                                <div class="feature-thumb-img">
                                    <img src="{{ asset('web/assets/images/rx/PKSB.webp') }}" alt="Front Trim">
                                </div>
                                <div class="ti-name">Phanh An Toàn Khi Đỗ</div>
                                <div class="ti-abbr">PKSB — Parking Support Brake</div>
                                <div class="ti-desc">Tự động phanh khi phát hiện vật cản trong quá trình đỗ xe tiến và lùi
                                    ở
                                    tốc độ thấp.</div>
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
                        Sport / Sport+ / Custom)</div>
                    <div class="conv-item"><i class="bi bi-p-square"></i> Phanh đỗ điện tử EPB + tính năng giữ phanh Auto
                        Hold</div>
                    <div class="conv-item"><i class="bi bi-arrows-fullscreen"></i> Chế độ tối ưu hoá lực bám đường</div>
                    <div class="conv-item"><i class="bi bi-arrow-down-circle"></i> Hỗ trợ xuống dốc DAC (Downhill Assist
                        Control)</div>
                    <div class="conv-item"><i class="bi bi-sun"></i> Cửa sổ trời toàn cảnh Panorama</div>
                    <div class="conv-item"><i class="bi bi-droplet"></i> Gạt mưa tích hợp vòi phun nước rửa kính</div>
                    <div class="conv-item"><i class="bi bi-door-closed"></i> Hệ thống mở cửa nút chốt điện tử e-latch
                    </div>
                    <div class="conv-item"><i class="bi bi-box-arrow-in-down"></i> Mở cửa hậu rảnh tay (cảm biến chân)
                    </div>
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
                        <div class="spec-row"><span class="spec-name">Loại động cơ</span><span class="spec-value">2.4L
                                Turbo HEV DIRECT4</span></div>
                        <div class="spec-row"><span class="spec-name">Công suất tổng hợp</span><span
                                class="spec-value">371 HP</span></div>
                        <div class="spec-row"><span class="spec-name">Mô-men xoắn</span><span class="spec-value">460
                                Nm</span></div>
                        <div class="spec-row"><span class="spec-name">Hộp số</span><span class="spec-value">Tự động 6
                                cấp</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ dẫn động</span><span class="spec-value">AWD
                                DIRECT4</span></div>
                        <div class="spec-row"><span class="spec-name">Tăng tốc 0-100 km/h</span><span
                                class="spec-value">5.9 giây</span></div>
                        <div class="spec-row"><span class="spec-name">Pin hybrid</span><span class="spec-value">Bipolar
                                Ni-MH hiệu năng cao</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-rulers"></i> Kích Thước & Không Gian</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Dài × Rộng × Cao</span><span
                                class="spec-value">4,890 × 1,920 × 1,695 mm</span></div>
                        <div class="spec-row"><span class="spec-name">Chiều dài cơ sở</span><span
                                class="spec-value">2,850 mm</span></div>
                        <div class="spec-row"><span class="spec-name">Khoảng sáng gầm</span><span class="spec-value">200
                                mm</span></div>
                        <div class="spec-row"><span class="spec-name">Dung tích khoang hành lý</span><span
                                class="spec-value">612 lít</span></div>
                        <div class="spec-row"><span class="spec-name">Dung tích bình nhiên liệu</span><span
                                class="spec-value">65 lít</span></div>
                        <div class="spec-row"><span class="spec-name">Số chỗ ngồi</span><span class="spec-value">5
                                người</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-gear-wide-connected"></i> Khung Gầm & Lốp</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Hệ thống treo trước</span><span
                                class="spec-value">MacPherson</span></div>
                        <div class="spec-row"><span class="spec-name">Hệ thống treo sau</span><span
                                class="spec-value">Multi-link đa liên kết</span></div>
                        <div class="spec-row"><span class="spec-name">Phanh trước / sau</span><span
                                class="spec-value">Đĩa thông gió</span></div>
                        <div class="spec-row"><span class="spec-name">Kích thước lốp</span><span
                                class="spec-value">235/50R21 101W</span></div>
                        <div class="spec-row"><span class="spec-name">Mâm hợp kim</span><span class="spec-value">21×8J
                                Matte Black</span></div>
                        <div class="spec-row"><span class="spec-name">Phanh đỗ xe</span><span class="spec-value">EPB điện
                                tử + Auto Hold</span></div>
                    </div>
                </div>
                <div class="specs-card">
                    <div class="specs-card-header">
                        <h4><i class="bi bi-fuel-pump"></i> Nhiên Liệu & Môi Trường</h4>
                    </div>
                    <div class="specs-card-body">
                        <div class="spec-row"><span class="spec-name">Tiêu thụ nhiên liệu</span><span
                                class="spec-value">8.1 L/100km</span></div>
                        <div class="spec-row"><span class="spec-name">Loại nhiên liệu</span><span class="spec-value">Xăng
                                RON 95</span></div>
                        <div class="spec-row"><span class="spec-name">Động cơ điện trước</span><span
                                class="spec-value">Có</span></div>
                        <div class="spec-row"><span class="spec-name">Động cơ điện sau</span><span
                                class="spec-value">Công suất cao</span></div>
                        <div class="spec-row"><span class="spec-name">Tiêu chuẩn khí thải</span><span
                                class="spec-value">Euro 6</span></div>
                        <div class="spec-row"><span class="spec-name">Lượng CO₂ thải ra</span><span
                                class="spec-value">184 g/km</span></div>
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
                images: ['{{ asset('web/assets/images/rx/mautrang.jpg') }}',
                    '{{ asset('web/assets/images/rx/trang1.jpg') }}',
                    '{{ asset('web/assets/images/rx/trang2.jpg') }}',
                    '{{ asset('web/assets/images/rx/trang3.jpg') }}',
                    '{{ asset('web/assets/images/rx/trang4.jpg') }}'
                ]
            },
            black: {
                name: 'Màu đen',
                images: ['{{ asset('web/assets/images/rx/ngoai-that.png') }}',
                    '{{ asset('web/assets/images/rx/den1.jpg') }}',
                    '{{ asset('web/assets/images/rx/den2.webp') }}',
                    '{{ asset('web/assets/images/rx/den3.jpg') }}',
                    '{{ asset('web/assets/images/rx/ngoai-that.png') }}'
                ]
            },
            silver: {
                name: 'Màu xám',
                images: ['{{ asset('web/assets/images/rx/mauxam.webp') }}',
                    '{{ asset('web/assets/images/rx/xam1.png') }}',
                    '{{ asset('web/assets/images/rx/xam2.png') }}',
                    '{{ asset('web/assets/images/rx/xam3.png') }}',
                    '{{ asset('web/assets/images/rx/xam4.png') }}'
                ]
            },
            red: {
                name: 'Màu đỏ',
                images: ['{{ asset('web/assets/images/rx/maudo.jpg') }}',
                    '{{ asset('web/assets/images/rx/do1.webp') }}',
                    '{{ asset('web/assets/images/rx/do2.png') }}',
                    '{{ asset('web/assets/images/rx/do3.jpg') }}',
                    '{{ asset('web/assets/images/rx/maudo.jpg') }}'
                ]
            },
            green: {
                name: 'Xanh rêu',
                images: ['{{ asset('web/assets/images/rx/xanhduong.jpg') }}',
                    '{{ asset('web/assets/images/rx/xanhr1.png') }}',
                    '{{ asset('web/assets/images/rx/xanhr2.png') }}',
                    '{{ asset('web/assets/images/rx/xanhr3.png') }}',
                    '{{ asset('web/assets/images/rx/xanhr4.png') }}'
                ]
            },
            copper: {
                name: 'Màu đồng',
                images: ['{{ asset('web/assets/images/rx/cam.png') }}',
                    '{{ asset('web/assets/images/rx/cam1.jpg') }}',
                    '{{ asset('web/assets/images/rx/cam2.jpg') }}',
                    '{{ asset('web/assets/images/rx/cam3.jpg') }}',
                    '{{ asset('web/assets/images/rx/cam.png') }}'
                ]
            },
            blue: {
                name: 'Màu xanh dương',
                images: ['{{ asset('web/assets/images/rx/xanhblue.webp') }}',
                    '{{ asset('web/assets/images/rx/xanhd1.png') }}',
                    '{{ asset('web/assets/images/rx/xanhd2.png') }}',
                    '{{ asset('web/assets/images/rx/xanhd3.png') }}',
                    '{{ asset('web/assets/images/rx/xanhd4.png') }}'
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
