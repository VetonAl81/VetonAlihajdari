(function () {
    'use strict';

    /* ══════════════════════════════════════
       READING PROGRESS BAR
    ══════════════════════════════════════ */
    var progress = document.getElementById('vae-progress');
    function updateProgress() {
        if (!progress) return;
        var scrolled = window.scrollY;
        var total    = document.documentElement.scrollHeight - window.innerHeight;
        progress.style.width = (total > 0 ? (scrolled / total) * 100 : 0) + '%';
    }
    window.addEventListener('scroll', updateProgress, { passive: true });

    /* ══════════════════════════════════════
       NAVBAR SHADOW + ACTIVE LINK
    ══════════════════════════════════════ */
    var nav      = document.getElementById('vae-nav');
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.nav-links a[href^="#"]');

    window.addEventListener('scroll', function () {
        if (nav) nav.style.boxShadow = window.scrollY > 10 ? '0 2px 16px rgba(0,0,0,.12)' : '';

        var current = '';
        sections.forEach(function (s) {
            if (window.scrollY >= s.offsetTop - 110) current = s.id;
        });
        navLinks.forEach(function (a) {
            a.classList.toggle('active', a.getAttribute('href') === '#' + current);
        });

        updateProgress();
    }, { passive: true });

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
    function animateCounter(el, target, suffix) {
        var start     = 0;
        var duration  = 1800;
        var startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var ease     = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(ease * target) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var statsObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var el   = entry.target;
            var text = el.textContent.trim();
            var num  = parseInt(text.replace(/\D/g, ''), 10);
            var suf  = text.replace(/[\d]/g, '');
            if (!isNaN(num)) animateCounter(el, num, suf);
            statsObserver.unobserve(el);
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.stat-num').forEach(function (el) {
        statsObserver.observe(el);
    });

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
    document.querySelectorAll('.skill-item').forEach(function (el) {
        skillObserver.observe(el);
    });

    /* ══════════════════════════════════════
       SCROLL REVEAL
    ══════════════════════════════════════ */
    var revealEls = document.querySelectorAll(
        '.portfolio-card, .project-card, .pub-item, .focus-card, .timeline-item, .stat-item, .skills-col'
    );
    revealEls.forEach(function (el) { el.classList.add('reveal'); });

    var revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
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
       TABS
    ══════════════════════════════════════ */
    document.querySelectorAll('.tabs').forEach(function (tabGroup) {
        var prefix = tabGroup.dataset.prefix;
        tabGroup.querySelectorAll('.tab-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                tabGroup.querySelectorAll('.tab-btn').forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');
                document.querySelectorAll('[id^="' + prefix + '-"]').forEach(function (p) { p.classList.remove('active'); });
                var target = document.getElementById(prefix + '-' + btn.dataset.tab);
                if (target) target.classList.add('active');
            });
        });
    });

    /* ══════════════════════════════════════
       SMOOTH SCROLL + MOBILE MENU CLOSE
    ══════════════════════════════════════ */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            var offset = target.getBoundingClientRect().top + window.scrollY - 80;
            window.scrollTo({ top: offset, behavior: 'smooth' });
            var nl = document.querySelector('.nav-links');
            if (nl) nl.classList.remove('open');
        });
    });

    /* ══════════════════════════════════════
       DARK MODE
    ══════════════════════════════════════ */
    var darkBtn  = document.getElementById('dark-toggle');
    var darkPref = localStorage.getItem('vae-dark') === 'true';
    if (darkPref) document.body.classList.add('vae-dark');

    if (darkBtn) {
        function updateDarkIcon() {
            darkBtn.innerHTML = document.body.classList.contains('vae-dark')
                ? '<i class="bi bi-sun-fill"></i>'
                : '<i class="bi bi-moon-fill"></i>';
        }
        updateDarkIcon();
        darkBtn.addEventListener('click', function () {
            document.body.classList.toggle('vae-dark');
            localStorage.setItem('vae-dark', document.body.classList.contains('vae-dark'));
            updateDarkIcon();
        });
    }

    /* ══════════════════════════════════════
       ACCESSIBILITY TOOLBAR
    ══════════════════════════════════════ */
    var fontScale   = parseFloat(localStorage.getItem('vae-font-scale') || '1');
    var a11yContrast = localStorage.getItem('vae-contrast')  === 'true';
    var a11yDyslexia = localStorage.getItem('vae-dyslexia')  === 'true';
    var a11yMotion   = localStorage.getItem('vae-no-motion') === 'true';

    function applyA11y() {
        document.documentElement.style.setProperty('--font-scale', fontScale);
        document.body.classList.toggle('vae-contrast',  a11yContrast);
        document.body.classList.toggle('vae-dyslexia',  a11yDyslexia);
        document.body.classList.toggle('vae-no-motion', a11yMotion);

        var cBtn = document.getElementById('a11y-contrast');
        var dBtn = document.getElementById('a11y-dyslexia');
        var mBtn = document.getElementById('a11y-motion');
        if (cBtn) cBtn.classList.toggle('active', a11yContrast);
        if (dBtn) dBtn.classList.toggle('active', a11yDyslexia);
        if (mBtn) mBtn.classList.toggle('active', a11yMotion);
    }
    applyA11y();

    var fDec = document.getElementById('a11y-font-dec');
    var fInc = document.getElementById('a11y-font-inc');
    var cBtn = document.getElementById('a11y-contrast');
    var dBtn = document.getElementById('a11y-dyslexia');
    var mBtn = document.getElementById('a11y-motion');
    var rBtn = document.getElementById('a11y-reset');

    if (fDec) fDec.addEventListener('click', function () {
        fontScale = Math.max(.8, parseFloat((fontScale - .1).toFixed(1)));
        localStorage.setItem('vae-font-scale', fontScale);
        applyA11y();
    });
    if (fInc) fInc.addEventListener('click', function () {
        fontScale = Math.min(1.5, parseFloat((fontScale + .1).toFixed(1)));
        localStorage.setItem('vae-font-scale', fontScale);
        applyA11y();
    });
    if (cBtn) cBtn.addEventListener('click', function () {
        a11yContrast = !a11yContrast;
        localStorage.setItem('vae-contrast', a11yContrast);
        applyA11y();
    });
    if (dBtn) dBtn.addEventListener('click', function () {
        a11yDyslexia = !a11yDyslexia;
        localStorage.setItem('vae-dyslexia', a11yDyslexia);
        applyA11y();
    });
    if (mBtn) mBtn.addEventListener('click', function () {
        a11yMotion = !a11yMotion;
        localStorage.setItem('vae-no-motion', a11yMotion);
        applyA11y();
    });
    if (rBtn) rBtn.addEventListener('click', function () {
        fontScale = 1; a11yContrast = false; a11yDyslexia = false; a11yMotion = false;
        ['vae-font-scale','vae-contrast','vae-dyslexia','vae-no-motion'].forEach(function (k) {
            localStorage.removeItem(k);
        });
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
