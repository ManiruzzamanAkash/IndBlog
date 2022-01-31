<?php

/**
 * Displays the site header.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<!-- Header: Navbar -->
<header class="<?php echo esc_attr( $wrapper_classes); ?>">
    <nav class="indblog-navbar navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <?php get_template_part( 'template-parts/header/site-branding' ); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle navigation', 'cp') ; ?>">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php get_template_part( 'template-parts/header/site-nav' ); ?>
            </div>
        </div>
    </nav> <!-- .indblog-navbar -->
</header><!-- header -->