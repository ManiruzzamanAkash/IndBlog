<?php
/**
 * Displays email subscription form.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div class="indblog-subscribe d-flex align-items-center">
    <div class="w-100">
        <p class="subscribe-text">
            <?php echo wp_kses('Subscribe to our newsletter <br> for the latest update', array('br' => array())); ?>
        </p>

        <p class="subscribe-input">
            <input class="form-control" name="subscribe_email" type="email" placeholder="<?php esc_attr_e('Enter your email', 'indblog'); ?>" />
            <span class="send-email-button">
                <i class="fa fa-envelope"></i>
            </span>
        </p>
        <p class="subscribe-message mt-2 alert"></p>
    </div>
</div>