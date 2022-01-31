<?php
/**
 * Displays Category Filter.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

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