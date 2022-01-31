<?php
/**
 * Displays when no post found.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="alert alert-warning p-4">
    <h2><?php esc_html_e( 'Sorry', 'indblog' ); ?></h2>
    <p><?php esc_html_e( 'Sorry, no articles matched your criteria.', 'indblog' ); ?></p>
</div>