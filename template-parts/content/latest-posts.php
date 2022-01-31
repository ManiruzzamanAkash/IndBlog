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

$first_post = get_posts( 'post_type=post&numberposts=1' );

if ( isset( $first_post[0] ) ) {
    $first_post = $first_post[0];

    // Get latest 2 posts except the first one.
    $latest_posts = get_posts( 'post_type=post&numberposts=2&offset=1' );
} else {
    $first_post   = null;
    $latest_posts = [];
}

?>

<!-- Section: Latest Article -->
<section class="indblog-section indblog-latest-article">
    <div class="container">
        <h2 class="indblog-section-title">
            <?php esc_html_e('Latest Articles', 'indblog'); ?>
        </h2>
        <?php if ( is_null( $first_post ) ) : ?>
            <?php get_template_part( 'template-parts/content/no-post' ); ?>
        <?php else : ?>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <?php get_template_part( 'template-parts/content/article-first', 'first_article', $first_post ); ?>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php foreach ( $latest_posts as $post ) : ?>
                        <?php get_template_part( 'template-parts/content/article-mini', 'latest_article', $post ); ?>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><!-- indblog-latest-article -->
<!-- End Section: Latest Article -->