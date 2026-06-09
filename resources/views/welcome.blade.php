<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Veton Alihajdari – Education Policy Expert, Digital Transformation Leader, Public Sector Executive with 26+ years of experience.">
    <title>Veton Alihajdari – Executive Digital Platform</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary:   #1a3a5c;
            --accent:    #2563eb;
            --accent-lt: #3b82f6;
            --light-bg:  #f0f4f8;
            --white:     #ffffff;
            --text:      #1e293b;
            --muted:     #64748b;
            --border:    #e2e8f0;
            --card-bg:   #ffffff;
            --shadow:    0 4px 20px rgba(0,0,0,.08);
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            background: var(--white);
            line-height: 1.6;
        }

        /* ── NAVBAR ── */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--border);
            padding: 0 2rem;
            display: flex; align-items: center; justify-content: space-between;
            height: 68px;
        }
        .nav-brand {
            display: flex; align-items: center; gap: .75rem;
            text-decoration: none; color: var(--primary);
        }
        .nav-logo {
            width: 40px; height: 40px; border-radius: 8px;
            background: var(--primary);
            color: #fff; font-weight: 800; font-size: 1rem;
            display: flex; align-items: center; justify-content: center;
        }
        .nav-brand-text { font-weight: 700; font-size: 1rem; line-height: 1.2; }
        .nav-brand-sub  { font-size: .7rem; font-weight: 400; color: var(--muted); }

        .nav-links { display: flex; gap: 1.5rem; list-style: none; align-items: center; }
        .nav-links a {
            text-decoration: none; color: var(--text); font-size: .875rem; font-weight: 500;
            transition: color .2s;
        }
        .nav-links a:hover { color: var(--accent); }
        .nav-links .btn-contact {
            background: var(--accent); color: #fff; padding: .45rem 1.1rem;
            border-radius: 6px; font-weight: 600;
        }
        .nav-links .btn-contact:hover { background: var(--primary); color: #fff; }
        .lang-toggle {
            background: var(--light-bg); border: 1px solid var(--border);
            color: var(--text); padding: .35rem .75rem; border-radius: 6px;
            font-size: .8rem; font-weight: 600; cursor: pointer;
            text-decoration: none;
        }
        .hamburger { display: none; background: none; border: none; cursor: pointer; font-size: 1.4rem; color: var(--text); }

        /* ── HERO ── */
        #home {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary) 0%, #0f2340 60%, #1e3a5f 100%);
            display: flex; align-items: center; justify-content: center;
            padding: 7rem 2rem 4rem;
            text-align: center; color: #fff;
        }
        .hero-inner { max-width: 800px; }
        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,.15); border: 1px solid rgba(255,255,255,.3);
            padding: .4rem 1.2rem; border-radius: 99px; font-size: .8rem;
            letter-spacing: .08em; text-transform: uppercase; font-weight: 600;
            margin-bottom: 1.5rem; color: rgba(255,255,255,.9);
        }
        .hero-inner h1 {
            font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 800;
            line-height: 1.15; margin-bottom: 1rem;
        }
        .hero-inner h1 span { color: #93c5fd; }
        .hero-tagline {
            font-size: 1.05rem; color: rgba(255,255,255,.8);
            margin-bottom: .5rem; font-weight: 400;
        }
        .hero-pos {
            font-size: .9rem; color: rgba(255,255,255,.65);
            margin-bottom: 2.5rem; max-width: 600px; margin-inline: auto;
        }
        .hero-cta { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3.5rem; }
        .btn-primary {
            background: var(--accent); color: #fff; padding: .75rem 2rem;
            border-radius: 8px; text-decoration: none; font-weight: 700;
            font-size: .95rem; transition: background .2s, transform .15s;
        }
        .btn-primary:hover { background: #1d4ed8; transform: translateY(-1px); }
        .btn-outline {
            background: transparent; color: #fff;
            border: 2px solid rgba(255,255,255,.5); padding: .75rem 2rem;
            border-radius: 8px; text-decoration: none; font-weight: 600;
            font-size: .95rem; transition: border-color .2s, background .2s;
        }
        .btn-outline:hover { border-color: #fff; background: rgba(255,255,255,.1); }

        /* Stats row */
        .stats-row {
            display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;
        }
        .stat-item { text-align: center; }
        .stat-num { font-size: 2rem; font-weight: 800; color: #93c5fd; display: block; }
        .stat-lbl { font-size: .75rem; color: rgba(255,255,255,.7); text-transform: uppercase; letter-spacing: .06em; }

        /* ── SECTION BASICS ── */
        section { padding: 5rem 2rem; }
        section:nth-child(even) { background: var(--light-bg); }
        .container { max-width: 1100px; margin: 0 auto; }
        .section-label {
            font-size: .75rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: .1em; color: var(--accent); margin-bottom: .5rem;
        }
        .section-title {
            font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 800;
            color: var(--primary); margin-bottom: 1rem; line-height: 1.2;
        }
        .section-lead { color: var(--muted); max-width: 640px; margin-bottom: 3rem; font-size: .975rem; }
        .divider { width: 60px; height: 4px; background: var(--accent); border-radius: 2px; margin-bottom: 1.5rem; }

        /* ── PROFILE ── */
        .profile-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start; }
        .profile-text p { color: var(--muted); margin-bottom: 1rem; font-size: .975rem; }
        .profile-badges { display: flex; flex-wrap: wrap; gap: .5rem; margin-top: 1.5rem; }
        .badge {
            background: var(--light-bg); border: 1px solid var(--border);
            color: var(--primary); padding: .35rem .9rem; border-radius: 99px;
            font-size: .8rem; font-weight: 600;
        }

        .focus-areas { display: flex; flex-direction: column; gap: 1rem; }
        .focus-card {
            background: var(--card-bg); border: 1px solid var(--border);
            border-radius: 10px; padding: 1.25rem 1.5rem;
            box-shadow: var(--shadow);
        }
        .focus-card h4 { font-weight: 700; color: var(--primary); margin-bottom: .3rem; font-size: .95rem; }
        .focus-card p { font-size: .85rem; color: var(--muted); }
        .focus-icon { font-size: 1.4rem; margin-bottom: .5rem; color: var(--accent); }

        /* ── TIMELINE ── */
        .timeline { position: relative; padding-left: 2.5rem; }
        .timeline::before {
            content: ''; position: absolute; left: .75rem; top: 0; bottom: 0;
            width: 2px; background: var(--border);
        }
        .timeline-item { position: relative; margin-bottom: 2rem; }
        .timeline-dot {
            position: absolute; left: -1.9rem; top: .3rem;
            width: 14px; height: 14px; border-radius: 50%;
            background: var(--accent); border: 3px solid var(--white);
            box-shadow: 0 0 0 2px var(--accent);
        }
        .timeline-period { font-size: .8rem; font-weight: 700; color: var(--accent); margin-bottom: .2rem; }
        .timeline-role { font-weight: 700; color: var(--primary); font-size: 1rem; }
        .timeline-org { font-size: .875rem; color: var(--muted); }

        /* ── PORTFOLIO ── */
        .portfolio-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem; }
        .portfolio-card {
            background: var(--card-bg); border: 1px solid var(--border);
            border-radius: 12px; padding: 1.75rem;
            box-shadow: var(--shadow); transition: transform .2s, box-shadow .2s;
        }
        .portfolio-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,.12); }
        .portfolio-card-header { display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1rem; }
        .portfolio-icon {
            width: 48px; height: 48px; border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: #fff; display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem; flex-shrink: 0;
        }
        .portfolio-card h3 { font-size: 1.05rem; font-weight: 700; color: var(--primary); }
        .portfolio-card h3 span { display: block; font-size: .8rem; font-weight: 500; color: var(--accent); }
        .portfolio-card p { font-size: .875rem; color: var(--muted); line-height: 1.6; }
        .portfolio-cat {
            display: inline-block; margin-top: 1rem;
            background: #eff6ff; color: var(--accent);
            padding: .25rem .75rem; border-radius: 99px; font-size: .75rem; font-weight: 700;
        }

        /* ── PROJECTS ── */
        .projects-filter { display: flex; flex-wrap: wrap; gap: .5rem; margin-bottom: 2rem; }
        .filter-btn {
            background: var(--white); border: 1px solid var(--border);
            color: var(--text); padding: .4rem 1rem; border-radius: 99px;
            font-size: .85rem; font-weight: 600; cursor: pointer;
            transition: all .15s;
        }
        .filter-btn.active, .filter-btn:hover {
            background: var(--accent); color: #fff; border-color: var(--accent);
        }
        .projects-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 1.25rem; }
        .project-card {
            background: var(--card-bg); border: 1px solid var(--border);
            border-radius: 10px; padding: 1.25rem 1.5rem;
            box-shadow: var(--shadow); transition: transform .2s;
        }
        .project-card:hover { transform: translateY(-3px); }
        .project-card-cat {
            font-size: .72rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: .08em; color: var(--accent); margin-bottom: .5rem;
        }
        .project-card h4 { font-weight: 700; color: var(--primary); font-size: .95rem; margin-bottom: .5rem; }
        .project-card p { font-size: .85rem; color: var(--muted); }

        /* ── PUBLICATIONS / SPEAKING ── */
        .tabs { display: flex; gap: 0; border-bottom: 2px solid var(--border); margin-bottom: 2rem; }
        .tab-btn {
            background: none; border: none; padding: .75rem 1.5rem;
            font-size: .9rem; font-weight: 600; color: var(--muted);
            cursor: pointer; border-bottom: 3px solid transparent;
            margin-bottom: -2px; transition: all .2s;
        }
        .tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); }
        .tab-panel { display: none; }
        .tab-panel.active { display: block; }
        .pub-list { display: flex; flex-direction: column; gap: 1rem; }
        .pub-item {
            background: var(--card-bg); border: 1px solid var(--border);
            border-radius: 10px; padding: 1.25rem 1.5rem;
            box-shadow: var(--shadow); display: flex; align-items: flex-start; gap: 1rem;
        }
        .pub-icon { font-size: 1.4rem; color: var(--accent); flex-shrink: 0; margin-top: .1rem; }
        .pub-content h4 { font-weight: 700; color: var(--primary); margin-bottom: .3rem; font-size: .95rem; }
        .pub-content p { font-size: .85rem; color: var(--muted); }
        .pub-year { font-size: .78rem; font-weight: 700; color: var(--accent); background: #eff6ff; padding: .2rem .6rem; border-radius: 99px; white-space: nowrap; }

        /* ── CONTACT ── */
        #contact { background: linear-gradient(135deg, var(--primary) 0%, #0f2340 100%); color: #fff; }
        #contact .section-title { color: #fff; }
        #contact .section-lead { color: rgba(255,255,255,.75); }
        #contact .section-label { color: #93c5fd; }
        #contact .divider { background: #93c5fd; }

        .contact-grid { display: grid; grid-template-columns: 1fr 1.4fr; gap: 3rem; }
        .contact-info { display: flex; flex-direction: column; gap: 1.25rem; }
        .contact-item {
            display: flex; align-items: center; gap: 1rem;
        }
        .contact-item-icon {
            width: 44px; height: 44px; border-radius: 10px;
            background: rgba(255,255,255,.15); color: #fff;
            display: flex; align-items: center; justify-content: center; font-size: 1.1rem;
            flex-shrink: 0;
        }
        .contact-item-text span { display: block; font-size: .75rem; color: rgba(255,255,255,.6); text-transform: uppercase; letter-spacing: .06em; }
        .contact-item-text a, .contact-item-text p {
            color: #fff; font-weight: 600; text-decoration: none; font-size: .95rem;
        }
        .contact-item-text a:hover { color: #93c5fd; }
        .social-row { display: flex; gap: .75rem; margin-top: .5rem; }
        .social-btn {
            width: 42px; height: 42px; border-radius: 10px;
            background: rgba(255,255,255,.15);
            color: #fff; display: flex; align-items: center; justify-content: center;
            text-decoration: none; font-size: 1.1rem; transition: background .2s;
        }
        .social-btn:hover { background: var(--accent); }

        .contact-form {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 16px; padding: 2rem;
        }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { display: block; font-size: .82rem; font-weight: 600; color: rgba(255,255,255,.8); margin-bottom: .4rem; }
        .form-control {
            width: 100%; background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.25);
            color: #fff; padding: .65rem 1rem; border-radius: 8px;
            font-family: inherit; font-size: .9rem; outline: none;
            transition: border-color .2s;
        }
        .form-control::placeholder { color: rgba(255,255,255,.4); }
        .form-control:focus { border-color: #93c5fd; background: rgba(255,255,255,.16); }
        textarea.form-control { resize: vertical; min-height: 120px; }
        .btn-send {
            width: 100%; background: var(--accent); color: #fff;
            border: none; padding: .85rem; border-radius: 8px;
            font-size: 1rem; font-weight: 700; cursor: pointer;
            font-family: inherit; transition: background .2s;
        }
        .btn-send:hover { background: #1d4ed8; }
        .alert-success {
            background: rgba(34, 197, 94, .2); border: 1px solid rgba(34, 197, 94, .4);
            color: #bbf7d0; padding: 1rem 1.25rem; border-radius: 8px; margin-bottom: 1rem;
            font-size: .9rem;
        }
        .form-error { color: #fca5a5; font-size: .78rem; margin-top: .3rem; }

        /* ── FOOTER ── */
        footer {
            background: #060f1a; color: rgba(255,255,255,.5);
            text-align: center; padding: 2rem; font-size: .85rem;
        }
        footer a { color: rgba(255,255,255,.7); text-decoration: none; }
        footer a:hover { color: #fff; }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            .profile-grid, .contact-grid { grid-template-columns: 1fr; gap: 2rem; }
        }
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .nav-links.open {
                display: flex; flex-direction: column; position: absolute;
                top: 68px; left: 0; right: 0;
                background: #fff; border-bottom: 1px solid var(--border);
                padding: 1rem 2rem; gap: .75rem; align-items: flex-start;
            }
            .hamburger { display: block; }
            .form-row { grid-template-columns: 1fr; }
            .stats-row { gap: 1.2rem; }
        }
    </style>
</head>
<body>

<!-- ══════════ NAVBAR ══════════ -->
<nav>
    <a href="#home" class="nav-brand">
        <div class="nav-logo">VA</div>
        <div>
            <div class="nav-brand-text">Veton Alihajdari</div>
            <div class="nav-brand-sub">Executive Digital Platform</div>
        </div>
    </a>

    <button class="hamburger" onclick="document.querySelector('.nav-links').classList.toggle('open')">
        <i class="bi bi-list"></i>
    </button>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#publications">Publications</a></li>
        <li><a href="#speaking">Speaking</a></li>
        <li><a href="#contact" class="btn-contact">Contact</a></li>
        <li><a href="#" class="lang-toggle">🇽🇰 Shqip</a></li>
    </ul>
</nav>

<!-- ══════════ HERO ══════════ -->
<section id="home">
    <div class="hero-inner">
        <div class="hero-badge">Executive Digital Platform</div>
        <h1>Veton <span>Alihajdari</span></h1>
        <p class="hero-tagline">Education Policy Expert &nbsp;·&nbsp; Digital Transformation Leader &nbsp;·&nbsp; Public Sector Executive</p>
        <p class="hero-pos">
            Head of the Division for Administration of Digital Platforms<br>
            Department for Digitalisation of Education · Ministry of Education and Science, Republic of Kosovo
        </p>
        <div class="hero-cta">
            <a href="#portfolio" class="btn-primary"><i class="bi bi-grid-3x3-gap-fill"></i> &nbsp;View Portfolio</a>
            <a href="#contact" class="btn-outline"><i class="bi bi-envelope"></i> &nbsp;Get in Touch</a>
        </div>
        <div class="stats-row">
            <div class="stat-item">
                <span class="stat-num">26+</span>
                <span class="stat-lbl">Years Experience</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">10+</span>
                <span class="stat-lbl">Digital Platforms</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">50+</span>
                <span class="stat-lbl">Projects &amp; Initiatives</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">100+</span>
                <span class="stat-lbl">Trainings &amp; Events</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">250k+</span>
                <span class="stat-lbl">Users Served</span>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ PROFILE ══════════ -->
<section id="profile">
    <div class="container">
        <div class="section-label">Executive Profile</div>
        <h2 class="section-title">About Veton Alihajdari</h2>
        <div class="divider"></div>
        <div class="profile-grid">
            <div class="profile-text">
                <p>
                    Veton Alihajdari is a seasoned professional with <strong>26+ years of experience</strong> spanning the private sector, international organisations, and public institutions in Kosovo and beyond.
                </p>
                <p>
                    His expertise covers education policy and curriculum development, digital transformation and ICT governance, data interoperability, and public sector innovation — making him a recognised voice in shaping Kosovo's digital education landscape.
                </p>
                <p>
                    Currently serving as <strong>Head of the Division for Administration of Digital Platforms</strong> within the Department for Digitalisation of Education at the Ministry of Education and Science, Republic of Kosovo, he oversees national-level digital infrastructure that serves hundreds of thousands of users.
                </p>
                <p>
                    Throughout his career he has led or contributed to landmark initiatives including KRIS, SMIA/EMIS, SMIAL, SELFIE, NARIC, and Microsoft 365 for Education — systems that underpin research, pre-university and higher education management across the country.
                </p>
                <div class="profile-badges">
                    <span class="badge">Education Policy</span>
                    <span class="badge">Digital Transformation</span>
                    <span class="badge">ICT Governance</span>
                    <span class="badge">Curriculum Development</span>
                    <span class="badge">Data Interoperability</span>
                    <span class="badge">Public Sector Innovation</span>
                </div>
            </div>
            <div>
                <div class="focus-areas">
                    <div class="focus-card">
                        <div class="focus-icon"><i class="bi bi-mortarboard-fill"></i></div>
                        <h4>Education Policy Expert</h4>
                        <p>Deep expertise in curriculum design, educational strategies, and institutional reform at national and international levels.</p>
                    </div>
                    <div class="focus-card">
                        <div class="focus-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4>Digital Transformation Leader</h4>
                        <p>Architect of large-scale digital platforms connecting research institutions, schools, universities, and government bodies.</p>
                    </div>
                    <div class="focus-card">
                        <div class="focus-icon"><i class="bi bi-building-fill-gear"></i></div>
                        <h4>Public Sector Executive</h4>
                        <p>Senior leadership in public administration with a focus on data-driven governance and sustainable ICT ecosystems.</p>
                    </div>
                </div>

                <div style="margin-top:2rem;">
                    <div class="section-label" style="margin-bottom:.75rem;">Career Timeline</div>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-period">1999 – 2005</div>
                            <div class="timeline-role">Private Sector</div>
                            <div class="timeline-org">ICT, service delivery &amp; business systems</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-period">2005 – 2015</div>
                            <div class="timeline-role">International Organisations</div>
                            <div class="timeline-org">Development projects &amp; education reform</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-period">2015 – 2025</div>
                            <div class="timeline-role">Education Reform &amp; Digitalisation</div>
                            <div class="timeline-org">Ministry of Education and Science, Kosovo</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-period">2025 – Present</div>
                            <div class="timeline-role">Head of Division for Digital Platforms</div>
                            <div class="timeline-org">Department for Digitalisation of Education, MES</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ PORTFOLIO ══════════ -->
<section id="portfolio">
    <div class="container">
        <div class="section-label">Digital Portfolio</div>
        <h2 class="section-title">National Digital Platforms</h2>
        <div class="divider"></div>
        <p class="section-lead">A showcase of major digital infrastructure platforms designed, led, or contributed to across Kosovo's education and research ecosystem.</p>
        <div class="portfolio-grid">

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-database-fill"></i></div>
                    <div>
                        <h3>KRIS <span>Kosovo Research Information System</span></h3>
                    </div>
                </div>
                <p>A national platform aggregating research outputs, academic publications, and institutional data from universities and research bodies across Kosovo, promoting open science and research visibility.</p>
                <span class="portfolio-cat">Research</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-bar-chart-fill"></i></div>
                    <div>
                        <h3>SMIA / EMIS <span>Education Management Information System</span></h3>
                    </div>
                </div>
                <p>A comprehensive pre-university education data management system covering student enrolment, teacher records, school infrastructure, and performance monitoring nationwide.</p>
                <span class="portfolio-cat">Pre-university</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <div>
                        <h3>SMIAL <span>Higher Education Management Information System</span></h3>
                    </div>
                </div>
                <p>Manages academic programmes, student records, accreditation workflows, and institutional reporting for higher education institutions operating in Kosovo.</p>
                <span class="portfolio-cat">Higher Education</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-patch-check-fill"></i></div>
                    <div>
                        <h3>SELFIE <span>Digital Capacity Assessment Tool</span></h3>
                    </div>
                </div>
                <p>An EC-developed self-reflection tool adapted for Kosovo schools to assess and plan digital maturity — covering leadership, teaching practices, student digital competence, and infrastructure.</p>
                <span class="portfolio-cat">Digital Capacity</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-microsoft"></i></div>
                    <div>
                        <h3>Microsoft 365 Education <span>Identity &amp; Collaboration Ecosystem</span></h3>
                    </div>
                </div>
                <p>National rollout of Microsoft 365 for Education across schools and universities in Kosovo — providing identity management, collaborative tools, email, and cloud storage for teachers and students.</p>
                <span class="portfolio-cat">Collaboration</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <h3>NARIC <span>Recognition &amp; Equivalence Services</span></h3>
                    </div>
                </div>
                <p>Digital platform for the recognition and equivalence of foreign qualifications in Kosovo, streamlining procedures for students, academics, and professionals returning from abroad.</p>
                <span class="portfolio-cat">Recognition</span>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card-header">
                    <div class="portfolio-icon"><i class="bi bi-layers-fill"></i></div>
                    <div>
                        <h3>Data Warehouse <span>Integrated Education Analytics</span></h3>
                    </div>
                </div>
                <p>A centralised data warehouse integrating data streams from multiple education platforms to support evidence-based policy making, reporting, and institutional analytics.</p>
                <span class="portfolio-cat">Analytics</span>
            </div>

        </div>
    </div>
</section>

<!-- ══════════ PROJECTS ══════════ -->
<section id="projects">
    <div class="container">
        <div class="section-label">Projects Showcase</div>
        <h2 class="section-title">Key Projects &amp; Initiatives</h2>
        <div class="divider"></div>
        <p class="section-lead">Selected projects organised by thematic area, spanning research, pre-university and higher education reform, digital capacity, and regional collaboration.</p>

        <div class="projects-filter">
            <button class="filter-btn active" onclick="filterProjects('all', this)">All</button>
            <button class="filter-btn" onclick="filterProjects('research', this)">Research</button>
            <button class="filter-btn" onclick="filterProjects('pre-university', this)">Pre-university</button>
            <button class="filter-btn" onclick="filterProjects('higher-education', this)">Higher Education</button>
            <button class="filter-btn" onclick="filterProjects('recognition', this)">Recognition</button>
            <button class="filter-btn" onclick="filterProjects('digital-capacity', this)">Digital Capacity</button>
            <button class="filter-btn" onclick="filterProjects('collaboration', this)">Collaboration</button>
        </div>

        <div class="projects-grid" id="projects-grid">

            <div class="project-card" data-cat="research">
                <div class="project-card-cat">Research</div>
                <h4>Kosovo Research Information System (KRIS)</h4>
                <p>Design and implementation of the national open-research platform connecting all public universities.</p>
            </div>

            <div class="project-card" data-cat="research">
                <div class="project-card-cat">Research</div>
                <h4>Institutional Repository Integration</h4>
                <p>Linking university repositories to KRIS for unified discovery of academic outputs.</p>
            </div>

            <div class="project-card" data-cat="pre-university">
                <div class="project-card-cat">Pre-university</div>
                <h4>EMIS / SMIA National Rollout</h4>
                <p>End-to-end deployment of the Education Management Information System across all pre-university schools.</p>
            </div>

            <div class="project-card" data-cat="pre-university">
                <div class="project-card-cat">Pre-university</div>
                <h4>Digital Curriculum Pilot</h4>
                <p>Pilot programme integrating digital resources and competency frameworks into the national curriculum.</p>
            </div>

            <div class="project-card" data-cat="higher-education">
                <div class="project-card-cat">Higher Education</div>
                <h4>SMIAL Implementation</h4>
                <p>Development and deployment of the Higher Education Management Information System for Kosovo universities.</p>
            </div>

            <div class="project-card" data-cat="higher-education">
                <div class="project-card-cat">Higher Education</div>
                <h4>Accreditation Workflow Digitisation</h4>
                <p>Digitising quality assurance and accreditation procedures for higher education institutions.</p>
            </div>

            <div class="project-card" data-cat="recognition">
                <div class="project-card-cat">Recognition</div>
                <h4>NARIC Digital Platform</h4>
                <p>Online system for recognition and equivalence of foreign qualifications, reducing processing time significantly.</p>
            </div>

            <div class="project-card" data-cat="recognition">
                <div class="project-card-cat">Recognition</div>
                <h4>Diploma Supplement Framework</h4>
                <p>Implementing the Bologna-compliant Diploma Supplement for all Kosovo higher education graduates.</p>
            </div>

            <div class="project-card" data-cat="digital-capacity">
                <div class="project-card-cat">Digital Capacity</div>
                <h4>SELFIE for Schools – Kosovo</h4>
                <p>National adaptation and deployment of the EU SELFIE tool for self-assessment of digital capacity in Kosovo schools.</p>
            </div>

            <div class="project-card" data-cat="digital-capacity">
                <div class="project-card-cat">Digital Capacity</div>
                <h4>Teacher Digital Skills Framework</h4>
                <p>Developing a national framework and certification path for teacher ICT competencies.</p>
            </div>

            <div class="project-card" data-cat="collaboration">
                <div class="project-card-cat">Collaboration</div>
                <h4>Microsoft 365 for Education – National Rollout</h4>
                <p>Led procurement, identity management setup, and nationwide deployment for schools and universities.</p>
            </div>

            <div class="project-card" data-cat="collaboration">
                <div class="project-card-cat">Collaboration</div>
                <h4>Data Interoperability Initiative</h4>
                <p>Cross-ministry initiative to standardise data exchange between education, statistics, and employment systems.</p>
            </div>

        </div>
    </div>
</section>

<!-- ══════════ PUBLICATIONS ══════════ -->
<section id="publications">
    <div class="container">
        <div class="section-label">Publications</div>
        <h2 class="section-title">Publications &amp; Reports</h2>
        <div class="divider"></div>
        <p class="section-lead">Strategic documents, analytical reports, and presentations produced in the field of education policy and digital transformation.</p>

        <div class="tabs">
            <button class="tab-btn active" onclick="switchTab('pub', 'strategies', this)">Strategies</button>
            <button class="tab-btn" onclick="switchTab('pub', 'reports', this)">Reports</button>
            <button class="tab-btn" onclick="switchTab('pub', 'presentations', this)">Presentations</button>
        </div>

        <div id="pub-strategies" class="tab-panel active">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>National Strategy for Digital Transformation of Education in Kosovo</h4>
                        <p>Strategic framework guiding the digitalisation of pre-university and higher education institutions, including ICT infrastructure, digital competencies, and platform governance.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>ICT Governance Framework for the Ministry of Education and Science</h4>
                        <p>Institutional planning document establishing governance structures, standards, and policies for ICT management within the Ministry.</p>
                    </div>
                    <span class="pub-year">2021</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Education Sector Digital Readiness Assessment</h4>
                        <p>Comprehensive assessment of Kosovo's education sector readiness for digital transformation, with evidence-based recommendations for policy and investment.</p>
                    </div>
                    <span class="pub-year">2019</span>
                </div>
            </div>
        </div>

        <div id="pub-reports" class="tab-panel">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Annual EMIS Implementation Review</h4>
                        <p>Analytical monitoring report on the deployment and usage of the Education Management Information System across Kosovo's pre-university schools.</p>
                    </div>
                    <span class="pub-year">2024</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Digital Platform Usage Statistics &amp; Impact Report</h4>
                        <p>Institutional summary covering user adoption, service levels, and outcomes across KRIS, SMIA, SMIAL, and NARIC platforms.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>SELFIE Kosovo Pilot: Findings &amp; Recommendations</h4>
                        <p>Post-pilot analytical report on digital capacity levels in Kosovo schools with targeted recommendations for improvement.</p>
                    </div>
                    <span class="pub-year">2022</span>
                </div>
            </div>
        </div>

        <div id="pub-presentations" class="tab-panel">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-easel-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Digital Transformation in Western Balkans Education Systems</h4>
                        <p>Regional comparative presentation delivered at EU–Western Balkans education conference, highlighting Kosovo's progress and lessons learned.</p>
                    </div>
                    <span class="pub-year">2024</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-easel-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Open Research Data and KRIS: From Vision to Reality</h4>
                        <p>Policy-oriented briefing presented to university rectors and research councils on open science mandates and the KRIS platform.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ SPEAKING ══════════ -->
<section id="speaking">
    <div class="container">
        <div class="section-label">Speaking &amp; Engagements</div>
        <h2 class="section-title">Conferences, Trainings &amp; Panels</h2>
        <div class="divider"></div>
        <p class="section-lead">Selected appearances as speaker, trainer, panellist, or expert contributor at national and international events.</p>

        <div class="tabs">
            <button class="tab-btn active" onclick="switchTab('spk', 'conferences', this)">Conferences</button>
            <button class="tab-btn" onclick="switchTab('spk', 'trainings', this)">Trainings</button>
            <button class="tab-btn" onclick="switchTab('spk', 'panels', this)">Panels &amp; Interviews</button>
        </div>

        <div id="spk-conferences" class="tab-panel active">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-mic-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Western Balkans Digital Education Summit</h4>
                        <p>Keynote on interoperability and data governance in national education information systems.</p>
                    </div>
                    <span class="pub-year">2024</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-mic-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>EU SELFIE Community of Practice Annual Event</h4>
                        <p>Presented Kosovo's experience with SELFIE implementation and lessons for other candidate countries.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-mic-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>International Conference on Open Science in SEE</h4>
                        <p>Speaker on Kosovo's national open research infrastructure and policy alignment with the European Open Science Cloud.</p>
                    </div>
                    <span class="pub-year">2022</span>
                </div>
            </div>
        </div>

        <div id="spk-trainings" class="tab-panel">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-person-video3"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>EMIS Train-the-Trainer Programme</h4>
                        <p>Delivered capacity building sessions for municipal education officers and school administrators on EMIS data management.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-person-video3"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Teacher Digital Skills Certification Workshop Series</h4>
                        <p>Series of workshops across Kosovo municipalities building teacher ICT competence aligned with the DigComp framework.</p>
                    </div>
                    <span class="pub-year">2022</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-person-video3"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Microsoft 365 for Education – Admin &amp; User Training</h4>
                        <p>National roll-out training for school IT coordinators, teachers, and university staff on Microsoft 365 tools.</p>
                    </div>
                    <span class="pub-year">2021</span>
                </div>
            </div>
        </div>

        <div id="spk-panels" class="tab-panel">
            <div class="pub-list">
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Panel: "Digital Governance in the Western Balkans" – RCC Forum</h4>
                        <p>Expert panellist on digital public services interoperability and cross-border data exchange in the region.</p>
                    </div>
                    <span class="pub-year">2024</span>
                </div>
                <div class="pub-item">
                    <div class="pub-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="pub-content" style="flex:1;">
                        <h4>Interview: RTK – Digital Education in Kosovo</h4>
                        <p>TV interview discussing the state of digital transformation in Kosovo's education sector and the roadmap ahead.</p>
                    </div>
                    <span class="pub-year">2023</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ CONTACT ══════════ -->
<section id="contact">
    <div class="container">
        <div class="section-label">Get in Touch</div>
        <h2 class="section-title">Contact</h2>
        <div class="divider"></div>
        <p class="section-lead">Feel free to reach out for collaborations, inquiries, or professional discussions.</p>

        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-item-icon"><i class="bi bi-envelope-fill"></i></div>
                    <div class="contact-item-text">
                        <span>Email</span>
                        <a href="mailto:veton@alihajdari.com">veton@alihajdari.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div class="contact-item-text">
                        <span>Phone</span>
                        <a href="tel:+38344600518">+383 44 600 518</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon"><i class="bi bi-whatsapp"></i></div>
                    <div class="contact-item-text">
                        <span>WhatsApp</span>
                        <a href="https://wa.me/38344600518" target="_blank" rel="noopener">Message on WhatsApp</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="contact-item-text">
                        <span>Location</span>
                        <p>Pristina, Republic of Kosovo</p>
                    </div>
                </div>

                <div style="margin-top:.5rem;">
                    <div style="font-size:.75rem; font-weight:700; text-transform:uppercase; letter-spacing:.08em; color:rgba(255,255,255,.6); margin-bottom:.75rem;">Connect</div>
                    <div class="social-row">
                        <a href="https://www.linkedin.com/in/vetonalihajdari" class="social-btn" target="_blank" rel="noopener" title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://github.com/vetonalihajdari" class="social-btn" target="_blank" rel="noopener" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.facebook.com/vetonalihajdari" class="social-btn" target="_blank" rel="noopener" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="mailto:veton@alihajdari.com" class="social-btn" title="Email">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="font-size:1.1rem; font-weight:700; margin-bottom:1.25rem; color:#fff;">Send a Message</h3>

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control"
                                   placeholder="First name" value="{{ old('first_name') }}">
                            @error('first_name') <div class="form-error">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                   placeholder="Last name" value="{{ old('last_name') }}">
                            @error('last_name') <div class="form-error">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                               placeholder="your@email.com" value="{{ old('email') }}">
                        @error('email') <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control"
                               placeholder="What is this regarding?" value="{{ old('subject') }}">
                        @error('subject') <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control"
                                  placeholder="Your message...">{{ old('message') }}</textarea>
                        @error('message') <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn-send">
                        <i class="bi bi-send-fill"></i> &nbsp;Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ FOOTER ══════════ -->
<footer>
    <p>
        &copy; 2026 <strong style="color:rgba(255,255,255,.85);">Veton Alihajdari</strong>. All rights reserved.
        &nbsp;·&nbsp;
        <a href="mailto:veton@alihajdari.com">veton@alihajdari.com</a>
        &nbsp;·&nbsp;
        <a href="tel:+38344600518">+383 44 600 518</a>
    </p>
</footer>

<script>
    function filterProjects(cat, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('.project-card').forEach(card => {
            if (cat === 'all' || card.dataset.cat === cat) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function switchTab(prefix, tab, btn) {
        const panels = document.querySelectorAll('[id^="' + prefix + '-"]');
        panels.forEach(p => p.classList.remove('active'));
        btn.closest('.tabs').querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.getElementById(prefix + '-' + tab).classList.add('active');
        btn.classList.add('active');
    }
</script>

</body>
</html>
