<?php
/**
 * Calculate reading-time.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'indblog_calculate_read_time' ) ) {

    /**
     * Calculate reading time from a post content.
     *
     * @since IND_BLOG_SINCE
     *
     * @param string $post_content
     */
    function indblog_calculate_read_time( $post_content ) {
        $default_wpm = 200;

        // count the number of words
        $words = str_word_count( strip_tags( $post_content ) );

        // rounding off and deviding per 200 words per minute
        $minute = floor( $words / $default_wpm );

        // rounding off to get the seconds
        $second = floor( $words % $default_wpm / ( $default_wpm / 60 ) );

        // calculate the amount of time needed to read
        $estimate = $minute . __( ' Minute', 'indblog' ) . ( $minute == 1 ? '' : 's' ) . __( ' Read', 'indblog' );

        return $estimate;
    }
}
