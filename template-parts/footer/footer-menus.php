<?php
/**
 * Footer Menus displaying.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( has_nav_menu( 'primary' ) ) {
    $menu_name = 'primary';

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

        $menu_items = wp_get_nav_menu_items( $menu->term_id );
        $menu_list  = '<ul id="footer-menus-' . $menu_name . '" class="footer-menus"> ';

        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title      = $menu_item->title;
            $url        = $menu_item->url;
            $target     = $menu_item->target;

            $menu_list .= '<li><a href="' . $url . '" target="'. $target .'">' . $title . '</a></li>';
        }

        $menu_list .= '</ul>';
    } else {
        $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    }

    echo $menu_list;
}
?>