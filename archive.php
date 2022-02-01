<?php
/**
 * The template for archive page.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Page top breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs/page-top-breadcrumbs' ); ?>

<section id="main" class="indblog-section">
    <?php
    if ( have_posts() ) : ?>

        <div class="container archive-page">
            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="indblog-section-title">', '</h1>' );
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
                    <?php get_template_part( 'template-parts/sidebar/sidebar', 'sidebar' ); ?>
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