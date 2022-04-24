<?php
function mytheme_add_woocommerce_support()
{
    add_theme_support("woocommerce");
}

function mytheme_remove_woocommerce_sidebar()
{
//    if( is_checkout() || is_cart() || is_product() ){
//        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
//    }
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
}

add_action('woocommerce_before_main_content', 'mytheme_remove_woocommerce_sidebar');
add_action("after_setup_theme", "mytheme_add_woocommerce_support");

add_theme_support("wc-product-gallery-zoom");
add_theme_support("wc-product-gallery-lightbox");
add_theme_support("wc-product-gallery-slider");
add_filter("woocommerce_enqueue_styles", "__return_false");

function add_custom_taxonomy($name, $singular, $after_singular)
{
    $labels = array(
        "name" => "$singular",
        "singular_name" => "$singular",
        "menu_name" => "$singular$after_singular",
        "all_items" => "تمام $singular$after_singular",
        "parent_item" => "$singular والد",
        "parent_item_colon" => "$singular والد:",
        "new_item_name" => "نام $singular",
        "add_new_item" => "افزودن $singular",
        "edit_item" => "ویرایش $singular",
        "update_item" => "بروزرسانی $singular",
        "separate_items_with_commas" => "جداسازی به وسیله (,)",
        "search_items" => "جستجوی $singular$after_singular",
        "add_or_remove_items" => "ایجاد و یا حذف $singular",
        "choose_from_most_used" => "انتخاب از بیشترین مورد استفاده$after_singular",
    );
    $args = array(
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
        "has_archive" => true,
    );
    register_taxonomy("$name", "product", $args);
    register_taxonomy_for_object_type("$name", "product");
}

function register_custom_taxonomies()
{
    add_custom_taxonomy('authors', 'نویسنده', '‌ها');
    add_custom_taxonomy('translators', 'مترجم', '‌ها');
}

add_action("init", "register_custom_taxonomies");

// if ( is_singular( 'product' ) ) {
//  woocommerce_content();
// }else{
// //For ANY product archive.
// //Product taxonomy, product search or /shop landing
//  woocommerce_get_template( 'archive-product.php' );
// }

//$url = ($_SERVER['REQUEST_URI']);
//die(print_r($url));
//if (
//    strpos($_SERVER['REQUEST_URI'], '/checkout') == false
//    && strpos($_SERVER['REQUEST_URI'], get_site_url() . "/authors") == false
//    && !is_home()
//) {
//
//    add_filter('template_include', 'prime_set_template');
//}
//function prime_set_template($template)
//{
//    if (is_tax()) :
//        $taxonomy = 'authors';
//        $term = get_query_var($taxonomy);
////        $prod_term = get_terms($taxonomy, 'slug=' . $term . '');
////        $term_slug = $prod_term[0]->slug;
////        $t_id = $prod_term[0]->term_id;
////        $term_meta = get_option("taxonomy_$t_id");
////        $term_meta['team_access_pin'];
//        wc_get_template('taxonomy-authors.php');
//        die();
//    elseif (is_single()):
//        wc_get_template('single-product.php');
//        die();
//    elseif (is_cart()):
//        wc_get_template('cart/cart.php');
//        die();
//    else:
//        wc_get_template('taxonomy-archive.php');
//        die();
//    endif;
//
//
//}