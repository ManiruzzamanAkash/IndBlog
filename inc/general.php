<?php
/**
 * General functions.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_scripts' ) ) {

    /**
    * Register the stylesheets for the theme.
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_scripts() {
        $dir_uri = get_template_directory_uri();

        // Enqueue styles.
        wp_enqueue_style( 'indblog-font-awesome', $dir_uri . "/assets/vendors/font-awesome/font-awesome.min.css", false, 4.7 );
        wp_enqueue_style( 'indblog-master', $dir_uri . "/assets/css/master.css", array(), GENERATE_VERSION );
        wp_enqueue_style( 'indblog-style', get_stylesheet_uri(), array(), GENERATE_VERSION );

        // Enqueue Scripts.
        wp_enqueue_script( 'indblog-bootstrap', $dir_uri . "/assets/vendors/bootstrap/bootstrap.bundle.min.js", false, '5.1.3' );
        wp_enqueue_script( 'indblog-script', $dir_uri . "/assets/js/main.js", array( 'jquery' ), GENERATE_VERSION );

        // Load localize script.
        wp_localize_script(
            'indblog-script',
            'indblog_data',
            array(
                'ajaxurl' => admin_url( 'admin-ajax.php' ),
                'nonce'   => wp_create_nonce( 'indblog_nonce' ),
                'i18n'    => array(
                    'subscribe_email_required' => __( 'Email is required.', 'indblog' ),
                    'subscribe_email_invalid'  => __( 'Email is invalid.', 'indblog' ),
                ),
            )
        );
    }
}

add_action( 'wp_enqueue_scripts', 'indblog_scripts' );

if ( ! function_exists( 'indblog_disable_admin_bar' ) ) {

    /**
    * Disable admin bar
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_disable_admin_bar( $show_admin_bar ) {
        return false;
    }
}

add_filter( 'show_admin_bar', 'indblog_disable_admin_bar' );


if ( ! function_exists( 'indblog_disable_gutenberg' ) ) {
    /**
    * Disable Gutenberg editor
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_disable_gutenberg( $current_status, $post_type ) {
        if ( 'post' === $post_type ) {
            return false;
        }

        return $current_status;
    }
}


add_filter( 'use_block_editor_for_post_type', 'indblog_disable_gutenberg', 10, 2 );