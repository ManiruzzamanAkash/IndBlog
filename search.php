<?php
/**
 * The template for search page.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<section id="main" class="indblog-section">
    <?php
    if ( have_posts() ) : ?>

        <div class="container archive-page">
            <header class="page-header p-2">
                <?php
                    printf(
                        /* translators: 1: Search query name */
                        wp_kses_post( __( 'Search Results for: %s', 'indblog' ) ),
                        '<span><mark>' . esc_html( get_search_query() ) . '</mark></span>'
                    );
                ?>
            </header>

            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <?php get_template_part( 'template-parts/content/article-mini', 'article_mini', get_post( get_the_ID() ) ); ?>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card card body p-3 mb-5 recent-post-sidebar">
                        <h2 class="text-secondary-800 border-bottom pb-3 mb-3"><?php esc_html_e( 'Recent Posts', 'indblog' ); ?></h2>
                        <?php wp_get_archives('type=postbypost&limit=10'); ?>
                    </div>
                    <div class="card card body p-3 mb-5">
                        <h2 class="text-secondary-800 border-bottom pb-3 mb-3"><?php esc_html_e( 'Tags', 'indblog' ); ?></h2>
                        <?php wp_tag_cloud( array( 'show_count' => true ) ); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'template-parts/content/no-post', 'none' );
    endif;

    // Restore original Post Data
    wp_reset_postdata();
    ?>
    </section><!-- #main -->

<?php get_footer(); ?>