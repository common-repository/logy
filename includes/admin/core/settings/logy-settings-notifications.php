<?php

/**
 * Notifications Settings
 */

function logy_notifications_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title' => __( 'general Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Notify Admin on Registration', 'logy' ),
            'desc'  => __( 'receive notification when a new user is registred?', 'logy' ),
            'id'    => 'logy_notify_admin_on_registration',
            'type'  => 'checkbox'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'New User Notification Settings', 'logy' ),
            'type'  => 'openBox'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Subject', 'logy' ),
            'desc'  => __( 'admin notification subject line', 'logy' ),
            'id'    => 'logy_newuser_notification_subject',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Message', 'logy' ),
            'desc'  => __( 'admin notification message body', 'logy' ),
            'id'    => 'logy_newuser_notification_message',
            'class' => 'logy-fullwidth-item',
            'type'  => 'textarea'
        )
    );

    $Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}