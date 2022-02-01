<?php
/**
 * Header elements.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_construct_header' ) ) {
    add_action( 'indblog_header', 'indblog_construct_header' );

    /**
     * Build Header.
     *
     * @since IND_BLOG_SINCE
     */
    function indblog_construct_header() {
        get_template_part( 'template-parts/header/site-header' );
    }
}