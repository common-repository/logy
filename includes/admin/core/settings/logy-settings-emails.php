<?php

/**
* E-mails Settings
*/

function logy_emails_settings() {

    global $Logy_Settings;

    $Logy_Settings->get_field(
        array(
            'title'     => __( 'info', 'logy' ),
            'msg_type'  => 'info',
            'type'      => 'msgBox',
            'id'        => 'logy_msgbox_mail_content',
            'msg'       => __( 'be careful the <strong>Mail Content Type</strong> that you will choose will be applied on all the Emails.', 'logy' )
        )
    );

	$Logy_Settings->get_field(
	    array(
	        'title' => __( 'Mail Settings', 'logy' ),
	        'type'  => 'openBox'
	    )
	);

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Mail Content type', 'logy' ),
            'desc'  => __( 'message content type', 'logy' ),
            'opts'  => $Logy_Settings->get_field_options( 'mail_content_type' ),
            'id'    => 'logy_mail_content_type',
            'type'  => 'select'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Mail Sender Name', 'logy' ),
            'desc'  => __( 'Mail appears from', 'logy' ),
            'id'    => 'logy_mail_sender_name',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'Mail Sender Email', 'logy' ),
            'desc'  => __( 'Mail appears from address', 'logy' ),
            'id'    => 'logy_mail_sender_email',
            'type'  => 'text'
        )
    );

	$Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

    $Logy_Settings->get_field(
        array(
            'title'     => __( 'Email Message Tags', 'logy' ),
            'msg_type'  => 'info',
            'type'      => 'msgBox',
            'id'        => 'logy_msgbox_mail_tags',
            'msg'       => __( "The list of the available <strong>Email Message tags</strong> :
                    <ul>
                        <li><strong>{email} :</strong> User Email Address.</li>
                        <li><strong>{username} :</strong> User Username.</li>
                        <li><strong>{first_name} :</strong> User First Name.</li>
                        <li><strong>{last_name} :</strong> User Last Name.</li>
                        <li><strong>{display_name} :</strong> User Display Name.</li>
                        <li><strong>{site_name} :</strong> Website Name.</li>
                        <li><strong>{admin_email} :</strong> Admin Email Address.</li>
                        <li><strong>{site_url} :</strong> Website Link.</li>
                        <li><strong>{login_url} :</strong> Login Page Link</li>
                        <li><strong>{password_reset_url} :</strong> Password Reset Page Link.</li>
                    </ul>", 'logy' )
        )
    );

    $Logy_Settings->get_field(
	    array(
	        'title' => __( 'Confirmation E-mail Settings', 'logy' ),
	        'type'  => 'openBox'
	    )
	);

    $Logy_Settings->get_field(
        array(
            'title' => __( 'subject', 'logy' ),
            'desc'  => __( 'subject line', 'logy' ),
            'id'    => 'logy_user_confirmation_mail_subject',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'message', 'logy' ),
            'desc'  => __( 'message body', 'logy' ),
            'id'    => 'logy_user_confirmation_mail_message',
            'class' => 'logy-fullwidth-item',
            'type'  => 'textarea'
        )
    );

	$Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

	$Logy_Settings->get_field(
	    array(
	        'title' => __( 'Welcome E-mail Settings', 'logy' ),
	        'type'  => 'openBox'
	    )
	);

    $Logy_Settings->get_field(
        array(
            'title' => __( 'subject', 'logy' ),
            'desc'  => __( 'subject line', 'logy' ),
            'id'    => 'logy_user_welcome_mail_subject',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'message', 'logy' ),
            'desc'  => __( 'message body', 'logy' ),
            'id'    => 'logy_user_welcome_mail_message',
            'class' => 'logy-fullwidth-item',
            'type'  => 'textarea'
        )
    );

	$Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

	$Logy_Settings->get_field(
	    array(
	        'title' => __( 'Reset Password E-mail Settings', 'logy' ),
	        'type'  => 'openBox'
	    )
	);

    $Logy_Settings->get_field(
        array(
            'title' => __( 'subject', 'logy' ),
            'desc'  => __( 'subject line', 'logy' ),
            'id'    => 'logy_user_pswdreset_mail_subject',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'message', 'logy' ),
            'desc'  => __( 'message body', 'logy' ),
            'id'    => 'logy_user_pswdreset_mail_message',
            'class' => 'logy-fullwidth-item',
            'type'  => 'textarea'
        )
    );

	$Logy_Settings->get_field( array( 'type' => 'closeBox' ) );

	$Logy_Settings->get_field(
	    array(
	        'title' => __( 'Password Changed E-mail Settings', 'logy' ),
	        'type'  => 'openBox'
	    )
	);

    $Logy_Settings->get_field(
        array(
            'title' => __( 'subject', 'logy' ),
            'desc'  => __( 'subject line', 'logy' ),
            'id'    => 'logy_user_pswdchanged_mail_subject',
            'type'  => 'text'
        )
    );

    $Logy_Settings->get_field(
        array(
            'title' => __( 'message', 'logy' ),
            'desc'  => __( 'message body', 'logy' ),
            'id'    => 'logy_user_pswdchanged_mail_message',
            'class' => 'logy-fullwidth-item',
            'type'  => 'textarea'
        )
    );

	$Logy_Settings->get_field( array( 'type' => 'closeBox' ) );
}