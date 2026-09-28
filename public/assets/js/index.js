/* =========================================================
   GLTIdesk — script.js
   ========================================================= */
(function () {
  'use strict';

  const initIcons = () => {
    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }
  };

  /* ---------- Navbar ao scroll ---------- */
  const navbar = document.getElementById('navbar');
  const onScroll = () => {
    if (!navbar) return;
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ---------- Menu mobile ---------- */
  const navToggle = document.getElementById('navToggle');
  const navLinks  = document.getElementById('navLinks');

  const closeMenu = () => {
    if (!navLinks || !navToggle) return;
    navLinks.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.innerHTML = '<i data-lucide="menu"></i>';
    document.body.style.overflow = '';
    initIcons();
  };

  const openMenu = () => {
    if (!navLinks || !navToggle) return;
    navLinks.classList.add('open');
    navToggle.setAttribute('aria-expanded', 'true');
    navToggle.innerHTML = '<i data-lucide="x"></i>';
    document.body.style.overflow = 'hidden';
    initIcons();
  };

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      navLinks.classList.contains('open') ? closeMenu() : openMenu();
    });

    navLinks.querySelectorAll('a').forEach((a) =>
      a.addEventListener('click', closeMenu)
    );

    document.addEventListener('click', (e) => {
      if (
        navLinks.classList.contains('open') &&
        !navLinks.contains(e.target) &&
        !navToggle.contains(e.target)
      ) closeMenu();
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 900 && navLinks.classList.contains('open')) closeMenu();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navLinks.classList.contains('open')) closeMenu();
    });
  }

  /* ---------- Reveal on scroll ---------- */
  const initReveal = () => {
    const selectors = [
      '.section-header',
      '.hero-text',
      '.hero-mockup',
      '.flow-step',
      '.card',
      '.case-area',
      '.plataforma-text',
      '.plataforma-image',
      '.evolucao-step',
      '.projeto-figure',
      '.fluxo',
      '.plano-card',
      '.opensource-text',
      '.opensource-image',
      '.parceiro-card',
      '.galeria-item',
      '.contato-info',
      '.contato-form',
      '.cta-final-content'
    ].join(',');

    const elements = document.querySelectorAll(selectors);

    if (!('IntersectionObserver' in window)) {
      elements.forEach((el) => el.classList.add('reveal', 'visible'));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    elements.forEach((el) => {
      el.classList.add('reveal');
      observer.observe(el);
    });
  };

  /* ---------- Formulário de contato ---------- */
  const initForm = () => {
    const form = document.getElementById('contatoForm');
    const feedback = document.getElementById('formFeedback');
    if (!form || !feedback) return;

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      if (!form.checkValidity()) {
        feedback.className = 'form-feedback visible erro';
        feedback.textContent = 'Preencha todos os campos obrigatórios.';
        return;
      }

      // TODO: enviar para endpoint PHP real
      // fetch(form.action, { method: 'POST', body: new FormData(form) })
      //   .then(res => { ... })
      //   .catch(err => { ... })

      feedback.className = 'form-feedback visible sucesso';
      feedback.textContent = 'Mensagem enviada com sucesso. Em breve entraremos em contato.';
      form.reset();

      setTimeout(() => feedback.classList.remove('visible'), 6000);
    });
  };

  /* ---------- Ano no footer ---------- */
  const initYear = () => {
    const el = document.getElementById('anoAtual');
    if (el) el.textContent = new Date().getFullYear();
  };

  /* ---------- Smooth scroll (fallback) ---------- */
  const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach((a) => {
      a.addEventListener('click', (e) => {
        const href = a.getAttribute('href');
        if (!href || href === '#') return;
        const target = document.querySelector(href);
        if (!target) return;
        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.pageYOffset - 80;
        window.scrollTo({ top, behavior: 'smooth' });
      });
    });
  };

  /* ---------- Boot ---------- */
  const boot = () => {
    initIcons();
    initReveal();
    initForm();
    initYear();
    initSmoothScroll();
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }

  // Reforço: garante ícones após o Lucide carregar (defer)
  window.addEventListener('load', initIcons);
})();