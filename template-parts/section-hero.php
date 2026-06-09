<?php
$photo  = get_theme_mod( 'vae_profile_photo', 'http://veton.alihajdari.com/wp-content/uploads/2026/06/BC48D306-7F63-4F1E-AC6B-3F34F53E9CEC-e1781014049432.png' );
$cv_url = get_theme_mod( 'vae_cv_url', '' );
$wa_url = vae_whatsapp_url( 'Hello Veton, I would like to get in touch with you.' );
?>
<section id="home" class="vae-hero">
    <div class="hero-inner">
        <div class="hero-top">
            <div class="hero-text">
                <div class="hero-badge">Executive Digital Platform</div>
                <h1>Veton <span>Alihajdari</span></h1>
                <p class="hero-tagline">
                    Education Policy Expert &nbsp;&middot;&nbsp;
                    Digital Transformation Leader &nbsp;&middot;&nbsp;
                    Public Sector Executive
                </p>
                <p class="hero-pos">
                    Head of the Division for Administration of Digital Platforms<br>
                    Department for Digitalisation of Education &middot; Ministry of Education and Science, Republic of Kosovo
                </p>
                <div class="hero-cta">
                    <a href="#portfolio" class="btn-primary">
                        <i class="bi bi-grid-3x3-gap-fill"></i> View Portfolio
                    </a>
                    <a href="#contact" class="btn-outline">
                        <i class="bi bi-envelope"></i> Get in Touch
                    </a>
                    <?php if ( $cv_url ) : ?>
                    <a href="<?php echo esc_url( $cv_url ); ?>" class="btn-outline" download>
                        <i class="bi bi-download"></i> Download CV
                    </a>
                    <?php endif; ?>
                </div>
                <div class="hero-social">
                    <?php foreach ( vae_social_links() as $s ) : ?>
                    <a href="<?php echo esc_url( $s['url'] ); ?>" class="hero-social-btn"
                       target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr( $s['label'] ); ?>">
                        <i class="bi <?php echo esc_attr( $s['icon'] ); ?>"></i>
                    </a>
                    <?php endforeach; ?>
                    <a href="<?php echo esc_url( $wa_url ); ?>" class="hero-social-btn hero-social-btn--wa"
                       target="_blank" rel="noopener noreferrer" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <?php if ( $photo ) : ?>
            <div class="hero-photo">
                <div class="hero-photo-ring">
                    <img src="<?php echo esc_url( $photo ); ?>"
                         alt="Veton Alihajdari – Profile Photo"
                         width="260" height="260" loading="eager">
                </div>
            </div>
            <?php endif; ?>
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
