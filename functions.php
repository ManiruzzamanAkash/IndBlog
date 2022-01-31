<?php
/**
 * Ind Blog Theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package indblog
 * @since   IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Set our theme version.
define( 'GENERATE_VERSION', '0.1.1' );

if ( ! function_exists( 'indblog_setup' ) ) {

    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * @since IND_BLOG_SINCE
    */
    function indblog_setup() {

        // Make theme available for translation.
        load_theme_textdomain( 'indblog', get_template_directory() . '/languages' );

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
            'primary'   => esc_html__( 'Primary Menu', 'indblog' ),
            'secondary' => esc_html__('Secondary Menu', 'indblog' )
        ) );

        /**
        * Set the content width to something large.
        * This will limit the width of all uploaded images and embeds.
        */
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 800; /* pixels */
        }

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
}

add_action( 'after_setup_theme', 'indblog_setup' );

/**
 * Include required files.
 */
require get_template_directory() . '/inc/ajax-actions.php';
require get_template_directory() . '/inc/defaults.php';
require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/reading-time.php';
require get_template_directory() . '/inc/post-functions.php';

/**
 * Load theme structure files
 */
require get_template_directory() . '/inc/structure/header.php';
require get_template_directory() . '/inc/structure/footer.php';