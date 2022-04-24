<?php
function admin_bar(){
    if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
}
add_action('init', 'admin_bar' );

function change_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/template-parts/assets/img/Logo-header.svg);
            height:65px;
            width:320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'change_login_logo' );

add_theme_support('post-thumbnails', ['post', 'authors', 'translators', 'category', 'taxonomy']);
require_once('helpers.php');
require_once('short_codes.php');
require_once('translation.php');
require_once('custom_post_types.php');
require_once('custom_post_types.php');
require_once('woocommerce_support.php');