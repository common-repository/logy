<?php

/**
 * # Admin Settings.
 */
function logy_register_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'enable registration', 'logy' ),
            'desc'  => __( 'enable users registration', 'logy' ),
            'id'    => 'users_can_register',
            'type'  => 'checkbox'
        )
    );

    // Get Site Rules
    global $wp_roles;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'New User Default Role', 'logy' ),
            'desc'  => __( 'select New User Default Role', 'logy' ),
            'opts'  => $wp_roles->get_names(),
            'id'    => 'default_role',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button title', 'logy' ),
            'desc'  => __( 'type register button title', 'logy' ),
            'id'    => 'logy_signup_register_btn_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button title', 'logy' ),
            'desc'  => __( 'type login button title', 'logy' ),
            'id'    => 'logy_signup_signin_btn_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Terms and Privacy Policy Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Display note', 'logy' ),
            'desc'  => __( 'display terms and privacy policy note', 'logy' ),
            'id'    => 'logy_show_terms_privacy_note',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'terms url', 'logy' ),
            'desc'  => __( 'enter terms and conditions link', 'logy' ),
            'id'    => 'logy_terms_url',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'privacy policy url', 'logy' ),
            'desc'  => __( 'enter privacy policy link', 'logy' ),
            'id'    => 'logy_privacy_url',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    // Get Header Settings
    logy_register_header_settings();
    // Get Fields Settings
    logy_register_fields_settings();
    // Get Buttons Settings
    logy_register_buttons_settings();

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Register Widget Margin Settings', 'logy' ),
            'class' => 'klabs-box-2cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'box margin top', 'logy' ),
            'id'    => 'logy_register_wg_margin_top',
            'desc'  => __( 'specify box top margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'box margin bottom', 'logy' ),
            'id'    => 'logy_register_wg_margin_bottom',
            'desc'  => __( 'specify box bottom margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Header Settings
 */
function logy_register_header_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'header Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'enable form cover', 'logy' ),
            'desc'  => __( 'enable form header cover?', 'logy' ),
            'id'    => 'logy_signup_form_enable_header',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form title', 'logy' ),
            'desc'  => __( 'registration form title', 'logy' ),
            'id'    => 'logy_signup_form_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form Sub title', 'logy' ),
            'desc'  => __( 'Sign up form Sub title', 'logy' ),
            'id'    => 'logy_signup_form_subtitle',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'upload cover', 'logy' ),
            'desc'  => __( 'upload registration form cover', 'logy' ),
            'id'    => 'logy_signup_cover',
            'type'  => 'upload'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}

/**
 * Fields Settings
 */
function logy_register_fields_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'fields layouts', 'logy' ),
            'class' => 'klabs-center-elements',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'id'    => 'logy_signup_form_layout',
            'type'  => 'imgSelect',
            'opts'  =>  array(
                'logy-field-v1', 'logy-field-v2', 'logy-field-v3', 'logy-field-v4', 'logy-field-v5',
                'logy-field-v6', 'logy-field-v7', 'logy-field-v8', 'logy-field-v9', 'logy-field-v10',
                'logy-field-v11', 'logy-field-v12'
            )
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'fields Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'fields icons position', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'form_icons_position' ),
            'desc'  => __( 'select fields icons position <br>( works only with layouts that support icons ! )', 'logy' ),
            'id'    => 'logy_signup_icons_position',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'fields border style', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'fields_format' ),
            'desc'  => __( 'select fields border style', 'logy' ),
            'id'    => 'logy_signup_fields_format',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Buttons Settings
 */
function logy_register_buttons_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'buttons layout', 'logy' ),
            'class' => 'klabs-center-elements',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'id'    => 'logy_signup_actions_layout',
            'type'  => 'imgSelect',
            'opts'  =>  array(
                'logy-regactions-v1', 'logy-regactions-v2', 'logy-regactions-v3', 'logy-regactions-v4',
                'logy-regactions-v5', 'logy-regactions-v6'
            )
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'buttons Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Buttons icons position', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'form_icons_position' ),
            'desc'  => __( 'select buttons icons position <br>( works only with buttons that support icons ! )', 'logy' ),
            'id'    => 'logy_signup_btn_icons_position',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Buttons border style', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'fields_format' ),
            'desc'  => __( 'select buttons border style', 'logy' ),
            'id'    => 'logy_signup_btn_format',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Styling Settings
 */
function logy_register_styling_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Header Styling Settings', 'logy' ),
            'class' => 'klabs-box-3cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form title', 'logy' ),
            'desc'  => __( 'form title color', 'logy' ),
            'id'    => 'logy_signup_title_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form subtitle', 'logy' ),
            'desc'  => __( 'form subtitle color', 'logy' ),
            'id'    => 'logy_signup_subtitle_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'cover title background', 'logy' ),
            'desc'  => __( 'cover title background color', 'logy' ),
            'id'    => 'logy_signup_cover_title_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Fields Styling Settings', 'logy' ),
            'class' => 'klabs-box-3cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'labels', 'logy' ),
            'desc'  => __( 'form labels color', 'logy' ),
            'id'    => 'logy_signup_label_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'placeholder', 'logy' ),
            'desc'  => __( 'form labels color', 'logy' ),
            'id'    => 'logy_signup_placeholder_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs text', 'logy' ),
            'desc'  => __( 'inputs text color', 'logy' ),
            'id'    => 'logy_signup_inputs_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs background', 'logy' ),
            'desc'  => __( 'inputs background color', 'logy' ),
            'id'    => 'logy_signup_inputs_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs border', 'logy' ),
            'desc'  => __( 'inputs border color', 'logy' ),
            'id'    => 'logy_signup_inputs_border_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'icons', 'logy' ),
            'desc'  => __( 'fields icons color', 'logy' ),
            'id'    => 'logy_signup_fields_icons_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'icons background', 'logy' ),
            'desc'  => __( 'fields icons background color', 'logy' ),
            'id'    => 'logy_signup_fields_icons_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'password note Styling Settings', 'logy' ),
            'class' => 'klabs-box-2cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( '"note" word color', 'logy' ),
            'desc'  => __( 'form the "note" word color', 'logy' ),
            'id'    => 'logy_signup_pswdnote_word_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'note description color', 'logy' ),
            'desc'  => __( 'form note description color', 'logy' ),
            'id'    => 'logy_signup_pswdnote_desc_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Buttons Styling Settings', 'logy' ),
            'class' => 'klabs-box-2cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button color', 'logy' ),
            'desc' => __( 'submit button background', 'logy' ),
            'id'    => 'logy_signup_submit_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button text', 'logy' ),
            'desc'  => __( 'register button text color', 'logy' ),
            'id'    => 'logy_signup_submit_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button color', 'logy' ),
            'desc'  => __( 'register button background color', 'logy' ),
            'id'    => 'logy_signup_loginbutton_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button text', 'logy' ),
            'desc'  => __( 'register button text color', 'logy' ),
            'id'    => 'logy_signup_loginbutton_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}