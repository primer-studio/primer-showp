<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo(); ?></title>
    <script type="text/javascript"
            src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/js/main.js'; ?>"></script>
    <link rel="stylesheet"
          href="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo get_template_directory_uri() . "/template-parts/assets/js/city.js"; ?>"></script>
</head>

<body>
<header class="section">
    <div id="header-wrapper" class="wrapper desktop-header">
        <div class="header-left">
            <a href="<?php echo wc_get_cart_url(); ?>">
                <div class="shopping-bag">
                    <div class="shopping-bag-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/shopping-bag.svg'; ?>"
                             alt="آیکون سبد خرید">
                    </div>
                    <div class="shopping-badge">
                        <i><?php echo str_en_to_fa(WC()->cart->get_cart_contents_count()); ?></i>
                    </div>
                </div>
            </a>
            <div class="register-btn btn btn-small btn-type-1">
                <?php if (!is_user_logged_in()): ?>
                    <a href="<?php echo wp_registration_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Register-icon.svg'; ?>"
                             alt="آیکون ثبت نام">
                        ثبت نام
                    </a>
                <?php else: ?>
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Register-icon.svg'; ?>"
                             alt="آیکون ثبت نام">
                        <?php echo wp_get_current_user()->first_name; ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="login-btn btn btn-small btn-type-2">
                <?php if (!is_user_logged_in()): ?>
                    <a href="<?php echo wp_login_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/login-icon.svg'; ?>"
                             alt="آیکون ثبت نام">
                        ورود
                    </a>
                <?php else: ?>
                    <a href="<?php echo wp_logout_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/login-icon.svg'; ?>"
                             alt="آیکون ثبت نام">
                        خروج
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="header-right">
            <div class="header-logo">
                <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Logo-Header.svg'; ?>"
                     alt="لوگو انتشارات اهل قلم"/>
            </div>
            <div class="navbar">
                <ul>
                    <li>
                        <a href="<?php echo home_url(null, true) ?>">صفحه اصلی</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(null, true) ?>">کتاب ها</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/authors/', true); ?>">پدید آورندگان</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/about-us/', true); ?>">درباره ما</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/contact-us/', true); ?>">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-header wrapper">
        <div class="header-left">
            <div class="burger-button-wrapper">
                <div class="burger-btn transition-300">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
            </div>
            <a href="#">
                <div class="shopping-bag">
                    <div class="shopping-bag-icon">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/shopping-bag.svg'; ?>">
                    </div>
                    <div class="shopping-badge">
                        <i><?php echo str_en_to_fa(WC()->cart->get_cart_contents_count()); ?></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="header-right">
            <a href="<?php echo home_url(null, true) ?>">
                <div class="header-logo">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Logo-Header.svg'; ?>"
                         alt="لوگو انتشارات اهل قلم"/>
                </div>
            </a>
        </div>
    </div>
    <div id="mobile-nav" class="mobile-nav-wrapper transition-300">
        <div class="mobile-nav-wrap">
            <div class="mobile-nav-logo">
                <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Mobile-Side-Nav-Logo.svg'; ?>"
                     alt="انتشارات میراث اهل قلم">
            </div>
            <div class="mobile-nav-btn-wrap">
                <div class="register-btn btn btn-small btn-type-1">
                    <?php if (!is_user_logged_in()): ?>
                        <a href="<?php echo wp_registration_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Register-icon.svg'; ?>"
                                 alt="آیکون ثبت نام">
                            ثبت نام
                        </a>
                    <?php else: ?>
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/Register-icon.svg'; ?>"
                                 alt="آیکون ثبت نام">
                            <?php echo wp_get_current_user()->first_name; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="login-btn btn btn-small btn-type-2">
                    <?php if (!is_user_logged_in()): ?>
                        <a href="<?php echo wp_login_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/login-icon.svg'; ?>"
                                 alt="آیکون ثبت نام">
                            ورود
                        </a>
                    <?php else: ?>
                        <a href="<?php echo wp_logout_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/login-icon.svg'; ?>"
                                 alt="آیکون ثبت نام">
                            خروج
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mobile-nav">
                <ul>
                    <li>
                        <a href="<?php echo home_url(null, true) ?>">صفحه اصلی</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(null, true) ?>">کتاب ها</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/authors/', true); ?>">پدید آورندگان</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/about-us/', true); ?>">درباره ما</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/contact-us/', true); ?>">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>