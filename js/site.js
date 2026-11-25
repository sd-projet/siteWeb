/* Senebou DIARRA — interactions du site (sans dépendance) */
(function () {
  'use strict';
  var root = document.documentElement;
  var body = document.body;
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };

  /* ---- thème (mémorisé si possible) ---- */
  var saved = null;
  try { saved = localStorage.getItem('theme'); } catch (e) {}
  if (saved) root.setAttribute('data-theme', saved);
  var themeBtn = $('#theme-toggle');
  if (themeBtn) {
    themeBtn.addEventListener('click', function () {
      var next = root.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
      root.setAttribute('data-theme', next);
      try { localStorage.setItem('theme', next); } catch (e) {}
    });
  }

  /* ---- preloader ---- */
  var pre = $('.preloader');
  function hidePre() { if (pre) pre.classList.add('is-done'); }
  window.addEventListener('load', function () { setTimeout(hidePre, 250); });
  setTimeout(hidePre, 2500); // sécurité si une ressource externe est lente

  /* ---- menu mobile ---- */
  var toggle = $('.menu-toggle');
  function closeMenu() { body.classList.remove('menu-open'); if (toggle) toggle.setAttribute('aria-expanded', 'false'); }
  if (toggle) {
    toggle.addEventListener('click', function () {
      var open = body.classList.toggle('menu-open');
      toggle.setAttribute('aria-expanded', open);
    });
    $$('.nav a').forEach(function (a) { a.addEventListener('click', closeMenu); });
  }
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeMenu(); closeModals(); } });

  /* ---- header, barre de progression, bouton haut de page ---- */
  var header = $('.site-header');
  var bar = $('.progress');
  var toTop = $('.to-top');
  var tlLine = $('.timeline__line');
  var tl = $('.timeline');
  var ticking = false;
  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    var h = document.documentElement.scrollHeight - window.innerHeight;
    if (header) header.classList.toggle('is-scrolled', y > 24);
    if (bar) bar.style.transform = 'scaleX(' + (h > 0 ? y / h : 0) + ')';
    if (toTop) toTop.classList.toggle('is-shown', y > 600);
    if (tl && tlLine) {
      var r = tl.getBoundingClientRect();
      var p = (window.innerHeight * 0.6 - r.top) / r.height;
      tlLine.style.height = Math.max(0, Math.min(1, p)) * (r.height - 16) + 'px';
    }
    ticking = false;
  }
  window.addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
  window.addEventListener('resize', onScroll);
  onScroll();
  if (toTop) toTop.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });

  /* ---- apparition au scroll ---- */
  var reveals = $$('[data-reveal], .step, .tl-item');
  if ('IntersectionObserver' in window && !reduce) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) { en.target.classList.add('is-visible'); io.unobserve(en.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ---- texte tapé dans le hero ---- */
  var typed = $('.typed');
  if (typed) {
    var words = (typed.getAttribute('data-words') || '').split('|').filter(Boolean);
    if (reduce || words.length < 2) { typed.textContent = words[0] || typed.textContent; }
    else {
      var wi = 0, ci = 0, del = false;
      var h1 = typed.closest('h1');
      var visible = true;

      // Réserve la hauteur du titre pour le mot le plus long : le contenu ne bouge plus
      function reserveHeight() {
        if (!h1) return;
        h1.style.minHeight = '';
        var current = typed.textContent, max = 0;
        words.forEach(function (w) {
          typed.textContent = w;
          max = Math.max(max, h1.offsetHeight);
        });
        typed.textContent = current;
        h1.style.minHeight = max + 'px';
      }
      reserveHeight();
      window.addEventListener('resize', reserveHeight);

      // Met l'animation en pause quand le titre n'est plus à l'écran
      if ('IntersectionObserver' in window && h1) {
        new IntersectionObserver(function (en) {
          var was = visible;
          visible = en[0].isIntersecting;
          if (visible && !was) tick();
        }).observe(h1);
      }

      var running = false;
      function tick() {
        if (running || !visible) return;
        running = true;
        step();
      }
      function step() {
        if (!visible) { running = false; return; }
        var w = words[wi];
        typed.textContent = w.slice(0, ci);
        var delay = del ? 35 : 75;
        if (!del && ci === w.length) { del = true; delay = 1600; }
        else if (del && ci === 0) { del = false; wi = (wi + 1) % words.length; delay = 350; }
        ci += del ? -1 : 1;
        setTimeout(step, delay);
      }
      tick();
    }
  }

  /* ---- compteurs ---- */
  $$('[data-count]').forEach(function (el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    var suffix = el.getAttribute('data-suffix') || '';
    if (reduce || !('IntersectionObserver' in window)) { el.textContent = target + suffix; return; }
    var o = new IntersectionObserver(function (en) {
      if (!en[0].isIntersecting) return;
      o.disconnect();
      var t0 = null;
      (function step(t) {
        if (!t0) t0 = t;
        var p = Math.min((t - t0) / 1400, 1);
        el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
        if (p < 1) requestAnimationFrame(step);
      })(performance.now());
    });
    o.observe(el);
  });

  /* ---- halo qui suit la souris sur les cartes ---- */
  $$('.card').forEach(function (c) {
    c.addEventListener('pointermove', function (e) {
      var r = c.getBoundingClientRect();
      c.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      c.style.setProperty('--my', (e.clientY - r.top) + 'px');
    });
  });

  /* ---- légère inclinaison 3D de l'illustration (souris uniquement) ---- */
  var frame = $('.hero__frame');
  if (frame && !reduce && window.matchMedia('(hover: hover)').matches) {
    var wrap = frame.parentElement;
    wrap.addEventListener('pointermove', function (e) {
      var r = wrap.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width - 0.5;
      var y = (e.clientY - r.top) / r.height - 0.5;
      frame.style.transform = 'perspective(900px) rotateY(' + (x * 10) + 'deg) rotateX(' + (-y * 10) + 'deg)';
    });
    wrap.addEventListener('pointerleave', function () { frame.style.transform = ''; });
  }

  /* ---- filtres des projets ---- */
  var filters = $$('.filter');
  var projects = $$('.project');
  filters.forEach(function (f) {
    f.addEventListener('click', function () {
      filters.forEach(function (x) { x.classList.remove('is-active'); x.setAttribute('aria-pressed', 'false'); });
      f.classList.add('is-active'); f.setAttribute('aria-pressed', 'true');
      var tag = f.getAttribute('data-filter');
      projects.forEach(function (p) {
        var show = tag === 'all' || (p.getAttribute('data-tags') || '').split(' ').indexOf(tag) > -1;
        if (show) { p.hidden = false; requestAnimationFrame(function () { p.classList.remove('is-leaving'); }); }
        else { p.classList.add('is-leaving'); setTimeout(function () { if (p.classList.contains('is-leaving')) p.hidden = true; }, 300); }
      });
    });
  });

  /* ---- "En savoir plus" des projets ---- */
  $$('.project__more .link-arrow').forEach(function (b) {
    b.addEventListener('click', function () {
      var card = b.closest('.project');
      var open = card.classList.toggle('is-open');
      b.setAttribute('aria-expanded', open);
      b.firstChild.nodeValue = open ? 'Réduire' : 'En savoir plus';
    });
  });

  /* ---- sections repliables (CV) ---- */
  $$('[data-collapse-btn]').forEach(function (b) {
    b.addEventListener('click', function () {
      var t = document.getElementById(b.getAttribute('data-collapse-btn'));
      var open = t.classList.toggle('is-open');
      b.setAttribute('aria-expanded', open);
      b.firstChild.nodeValue = open ? 'Masquer les expériences plus anciennes' : 'Voir les expériences plus anciennes';
      if (open) $$('.tl-item', t).forEach(function (i) { setTimeout(function () { i.classList.add('is-visible'); }, 200); });
    });
  });

  /* ---- modales (vidéo démo + merci) ---- */
  function closeModals() {
    $$('.modal.is-open').forEach(function (m) {
      m.classList.remove('is-open');
      var f = $('iframe', m);
      if (f && f.dataset.src) f.removeAttribute('src'); // coupe la vidéo
    });
  }
  $$('[data-modal]').forEach(function (t) {
    t.addEventListener('click', function (e) {
      e.preventDefault();
      var m = document.getElementById(t.getAttribute('data-modal'));
      if (!m) return;
      var f = $('iframe', m);
      if (f && f.dataset.src) f.setAttribute('src', f.dataset.src);
      m.classList.add('is-open');
    });
  });
  $$('.modal').forEach(function (m) {
    m.addEventListener('click', function (e) {
      if (e.target === m || e.target.closest('[data-close]')) {
        closeModals();
        if (m.hasAttribute('data-reload-on-close')) window.location.reload();
      }
    });
  });

  /* ---- formulaire de contact (Formspree, sans rechargement) ---- */
  var form = $('#contact-form');
  if (form) {
    var status = $('.form__status', form);
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = $('button[type="submit"]', form);
      var label = btn.firstChild.nodeValue;
      btn.firstChild.nodeValue = 'Envoi en cours… ';
      btn.disabled = true;
      status.className = 'form__status'; status.textContent = '';
      fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } })
        .then(function (r) {
          if (r.ok) { form.reset(); document.getElementById('thanks').classList.add('is-open'); }
          else { status.className = 'form__status is-err'; status.textContent = 'Une erreur est survenue, veuillez réessayer.'; }
        })
        .catch(function () { status.className = 'form__status is-err'; status.textContent = 'Erreur de connexion, vérifiez votre réseau.'; })
        .finally(function () { btn.firstChild.nodeValue = label; btn.disabled = false; });
    });
  }
})();