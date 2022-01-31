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

<!-- Page Description header -->
<div class="indblog-page-top-links bg-primary text-white">
    <div class="container text-center">
        <p class="p-2 fs-6">
            <?php esc_html_e( 'Insights', 'indblog' ); ?>
            &nbsp;&nbsp;
            >
            &nbsp;&nbsp;
            <?php esc_html_e( 'All Content', 'indblog' ); ?>
        </p>
    </div>
</div> <!-- indblog-page-top-links -->

<!-- Section: Slider -->
<section class="indblog-section indblog-slider mt-0 bg-success" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="indblog-slider-main-content mb-4">
                    <p class="text-success">
                        <?php esc_html_e( 'Featured', 'indblog' ); ?>
                    </p>
                    <h2 class="text-white">
                        <?php esc_html_e( 'Voluptus ea fugit commodi', 'indblog' ); ?>
                    </h2>
                    <h6 class="mt-2">
                        <?php esc_html_e( 'Industry', 'indblog' ); ?>
                    </h6>
                    <p class="mt-3">
                        <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.', 'indblog' ); ?>
                    </p>
                    <p class="mt-2">
                        <?php esc_html_e( 'Jhon Doe', 'indblog' ); ?> / <?php esc_html_e( '1 Minute read', 'indblog' ); ?>
                    </p>
                </div><!-- indblog-slider-main-content -->
            </div>

            <div class="col-md-6">
                <!-- Slider Single Article -->
                <article class="mb-2 slider-article">
                    <h6><?php esc_html_e('Innovation', 'indblog'); ?></h6>
                    <h5 class="mt-1"><?php esc_html_e('Voluptas ea fugit commodi ...', 'indblog'); ?></h5>
                    <p class="mt-1">
                        <?php esc_html_e('Jhon Doe', 'indblog'); ?>
                        &nbsp; / &nbsp;
                        <?php esc_html_e('1 Minute read', 'indblog'); ?>
                    </p>
                </article><!-- slider-article -->

                <!-- Slider Single Article -->
                <article class="mb-2 slider-article">
                    <h6><?php esc_html_e('Innovation', 'indblog'); ?></h6>
                    <h5 class="mt-1"><?php esc_html_e('Voluptas ea fugit commodi ...', 'indblog'); ?></h5>
                    <p class="mt-1">
                        <?php esc_html_e('Jhon Doe', 'indblog'); ?>
                        &nbsp; / &nbsp;
                        <?php esc_html_e('1 Minute read', 'indblog'); ?>
                    </p>
                </article><!-- slider-article -->

                <!-- Slider Single Article -->
                <article class="mb-2 slider-article">
                    <h6><?php esc_html_e('Innovation', 'indblog'); ?></h6>
                    <h5 class="mt-1"><?php esc_html_e('Voluptas ea fugit commodi ...', 'indblog'); ?></h5>
                    <p class="mt-1">
                        <?php esc_html_e('Jhon Doe', 'indblog'); ?>
                        &nbsp; / &nbsp;
                        <?php esc_html_e('1 Minute read', 'indblog'); ?>
                    </p>
                </article><!-- slider-article -->
            </div>
        </div>

    </div>
</section><!-- indblog-slider -->

<?php get_template_part( 'template-parts/content/latest-posts' ); ?>

