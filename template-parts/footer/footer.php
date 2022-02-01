<?php
/**
 * Footer elements.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_construct_footer' ) ) {
    add_action( 'indblog_footer', 'indblog_construct_footer' );

    /**
     * Build Footer
     *
     * @since IND_BLOG_SINCE
     */
    function indblog_construct_footer() {
        ?>
        <!-- Section: Footer -->
        <footer class="indblog-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <?php get_template_part( 'template-parts/footer/footer-menus' ); ?>

                        <div class="mt-4">
                            <p>
                                <span>
                                    <?php esc_html_e('Contact Us', 'indblog'); ?>
                                </span>
                                <span class="mx-3">
                                    <i class="fa fa-phone"></i> 18666715353
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <p>
                            <?php esc_html_e('Subscribe to our newsletter', 'indblog'); ?>
                        </p>
                        <p class="subscribe-input subscribe-input-footer mt-4">
                            <input class="form-control" name="subscribe_email" type="email" placeholder="<?php esc_attr_e( 'Enter your email', 'indblog' ); ?>" />
                            <span class="send-email-button">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </p>
                        <p class="subscribe-message mt-2 alert"></p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8">
                        <p class="copyright">
                            <?php echo apply_filters( 'indblog_footer_copyright', __( 'Copyright © All Rights Reserved', 'indblog' ) ); ?>
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
        </footer> <!-- .indblog-footer -->

        <!-- Sticky Social Sharing Option -->
        <div class="indblog-social-icon-bar">
            <a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-google"><i class="fa fa-google"></i></a>
            <a href="#" class="social-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="social-gmail"><i class="fa fa-envelope"></i></a>
        </div>
        <!-- End Sticky Social Sharing Option -->
        <?php
    }
}