@extends('layouts.web.default')

@section('content')
    <!-- ==================== PAGE HERO ==================== -->
<section class="page-hero">
    <div class="container">
        <ul class="breadcrumb-hero">
            <li><a href="lexus-homepage.html"><i class="bi bi-house"></i> Trang chủ</a></li>
            <li class="sep"><i class="bi bi-chevron-right"></i></li>
            <li class="current">Blog & Tin Tức</li>
        </ul>
        <h1>Blog & Tin Tức</h1>
        <p>Khám phá những thông tin mới nhất về Lexus, xu hướng ô tô và trải nghiệm lái xe đẳng cấp.</p>
        <div class="hero-search-blog">
            <input type="text" class="form-control" placeholder="Tìm kiếm bài viết..." id="blogSearch" onkeyup="searchBlog(this.value)">
            <i class="bi bi-search search-icon"></i>
        </div>
        <div class="hero-stats">
            <div class="hs-item"><strong>128</strong>Bài viết</div>
            <div class="hs-item"><strong>8</strong>Chủ đề</div>
            <div class="hs-item"><strong>25K</strong>Độc giả/tháng</div>
        </div>
    </div>
</section>

<!-- ==================== FILTER BAR ==================== -->
<div class="blog-filter-bar">
    <div class="container">
        <div class="blog-filter-inner">
            <div class="cat-tabs" id="categoryTabs">
                <button class="ct active" onclick="filterCategory(this,'all')">Tất cả</button>
                <button class="ct" onclick="filterCategory(this,'news')">Tin tức</button>
                <button class="ct" onclick="filterCategory(this,'reviews')">Đánh giá xe</button>
                <button class="ct" onclick="filterCategory(this,'technology')">Công nghệ</button>
                <button class="ct" onclick="filterCategory(this,'lifestyle')">Phong cách sống</button>
                <button class="ct" onclick="filterCategory(this,'events')">Sự kiện</button>
            </div>
            <div class="d-flex align-items-center gap-2">
                <select class="sort-select">
                    <option>Mới nhất</option>
                    <option>Phổ biến nhất</option>
                    <option>Cũ nhất</option>
                </select>
                <div class="view-toggle">
                    <button class="vt-btn active" id="gridViewBtn" onclick="setView('grid')"><i class="bi bi-grid-3x3-gap"></i></button>
                    <button class="vt-btn" id="listViewBtn" onclick="setView('list')"><i class="bi bi-list-ul"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MAIN CONTENT ==================== -->
