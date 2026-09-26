<!-- ==================== HERO SECTION ==================== -->
        <section class="hero-section">
            <div class="hero-bg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content">
                            @if (Route::currentRouteName() === 'web.home')
                                <div class="hero-tagline">Tư vấn riêng · Lexus Thăng Long</div>
                                <h1 class="hero-title">
                                    Trải nghiệm Lexus,<br><span class="highlight">có Hữu Lập đồng hành</span>
                                </h1>
                                <p class="hero-desc">
                                    Từ lựa chọn phiên bản, màu xe đến chính sách và lịch lái thử —
                                    Hữu Lập sẵn sàng hỗ trợ Quý khách nhanh chóng, tận tâm 24/7.
                                </p>
                            @else
                                <div class="hero-tagline">Experience Amazing</div>
                                <h1 class="hero-title">
                                    Trải Nghiệm Đẳng Cấp Lexus
                                </h1>
                                <p class="hero-desc">
                                    Trải nghiệm sự hoàn hảo trong từng chi tiết với
                                    các mẫu xe sang trọng, công nghệ tiên tiến và dịch vụ
                                    đẳng cấp từ Lexus Thăng Long.
                                </p>
                            @endif
                            <div class="hero-actions">
                                <a href="#models" class="btn-primary-lexus">
                                    <i class="bi bi-grid-3x3-gap"></i> Khám phá
                                    dòng xe
                                </a>
                                @if (Route::currentRouteName() === 'web.home')
                                    <a href="#tu-van-huu-lap" class="btn-outline-lexus">
                                        <i class="bi bi-person-badge"></i> Gặp Hữu Lập
                                    </a>
                                @else
                                    <a href="{{ route('web.home') }}#tu-van-huu-lap" class="btn-outline-lexus">
                                        <i class="bi bi-headset"></i> Nhận tư vấn
                                    </a>
                                @endif
                            </div>
                            <div class="hero-stats">
                                <div class="hero-stat">
                                    <div class="hero-stat-value">15+</div>
                                    <div class="hero-stat-label">Dòng xe</div>
                                </div>
                                <div class="hero-stat">
                                    <div class="hero-stat-value">Chỉ 1</div>
                                    <div class="hero-stat-label">Đại lý Miền Bắc</div>
                                </div>
                                <div class="hero-stat">
                                    <div class="hero-stat-value">50K+</div>
                                    <div class="hero-stat-label">Khách
                                        hàng</div>
                                </div>
                                <div class="hero-stat">
                                    <div class="hero-stat-value">5★</div>
                                    <div class="hero-stat-label">Đánh giá</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-image">
                            <img
                                src="https://rx350-lexusthanglong.com/web/assets/images/anhcanhan/huu-lap-lexus-gx550.webp?v=1788965331"
                                alt="Hữu Lập bên Lexus GX 550 tại Lexus Thăng Long"
                                width="1440" height="1720"
                                fetchpriority="high"
                                loading="eager"
                                decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </section>
