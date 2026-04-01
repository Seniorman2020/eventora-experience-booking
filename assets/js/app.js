const eventoraToggle = document.querySelector('[data-menu-toggle]');
const eventoraRoot = document.documentElement;

if (eventoraToggle) {
    eventoraToggle.addEventListener('click', () => {
        const open = eventoraRoot.classList.toggle('menu-open');
        eventoraToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
}
