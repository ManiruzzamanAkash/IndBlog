<?php
/**
 * General functions.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_subscribe_email' ) ) {

    /**
    * Email Subscription ajax action handler.
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_subscribe_email() {
        try {
            // Nonce validate
            if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['nonce'] ) ), 'indblog_nonce' ) ) {
                throw new Exception( __( 'Nonce is invalid.', 'indblog' ) );
            }

            // Check email added or not
            if ( ! isset( $_POST['email'] ) || empty( $_POST['email'] ) ) {
                throw new Exception( __( 'Email is required.', 'indblog' ) );
            }

            // Email validate
            $email = sanitize_email( wp_unslash( $_POST['email'] ) );
            if ( ! is_email( $email ) ) {
                throw new Exception( __( 'Email is invalid.', 'indblog' ) );
            }

            // Check email already exist or not
            $email_exist = get_user_by( 'email', $email );
            if ( $email_exist ) {
                throw new Exception( __( 'You\'ve already subscribed.', 'indblog' ) );
            }

            // Add user email to database
            $data = array(
                'user_email' => $email,
                'role'       => 'subscriber',
                'user_login' => explode( '@', $email )[0],
                'user_pass'  => wp_generate_password(),
            );

            $user_id = wp_insert_user( $data );

            if ( ! is_wp_error( $user_id ) ) {
                // Send email to user
                // $subject = __( 'Thank you for subscribing to our newsletter.', 'indblog' );
                // $message = __( 'Thank you for subscribing to our newsletter.', 'indblog' );
                // wp_mail( $email, $subject, $message );

                wp_send_json_success( __( 'You\'ve been subscribed successfully.', 'indblog' ) );
            } else {
                throw new Exception( __( 'You\'ve already subscribed.', 'indblog' ) );
            }
        } catch ( \Exception $e ) {
            wp_send_json_error( $e->getMessage() );
        }
    }
}

add_action( 'wp_ajax_indblog_subscribe_email', 'indblog_subscribe_email' );