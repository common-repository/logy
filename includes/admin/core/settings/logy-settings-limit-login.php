<?php
/**
 * Captcha Settings
 */
function logy_limit_login_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Enable Limit login', 'logy' ),
            'desc'  => __( 'enable limit login attempts', 'logy' ),
            'id'    => 'logy_enable_limit_login',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Allowed Login Retries', 'logy' ),
            'desc'  => __( 'Lock out after this many tries', 'logy' ),
            'id'    => 'logy_allowed_retries',
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Short Lockouts number', 'logy' ),
            'desc'  => __( 'apply Long lockout after this many lockouts', 'logy' ),
            'id'    => 'logy_allowed_lockouts',
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Retries Duration', 'logy' ),
            'desc'  => __( 'Reset retries after this many seconds', 'logy' ),
            'id'    => 'logy_retries_duration',
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Short Lockouts Duration', 'logy' ),
            'desc'  => __( 'Short Lockout for this many seconds', 'logy' ),
            'id'    => 'logy_short_lockout_duration',
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Long Lockouts Duration', 'logy' ),
            'desc'  => __( 'Long Lockout for this many seconds', 'logy' ),
            'id'    => 'logy_long_lockout_duration',
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}