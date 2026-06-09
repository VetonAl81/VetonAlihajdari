<?php
$cv_url = get_theme_mod( 'vae_cv_url', '' );
$wa_url = vae_whatsapp_url( 'Hello Veton, I would like to get in touch with you.' );
?>

<footer class="vae-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <!-- Col 1: Brand + bio + social -->
                <div class="footer-col footer-col--brand">
                    <div class="footer-logo">
                        <div class="footer-logo-mark">VA</div>
                        <div>
                            <div class="footer-logo-name">Veton Alihajdari</div>
                            <div class="footer-logo-sub">Executive Digital Platform</div>
                        </div>
                    </div>
                    <p class="footer-bio">
                        Education Policy Expert &amp; Digital Transformation Leader with 26+ years of experience shaping Kosovo's national education and digital infrastructure.
                    </p>
                    <div class="footer-social">
                        <?php foreach ( vae_social_links() as $key => $s ) : ?>
                        <a href="<?php echo esc_url( $s['url'] ); ?>"
                           class="footer-social-btn"
                           target="_blank" rel="noopener noreferrer"
                           title="<?php echo esc_attr( $s['label'] ); ?>"
                           aria-label="<?php echo esc_attr( $s['label'] ); ?>">
                            <i class="bi <?php echo esc_attr( $s['icon'] ); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                        <a href="<?php echo esc_url( $wa_url ); ?>"
                           class="footer-social-btn footer-social-btn--wa"
                           target="_blank" rel="noopener noreferrer"
                           title="WhatsApp" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick links -->
                <div class="footer-col">
                    <h4 class="footer-heading">Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="bi bi-house-fill"></i> Home</a></li>
                        <li><a href="#profile"><i class="bi bi-person-fill"></i> Profile</a></li>
                        <li><a href="#portfolio"><i class="bi bi-grid-fill"></i> Portfolio</a></li>
                        <li><a href="#projects"><i class="bi bi-kanban-fill"></i> Projects</a></li>
                        <li><a href="#skills"><i class="bi bi-bar-chart-fill"></i> Skills</a></li>
                        <li><a href="#publications"><i class="bi bi-book-fill"></i> Publications</a></li>
                        <li><a href="#speaking"><i class="bi bi-mic-fill"></i> Speaking</a></li>
                        <li><a href="#contact"><i class="bi bi-envelope-fill"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contact</h4>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:veton@alihajdari.com">veton@alihajdari.com</a>
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:+38344600518">+383 44 600 518</a>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer">
                                WhatsApp
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Pristina, Republic of Kosovo</span>
                        </li>
                        <li>
                            <i class="bi bi-building-fill"></i>
                            <span>Ministry of Education and Science</span>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Expertise + CV -->
                <div class="footer-col">
                    <h4 class="footer-heading">Areas of Expertise</h4>
                    <div class="footer-tags">
                        <span>Education Policy</span>
                        <span>Digital Transformation</span>
                        <span>ICT Governance</span>
                        <span>Curriculum Development</span>
                        <span>Data Interoperability</span>
                        <span>Public Sector Innovation</span>
                        <span>Platform Management</span>
                        <span>Capacity Building</span>
                    </div>
                    <?php if ( $cv_url ) : ?>
                    <a href="<?php echo esc_url( $cv_url ); ?>" class="footer-cv-btn" download aria-label="Download CV">
                        <i class="bi bi-file-earmark-person-fill"></i> Download CV
                    </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer bottom bar -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="footer-copy">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                    <strong>Veton Alihajdari</strong>. All rights reserved.
                </p>
                <div class="footer-bottom-links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        veton.alihajdari.com
                    </a>
                    <span class="footer-divider">·</span>
                    <a href="<?php echo esc_url( add_query_arg( 'lang', 'sq', home_url( '/' ) ) ); ?>" hreflang="sq">
                        🇽🇰 Shqip
                    </a>
                    <span class="footer-divider">·</span>
                    <span class="footer-made">Built with <i class="bi bi-heart-fill" style="color:#ef4444;font-size:.75rem;"></i></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
