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

$categories = get_categories();
?>

<!-- Section: Filter -->
<section class="indblog-section indblog-filter">
    <div class="container">
        <div class="dropdown indblog-filter-dropdown">
            <a class="dropdown-toggle" id="filter-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bars"></i>
                &nbsp;&nbsp;
                <?php esc_html_e( 'Filter ', 'indblog' ); ?>
                <span class="category-active-filter">All</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="filter-dropdown">
                <li>
                    <button class="dropdown-item category-filter-link" data-category_id="all" data-category_name="<?php echo esc_attr_e( 'All', 'indblog' ); ?>">
                        <?php esc_html_e( 'All', 'indblog' ); ?>
                    </button>
                </li>
                <?php foreach( $categories as $category ) : ?>
                    <li>
                        <button class="dropdown-item category-filter-link" data-category_id="<?php echo esc_attr( $category->cat_ID ); ?>" data-category_name="<?php echo esc_attr( $category->name ); ?>">
                            <?php echo esc_html( $category->name ); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div id="category-filter-articles"></div>
        <div id="category-filter-load-more-articles"></div>

        <div class="load-more">
            <input type="hidden" id="filter_data_offset" value="0">
            <button class="btn btn-outline rounded-0 px-5 py-2 border border-primary border-2 text-primary btn-load-more">
                <i class="fa fa-th"></i> &nbsp;
                <?php esc_html_e('Load More', 'indblog'); ?>
            </button>
        </div>
    </div>
</section><!-- indblog-filter -->