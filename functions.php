<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




// Add field after add to cart button
function wc_shop_demo_button() {
	echo '<div class="after_add_to_cart_button">';
    echo do_shortcode( '[acf field="after_add_to_cart_button"]' );
    echo '</div>';

}
add_action( 'woocommerce_after_shop_loop_item', 'wc_shop_demo_button', 20 );
add_action( 'woocommerce_after_add_to_cart_button', 'wc_shop_demo_button', 20 );


// Remove Woocommerce breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );

// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

// Removes the "shop" title on the main shop page
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
function woo_hide_page_title() {
	return false;
}

// Remove product meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

//  Output: removes woocommerce tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

//  Output: adds full description to below picture
function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_description', 10 );

// Remove product description title
add_filter('woocommerce_product_description_heading', '__return_null');

// Remove related products output
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


// Disable Image Compression
add_filter('jpeg_quality', function($arg){return 100;});


?>