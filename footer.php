<?php
/**
 * The template for displaying the footer.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
* indblog_before_footer hook.
*
* @since IND_BLOG_SINCE
*/
do_action( 'indblog_before_footer' );

/**
* indblog_footer hook.
*
* @since IND_BLOG_SINCE
*/
do_action( 'indblog_footer' );

/**
* indblog_after_footer hook.
*
* @since IND_BLOG_SINCE
*/
do_action( 'indblog_after_footer' );

wp_footer();
?>
</body>

</html>