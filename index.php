<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Page top breadcrumbs -->
<?php get_template_part( 'template-parts/breadcrumbs/page-top-breadcrumbs' ); ?>

<?php if( is_front_page() ): ?>
    <!-- Section: Slider -->
    <?php get_template_part( 'template-parts/slider/slider' ); ?>
<?php endif; ?>

<?php if( ! is_singular() ): ?>
    <!-- Section: Latest Articles -->
    <?php get_template_part( 'template-parts/content/latest-posts' ); ?>
<?php endif; ?>

<?php if( ! is_singular() ): ?>
    <!-- Section: Most Viewed Article -->
    <section class="indblog-section indblog-most-viewed-article">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                <?php get_template_part( 'template-parts/content/most-viewed-posts' ); ?>
                </div>
                <div class="col-sm-12 col-md-5">
                    <!-- Newsletter subscribe -->
                    <?php get_template_part( 'template-parts/content/email-subscription' ); ?>
                </div>
            </div>
        </div>
    </section><!-- indblog-most-viewed-article -->
<?php endif; ?>

<?php if( is_front_page() ): ?>
    <!-- Section: Category Filter -->
    <?php get_template_part( 'template-parts/content/category-filter' ); ?>
<?php endif; ?>

<?php get_footer(); ?>