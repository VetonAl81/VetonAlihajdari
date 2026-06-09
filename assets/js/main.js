(function () {
    'use strict';

    /* ══════════════════════════════════════
       PAGE LOADER
    ══════════════════════════════════════ */
    var loader = document.getElementById('vae-loader');
    function hideLoader() {
        if (!loader) return;
        loader.classList.add('hidden');
        document.body.classList.remove('vae-loading');
    }
    if (document.readyState === 'complete') {
        hideLoader();
    } else {
        window.addEventListener('load', hideLoader);
        setTimeout(hideLoader, 2500); // safety fallback
    }

    /* ══════════════════════════════════════
       READING PROGRESS BAR
    ══════════════════════════════════════ */
    var progressBar = document.getElementById('vae-progress');
    function updateProgress() {
        if (!progressBar) return;
        var total = document.documentElement.scrollHeight - window.innerHeight;
        progressBar.style.width = (total > 0 ? (window.scrollY / total) * 100 : 0) + '%';
    }

    /* ══════════════════════════════════════
       NAVBAR: SHADOW + ACTIVE LINK
    ══════════════════════════════════════ */
    var nav      = document.getElementById('vae-nav');
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.nav-links a[href^="#"], .nav-drawer-links a[href^="#"]');

    function onScroll() {
        var y = window.scrollY;

        // progress
        updateProgress();

        // shadow
        if (nav) nav.style.boxShadow = y > 10 ? '0 2px 20px rgba(0,0,0,.14)' : '';

        // active link
        var current = '';
        sections.forEach(function (s) {
            if (y >= s.offsetTop - 120) current = s.id;
        });
        navLinks.forEach(function (a) {
            a.classList.toggle('active', a.getAttribute('href') === '#' + current);
        });
    }
    window.addEventListener('scroll', onScroll, { passive: true });

    /* ══════════════════════════════════════
       HERO PARALLAX (desktop only)
    ══════════════════════════════════════ */
    var heroSection = document.querySelector('.vae-hero');
    function onScrollParallax() {
        if (!heroSection || window.innerWidth < 768) return;
        heroSection.style.backgroundPositionY = (window.scrollY * 0.4) + 'px';
    }
    window.addEventListener('scroll', onScrollParallax, { passive: true });

    /* ══════════════════════════════════════
       MOBILE NAV DRAWER
    ══════════════════════════════════════ */
    var hamburger  = document.getElementById('hamburger');
    var drawer     = document.getElementById('nav-drawer');
    var overlay    = document.getElementById('nav-overlay');
    var closeBtn   = document.getElementById('nav-drawer-close');
    var firstLink  = drawer ? drawer.querySelector('a, button') : null;

    function openDrawer() {
        if (!drawer) return;
        drawer.classList.add('open');
        drawer.setAttribute('aria-hidden', 'false');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        if (hamburger) { hamburger.classList.add('is-open'); hamburger.setAttribute('aria-expanded', 'true'); }
        if (firstLink) firstLink.focus();
    }
    function closeDrawer() {
        if (!drawer) return;
        drawer.classList.remove('open');
        drawer.setAttribute('aria-hidden', 'true');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
        if (hamburger) { hamburger.classList.remove('is-open'); hamburger.setAttribute('aria-expanded', 'false'); hamburger.focus(); }
    }

    if (hamburger) hamburger.addEventListener('click', function () {
        drawer.classList.contains('open') ? closeDrawer() : openDrawer();
    });
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (overlay)  overlay.addEventListener('click', closeDrawer);

    // Close drawer on ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('open')) closeDrawer();
    });

    // Close drawer when a link is clicked
    if (drawer) drawer.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', closeDrawer);
    });

    /* ══════════════════════════════════════
       SWIPE TO CLOSE DRAWER
    ══════════════════════════════════════ */
    var touchStartX = 0;
    if (drawer) {
        drawer.addEventListener('touchstart', function (e) {
            touchStartX = e.touches[0].clientX;
        }, { passive: true });
        drawer.addEventListener('touchend', function (e) {
            if (e.changedTouches[0].clientX - touchStartX > 60) closeDrawer();
        }, { passive: true });
    }

    /* ══════════════════════════════════════
       BACK TO TOP
    ══════════════════════════════════════ */
    var btt = document.getElementById('back-to-top');
    if (btt) {
        window.addEventListener('scroll', function () {
            btt.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        btt.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ══════════════════════════════════════
       STATS COUNTER ANIMATION
    ══════════════════════════════════════ */
    var statsObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var el  = entry.target;
            var txt = el.textContent.trim();
            var num = parseInt(txt.replace(/\D/g, ''), 10);
            var suf = txt.replace(/[\d]/g, '');
            if (isNaN(num)) return;
            var start = performance.now();
            var dur   = 1800;
            function step(now) {
                var p = Math.min((now - start) / dur, 1);
                var e = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.round(e * num) + suf;
                if (p < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
            statsObserver.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.stat-num').forEach(function (el) { statsObserver.observe(el); });

    /* ══════════════════════════════════════
       SKILL BAR ANIMATION
    ══════════════════════════════════════ */
    var skillObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var fill = entry.target.querySelector('.skill-fill');
            if (fill) fill.style.width = fill.dataset.width + '%';
            skillObserver.unobserve(entry.target);
        });
    }, { threshold: 0.3 });
    document.querySelectorAll('.skill-item').forEach(function (el) { skillObserver.observe(el); });

    /* ══════════════════════════════════════
       SCROLL REVEAL
    ══════════════════════════════════════ */
    var revealEls = document.querySelectorAll(
        '.portfolio-card,.project-card,.pub-item,.focus-card,.timeline-item,.stat-item,.skills-col'
    );
    revealEls.forEach(function (el) { el.classList.add('reveal'); });
    var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) { entry.target.classList.add('visible'); revealObserver.unobserve(entry.target); }
        });
    }, { threshold: 0.08 });
    revealEls.forEach(function (el) { revealObserver.observe(el); });

    /* ══════════════════════════════════════
       PROJECT FILTER
    ══════════════════════════════════════ */
    document.querySelectorAll('.filter-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');
            var cat = this.dataset.filter;
            document.querySelectorAll('.project-card').forEach(function (card) {
                card.style.display = (cat === 'all' || card.dataset.cat === cat) ? '' : 'none';
            });
        });
    });

    /* ══════════════════════════════════════
       TABS + SWIPE SUPPORT
    ══════════════════════════════════════ */
    document.querySelectorAll('.tabs').forEach(function (tabGroup) {
        var prefix  = tabGroup.dataset.prefix;
        var buttons = Array.from(tabGroup.querySelectorAll('.tab-btn'));

        function activateTab(idx) {
            idx = Math.max(0, Math.min(idx, buttons.length - 1));
            buttons.forEach(function (b) { b.classList.remove('active'); });
            buttons[idx].classList.add('active');
            document.querySelectorAll('[id^="' + prefix + '-"]').forEach(function (p) { p.classList.remove('active'); });
            var target = document.getElementById(prefix + '-' + buttons[idx].dataset.tab);
            if (target) target.classList.add('active');
        }

        buttons.forEach(function (btn, i) {
            btn.addEventListener('click', function () { activateTab(i); });
        });

        // Swipe on panel
        var container = document.querySelector('.' + prefix + '-panels') || tabGroup.nextElementSibling;
        if (container) {
            var swipeStartX = 0;
            container.addEventListener('touchstart', function (e) { swipeStartX = e.touches[0].clientX; }, { passive: true });
            container.addEventListener('touchend', function (e) {
                var dx = e.changedTouches[0].clientX - swipeStartX;
                var active = buttons.findIndex(function (b) { return b.classList.contains('active'); });
                if (Math.abs(dx) > 50) activateTab(active + (dx < 0 ? 1 : -1));
            }, { passive: true });
        }
    });

    /* ══════════════════════════════════════
       SMOOTH SCROLL (offset for fixed nav)
    ══════════════════════════════════════ */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            var navH   = nav ? nav.offsetHeight : 68;
            var offset = target.getBoundingClientRect().top + window.scrollY - navH - 8;
            window.scrollTo({ top: offset, behavior: 'smooth' });
        });
    });

    /* ══════════════════════════════════════
       DARK MODE
    ══════════════════════════════════════ */
    var darkBtns = [
        document.getElementById('dark-toggle'),
        document.getElementById('dark-toggle-desktop')
    ];
    var isDark = localStorage.getItem('vae-dark') === 'true';
    if (isDark) document.body.classList.add('vae-dark');

    function updateDarkIcons() {
        var icon = document.body.classList.contains('vae-dark')
            ? '<i class="bi bi-sun-fill"></i>'
            : '<i class="bi bi-moon-fill"></i>';
        darkBtns.forEach(function (btn) { if (btn) btn.innerHTML = icon; });
    }
    updateDarkIcons();
    darkBtns.forEach(function (btn) {
        if (!btn) return;
        btn.addEventListener('click', function () {
            document.body.classList.toggle('vae-dark');
            localStorage.setItem('vae-dark', document.body.classList.contains('vae-dark'));
            updateDarkIcons();
        });
    });

    /* ══════════════════════════════════════
       ACCESSIBILITY TOOLBAR
    ══════════════════════════════════════ */
    var fontScale    = parseFloat(localStorage.getItem('vae-font-scale') || '1');
    var a11yContrast = localStorage.getItem('vae-contrast')  === 'true';
    var a11yDyslexia = localStorage.getItem('vae-dyslexia')  === 'true';
    var a11yMotion   = localStorage.getItem('vae-no-motion') === 'true';

    function applyA11y() {
        document.documentElement.style.setProperty('--font-scale', fontScale);
        document.body.classList.toggle('vae-contrast',  a11yContrast);
        document.body.classList.toggle('vae-dyslexia',  a11yDyslexia);
        document.body.classList.toggle('vae-no-motion', a11yMotion);
        var c = document.getElementById('a11y-contrast');
        var d = document.getElementById('a11y-dyslexia');
        var m = document.getElementById('a11y-motion');
        if (c) c.classList.toggle('active', a11yContrast);
        if (d) d.classList.toggle('active', a11yDyslexia);
        if (m) m.classList.toggle('active', a11yMotion);
    }
    applyA11y();

    function a11yBind(id, fn) {
        var el = document.getElementById(id);
        if (el) el.addEventListener('click', fn);
    }
    a11yBind('a11y-font-dec', function () { fontScale = Math.max(.8, parseFloat((fontScale - .1).toFixed(1))); localStorage.setItem('vae-font-scale', fontScale); applyA11y(); });
    a11yBind('a11y-font-inc', function () { fontScale = Math.min(1.5, parseFloat((fontScale + .1).toFixed(1))); localStorage.setItem('vae-font-scale', fontScale); applyA11y(); });
    a11yBind('a11y-contrast', function () { a11yContrast = !a11yContrast; localStorage.setItem('vae-contrast', a11yContrast); applyA11y(); });
    a11yBind('a11y-dyslexia', function () { a11yDyslexia = !a11yDyslexia; localStorage.setItem('vae-dyslexia', a11yDyslexia); applyA11y(); });
    a11yBind('a11y-motion',   function () { a11yMotion   = !a11yMotion;   localStorage.setItem('vae-no-motion', a11yMotion); applyA11y(); });
    a11yBind('a11y-reset', function () {
        fontScale = 1; a11yContrast = false; a11yDyslexia = false; a11yMotion = false;
        ['vae-font-scale','vae-contrast','vae-dyslexia','vae-no-motion'].forEach(function (k) { localStorage.removeItem(k); });
        applyA11y();
    });

    /* ══════════════════════════════════════
       AJAX CONTACT FORM
    ══════════════════════════════════════ */
    var form    = document.getElementById('vae-contact-form');
    var success = document.getElementById('contact-success');
    var errors  = document.getElementById('contact-errors');
    var submit  = document.getElementById('vae-submit');

    if (form && typeof vaeAjax !== 'undefined') {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            success.style.display = 'none';
            errors.style.display  = 'none';
            submit.disabled = true;
            submit.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending…';

            var data = new FormData(form);
            data.append('action', 'vae_contact');
            data.append('nonce',  vaeAjax.nonce);

            fetch(vaeAjax.ajaxurl, { method: 'POST', body: data })
                .then(function (r) { return r.json(); })
                .then(function (res) {
                    if (res.success) {
                        success.textContent   = res.data.message;
                        success.style.display = 'block';
                        form.reset();
                        success.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        var msgs = res.data && res.data.errors ? res.data.errors.join('<br>') : 'Something went wrong.';
                        errors.innerHTML     = msgs;
                        errors.style.display = 'block';
                    }
                })
                .catch(function () {
                    errors.textContent   = 'Network error. Please try again or email directly.';
                    errors.style.display = 'block';
                })
                .finally(function () {
                    submit.disabled  = false;
                    submit.innerHTML = '<i class="bi bi-send-fill"></i> Send Message';
                });
        });
    }
})();
