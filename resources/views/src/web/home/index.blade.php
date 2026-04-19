@extends('layouts.web.index')

@section('content')
 <!-- ==================== TRUST BAR ==================== -->
        <div class="trust-bar">
            <div class="container">
                <div class="trust-bar-inner">
                    <div class="trust-item">
                        <div class="trust-icon"><i
                                class="bi bi-patch-check-fill"></i></div>
                        <div>
                            <div class="trust-label">Nhà phân phối</div>
                            <div class="trust-value">Chính hãng Lexus Thăng Long</div>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon"><i
                                class="bi bi-shield-fill-check"></i></div>
                        <div>
                            <div class="trust-label">Bảo hành</div>
                            <div class="trust-value">5 năm / 100.000 km</div>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon"><i
                                class="bi bi-headset"></i></div>
                        <div>
                            <div class="trust-label">Hỗ trợ cứu hộ</div>
                            <div class="trust-value">online-24/7</div>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon"><i
                                class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <div class="trust-label">Hệ thống đại lý</div>
                            <div class="trust-value">Hà Nội & HCM</div>
                        </div>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <div class="trust-icon"><i
                                class="bi bi-star-fill"></i></div>
                        <div>
                            <div class="trust-label">Đánh giá khách hàng</div>
                            <div class="trust-value">4.9 / 5 · 2.500+
                                review</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== MODELS SECTION ==================== -->
        <section class="models-section" id="models">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <h2 class="section-title">Khám Phá Các Dòng Xe</h2>
                        <p class="section-subtitle">Lexus mang đến trải nghiệm lái xe đỉnh cao
                            cho mọi phong cách sống.</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a href="#" class="btn-outline-lexus">Xem tất cả <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/rx500hfsport.webp')}}"
                                    alt="Lexus RX 500h F SPORT">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus RX 500h</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        270.8  HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        6.2s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">4.490.000.000đ</div>
                                    <a href="{{route('products.rx')}}"
                                        class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/nx350h.jpeg')}}"
                                    alt="Lexus NX 350h Hybrid">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus NX 350h</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        188 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7.7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">3.270.000.000đ</div>
                                    <a href="{{route('products.nx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/LM500h6cho.webp')}}"
                                    alt="Lexus ES 300h Ultra Luxury">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">MPV Series</div>
                                <h3 class="model-name">Lexus LM 500h(6 chỗ)</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        275 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        6.9s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">7.530.000.000đ</div>
                                    <a href="{{route('products.lm')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/lx600vip.jpg')}}"
                                    alt="Lexus LX 600 VIP">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus LX 600 VIP</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        409 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Petrol</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">9.700.000.000đ</div>
                                    <a href="{{route('products.lx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/ls500h.jpg')}}"
                                    alt="Lexus LS 500h Flagship">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">Sedan Series</div>
                                <h3 class="model-name">Lexus LS 500h</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        295 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        6.7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">8.030.000.000đ</div>
                                    <a href="{{route('products.ls')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/GX550-M.webp')}}"
                                    alt="Lexus UX 300e Electric">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus GX 550M</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        349 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-ev-station"></i>
                                        Petrol</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">6.400.000.000đ</div>
                                    <a href="{{route('products.gx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/GX550.jpg')}}"
                                    alt="Lexus GX 550 2024">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus GX 550</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        349 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Petrol</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">6.450.000.000đ</div>
                                    <a href="{{route('products.gx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/RX350h-premium.webp')}}"
                                    alt="Lexus LC 500 Coupe">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus Rx350h Premium</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        187,7 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7.9s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">3.350.000.000đ</div>
                                    <a href="{{route('products.rx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/rx350hluxury.png')}}"
                                    alt="Lexus LC 500 Coupe">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus Rx350h Luxury</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        187,7 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7.9s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybrid</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">4.140.000.000đ</div>
                                    <a href="{{route('products.rx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/LX600Fsport.webp')}}"
                                    alt="Lexus UX 300e Electric">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus LX 600 F SPORT</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        409 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-ev-station"></i>
                                        Petrol</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">8.840.000.000đ</div>
                                    <a href="{{route('products.lx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/lx600urban.webp')}}"
                                    alt="Lexus GX 550 2024">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus LX 600 Urban</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        409 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        7s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Petrol</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">8.580.000.000đ</div>
                                    <a href="{{route('products.lx')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="model-card">
                            <div class="model-card-img">
                                <img
                                    src="{{asset('web/assets/images/Lm500h4cho.jpg')}}"
                                    alt="Lexus LC 500 Coupe">
                                <button class="model-fav"><i
                                        class="bi bi-heart"></i></button>
                            </div>
                            <div class="model-card-body">
                                <div class="model-series">SUV Series</div>
                                <h3 class="model-name">Lexus LM 500h (4 chỗ)</h3>
                                <div class="model-specs">
                                    <span class="model-spec"><i
                                            class="bi bi-lightning-charge"></i>
                                        275 HP</span>
                                    <span class="model-spec"><i
                                            class="bi bi-speedometer2"></i>
                                        6.9s</span>
                                    <span class="model-spec"><i
                                            class="bi bi-fuel-pump"></i>
                                        Hybird</span>
                                </div>
                                <div class="model-footer">
                                    <div
                                        class="model-price">8.950.000.000đ</div>
                                    <a href="{{route('products.lm')}}" class="model-link">Chi tiết <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== FEATURED SECTION ==================== -->
        <section class="featured-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="featured-content">
                            <div class="featured-badge">Lexus Care</div>
                            <h2 class="featured-title">Đội ngũ <span
                                    class="highlight">Chuyên nghiệp</span> Tận tâm trong từng chi tiết</h2>
                            <p class="featured-desc">Chúng tôi tự hào sở hữu đội ngũ cán bộ nhân viên giàu kinh nghiệm, luôn đặt khách hàng làm trung tâm và không ngừng nâng cao chất lượng phục vụ.</p>
                            <ul class="featured-list">
                                <li><i class="bi bi-check-circle-fill"></i> Đội ngũ kỹ thuật viên được đào tạo bài bản theo tiêu chuẩn quốc tế</li>
                                <li><i class="bi bi-check-circle-fill"></i> Nhân viên tư vấn tận tâm, chuyên nghiệp và luôn sẵn sàng hỗ trợ khách hàng</li>
                                <li><i class="bi bi-check-circle-fill"></i> Văn hóa làm việc đề cao trách nhiệm, sự chính trực và tinh thần phục vụ</li>
                                <li><i class="bi bi-check-circle-fill"></i> Không ngừng học hỏi và nâng cao kỹ năng để mang đến trải nghiệm tốt nhất cho khách hàng</li>
                            </ul>
                            <a href="#" class="btn-primary-lexus">Tìm hiểu thêm
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-image">
                            <img
                                src="{{asset('web/assets/images/z7621772975194_fc0989ca9b2bbbc48645e6346baca801.jpg')}}"
                                alt="Lexus Service Center Vietnam">
                            <div class="featured-play"><i
                                    class="bi bi-play-fill"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== STATS SECTION ==================== -->
        <section class="stats-section">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3"><div class="stat-item"><div
                                class="stat-value">30+</div><div
                                class="stat-label">Năm kinh
                                nghiệm</div></div></div>
                    <div class="col-6 col-md-3"><div class="stat-item"><div
                                class="stat-value">50K+</div><div
                                class="stat-label">Khách hàng</div></div></div>
                    <div class="col-6 col-md-3"><div class="stat-item"><div
                                class="stat-value">25+</div><div
                                class="stat-label">Đại lý toàn
                                quốc</div></div></div>
                    <div class="col-6 col-md-3"><div class="stat-item"><div
                                class="stat-value">98%</div><div
                                class="stat-label">Hài lòng</div></div></div>
                </div>
            </div>
        </section>

        <!-- ==================== AWARDS SECTION ==================== -->
        <section class="awards-section" id="awards">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title center">Giải Thưởng & Công
                        Nhận</h2>
                    <p class="section-subtitle center">Lexus liên tục được vinh
                        danh bởi các tổ chức uy tín hàng đầu thế giới và Việt
                        Nam</p>
                </div>
                <div class="awards-grid">
                    <div class="award-card">
                        <div class="award-icon"><i
                                class="bi bi-trophy-fill"></i></div>
                        <div class="award-year">2025</div>
                        <div class="award-org">J.D. Power Vietnam</div>
                        <div class="award-name">Xe hạng sang được hài lòng nhất
                            — Hạng mục SUV</div>
                    </div>
                    <div class="award-card">
                        <div class="award-icon"><i
                                class="bi bi-award-fill"></i></div>
                        <div class="award-year">2025</div>
                        <div class="award-org">Vietnam Automobile
                            Association</div>
                        <div class="award-name">Thương hiệu xe sang trọng đáng
                            tin cậy nhất</div>
                    </div>
                    <div class="award-card">
                        <div class="award-icon"><i
                                class="bi bi-patch-check-fill"></i></div>
                        <div class="award-year">2024</div>
                        <div class="award-org">What Car? Global</div>
                        <div class="award-name">Best Hybrid SUV of the Year — RX
                            500h</div>
                    </div>
                    <div class="award-card">
                        <div class="award-icon"><i
                                class="bi bi-star-fill"></i></div>
                        <div class="award-year">2024</div>
                        <div class="award-org">Forbes Vietnam</div>
                        <div class="award-name">Top 10 thương hiệu xe được yêu
                            thích nhất</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== WHY CHOOSE SECTION ==================== -->
        <section class="why-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title center">Tại Sao Chọn Lexus?</h2>
                    <p class="section-subtitle center">Những giá trị cốt lõi tạo
                        nên thương hiệu Lexus</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="why-card">
                            <div class="why-icon"><i
                                    class="bi bi-gem"></i></div>
                            <h4 class="why-title">Chất Lượng Vượt Trội</h4>
                            <p class="why-desc">Mỗi chiếc xe Lexus được chế tác
                                với tiêu chuẩn khắt khe nhất, đảm bảo chất lượng
                                hoàn hảo trong từng chi tiết.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="why-card">
                            <div class="why-icon"><i
                                    class="bi bi-cpu"></i></div>
                            <h4 class="why-title">Công Nghệ Tiên Tiến</h4>
                            <p class="why-desc">Trang bị những công nghệ hiện
                                đại nhất về an toàn, giải trí và hỗ trợ người
                                lái thông minh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="why-card">
                            <div class="why-icon"><i
                                    class="bi bi-shield-check"></i></div>
                            <h4 class="why-title">An Toàn Hàng Đầu</h4>
                            <p class="why-desc">Lexus Safety System+ với các
                                tính năng an toàn chủ động bảo vệ bạn và gia
                                đình trên mọi hành trình.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="why-card">
                            <div class="why-icon"><i
                                    class="bi bi-heart"></i></div>
                            <h4 class="why-title">Dịch Vụ Tận Tâm</h4>
                            <p class="why-desc">Đội ngũ chuyên gia tận tâm, sẵn
                                sàng hỗ trợ 24/7 với các dịch vụ chăm sóc khách
                                hàng đẳng cấp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== TESTIMONIALS SECTION ==================== -->
        <section class="testimonials-section">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <h2 class="section-title">Khách Hàng Nói Gì Về
                            Lexus</h2>
                        <p class="section-subtitle">★★★★★ 4.9/5 dựa trên 2,500+
                            đánh giá</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img
                            src="{{asset('web/assets/images/605698121_865598073103981_4020906297508280360_n.jpg')}}"
                            alt="Nguyễn Minh Đức — Khách hàng Lexus RX 500h">
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-meta">Lexus RX 500h • 6 tháng sử
                            dụng</div>
                        <p
                            class="testimonial-quote">"Trải nghiệm lái xe RX 500h thực sự vượt mong đợi. Hệ thống DIRECT4 mang lại cảm giác kiểm soát tuyệt vời, cabin cực kỳ yên tĩnh và sang trọng. Dịch vụ hậu mãi của Lexus cũng rất chuyên nghiệp và tận tâm."</p>
                        <div class="testimonial-author">Nguyễn Minh Đức <span>—
                                Giám đốc điều hành</span></div>
                        <div class="testimonial-dots">
                            <span class="dot active"></span><span
                                class="dot"></span><span
                                class="dot"></span><span class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== NEWS SECTION ==================== -->
        <section class="news-section" id="news">
            <div class="container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6">
                        <h2 class="section-title">Tin Tức & Sự Kiện</h2>
                        <p class="section-subtitle">Cập nhật những thông tin mới
                            nhất từ Lexus Vietnam</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a href="#" class="btn-outline-lexus">Xem tất cả <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image"><img
                                    src="{{asset('web/assets/images/2023RX500hFSPORTPerformanceAWDCopper3scaledjpeg-1676880266.jpg')}}"
                                    alt="Lexus RX 500h ra mắt Việt Nam"></div>
                            <div class="news-body">
                                <span class="news-tag">Ra mắt</span>
                                <div class="news-date">25 Tháng 2, 2026</div>
                                <h3 class="news-title">Lexus RX 500h F SPORT
                                    PERFORMANCE chính thức ra mắt tại Việt
                                    Nam</h3>
                                <a href="#" class="news-link">Đọc thêm <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image"><img
                                    src="{{asset('web/assets/images/2.webp')}}"
                                    alt="Công nghệ DIRECT4 Lexus"></div>
                            <div class="news-body">
                                <span class="news-tag">Công nghệ</span>
                                <div class="news-date">20 Tháng 2, 2026</div>
                                <h3 class="news-title">Công nghệ DIRECT4 — Đột
                                    phá trong hệ thống dẫn động 4 bánh</h3>
                                <a href="#" class="news-link">Đọc thêm <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image"><img
                                    src="{{asset('web/assets/images/lx600-urban-gallery-ext-06-d.jpg')}}"
                                    alt="Lexus lái thử toàn quốc 2026"></div>
                            <div class="news-body">
                                <span class="news-tag">Sự kiện</span>
                                <div class="news-date">15 Tháng 2, 2026</div>
                                <h3 class="news-title">Lexus Vietnam tổ chức
                                    chương trình lái thử toàn quốc 2026</h3>
                                <a href="#" class="news-link">Đọc thêm <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== FAQ SECTION ==================== -->
        <section class="faq-section" id="faq">
            <!-- FAQ Schema for Google Rich Results -->
            <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"Xe Lexus có bảo hành bao nhiêu năm?","acceptedAnswer":{"@type":"Answer","text":"Lexus cung cấp bảo hành chính hãng lên đến 5 năm hoặc 150.000 km tùy điều kiện nào đến trước, bao gồm cả bảo hành pin hybrid 8 năm."}},
        {"@type":"Question","name":"Làm thế nào để đặt lịch lái thử Lexus?","acceptedAnswer":{"@type":"Answer","text":"Bạn có thể đặt lịch lái thử trực tiếp trên website, gọi hotline 0962896582, hoặc đến trực tiếp bất kỳ đại lý Lexus nào trong hệ thống 25+ đại lý toàn quốc."}},
        {"@type":"Question","name":"Lexus Vietnam có hỗ trợ tài chính mua xe không?","acceptedAnswer":{"@type":"Answer","text":"Có, Lexus Vietnam hợp tác với nhiều ngân hàng và công ty tài chính uy tín, hỗ trợ vay mua xe với lãi suất ưu đãi, trả góp linh hoạt từ 12 đến 84 tháng."}},
        {"@type":"Question","name":"Thời gian bảo dưỡng định kỳ xe Lexus là bao lâu?","acceptedAnswer":{"@type":"Answer","text":"Xe Lexus cần bảo dưỡng định kỳ mỗi 10.000 km hoặc 6 tháng một lần. Thời gian thực hiện tại xưởng thường từ 1-2 giờ cho bảo dưỡng tiêu chuẩn."}},
        {"@type":"Question","name":"Lexus có dịch vụ cứu hộ 24/7 không?","acceptedAnswer":{"@type":"Answer","text":"Có. Lexus Roadside Assistance hoạt động 24/7 trên toàn quốc. Khách hàng chỉ cần gọi hotline để được hỗ trợ kéo xe, thay lốp, hay cứu pin ngay tại chỗ."}}
      ]
    }
    </script>

            <div class="container">
                <div class="faq-cols">
                    <div>
                        <h2 class="section-title">Câu Hỏi Thường Gặp</h2>
                        <p class="section-subtitle"
                            style="margin-bottom:0;">Giải đáp những thắc mắc phổ
                            biến nhất từ khách hàng về xe, dịch vụ và chính sách
                            của Lexus Vietnam.</p>

                        <div class="faq-list" id="faqList">
                            <div class="faq-item open">
                                <div class="faq-question"
                                    onclick="toggleFaq(this)">
                                    <span class="faq-q-text">Xe Lexus có bảo
                                        hành bao nhiêu năm?</span>
                                    <span class="faq-toggle"><i
                                            class="bi bi-plus-lg"></i></span>
                                </div>
                                <div class="faq-answer">
                                    <p>Lexus cung cấp bảo hành chính hãng lên
                                        đến <strong>5 năm hoặc 150.000
                                            km</strong> tùy điều kiện nào đến
                                        trước. Riêng pin hybrid được bảo hành
                                        <strong>8 năm hoặc 160.000 km</strong>.
                                        Bảo hành áp dụng toàn bộ hệ thống cơ
                                        khí, điện tử và sơn xe.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question"
                                    onclick="toggleFaq(this)">
                                    <span class="faq-q-text">Làm thế nào để đặt
                                        lịch lái thử Lexus?</span>
                                    <span class="faq-toggle"><i
                                            class="bi bi-plus-lg"></i></span>
                                </div>
                                <div class="faq-answer">
                                    <p>Bạn có thể đặt lịch lái thử trực tiếp
                                        trên website, gọi hotline <strong>1900
                                            1234 56</strong>, hoặc đến trực tiếp
                                        bất kỳ đại lý Lexus nào trong hệ thống
                                        25+ đại lý toàn quốc. Lexus cũng cung
                                        cấp dịch vụ lái thử tận nơi cho khách
                                        hàng bận rộn.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question"
                                    onclick="toggleFaq(this)">
                                    <span class="faq-q-text">Lexus Vietnam có hỗ
                                        trợ tài chính mua xe không?</span>
                                    <span class="faq-toggle"><i
                                            class="bi bi-plus-lg"></i></span>
                                </div>
                                <div class="faq-answer">
                                    <p>Có, Lexus Vietnam hợp tác với nhiều ngân
                                        hàng và công ty tài chính uy tín, hỗ trợ
                                        vay mua xe với <strong>lãi suất ưu đãi
                                            từ 6.5%/năm</strong>, trả góp linh
                                        hoạt từ 12 đến 84 tháng. Thủ tục đơn
                                        giản, phê duyệt nhanh trong vòng 24
                                        giờ.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question"
                                    onclick="toggleFaq(this)">
                                    <span class="faq-q-text">Thời gian bảo dưỡng
                                        định kỳ xe Lexus là bao lâu?</span>
                                    <span class="faq-toggle"><i
                                            class="bi bi-plus-lg"></i></span>
                                </div>
                                <div class="faq-answer">
                                    <p>Xe Lexus cần bảo dưỡng định kỳ
                                        <strong>mỗi 10.000 km hoặc 6
                                            tháng</strong> một lần. Thời gian
                                        thực hiện tại xưởng thường từ 1–2 giờ
                                        cho bảo dưỡng tiêu chuẩn. Trong thời
                                        gian chờ, khách hàng được hưởng tiện
                                        nghi phòng chờ VIP với cà phê, wifi miễn
                                        phí.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question"
                                    onclick="toggleFaq(this)">
                                    <span class="faq-q-text">Lexus có dịch vụ
                                        cứu hộ 24/7 không?</span>
                                    <span class="faq-toggle"><i
                                            class="bi bi-plus-lg"></i></span>
                                </div>
                                <div class="faq-answer">
                                    <p>Có. <strong>Lexus Roadside
                                            Assistance</strong> hoạt động 24/7
                                        trên toàn quốc. Khách hàng chỉ cần gọi
                                        hotline để được hỗ trợ kéo xe, thay lốp,
                                        cứu pin hay nhiên liệu ngay tại chỗ —
                                        tất cả hoàn toàn miễn phí trong thời
                                        gian bảo hành.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar contact -->
                    <div class="faq-sidebar">
                        <h4>Cần tư vấn thêm?</h4>
                        <div class="faq-contact-items">
                            <div class="faq-contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <div>
                                    <div class="fci-label">Hotline tư vấn</div>
                                    <div class="fci-val">0962896582</div>
                                </div>
                            </div>
                            <div class="faq-contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <div>
                                    <div class="fci-label">Email hỗ trợ</div>
                                    <div
                                        class="fci-val">support@lexus.com.vn</div>
                                </div>
                            </div>
                            <div class="faq-contact-item">
                                <i class="bi bi-chat-dots-fill"></i>
                                <div>
                                    <div class="fci-label">Live chat</div>
                                    <div class="fci-val">Phản hồi trong 2
                                        phút</div>
                                </div>
                            </div>
                            <div class="faq-contact-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <div>
                                    <div class="fci-label">Đại lý gần nhất</div>
                                    <div class="fci-val">Tìm theo bản đồ</div>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="btn-primary-lexus mt-4 d-flex justify-content-center">
                            <i class="bi bi-calendar-check"></i> Đặt lịch lái
                            thử
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== CTA SECTION ==================== -->
        <section class="cta-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="cta-box gold">
                            <div class="cta-content">
                                <h3>Bạn Đang Tìm Kiếm Một Chiếc Xe?</h3>
                                <p>Khám phá bộ sưu tập xe Lexus đa dạng phù hợp
                                    với mọi nhu cầu.</p>
                                <button class="btn-cta"><i
                                        class="bi bi-search"></i> Tìm xe
                                    ngay</button>
                            </div>
                            <div class="cta-icon"><i
                                    class="bi bi-car-front"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-box dark">
                            <div class="cta-content">
                                <h3>Đặt Lịch Lái Thử</h3>
                                <p>Trải nghiệm thực tế để cảm nhận sự khác biệt
                                    của Lexus.</p>
                                <button class="btn-cta"><i
                                        class="bi bi-calendar-check"></i> Đặt
                                    lịch</button>
                            </div>
                            <div class="cta-icon"><i
                                    class="bi bi-calendar-heart"
                                    style="color:var(--lexus-gold);"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== NEWSLETTER SECTION ==================== -->
        <section class="newsletter-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h3 class="newsletter-title">Đăng Ký Nhận Tin</h3>
                        <p class="newsletter-desc">Nhận thông tin mới nhất về
                            sản phẩm, ưu đãi và sự kiện từ Lexus Vietnam.</p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end">
                        <form class="newsletter-form">
                            <input type="email"
                                placeholder="Địa chỉ email của bạn">
                            <button type="submit"><i class="bi bi-send"></i>
                                Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
