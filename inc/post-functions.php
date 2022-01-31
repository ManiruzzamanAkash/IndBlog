<?php
/**
 * Calculate reading-time.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_get_post_categories' ) ) {

    /**
     * Calculate reading time from a post content.
     *
     * @since IND_BLOG_SINCE
     *
     * @param string $post
     * @return string
     */
    function indblog_get_post_categories( $post_id ) {

        $post_categories = wp_get_post_categories( $post_id );
        $categories      = '';

        foreach( $post_categories as $cat ) {
            $category = get_category( $cat );
            $categories .= sprintf(
                /* translators: 1) Category URL, 2) Category Name */
                __( "<a href='%s' class='article-category-name mr-2'>%s</a>" ),
                __( get_category_link( $category ) ),
                $category->name
            );
        }

        return $categories;
    }
}


if ( ! function_exists( 'indblog_inc_post_view' ) ) {

    /**
     * Increment post view meta when someone views a post.
     *
     * @since IND_BLOG_SINCE
     */
    function indblog_inc_post_view() {
        // Return if it's not a post and in single page.
        if ( ! is_singular( 'post' ) && 'post' === get_post_type() ) {
            return;
        }

        $post_id        = get_the_ID();
        $previous_views = (int) get_post_meta( $post_id, 'indblog_post_views', true );

        // Increment views.
        update_post_meta( $post_id, 'indblog_post_views', (int) $previous_views + 1 );
    }
}
add_action( 'indblog_header', 'indblog_inc_post_view' );
