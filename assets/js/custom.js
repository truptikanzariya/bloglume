document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-navigation');
    const iconMenu = toggle.querySelector('.icon-menu');
    const iconClose = toggle.querySelector('.icon-close');

    toggle.addEventListener('click', function () {
        const isOpen = nav.classList.toggle('menu-open');

        // Toggle icon visibility
        if (isOpen) {
            iconMenu.style.display = 'none';
            iconClose.style.display = 'inline';
        } else {
            iconMenu.style.display = 'inline';
            iconClose.style.display = 'none';
        }

        // Update aria-expanded
        toggle.setAttribute('aria-expanded', isOpen);
    });
});
