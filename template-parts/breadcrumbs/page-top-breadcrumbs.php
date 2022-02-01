<?php
/**
 * Page top breadcrumbs.
 *
 * @package indblog
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$page_title = __( 'Insights', 'indblog' );
$page_link  = site_url();
$page_meta  = __( 'All Content', 'indblog' );

if ( is_archive() ) {
    $page_title = __( 'Home', 'indblog' );
    $page_meta  = get_the_archive_title();
} elseif( is_search() ) {
    $page_title = __( 'Home', 'indblog' );
    $page_meta  = __( 'Search: ', 'indblog' ) . get_search_query();
} elseif ( is_singular() ) {
    // Get category name of this article
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        $category   = $categories[0];
        $page_title = $category->name;
        $page_link  = get_category_link( $category );
    } else {
        $page_title = __( 'Home', 'indblog' );
    }

    $page_meta  = get_the_title();
}
?>

<!-- Page Description header -->
<div class="indblog-page-top-links bg-primary text-white">
    <div class="container text-center">
        <p class="p-2 fs-6">
            <a href="<?php echo esc_url( $page_link ); ?>" class="text-white">
                <?php echo wp_kses( $page_title, array( 'span' => array() ) ); ?>
            </a>
            &nbsp;&nbsp;
            >
            &nbsp;&nbsp;
            <?php echo wp_kses( $page_meta, array( 'span' => array() ) ); ?>
        </p>
    </div>
</div> <!-- indblog-page-top-links -->