<!-- Section: Most Viewed Article -->
<section class="indblog-section indblog-most-viewed-article">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="d-flex justify-content-between">
                    <h2 class="indblog-section-title">
                        <?php esc_html_e('Most Viewed', 'indblog'); ?>
                    </h2>
                    <div class="article-switch">
                        <span class="previous-post">
                            <i class="fa fa-arrow-left"></i>
                        </span class="next-post">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <!-- Single Mini Article -->
                        <article>
                            <div class="indblog-article-content indblog-article-content-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                                <div class="inner-area">
                                    <p>
                                        <a href="#" class="article-category-name">
                                            <?php esc_html_e('Industries', 'indblog'); ?>
                                        </a>
                                    </p>
                                    <h4 class="article-title">
                                        <a href="#">
                                            <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                        </a>
                                    </h4>
                                    <p class="article-meta">
                                        <?php esc_html_e('John Doe', 'indblog'); ?>
                                        &nbsp;&nbsp;
                                        <?php esc_html_e('1 Minute read', 'indblog'); ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- End Single Mini Article -->
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <!-- Single Mini Article -->
                        <article>
                            <div class="indblog-article-content indblog-article-content-md">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                                <div class="inner-area">
                                    <p>
                                        <a href="#" class="article-category-name">
                                            <?php esc_html_e('Industries', 'indblog'); ?>
                                        </a>
                                    </p>
                                    <h4 class="article-title">
                                        <a href="#">
                                            <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                        </a>
                                    </h4>
                                    <p class="article-meta">
                                        <?php esc_html_e('John Doe', 'indblog'); ?>
                                        &nbsp;&nbsp;
                                        <?php esc_html_e('1 Minute read', 'indblog'); ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- End Single Mini Article -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <!-- Newsletter subscribe -->
                <div class="indblog-subscribe d-flex align-items-center">
                    <div>
                        <p class="subscribe-text"><?php echo wp_kses('Subscribe to our newsletter <br> for the latest update', array('br' => array())); ?></p>
                        <p class="subscribe-input">
                            <input class="form-control" type="email" placeholder="<?php esc_attr_e('Enter your email', 'indblog'); ?>" />
                            <span class="send-email-button">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- indblog-most-viewed-article -->

<!-- Section: Filter -->
<section class="indblog-section indblog-filter">
    <div class="container">
        <div class="dropdown indblog-filter-dropdown">
            <a class="dropdown-toggle" id="filter-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bars"></i>
                &nbsp;&nbsp;
                <?php esc_html_e('Filter - Industries', 'indblog'); ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="filter-dropdown">
                <li><a href="" class="dropdown-item">Business</button></a></li>
                <li><a href="" class="dropdown-item">Other</button></a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8">
                <article>
                    <div class="indblog-article-img-overlay mb-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg')">
                        <div class="indblog-article-content indblog-article-content-first">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Innovations', 'indblog'); ?>
                                </a>
                            </p>
                            <h3 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h3>
                            <p class="article-excerpt">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Quo illo quae repudiandae maiores, officiis amet provident
                                aliquid repellat suscipit neque velit laborum, corporis reiciendis
                                aperiam quam tempore est delectus ducimus!
                            </p>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-sm-12 col-md-4">
                <!-- Single Mini Article -->
                <article>
                    <div class="indblog-article-content indblog-article-content-sm">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- End Single Mini Article -->

                <article>
                    <div class="indblog-article-content indblog-article-content-sm">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-3">
                <!-- Single Mini Article -->
                <article>
                    <div class="indblog-article-content indblog-article-content-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- End Single Mini Article -->
            </div>

            <div class="col-sm-12 col-md-3">
                <!-- Single Mini Article -->
                <article>
                    <div class="indblog-article-content indblog-article-content-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- End Single Mini Article -->
            </div>

            <div class="col-sm-12 col-md-3">
                <!-- Single Mini Article -->
                <article>
                    <div class="indblog-article-content indblog-article-content-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- End Single Mini Article -->
            </div>

            <div class="col-sm-12 col-md-3">
                <!-- Single Mini Article -->
                <article>
                    <div class="indblog-article-content indblog-article-content-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article-demo.jpg" alt="" class="img img-fluid">
                        <div class="inner-area">
                            <p>
                                <a href="#" class="article-category-name">
                                    <?php esc_html_e('Industries', 'indblog'); ?>
                                </a>
                            </p>
                            <h4 class="article-title">
                                <a href="#">
                                    <?php esc_html_e('How to build a successful business', 'indblog'); ?>
                                </a>
                            </h4>
                            <p class="article-meta">
                                <?php esc_html_e('John Doe', 'indblog'); ?>
                                &nbsp;&nbsp;
                                <?php esc_html_e('1 Minute read', 'indblog'); ?>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- End Single Mini Article -->
            </div>
        </div>
        <div class="mt-5 text-center">
            <button class="btn btn-outline rounded-0 px-5 py-2 border border-primary border-2 text-primary btn-load-more">
                <i class="fa fa-th"></i> &nbsp;
                <?php echo  esc_html_e('Load More', 'indblog'); ?>
            </button>
        </div>
    </div>
</section><!-- indblog-filter -->

<?php get_footer(); ?>