<div class="container" style="padding-top:40px; padding-bottom:60px;">
    <div class="row g-4">
        <!-- ========= LEFT: BLOG CONTENT ========= -->
        <div class="col-lg-8">
            <!-- FEATURED POST -->
            <div class="featured-post anim">
                <div class="fp-img">
                    <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1200&q=85" alt="Featured">
                    <div class="fp-overlay">
                        <span class="fp-badge"><i class="bi bi-star-fill"></i> Nổi bật</span>
                        <h2 class="fp-title"><a href="lexus-rx500h-detail.html">Lexus RX 500h F SPORT PERFORMANCE: Định Nghĩa Mới Về SUV Hiệu Năng Cao</a></h2>
                        <p class="fp-excerpt">Khám phá những đột phá công nghệ trên RX 500h với hệ thống DIRECT4, động cơ hybrid tăng áp 2.4L và thiết kế ngoại thất thể thao đầy ấn tượng.</p>
                        <div class="fp-meta">
                            <img src="https://i.pravatar.cc/80?img=12" alt="Author">
                            <span class="fm-author">Nguyễn Hoàng Anh</span>
                            <span>·</span>
                            <span>28 Tháng 2, 2026</span>
                            <span>·</span>
                            <span class="fp-read-time"><i class="bi bi-clock"></i> 8 phút đọc</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BLOG GRID -->
            <div class="row g-4" id="blogGrid">
                <!-- Card 1 -->
                <div class="col-md-6 blog-item anim anim-d1" data-category="technology">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Công nghệ</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 25 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Công Nghệ DIRECT4: Cách Mạng Hóa Hệ Thống Dẫn Động 4 Bánh</a></h3>
                            <p class="bc-excerpt">Tìm hiểu công nghệ DIRECT4 độc quyền của Lexus — hệ thống kiểm soát dẫn động bốn bánh thông minh mang đến trải nghiệm lái vượt trội.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=3" alt="Author">
                                    <div>
                                        <div class="bca-name">Trần Minh</div>
                                        <div class="bca-role">Chuyên gia công nghệ</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 3.2K</span>
                                    <span><i class="bi bi-chat"></i> 24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 blog-item anim anim-d2" data-category="news">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Tin tức</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 22 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Lexus Việt Nam Công Bố Giá Bán Chính Thức Cho GX 550 Thế Hệ Mới</a></h3>
                            <p class="bc-excerpt">GX 550 2026 chính thức ra mắt tại Việt Nam với giá từ 6.2 tỷ đồng, cạnh tranh trực tiếp với Land Cruiser và Mercedes GLS.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=7" alt="Author">
                                    <div>
                                        <div class="bca-name">Lê Thu Hà</div>
                                        <div class="bca-role">Phóng viên</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 5.8K</span>
                                    <span><i class="bi bi-chat"></i> 42</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 blog-item anim anim-d3" data-category="reviews">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Đánh giá</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 18 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Đánh Giá Chi Tiết Lexus ES 300h 2026: Sedan Hybrid Hoàn Hảo</a></h3>
                            <p class="bc-excerpt">Trải nghiệm thực tế ES 300h mới — từ cabin yên tĩnh hàng đầu phân khúc đến khả năng tiết kiệm nhiên liệu ấn tượng.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=11" alt="Author">
                                    <div>
                                        <div class="bca-name">Phạm Đức</div>
                                        <div class="bca-role">Biên tập viên</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 4.1K</span>
                                    <span><i class="bi bi-chat"></i> 31</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 blog-item anim anim-d4" data-category="lifestyle">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Phong cách</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 14 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">5 Cung Đường Tuyệt Đẹp Cho Hành Trình Road Trip Cùng Lexus</a></h3>
                            <p class="bc-excerpt">Những cung đường lái xe đẹp nhất Việt Nam để trải nghiệm cùng gia đình — từ Hải Vân đến Mù Cang Chải.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=15" alt="Author">
                                    <div>
                                        <div class="bca-name">Mai Linh</div>
                                        <div class="bca-role">Travel Writer</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 6.3K</span>
                                    <span><i class="bi bi-chat"></i> 48</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 blog-item anim anim-d5" data-category="events">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Sự kiện</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 10 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Lexus Vietnam Tổ Chức Chương Trình Lái Thử Toàn Quốc 2026</a></h3>
                            <p class="bc-excerpt">Sự kiện Experience Amazing Tour sẽ diễn ra tại 10 tỉnh thành, mang đến cơ hội trải nghiệm toàn bộ dàn xe Lexus.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=20" alt="Author">
                                    <div>
                                        <div class="bca-name">Vũ Thành</div>
                                        <div class="bca-role">Event Reporter</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 2.8K</span>
                                    <span><i class="bi bi-chat"></i> 19</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-6 blog-item anim anim-d6" data-category="technology">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Công nghệ</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 05 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Lexus Safety System+ 3.0: Nâng Tầm An Toàn Chủ Động</a></h3>
                            <p class="bc-excerpt">Tìm hiểu những tính năng an toàn tiên tiến nhất trên thế hệ LSS+ mới của Lexus, từ Pre-Collision đến Lane Tracing Assist.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=25" alt="Author">
                                    <div>
                                        <div class="bca-name">Hoàng Nam</div>
                                        <div class="bca-role">Safety Expert</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 3.9K</span>
                                    <span><i class="bi bi-chat"></i> 27</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-md-6 blog-item" data-category="reviews">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Đánh giá</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 28 Tháng 1, 2026</div>
                            <h3 class="bc-title"><a href="#">LC 500 Convertible: Chiếc Grand Tourer Hoàn Hảo Từ Lexus</a></h3>
                            <p class="bc-excerpt">Đánh giá LC 500 Convertible — sự kết hợp hoàn hảo giữa thiết kế tuyệt đẹp, động cơ V8 mạnh mẽ và trải nghiệm lái thượng hạng.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=30" alt="Author">
                                    <div>
                                        <div class="bca-name">Đặng Khoa</div>
                                        <div class="bca-role">Auto Reviewer</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 7.2K</span>
                                    <span><i class="bi bi-chat"></i> 56</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="col-md-6 blog-item" data-category="news">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=600&q=80" alt="Blog">
                            <span class="bc-tag">Tin tức</span>
                            <button class="bc-bookmark" onclick="toggleBookmark(this)"><i class="bi bi-bookmark"></i></button>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 20 Tháng 1, 2026</div>
                            <h3 class="bc-title"><a href="#">Lexus Xác Nhận Ra Mắt Mẫu SUV Điện Đầu Tiên Tại Việt Nam</a></h3>
                            <p class="bc-excerpt">RZ 450e sẽ chính thức có mặt tại thị trường Việt Nam trong quý 2/2026, đánh dấu bước tiến vào kỷ nguyên xe điện của Lexus.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=35" alt="Author">
                                    <div>
                                        <div class="bca-name">Bùi Hải</div>
                                        <div class="bca-role">News Reporter</div>
                                    </div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 9.1K</span>
                                    <span><i class="bi bi-chat"></i> 72</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results -->
            <div id="noResults" style="display:none;">
                <i class="bi bi-search"></i>
                <h5>Không tìm thấy bài viết</h5>
                <p>Thử thay đổi từ khóa hoặc chọn chủ đề khác.</p>
            </div>

            <!-- PAGINATION -->
            <div class="pagination-custom" id="pagination">
                <button class="pg-btn disabled"><i class="bi bi-chevron-left"></i></button>
                <button class="pg-btn active">1</button>
                <button class="pg-btn">2</button>
                <button class="pg-btn">3</button>
                <span class="pg-dots">...</span>
                <button class="pg-btn">8</button>
                <button class="pg-btn"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>

        <!-- ========= RIGHT: SIDEBAR ========= -->
        <div class="col-lg-4">
            <!-- Search -->
            <div class="sidebar-card anim">
                <div class="sidebar-title"><i class="bi bi-search"></i> Tìm Kiếm</div>
                <div class="sb-search">
                    <input type="text" class="form-control" placeholder="Tìm bài viết..." onkeyup="searchBlog(this.value)">
                    <button class="sb-icon"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <!-- Categories -->
            <div class="sidebar-card anim anim-d1">
                <div class="sidebar-title"><i class="bi bi-folder2-open"></i> Chủ Đề</div>
                <ul class="cat-list">
                    <li onclick="filterCategory(document.querySelector('.ct[onclick*=news]'),'news')">
                        <span><i class="bi bi-newspaper me-2" style="color:var(--lexus-gold);"></i>Tin Tức</span>
                        <span class="cat-count">24</span>
                    </li>
                    <li onclick="filterCategory(document.querySelector('.ct[onclick*=reviews]'),'reviews')">
                        <span><i class="bi bi-star me-2" style="color:var(--lexus-gold);"></i>Đánh Giá Xe</span>
                        <span class="cat-count">32</span>
                    </li>
                    <li onclick="filterCategory(document.querySelector('.ct[onclick*=technology]'),'technology')">
                        <span><i class="bi bi-cpu me-2" style="color:var(--lexus-gold);"></i>Công Nghệ</span>
                        <span class="cat-count">28</span>
                    </li>
                    <li onclick="filterCategory(document.querySelector('.ct[onclick*=lifestyle]'),'lifestyle')">
                        <span><i class="bi bi-sun me-2" style="color:var(--lexus-gold);"></i>Phong Cách Sống</span>
                        <span class="cat-count">18</span>
                    </li>
                    <li onclick="filterCategory(document.querySelector('.ct[onclick*=events]'),'events')">
                        <span><i class="bi bi-calendar-event me-2" style="color:var(--lexus-gold);"></i>Sự Kiện</span>
                        <span class="cat-count">14</span>
                    </li>
                    <li>
                        <span><i class="bi bi-tools me-2" style="color:var(--lexus-gold);"></i>Bảo Dưỡng</span>
                        <span class="cat-count">12</span>
                    </li>
                </ul>
            </div>

            <!-- Recent Posts -->
            <div class="sidebar-card anim anim-d2">
                <div class="sidebar-title"><i class="bi bi-clock-history"></i> Bài Viết Gần Đây</div>
                <div class="recent-post">
                    <div class="rp-img"><img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=200&q=60" alt="Post"></div>
                    <div>
                        <div class="rp-title"><a href="lexus-rx500h-detail.html">Lexus RX 500h F SPORT PERFORMANCE</a></div>
                        <div class="rp-date"><i class="bi bi-calendar3"></i> 28 Tháng 2, 2026</div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="rp-img"><img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=200&q=60" alt="Post"></div>
                    <div>
                        <div class="rp-title"><a href="#">Công Nghệ DIRECT4 Cách Mạng</a></div>
                        <div class="rp-date"><i class="bi bi-calendar3"></i> 25 Tháng 2, 2026</div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="rp-img"><img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=200&q=60" alt="Post"></div>
                    <div>
                        <div class="rp-title"><a href="#">Giá Bán GX 550 Thế Hệ Mới</a></div>
                        <div class="rp-date"><i class="bi bi-calendar3"></i> 22 Tháng 2, 2026</div>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="rp-img"><img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=200&q=60" alt="Post"></div>
                    <div>
                        <div class="rp-title"><a href="#">Đánh Giá ES 300h 2026</a></div>
                        <div class="rp-date"><i class="bi bi-calendar3"></i> 18 Tháng 2, 2026</div>
                    </div>
                </div>
            </div>

            <!-- Tags -->
            <div class="sidebar-card anim anim-d3">
                <div class="sidebar-title"><i class="bi bi-tags"></i> Tags Phổ Biến</div>
                <div class="tag-cloud">
                    <span class="tag active">RX 500h</span>
                    <span class="tag">F SPORT</span>
                    <span class="tag">Hybrid</span>
                    <span class="tag">DIRECT4</span>
                    <span class="tag">SUV</span>
                    <span class="tag">Sedan</span>
                    <span class="tag">ES 300h</span>
                    <span class="tag">LX 600</span>
                    <span class="tag">NX</span>
                    <span class="tag">Electric</span>
                    <span class="tag">Safety</span>
                    <span class="tag">Luxury</span>
                </div>
            </div>

            <!-- Newsletter Sidebar -->
            <div class="sb-newsletter anim anim-d4">
                <div class="sbn-icon"><i class="bi bi-envelope-paper-fill"></i></div>
                <h5>Đăng Ký Nhận Tin</h5>
                <p>Nhận bài viết mới nhất và ưu đãi độc quyền từ Lexus Vietnam.</p>
                <input type="email" placeholder="Email của bạn...">
                <button class="btn-nl" onclick="subscribeNewsletter(this)"><i class="bi bi-send-fill"></i> Đăng Ký</button>
            </div>

            <!-- Ad Banner -->
            <div class="sb-ad anim anim-d5">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=600&q=80" alt="Promo">
                <div class="ad-overlay">
                    <div class="ad-label">Ưu Đãi Đặc Biệt</div>
                    <div class="ad-title">Trải Nghiệm Lái Thử RX 500h Ngay Hôm Nay</div>
                    <button class="ad-btn"><i class="bi bi-arrow-right"></i> Đặt Lịch</button>
                </div>
            </div>

            <!-- Social Follow -->
            <div class="sidebar-card anim anim-d6">
                <div class="sidebar-title"><i class="bi bi-share"></i> Theo Dõi Lexus</div>
                <div class="social-follow">
                    <a href="#" class="fb"><i class="bi bi-facebook"></i> 85K</a>
                    <a href="#" class="ig"><i class="bi bi-instagram"></i> 62K</a>
                    <a href="#" class="yt"><i class="bi bi-youtube"></i> 45K</a>
                    <a href="#" class="tt"><i class="bi bi-tiktok"></i> 28K</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== NEWSLETTER BOTTOM ==================== -->
