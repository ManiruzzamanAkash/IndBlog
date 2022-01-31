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
        wp_enqueue_script( 'indblog-script', $dir_uri . "/assets/js/main.js", array(), GENERATE_VERSION );
    }
}

add_action( 'wp_enqueue_scripts', 'indblog_scripts' );