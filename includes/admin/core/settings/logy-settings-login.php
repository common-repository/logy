<?php

/**
 * # Admin Settings.
 */
function logy_login_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button title', 'logy' ),
            'desc'  => __( 'type login button title', 'logy' ),
            'id'    => 'logy_login_signin_btn_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button title', 'logy' ),
            'desc'  => __( 'type register button title', 'logy' ),
            'id'    => 'logy_login_register_btn_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'lost password title', 'logy' ),
            'desc'  => __( 'type lost password title', 'logy' ),
            'id'    => 'logy_login_lostpswd_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'redirect Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'after login redirect user to?', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'user_login_redirect_pages' ),
            'desc'  => __( 'after user login redirect to which page ?', 'logy' ),
            'id'    => 'logy_user_after_login_redirect',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'after login redirect admin to?', 'logy' ),
            'desc'  => __( 'after admin login redirect to which page ?', 'logy' ),
            'id'    => 'logy_admin_after_login_redirect',
            'opts'  => $Logy_Settings->get_field_options( 'admin_login_redirect_pages' ),
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'after logout redirect user to?', 'logy' ),
            'desc'  => __( 'after user logout redirect to which page ?', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'logout_redirect_pages' ),
            'id'    => 'logy_after_logout_redirect',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    // Get Header Settings
    logy_login_header_settings();

    // Get Fields Settings
    logy_login_fields_settings();

    // Get Buttons Settings
    logy_login_buttons_settings();

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Login Widget Margin Settings', 'logy' ),
            'class' => 'klabs-box-2cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'box margin top', 'logy' ),
            'id'    => 'logy_login_wg_margin_top',
            'desc'  => __( 'specify box top margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'box margin bottom', 'logy' ),
            'id'    => 'logy_login_wg_margin_bottom',
            'desc'  => __( 'specify box bottom margin', 'logy' ),
            'type'  => 'number'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Header Settings
 */
function logy_login_header_settings() {

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
            'id'    => 'logy_login_form_enable_header',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form title', 'logy' ),
            'desc'  => __( 'login form title', 'logy' ),
            'id'    => 'logy_login_form_title',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form Sub title', 'logy' ),
            'desc'  => __( 'login form Sub title', 'logy' ),
            'id'    => 'logy_login_form_subtitle',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Form cover', 'logy' ),
            'desc'  => __( 'upload login form cover', 'logy' ),
            'id'    => 'logy_login_cover',
            'type'  => 'upload'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Fields Settings
 */
function logy_login_fields_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Form Fields layouts', 'logy' ),
            'class' => 'klabs-center-elements',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'id'    => 'logy_login_form_layout',
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
            'id'    => 'logy_login_icons_position',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'fields border style', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'fields_format' ),
            'desc'  => __( 'select fields border style', 'logy' ),
            'id'    => 'logy_login_fields_format',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Buttons Settings
 */
function logy_login_buttons_settings() {

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
            'id'    => 'logy_login_actions_layout',
            'type'  => 'imgSelect',
            'opts'  =>  array(
                'logy-actions-v1', 'logy-actions-v2', 'logy-actions-v3', 'logy-actions-v4',
                'logy-actions-v5', 'logy-actions-v6', 'logy-actions-v7', 'logy-actions-v8',
                'logy-actions-v9', 'logy-actions-v10'
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
            'id'    => 'logy_login_btn_icons_position',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Buttons border style', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'fields_format' ),
            'desc'  => __( 'select buttons border style', 'logy' ),
            'id'    => 'logy_login_btn_format',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

}

/**
 * Styling Settings
 */
function logy_login_styling_settings() {

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
            'id'    => 'logy_login_title_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'form subtitle', 'logy' ),
            'desc'  => __( 'form subtitle color', 'logy' ),
            'id'    => 'logy_login_subtitle_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'cover title background', 'logy' ),
            'desc'  => __( 'cover title background color', 'logy' ),
            'id'    => 'logy_login_cover_title_bg_color',
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
            'id'    => 'logy_login_label_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'placeholder', 'logy' ),
            'desc'  => __( 'form labels color', 'logy' ),
            'id'    => 'logy_login_placeholder_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs text', 'logy' ),
            'desc'  => __( 'inputs text color', 'logy' ),
            'id'    => 'logy_login_inputs_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs background', 'logy' ),
            'desc'  => __( 'inputs background color', 'logy' ),
            'id'    => 'logy_login_inputs_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'inputs border', 'logy' ),
            'desc'  => __( 'inputs border color', 'logy' ),
            'id'    => 'logy_login_inputs_border_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'icons', 'logy' ),
            'desc'  => __( 'fields icons color', 'logy' ),
            'id'    => 'logy_login_fields_icons_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'icons background', 'logy' ),
            'desc'  => __( 'fields icons background color', 'logy' ),
            'id'    => 'logy_login_fields_icons_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Remember Me Styling Settings', 'logy' ),
            'class' => 'klabs-box-3cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( '"remember me" color', 'logy' ),
            'desc'  => __( 'form "remember me" color', 'logy' ),
            'id'    => 'logy_login_remember_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'checkbox border', 'logy' ),
            'desc'  => __( 'form checkbox border color', 'logy' ),
            'id'    => 'logy_login_checkbox_border_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'checkbox icon', 'logy' ),
            'desc'  => __( 'form checkbox icon color', 'logy' ),
            'id'    => 'logy_login_checkbox_icon_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Buttons Styling Settings', 'logy' ),
            'class' => 'klabs-box-3cols',
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( '"lost password" color', 'logy' ),
            'desc'  => __( 'form "lost password" color', 'logy' ),
            'id'    => 'logy_login_lostpswd_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button color', 'logy' ),
            'desc'  => __( 'login button background color', 'logy' ),
            'id'    => 'logy_login_submit_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'login button text', 'logy' ),
            'desc'  => __( 'login button text color', 'logy' ),
            'id'    => 'logy_login_submit_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button color', 'logy' ),
            'desc'  => __( 'register button background color', 'logy' ),
            'id'    => 'logy_login_regbutton_bg_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'register button text', 'logy' ),
            'desc'  => __( 'register button text color', 'logy' ),
            'id'    => 'logy_login_regbutton_txt_color',
            'type'  => 'color'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}
