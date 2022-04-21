<?php
function mytheme_add_woocommerce_support() {
    add_theme_support( "woocommerce" );
}
add_action( "after_setup_theme","mytheme_add_woocommerce_support" );

add_theme_support( "wc-product-gallery-zoom" );
add_theme_support( "wc-product-gallery-lightbox" );
add_theme_support( "wc-product-gallery-slider" );
add_filter( "woocommerce_enqueue_styles", "__return_false" );

function add_custom_taxonomy($name, $singular, $after_singular) {
    $labels = array(
        "name"                       => "$singular",
        "singular_name"              => "$singular",
        "menu_name"                  => "$singular$after_singular",
        "all_items"                  => "تمام $singular$after_singular",
        "parent_item"                => "$singular والد",
        "parent_item_colon"          => "$singular والد:",
        "new_item_name"              => "نام $singular",
        "add_new_item"               => "افزودن $singular",
        "edit_item"                  => "ویرایش $singular",
        "update_item"                => "بروزرسانی $singular",
        "separate_items_with_commas" => "جداسازی به وسیله (,)",
        "search_items"               => "جستجوی $singular$after_singular",
        "add_or_remove_items"        => "ایجاد و یا حذف $singular",
        "choose_from_most_used"      => "انتخاب از بیشترین مورد استفاده$after_singular",
    );
    $args = array(
        "labels"                     => $labels,
        "hierarchical"               => true,
        "public"                     => true,
        "show_ui"                    => true,
        "show_admin_column"          => true,
        "show_in_nav_menus"          => true,
        "show_tagcloud"              => true,
    );
    register_taxonomy( "$name", "product", $args );
    register_taxonomy_for_object_type( "$name", "product" );
}

function register_custom_taxonomies() {
    add_custom_taxonomy('authors', 'نویسنده', '‌ها');
    add_custom_taxonomy('translators', 'مترجم', '‌ها');
}

add_action( "init", "register_custom_taxonomies" );