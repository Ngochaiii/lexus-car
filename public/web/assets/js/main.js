// ══════════════════════════════════════
// NAVBAR — scroll effect & back-to-top
// ══════════════════════════════════════
window.addEventListener('scroll', () => {
    document.getElementById('nav').classList.toggle('s', window.scrollY > 100);
    document.getElementById('btt').classList.toggle('show', window.scrollY > 400);
});


// ══════════════════════════════════════
// MOBILE MENU
// ══════════════════════════════════════
const drawer   = document.getElementById('mobileDrawer');
const menuBtn  = document.getElementById('mobileMenuBtn');
const menuIcon = document.getElementById('menuIcon');
let menuOpen   = false;

function toggleMenu(force) {
    menuOpen = typeof force === 'boolean' ? force : !menuOpen;
    drawer.style.transform     = menuOpen ? 'translateX(0)' : 'translateX(100%)';
    drawer.style.pointerEvents = menuOpen ? 'auto' : 'none';
    menuIcon.className         = menuOpen ? 'bi bi-x-lg' : 'bi bi-list';
    document.body.classList.toggle('menu-open', menuOpen);
}

menuBtn.addEventListener('click', () => toggleMenu());
drawer.querySelectorAll('a').forEach(a => a.addEventListener('click', () => toggleMenu(false)));
