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

if ( ! function_exists( 'indblog_add_post_metabox_featured' ) ) {

    /**
     * Add an action to add metabox to post.
     *
     * @since IND_BLOG_SINCE
     */
    function indblog_add_post_metabox_featured() {
        add_meta_box(
            'indblog_post_featured_metabox',
            __( 'Is Featured ?', 'indblog' ),
            'indblog_post_featured_metabox',
            'post',
            'advanced',
            'high'
        );
    }

    /**
     * Render Featured Meta box content.
     *
     * @return void
     */
    function indblog_post_featured_metabox() {
        $post_id  = get_the_ID();
        $featured = get_post_meta( $post_id, 'indblog_post_featured', true );
        ?>
        <div class="indblog-post-featured-metabox">
            <label for="indblog_post_featured">
                <input type="checkbox" name="indblog_post_featured" id="indblog_post_featured" value="1" <?php checked( $featured, 1 ); ?> />
                <?php _e( 'Featured', 'indblog' ); ?>
            </label>
        </div>
        <?php
    }
}

if ( ! function_exists( 'indblog_add_post_metabox_featured_save' ) ) {

    /**
     * Save featured metabox data.
     *
     * @since IND_BLOG_SINCE
     */
    function indblog_add_post_metabox_featured_save() {
        $post_id = get_the_ID();

        if ( isset( $_POST['indblog_post_featured'] ) ) {
            update_post_meta( $post_id, 'indblog_post_featured', 1 );
        } else {
            delete_post_meta( $post_id, 'indblog_post_featured' );
        }
    }
}

add_action( 'add_meta_boxes', 'indblog_add_post_metabox_featured' );
add_action( 'save_post', 'indblog_add_post_metabox_featured_save' );
