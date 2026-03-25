      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
          // Navbar scroll
          window.addEventListener('scroll', () => {
              const nb = document.getElementById('navbar');
              const bt = document.getElementById('backToTop');
              nb.classList.toggle('scrolled', window.scrollY > 100);
              bt.classList.toggle('show', window.scrollY > 400);
          });

          // Search tabs
          document.querySelectorAll('.search-tab').forEach(tab => {
              tab.addEventListener('click', function() {
                  document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                  this.classList.add('active');
              });
          });

          // Category pills
          document.querySelectorAll('.cat-pill').forEach(pill => {
              pill.addEventListener('click', function() {
                  document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
                  this.classList.add('active');
              });
          });

          // Live search dropdown
          const searchInput = document.getElementById('searchInput');
          const liveResults = document.getElementById('liveResults');
          searchInput.addEventListener('input', function() {
              liveResults.classList.toggle('show', this.value.length >= 1);
          });
          document.addEventListener('click', (e) => {
              if (!e.target.closest('.search-input-wrap')) liveResults.classList.remove('show');
          });

          function goDetail() {
              window.location.href = 'lexus-rx500h-detail.html';
          }

          // FAQ toggle
          function toggleFaq(el) {
              const item = el.closest('.faq-item');
              const isOpen = item.classList.contains('open');
              document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
              if (!isOpen) item.classList.add('open');
          }

          // Favorite button
          document.querySelectorAll('.model-fav').forEach(btn => {
              btn.addEventListener('click', function() {
                  const icon = this.querySelector('i');
                  const active = icon.classList.contains('bi-heart-fill');
                  icon.classList.toggle('bi-heart', active);
                  icon.classList.toggle('bi-heart-fill', !active);
                  this.style.background = active ? '' : 'var(--lexus-gold)';
                  this.style.color = active ? '' : 'var(--lexus-black)';
              });
          });

          // Scroll reveal
          const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      entry.target.style.opacity = '1';
                      entry.target.style.transform = 'translateY(0)';
                  }
              });
          }, {
              threshold: 0.1,
              rootMargin: '0px 0px -50px 0px'
          });

          document.querySelectorAll('.section-title, .model-card, .why-card, .news-card, .stat-item, .award-card, .faq-item')
              .forEach(el => {
                  el.style.opacity = '0';
                  el.style.transform = 'translateY(30px)';
                  el.style.transition = 'all 0.6s ease';
                  observer.observe(el);
              });
      </script>
<script src="{{ asset('web/assets/js/main.js')}}"></script>
