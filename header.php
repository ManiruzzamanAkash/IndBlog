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
    ?>

    <!-- Header: Navbar and Page Description header -->
    <header>
        <nav class="indblog-navbar navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Insights', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Industries', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Innovations', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <!-- indblog-navbar -->

        <div class="indblog-page-top-links bg-primary text-white">
            <div class="container text-center">
                <p class="p-2 fs-6">
                    <?php esc_html_e('Insights', 'indblog'); ?>
                    &nbsp;&nbsp;
                    >
                    &nbsp;&nbsp;
                    <?php esc_html_e('All Content', 'indblog'); ?>
                </p>
            </div>
        </div> <!-- indblog-page-top-links -->
    </header>

    <?php
    /**
     * indblog_after_header hook
     *
     * Fires after the opening tag of the header element.
     *
     * @since IND_BLOG_SINCE
     */
    do_action( 'indblog_after_header' );
    ?>