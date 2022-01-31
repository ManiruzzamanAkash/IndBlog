<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

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