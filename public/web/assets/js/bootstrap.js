
    // ======= Tab Switching =======
    function switchTab(btn, tabGroupId, contentGroupId, targetId) {
        // Update tab buttons
        const tabGroup = document.getElementById(tabGroupId);
        tabGroup.querySelectorAll('.ft').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');

        // Update content panes
        const contentGroup = document.getElementById(contentGroupId);
        contentGroup.querySelectorAll('.tab-pane-custom').forEach(p => p.classList.remove('active'));
        document.getElementById(targetId).classList.add('active');
    }

    // ======= Hero Tab Switching =======
    function switchHeroTab(btn, type) {
        document.querySelectorAll('.hero-tabs .htab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
    }

    // ======= Favorite Heart Toggle =======
    document.querySelectorAll('.v-fav').forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('bi-heart')) {
                icon.classList.replace('bi-heart', 'bi-heart-fill');
                icon.style.color = '#EF4444';
            } else {
                icon.classList.replace('bi-heart-fill', 'bi-heart');
                icon.style.color = '';
            }
        });
    });

    // ======= Smooth scroll for anchor links =======
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
