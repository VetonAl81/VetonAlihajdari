<?php
defined( 'ABSPATH' ) || exit;

/* ── Enqueue parent + child assets ── */
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
        '1.0.0'
    );
    wp_enqueue_script(
        'vae-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
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

/* ── AJAX contact form handler ── */
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
    if ( empty( $first ) )             $errors[] = 'First name is required.';
    if ( empty( $last ) )              $errors[] = 'Last name is required.';
    if ( ! is_email( $email ) )        $errors[] = 'A valid email address is required.';
    if ( empty( $subject ) )           $errors[] = 'Subject is required.';
    if ( strlen( $body ) < 10 )        $errors[] = 'Message must be at least 10 characters.';

    if ( $errors ) {
        wp_send_json_error( [ 'errors' => $errors ] );
    }

    $to      = 'veton@alihajdari.com';
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $first . ' ' . $last . ' <' . $email . '>',
    ];
    $mail_body = "Name: {$first} {$last}\nEmail: {$email}\n\n{$body}";

    $sent = wp_mail( $to, $subject, $mail_body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => 'Your message has been sent. Thank you!' ] );
    } else {
        wp_send_json_error( [ 'errors' => [ 'Failed to send message. Please try again.' ] ] );
    }
}
