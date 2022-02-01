<?php

/**
 * Displays the site navigation.
 *
 * @package indblog
 * @since IND_BLOG_SINCE
 */

if ( ! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}
?>

<?php
    if ( has_nav_menu( 'primary' ) ) {
        $menu_name = 'primary';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

            $menu_items = wp_get_nav_menu_items( $menu->term_id );
            $menu_list  = '<ul id="menu-' . $menu_name . '" class="navbar-nav ms-auto mb-2 mb-lg-0"> ';

            foreach ( (array) $menu_items as $key => $menu_item ) {
                $title      = $menu_item->title;
                $url        = $menu_item->url;
                $target     = $menu_item->target;

                $menu_list .= '<li class="nav-item"><a class="nav-link" href="' . $url . '" target="'. $target .'">' . $title . '</a></li>';
            }

            // Add Search Menu item and finish menu list
            $menu_list .= '<li class="nav-item"><a class="nav-link" href="#" id="search-link"><i class="fa fa-search"></i></a></li></ul>';
        } else {
            $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
        }

        echo $menu_list;
    }
?>

<!-- Site search-form -->
<div class="indblog-searchbar">
    <?php echo get_search_form(); ?>
</div>