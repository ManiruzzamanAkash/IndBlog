<?php
/**
 * Displays Slider.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Get featured post which has been added by meta box.
 */
$featured_posts = get_posts( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'meta_key'       => 'indblog_post_featured',
    'meta_value'     => '1',
    'orderby'        => 'meta_value_num',
    'order'          => 'DESC',
) );

$active_slider_post = null;
if ( count( $featured_posts ) > 1 ) {
    $active_slider_post = $featured_posts[1];
} elseif ( count( $featured_posts ) > 0 ) {
    $active_slider_post = $featured_posts[0];
}
?>

<!-- Section: Slider -->
<section class="indblog-section indblog-slider mt-0 bg-success" style="background-image: url('<?php echo get_the_post_thumbnail_url( $active_slider_post ); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="indblog-slider-main-content mb-4">
                    <p class="text-success">
                        <?php esc_html_e( 'Featured', 'indblog' ); ?>
                    </p>
                    <?php if( ! is_null( $active_slider_post ) ): ?>
                        <h2 class="text-white">
                            <a href="<?php echo esc_url( get_permalink( $active_slider_post ) ); ?>" class="text-white">
                                <?php echo esc_html( $active_slider_post->post_title ); ?>
                            </a>
                        </h2>
                        <h6 class="mt-2">
                            <?php echo indblog_get_post_categories( $post->ID, true ); ?>
                        </h6>
                        <p class="mt-3">
                            <?php echo esc_html( substr( strip_tags( $post->post_content ), 0, 250 ) ); ?>...
                        </p>
                        <p class="mt-2">
                            <?php echo esc_html( $post->post_author ); ?>
                             /
                            <?php echo esc_html( indblog_calculate_read_time( $post->post_content ) ); ?>
                        </p>
                    <?php endif; ?>
                </div><!-- indblog-slider-main-content -->
            </div>

            <div class="col-md-6">
                <?php foreach ( $featured_posts as $post ): ?>
                    <article class="mb-3 mt-3 slider-article">
                        <h6>
                            <?php echo indblog_get_post_categories( $post->ID, true ); ?>
                        </h6>
                        <h5 class="mt-1">
                            <a href="<?php echo esc_url( get_permalink( $post ) ); ?>" class="text-white">
                                <?php echo esc_html( $post->post_title ); ?>
                            </a>
                        </h5>
                        <p class="mt-1">
                            <?php echo esc_html( $post->author ); ?>
                            &nbsp; / &nbsp;
                            <?php echo esc_html( indblog_calculate_read_time( $post->post_content ) ); ?>
                        </p>
                    </article><!-- slider-article -->
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section><!-- indblog-slider -->
