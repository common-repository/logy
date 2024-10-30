<?php
/**
 * Captcha Settings
 */
function logy_captcha_settings() {

    global $Logy_Settings;

    // Get Captcha Url
    $captcha_url = 'https://www.google.com/recaptcha/intro/index.html';

    $Logy_Settings->get_field(
        array(
            'title'     => __( 'How to Get Your Captcha Keys?', 'logy' ),
            'msg_type'  => 'info',
            'type'      => 'msgBox',
            'id'        => 'logy_msgbox_captcha',
            'msg'       => sprintf( __( 'To get your keys Visit <strong><a href="%s">The reCAPTCHA Site</a></strong> or Check the documentation.', 'logy' ), $captcha_url )
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'enable captcha', 'logy' ),
            'desc'  => __( 'enable using the captcha', 'logy' ),
            'id'    => 'logy_enable_recaptcha',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'captcha site key', 'logy' ),
            'desc'  => __( 'the reCaptcha site key', 'logy' ),
            'id'    => 'logy_recaptcha_site_key',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'captcha secret key', 'logy' ),
            'desc'  => __( 'the reCaptcha secret key', 'logy' ),
            'id'    => 'logy_recaptcha_secret_key',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}