<section class="newsletter-bottom">
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
    // ======= Category Filter =======
    let currentCategory = 'all';
    function filterCategory(btn, cat) {
        currentCategory = cat;
        document.querySelectorAll('#categoryTabs .ct').forEach(t => t.classList.remove('active'));
        if (btn) btn.classList.add('active');

        const items = document.querySelectorAll('.blog-item');
        let visibleCount = 0;
        items.forEach(item => {
            if (cat === 'all' || item.dataset.category === cat) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
        document.getElementById('pagination').style.display = visibleCount === 0 ? 'none' : 'flex';
    }

    // ======= Blog Search =======
    function searchBlog(query) {
        const q = query.toLowerCase().trim();
        const items = document.querySelectorAll('.blog-item');
        let visibleCount = 0;
        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            const matchCat = currentCategory === 'all' || item.dataset.category === currentCategory;
            if (text.includes(q) && matchCat) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });
        document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
        document.getElementById('pagination').style.display = visibleCount === 0 ? 'none' : 'flex';
    }

    // ======= Bookmark Toggle =======
    function toggleBookmark(btn) {
        const icon = btn.querySelector('i');
        if (icon.classList.contains('bi-bookmark')) {
            icon.classList.replace('bi-bookmark', 'bi-bookmark-fill');
            btn.classList.add('saved');
        } else {
            icon.classList.replace('bi-bookmark-fill', 'bi-bookmark');
            btn.classList.remove('saved');
        }
    }

    // ======= View Toggle (Grid/List) =======
    function setView(mode) {
        const grid = document.getElementById('blogGrid');
        const cards = grid.querySelectorAll('.blog-card');
        const cols = grid.querySelectorAll('.blog-item');

        document.getElementById('gridViewBtn').classList.toggle('active', mode === 'grid');
        document.getElementById('listViewBtn').classList.toggle('active', mode === 'list');

        if (mode === 'list') {
            cols.forEach(col => { col.className = col.className.replace('col-md-6', 'col-md-12'); });
            cards.forEach(c => c.classList.add('list-view'));
        } else {
            cols.forEach(col => { col.className = col.className.replace('col-md-12', 'col-md-6'); });
            cards.forEach(c => c.classList.remove('list-view'));
        }
    }

    // ======= Tag Click =======
    document.querySelectorAll('.tag-cloud .tag').forEach(tag => {
        tag.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });

    // ======= Pagination Click =======
    document.querySelectorAll('.pg-btn:not(.disabled)').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.pg-btn').forEach(b => b.classList.remove('active'));
            if (!this.querySelector('i')) this.classList.add('active');
        });
    });

    // ======= Newsletter Subscribe =======
    function subscribeNewsletter(btn) {
        const input = btn.previousElementSibling;
        if (input.value) {
            btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Đã Đăng Ký!';
            btn.style.background = 'var(--lexus-green)';
            input.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-send-fill"></i> Đăng Ký';
                btn.style.background = '';
                input.disabled = false;
                input.value = '';
            }, 3000);
        }
    }

    // ======= Navbar Scroll =======
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
</script>
@endpush
