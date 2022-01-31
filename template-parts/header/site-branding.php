<?php
/**
 * Displays header site branding
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="site-branding">
    <a class="navbar-brand" href="<?php echo esc_url( get_site_url() ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
    </a>
</div><!-- .site-branding -->