<?php
/**
 * Displays Sidebar.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="indblog-sidebar">
    <!-- Searchbar -->
    <div class="card card body p-3 mb-5 recent-post-sidebar">
        <h2 class="text-secondary-800 border-bottom pb-3 mb-3"><?php esc_html_e( 'Search', 'indblog' ); ?></h2>
        <?php echo get_search_form(); ?>
    </div>

    <!-- Recent Posts -->
    <div class="card card body p-3 mb-5 recent-post-sidebar">
        <h2 class="text-secondary-800 border-bottom pb-3 mb-3"><?php esc_html_e( 'Latest Posts', 'indblog' ); ?></h2>
        <?php wp_get_archives('type=postbypost&limit=10'); ?>
    </div>

    <!-- Tags -->
    <div class="card card body p-3 mb-5">
        <h2 class="text-secondary-800 border-bottom pb-3 mb-3"><?php esc_html_e( 'Tags', 'indblog' ); ?></h2>
        <?php wp_tag_cloud( array( 'show_count' => true ) ); ?>
    </div>
</div>