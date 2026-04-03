      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
          // Navbar scroll
          window.addEventListener('scroll', () => {
              const nb = document.getElementById('navbar');
              const bt = document.getElementById('backToTop');
              nb.classList.toggle('scrolled', window.scrollY > 100);
              bt.classList.toggle('show', window.scrollY > 400);
          });

          // ==================== SEARCH ENGINE ====================
          (function () {
              const modelsSection = document.querySelector('.models-section');
              const carCols = modelsSection
                  ? Array.from(modelsSection.querySelectorAll('.col-xl-3, .col-lg-4, .col-md-6'))
                        .filter(el => el.querySelector('.model-card'))
                  : [];

              // Remove duplicate DOM nodes (col with multiple responsive classes)
              const seen = new Set();
              const uniqueCols = carCols.filter(el => {
                  if (seen.has(el)) return false;
                  seen.add(el);
                  return true;
              });

              function getCarCat(col) {
                  const series = (col.querySelector('.model-series')?.textContent || '').toLowerCase();
                  if (series.includes('sedan')) return 'sedan';
                  if (series.includes('mpv')) return 'mpv';
                  return 'suv';
              }

              // Build data for live search
              const carDatabase = uniqueCols.map(col => ({
                  col,
                  name: col.querySelector('.model-name')?.textContent?.trim() || '',
                  series: col.querySelector('.model-series')?.textContent?.trim() || '',
                  cat: getCarCat(col),
                  img: col.querySelector('img')?.src || '',
                  link: col.querySelector('.model-link')?.href || '#',
                  price: col.querySelector('.model-price')?.textContent?.trim() || ''
              }));

              // --- Filter cards ---
              function filterCards(cat, query) {
                  const q = (query || '').trim().toLowerCase();
                  uniqueCols.forEach(col => {
                      const carCat = getCarCat(col);
                      const catMatch = (cat === 'all' || carCat === cat.toLowerCase());
                      let nameMatch = true;
                      if (q) {
                          const name = (col.querySelector('.model-name')?.textContent || '').toLowerCase();
                          const series = (col.querySelector('.model-series')?.textContent || '').toLowerCase();
                          nameMatch = name.includes(q) || series.includes(q);
                      }
                      col.style.display = (catMatch && nameMatch) ? '' : 'none';
                  });
              }

              // --- Live search dropdown ---
              const searchInput = document.getElementById('searchInput');
              const liveResults = document.getElementById('liveResults');

              function renderLiveResults(query) {
                  const q = query.trim().toLowerCase();
                  if (!q) { liveResults.classList.remove('show'); return; }

                  const activeCat = (document.querySelector('.search-tab.active')?.dataset.cat || 'all').toLowerCase();
                  const matches = carDatabase.filter(c => {
                      const catMatch = activeCat === 'all' || c.cat === activeCat;
                      return catMatch && (c.name.toLowerCase().includes(q) || c.series.toLowerCase().includes(q));
                  }).slice(0, 6);

                  if (!matches.length) {
                      liveResults.innerHTML = '<div class="slr-item" style="cursor:default;opacity:.6">Không tìm thấy xe phù hợp</div>';
                  } else {
                      liveResults.innerHTML = matches.map(c => `
                          <div class="slr-item" onclick="window.location.href='${c.link}'" style="cursor:pointer">
                              <img class="slr-thumb" src="${c.img}" alt="${c.name}">
                              <div>
                                  <div class="slr-name">${c.name}</div>
                                  <div class="slr-series">${c.series} · ${c.price}</div>
                              </div>
                          </div>
                      `).join('');
                  }
                  liveResults.classList.add('show');
              }

              searchInput.addEventListener('input', function () {
                  renderLiveResults(this.value);
              });

              searchInput.addEventListener('keydown', function (e) {
                  if (e.key === 'Enter') {
                      liveResults.classList.remove('show');
                      const activeCat = document.querySelector('.search-tab.active')?.dataset.cat || 'all';
                      filterCards(activeCat, this.value);
                      modelsSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                  }
              });

              document.addEventListener('click', (e) => {
                  if (!e.target.closest('.search-input-wrap')) liveResults.classList.remove('show');
              });

              // --- Search button ---
              const btnSearch = document.querySelector('.btn-search');
              if (btnSearch) {
                  btnSearch.addEventListener('click', function () {
                      liveResults.classList.remove('show');
                      const activeCat = document.querySelector('.search-tab.active')?.dataset.cat || 'all';
                      filterCards(activeCat, searchInput.value);
                      modelsSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                  });
              }

              // --- Search tabs (category filter) ---
              const pillCatMap = { 'Tất cả': 'all', 'SUV Đa dụng ': 'suv', 'Sedan Thanh lịch': 'sedan', 'MPV Sang trọng ': 'mpv' };
              function syncPills(cat) {
                  document.querySelectorAll('.cat-pill').forEach(p => {
                      const pillCat = pillCatMap[p.textContent] || 'all';
                      p.classList.toggle('active', pillCat === cat.toLowerCase());
                  });
              }
              function syncTabs(cat) {
                  document.querySelectorAll('.search-tab').forEach(t => {
                      t.classList.toggle('active', t.dataset.cat.toLowerCase() === cat.toLowerCase());
                  });
              }

              document.querySelectorAll('.search-tab').forEach(tab => {
                  tab.addEventListener('click', function () {
                      const cat = this.dataset.cat;
                      syncTabs(cat);
                      syncPills(cat);
                      filterCards(cat, searchInput.value);
                      modelsSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                  });
              });

              // --- Category pills ---
              document.querySelectorAll('.cat-pill').forEach(pill => {
                  pill.addEventListener('click', function () {
                      const cat = pillCatMap[this.textContent] || 'all';
                      syncPills(cat);
                      syncTabs(cat);
                      filterCards(cat, searchInput.value);
                      modelsSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                  });
              });

              // --- CTA "Tìm xe ngay" → scroll to search ---
              document.querySelectorAll('.btn-cta').forEach(btn => {
                  if (btn.textContent.includes('Tìm xe')) {
                      btn.addEventListener('click', () => {
                          document.getElementById('search')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
                          setTimeout(() => searchInput?.focus(), 600);
                      });
                  }
              });
          })();

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
