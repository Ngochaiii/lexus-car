@php
    $org = config('seo.organization');
    // Các trang đã có form chính, không hiển thị popup / sticky bar để tránh trùng mục đích.
    $leadExcluded = in_array(Route::currentRouteName(), ['web.home.regis'], true);
@endphp

@unless($leadExcluded)
<style>
    /* ==================== STICKY CTA (MOBILE) ==================== */
    .lead-sticky {
        display: none;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 990;
        background: rgba(10, 10, 10, .96);
        backdrop-filter: blur(16px);
        border-top: 1px solid rgba(196, 160, 82, .25);
        padding: 8px 10px calc(8px + env(safe-area-inset-bottom));
        gap: 8px;
    }

    .lead-sticky__item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        padding: 8px 4px;
        border-radius: var(--radius, 8px);
        font-size: .72rem;
        font-weight: 600;
        letter-spacing: .02em;
        text-decoration: none;
        color: var(--lexus-text, #e5e5e5);
        background: rgba(255, 255, 255, .06);
        border: 1px solid rgba(255, 255, 255, .08);
        line-height: 1.2;
    }

    .lead-sticky__item i {
        font-size: 1.05rem;
    }

    .lead-sticky__item--call {
        color: #fff;
    }

    .lead-sticky__item--zalo {
        color: #fff;
        background: rgba(0, 104, 255, .18);
        border-color: rgba(0, 104, 255, .35);
    }

    .lead-sticky__item--cta {
        flex: 1.5;
        color: var(--lexus-black, #0a0a0a);
        background: var(--lexus-gold, #c4a052);
        border-color: var(--lexus-gold, #c4a052);
    }

    @media (max-width: 991.98px) {
        .lead-sticky {
            display: flex;
        }

        /* Chừa chỗ cho sticky bar (cao ~72px) để không che nội dung cuối trang */
        body {
            padding-bottom: calc(76px + env(safe-area-inset-bottom));
        }

        .back-to-top {
            bottom: calc(88px + env(safe-area-inset-bottom));
        }
    }

    /* ==================== LEAD MODAL / POPUP ==================== */
    .lead-modal {
        position: fixed;
        inset: 0;
        z-index: 2000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        visibility: hidden;
        transition: opacity .28s ease, visibility .28s ease;
    }

    .lead-modal.is-open {
        opacity: 1;
        visibility: visible;
    }

    .lead-modal__backdrop {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, .72);
        backdrop-filter: blur(4px);
    }

    .lead-modal__panel {
        position: relative;
        width: 100%;
        max-width: 420px;
        max-height: 88vh;
        overflow-y: auto;
        background: linear-gradient(160deg, #17150f 0%, var(--lexus-dark, #141414) 55%);
        border: 1px solid rgba(196, 160, 82, .28);
        border-radius: var(--radius-xl, 16px);
        box-shadow: 0 24px 70px rgba(0, 0, 0, .6);
        padding: 30px 26px 24px;
        transform: translateY(18px) scale(.98);
        transition: transform .32s cubic-bezier(.16, 1, .3, 1);
    }

    .lead-modal.is-open .lead-modal__panel {
        transform: translateY(0) scale(1);
    }

    .lead-modal__close {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .07);
        border: none;
        border-radius: 50%;
        color: var(--lexus-text-muted, #888);
        font-size: .9rem;
        cursor: pointer;
        transition: color .2s, background .2s;
    }

    .lead-modal__close:hover {
        color: #fff;
        background: rgba(255, 255, 255, .14);
    }

    .lead-modal__eyebrow {
        display: inline-block;
        padding: 4px 10px;
        margin-bottom: 12px;
        border-radius: 100px;
        background: var(--lexus-gold-light, rgba(196, 160, 82, .15));
        border: 1px solid rgba(196, 160, 82, .3);
        color: var(--lexus-gold, #c4a052);
        font-size: .68rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .lead-modal__title {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        margin: 0 0 8px;
        line-height: 1.25;
    }

    .lead-modal__sub {
        font-size: .88rem;
        color: var(--lexus-text-muted, #888);
        margin: 0;
        line-height: 1.55;
    }

    .lead-modal__car {
        margin-top: 14px;
        padding: 10px 12px;
        border-radius: var(--radius, 8px);
        background: rgba(255, 255, 255, .04);
        border: 1px solid rgba(255, 255, 255, .07);
        font-size: .82rem;
        color: var(--lexus-text, #e5e5e5);
    }

    .lead-modal__car strong {
        color: var(--lexus-gold, #c4a052);
    }

    .lead-modal__form {
        margin-top: 20px;
    }

    .lead-field {
        margin-bottom: 12px;
    }

    .lead-input {
        width: 100%;
        padding: 13px 15px;
        background: rgba(255, 255, 255, .05);
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: var(--radius, 8px);
        color: #fff;
        font-size: .95rem;
        font-family: inherit;
        transition: border-color .2s, background .2s;
    }

    .lead-input::placeholder {
        color: #6c6c6c;
    }

    .lead-input:focus {
        outline: none;
        border-color: var(--lexus-gold, #c4a052);
        background: rgba(255, 255, 255, .08);
    }

    .lead-input.is-invalid {
        border-color: var(--lexus-red, #c41e3a);
    }

    .lead-error {
        display: none;
        margin-top: 5px;
        font-size: .75rem;
        color: #ff7a8a;
    }

    .lead-error.show {
        display: block;
    }

    .lead-hp {
        position: absolute;
        left: -9999px;
        width: 1px;
        height: 1px;
        opacity: 0;
    }

    .lead-submit {
        width: 100%;
        padding: 14px;
        margin-top: 4px;
        background: var(--lexus-gold, #c4a052);
        color: var(--lexus-black, #0a0a0a);
        border: none;
        border-radius: var(--radius, 8px);
        font-size: .95rem;
        font-weight: 700;
        font-family: inherit;
        letter-spacing: .03em;
        cursor: pointer;
        transition: background .25s, opacity .25s;
    }

    .lead-submit:hover:not(:disabled) {
        background: var(--lexus-gold-dark, #a8893f);
    }

    .lead-submit:disabled {
        opacity: .6;
        cursor: not-allowed;
    }

    .lead-modal__alt {
        margin-top: 14px;
        text-align: center;
        font-size: .85rem;
        color: var(--lexus-text-muted, #888);
    }

    .lead-modal__alt a {
        color: var(--lexus-gold, #c4a052);
        font-weight: 700;
        text-decoration: none;
    }

    .lead-modal__note {
        margin: 12px 0 0;
        text-align: center;
        font-size: .7rem;
        line-height: 1.5;
        color: #5f5f5f;
    }

    .lead-modal__note a {
        color: #7d7d7d;
        text-decoration: underline;
    }

    .lead-modal__success {
        display: none;
        text-align: center;
        padding: 14px 0 6px;
    }

    .lead-modal__success.show {
        display: block;
    }

    .lead-modal__success i {
        font-size: 2.6rem;
        color: var(--lexus-green, #2e8b57);
    }

    .lead-modal__success h4 {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        color: #fff;
        margin: 12px 0 8px;
    }

    .lead-modal__success p {
        font-size: .88rem;
        color: var(--lexus-text-muted, #888);
        margin: 0;
    }

    /* Bottom sheet trên mobile — không che toàn màn hình */
    @media (max-width: 575.98px) {
        .lead-modal {
            align-items: flex-end;
            padding: 0;
        }

        .lead-modal__panel {
            max-width: 100%;
            max-height: 80vh;
            border-radius: var(--radius-xl, 16px) var(--radius-xl, 16px) 0 0;
            border-bottom: none;
            padding: 26px 20px calc(20px + env(safe-area-inset-bottom));
            transform: translateY(100%);
        }

        .lead-modal.is-open .lead-modal__panel {
            transform: translateY(0);
        }

        .lead-modal__title {
            font-size: 1.3rem;
        }
    }

    body.lead-locked {
        overflow: hidden;
    }

    /* Cho phép dùng <button> với style của .btn-action trên trang xe */
    button.btn-action {
        font: inherit;
        border: none;
        cursor: pointer;
    }

    @media (prefers-reduced-motion: reduce) {

        .lead-modal,
        .lead-modal__panel {
            transition: none;
        }
    }
</style>

<!-- Sticky CTA (mobile) -->
<div class="lead-sticky" id="leadSticky">
    <a class="lead-sticky__item lead-sticky__item--call" href="tel:{{ $org['phone'] }}">
        <i class="bi bi-telephone-fill"></i><span>Gọi ngay</span>
    </a>
    <a class="lead-sticky__item lead-sticky__item--zalo" href="{{ $org['zalo'] }}" target="_blank" rel="noopener nofollow">
        <i class="bi bi-chat-dots-fill"></i><span>Zalo</span>
    </a>
    <a class="lead-sticky__item lead-sticky__item--cta" href="{{ route('web.home.regis') }}"
       data-lead-open data-lead-source="sticky_bar">
        <i class="bi bi-calendar2-check-fill"></i><span>Đăng ký lái thử</span>
    </a>
</div>

<!-- Modal lấy thông tin nhanh (dùng chung cho CTA thủ công và popup tự động) -->
<div class="lead-modal" id="leadModal" role="dialog" aria-modal="true" aria-labelledby="leadModalTitle">
    <div class="lead-modal__backdrop" data-lead-close></div>
    <div class="lead-modal__panel">
        <button type="button" class="lead-modal__close" data-lead-close aria-label="Đóng">
            <i class="bi bi-x-lg"></i>
        </button>

        <div id="leadModalBody">
            <div class="lead-modal__eyebrow" id="leadModalEyebrow">Ưu đãi tháng {{ now()->format('m/Y') }}</div>
            <h3 class="lead-modal__title" id="leadModalTitle">Nhận báo giá lăn bánh</h3>
            <p class="lead-modal__sub" id="leadModalSub">
                Để lại tên và số điện thoại — chuyên viên gọi lại tư vấn trong 30 phút.
            </p>
            <div class="lead-modal__car" id="leadModalCar" style="display:none"></div>

            <form class="lead-modal__form" id="leadModalForm" novalidate>
                <div class="lead-field">
                    <input type="text" id="leadName" class="lead-input" placeholder="Họ và tên"
                           autocomplete="name" required>
                    <span class="lead-error" id="leadNameErr"></span>
                </div>
                <div class="lead-field">
                    <input type="tel" id="leadPhone" class="lead-input" placeholder="Số điện thoại"
                           autocomplete="tel" inputmode="numeric" maxlength="10" required>
                    <span class="lead-error" id="leadPhoneErr"></span>
                </div>
                <input type="text" class="lead-hp" id="leadWebsite" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button type="submit" class="lead-submit" id="leadSubmitBtn">Nhận báo giá</button>
                <div class="lead-modal__alt">
                    Hoặc gọi ngay <a href="tel:{{ $org['phone'] }}">{{ $org['phone_display'] }}</a>
                </div>
                <p class="lead-modal__note">
                    Thông tin được bảo mật theo
                    <a href="{{ route('legal.privacy') }}">chính sách bảo mật</a>.
                </p>
            </form>
        </div>

        <div class="lead-modal__success" id="leadModalSuccess">
            <i class="bi bi-check-circle-fill"></i>
            <h4>Đã nhận thông tin!</h4>
            <p>Chuyên viên sẽ liên hệ với bạn trong ít phút nữa. Cảm ơn bạn đã quan tâm.</p>
        </div>
    </div>
</div>

<script>
(function () {
    'use strict';

    // ═══════════════════════════════════════════
    // TRACKING — dùng chung cho mọi form trên site
    // ═══════════════════════════════════════════
    var LeadTrack = {
        event: function (name, payload) {
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push(Object.assign({ event: name }, payload || {}));
        },
        // Gọi khi có lead thành công: GA4 generate_lead + chuyển đổi Google Ads
        lead: function (payload) {
            payload = payload || {};
            this.event('generate_lead', payload);
            if (typeof gtag === 'function') {
                gtag('event', 'generate_lead', {
                    form_source: payload.form_source || 'unknown',
                    car: payload.car || '',
                    currency: 'VND',
                    value: Number(String(payload.price || '').replace(/\D/g, '')) || 0
                });
            }
            if (typeof gtagReportContact === 'function') { gtagReportContact(); }
            try { localStorage.setItem('lead_submitted_at', String(Date.now())); } catch (e) {}
        }
    };
    window.LeadTrack = LeadTrack;

    var modal = document.getElementById('leadModal');
    if (!modal) return;

    var form = document.getElementById('leadModalForm');
    var body = document.getElementById('leadModalBody');
    var success = document.getElementById('leadModalSuccess');
    var nameInp = document.getElementById('leadName');
    var phoneInp = document.getElementById('leadPhone');
    var hpInp = document.getElementById('leadWebsite');
    var submitBtn = document.getElementById('leadSubmitBtn');
    var eyebrowEl = document.getElementById('leadModalEyebrow');
    var titleEl = document.getElementById('leadModalTitle');
    var subEl = document.getElementById('leadModalSub');
    var carEl = document.getElementById('leadModalCar');

    var DAY = 86400000;
    var state = { open: false, source: 'manual', car: null, price: null, lastFocus: null };
    var DEFAULTS = {
        eyebrow: eyebrowEl.textContent,
        title: titleEl.textContent,
        sub: subEl.textContent
    };

    function readTime(key) {
        try { return Number(localStorage.getItem(key)) || 0; } catch (e) { return 0; }
    }
    function writeTime(key) {
        try { localStorage.setItem(key, String(Date.now())); } catch (e) {}
    }

    // ═══════════════════════════════════════════
    // XÁC ĐỊNH XE ĐANG XEM
    // ═══════════════════════════════════════════
    function currentCar() {
        // Trang xe khai báo selectedVersion (biến global của trang chi tiết)
        try {
            if (typeof selectedVersion !== 'undefined' && selectedVersion && selectedVersion.name) {
                return { name: selectedVersion.name, price: selectedVersion.price || null };
            }
        } catch (e) {}
        var meta = document.querySelector('meta[name="lead-car"]');
        if (meta && meta.content) return { name: meta.content, price: null };
        return { name: (document.title || 'Đăng ký tư vấn').split('|')[0].trim(), price: null };
    }

    // ═══════════════════════════════════════════
    // MỞ / ĐÓNG MODAL
    // ═══════════════════════════════════════════
    function open(opts) {
        if (state.open) return;
        opts = opts || {};
        var car = currentCar();

        state.open = true;
        state.source = opts.source || 'manual';
        state.car = opts.car || car.name;
        state.price = opts.price || car.price;
        state.lastFocus = document.activeElement;

        eyebrowEl.textContent = opts.eyebrow || DEFAULTS.eyebrow;
        titleEl.textContent = opts.title || DEFAULTS.title;
        subEl.textContent = opts.sub || DEFAULTS.sub;

        // Trả form về trạng thái ban đầu (phòng khi đã gửi thành công trước đó)
        body.style.display = '';
        success.classList.remove('show');
        submitBtn.disabled = false;
        submitBtn.textContent = 'Nhận báo giá';

        if (state.car) {
            carEl.innerHTML = 'Quan tâm: <strong></strong>';
            carEl.querySelector('strong').textContent = state.car;
            carEl.style.display = '';
        } else {
            carEl.style.display = 'none';
        }

        modal.classList.add('is-open');
        document.body.classList.add('lead-locked');
        LeadTrack.event('lead_modal_shown', { form_source: state.source, car: state.car });

        setTimeout(function () { nameInp.focus({ preventScroll: true }); }, 320);
    }

    function close(reason) {
        if (!state.open) return;
        state.open = false;
        modal.classList.remove('is-open');
        document.body.classList.remove('lead-locked');
        LeadTrack.event('lead_modal_closed', { form_source: state.source, close_reason: reason || 'user' });
        if (state.lastFocus && typeof state.lastFocus.focus === 'function') {
            state.lastFocus.focus({ preventScroll: true });
        }
    }

    // Mọi phần tử có [data-lead-open] đều mở modal thay vì điều hướng.
    // Giữ nguyên href để vẫn hoạt động khi JS lỗi (progressive enhancement).
    document.addEventListener('click', function (e) {
        if (!(e.target instanceof Element)) return;
        var trigger = e.target.closest('[data-lead-open]');
        if (trigger) {
            e.preventDefault();
            open({
                source: trigger.dataset.leadSource || 'cta',
                car: trigger.dataset.leadCar || null,
                title: trigger.dataset.leadTitle || null
            });
            return;
        }
        if (e.target.closest('[data-lead-close]')) close('user');
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && state.open) close('escape');
        if (e.key !== 'Tab' || !state.open) return;
        // Giữ tiêu điểm bên trong modal
        var focusables = modal.querySelectorAll('button, input, a[href]');
        var list = Array.prototype.filter.call(focusables, function (el) { return el.offsetParent !== null; });
        if (!list.length) return;
        var first = list[0], last = list[list.length - 1];
        if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
        else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    });

    // ═══════════════════════════════════════════
    // VALIDATE + GỬI
    // ═══════════════════════════════════════════
    function setError(input, errEl, msg) {
        input.classList.add('is-invalid');
        errEl.textContent = msg;
        errEl.classList.add('show');
    }
    function clearError(input, errEl) {
        input.classList.remove('is-invalid');
        errEl.classList.remove('show');
    }

    phoneInp.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 10);
        clearError(this, document.getElementById('leadPhoneErr'));
    });
    nameInp.addEventListener('input', function () {
        clearError(this, document.getElementById('leadNameErr'));
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var nameErr = document.getElementById('leadNameErr');
        var phoneErr = document.getElementById('leadPhoneErr');
        var name = nameInp.value.trim();
        var phone = phoneInp.value.trim();
        var ok = true;

        if (name.length < 2) { setError(nameInp, nameErr, 'Vui lòng nhập họ và tên'); ok = false; }
        else clearError(nameInp, nameErr);

        if (!/^0[3-9]\d{8}$/.test(phone)) {
            setError(phoneInp, phoneErr, 'Số điện thoại không hợp lệ (VD: 0987654321)');
            ok = false;
        } else clearError(phoneInp, phoneErr);

        if (!ok) return;
        if (hpInp.value) { close('bot'); return; } // honeypot

        submitBtn.disabled = true;
        submitBtn.textContent = 'Đang gửi...';

        fetch('/api/customers', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                name: name,
                phone: phone,
                car: state.car || 'Đăng ký tư vấn',
                price: state.price || null,
                note: 'Gửi từ: ' + state.source,
                url: window.location.href,
                website: hpInp.value || null
            })
        }).then(function (res) {
            if (!res.ok) throw new Error('http ' + res.status);
            LeadTrack.lead({ form_source: state.source, car: state.car, price: state.price });
            writeTime('lead_submitted_at');
            body.style.display = 'none';
            success.classList.add('show');
            setTimeout(function () { close('submitted'); }, 3200);
        }).catch(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Thử lại';
            setError(phoneInp, phoneErr, 'Gửi thất bại, vui lòng thử lại hoặc gọi hotline.');
        });
    });

    // ═══════════════════════════════════════════
    // POPUP TỰ ĐỘNG — trigger thông minh, có giới hạn tần suất
    // ═══════════════════════════════════════════
    var POPUP = {
        dwellMs: 28000,      // thời gian ở lại tối thiểu
        scrollSoft: 0.40,    // % scroll đi kèm điều kiện thời gian
        scrollHard: 0.70,    // % scroll đủ để bật ngay
        exitMinMs: 8000,     // exit-intent chỉ tính sau khi ở lại đủ lâu
        seenCooldown: 7 * DAY,
        submittedCooldown: 30 * DAY
    };

    var startedAt = Date.now();
    var timeReached = false;
    var fired = false;

    function suppressed() {
        if (fired || state.open) return true;
        if (Date.now() - readTime('lead_popup_seen_at') < POPUP.seenCooldown) return true;
        if (Date.now() - readTime('lead_submitted_at') < POPUP.submittedCooldown) return true;
        if (document.body.dataset.leadPopup === 'off') return true;
        return false;
    }

    // Không cắt ngang khi khách đang điền form khác trên trang
    function busyTyping() {
        var el = document.activeElement;
        return !!(el && /^(INPUT|TEXTAREA|SELECT)$/.test(el.tagName));
    }

    function scrollRatio() {
        var docH = document.documentElement.scrollHeight - window.innerHeight;
        if (docH <= 0) return 1;
        return (window.scrollY || window.pageYOffset) / docH;
    }

    function tryFire(reason) {
        if (suppressed()) return;
        if (busyTyping()) return; // sẽ thử lại ở lần scroll/blur kế tiếp
        fired = true;
        writeTime('lead_popup_seen_at');
        open({
            source: 'popup_' + reason,
            eyebrow: 'Ưu đãi có hạn',
            title: 'Nhận báo giá lăn bánh & ưu đãi',
            sub: 'Để lại tên và số điện thoại — chuyên viên gửi bảng giá chi tiết trong 30 phút.'
        });
    }

    setTimeout(function () {
        timeReached = true;
        if (scrollRatio() >= POPUP.scrollSoft) tryFire('dwell');
    }, POPUP.dwellMs);

    window.addEventListener('scroll', function () {
        if (fired) return;
        var r = scrollRatio();
        if (r >= POPUP.scrollHard) tryFire('scroll');
        else if (timeReached && r >= POPUP.scrollSoft) tryFire('dwell');
    }, { passive: true });

    // Khách vừa rời khỏi ô nhập liệu -> thử lại lần đã bị hoãn vì busyTyping()
    document.addEventListener('focusout', function () {
        if (fired || !timeReached) return;
        setTimeout(function () {
            if (scrollRatio() >= POPUP.scrollSoft) tryFire('dwell');
        }, 400);
    });

    // Exit-intent: chỉ desktop, chỉ khi chuột rời khỏi mép trên viewport
    if (window.matchMedia('(min-width: 992px) and (pointer: fine)').matches) {
        document.addEventListener('mouseout', function (e) {
            if (e.relatedTarget || e.clientY > 0) return;
            if (Date.now() - startedAt < POPUP.exitMinMs) return;
            tryFire('exit_intent');
        });
    }

    window.LeadCapture = { open: open, close: close };
})();
</script>
@endunless
