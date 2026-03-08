@extends('layouts.web.default')

@section('content')
    <!-- ==================== NAVBAR ==================== -->
    <nav class="navbar-lexus" id="navbar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="lexus-homepage.html" class="nav-brand">LEXUS</a>
                <div class="d-none d-lg-flex align-items-center gap-1">
                    <a href="lexus-homepage.html" class="nav-link-custom">Trang chủ</a>
                    <a href="#" class="nav-link-custom">Sản phẩm</a>
                    <a href="#" class="nav-link-custom">Dịch vụ</a>
                    <a href="lexus-blog.html" class="nav-link-custom active">Tin tức</a>
                    <a href="#" class="nav-link-custom">Liên hệ</a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="btn-lexus d-none d-md-inline-flex">Đặt lịch lái thử</a>
                    <button class="d-lg-none"
                        style="background:none;border:none;color:var(--lexus-white);font-size:1.4rem;">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== ARTICLE HERO ==================== -->
    <section class="article-hero">
        <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=1600&q=85" alt="Lexus RX 500h">
        <div class="ah-overlay">
            <div class="container">
                <div class="ah-content">
                    <ul class="ah-breadcrumb">
                        <li><a href="lexus-homepage.html"><i class="bi bi-house"></i> Trang chủ</a></li>
                        <li class="sep"><i class="bi bi-chevron-right"></i></li>
                        <li><a href="lexus-blog.html">Blog</a></li>
                        <li class="sep"><i class="bi bi-chevron-right"></i></li>
                        <li class="current">Lexus RX 500h</li>
                    </ul>
                    <div class="ah-tags">
                        <span class="aht">Nổi bật</span>
                        <span class="aht secondary">F SPORT</span>
                        <span class="aht secondary">Công nghệ</span>
                    </div>
                    <h1 class="ah-title">Lexus RX 500h F SPORT PERFORMANCE: Định Nghĩa Mới Về SUV Hiệu Năng Cao</h1>
                    <div class="ah-meta">
                        <div class="ahm-author">
                            <img src="https://i.pravatar.cc/80?img=12" alt="Author">
                            <span class="ahm-name">Nguyễn Hoàng Anh</span>
                        </div>
                        <span class="ahm-item"><i class="bi bi-calendar3"></i> 28 Tháng 2, 2026</span>
                        <span class="ahm-item"><i class="bi bi-clock"></i> 10 phút đọc</span>
                        <span class="ahm-item"><i class="bi bi-eye"></i> 8.5K lượt xem</span>
                        <span class="ahm-item"><i class="bi bi-chat"></i> 36 bình luận</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ARTICLE CONTENT ==================== -->
    <div class="container article-wrapper">
        <div class="row g-4">
            <!-- ========= LEFT: ARTICLE ========= -->
            <div class="col-lg-8">
                <div class="article-body anim">

                    <h2 id="sec-intro">Giới Thiệu: Khi Lexus Thách Thức Mọi Giới Hạn</h2>
                    <p>Lexus RX 500h F SPORT PERFORMANCE không chỉ là một chiếc SUV — đây là tuyên ngôn về sự tiến hóa của
                        thương hiệu Lexus trong kỷ nguyên hiệu năng cao. Với hệ thống truyền động <strong>DIRECT4</strong>
                        độc quyền, động cơ hybrid tăng áp 2.4L và thiết kế ngoại thất thể thao đầy ấn tượng, RX 500h đặt ra
                        tiêu chuẩn mới cho phân khúc SUV hạng sang.</p>
                    <p>Trong bài viết này, chúng ta sẽ khám phá chi tiết những công nghệ đột phá, trải nghiệm lái thực tế,
                        và lý do tại sao RX 500h xứng đáng là <strong>"chiếc Lexus thú vị nhất từ trước đến nay"</strong>.
                    </p>

                    <div class="stat-grid">
                        <div class="sg-item">
                            <div class="sg-num">371 HP</div>
                            <div class="sg-label">Công suất tổng hợp</div>
                        </div>
                        <div class="sg-item">
                            <div class="sg-num">5.9s</div>
                            <div class="sg-label">0-100 km/h</div>
                        </div>
                        <div class="sg-item">
                            <div class="sg-num">8.1L</div>
                            <div class="sg-label">Tiêu thụ / 100km</div>
                        </div>
                    </div>

                    <h2 id="sec-direct4">DIRECT4: Cách Mạng Hóa Hệ Thống Dẫn Động</h2>
                    <p>DIRECT4 là hệ thống kiểm soát lực kéo bốn bánh tiên tiến nhất mà Lexus từng phát triển. Không giống
                        như AWD truyền thống chỉ đơn giản phân phối lực kéo giữa trục trước và sau, DIRECT4 có khả năng
                        <strong>điều chỉnh linh hoạt tỷ lệ phân bổ công suất từ 100:0 đến 0:100</strong> trong tích tắc.
                    </p>

                    <div class="highlight-box">
                        <div class="hb-title"><i class="bi bi-lightning-charge-fill"></i> DIRECT4 Hoạt Động Như Thế Nào?
                        </div>
                        <p>Hệ thống sử dụng động cơ điện riêng biệt ở cầu sau, kết hợp với bộ điều khiển điện tử thông minh
                            để phân tích hàng nghìn dữ liệu mỗi giây — từ góc lái, gia tốc, độ bám đường đến phong cách lái
                            của người điều khiển. Kết quả là khả năng phản hồi tức thì, ổn định tuyệt đối và cảm giác lái
                            "như gắn liền với mặt đường".</p>
                    </div>

                    <p>Khi tăng tốc mạnh, hệ thống tự động chuyển nhiều lực kéo ra cầu sau để tối ưu độ bám. Khi vào cua
                        gấp, DIRECT4 điều chỉnh lực kéo giữa các bánh để tạo ra hiệu ứng oversteering kiểm soát được — điều
                        hiếm thấy trên một chiếc SUV gia đình.</p>

                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=1000&q=85"
                            alt="Lexus RX 500h DIRECT4">
                        <div class="img-caption">Hệ thống DIRECT4 phân phối lực kéo thông minh giữa bốn bánh — Ảnh minh họa
                        </div>
                    </div>

                    <h2 id="sec-engine">Động Cơ Hybrid Turbo 2.4L: Sức Mạnh Trong Sự Tinh Tế</h2>
                    <p>Trái tim của RX 500h là khối động cơ 4 xi-lanh tăng áp 2.4L hoàn toàn mới, kết hợp với hệ thống
                        hybrid và motor điện để tạo ra công suất tổng hợp <strong>371 mã lực</strong> và <strong>460
                            Nm</strong> mô-men xoắn. Đây là mẫu Lexus RX mạnh mẽ nhất trong lịch sử.</p>

                    <h3>Hộp Số Tự Động 6 Cấp Đặc Biệt</h3>
                    <p>Thay vì sử dụng hộp số CVT như các mẫu hybrid thông thường, RX 500h được trang bị hộp số tự động 6
                        cấp với bộ ly hợp thông minh. Điều này mang lại cảm giác chuyển số rõ ràng, phản hồi nhanh và loại
                        bỏ hoàn toàn hiện tượng "trôi vòng tua" khó chịu.</p>

                    <blockquote>
                        <p>"RX 500h F SPORT PERFORMANCE là minh chứng cho triết lý 'Experience Amazing' của Lexus. Đây không
                            chỉ là chiếc xe, đây là trải nghiệm — mỗi vòng tua máy, mỗi cú đạp ga đều mang đến cảm xúc."</p>
                        <cite>— Koji Sato, CEO Toyota Motor Corporation</cite>
                    </blockquote>

                    <h2 id="sec-design">Thiết Kế F SPORT: Táo Bạo & Không Khoan Nhượng</h2>
                    <p>RX 500h F SPORT PERFORMANCE sở hữu ngôn ngữ thiết kế Lexus thế hệ mới với những đường nét sắc cạnh,
                        góc cạnh táo bạo hơn so với các phiên bản thông thường. Lưới tản nhiệt spindle đặc trưng được làm
                        mới với họa tiết F SPORT riêng biệt, kết hợp cùng bộ la-zăng hợp kim <strong>21 inch Matte
                            Black</strong> tạo nên vẻ ngoài thể thao đầy ấn tượng.</p>

                    <ul>
                        <li><strong>Cản trước F SPORT</strong> — Thiết kế riêng với khe gió lớn hơn, tạo điểm nhấn thể thao
                        </li>
                        <li><strong>Gương chiếu hậu Gloss Black</strong> — Chi tiết đen bóng tương phản với thân xe</li>
                        <li><strong>Cánh gió đuôi tích hợp</strong> — Tối ưu khí động học ở tốc độ cao</li>
                        <li><strong>Ống xả kép thể thao</strong> — Âm thanh trầm ấm đặc trưng F SPORT</li>
                    </ul>

                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=1000&q=85"
                            alt="Lexus RX 500h Design">
                        <div class="img-caption">Thiết kế ngoại thất F SPORT với ngôn ngữ Lexus thế hệ mới</div>
                    </div>

                    <h2 id="sec-chassis">Khung Gầm & Hệ Thống Treo Cao Cấp</h2>
                    <p>RX 500h được xây dựng trên nền tảng <strong>GA-K</strong> mới nhất của Toyota, với độ cứng xoắn tăng
                        50% so với thế hệ trước. Lexus sử dụng kết hợp 6 loại vật liệu và công nghệ liên kết khác nhau — từ
                        keo kết cấu đàn hồi cao, hàn laser mật độ dày đến các điểm gia cố chiến lược — để tạo ra một khung
                        gầm vừa nhẹ vừa cực kỳ cứng vững.</p>

                    <h3>Hệ Thống Treo AVS Thích Ứng</h3>
                    <p>Adaptive Variable Suspension (AVS) là hệ thống giảm xóc điện tử có khả năng điều chỉnh độ cứng theo
                        thời gian thực. Hệ thống phân tích điều kiện đường xá, tốc độ và phong cách lái để tự động điều
                        chỉnh — mềm mại khi di chuyển trong phố, cứng cáp khi cần vận hành thể thao.</p>

                    <h2 id="sec-interior">Nội Thất: Không Gian Của Sự Tinh Tế</h2>
                    <p>Cabin của RX 500h F SPORT PERFORMANCE là sự kết hợp hoàn hảo giữa thiết kế hiện đại và chất liệu cao
                        cấp. Màn hình trung tâm 14 inch với hệ thống giải trí Lexus Interface thế hệ mới, kết hợp cùng bảng
                        đồng hồ kỹ thuật số 12.3 inch và màn hình HUD chiếu kính lái tạo nên trải nghiệm công nghệ đỉnh cao.
                    </p>

                    <ol>
                        <li><strong>Ghế thể thao F SPORT</strong> — Bọc da Tahara cao cấp với hệ thống điều chỉnh điện 10
                            hướng và thông gió/sưởi</li>
                        <li><strong>Vô-lăng 3 chấu F SPORT</strong> — Tích hợp lẫy chuyển số bằng nhôm và các nút điều khiển
                            cảm ứng</li>
                        <li><strong>Hệ thống âm thanh Mark Levinson 21 loa</strong> — Công suất 1800W, mang đến trải nghiệm
                            âm nhạc đẳng cấp phòng hòa nhạc</li>
                        <li><strong>Đèn viền ambient 64 màu</strong> — Tạo không gian cabin theo tâm trạng</li>
                    </ol>

                    <h2 id="sec-conclusion">Kết Luận: Xứng Đáng Là "Lexus Thú Vị Nhất"</h2>
                    <p>Lexus RX 500h F SPORT PERFORMANCE là bước tiến lớn của thương hiệu trong việc kết hợp sự sang trọng
                        truyền thống với hiệu năng thể thao đích thực. Với hệ thống DIRECT4 độc quyền, động cơ hybrid turbo
                        mạnh mẽ và thiết kế F SPORT táo bạo, đây chính là chiếc SUV dành cho những ai muốn <strong>tất cả
                            trong một</strong> — sự tiện nghi, hiệu quả nhiên liệu và niềm đam mê lái xe.</p>
                    <p>Với mức giá từ <strong>4.310.000.000 VNĐ</strong> tại Việt Nam, RX 500h F SPORT PERFORMANCE định vị
                        mình trong phân khúc SUV hạng sang hiệu năng cao, cạnh tranh trực tiếp với BMW X5 M50i, Mercedes-AMG
                        GLE 53 và Porsche Cayenne.</p>

                    <!-- Tags & Share -->
                    <div class="article-actions">
                        <div class="aa-tags">
                            <span class="aat">Lexus</span>
                            <span class="aat">RX 500h</span>
                            <span class="aat">F SPORT</span>
                            <span class="aat">DIRECT4</span>
                            <span class="aat">Hybrid</span>
                            <span class="aat">SUV</span>
                        </div>
                        <div class="aa-share">
                            <span>Chia sẻ:</span>
                            <button class="share-btn fb" title="Facebook"><i class="bi bi-facebook"></i></button>
                            <button class="share-btn tw" title="X / Twitter"><i class="bi bi-twitter-x"></i></button>
                            <button class="share-btn ln" title="LinkedIn"><i class="bi bi-linkedin"></i></button>
                            <button class="share-btn wa" title="WhatsApp"><i class="bi bi-whatsapp"></i></button>
                            <button class="share-btn cp" title="Copy link" onclick="copyLink(this)"><i
                                    class="bi bi-link-45deg"></i></button>
                        </div>
                    </div>
                </div>

                <!-- AUTHOR BOX -->
                <div class="author-box anim anim-d1">
                    <img src="https://i.pravatar.cc/150?img=12" alt="Author" class="ab-avatar">
                    <div>
                        <div class="ab-name">Nguyễn Hoàng Anh</div>
                        <div class="ab-role">Senior Automotive Journalist</div>
                        <div class="ab-stats">
                            <span><i class="bi bi-file-earmark-text"></i> 86 bài viết</span>
                            <span><i class="bi bi-people"></i> 12.4K followers</span>
                            <span><i class="bi bi-star-fill" style="color:var(--lexus-gold)"></i> 4.9 rating</span>
                        </div>
                        <div class="ab-bio">Chuyên gia về xe sang và công nghệ ô tô với hơn 10 năm kinh nghiệm. Cựu biên
                            tập viên tại AutoExpress Vietnam, hiện là cây bút chính tại Lexus Vietnam Blog.</div>
                        <div class="ab-socials">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>
                </div>

                <!-- POST NAVIGATION -->
                <div class="post-nav anim anim-d2">
                    <a href="#" class="pn-item prev">
                        <span class="pn-label"><i class="bi bi-arrow-left"></i> Bài trước</span>
                        <span class="pn-title">Công Nghệ DIRECT4: Cách Mạng Hóa Hệ Thống Dẫn Động</span>
                    </a>
                    <a href="#" class="pn-item next">
                        <span class="pn-label">Bài tiếp <i class="bi bi-arrow-right"></i></span>
                        <span class="pn-title">Lexus GX 550 2026: SUV Off-road Đẳng Cấp Mới</span>
                    </a>
                </div>

                <!-- COMMENTS -->
                <div class="comments-section anim anim-d3">
                    <div class="comments-title">
                        <i class="bi bi-chat-dots-fill" style="color:var(--lexus-gold)"></i>
                        Bình Luận <span class="ct-count">36</span>
                    </div>

                    <!-- Comment 1 -->
                    <div class="comment-item">
                        <img src="https://i.pravatar.cc/80?img=33" alt="User" class="ci-avatar">
                        <div style="flex:1;">
                            <div class="ci-header">
                                <span class="ci-name">Trần Văn Nam</span>
                                <span class="ci-badge">Top Commenter</span>
                                <span class="ci-date">2 ngày trước</span>
                            </div>
                            <div class="ci-text">Bài viết rất chi tiết! Mình đã đi lái thử RX 500h tuần trước và thực sự ấn
                                tượng với hệ thống DIRECT4. Cảm giác lái hoàn toàn khác biệt so với các SUV khác mình từng
                                trải nghiệm.</div>
                            <div class="ci-actions">
                                <button onclick="likeComment(this)"><i class="bi bi-hand-thumbs-up"></i>
                                    <span>28</span></button>
                                <button><i class="bi bi-reply"></i> Trả lời</button>
                                <button><i class="bi bi-flag"></i> Báo cáo</button>
                            </div>

                            <!-- Reply -->
                            <div class="comment-reply">
                                <div class="comment-item" style="border-bottom:none;padding-bottom:0;">
                                    <img src="https://i.pravatar.cc/80?img=12" alt="Author" class="ci-avatar">
                                    <div style="flex:1;">
                                        <div class="ci-header">
                                            <span class="ci-name">Nguyễn Hoàng Anh</span>
                                            <span class="ci-badge"
                                                style="background:rgba(46,139,87,0.15);color:var(--lexus-green);">Tác
                                                giả</span>
                                            <span class="ci-date">1 ngày trước</span>
                                        </div>
                                        <div class="ci-text">Cảm ơn bạn đã chia sẻ! DIRECT4 thực sự là điểm nhấn lớn nhất
                                            của RX 500h. Nếu có dịp, bạn nên thử chế độ Sport+ để cảm nhận hết sức mạnh của
                                            nó.</div>
                                        <div class="ci-actions">
                                            <button onclick="likeComment(this)"><i class="bi bi-hand-thumbs-up"></i>
                                                <span>15</span></button>
                                            <button><i class="bi bi-reply"></i> Trả lời</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="comment-item">
                        <img src="https://i.pravatar.cc/80?img=5" alt="User" class="ci-avatar">
                        <div style="flex:1;">
                            <div class="ci-header">
                                <span class="ci-name">Phạm Thu Hương</span>
                                <span class="ci-date">3 ngày trước</span>
                            </div>
                            <div class="ci-text">Giá 4.3 tỷ khá cạnh tranh so với BMW X5 M50i và Mercedes GLE 53. Điểm cộng
                                lớn là tiêu thụ nhiên liệu chỉ 8.1L/100km — tiết kiệm hơn nhiều so với đối thủ!</div>
                            <div class="ci-actions">
                                <button onclick="likeComment(this)"><i class="bi bi-hand-thumbs-up"></i>
                                    <span>19</span></button>
                                <button><i class="bi bi-reply"></i> Trả lời</button>
                                <button><i class="bi bi-flag"></i> Báo cáo</button>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 3 -->
                    <div class="comment-item">
                        <img src="https://i.pravatar.cc/80?img=20" alt="User" class="ci-avatar">
                        <div style="flex:1;">
                            <div class="ci-header">
                                <span class="ci-name">Lê Quốc Đạt</span>
                                <span class="ci-date">5 ngày trước</span>
                            </div>
                            <div class="ci-text">Mình đang phân vân giữa RX 500h và NX 450h+. Không biết có bài so sánh chi
                                tiết giữa hai mẫu này không ạ?</div>
                            <div class="ci-actions">
                                <button onclick="likeComment(this)"><i class="bi bi-hand-thumbs-up"></i>
                                    <span>8</span></button>
                                <button><i class="bi bi-reply"></i> Trả lời</button>
                                <button><i class="bi bi-flag"></i> Báo cáo</button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center" style="padding-top:12px;">
                        <button
                            style="background:var(--lexus-gray);border:none;border-radius:var(--radius);padding:12px 28px;font-size:0.85rem;font-weight:600;color:var(--lexus-text);cursor:pointer;transition:var(--transition);"
                            onmouseover="this.style.background='var(--lexus-gold)';this.style.color='var(--lexus-black)'"
                            onmouseout="this.style.background='var(--lexus-gray)';this.style.color='var(--lexus-text)'">Xem
                            thêm bình luận</button>
                    </div>

                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="cf-title">Để lại bình luận của bạn</div>
                        <form onsubmit="submitComment(event)">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <input type="text" class="cf-input" placeholder="Họ và tên *" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="cf-input" placeholder="Email *" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="cf-input" placeholder="Viết bình luận của bạn..."></textarea>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <label
                                        style="font-size:0.82rem;color:var(--lexus-text-muted);display:flex;align-items:center;gap:8px;cursor:pointer;">
                                        <input type="checkbox"
                                            style="accent-color:var(--lexus-gold);width:16px;height:16px;"> Lưu thông tin
                                        cho lần sau
                                    </label>
                                    <button type="submit" class="cf-submit" id="commentSubmitBtn">
                                        <i class="bi bi-send-fill"></i> Gửi Bình Luận
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ========= RIGHT: SIDEBAR ========= -->
            <div class="col-lg-4">
                <!-- Table of Contents -->
                <div class="sidebar-card anim" style="position:sticky;top:80px;">
                    <div class="sidebar-title"><i class="bi bi-list-nested"></i> Mục Lục</div>
                    <ul class="toc-list" id="tocList">
                        <li class="active" onclick="scrollToSection('sec-intro', this)">Giới Thiệu: Khi Lexus Thách Thức
                            Mọi Giới Hạn</li>
                        <li onclick="scrollToSection('sec-direct4', this)">DIRECT4: Cách Mạng Hóa Hệ Thống Dẫn Động</li>
                        <li onclick="scrollToSection('sec-engine', this)">Động Cơ Hybrid Turbo 2.4L</li>
                        <li onclick="scrollToSection('sec-design', this)">Thiết Kế F SPORT</li>
                        <li onclick="scrollToSection('sec-chassis', this)">Khung Gầm & Hệ Thống Treo</li>
                        <li onclick="scrollToSection('sec-interior', this)">Nội Thất: Không Gian Tinh Tế</li>
                        <li onclick="scrollToSection('sec-conclusion', this)">Kết Luận</li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="sidebar-card anim anim-d1">
                    <div class="sidebar-title"><i class="bi bi-clock-history"></i> Bài Viết Liên Quan</div>
                    <div class="recent-post">
                        <div class="rp-img"><img
                                src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=200&q=60"
                                alt="Post"></div>
                        <div>
                            <div class="rp-title"><a href="#">Công Nghệ DIRECT4 Cách Mạng Hóa Dẫn Động</a></div>
                            <div class="rp-date"><i class="bi bi-calendar3"></i> 25 Tháng 2, 2026</div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="rp-img"><img
                                src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=200&q=60"
                                alt="Post"></div>
                        <div>
                            <div class="rp-title"><a href="#">Lexus GX 550: Giá Bán Chính Thức Tại VN</a></div>
                            <div class="rp-date"><i class="bi bi-calendar3"></i> 22 Tháng 2, 2026</div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="rp-img"><img
                                src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=200&q=60"
                                alt="Post"></div>
                        <div>
                            <div class="rp-title"><a href="#">Đánh Giá Lexus ES 300h 2026</a></div>
                            <div class="rp-date"><i class="bi bi-calendar3"></i> 18 Tháng 2, 2026</div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="rp-img"><img
                                src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=200&q=60" alt="Post">
                        </div>
                        <div>
                            <div class="rp-title"><a href="#">LC 500 Convertible: Grand Tourer Hoàn Hảo</a></div>
                            <div class="rp-date"><i class="bi bi-calendar3"></i> 28 Tháng 1, 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="sidebar-card anim anim-d2">
                    <div class="sidebar-title"><i class="bi bi-tags"></i> Tags</div>
                    <div class="tag-cloud">
                        <span class="tag active">RX 500h</span>
                        <span class="tag">F SPORT</span>
                        <span class="tag">DIRECT4</span>
                        <span class="tag">Hybrid</span>
                        <span class="tag">SUV</span>
                        <span class="tag">Lexus</span>
                        <span class="tag">Performance</span>
                        <span class="tag">Luxury</span>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="sb-newsletter anim anim-d3">
                    <div class="sbn-icon"><i class="bi bi-envelope-paper-fill"></i></div>
                    <h5>Đăng Ký Nhận Tin</h5>
                    <p>Nhận bài viết mới nhất và ưu đãi độc quyền từ Lexus Vietnam.</p>
                    <input type="email" placeholder="Email của bạn...">
                    <button class="btn-nl" onclick="subscribeNL(this)"><i class="bi bi-send-fill"></i> Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== RELATED POSTS ==================== -->
    <section class="related-section">
        <div class="container">
            <div class="sec-head">
                <h2>Bài Viết Tương Tự</h2>
                <a href="lexus-blog.html" class="view-all">Xem tất cả <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?w=600&q=80"
                                alt="Blog">
                            <span class="bc-tag">Công nghệ</span>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 25 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Công Nghệ DIRECT4: Cách Mạng Hóa Hệ Thống Dẫn Động 4
                                    Bánh</a></h3>
                            <p class="bc-excerpt">Tìm hiểu công nghệ DIRECT4 độc quyền của Lexus — hệ thống kiểm soát dẫn
                                động bốn bánh thông minh.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=3" alt="Author">
                                    <div class="bca-name">Trần Minh</div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 3.2K</span>
                                    <span><i class="bi bi-chat"></i> 24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=600&q=80"
                                alt="Blog">
                            <span class="bc-tag">Tin tức</span>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 22 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Lexus Việt Nam Công Bố Giá Bán Chính Thức Cho GX
                                    550</a></h3>
                            <p class="bc-excerpt">GX 550 2026 chính thức ra mắt tại Việt Nam với giá từ 6.2 tỷ đồng.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=7" alt="Author">
                                    <div class="bca-name">Lê Thu Hà</div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 5.8K</span>
                                    <span><i class="bi bi-chat"></i> 42</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="bc-img">
                            <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=600&q=80"
                                alt="Blog">
                            <span class="bc-tag">Đánh giá</span>
                        </div>
                        <div class="bc-body">
                            <div class="bc-date"><i class="bi bi-calendar3"></i> 18 Tháng 2, 2026</div>
                            <h3 class="bc-title"><a href="#">Đánh Giá Chi Tiết Lexus ES 300h 2026: Sedan Hybrid Hoàn
                                    Hảo</a></h3>
                            <p class="bc-excerpt">Trải nghiệm thực tế ES 300h mới — từ cabin yên tĩnh đến tiết kiệm nhiên
                                liệu.</p>
                            <div class="bc-footer">
                                <div class="bc-author">
                                    <img src="https://i.pravatar.cc/80?img=11" alt="Author">
                                    <div class="bca-name">Phạm Đức</div>
                                </div>
                                <div class="bc-stats">
                                    <span><i class="bi bi-eye"></i> 4.1K</span>
                                    <span><i class="bi bi-chat"></i> 31</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        // ======= Reading Progress Bar =======
        window.addEventListener('scroll', () => {
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = (window.scrollY / docHeight) * 100;
            document.getElementById('readingProgress').style.width = scrolled + '%';

            // Navbar
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 100);

            // Back to top
            const btt = document.getElementById('backToTop');
            btt.classList.toggle('show', window.scrollY > 400);

            // Float share
            const fs = document.getElementById('floatShare');
            fs.classList.toggle('show', window.scrollY > 600);
        });

        // ======= TOC Scroll =======
        function scrollToSection(id, item) {
            const target = document.getElementById(id);
            const navHeight = 80;
            const targetPosition = target.getBoundingClientRect().top + window.scrollY - navHeight;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
            document.querySelectorAll('#tocList li').forEach(li => li.classList.remove('active'));
            item.classList.add('active');
        }

        // Auto-highlight TOC on scroll
        const sections = document.querySelectorAll('.article-body h2[id]');
        const tocItems = document.querySelectorAll('#tocList li');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    tocItems.forEach(li => {
                        li.classList.toggle('active', li.getAttribute('onclick')?.includes(id));
                    });
                }
            });
        }, {
            rootMargin: '-100px 0px -60% 0px'
        });
        sections.forEach(sec => observer.observe(sec));

        // ======= Like Comment =======
        function likeComment(btn) {
            const span = btn.querySelector('span');
            const icon = btn.querySelector('i');
            if (icon.classList.contains('bi-hand-thumbs-up')) {
                icon.classList.replace('bi-hand-thumbs-up', 'bi-hand-thumbs-up-fill');
                btn.style.color = 'var(--lexus-gold)';
                span.textContent = parseInt(span.textContent) + 1;
            } else {
                icon.classList.replace('bi-hand-thumbs-up-fill', 'bi-hand-thumbs-up');
                btn.style.color = '';
                span.textContent = parseInt(span.textContent) - 1;
            }
        }

        // ======= Submit Comment =======
        function submitComment(e) {
            e.preventDefault();
            const btn = document.getElementById('commentSubmitBtn');
            btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Đang gửi...';
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-check-circle-fill"></i> Đã gửi thành công!';
                btn.style.background = 'var(--lexus-green)';
                setTimeout(() => {
                    btn.innerHTML = '<i class="bi bi-send-fill"></i> Gửi Bình Luận';
                    btn.style.background = '';
                    btn.disabled = false;
                    e.target.reset();
                }, 2500);
            }, 1500);
        }

        // ======= Copy Link =======
        function copyLink(btn) {
            navigator.clipboard.writeText(window.location.href).then(() => {
                const icon = btn.querySelector('i');
                icon.classList.replace('bi-link-45deg', 'bi-check-lg');
                setTimeout(() => icon.classList.replace('bi-check-lg', 'bi-link-45deg'), 2000);
            });
        }

        // ======= Newsletter Subscribe =======
        function subscribeNL(btn) {
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

        // ======= Tag Click =======
        document.querySelectorAll('.tag-cloud .tag').forEach(tag => {
            tag.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    </script>
@endpush
