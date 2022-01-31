<?php
/**
 * The template for displaying the header.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    wp_body_open();

    /**
     * indblog_before_header hook
     *
     * Fires before the opening tag of the header element.
     *
     * @since IND_BLOG_SINCE
     */
    do_action( 'indblog_before_header' );

    /**
     * indblog_header hook
     *
     * @since IND_BLOG_SINCE
     */
    do_action( 'indblog_header' );

    /**
     * indblog_after_header hook
     *
     * Fires after the opening tag of the header element.
     *
     * @since IND_BLOG_SINCE
     */
    do_action( 'indblog_after_header' );
    ?>