<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>

    <!-- Header: Navbar and Page Description header -->
    <header>
        <nav class="indblog-navbar navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Insights', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Industries', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?php esc_html_e('Innovations', 'indblog'); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> <!-- indblog-navbar -->

        <div class="indblog-page-top-links bg-primary text-white">
            <div class="container text-center">
                <p class="p-2 fs-6">
                    <?php esc_html_e('Insights', 'indblog'); ?>
                    &nbsp;&nbsp;
                    >
                    &nbsp;&nbsp;
                    <?php esc_html_e('All Content', 'indblog'); ?>
                </p>
            </div>
        </div> <!-- indblog-page-top-links -->
    </header>

    <!-- Section: Slider -->
    <section class="indblog-section indblog-slider mt-0 bg-success" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/slider.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="indblog-slider-main-content mb-4">
                        <p class="text-success">
                            <?php esc_html_e('Featured', 'indblog'); ?>
                        </p>
                        <h2 class="text-white">
                            <?php esc_html_e('Voluptus ea fugit commodi', 'indblog'); ?>
                        </h2>
                        <h6 class="mt-2">
                            <?php esc_html_e('Industry', 'indblog'); ?>
                        </h6>
                        <p class="mt-3">
                            <?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.', 'indblog'); ?>
                        </p>
                        <p class="mt-2">
                            <?php esc_html_e('Jhon Doe', 'indblog'); ?> / <?php esc_html_e('1 Minute read', 'indblog'); ?>
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

    <!-- Section: Latest Article -->
    <section class="indblog-section indblog-latest-article">
        <div class="container">
            <h2 class="indblog-section-title">
                <?php esc_html_e('Latest Articles', 'indblog'); ?>
            </h2>
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
        </div>
    </section><!-- indblog-latest-article -->

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

    <!-- Section: Footer -->
    <footer class="indblog-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <ul class="footer-menus">
                        <li>
                            <a href="#">
                                <?php esc_html_e('Insights', 'indblog'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php esc_html_e('Industries', 'indblog'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php esc_html_e('Innovations', 'indblog'); ?>
                            </a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <p>
                            <?php esc_html_e('Contact Us', 'indblog'); ?>
                            <i class="fa fa-phone"></i> 18666715353
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <p>
                        <?php esc_html_e('Subscribe to our newsletter', 'indblog'); ?>
                    </p>
                    <p class="subscribe-input subscribe-input-footer mt-4">
                        <input class="form-control" type="email" placeholder="<?php esc_attr_e('Enter your email', 'indblog'); ?>" />
                        <span class="send-email-button">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <p class="copyright">
                        <?php esc_html_e('Copyright © All Rights Reserved', 'indblog'); ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <ul class="footer-social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- footer -->


    <!-- Sticky Social Sharing Option -->
    <div class="indblog-social-icon-bar">
        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="social-google"><i class="fa fa-google"></i></a>
        <a href="#" class="social-linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="social-gmail"><i class="fa fa-envelope"></i></a>
    </div>
    <!-- End Sticky Social Sharing Option -->

</body>

</html>