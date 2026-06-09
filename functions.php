<?php
defined( 'ABSPATH' ) || exit;

/* ── Enqueue assets ── */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( get_template() )->get( 'Version' )
    );
    wp_enqueue_style(
        'vae-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        [ 'parent-style' ],
        '1.1.0'
    );
    wp_enqueue_script(
        'vae-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        '1.1.0',
        true
    );
    wp_localize_script( 'vae-main', 'vaeAjax', [
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'vae_contact' ),
    ]);
} );

/* ── Theme supports ── */
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'customize-selective-refresh-widgets' );
} );

/* ── Open Graph meta tags ── */
add_action( 'wp_head', function () {
    $name  = get_theme_mod( 'vae_fullname', 'Veton Alihajdari' );
    $tagline = 'Education Policy Expert | Digital Transformation Leader | Public Sector Executive';
    $photo = get_theme_mod( 'vae_profile_photo', 'http://veton.alihajdari.com/wp-content/uploads/2026/06/BC48D306-7F63-4F1E-AC6B-3F34F53E9CEC-e1781014049432.png' );
    $url   = home_url( '/' );
    ?>
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="<?php echo esc_url( $url ); ?>">
    <meta property="og:title"       content="<?php echo esc_attr( $name ); ?> – Executive Digital Platform">
    <meta property="og:description" content="<?php echo esc_attr( $tagline ); ?>">
    <?php if ( $photo ) : ?>
    <meta property="og:image"       content="<?php echo esc_url( $photo ); ?>">
    <?php endif; ?>
    <meta name="twitter:card"       content="summary_large_image">
    <meta name="twitter:title"      content="<?php echo esc_attr( $name ); ?> – Executive Digital Platform">
    <meta name="twitter:description" content="<?php echo esc_attr( $tagline ); ?>">
    <?php
} );

/* ── Customizer options ── */
add_action( 'customize_register', function ( $wp_customize ) {

    $wp_customize->add_section( 'vae_profile', [
        'title'    => 'Veton Alihajdari – Profile',
        'priority' => 30,
    ]);

    // Profile photo
    $wp_customize->add_setting( 'vae_profile_photo', [ 'default' => 'http://veton.alihajdari.com/wp-content/uploads/2026/06/BC48D306-7F63-4F1E-AC6B-3F34F53E9CEC-e1781014049432.png', 'sanitize_callback' => 'esc_url_raw' ] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vae_profile_photo', [
        'label'   => 'Profile Photo',
        'section' => 'vae_profile',
    ]));

    // CV file URL
    $wp_customize->add_setting( 'vae_cv_url', [ 'default' => '', 'sanitize_callback' => 'esc_url_raw' ] );
    $wp_customize->add_control( 'vae_cv_url', [
        'label'   => 'CV Download URL',
        'section' => 'vae_profile',
        'type'    => 'url',
    ]);

    // Social links
    $socials = [
        'linkedin'  => 'LinkedIn URL',
        'github'    => 'GitHub URL',
        'facebook'  => 'Facebook URL',
        'instagram' => 'Instagram URL',
        'youtube'   => 'YouTube URL',
        'whatsapp'  => 'WhatsApp Number (e.g. 38344600518)',
    ];
    foreach ( $socials as $key => $label ) {
        $wp_customize->add_setting( 'vae_social_' . $key, [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control( 'vae_social_' . $key, [
            'label'   => $label,
            'section' => 'vae_profile',
            'type'    => 'text',
        ]);
    }
});

/* ── Helper: get social links ── */
function vae_social_links() {
    return [
        'linkedin'  => [
            'url'   => get_theme_mod( 'vae_social_linkedin',  'https://www.linkedin.com/in/vetonalihajdari' ),
            'icon'  => 'bi-linkedin',
            'label' => 'LinkedIn',
        ],
        'github'    => [
            'url'   => get_theme_mod( 'vae_social_github',    'https://github.com/vetonalihajdari' ),
            'icon'  => 'bi-github',
            'label' => 'GitHub',
        ],
        'facebook'  => [
            'url'   => get_theme_mod( 'vae_social_facebook',  'https://www.facebook.com/vetonalihajdari' ),
            'icon'  => 'bi-facebook',
            'label' => 'Facebook',
        ],
        'instagram' => [
            'url'   => get_theme_mod( 'vae_social_instagram', 'https://www.instagram.com/vetonalihajdari' ),
            'icon'  => 'bi-instagram',
            'label' => 'Instagram',
        ],
        'youtube'   => [
            'url'   => get_theme_mod( 'vae_social_youtube',   'https://www.youtube.com/@vetonalihajdari' ),
            'icon'  => 'bi-youtube',
            'label' => 'YouTube',
        ],
    ];
}

function vae_whatsapp_url( $msg = '' ) {
    $num = get_theme_mod( 'vae_social_whatsapp', '38344600518' );
    $num = preg_replace( '/\D/', '', $num );
    $url = 'https://wa.me/' . $num;
    if ( $msg ) $url .= '?text=' . rawurlencode( $msg );
    return $url;
}

/* ── AJAX contact form ── */
add_action( 'wp_ajax_vae_contact',        'vae_handle_contact' );
add_action( 'wp_ajax_nopriv_vae_contact', 'vae_handle_contact' );

function vae_handle_contact() {
    check_ajax_referer( 'vae_contact', 'nonce' );

    $first   = sanitize_text_field( wp_unslash( $_POST['first_name'] ?? '' ) );
    $last    = sanitize_text_field( wp_unslash( $_POST['last_name']  ?? '' ) );
    $email   = sanitize_email(      wp_unslash( $_POST['email']      ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['subject']    ?? '' ) );
    $body    = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    $errors = [];
    if ( empty( $first ) )       $errors[] = 'First name is required.';
    if ( empty( $last ) )        $errors[] = 'Last name is required.';
    if ( ! is_email( $email ) )  $errors[] = 'A valid email address is required.';
    if ( empty( $subject ) )     $errors[] = 'Subject is required.';
    if ( strlen( $body ) < 10 )  $errors[] = 'Message must be at least 10 characters.';

    if ( $errors ) {
        wp_send_json_error( [ 'errors' => $errors ] );
    }

    $to      = 'veton@alihajdari.com';
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $first . ' ' . $last . ' <' . $email . '>',
    ];
    $sent = wp_mail( $to, $subject, "Name: {$first} {$last}\nEmail: {$email}\n\n{$body}", $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Your message has been sent successfully. Thank you!' ] );
    } else {
        wp_send_json_error( [ 'errors' => [ 'Failed to send. Please try again or use email directly.' ] ] );
    }
}
