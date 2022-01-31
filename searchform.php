<?php
/**
 * The template for displaying search forms in Generate
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_x('Search for:', 'label', 'indblog' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( apply_filters( 'indblog_search_placeholder', esc_html_x( 'Search &hellip;', 'placeholder', 'indblog' ) ) ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php esc_attr( apply_filters( 'indblog_search_label', esc_html_x( 'Search for:', 'label', 'indblog' ) ) ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_html( apply_filters( 'indblog_search_button', _x( 'Search', 'submit button', 'indblog' ) ) ); ?>">
</form>
