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
