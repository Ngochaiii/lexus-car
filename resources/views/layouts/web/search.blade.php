<!-- ==================== SEARCH SECTION (simplified) ==================== -->
        <section class="search-section" id="search">
            <div class="container">
                <div class="search-box">

                    <!-- Category tabs -->
                    <div class="search-tabs" id="searchTabs">
                        <button class="search-tab active" data-cat="all">Tất cả
                            xe</button>
                        <button class="search-tab" data-cat="suv">SUV</button>
                        <button class="search-tab"
                            data-cat="sedan">Sedan</button>
                        <button class="search-tab"
                            data-cat="coupe">Coupe</button>
                        <button class="search-tab" data-cat="hybrid">Hybrid /
                            EV</button>
                    </div>

                    <!-- Single name search -->
                    <div class="search-form-simple">
                        <div class="search-input-wrap">
                            <label for="searchInput">Tìm kiếm theo tên
                                xe</label>
                            <i class="bi bi-search si-icon"></i>
                            <input type="text" id="searchInput"
                                placeholder="Nhập tên xe, dòng xe... vd: RX 500h, NX 350h"
                                autocomplete="off">
                            <div class="search-live-results" id="liveResults">
                                <div class="slr-item" onclick="goDetail()">
                                    <img class="slr-thumb"
                                        src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?w=100"
                                        alt>
                                    <div><div class="slr-name">Lexus RX
                                            500h</div><div
                                            class="slr-series">SUV Series · F
                                            SPORT PERFORMANCE</div></div>
                                </div>
                                <div class="slr-item">
                                    <img class="slr-thumb"
                                        src="https://images.unsplash.com/photo-1606016159991-dfe4f2746ad5?w=100"
                                        alt>
                                    <div><div class="slr-name">Lexus NX
                                            350h</div><div
                                            class="slr-series">SUV Series · F
                                            SPORT Handling AWD</div></div>
                                </div>
                                <div class="slr-item">
                                    <img class="slr-thumb"
                                        src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=100"
                                        alt>
                                    <div><div class="slr-name">Lexus ES
                                            300h</div><div
                                            class="slr-series">Sedan Series ·
                                            Ultra Luxury</div></div>
                                </div>
                            </div>
                        </div>
                        <button class="btn-search" type="button">
                            <i class="bi bi-search"></i> Tìm kiếm
                        </button>
                    </div>

                    <!-- Quick category pills -->
                    <div class="search-categories">
                        <span>Hạng mục:</span>
                        <button class="cat-pill active">Tất cả</button>
                        <button class="cat-pill">SUV Hạng sang</button>
                        <button class="cat-pill">Sedan điều hành</button>
                        <button class="cat-pill">Hybrid & Điện</button>
                        <button class="cat-pill">Coupe & Convertible</button>
                        <button class="cat-pill">Flagship</button>
                    </div>

                </div>
            </div>
        </section>
