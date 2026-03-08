
    // ======= Gallery Image Switch =======
    function changeImage(thumb, src, index) {
        document.getElementById('mainImage').src = src;
        document.querySelectorAll('.gthumb').forEach(t => t.classList.remove('active'));
        thumb.classList.add('active');
        document.querySelector('.gallery-count').innerHTML = `<i class="bi bi-images"></i> ${index} / 5`;
    }

    // ======= Favorite Toggle =======
    function toggleFav() {
        const btn = document.getElementById('favBtn');
        const icon = btn.querySelector('i');
        if (icon.classList.contains('bi-heart')) {
            icon.classList.replace('bi-heart', 'bi-heart-fill');
            btn.classList.add('liked');
        } else {
            icon.classList.replace('bi-heart-fill', 'bi-heart');
            btn.classList.remove('liked');
        }
    }

    // ======= Detail Tab Switching =======
    function switchDetailTab(tabId, btn) {
        document.querySelectorAll('#detailTabs .dt-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.dt-pane').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById(tabId).classList.add('active');
    }

    // ======= Read More =======
    function toggleReadMore() {
        const hidden = document.getElementById('overviewHidden');
        const btn = document.getElementById('readMoreBtn');
        if (hidden.style.display === 'none') {
            hidden.style.display = 'block';
            btn.innerHTML = 'Read less <i class="bi bi-chevron-up"></i>';
        } else {
            hidden.style.display = 'none';
            btn.innerHTML = 'Read more <i class="bi bi-chevron-down"></i>';
        }
    }

    // ======= Loan Calculator =======
    function updateCalc() {
        const price = parseFloat(document.getElementById('priceRange').value);
        const down = parseFloat(document.getElementById('downRange').value);
        const term = parseInt(document.getElementById('termRange').value);
        const rate = parseFloat(document.getElementById('rateRange').value);

        document.getElementById('priceVal').textContent = '$' + price.toLocaleString();
        document.getElementById('downVal').textContent = '$' + down.toLocaleString();
        document.getElementById('termVal').textContent = term + ' months';
        document.getElementById('rateVal').textContent = rate.toFixed(1) + '%';

        const loan = price - down;
        const monthlyRate = rate / 100 / 12;
        let monthly;
        if (rate === 0) {
            monthly = loan / term;
        } else {
            monthly = loan * (monthlyRate * Math.pow(1 + monthlyRate, term)) / (Math.pow(1 + monthlyRate, term) - 1);
        }
        const totalPaid = monthly * term;
        const totalInterest = totalPaid - loan;

        document.getElementById('monthlyPayment').textContent = '$' + Math.round(monthly).toLocaleString();
        document.getElementById('totalCost').textContent = 'Total cost: $' + Math.round(totalPaid + down).toLocaleString();
        document.getElementById('loanAmount').textContent = '$' + Math.round(loan).toLocaleString();
        document.getElementById('totalInterest').textContent = '$' + Math.round(totalInterest).toLocaleString();
    }

    // ======= Contact Form Submit =======
    function handleSubmit(e) {
        e.preventDefault();
        const form = e.target;
        const btn = document.getElementById('submitBtn');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';
        btn.disabled = true;
        setTimeout(() => {
            form.style.display = 'none';
            document.getElementById('submitSuccess').style.display = 'block';
        }, 1500);
    }

    // ======= Test Drive Form =======
    function handleTestDrive(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Booking...';
        btn.disabled = true;
        setTimeout(() => {
            btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i> Booked Successfully!';
            btn.style.background = 'var(--green)';
        }, 1500);
    }

    // ======= Favorite Hearts on Vehicle Cards =======
    document.querySelectorAll('.v-fav').forEach(btn => {
        btn.addEventListener('click', function () {
            const i = this.querySelector('i');
            if (i.classList.contains('bi-heart')) {
                i.classList.replace('bi-heart', 'bi-heart-fill');
                i.style.color = '#EF4444';
            } else {
                i.classList.replace('bi-heart-fill', 'bi-heart');
                i.style.color = '';
            }
        });
    });

    // ======= Back to Top =======
    window.addEventListener('scroll', () => {
        const btn = document.getElementById('backToTop');
        if (window.scrollY > 400) {
            btn.classList.add('show');
        } else {
            btn.classList.remove('show');
        }
    });

    // Init calculator
    updateCalc();
