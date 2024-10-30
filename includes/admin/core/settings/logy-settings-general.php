<?php

/**
 * # General Settings.
 */

function logy_general_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Pages Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login page', 'logy' ),
            'desc'  => __( 'choose login page', 'logy' ),
            'std'   => logy_page_id( 'login' ),
            'id'    => 'login',
            'opts'  => logy_get_pages(),
            'type'  => 'select'
        ),
        'logy_pages'
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register page', 'logy' ),
            'desc'  => __( 'choose registration page', 'logy' ),
            'std'   => logy_page_id( 'register' ),
            'opts'  => logy_get_pages(),
            'id'    => 'register',
            'type'  => 'select'
        ),
        'logy_pages'
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'lost password page', 'logy' ),
            'desc'  => __( 'choose lost password page', 'logy' ),
            'std'   => logy_page_id( 'lost-password' ),
            'opts'  => logy_get_pages(),
            'id'    => 'lost-password',
            'type'  => 'select'
        ),
        'logy_pages'
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Dashboard & Toolbar Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Hide dashboard for subscribers', 'logy' ),
            'desc'  => __( 'hide admin toolbar and dashborad for subscribers', 'logy' ),
            'id'    => 'logy_hide_subscribers_dash',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Margin Settings', 'logy' ),
            'class' => 'klabs-box-2cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'margin top', 'logy' ),
            'id'    => 'logy_plugin_margin_top',
            'desc'  => __( 'specify plugin page top margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'margin bottom', 'logy' ),
            'id'    => 'logy_plugin_margin_bottom',
            'desc'  => __( 'specify plugin page bottom margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'panel schemes', 'logy' ),
            'class' => 'klabs-panel-scheme',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'id'    =>  'logy_panel_scheme',
            'type'  => 'imgSelect',
            'opts'  => array(
                'klabs-orange-scheme', 'klabs-white-scheme', 'klabs-pink-scheme',
                'klabs-red-scheme', 'klabs-darkgray-scheme', 'klabs-yellow-scheme',
                'klabs-blue-scheme', 'klabs-purple-scheme', 'klabs-green-scheme'
            )
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
    
    $Logy_Settings->get_field(
        array(
            'title' => __( 'reset Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'button_title' => __( 'Reset all settings', 'logy' ),
            'title' => __( 'Reset all settings', 'logy' ),
            'desc'  => __( 'reset all the plugin settings', 'logy' ),
            'id'    => 'klabs-reset-all-settings',
            'type'  => 'button'
        )
    );

    logy_popup_dialog( 'reset_all' );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}