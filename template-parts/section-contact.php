<?php $wa_url = vae_whatsapp_url( 'Hello Veton, I would like to get in touch with you.' ); ?>
<section id="contact" class="vae-contact">
    <div class="container">
        <div class="section-label">Get in Touch</div>
        <h2 class="section-title">Contact</h2>
        <div class="divider" style="background:#93c5fd;"></div>
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
                    <div class="contact-item-icon" style="background:rgba(37,211,102,.25);">
                        <i class="bi bi-whatsapp" style="color:#25d366;"></i>
                    </div>
                    <div class="contact-item-text">
                        <span>WhatsApp</span>
                        <a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer">
                            Message on WhatsApp
                        </a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="contact-item-text">
                        <span>Location</span>
                        <p>Pristina, Republic of Kosovo</p>
                    </div>
                </div>

                <div class="social-block">
                    <div class="social-label">Follow &amp; Connect</div>
                    <div class="social-row">
                        <?php foreach ( vae_social_links() as $key => $s ) :
                            $extra = ( $key === 'youtube' ) ? ' style="background:rgba(255,0,0,.2);"' : '';
                            $extra = ( $key === 'instagram' ) ? ' style="background:rgba(225,48,108,.2);"' : $extra;
                        ?>
                        <a href="<?php echo esc_url( $s['url'] ); ?>"
                           class="social-btn"
                           target="_blank" rel="noopener noreferrer"
                           title="<?php echo esc_attr( $s['label'] ); ?>"
                           <?php echo $extra; ?>>
                            <i class="bi <?php echo esc_attr( $s['icon'] ); ?>"></i>
                        </a>
                        <?php endforeach; ?>
                        <a href="<?php echo esc_url( $wa_url ); ?>"
                           class="social-btn"
                           style="background:rgba(37,211,102,.2);"
                           target="_blank" rel="noopener noreferrer"
                           title="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                <h3 class="contact-form-title">Send a Message</h3>
                <div id="contact-success" class="alert-success" style="display:none;"></div>
                <div id="contact-errors"  class="alert-error"   style="display:none;"></div>

                <form id="vae-contact-form" novalidate>
                    <?php wp_nonce_field( 'vae_contact', '_wpnonce' ); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control"
                                   placeholder="First name" required autocomplete="given-name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control"
                                   placeholder="Last name" required autocomplete="family-name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                               placeholder="your@email.com" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control"
                               placeholder="What is this regarding?" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control"
                                  placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn-send" id="vae-submit">
                        <i class="bi bi-send-fill"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp floating button -->
<a href="<?php echo esc_url( $wa_url ); ?>"
   class="whatsapp-float"
   target="_blank" rel="noopener noreferrer"
   title="Chat on WhatsApp"
   aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<!-- Back to top -->
<button class="back-to-top" id="back-to-top" aria-label="Back to top" title="Back to top">
    <i class="bi bi-arrow-up"></i>
</button>
