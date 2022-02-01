<?php
/**
 * Displays latest posts.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$most_viewed_posts = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'orderby'        => 'meta_value_num',
    'meta_key'       => 'indblog_post_views',
    'order'          => 'DESC',
) );

?>

<div class="d-flex justify-content-between">
    <h2 class="indblog-section-title">
        <?php esc_html_e('Most Viewed', 'indblog'); ?>
    </h2>
    <div class="article-switch">
        <span class="previous-post most-view-prev">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="next-post most-view-next">
            <i class="fa fa-arrow-right"></i>
        </span>
    </div>
</div>
<div class="row">
    <?php if ( $most_viewed_posts->have_posts() ) : ?>
        <div class="most-viewed-slick-carousel">
            <?php while ( $most_viewed_posts->have_posts() ) : $most_viewed_posts->the_post(); ?>
            <div class="col-sm-12 col-md-6">
                <div class="m-3">
                <?php get_template_part( 'template-parts/content/article-mini', 'most_viewed_post', get_post( get_the_ID() ) ); ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <div class="col-sm-12 col-md-12">
            <?php get_template_part( 'template-parts/content/no-post' ); ?>
        </div>
    <?php endif; ?>
</div>