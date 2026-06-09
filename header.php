<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Veton Alihajdari – Education Policy Expert, Digital Transformation Leader, Public Sector Executive with 26+ years of experience.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="vae-nav" id="vae-nav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-brand">
        <div class="nav-logo">VA</div>
        <div>
            <div class="nav-brand-text"><?php bloginfo( 'name' ); ?></div>
            <div class="nav-brand-sub">Executive Digital Platform</div>
        </div>
    </a>

    <button class="hamburger" aria-label="Toggle menu" onclick="document.querySelector('.nav-links').classList.toggle('open')">
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
        <li>
            <a href="<?php echo esc_url( add_query_arg( 'lang', 'sq', home_url( '/' ) ) ); ?>" class="lang-toggle">
                🇽🇰 Shqip
            </a>
        </li>
    </ul>
</nav>
