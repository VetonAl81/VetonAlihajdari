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
                    <div class="contact-item-icon"><i class="bi bi-whatsapp"></i></div>
                    <div class="contact-item-text">
                        <span>WhatsApp</span>
                        <a href="https://wa.me/38344600518" target="_blank" rel="noopener noreferrer">Message on WhatsApp</a>
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
                    <div class="social-label">Connect</div>
                    <div class="social-row">
                        <a href="https://www.linkedin.com/in/vetonalihajdari" class="social-btn" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://github.com/vetonalihajdari" class="social-btn" target="_blank" rel="noopener noreferrer" title="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.facebook.com/vetonalihajdari" class="social-btn" target="_blank" rel="noopener noreferrer" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="mailto:veton@alihajdari.com" class="social-btn" title="Email">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                <h3 class="contact-form-title">Send a Message</h3>
                <div id="contact-success" class="alert-success" style="display:none;"></div>
                <div id="contact-errors" class="alert-error" style="display:none;"></div>

                <form id="vae-contact-form" novalidate>
                    <?php wp_nonce_field( 'vae_contact', '_wpnonce' ); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="What is this regarding?" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn-send" id="vae-submit">
                        <i class="bi bi-send-fill"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
