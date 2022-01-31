<?php
/**
 * Displays article content for the single post and first article of rows.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$post = $args;

$author_name   = empty( get_the_author_meta( 'first_name', $post->post_author ) ) ? get_the_author_meta( 'display_name', $post->post_author ) : get_the_author_meta( 'first_name', $post->post_author );
$read_time     = indblog_calculate_read_time( $post->post_content );
$post_category = get_the_category( $post->ID );
?>

<article>
    <div class="indblog-article-content indblog-article-content-sm">
        <img src="<?php echo esc_url( get_the_post_thumbnail_url( $post ) ); ?>" alt="" class="img img-fluid">
        <div class="inner-area">
            <p>
                <?php echo indblog_get_post_categories( $post->ID ); ?>
            </p>
            <h4 class="article-title">
                <a href="<?php echo esc_url( get_permalink( $post ) ); ?>">
                    <?php echo esc_html( $post->post_title ); ?>
                </a>
            </h4>
            <p class="article-meta">
                <?php echo esc_html( $author_name ); ?>
                &nbsp;&nbsp;
                <?php echo esc_html( $read_time ); ?>
            </p>
        </div>
    </div>
</article>