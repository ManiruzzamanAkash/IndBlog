<?php
/**
 * The template for displaying the footer.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

    <?php
    /**
    * indblog_before_footer hook.
    *
    * @since IND_BLOG_SINCE
    */
    do_action( 'indblog_before_footer' );
    ?>

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

    <?php
    /**
    * indblog_after_footer hook.
    *
    * @since IND_BLOG_SINCE
    */
    do_action( 'indblog_after_footer' );
    ?>

    <?php wp_footer(); ?>
</body>

</html>