<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Veton Alihajdari – Education Policy Expert, Digital Transformation Leader, Public Sector Executive with 26+ years of experience in Kosovo.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=OpenDyslexic:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Veton Alihajdari",
      "url": "https://veton.alihajdari.com",
      "image": "http://veton.alihajdari.com/wp-content/uploads/2026/06/BC48D306-7F63-4F1E-AC6B-3F34F53E9CEC-e1781014049432.png",
      "jobTitle": "Head of the Division for Administration of Digital Platforms",
      "worksFor": { "@type": "Organization", "name": "Ministry of Education and Science, Republic of Kosovo" },
      "description": "Education Policy Expert, Digital Transformation Leader and Public Sector Executive with 26+ years of experience.",
      "email": "veton@alihajdari.com",
      "telephone": "+38344600518",
      "address": { "@type": "PostalAddress", "addressLocality": "Pristina", "addressCountry": "XK" },
      "sameAs": [
        "https://www.linkedin.com/in/vetonalihajdari",
        "https://github.com/vetonalihajdari",
        "https://www.facebook.com/vetonalihajdari",
        "https://www.instagram.com/vetonalihajdari",
        "https://www.youtube.com/@vetonalihajdari"
      ]
    }
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'vae-loading' ); ?>>
<?php wp_body_open(); ?>

<!-- Page loader -->
<div id="vae-loader" aria-hidden="true">
    <div class="loader-ring"></div>
</div>

<!-- Reading progress bar -->
<div id="vae-progress" aria-hidden="true"></div>

<!-- Accessibility toolbar -->
<div class="a11y-bar" id="a11y-bar" role="toolbar" aria-label="Accessibility options">
    <button class="a11y-btn" id="a11y-font-dec"  title="Decrease font size"      aria-label="Decrease font size">A-</button>
    <button class="a11y-btn" id="a11y-font-inc"  title="Increase font size"      aria-label="Increase font size">A+</button>
    <button class="a11y-btn" id="a11y-contrast"  title="High contrast"           aria-label="Toggle high contrast"><i class="bi bi-circle-half"></i> <span class="a11y-label">Contrast</span></button>
    <button class="a11y-btn" id="a11y-dyslexia"  title="Dyslexia-friendly font"  aria-label="Toggle dyslexia font"><i class="bi bi-fonts"></i> <span class="a11y-label">Dyslexia</span></button>
    <button class="a11y-btn" id="a11y-motion"    title="Reduce motion"           aria-label="Toggle reduce motion"><i class="bi bi-stop-circle"></i> <span class="a11y-label">No Motion</span></button>
    <button class="a11y-btn a11y-reset" id="a11y-reset" title="Reset" aria-label="Reset accessibility"><i class="bi bi-arrow-counterclockwise"></i> <span class="a11y-label">Reset</span></button>
</div>

<!-- Mobile nav overlay -->
<div class="nav-overlay" id="nav-overlay" aria-hidden="true"></div>

<!-- Navbar -->
<nav class="vae-nav" id="vae-nav" role="navigation" aria-label="Main navigation">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-brand">
        <div class="nav-logo" aria-hidden="true">VA</div>
        <div>
            <div class="nav-brand-text"><?php bloginfo( 'name' ); ?></div>
            <div class="nav-brand-sub">Executive Digital Platform</div>
        </div>
    </a>

    <div class="nav-right">
        <button class="dark-toggle-btn" id="dark-toggle" aria-label="Toggle dark mode" title="Toggle dark mode">
            <i class="bi bi-moon-fill"></i>
        </button>
        <button class="hamburger" id="hamburger" aria-label="Open navigation menu" aria-expanded="false" aria-controls="nav-drawer">
            <span class="ham-line"></span>
            <span class="ham-line"></span>
            <span class="ham-line"></span>
        </button>
    </div>

    <!-- Desktop nav -->
    <ul class="nav-links" role="list">
        <li><a href="#home">Home</a></li>
        <li><a href="#profile">Profile</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#publications">Publications</a></li>
        <li><a href="#speaking">Speaking</a></li>
        <li><a href="#contact" class="btn-contact">Contact</a></li>
        <li><button class="dark-toggle-inline" id="dark-toggle-desktop" aria-label="Toggle dark mode"><i class="bi bi-moon-fill"></i></button></li>
        <li><a href="<?php echo esc_url( add_query_arg( 'lang', 'sq', home_url( '/' ) ) ); ?>" class="lang-toggle" hreflang="sq">🇽🇰 SQ</a></li>
    </ul>
</nav>

<!-- Mobile nav drawer -->
<div class="nav-drawer" id="nav-drawer" role="dialog" aria-modal="true" aria-label="Navigation menu" aria-hidden="true">
    <div class="nav-drawer-header">
        <div class="nav-brand" style="text-decoration:none;">
            <div class="nav-logo">VA</div>
            <div>
                <div class="nav-brand-text">Veton Alihajdari</div>
                <div class="nav-brand-sub">Executive Digital Platform</div>
            </div>
        </div>
        <button class="nav-drawer-close" id="nav-drawer-close" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    <ul class="nav-drawer-links" role="list">
        <li><a href="#home"><i class="bi bi-house-fill"></i> Home</a></li>
        <li><a href="#profile"><i class="bi bi-person-fill"></i> Profile</a></li>
        <li><a href="#portfolio"><i class="bi bi-grid-fill"></i> Portfolio</a></li>
        <li><a href="#projects"><i class="bi bi-kanban-fill"></i> Projects</a></li>
        <li><a href="#skills"><i class="bi bi-bar-chart-fill"></i> Skills</a></li>
        <li><a href="#publications"><i class="bi bi-book-fill"></i> Publications</a></li>
        <li><a href="#speaking"><i class="bi bi-mic-fill"></i> Speaking</a></li>
        <li><a href="#contact"><i class="bi bi-envelope-fill"></i> Contact</a></li>
    </ul>
    <div class="nav-drawer-footer">
        <?php foreach ( vae_social_links() as $key => $s ) : ?>
        <a href="<?php echo esc_url( $s['url'] ); ?>" target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr( $s['label'] ); ?>">
            <i class="bi <?php echo esc_attr( $s['icon'] ); ?>"></i>
        </a>
        <?php endforeach; ?>
        <a href="<?php echo esc_url( vae_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</div>
