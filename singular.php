<?php
/**
 * The template for displaying single posts and pages.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Page top breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs/page-top-breadcrumbs' ); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <?php
                /**
                 * The indblog_before_single_post hook
                 *
                 * @since IND_BLOG_SINCE
                 */
                do_action( 'indblog_before_single_post' );

                get_template_part(
                    'template-parts/content/content-full',
                    'post_view',
                    get_post( get_the_ID() )
                );

                /**
                 * The indblog_after_single_post hook
                 *
                 * @since IND_BLOG_SINCE
                 */
                do_action( 'indblog_after_single_post' );
                ?>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>