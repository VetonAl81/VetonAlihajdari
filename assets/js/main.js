/* Veton Alihajdari – main.js */

(function () {
    'use strict';

    /* ── Navbar scroll shadow ── */
    const nav = document.getElementById('vae-nav');
    if (nav) {
        window.addEventListener('scroll', function () {
            nav.style.boxShadow = window.scrollY > 10
                ? '0 2px 16px rgba(0,0,0,.12)'
                : '';
        }, { passive: true });
    }

    /* ── Active nav link on scroll ── */
    const sections = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-links a[href^="#"]');

    function setActiveLink() {
        let current = '';
        sections.forEach(function (s) {
            if (window.scrollY >= s.offsetTop - 100) current = s.id;
        });
        navLinks.forEach(function (a) {
            a.classList.toggle('active', a.getAttribute('href') === '#' + current);
        });
    }
    window.addEventListener('scroll', setActiveLink, { passive: true });

    /* ── Project category filter ── */
    document.querySelectorAll('.filter-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var cat = this.dataset.filter;
            document.querySelectorAll('.filter-btn').forEach(function (b) {
                b.classList.remove('active');
            });
            this.classList.add('active');

            document.querySelectorAll('.project-card').forEach(function (card) {
                card.style.display = (cat === 'all' || card.dataset.cat === cat)
                    ? '' : 'none';
            });
        });
    });

    /* ── Tabs (Publications / Speaking) ── */
    document.querySelectorAll('.tabs').forEach(function (tabGroup) {
        var prefix = tabGroup.dataset.prefix;
        tabGroup.querySelectorAll('.tab-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                tabGroup.querySelectorAll('.tab-btn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                var panels = document.querySelectorAll('[id^="' + prefix + '-"]');
                panels.forEach(function (p) { p.classList.remove('active'); });

                var target = document.getElementById(prefix + '-' + btn.dataset.tab);
                if (target) target.classList.add('active');
            });
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
                        success.textContent  = res.data.message;
                        success.style.display = 'block';
                        form.reset();
                    } else {
                        var msgs = res.data && res.data.errors
                            ? res.data.errors.join('<br>')
                            : 'Something went wrong. Please try again.';
                        errors.innerHTML     = msgs;
                        errors.style.display = 'block';
                    }
                })
                .catch(function () {
                    errors.textContent   = 'Network error. Please try again.';
                    errors.style.display = 'block';
                })
                .finally(function () {
                    submit.disabled = false;
                    submit.innerHTML = '<i class="bi bi-send-fill"></i> Send Message';
                });
        });
    }

    /* ── Smooth-scroll for anchor links ── */
    document.querySelectorAll('a[href^="#"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
                /* close mobile menu if open */
                var nl = document.querySelector('.nav-links');
                if (nl) nl.classList.remove('open');
            }
        });
    });
})();
