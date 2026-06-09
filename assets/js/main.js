(function () {
    'use strict';

    /* ── Navbar scroll shadow ── */
    var nav = document.getElementById('vae-nav');
    if (nav) {
        window.addEventListener('scroll', function () {
            nav.style.boxShadow = window.scrollY > 10 ? '0 2px 16px rgba(0,0,0,.12)' : '';
        }, { passive: true });
    }

    /* ── Active nav link on scroll ── */
    var sections = document.querySelectorAll('section[id]');
    var navLinks  = document.querySelectorAll('.nav-links a[href^="#"]');
    function setActiveLink() {
        var current = '';
        sections.forEach(function (s) {
            if (window.scrollY >= s.offsetTop - 100) current = s.id;
        });
        navLinks.forEach(function (a) {
            a.classList.toggle('active', a.getAttribute('href') === '#' + current);
        });
    }
    window.addEventListener('scroll', setActiveLink, { passive: true });

    /* ── Back to top ── */
    var btt = document.getElementById('back-to-top');
    if (btt) {
        window.addEventListener('scroll', function () {
            btt.classList.toggle('visible', window.scrollY > 400);
        }, { passive: true });
        btt.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ── Scroll reveal ── */
    var revealEls = document.querySelectorAll(
        '.portfolio-card, .project-card, .pub-item, .focus-card, .timeline-item, .stat-item'
    );
    revealEls.forEach(function (el) { el.classList.add('reveal'); });

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { observer.observe(el); });

    /* ── Project category filter ── */
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

    /* ── Tabs ── */
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

    /* ── Mobile menu close on link click ── */
    document.querySelectorAll('.nav-links a').forEach(function (a) {
        a.addEventListener('click', function () {
            var nl = document.querySelector('.nav-links');
            if (nl) nl.classList.remove('open');
        });
    });

    /* ── Smooth scroll ── */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                var offset = target.getBoundingClientRect().top + window.scrollY - 80;
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }
        });
    });

    /* ── AJAX Contact Form ── */
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
                    errors.textContent   = 'Network error. Please try again or contact via email.';
                    errors.style.display = 'block';
                })
                .finally(function () {
                    submit.disabled  = false;
                    submit.innerHTML = '<i class="bi bi-send-fill"></i> Send Message';
                });
        });
    }
})();
