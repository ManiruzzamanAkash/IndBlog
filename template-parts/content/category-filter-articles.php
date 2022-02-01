<?php
/**
 * Displays Category Filter Articles.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$posts          = $args['posts'];
$offset         = $args['offset'];
$post_displayed = array();
$first_post     = isset( $posts[0] ) ? $posts[0] : null;

if ( is_null( $first_post ) ) {
    return;
}

// Add this to displayed post
if ( 0 == $offset ) {
    $post_displayed[] = $first_post->ID;
}
?>

<?php if ( 0 == $offset ) : ?>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php get_template_part( 'template-parts/content/article-first', 'first_article', $first_post ); ?>
        </div>
        <div class="col-sm-12 col-md-4">
            <?php foreach ( $posts as $index => $post ) : ?>
                <?php if ( ! in_array( $post->ID, $post_displayed ) && count( $post_displayed ) < 3 ) : ?>
                    <?php get_template_part( 'template-parts/content/article-mini', 'category_filter_article', $post ); ?>
                    <?php $post_displayed[] = $post->ID; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endif; ?>

<!-- More articles of the category -->
<div class="row mt-4">
    <?php foreach ( $posts as $index => $post ) : ?>
        <?php if ( ! in_array( $post->ID, $post_displayed ) && count( $post_displayed ) < 7 ) : ?>
            <div class="col-sm-12 col-md-3">
                <?php get_template_part( 'template-parts/content/article-mini', 'category_filter_article', $post ); ?>
                <?php $post_displayed[] = $post->ID; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
</div>