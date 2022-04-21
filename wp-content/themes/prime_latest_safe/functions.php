<?php
function admin_bar(){
    if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
}
add_action('init', 'admin_bar' );

add_theme_support('post-thumbnails', ['post', 'authors', 'translators', 'category', 'taxonomy']);
require_once('helpers.php');
require_once('translation.php');
require_once('custom_post_types.php');
require_once('custom_post_types.php');
require_once('woocommerce_support.php');