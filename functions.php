<?php
/**
 * Ind Blog Theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Indblog
 * @since   IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_setup' ) ) {

    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_setup() {

        // Make theme available for translation.
        load_theme_textdomain( 'indblogdoman', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to &lt;head>
        add_theme_support( 'automatic-feed-links' );

        // Enable support for post thumbnails and featured images.
        add_theme_support( 'post-thumbnails' );

        // Enable wordpress handled document title.
        add_theme_support( 'title-tag' );

        // Add support for responsive embeds.
        add_theme_support( 'responsive-embeds' );

        // Add support for two custom navigation menus.
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'indblogdoman' ),
            'secondary' => __('Secondary Menu', 'indblogdoman' )
        ) );

        /**
        * Set the content width to something large.
        * This will limit the width of all uploaded images and embeds.
        */
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1200; /* pixels */
        }

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
}

add_action( 'after_setup_theme', 'indblog_setup' );