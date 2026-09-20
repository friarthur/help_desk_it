const menuToggle = document.querySelector('.menu-toggle');
const mobileMenu = document.querySelector('.mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-nav-link');
const body = document.body;

const openMenu = () => {
    menuToggle.setAttribute('aria-expanded', 'true');
    mobileMenu.setAttribute('aria-hidden', 'false');
    mobileMenu.classList.add('open');
    body.classList.add('menu-open');
};

const closeMenu = () => {
    menuToggle.setAttribute('aria-expanded', 'false');
    mobileMenu.setAttribute('aria-hidden', 'true');
    mobileMenu.classList.remove('open');
    body.classList.remove('menu-open');
};

const toggleMenu = () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    if (isOpen) {
        closeMenu();
    } else {
        openMenu();
    }
};

menuToggle.addEventListener('click', toggleMenu);

mobileLinks.forEach((link) => {
    link.addEventListener('click', () => {
        closeMenu();
    });
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeMenu();
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth >= 1080) {
        closeMenu();
    }
});

document.addEventListener('click', (event) => {
    const isClickInsideMenu = mobileMenu.contains(event.target);
    const isClickOnToggle = menuToggle.contains(event.target);
    const isMenuOpen = menuToggle.getAttribute('aria-expanded') === 'true';

    if (isMenuOpen && !isClickInsideMenu && !isClickOnToggle) {
        closeMenu();
    }
});

const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');
const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

const updateActiveLink = () => {
    const scrollPosition = window.scrollY + 120;

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionBottom = sectionTop + section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
            navLinks.forEach((link) => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });

            mobileNavLinks.forEach((link) => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });

    if (scrollPosition < 200) {
        navLinks.forEach((link) => link.classList.remove('active'));
        mobileNavLinks.forEach((link) => link.classList.remove('active'));
        document.querySelector('.nav-link[href="#"]')?.classList.add('active');
        document.querySelector('.mobile-nav-link[href="#"]')?.classList.add('active');
    }
};

let scrollTicking = false;
window.addEventListener('scroll', () => {
    if (!scrollTicking) {
        window.requestAnimationFrame(() => {
            updateActiveLink();
            scrollTicking = false;
        });
        scrollTicking = true;
    }
});

window.addEventListener('load', () => {
    if (window.lucide) {
        window.lucide.createIcons();
    }
    updateActiveLink();
});