<?php

/**
 * Lost Password Settings
 */

function logy_lost_password_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form title', 'logy' ),
            'desc'  => __( 'lost password form title', 'logy' ),
            'id'    => 'logy_lostpswd_form_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form Sub title', 'logy' ),
            'desc'  => __( 'lost password Sub title', 'logy' ),
            'id'    => 'logy_lostpswd_form_subtitle',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'reset button title', 'logy' ),
            'desc'  => __( 'reset password button title', 'logy' ),
            'id'    => 'logy_lostpswd_submit_btn_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'cover Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'enable form cover', 'logy' ),
            'desc'  => __( 'enable form header cover?', 'logy' ),
            'id'    => 'logy_lostpswd_form_enable_header',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Form cover', 'logy' ),
            'desc'  => __( 'upload login form cover', 'logy' ),
            'id'    => 'logy_lostpswd_cover',
            'type'  => 'upload'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}