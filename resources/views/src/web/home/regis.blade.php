@extends('layouts.web.default')

@section('content')
<main class="page-wrap">
<div class="container">
<div class="row g-5 align-items-start">

    <!-- LEFT: Info + Benefits -->
    <div class="col-lg-5">
        <div class="left-panel">
            <div class="eyebrow">Trải Nghiệm Lexus</div>
            <h1 class="page-title">Đăng Ký<br><span class="it">Lái Thử</span></h1>
            <div class="dg"></div>
            <p class="page-desc">Trải nghiệm trực tiếp sức mạnh, sự sang trọng và các công nghệ tiên tiến của Lexus. Chúng tôi sẽ liên hệ để xác nhận lịch hẹn trong vòng 24 giờ.</p>

            <div class="benefits">
                <div class="bfitem">
                    <div class="bfi-ic"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <div class="bfi-title">Linh hoạt thời gian</div>
                        <div class="bfi-sub">Chọn ngày & giờ phù hợp với lịch của bạn, 7 ngày trong tuần</div>
                    </div>
                </div>
                <div class="bfitem">
                    <div class="bfi-ic"><i class="bi bi-person-check-fill"></i></div>
                    <div>
                        <div class="bfi-title">Tư vấn viên riêng</div>
                        <div class="bfi-sub">Chuyên gia Lexus hỗ trợ 1-1 trong suốt quá trình lái thử</div>
                    </div>
                </div>
                <div class="bfitem">
                    <div class="bfi-ic"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <div class="bfi-title">Tại showroom gần nhất</div>
                        <div class="bfi-sub">Hà Nội · TP.HCM · Đà Nẵng · Hải Phòng và 8 tỉnh thành khác</div>
                    </div>
                </div>
                <div class="bfitem">
                    <div class="bfi-ic"><i class="bi bi-shield-fill-check"></i></div>
                    <div>
                        <div class="bfi-title">Hoàn toàn miễn phí</div>
                        <div class="bfi-sub">Không phí, không ràng buộc — chỉ cần CMND/CCCD & bằng lái xe</div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="testimonial-strip d-none d-lg-block">
                <div class="ts-title">Khách hàng chia sẻ</div>
                <div class="ts-items">
                    <div class="ts-item">
                        <div class="ts-avatar">N</div>
                        <div>
                            <div class="ts-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <div class="ts-name">Nguyễn Minh Hoàng</div>
                            <div class="ts-model">Lexus RX 500h F SPORT</div>
                            <div class="ts-text">"Trải nghiệm lái thử thực sự thay đổi quan điểm của tôi về sedan hạng sang."</div>
                        </div>
                    </div>
                    <div class="ts-item">
                        <div class="ts-avatar">T</div>
                        <div>
                            <div class="ts-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <div class="ts-name">Trần Thu Hương</div>
                            <div class="ts-model">Lexus NX 350h</div>
                            <div class="ts-text">"Nhân viên rất chuyên nghiệp, tư vấn tận tình. Tôi đã quyết định mua ngay sau lái thử."</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT: Form -->
    <div class="col-lg-7">
        <div class="form-card">

            <!-- Header & Progress -->
            <div class="form-header">
                <div class="fh-step"><i class="bi bi-calendar2-check"></i> Đặt lịch ngay</div>
                <div class="fh-title">Thông tin đăng ký</div>
                <div class="fh-sub">Vui lòng điền đầy đủ để chúng tôi sắp xếp tốt nhất cho bạn</div>

                <div class="progress-steps">
                    <div class="ps active" id="step1-ind">
                        <div class="ps-num">1</div>
                        <span class="d-none d-sm-inline">Thông tin</span>
                    </div>
                    <div class="ps-line"></div>
                    <div class="ps" id="step2-ind">
                        <div class="ps-num">2</div>
                        <span class="d-none d-sm-inline">Chọn xe</span>
                    </div>
                    <div class="ps-line"></div>
                    <div class="ps" id="step3-ind">
                        <div class="ps-num">3</div>
                        <span class="d-none d-sm-inline">Lịch hẹn</span>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="form-state" id="formState">
            <div class="form-body">

                <!-- SECTION 1: Personal -->
                <div class="form-section">
                    <div class="fs-label"><i class="bi bi-person"></i> Thông tin cá nhân</div>

                    <!-- Name -->
                    <div class="input-wrap">
                        <label for="fullname">
                            Họ và tên <span class="lbl-req">*</span>
                        </label>
                        <input id="fullname" type="text" class="inp" placeholder="Ví dụ: Nguyễn Văn An" autocomplete="name">
                        <i class="bi bi-person inp-icon"></i>
                        <i class="bi bi-check-circle-fill inp-valid-ic"></i>
                        <div class="inp-msg" id="msg-name"></div>
                    </div>

                    <!-- Phone -->
                    <div class="input-wrap">
                        <label for="phone">
                            Số điện thoại <span class="lbl-req">*</span>
                        </label>
                        <div class="phone-row">
                            <div class="phone-prefix">
                                <span class="phone-flag">🇻🇳</span>
                                <span>+84</span>
                            </div>
                            <input id="phone" type="tel" class="inp" placeholder="09x xxx xxxx" autocomplete="tel" inputmode="numeric">
                        </div>
                        <div class="inp-msg" id="msg-phone"></div>
                    </div>

                    <!-- Email -->
                    <div class="input-wrap">
                        <label for="email">
                            Email <span class="lbl-opt">Không bắt buộc</span>
                        </label>
                        <input id="email" type="email" class="inp" placeholder="example@gmail.com" autocomplete="email" inputmode="email">
                        <i class="bi bi-envelope inp-icon"></i>
                        <i class="bi bi-check-circle-fill inp-valid-ic"></i>
                        <div class="inp-msg" id="msg-email"></div>
                    </div>
                </div>

                <!-- SECTION 2: Car Model -->
                <div class="form-section">
                    <div class="fs-label"><i class="bi bi-car-front"></i> Mẫu xe quan tâm <span class="lbl-req">*</span></div>

                    <div class="car-grid" id="carGrid">

                        <label class="car-option">
                            <input type="radio" name="car" value="RX 500h F SPORT" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <!-- Inline SVG car silhouette -->
                                    <svg class="car-svg" width="110" height="50" viewBox="0 0 110 50" fill="none">
                                        <path d="M8 34 C8 34 12 20 22 16 L40 12 L70 12 L84 16 C90 18 96 24 99 30 L102 34" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-linejoin="round"/>
                                        <path d="M5 34 L105 34 L102 40 L8 40 Z" fill="rgba(196,160,82,.12)" stroke="#C4A052" stroke-width="1.2"/>
                                        <circle cx="24" cy="41" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="24" cy="41" r="3" fill="#C4A052" opacity=".6"/>
                                        <circle cx="86" cy="41" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="86" cy="41" r="3" fill="#C4A052" opacity=".6"/>
                                        <path d="M44 12 L46 20 L66 20 L68 12" stroke="#C4A052" stroke-width="1" opacity=".4"/>
                                    </svg>
                                </div>
                                <div class="car-name">RX 500h</div>
                                <div class="car-type">F SPORT · SUV Hybrid</div>
                                <div class="car-price">Từ 4,31 tỷ</div>
                            </div>
                        </label>

                        <label class="car-option">
                            <input type="radio" name="car" value="RX 350h" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <svg class="car-svg" width="110" height="50" viewBox="0 0 110 50" fill="none">
                                        <path d="M8 34 C8 34 12 20 22 16 L40 12 L70 12 L84 16 C90 18 96 24 99 30 L102 34" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-linejoin="round"/>
                                        <path d="M5 34 L105 34 L102 40 L8 40 Z" fill="rgba(196,160,82,.12)" stroke="#C4A052" stroke-width="1.2"/>
                                        <circle cx="24" cy="41" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="24" cy="41" r="3" fill="#C4A052" opacity=".6"/>
                                        <circle cx="86" cy="41" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="86" cy="41" r="3" fill="#C4A052" opacity=".6"/>
                                        <path d="M44 12 L46 20 L66 20 L68 12" stroke="#C4A052" stroke-width="1" opacity=".4"/>
                                    </svg>
                                </div>
                                <div class="car-name">RX 350h</div>
                                <div class="car-type">SUV Hybrid</div>
                                <div class="car-price">Từ 3,85 tỷ</div>
                            </div>
                        </label>

                        <label class="car-option">
                            <input type="radio" name="car" value="NX 350h" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <svg class="car-svg" width="110" height="50" viewBox="0 0 110 50" fill="none">
                                        <path d="M10 34 C10 34 15 22 24 17 L38 13 L72 13 L83 17 C90 20 95 26 98 32 L100 34" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-linejoin="round"/>
                                        <path d="M6 34 L104 34 L100 40 L10 40 Z" fill="rgba(196,160,82,.12)" stroke="#C4A052" stroke-width="1.2"/>
                                        <circle cx="26" cy="41" r="5.5" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="26" cy="41" r="2.5" fill="#C4A052" opacity=".6"/>
                                        <circle cx="84" cy="41" r="5.5" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="84" cy="41" r="2.5" fill="#C4A052" opacity=".6"/>
                                        <path d="M40 13 L42 20 L68 20 L70 13" stroke="#C4A052" stroke-width="1" opacity=".4"/>
                                    </svg>
                                </div>
                                <div class="car-name">NX 350h</div>
                                <div class="car-type">Compact SUV Hybrid</div>
                                <div class="car-price">Từ 2,88 tỷ</div>
                            </div>
                        </label>

                        <label class="car-option">
                            <input type="radio" name="car" value="ES 300h" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <!-- Sedan silhouette -->
                                    <svg class="car-svg" width="110" height="50" viewBox="0 0 110 50" fill="none">
                                        <path d="M6 35 C6 35 12 28 20 22 L32 16 L52 14 L74 14 L86 18 C93 22 98 28 101 34 L103 35" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-linejoin="round"/>
                                        <path d="M4 35 L106 35 L103 41 L7 41 Z" fill="rgba(196,160,82,.12)" stroke="#C4A052" stroke-width="1.2"/>
                                        <circle cx="24" cy="42" r="5.5" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="24" cy="42" r="2.5" fill="#C4A052" opacity=".6"/>
                                        <circle cx="87" cy="42" r="5.5" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="87" cy="42" r="2.5" fill="#C4A052" opacity=".6"/>
                                        <path d="M36 15 L38 22 L72 22 L74 15" stroke="#C4A052" stroke-width="1" opacity=".4"/>
                                    </svg>
                                </div>
                                <div class="car-name">ES 300h</div>
                                <div class="car-type">Sedan Hybrid</div>
                                <div class="car-price">Từ 2,55 tỷ</div>
                            </div>
                        </label>

                        <label class="car-option">
                            <input type="radio" name="car" value="LX 600" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <!-- SUV/Boxy silhouette -->
                                    <svg class="car-svg" width="110" height="50" viewBox="0 0 110 50" fill="none">
                                        <path d="M9 35 L9 18 C9 18 14 12 22 11 L42 10 L70 10 L86 11 C93 12 100 17 102 22 L103 35" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-linejoin="round"/>
                                        <path d="M6 35 L106 35 L102 42 L10 42 Z" fill="rgba(196,160,82,.12)" stroke="#C4A052" stroke-width="1.2"/>
                                        <circle cx="26" cy="43" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="26" cy="43" r="3" fill="#C4A052" opacity=".6"/>
                                        <circle cx="86" cy="43" r="6" fill="#141414" stroke="#C4A052" stroke-width="1.5"/>
                                        <circle cx="86" cy="43" r="3" fill="#C4A052" opacity=".6"/>
                                        <line x1="9" y1="20" x2="103" y2="20" stroke="#C4A052" stroke-width=".8" opacity=".3"/>
                                    </svg>
                                </div>
                                <div class="car-name">LX 600</div>
                                <div class="car-type">Full-size SUV · Flagship</div>
                                <div class="car-price">Từ 9,82 tỷ</div>
                            </div>
                        </label>

                        <label class="car-option">
                            <input type="radio" name="car" value="Tư vấn thêm" onchange="onCarSelect(this)">
                            <div class="car-card">
                                <div class="car-check"><i class="bi bi-check"></i></div>
                                <div class="car-img-wrap">
                                    <svg class="car-svg" width="80" height="50" viewBox="0 0 80 50" fill="none">
                                        <circle cx="40" cy="25" r="18" stroke="#C4A052" stroke-width="1.5" fill="rgba(196,160,82,.06)" stroke-dasharray="5 3"/>
                                        <text x="40" y="30" text-anchor="middle" fill="#C4A052" font-size="20" opacity=".6">?</text>
                                    </svg>
                                </div>
                                <div class="car-name">Cần tư vấn</div>
                                <div class="car-type">Chưa quyết định</div>
                                <div class="car-price">Mọi phân khúc</div>
                            </div>
                        </label>

                    </div>
                    <div class="inp-msg" id="msg-car"></div>
                </div>

                <!-- SECTION 3: Appointment -->
                <div class="form-section" style="margin-bottom:0">
                    <div class="fs-label"><i class="bi bi-calendar3"></i> Lịch hẹn mong muốn</div>

                    <div class="date-row">
                        <div class="sel-wrap">
                            <label style="display:block;font-size:.78rem;font-weight:600;color:var(--text);margin-bottom:8px">Ngày</label>
                            <select class="sel" id="sel-date">
                                <option value="" disabled selected>Chọn ngày</option>
                            </select>
                            <i class="bi bi-calendar3 sel-icon"></i>
                            <i class="bi bi-chevron-down sel-arrow"></i>
                        </div>
                        <div class="sel-wrap">
                            <label style="display:block;font-size:.78rem;font-weight:600;color:var(--text);margin-bottom:8px">Khung giờ</label>
                            <select class="sel" id="sel-time">
                                <option value="" disabled selected>Chọn giờ</option>
                                <option value="08:30">08:30 — Sáng sớm</option>
                                <option value="10:00">10:00 — Buổi sáng</option>
                                <option value="14:00">14:00 — Buổi chiều</option>
                                <option value="16:30">16:30 — Chiều muộn</option>
                            </select>
                            <i class="bi bi-clock sel-icon"></i>
                            <i class="bi bi-chevron-down sel-arrow"></i>
                        </div>
                    </div>

                    <!-- Note -->
                    <div style="margin-top:14px">
                        <label style="display:block;font-size:.78rem;font-weight:600;color:var(--text);margin-bottom:8px">
                            Ghi chú <span class="lbl-opt">Không bắt buộc</span>
                        </label>
                        <textarea id="note" class="textarea-inp" placeholder="Chia sẻ thêm nhu cầu hoặc câu hỏi bạn muốn tư vấn..." maxlength="200" oninput="document.getElementById('charCnt').textContent=this.value.length"></textarea>
                        <div class="char-count"><span id="charCnt">0</span>/200</div>
                    </div>
                </div>

            </div>

            <!-- Footer / Submit -->
            <div class="form-footer">
                <button class="btn-submit" id="submitBtn" onclick="handleSubmit()">
                    <div class="btn-loader"></div>
                    <i class="bi bi-calendar2-check btn-text"></i>
                    <span class="btn-text">Đăng Ký Lái Thử Ngay</span>
                    <i class="bi bi-arrow-right btn-text"></i>
                </button>
            </div>
            </div><!-- /form-state -->

            <!-- SUCCESS STATE -->
            <div class="success-state" id="successState">
                <div class="succ-ring">
                    <i class="bi bi-check-lg succ-icon"></i>
                </div>
                <h2 class="succ-title">Đăng Ký <span>Thành Công!</span></h2>
                <p class="succ-desc">Cảm ơn bạn đã đăng ký lái thử. Chuyên viên Lexus sẽ liên hệ xác nhận lịch hẹn trong vòng <strong style="color:var(--text)">24 giờ</strong>.</p>

                <div class="succ-info" id="succInfo">
                    <!-- Filled by JS -->
                </div>

                <div class="succ-btns">
                    <button class="btn-home" onclick="location.href='{{route('web.home')}}'">
                        <i class="bi bi-house"></i> Trang chủ
                    </button>
                    <button class="btn-another" onclick="resetForm()">
                        <i class="bi bi-arrow-clockwise"></i> Đăng ký khác
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
</main>
@endsection
@push('js')
<script>
    // ═══════════════════════════
    // POPULATE DATE OPTIONS
    // ═══════════════════════════
    (function(){
        const sel=document.getElementById('sel-date');
        const now=new Date();
        const days=['CN','T2','T3','T4','T5','T6','T7'];
        const months=['Th1','Th2','Th3','Th4','Th5','Th6','Th7','Th8','Th9','Th10','Th11','Th12'];
        for(let i=1;i<=21;i++){
            const d=new Date(now);
            d.setDate(now.getDate()+i);
            if(d.getDay()===0) continue; // skip Sunday optionally
            const opt=document.createElement('option');
            opt.value=d.toISOString().split('T')[0];
            opt.textContent=`${days[d.getDay()]}, ${d.getDate()} ${months[d.getMonth()]}`;
            sel.appendChild(opt);
        }
    })();

    // ═══════════════════════════
    // VALIDATION HELPERS
    // ═══════════════════════════
    function showMsg(id,msg,type){
        const el=document.getElementById(id);
        if(!el)return;
        el.textContent=(type==='err'?'⚠ ':'✓ ')+msg;
        el.className='inp-msg show '+(type==='err'?'err':'ok');
    }
    function clearMsg(id){
        const el=document.getElementById(id);
        if(el){el.className='inp-msg';el.textContent=''}
    }

    // Name
    const nameInp=document.getElementById('fullname');
    nameInp.addEventListener('blur',function(){
        const v=this.value.trim();
        if(!v){setInvalid(this,'msg-name','Vui lòng nhập họ và tên');}
        else if(v.length<2){setInvalid(this,'msg-name','Tên quá ngắn');}
        else{setValid(this,'msg-name','Đã nhập đúng')}
        updateProgress();
    });
    nameInp.addEventListener('input',function(){if(this.classList.contains('invalid'))clearState(this,'msg-name')});

    // Phone
    const phoneInp=document.getElementById('phone');
    phoneInp.addEventListener('input',function(){
        this.value=this.value.replace(/\D/g,'').slice(0,10);
    });
    phoneInp.addEventListener('blur',function(){
        const v=this.value.trim();
        if(!v){setInvalid(this,'msg-phone','Vui lòng nhập số điện thoại');}
        else if(!/^0[3-9]\d{8}$/.test(v)){setInvalid(this,'msg-phone','Số điện thoại không hợp lệ (VD: 0987654321)');}
        else{setValid(this,'msg-phone','Số hợp lệ')}
        updateProgress();
    });

    // Email (optional)
    const emailInp=document.getElementById('email');
    emailInp.addEventListener('blur',function(){
        const v=this.value.trim();
        if(!v){clearState(this,'msg-email');return;}
        if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)){setInvalid(this,'msg-email','Email không hợp lệ');}
        else{setValid(this,'msg-email','Email hợp lệ')}
    });

    function setValid(inp,msgId,msg){
        inp.classList.add('valid');inp.classList.remove('invalid');
        showMsg(msgId,msg,'ok');
    }
    function setInvalid(inp,msgId,msg){
        inp.classList.add('invalid');inp.classList.remove('valid');
        showMsg(msgId,msg,'err');
    }
    function clearState(inp,msgId){
        inp.classList.remove('valid','invalid');
        clearMsg(msgId);
    }

    // Car selection
    function onCarSelect(radio){
        document.getElementById('msg-car').className='inp-msg';
        updateProgress();
    }

    // ═══════════════════════════
    // PROGRESS INDICATOR
    // ═══════════════════════════
    function updateProgress(){
        const hasName=nameInp.classList.contains('valid');
        const hasPhone=phoneInp.classList.contains('valid');
        const hasCar=!!document.querySelector('input[name="car"]:checked');

        setStep(1,hasName&&hasPhone,'active');
        setStep(2,hasCar,hasName&&hasPhone?'active':'');
        setStep(3,false,hasCar?'active':'');
    }
    function setStep(n,done,active){
        const el=document.getElementById('step'+n+'-ind');
        el.classList.remove('done','active');
        if(done)el.classList.add('done');
        else if(active)el.classList.add('active');
    }

    // ═══════════════════════════
    // SUBMIT
    // ═══════════════════════════
    function handleSubmit(){
        const name=nameInp.value.trim();
        const phone=phoneInp.value.trim();
        const email=emailInp.value.trim();
        const car=document.querySelector('input[name="car"]:checked');
        const date=document.getElementById('sel-date').value;
        const time=document.getElementById('sel-time').value;

        // Validate
        let ok=true;
        if(!name){setInvalid(nameInp,'msg-name','Vui lòng nhập họ và tên');ok=false;}
        if(!phone||!/^0[3-9]\d{8}$/.test(phone)){setInvalid(phoneInp,'msg-phone','Số điện thoại không hợp lệ');ok=false;}
        if(email&&!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)){setInvalid(emailInp,'msg-email','Email không hợp lệ');ok=false;}
        if(!car){
            const m=document.getElementById('msg-car');
            m.textContent='⚠ Vui lòng chọn mẫu xe';m.className='inp-msg show err';
            ok=false;
        }
        if(!ok){
            // Scroll to first error
            document.querySelector('.inp.invalid,.inp-msg.err.show')?.scrollIntoView({behavior:'smooth',block:'center'});
            return;
        }

        // Loading state
        const btn=document.getElementById('submitBtn');
        btn.classList.add('loading');
        btn.disabled=true;

        const data={
            name,
            phone,
            email:email||null,
            note:document.getElementById('note').value.trim()||null,
            car:car.value,
            date:date||null,
            time:time||null,
            url:window.location.href
        };

        fetch('/api/customers',{
            method:'POST',
            headers:{'Content-Type':'application/json'},
            body:JSON.stringify(data)
        })
        .then(res=>{
            btn.classList.remove('loading');
            if(res.ok){
                showSuccess(data);
            } else {
                btn.disabled=false;
                alert('Gửi thất bại, vui lòng thử lại.');
            }
        })
        .catch(()=>{
            btn.classList.remove('loading');
            btn.disabled=false;
            alert('Lỗi kết nối, vui lòng thử lại.');
        });
    }

    // ═══════════════════════════
    // SUCCESS
    // ═══════════════════════════
    function showSuccess(data){
        document.getElementById('formState').classList.add('hide');

        const info=document.getElementById('succInfo');
        const dateStr=data.date?new Date(data.date).toLocaleDateString('vi-VN',{weekday:'long',day:'numeric',month:'long'}):'Sẽ xác nhận qua điện thoại';
        const timeStr=data.time||'—';
        const rows=[
            ['Khách hàng',data.name],
            ['Điện thoại',`+84 ${data.phone.slice(1)}`],
            ['Mẫu xe',data.car,'gold'],
            ['Ngày hẹn',dateStr],
            ['Khung giờ',timeStr],
        ];
        info.innerHTML=rows.map(([k,v,cls])=>
            `<div class="si-row"><span class="si-key">${k}</span><span class="si-val${cls?' '+cls:''}">${v}</span></div>`
        ).join('');

        document.getElementById('successState').classList.add('show');
    }

    function resetForm(){
        document.getElementById('successState').classList.remove('show');
        document.getElementById('formState').classList.remove('hide');
        document.querySelectorAll('.inp').forEach(i=>clearState(i,''));
        document.querySelectorAll('.inp-msg').forEach(m=>{m.className='inp-msg';m.textContent=''});
        document.querySelectorAll('input[name="car"]').forEach(r=>r.checked=false);
        document.getElementById('fullname').value='';
        document.getElementById('phone').value='';
        document.getElementById('email').value='';
        document.getElementById('note').value='';
        document.getElementById('charCnt').textContent='0';
        document.getElementById('sel-date').selectedIndex=0;
        document.getElementById('sel-time').selectedIndex=0;
        // Reset steps
        ['step1-ind','step2-ind','step3-ind'].forEach((id,i)=>{
            const el=document.getElementById(id);
            el.classList.remove('done','active');
            if(i===0)el.classList.add('active');
        });
        window.scrollTo({top:0,behavior:'smooth'});
    }

    // ═══════════════════════════
    // ENTRANCE ANIMATION
    // ═══════════════════════════
    (function(){
        const items=['.eyebrow','.page-title','.dg','.page-desc','.bfitem','.form-card'];
        items.forEach((sel,i)=>{
            document.querySelectorAll(sel).forEach((el,j)=>{
                el.style.opacity='0';
                el.style.transform='translateY(20px)';
                el.style.transition=`opacity .5s ease, transform .5s ease`;
                el.style.transitionDelay=`${.1 + (i+j)*.08}s`;
                requestAnimationFrame(()=>requestAnimationFrame(()=>{
                    el.style.opacity='1';
                    el.style.transform='translateY(0)';
                }));
            });
        });
    })();
</script>
@endpush

