<?php
  /*
  * ReduxFramework Options Config
  */

  if ( ! class_exists( 'Redux' ) ) {
    return;
  }

  $opt_name = 'redux_ThemeTek';

  $theme = wp_get_theme();

  $args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get( 'Name' ),
    'display_version' => $theme->get( 'Version' ),
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__( 'Theme Options', 'sway' ),
    'page_title' => esc_html__( 'Theme Options', 'sway' ),
    'async_typography' => true,
    'admin_bar' => true,
    'dev_mode' => false,
    'update_notice' => false,
    'show_options_object' => false,
    'customizer' => false,
    'page_parent' => 'sway-dashboard',
    'page_slug' => 'theme-options',
    'page_permissions' => 'manage_options',
    'save_defaults' => true,
    'show_import_export' => true,
    'network_sites' => '1',
    'transient_time' => 60 * MINUTE_IN_SECONDS,
  );

  Redux::setArgs( $opt_name, $args );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Management',
    'title' => esc_html__('اطلاعات کسب و کار', 'sway'),
    'desc' => esc_html__('اطلاعات تماس شرکت/سازمان خود را ویرایش کنید. این مورد در تنظیمات قالب > سربرگ > نواربالا / ماژول پاپ آپ / پنل کناری ذکر شده است.', 'sway'),
    'fields' => array(
        array(
            'id' => 'tek-business-phone',
            'type' => 'text',
            'title' => esc_html__('تلفن شما', 'sway'),
            'subtitle' => 'ویرایش شماره تماس شما',
            'default' => '01154370000',
        ),
        array(
            'id' => 'tek-secondary-business-phone',
            'type' => 'text',
            'title' => esc_html__('تلفن دوم شما', 'sway'),
            'subtitle' => 'ویرایش شماره تماس دوم شما',
            'default' => '',
        ),
        array(
            'id' => 'tek-business-email',
            'type' => 'text',
            'title' => esc_html__('ایمیل شما', 'sway'),
            'subtitle' => 'ویرایش آدرس ایمیل شما',
            'default' => 'hello@swaythemes.com',
        ),
        array(
            'id' => 'tek-business-opening-hours',
            'type' => 'text',
            'title' => esc_html__('ساعات کاری شما', 'sway'),
            'subtitle' => 'ویرایش ساعات کاری شما',
            'default' => 'شنبه تا پنج شنبه : 08:00 تا 20:00',
        ),
        array(
            'id' => 'tek-social-profiles',
            'type' => 'social_profiles',
            'title' => 'آیکون شبمه های اجتماعی',
            'subtitle' => 'با کلیک بر روی هر آیکون آن را برای خود فعال کنید ، با کشیدن و رها کردن آیکون ها آن ها را جابه جا کنید.',
        ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Gear',
    'title' => esc_html__('تنظیمات عمومی', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Gears',
    'title' => esc_html__('تنظیمات عمومی', 'sway'),
    'desc' => esc_html__('تنظیمات کلی که در سراسر سایت اعمال می شوند.', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
          'id' => 'tek-smooth-scroll',
          'type' => 'switch',
          'title' => esc_html__('اسکرول صاف ماوس', 'sway'),
          'subtitle' => esc_html__('برای جایگزینی جلوه اصلی پیمایش وب سایت با پیمایش خوب و روان ، آن را روشن کنید.', 'sway'),
          'default' => false
      ),
      array(
          'id' => 'tek-google-api',
          'type' => 'text',
          'title' => esc_html__('api برای نقشه گوگل', 'sway'),
          'default' => '',
          'subtitle' => esc_html__('در اینجا کلید API Google Maps را ایجاد ، کپی و جایگذاری کنید.', 'sway'),
          'desc' => wp_kses('Click <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target=_blank>here</a> to get an API key', 'sway')
      ),
      array(
          'id' => 'tek-disable-animations',
          'type' => 'switch',
          'title' => esc_html__('غیرفعال کردن انیمیشن در تلفن همراه', 'sway'),
          'subtitle' => esc_html__('روشن/خاموش کردن عناصر انیمیشن در تلفن همراه.', 'sway'),
          'default' => true
      ),
      array(
          'id' => 'tek-favicon',
          'type' => 'media',
          'title' => esc_html__('فاویکون', 'sway'),
          'desc' => wp_kses('کاربران در وردپرس 4.3 یا بالاتر باید فاویکون را از وردپرس بارگذاری کنند <a href="'.admin_url( 'customize.php?autofocus[section]=title_tagline' ).'">پنل سفارشی سازی</a>.', 'sway'),
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Palette',
    'title' => esc_html__('طرح رنگی', 'sway'),
    'desc' => esc_html__('طرح های رنگی عمومی که در سراسر سایت اعمال می شود.', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-main-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ اصلی قالب', 'sway'),
        'subtitle' => esc_html__('گزینه ای برای تنظیم رنگ اصلی قالب', 'sway'),
        'default' => '#777AF2',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-secondary-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ دوم قالب', 'sway'),
        'subtitle' => esc_html__('گزینه ای برای تنظیم رنگ دوم قالب', 'sway'),
        'default' => '#39364E',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-titlebar-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ پس زمینه منطقه عنوان', 'sway'),
        'default' => '',
        'subtitle' => esc_html__('رنگ پس زمینه مورد استفاده برای بخش نوار عنوان صفحات تک را انتخاب کنید.', 'sway'),
        'validate' => 'color'
      ),
      array(
          'id' => 'tek-titlebar-text-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('رنگ متن عنوان', 'sway'),
          'default' => '',
          'subtitle' => esc_html__('رنگ عنوان صفحه را انتخاب کنید.', 'sway'),
          'validate' => 'color'
      ),
      array(
            'id' => 'tek-link-color',
            'type' => 'link_color',
            'title' => esc_html__( 'رنگ لینک ها', 'sway' ),
            'subtitle' => esc_html__('حالتهای عادی و شناور پیوندهای پیش فرض.', 'sway'),
            'active' => false,
            'visited' => false,
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Loading-3',
    'title' => esc_html__('پیش بارگذاری', 'sway'),
    'desc' => esc_html__('تنظیمات عمومی پیش بارگذاری', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-preloader',
        'type' => 'switch',
        'title' => esc_html__('پیش بارگذاری', 'sway'),
        'subtitle' => esc_html__('پیش بارگذاری صفحه ، پیش بارگیری صفحه را فعال/غیرفعال کنید.', 'sway'),
        'default' => true
      ),
      array(
        'id' => 'tek-preloader-bg-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ بک گراند پیش بارگذاری', 'sway'),
        'subtitle' => esc_html__('رنگ پیس زمینه پیش بارگذاری را ویرایش کنید', 'sway'),
        'required' => array('tek-preloader','equals',true),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-preloader-image',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('تصویر پیش بارگذاری', 'sway'),
        'subtitle' => esc_html__('بارگذاری تصویر/لوگو پیش بارگذاری', 'sway'),
        'required' => array('tek-preloader','equals',true),
      ),
      array(
        'id' => 'tek-preloader-image-size-desktop',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('اندازه تصویر پیش بارگذاری', 'sway'),
        'subtitle' => esc_html__('اندازه تصویر پیش بارگذاری (مقدار پیکسل) را کنترل کنید. مثال: 200', 'sway'),
        'required' => array('tek-preloader','equals',true),
      ),
      array(
        'id' => 'tek-preloader-image-size-mobile',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('اندازه تصویر پیش بارگذاری برای حالت موبایل', 'sway'),
        'subtitle' => esc_html__('اندازه تصویر پیش بارگذاری را در دستگاه های تلفن همراه (مقدار پیکسل) کنترل کنید. مثال: 140', 'sway'),
        'required' => array('tek-preloader','equals',true),
      ),
    )
  ) );

Redux::setSection( $opt_name, array(
  'icon' => 'iconsmind-Go-Top',
  'title' => esc_html__('دکمه بازگشت به بالا', 'sway'),
  'desc' => esc_html__('تنظیمات عمومی دکمه بازگشت به بالا', 'sway'),
  'subsection' => true,
  'fields' => array(
    array(
        'id' => 'tek-backtotop',
        'type' => 'switch',
        'title' => esc_html__('دکمه بازگشت به بالا', 'sway'),
        'subtitle' => esc_html__('دکمه "رفتن به بالا" را در گوشه پایین سمت راست صفحه فعال یا غیرفعال کنید.', 'sway'),
        'default' => true
    ),
    array(
      'id' => 'tek-backtotop-position',
      'type' => 'button_set',
      'title' => esc_html__('موقعیت دکمه بازگشت به بالا', 'sway'),
      'subtitle' => esc_html__('موقعیت دکمه "رفتن به بالا" را کنترل کنید.', 'sway'),
      'options' => array(
        'left-aligned' => 'چپ',
        'right-aligned' => 'راست'
       ),
       'required' => array('tek-backtotop','equals',true),
       'default' => 'right-aligned'
    ),
    array(
        'id' => 'tek-backtotop-scroll-style',
        'type' => 'select',
        'title' => esc_html__('استایل دکمه بازگشت به بالا', 'sway'),
        'subtitle' => esc_html__('استایل دکمه سربرگ را زمانی که ماوس روی آن است ویرایش کنید', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'default-style' => 'Default',
            'scroll-position-style' => 'Scroll Position',
        ),
        'default' => 'default-style'
    ),
  )
) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Upload-Window',
    'title' => esc_html__('سربرگ', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Settings-Window',
    'title' => esc_html__('نوار سربرگ', 'sway'),
    'desc' => esc_html__('تنظیمات عمومی نوار سربرگ', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id'=>'tek-header-bar-section-start',
        'type' => 'section',
        'title' => esc_html__('تنظیمات نوار سربرگ', 'sway'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-menu-style',
        'type' => 'button_set',
        'title' => esc_html__('عرض نوار سربرگ', 'sway'),
        'subtitle' => esc_html__('عرض منوی اصلی ناوبری خود را کنترل کنید: کانتینر/تمام عرض', 'sway'),
        'options' => array(
          '1' => 'Contained',
          '2' => 'Full-Width'
         ),
        'default' => '1'
      ),
      array(
        'id' => 'tek-menu-behaviour',
        'type' => 'button_set',
        'title' => esc_html__('رفتار منطقه سربرگ', 'sway'),
        'subtitle' => esc_html__('رفتار پیمایش به پایین صفحه ، سربرگ را انتخاب کنید', 'sway'),
        'options' => array(
            '1' => 'Sticky',
            '2' => 'Fixed'
         ),
        'default' => '1'
      ),
      array(
        'id' => 'tek-header-spacing',
        'type' => 'spinner',
        'title' => esc_html__('فضای خالی منطقه سربرگ', 'sway'),
        'subtitle' => esc_html__('سطح بالایی و پایینی نوار هدر را کنترل کنید. مقدار پیکسل', 'sway'),
        'min' => 0,
        'max' => 30,
        'default' => 0,
      ),
      array(
        'id' => 'tek-header-menu-bg',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ پس زمینه منطقه سربرگ', 'sway'),
        'subtitle' => esc_html__('رنگ زمینه را برای نوار منوی ثابت انتخاب کنید.', 'sway'),
        'default' => '#ffffff',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-bg-sticky',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ پس زمینه سربرگ چسبنده', 'sway'),
        'subtitle' => esc_html__('رنگ زمینه را برای نوار منوی چسبنده انتخاب کنید.', 'sway'),
        'default' => '#ffffff',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id'=>'tek-header-bar-section-end',
        'type' => 'section',
        'indent' => false,
      ),
      array(
        'id'=>'tek-header-icons-section-start',
        'type' => 'section',
        'title' => esc_html__('آیکون های منطقه سربرگ', 'sway'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-topbar-search',
        'type' => 'switch',
        'title' => esc_html__('آیکون جستجو', 'sway'),
        'subtitle' => esc_html__('آیکون جستجو را خاموش یا روشن کنید', 'sway'),
        'default' => true
      ),
      array(
        'id' => 'tek-woo-display-cart-icon',
        'type' => 'switch',
        'title' => esc_html__('آیکون سبد خرید', 'sway'),
        'subtitle' => esc_html__('آیکون سبد خرید را خاموش یا روشن کنید', 'sway'),
        'default' => true,
      ),
      array(
        'id' => 'tek-woo-cart-icon-selector',
        'type' => 'button_set',
        'title' => esc_html__('آیکون سبد خرید', 'sway'),
        'subtitle' => esc_html__('تغییر استایل آیکون سبد خرید', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'shopping-cart' => 'Shopping cart',
            'shopping-bag' => 'Shopping bag',
        ),
        'required' => array('tek-woo-display-cart-icon','equals','1'),
        'default' => 'shopping-cart'
      ),
      array(
        'id' => 'tek-woo-display-wishlist-icon',
        'type' => 'switch',
        'title' => esc_html__('آیکون لیست علاقه مندی ها', 'sway'),
        'subtitle' => esc_html__('آیکون لیست علاقه مندی ها را فعال یا غیرفعال کنید', 'sway'),
        'default' => true,
      ),
      array(
        'id'=>'tek-header-icons-section-end',
        'type' => 'section',
        'indent' => false,
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Favorite-Window',
    'title' => esc_html__('لوگو', 'sway'),
    'desc' => esc_html__('تنظیمات عمومی لوگو', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-logo-alignment',
        'type' => 'button_set',
        'title' => esc_html__('تراز لوگو', 'sway'),
        'subtitle' => esc_html__('موقعیت لوگو را کنترل کنید.', 'sway'),
        'desc' => esc_html__('اگر روی "مرکز" تنظیم شود ، منوی اصلی به طور خودکار در مرکز قرار می گیرد.', 'sway'),
        'options' => array(
          'logo-left' => 'چپ',
          'logo-center' => 'مرکز',
         ),
        'default' => 'logo-left'
      ),
      array(
        'id' => 'tek-logo-spacing',
        'type' => 'spacing',
        'mode' => 'padding',
        'units' => array('em', 'px'),
        'left' => false,
        'right' => false,
        'title' => esc_html__('فضای خالی لوگو', 'sway'),
        'subtitle' => esc_html__('سطح بالایی و پایینی عنصر لوگو را کنترل کنید.', 'sway'),
        'required' => array('tek-logo-alignment','equals','logo-center'),
        'default' => array(
          'units' => 'px',
        )
      ),
      array(
        'id' => 'tek-logo-style',
        'type' => 'button_set',
        'title' => esc_html__('نوع لوگو', 'sway'),
        'subtitle' => esc_html__('نوع لوگو را انتخاب کنید : متن/تصویر', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            '1' => 'تصویر لوگو',
            '2' => 'متن لوگو'
        ),
        'default' => '2'
      ),
      array(
        'id' => 'tek-logo',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('تصویر لوگوی اصلی', 'sway'),
        'subtitle' => esc_html__('بارگذاری تصویر لوگوی اصلی این لوگو با نوار سربرگ ثابت استفاده می شود.', 'sway'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-logo2',
        'type' => 'media',
        'readonly' => false,
        'url' => true,
        'title' => esc_html__('تصویر دوم لوگو', 'sway'),
        'subtitle' => esc_html__('بارگذاری تصویر دوم لوگو', 'sway'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-sticky-nav-logo',
        'type' => 'select',
        'title' => esc_html__('بارگذاری تصویر لوگو چسبنده', 'sway'),
        'subtitle' => esc_html__('Select logo image for the sticky header bar.', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'nav-primary-logo' => 'تصویر لوگوی اصلی',
            'nav-secondary-logo' => 'تصویر لوگوی دوم',
        ),
        'default' => 'nav-primary-logo',
        'required' => array(
          array ('tek-menu-behaviour', 'equals','1'),
          array ('tek-logo-style','equals','1'),
        ),
      ),
      array(
        'id' => 'tek-transparent-nav-logo',
        'type' => 'select',
        'title' => esc_html__('تصویر لوگو سربرگ شفاف (ترنسپرنت)', 'sway'),
        'subtitle' => esc_html__('تصویر لوگو را برای نوار سربرگ شفاف انتخاب کنید.', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'nav-primary-logo' => 'تصویر لوگوی اصلی',
          'nav-secondary-logo' => 'تصویر لوگوی دوم',
        ),
        'default' => 'nav-secondary-logo',
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-logo-image-size',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('اندازه لوگو', 'sway'),
        'subtitle' => esc_html__('کنترل عرض لوگو (مقدار پیکسل). مثال: 200', 'sway'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-mobile-logo-image-size',
        'type' => 'text',
        'class' => 'kd-numeric-input',
        'title' => esc_html__('اندازه لوگو موبایل', 'sway'),
        'subtitle' => esc_html__('عرض لوگوی تلفن همراه (مقدار پیکسل) را کنترل کنید. مثال: 140', 'sway'),
        'required' => array('tek-logo-style','equals','1'),
      ),
      array(
        'id' => 'tek-text-logo',
        'type' => 'text',
        'title' => esc_html__('متن لوگو', 'sway'),
        'subtitle' => esc_html__('نام وب سایت شما به جای لوگو معمولی تصویر نمایش داده می شود', 'sway'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => 'Sway'
      ),
      array(
        'id' => 'tek-text-logo-typo',
        'type' => 'typography',
        'title' => esc_html__('تنظیمات فونت لوگو متن', 'sway'),
        'subtitle' => esc_html__('ویرایش تنظیمات تایپوگرافی برای متن لوگو', 'sway'),
        'required' => array('tek-logo-style','equals', '2'),
        'google' => true,
        'font-family' => true,
        'font-style' => true,
        'font-size' => true,
        'font-size' => true,
        'line-height' => false,
        'letter-spacing' => true,
        'color' => false,
        'text-align' => false,
        'all_styles' => false,
        'units' => 'px',
      ),
      array(
        'id' => 'tek-main-logo-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ متن لوگو اصلی', 'sway'),
        'subtitle' => esc_html__('رنگ پیش فرض متن لوگو', 'sway'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-secondary-logo-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ متن لوگو دوم', 'sway'),
        'subtitle' => esc_html__('رنگ متن لوگو برای سربرگ چسبنده', 'sway'),
        'required' => array('tek-logo-style','equals','2'),
        'default' => '',
        'validate' => 'color'
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-One-Window',
    'title' => esc_html__('منوی اصلی', 'sway'),
    'desc' => esc_html__('ویرایش تنظیمات عمومی منوی اصلی', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id'=>'tek-menu-settings-section-start',
        'type' => 'section',
        'title' => esc_html__('تنظیمات منوی اصلی', 'sway'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-menu-alignment',
        'type' => 'button_set',
        'title' => esc_html__('تراز نوار', 'sway'),
        'subtitle' => esc_html__('موقعیت منوی اصلی را کنترل کنید.', 'sway'),
        'options' => array(
          'main-nav-left' => 'Left',
          'main-nav-center' => 'Center',
          'main-nav-right' => 'Right'
        ),
        'required' => array('tek-logo-alignment','equals','logo-left'),
        'default' => 'main-nav-right'
      ),
      array(
        'id' => 'tek-menu-typo',
        'type' => 'typography',
        'title' => esc_html__('تنظیمات فونت منو', 'sway'),
        'subtitle' => esc_html__('کنترل تنظیمات تایپوگرافی برای منو', 'sway'),
        'google' => true,
        'font-style' => true,
        'font-size' => true,
        'line-height' => false,
        'text-transform' => true,
        'color' => false,
        'text-align' => false,
        'letter-spacing' => true,
        'all_styles' => false,
        'default' => array(
          'font-weight' => '',
          'font-family' => '',
          'font-size' => '16',
          'text-transform' => '',
          'letter-spacing' => '',
        ),
        'units' => 'px',
      ),
      array(
        'id' => 'tek-header-menu-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ لینک منو', 'sway'),
        'subtitle' => esc_html__('انتخاب رنگ پیش فرض متن منو', 'sway'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-hover',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ لینک منو در حالت هاور(شناور)', 'sway'),
        'subtitle' => esc_html__('رنگ متن پیش فرض منو را زمانی که ماوس روی آن است انتخاب کنید.', 'sway'),
        'default' => '',
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-sticky',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ لینک منوی چسبنده', 'sway'),
        'subtitle' => esc_html__('انتخاب رنگ منوی چسبنده', 'sway'),
        'default' => '',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-header-menu-color-sticky-hover',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ لینک منوی چسبنده در حالت هاور (شناور)', 'sway'),
        'subtitle' => esc_html__('رنگ متن منوی چسبنده را زمانی که ماوس روی آن است انتخاب کنید.', 'sway'),
        'default' => '',
        'required' => array('tek-menu-behaviour','equals', '1'),
        'validate' => 'color'
      ),
      array(
        'id' => 'tek-dropdown-nav-hover',
        'type' => 'button_set',
        'title' => esc_html__('افکت هاور (شناور) لینک نوی بازشونده', 'sway'),
        'subtitle' => esc_html__('انتخاب افکت برای لینک های منو در حالت هاور (شناور)', 'sway'),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
            'default-dropdown-effect' => 'پیش فرض',
            'background-dropdown-effect' => 'رنگ پس زمینه',
            'underline-effect' => 'انیمیشن خط کشیدن زیر (آندرلاین)',
        ),
        'default' => 'background-dropdown-effect',
      ),
      array(
        'id'=>'tek-menu-settings-section-end',
        'type' => 'section',
        'indent' => false,
      ),
      array(
        'id'=>'tek-home-transparent-section-start',
        'type' => 'section',
        'title' => esc_html__('تنظیمات ناوبری شفاف (ترنسپرنت)', 'sway'),
        'indent' => true,
      ),
      array(
        'id' => 'tek-transparent-homepage-menu-colors',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ لینک منو', 'sway'),
        'subtitle' => esc_html__('رنگ ناوبری هنگام استفاده از پس زمینه شفاف.', 'sway'),
        'default' => '',
        'validate' => 'color',
      ),
      array(
        'id'=>'tek-home-transparent-section-end',
        'type' => 'section',
        'indent' => false,
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Add-Window',
    'title' => esc_html__('نوار بالا', 'sway'),
    'desc' => esc_html__('ویرایش تنظیمات عمومی نوار بالا', 'sway'),
    'subsection' => true,
    'fields' => array(
      array(
        'id' => 'tek-topbar',
        'type' => 'switch',
        'title' => esc_html__('فعال کردن نوار بالا', 'sway'),
        'subtitle' => esc_html__('فعال / غیرفعال کردن نوار بالا', 'sway'),
        'default' => true
      ),
      array(
        'id' => 'tek-topbar-sticky',
        'type' => 'switch',
        'title' => esc_html__('نوار بالا چسبنده', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'subtitle' => esc_html__('فعال / غیر فعال کردن نوار بالا چسبنده', 'sway'),
        'default' => false
      ),
      array(
        'id' => 'tek-topbar-mobile',
        'type' => 'switch',
        'title' => esc_html__('فعال کردن نوار بالا در حالت موبایل', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'subtitle' => esc_html__('نمایش / عدم نمایش نوار بالا در دستگاه های تلفن همراه', 'sway'),
        'default' => true
      ),
      array(
        'id' => 'tek-topbar-left-content',
        'type' => 'button_set',
        'title' => esc_html__('محتوای سمت چپ نوار بالا', 'sway'),
        'subtitle' => esc_html__('انتخاب محتوا برای نوار بالا سمت چپ', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'contact-info' => 'اطلاعات تماس',
          'social-links' => 'لینک شبکه های اجتماعی',
          'navigation' => 'ناوبری',
          'empty' => 'خالی',
        ),
        'default' => 'contact-info',
      ),
      array(
        'id' => 'tek-topbar-right-content',
        'type' => 'button_set',
        'title' => esc_html__('محتوای نوار بالا سمت راست', 'sway'),
        'subtitle' => esc_html__('انتخاب محتوا برای نوار بالا سمت راست', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'contact-info' => 'اطلاعات تماس',
          'social-links' => 'لینک های شبکه های اجتماعی',
          'navigation' => 'ناوبری',
          'empty' => 'خالی',
        ),
        'default' => 'social-links',
      ),
      array(
        'id' => 'tek-topbar-content-design',
        'type' => 'button_set',
        'title' => esc_html__('طرح محتوای نوار بالا', 'sway'),
        'subtitle' => esc_html__('انتخاب طرح برای محتوای نوار بالا', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
        'options'  => array(
          'tb-default-design' =>'بدون خط',
          'tb-border-design' => 'به همراه خط',
        ),
        'default' => 'tb-border-design',
      ),
      array(
        'id' => 'tek-topbar-typo',
        'type' => 'typography',
        'title' => esc_html__('تنظیمات فونت نوار بالا', 'sway'),
        'subtitle' => esc_html__('انتخاب وزن و اندازه فونت برای نوار بالا', 'sway'),
        'required' => array('tek-topbar','equals', true),
        'google' => true,
        'font-family' => true,
        'font-style' => true,
        'font-size' => true,
        'line-height' => false,
        'color' => false,
        'text-align' => false,
        'all_styles' => false,
        'units' => 'px',
      ),
      array(
        'id' => 'tek-topbar-bg-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ پس زمینه نوار بالا', 'sway'),
        'subtitle' => esc_html__('ویرایش پس زمینه نوار بالا', 'sway'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
      array(
        'id' => 'tek-topbar-text-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ متن نوار بالا', 'sway'),
        'subtitle' => esc_html__('ویرایش رنگ متن ها و لینک های نوار بالا', 'sway'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
      array(
        'id' => 'tek-topbar-hover-text-color',
        'type' => 'color',
        'transparent' => false,
        'title' => esc_html__('رنگ متن نوار بالا در حالت هاور (شناور)', 'sway'),
        'subtitle' => esc_html__('ویرایش رنگلینک های نوار بالا زمانی که ماوس روی آن است', 'sway'),
        'default' => '',
        'validate' => 'color',
        'required' => array('tek-topbar','equals', true),
      ),
    )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Window',
      'title' => esc_html__('ماژول پاپ آپ', 'sway'),
      'desc' => esc_html__('تنظیمات ماژول پنجره مورد استفاده برای نمایش محتوای اضافی در همه صفحات و پستها ، بدون از دست دادن فضا را کنترل کنید. باکس ماژول را می توان با استفاده از دکمه نمایش داده شده در نزدیکی منوی اصلی فعال کرد. این دکمه همچنین می تواند برای باز کردن یک صفحه جدید یا حرکت صاف به شناسه بخش صفحه استفاده شود.', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-btn-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات دکمه سربرگ', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-modal-button',
              'type' => 'switch',
              'title' => esc_html__('فعال کردن دکمه سربرگ', 'sway'),
              'subtitle' => esc_html__('دکمه سربرگ را فعال/غیرفعال کنید. دکمه در نزدیکی منطقه ناوبری اصلی در سمت راست نمایش داده می شود.', 'sway'),
              'default' => false
          ),
          array(
              'id' => 'tek-header-button-text',
              'type' => 'text',
              'title' => esc_html__('متن دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش متن دکمه سربرگ', 'sway'),
              'default' => 'درخواست قرار ملاقات'
          ),
          array(
              'id' => 'tek-header-button-style',
              'type' => 'button_set',
              'title' => esc_html__('استایل دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش استایل دکمه سربرگ', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'default' => 'outline-button'
          ),
          array(
              'id' => 'tek-header-button-color',
              'type' => 'button_set',
              'title' => esc_html__('طرح رنگ دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش طرح رنگ دکمه سربرگ ، رنگهای اصلی و ثانویه را می توان در مسیر : تنظیمات قالب > تنظیمات عمومی > طرح های رنگی ، تنظیم کرد.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'رنگ اصلی',
                  'secondary-color' => 'رنگ دوم',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-header-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('استایل هاور(شناور)دکمه', 'sway'),
              'subtitle' => esc_html__('استایل دکمه سربرگ را زمانی که ماوس روی آن است ویرایش کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'پیش فرض',
                  'hover_solid_primary' => 'خطی رنگ اصلی',
                  'hover_solid_secondary' => 'خطی رنگ دوم',
                  "hover_solid_white" => "خطی رنگ سفید",
                  'hover_outline_primary' => 'خط بیرونی رنگ اصلی',
                  'hover_outline_secondary' => 'خط بیرونی رنگ دوم',
                  "hover_outline_white" => "خط بیرونی رنگ سفید",
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-header-button-action',
              'type' => 'button_set',
              'title' => esc_html__('عملکرد دکمه', 'sway'),
              'subtitle' => esc_html__('عملکرد دکمه را انتخاب کنید: ماژول را باز کنید / به قسمتی بروید / صفحه جدیدی را باز کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'باز کردن باکس ماژول',
                  '2' => 'رفتن به قسمتی از سایت',
                  '3' => 'بازکردن پنجره جدید'
              ),
              'default' => '1'
          ),
          array(
              'id'=>'tek-btn-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-modal-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات باکس ماژول', 'sway'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-modal-title',
              'type' => 'text',
              'title' => esc_html__('سربرگ ماژول', 'sway'),
              'subtitle' => esc_html__('متن سربرگ بای ماژول', 'sway'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => 'با ما در تماس باشید'
          ),
          array(
              'id' => 'tek-modal-subtitle',
              'type' => 'editor',
              'title' => esc_html__('محتوای ماژول', 'sway'),
              'subtitle' => esc_html__('متن محتوا برای ماژول ، HTML مجاز است.', 'sway'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
              'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
              ),
          ),
          array(
              'id' => 'tek-modal-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('تصویر پس زمینه ماژول', 'sway'),
              'subtitle' => esc_html__('بارگذاری تصویر پس زمینه ماژول', 'sway'),
              'required' => array('tek-header-button-action','equals','1'),
              'default' => '',
          ),
          array(
              'id' => 'tek-modal-contact-links',
              'type' => 'switch',
              'title' => esc_html__('لینک های تماس با ما', 'sway'),
              'subtitle' => esc_html__('لینک های تلفن و ایمیل را فعال/غیرفعال کنید. لینک ها را می توان در پنل اطلاعات کسب و کار پیکربندی کرد.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-socials',
              'type' => 'switch',
              'title' => esc_html__('آیکون های شبکه های اجتماعی', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن لیست آیکون های شبکه های اجتماعی لیست را می توان در پنل اطلاعات کسب و کار پیکربندی کرد.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-modal-form-select',
              'type' => 'select',
              'title' => esc_html__('افزونه فرم تماس', 'sway'),
              'subtitle' => esc_html__('یک فرم تماس در داخل باکس ماژول نمایش دهید. از لیست کشویی ، فروشنده تماس را انتخاب کنید.', 'sway'),
              'required' => array('tek-header-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-modal-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('متن فرم تماس 7', 'sway'),
              'subtitle' => esc_html__('فرم تماس 7 را از منوی کشویی انتخاب کنید. لیست به طور خودکار پر می شود.', 'sway'),
              'required' => array('tek-modal-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Ninja Form', 'sway'),
              'required' => array('tek-modal-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Gravity Form', 'sway'),
              'required' => array('tek-modal-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-wp-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه WP Form', 'sway'),
              'required' => array('tek-modal-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('کدکوتاه (شورتکد) فرم', 'sway'),
              'subtitle' => esc_html__('کد کوتاه افزونه فرم تماس سفارشی را وارد کنید.', 'sway'),
              'required' => array('tek-modal-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-modal-css-class',
              'type' => 'text',
              'title' => esc_html__('کلاس های CSS', 'sway'),
              'subtitle' => esc_html__('برای سفارشی سازی بیشتر CSS ، یک کلاس به عنصر بسته بندی HTML اضافه کنید.', 'sway'),
              'default' => ''
          ),
          array(
              'id'=>'tek-modal-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات بخش اسکرول', 'sway'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-scroll-id',
              'type' => 'text',
              'title' => esc_html__('اسکرول به بخش با شناسه', 'sway'),
              'required' => array('tek-header-button-action','equals','2'),
              'default' => '#download-sway'
          ),
          array(
              'id'=>'tek-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات لینک صفحه ی جدید', 'sway'),
              'indent' => true,
              'required' => array('tek-header-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-button-new-page',
              'type' => 'text',
              'title' => esc_html__('لینک دکمه', 'sway'),
              'required' => array('tek-header-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-button-target',
              'type' => 'button_set',
              'title' => esc_html__('لینک هدف', 'sway'),
              'required' => array('tek-header-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'بازکردن در صفحه جدید',
                  'same-page' => 'بازکردن در همان صفحه'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-header-button-action','equals','3'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Sidebar-Window',
      'title' => esc_html__('پنل کناری', 'sway'),
      'desc' => esc_html__('تنظیمات پنل کناری مورد استفاده برای نمایش محتوای اضافی در همه صفحات و پستها ، بدون از دست دادن فضا. پنل کناری را می توان با استفاده از دکمه سربرگ که در نزدیکی منوی اصلی نمایش داده شده است ، فعال کرد. این دکمه همچنین می تواند برای باز کردن یک صفحه جدید یا حرکت صاف به شناسه بخش صفحه استفاده شود.', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-panel-btn-section-start',
              'type' => 'section',
              'title' => esc_html__('نمظیمات دکمه سربرگ', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-panel-button',
              'type' => 'switch',
              'title' => esc_html__('فعال کردن دکه سربرگ', 'sway'),
              'subtitle' => esc_html__('پنل کناری را فعال/غیرفعال کنید. دکمه در نزدیکی منطقه ناوبری اصلی در سمت راست نمایش داده می شود.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-button-text',
              'type' => 'text',
              'title' => esc_html__('متن دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش متن دکمه سربرگ', 'sway'),
              'default' => 'Purchase Sway'
          ),
          array(
              'id' => 'tek-panel-button-style',
              'type' => 'button_set',
              'title' => esc_html__('استایل دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش استایل دکمه سربرگ', 'sway'),
              'subtitle' => esc_html__('ویرایش متن دکمه سربرگ', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'solid-button' => 'Solid',
                  'outline-button' => 'Outline',
              ),
              'default' => 'solid-button'
          ),
          array(
              'id' => 'tek-panel-button-color',
              'type' => 'button_set',
              'title' => esc_html__('طرح رنگ دکمه', 'sway'),
              'subtitle' => esc_html__('ویرایش طرح رنگ دکمه سربرگ ، رنگهای اصلی و ثانویه را می توان در مسیر : تنظیمات قالب > تنظیمات عمومی > طرح های رنگی تنظیم کرد.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'primary-color' => 'Primary color',
                  'secondary-color' => 'Secondary color',
              ),
              'default' => 'primary-color'
          ),
          array(
              'id' => 'tek-panel-button-hover-style',
              'type' => 'select',
              'title' => esc_html__('ضوعیت دکمه در حالت شناور(هاور)', 'sway'),
              'subtitle' => esc_html__('ویرایش استایل دکمه سربرگ زمانی که ماوس بر روی آن است', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default_header_btn' => 'Default',
                  'hover_solid_primary' => 'Solid - Primary color',
                  'hover_solid_secondary' => 'Solid - Secondary color',
                  "hover_solid_white" => "Solid - White color",
                  'hover_outline_primary' => 'Outline - Primary color',
                  'hover_outline_secondary' => 'Outline - Secondary color',
                  "hover_outline_white" => "Outline - White color",
              ),
              'default' => 'default_header_btn'
          ),
          array(
              'id' => 'tek-panel-button-action',
              'type' => 'button_set',
              'title' => esc_html__('عملکرد دکمه', 'sway'),
              'subtitle' => esc_html__('عملکرد دکمه را انتخاب کنید: پنل کناری را باز کنید / به قسمتی بروید / یک صفحه جدید باز کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Open Side Panel',
                  '2' => 'Scroll to section',
                  '3' => 'Open a new page'
              ),
              'default' => '1'
          ),
          array(
              'id'=>'tek-panel-btn-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-panel-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات پنل کناری', 'sway'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id' => 'tek-panel-title',
              'type' => 'text',
              'title' => esc_html__('سربرگ پنل', 'sway'),
              'subtitle' => esc_html__('متن سربرگ برای پنل کناری', 'sway'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Enquire now'
          ),
          array(
              'id' => 'tek-panel-subtitle',
              'type' => 'editor',
              'title' => esc_html__('محتوای پنل', 'sway'),
              'subtitle' => esc_html__('متن محتوا برای پنل کناری', 'sway'),
              'required' => array('tek-panel-button-action','equals','1'),
              'default' => 'Give us a call or fill in the form below and we will contact you. We endeavor to answer all inquiries within 24 hours on business days.',
                  'args' => array(
                'teeny' => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
                    ),
          ),
          array(
              'id' => 'tek-panel-contact-links',
              'type' => 'switch',
              'title' => esc_html__('لینک های تماس با ما', 'sway'),
              'subtitle' => esc_html__('لینک های تلفن و ایمیل را فعال/غیرفعال کنید. لینک ها را می توان در پنل اطلاعات کسب و کار پیکربندی کرد.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-socials',
              'type' => 'switch',
              'title' => esc_html__('آیکون های شبکه های اجتماعی', 'sway'),
              'subtitle' => esc_html__('لیست آیکون های شبکه های اجتماعی را فعال/غیرفعال کنید. لیست را می توان در پنل اطلاعات کسب و کار پیکربندی کرد.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-panel-form-select',
              'type' => 'select',
              'title' => esc_html__('افزونه ی فرم تماس', 'sway'),
              'subtitle' => esc_html__('یک فرم تماس در داخل پنل کناری نمایش دهید. از لیست کشویی ، فروشنده تماس را انتخاب کنید.', 'sway'),
              'required' => array('tek-panel-button-action','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-panel-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('عنوان فرم تماس 7', 'sway'),
              'subtitle' => esc_html__('فرم تماس 7 را از منوی کشویی انتخاب کنید. لیست به طور خودکار پر می شود.', 'sway'),
              'required' => array('tek-panel-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Ninja Form', 'sway'),
              'required' => array('tek-panel-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Gravity Form', 'sway'),
              'required' => array('tek-panel-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-wp-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه WP Form', 'sway'),
              'required' => array('tek-panel-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('کدکوتاه (شورتکد)فرم', 'sway'),
              'subtitle' => esc_html__('کد کوتاه افزونه فرم تماس سفارشی را وارد کنید.', 'sway'),
              'required' => array('tek-panel-form-select','equals','5'),
              'default' => ''
          ),
          array(
              'id' => 'tek-panel-css-class',
              'type' => 'text',
              'title' => esc_html__('کلاس های CSS', 'sway'),
              'subtitle' => esc_html__('برای سفارشی سازی بیشتر CSS ، یک کلاس به عنصر بسته بندی HTML اضافه کنید.', 'sway'),
              'default' => ''
          ),
          array(
              'id'=>'tek-panel-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','1'),
          ),
          array(
              'id'=>'tek-panel-scroll-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات بخش اسکرول', 'sway'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id' => 'tek-panel-scroll-id',
              'type' => 'text',
              'title' => esc_html__('لسکرول به بخش با شناسه', 'sway'),
              'required' => array('tek-panel-button-action','equals','2'),
              'default' => '#download-sway'
          ),
          array(
              'id'=>'tek-panel-scroll-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','2'),
          ),
          array(
              'id'=>'tek-panel-new-page-settings-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات صفحه جدید', 'sway'),
              'indent' => true,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
          array(
              'id' => 'tek-panel-button-new-page',
              'type' => 'text',
              'title' => esc_html__('لینک دکمه', 'sway'),
              'required' => array('tek-panel-button-action','equals','3'),
              'default' => '#'
          ),
          array(
              'id' => 'tek-panel-button-target',
              'type' => 'button_set',
              'title' => esc_html__('لینک هدف', 'sway'),
              'required' => array('tek-panel-button-action','equals','3'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'new-page' => 'Open in a new page',
                  'same-page' => 'Open in same page'
              ),
              'default' => 'new-page'
          ),
          array(
              'id'=>'tek-panel-new-page-settings-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-panel-button-action','equals','3'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Width-Window',
      'title' => esc_html__('لایه ها', 'sway'),
      'desc' => esc_html__('تنظیمات کلی طرح بندی که در سراسر سایت اعمال می شود.', 'sway'),
      'fields' => array(
          array(
              'id' => 'tek-layout-style',
              'type' => 'button_set',
              'title' => esc_html__('استایل لایه ها', 'sway'),
              'subtitle' => esc_html__('عرض کلی را برای کل سایت انتخاب کنید.', 'sway'),
              'options' => array(
                  'full-width' => 'Full-Width',
                  'boxed' => 'Boxed'
               ),
              'default' => 'full-width'
          ),
          array(
              'id' => 'tek-layout-boxed-width',
              'type' => 'slider',
              'title' => esc_html__( 'عرض محتوا', 'sway' ),
              'subtitle' => esc_html__( 'عرض منطقه باکس محتوا را کنترل کنید.', 'sway' ),
              'default' => 1560,
              'min' => 1280,
              'max' => 1920,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-boxed-body-bg',
              'type' => 'background',
              'transparent' => false,
              'title' => esc_html__('تنظیمات پس زمینه بدنه', 'sway'),
              'subtitle' => esc_html__('تنظیمات فقط در صورتی قابل انتخاب است که استایل طرح بندی باکس انتخاب شده باشد. تنظیمات پس زمینه بدنه را پیکربندی کنید.', 'sway'),
              'preview' => false,
              'required' => array('tek-layout-style','equals','boxed'),
          ),
          array(
              'id' => 'tek-layout-fw-content-bg',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ پس زمینه محتوا', 'sway'),
              'subtitle' => esc_html__('انتخاب رنگ پس زمینه برای محتوا', 'sway'),
              'default' => '',
              'validate' => 'color'
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
    'icon' => 'iconsmind-Download-Window',
    'title' => esc_html__('پاورقی', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Settings-Window',
      'title' => esc_html__('تنظیمات پاورقی', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی پاورقی', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
            'id'=>'tek-footer-global-options-start',
            'type' => 'section',
            'title' => esc_html__('تنظیمات عمومی پاورقی', 'sway'),
            'indent' => true,
          ),
          array(
            'id' => 'tek-footer-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض پاورقی', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه پاورقی را کنترل کنید.', 'sway'),
            'options' => array(
              'contained' => 'Contained',
              'fullwidth' => 'Full-Width'
             ),
            'default' => 'contained'
          ),
          array(
              'id' => 'tek-footer-fixed',
              'type' => 'switch',
              'title' => esc_html__('پاورقی ثابت', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن افکت اسکرول پاورقی ثابت', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-footer-bar',
              'type' => 'switch',
              'title' => esc_html__('نوار پاورقی', 'sway'),
              'subtitle' => esc_html__('فعال /غیرفعال کردن نوار پاورقی .شامل منوی پاورقی و آیکون های شبکه های اجتماعی.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-upper-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ پس زمینه بالای پاورقی', 'sway'),
              'subtitle' => esc_html__('انتخاب رنگ پس زمینه بالای پاورقی', 'sway'),
              'default' => '#212240',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-lower-footer-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ پس زمینه پایین پاورقی', 'sway'),
              'subtitle' => esc_html__('انتخاب رنگ پس زمینه پایین پاورقی', 'sway'),
              'default' => '#212240',
              'validate' => 'color'
          ),
          array(
          	'id'=>'tek-footer-global-options-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-background-image-start',
          	'type' => 'section',
          	'title' => esc_html__('تصویر پس زمینه پاورقی', 'sway'),
          	'indent' => true,
          ),
          array(
            'id' => 'tek-footer-background-image',
            'type' => 'media',
            'readonly' => false,
            'url' => true,
            'title' => esc_html__('تصویر پس زمینه', 'sway'),
            'subtitle' => esc_html__('یک تصویر برای ناحیه پاورقی انتخاب کنید. اگر خالی بماند ، از رنگ پس زمینه پاورقی استفاده می شود.', 'sway'),
          ),
          array(
            'id' => 'tek-footer-background-style',
            'type' => 'select',
            'title' => esc_html__('استایل پس زمینه', 'sway'),
            'subtitle' => esc_html__('نحوه تکرار تصویر پس زمینه را انتخاب کنید.', 'sway'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options' => array(
              'cover' => 'Cover',
              'contain' => 'Contain',
              'no-repeat' => 'No repeat',
              'repeat' => 'Repeat',
             ),
            'default' => 'cover'
          ),
          array(
              'id' => 'tek-footer-background-image-position',
              'type' => 'select',
              'title' => esc_html__('موقعیت پس زمینه', 'sway'),
              'subtitle' => esc_html__('نحوه قرار گرفتن تصویر پس زمینه را انتخاب کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                'left top' => 'left top',
                'left center' => 'left center',
                'left bottom' => 'left bottom',
                'right top' => 'right top',
                'right center' => 'right center',
                'right bottom' => 'right bottom',
                'center top' => 'center top',
                'center center' => 'center center',
                'center bottom' => 'center bottom',
              ),
              'required' => array('tek-footer-background-style','equals','no-repeat'),
              'default' => 'left top'
          ),
          array(
          	'id'=>'tek-footer-background-image-end',
          	'type' => 'section',
          	'indent' => false,
          ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Font-Window',
        'title' => esc_html__('تایپوگرافی پاورقی', 'sway'),
        'desc' => esc_html__('تنظیمات تایپوگرافی پاورقی', 'sway'),
        'subsection' => true,
        'fields' => array(

          array(
              'id' => 'tek-footer-typo',
              'type' => 'typography',
              'title' => esc_html__('تایپوگرافی پاورقی', 'sway'),
              'subtitle' => esc_html__('تنظیمات تایپوگرافی پاورقی را ویرایش کنید.', 'sway'),
              'google' => true,
              'font-style' => true,
              'font-size' => true,
              'line-height' => false,
              'text-transform' => true,
              'color' => false,
              'text-align' => false,
              'letter-spacing' => true,
              'all_styles' => false,
              'default' => array(
                  'font-weight' => '',
                  'font-family' => '',
                  'font-size' => '',
                  'text-transform' => '',
              ),
              'units' => 'px',
          ),
          array(
              'id' => 'tek-footer-heading-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ سربرگ پاورقی', 'sway'),
              'subtitle' => esc_html__('رنگ متن مورد استفاده برای عناوین ابزارک های پاورقی را انتخاب کنید.', 'sway'),
              'default' => '#ffffff',
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-footer-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ متن پاورقی', 'sway'),
              'subtitle' => esc_html__('رنگ متن مورد استفاده برای پاراگرافهای ابزارک های پاورقی را انتخاب کنید.', 'sway'),
              'default' => '#BDBEC8',
              'validate' => 'color'
          ),
          array(
                'id' => 'tek-footer-link-color',
                'type' => 'link_color',
                'title' => esc_html__( 'رنگ لینک پاورقی', 'sway' ),
                'subtitle' => esc_html__('رنگ متن مورد استفاده برای لینک های پاورقی را انتخاب کنید.', 'sway'),
                'active' => false,
                'visited' => false,
          ),
          array(
              'id' => 'tek-footer-link-hover-effect',
              'type' => 'button_set',
              'title' => esc_html__('افکت لینک های پاورقی در حالت شناور (هاور)', 'sway'),
              'subtitle' => esc_html__('انتخاب رنگ لینک های پاورقی در حالت شناور (هاور)', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'default-footer-link-effect' => 'Default',
                  'underline-effect' => 'Underline animation',
              ),
              'default' => 'underline-effect',
          ),
        )
    ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Network-Window',
      'title' => esc_html__('ابزارک های پاورقی', 'sway'),
      'desc' => esc_html__('تنظیمات ابزارک های پاورقی', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
            'id' => 'tek-upper-footer',
            'type' => 'switch',
            'title' => esc_html__('بخش ابزارک های پاورقی', 'sway'),
            'subtitle' => esc_html__('بخش ابزارک های پاورقی را فعال/غیرفعال کنید. شامل مناطق ابزارک های پاورقی است.', 'sway'),
            'default' => true
          ),
          array(
          	'id'=>'tek-footer-first-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('اولین منطقه ابزارک', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-first-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('اولین منطقه ابزارک', 'sway'),
              'subtitle' => esc_html__('فعال کردن/غیرفعال کردن قسمت ابزارک پاورقی', 'sway'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-first-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض اولین ابزارک', 'sway'),
            'subtitle' => esc_html__('عرض اولین ناحیه ابزارک پاورقی را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '4',
            'required' => array('tek-footer-first-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-first-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن اولین ابزارک', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای اولین ناحیه ابزارک پاورقی انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-first-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-first-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-second-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('منطقه ابزارک دوم', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-second-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('منطقه ابزارک دوم', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن ناحیه ابزارک دوم پاورقی.', 'sway'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-second-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض ابزارک دوم', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه ابزارک پاورقی دوم را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '2',
            'required' => array('tek-footer-second-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-second-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن ابزارک دوم پاورقی', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای ناحیه ابزارک پاورقی دوم انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-second-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-second-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-third-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('منطقه ابزارک سوم', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-third-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('منطقه ابزارک سوم', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن ناحیه ابزارک سوم پاورقی.', 'sway'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-third-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض ابزارک سوم', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه ابزارک پاورقی سوم را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '2',
            'required' => array('tek-footer-third-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-third-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن ابزارک سوم', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای ناحیه ابزارک پاورقی سوم انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-third-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-third-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-fourth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('منطقه ابزارک چهارم', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-fourth-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('منطقه ابزارک چهارم', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن قسمت ابزارک پاورقی چهارم.', 'sway'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-fourth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض ابزارک چهارم', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه ابزارک پاورقی چهارم را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '2',
            'required' => array('tek-footer-fourth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-fourth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن ابزارک چهارم', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای ناحیه ابزارک پاورقی چهارم انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-fourth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-fourth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-fifth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('منطقه ابزارک پنجم', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-fifth-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('منطقه ابزارک پنجم', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن ناحیه ابزارک پنجم پاورقی.', 'sway'),
              'default' => true
          ),
          array(
            'id' => 'tek-footer-fifth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض ابزارک پنجم', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه ابزارک پاورقی پنجم را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '2',
            'required' => array('tek-footer-fifth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-fifth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن ابزارک پنجم', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای ناحیه ابزارک پاورقی پنجم انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-fifth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-fifth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
          array(
          	'id'=>'tek-footer-sixth-widget-section-start',
          	'type' => 'section',
          	'title' => esc_html__('منطقه ابزارک ششم', 'sway'),
            'required' => array('tek-upper-footer', 'equals', true),
          	'indent' => true,
          ),
          array(
              'id' => 'tek-footer-sixth-widget-switch',
              'type' => 'switch',
              'title' => esc_html__('منطقه ابزارک ششم', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن ناحیه ابزارک پاورقی ششم.', 'sway'),
              'default' => false
          ),
          array(
            'id' => 'tek-footer-sixth-widget-width',
            'type' => 'button_set',
            'title' => esc_html__('عرض ابزارک ششم', 'sway'),
            'subtitle' => esc_html__('عرض ناحیه ابزارک پاورقی ششم را کنترل کنید.', 'sway'),
            'options' => array(
              '6' => '1/2',
              '4' => '1/3',
              '3' => '1/4',
              '2-4' => '1/5',
              '2' => '1/6',
             ),
            'default' => '2',
            'required' => array('tek-footer-sixth-widget-switch', 'equals', true),
          ),
          array(
            'id' => 'tek-footer-sixth-widget-text-align',
            'type' => 'button_set',
            'title' => esc_html__('تراز متن ابزارک ششم', 'sway'),
            'subtitle' => esc_html__('تراز متن محتوا را برای ناحیه ابزارک پاورقی ششم انتخاب کنید.', 'sway'),
            'options' => array(
              'text-left' => 'Left',
              'text-center' => 'Center',
              'text-right' => 'Right',
             ),
            'default' => 'text-left',
            'required' => array('tek-footer-sixth-widget-switch', 'equals', true),
          ),
          array(
          	'id'=>'tek-footer-sixth-widget-section-end',
          	'type' => 'section',
          	'indent' => false,
          ),
        )
    ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-URL-Window',
      'title' => esc_html__('کپی رایت پاورقی', 'sway'),
      'desc' => esc_html__('تنظیمات کپی رایت پاورقی', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-lower-footer-switch',
              'type' => 'switch',
              'title' => esc_html__('بخش کپی رایت پاورقی', 'sway'),
              'subtitle' => esc_html__('فعال کردن/غیرفعال کردن بخش کپی رایت پاورقی. حاوی متن کپی رایت است.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-footer-text',
              'type' => 'editor',
              'title' => esc_html__('متن کپی رایت', 'sway'),
              'subtitle' => esc_html__('متن کپی رایت را در پایین صفحه وارد کنید', 'sway'),
              'default' => 'Sway by KeyDesign. All rights reserved.',
              'args' => array(
                  'teeny' => true,
                  'textarea_rows' => 3,
                  'media_buttons' => false,
              ),
              'required' => array('tek-lower-footer-switch', 'equals', true),
          ),
          array(
              'id' => 'tek-footer-copyright-alignment',
              'type' => 'button_set',
              'title' => esc_html__('تراز متن کپی رایت', 'sway'),
              'subtitle' => esc_html__('تراز متن با ناحیه کپی رایت پاورقی را انتخاب کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'copyright-left' => 'Left',
                  'copyright-center' => 'Center',
                  'copyright-right' => 'Right',
                  'copyright-justify' => 'Justify',
              ),
              'default' => 'copyright-center',
              'required' => array('tek-lower-footer-switch', 'equals', true),
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Font-Window',
      'title' => esc_html__('تایپوگرافی', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Aa',
      'title' => esc_html__('فونت های عمومی', 'sway'),
      'desc' => esc_html__('خصوصیات فونت را در کل وب سایت سفارشی کنید. از بین 800 فونت متن باز گوگل ، رایگان برای استفاده تجاری ، انتخاب کنید.', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
            'id'   => 'tek-typography-info',
            'type' => 'info',
            'desc' => esc_html__('مهم! بازنشانی این بخش منجر به از دست دادن تنظیمات وارد شده نمایشی و پیش فرض تنظیمات اصلی قالب می شود.', 'sway')
          ),
          array(
              'id' => 'tek-default-typo',
              'type' => 'typography',
              'title' => esc_html__('تایپوگرافی بدنه', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی فونت اصلی بدنه را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'all_styles' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h1-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H1', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H1 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H2', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H2 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H3', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H3 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H4', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H4 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H5', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H5 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H6', 'sway'),
              'subtitle' => esc_html__('تایپوگرافی عنوان H6 را پیکربندی کنید.', 'sway'),
              'line-height' => true,
              'text-align' => true,
              'text-transform' => true,
              'letter-spacing' => true,
              'units' => 'px',
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Font-Name',
      'title' => esc_html__('فونت های Typekit', 'sway'),
      'desc' => __('فونت های Typekit فونت های ممتازی هستند که فقط با اشتراک ماهانه فعال Adobe CC قابل استفاده هستند.', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-typekit-switch',
            'type' => 'switch',
            'title' => esc_html__('فعال کردن Typekit', 'sway'),
            'subtitle' => esc_html__('فونت های Typekit را فعال/غیر فعال کنید', 'sway'),
            'default' => false
        ),
        array(
            'id' => 'tek-typekit',
            'type' => 'text',
            'title' => esc_html__('شناسه Typekit', 'sway'),
            'subtitle' => esc_html__('شناسه Typekit را اضافه کنید. فقط داده های منتشر شده قابل دسترسی است. لطفاً مطمئن شوید که هرگونه تغییر در کیت به روز شده است.', 'sway'),
            'mode' => 'text',
            'default' => '',
            'theme' => 'chrome',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-typekit-selector',
            'type' => 'text',
            'title' => esc_html__('تایپوگرافی بدنه', 'sway'),
            'subtitle' => esc_html__('فونت فامیلی مورد استفاده برای تایپوگرافی بدنه اصلی را اضافه کنید.', 'sway'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
        array(
            'id' => 'tek-heading-typekit-selector',
            'type' => 'text',
            'title' => esc_html__('تایپوگرافی سربرگ ها', 'sway'),
            'subtitle' => esc_html__('فونت فامیلی مورد استفاده برای سربرگ های اصلی (H1 تا H6) را اضافه کنید.', 'sway'),
            'default' => '',
            'required' => array('tek-typekit-switch','equals', true),
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Text-Effect',
      'title' => esc_html__('فونت های سفارشی', 'sway'),
      'desc' => esc_html__('فونت های سفارشی خود را بارگذاری کنید. فقط فایل های .ttf و .woff مورد نیاز است.', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-custom-fonts-switch',
            'type' => 'switch',
            'title' => esc_html__('فعال کردن فونت های سفارشی', 'sway'),
            'default' => false
        ),
        array(
            'id'=>'tek-primary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('فونت سفارشی اصلی', 'sway'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-primary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('فایل اصلی .ttf', 'sway'),
            'subtitle' => esc_html__('فونت اصلی .ttf را بارگذاری کنید.', 'sway'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-primary-woff-font',
            'type' => 'media',
            'title' => esc_html__('فایل اصلی .woff', 'sway'),
            'subtitle' => esc_html__('بارگذاری فونت اصلی .woff فایل.', 'sway'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-primary-font-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-secondary-font-section-start',
            'type' => 'section',
            'title' => esc_html__('فونت سفارشی دوم', 'sway'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-secondary-ttf-font',
            'type' => 'media',
            'title' => esc_html__('فایل .ttf دوم', 'sway'),
            'subtitle' => esc_html__('فونت ثانویه .ttf را بارگذاری کنید.', 'sway'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'ttf',
            'library_filter' => 'ttf',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-secondary-woff-font',
            'type' => 'media',
            'title' => esc_html__('فایل .woff دوم', 'sway'),
            'subtitle' => esc_html__('فونت ثانویه .woff را بارگذاری کنید.', 'sway'),
            'readonly' => false,
            'preview' => false,
            'url' => true,
            'mode' => 'woff',
            'library_filter' => 'woff',
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-secondary-font-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-custom-font-selector-section-start',
            'type' => 'section',
            'title' => esc_html__('انتخابگر فونت سفارشی', 'sway'),
            'indent' => true,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-body-custom-font',
            'type' => 'select',
            'title' => esc_html__('تایپوگرافی بدنه', 'sway'),
            'subtitle' => esc_html__('فونت سفارشی را انتخاب کنید تا برای متن اصلی استفاده شود.', 'sway'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id' => 'tek-headings-custom-font',
            'type' => 'select',
            'title' => esc_html__('تایپوگرافی سربرگ ها', 'sway'),
            'subtitle' => esc_html__('فونت سفارشی را انتخاب کنید تا برای متن عنوانها استفاده شود.', 'sway'),
            'select2' => array('allowClear' => true, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
              'primary-custom-font' => 'Primary Custom Font',
              'secondary-custom-font' => 'Secondary Custom Font'
            ),
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
        array(
            'id'=>'tek-custom-font-selector-section-end',
            'type' => 'section',
            'indent' => false,
            'required' => array('tek-custom-fonts-switch','equals', true),
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Text-Box',
      'title' => esc_html__('فونت های واکنشگرا', 'sway'),
      'desc' => esc_html__('تایپوگرافی پیش فرض (اندازه فونت و ارتفاع خط) در تلفن همراه و رایانه لوحی را بازنویسی کنید', 'sway'),
      'subsection' => true,
      'fields' => array(
      array(
              'id' => 'tek-default-typo-mobile',
              'type' => 'typography',
              'title' => esc_html__('تایپوگرافی بدنه', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی بدنه در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h1-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H1', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H1 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h2-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H2', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H2 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h3-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H3', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H3 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h4-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H4', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H4 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h5-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H5', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H5 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),
          array(
              'id' => 'tek-h6-heading-mobile',
              'type' => 'typography',
              'title' => esc_html__('سربرگ H6', 'sway'),
              'subtitle' => esc_html__('بازنویسی تایپوگرافی H6 در تلفن همراه و رایانه لوحی ', 'sway'),
              'line-height' => true,
              'text-align' => false,
              'text-transform' => false,
              'letter-spacing' => false,
              'font-style' => false,
              'google' => true,
              'font-family' => true,
              'font-weight' => false,
              'color' => false,
              'units' => 'px',
          ),

      )
  ) );

  if (class_exists('WooCommerce')) {

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Shopping-Bag',
        'title' => esc_html__('ووکامرس', 'sway'),
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'iconsmind-Shop-4',
        'title' => esc_html__('صفحه فروشگاه', 'sway'),
        'desc' => esc_html__('تنظیمات کلی صفحه اصلی فروشگاه را ویرایش کنید. استایل کاتالوگ محصول ، محصولات برای نمایش در هر صفحه و تعداد ستون های محصول را انتخاب کنید.', 'sway'),
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'tek-woo-catalog-style',
                'type' => 'button_set',
                'title' => esc_html__('استایل کاتالوگ', 'sway'),
                'subtitle' => esc_html__('استایل قالب باکس محصول را انتخاب کنید', 'sway'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-minimal-style' => 'Minimal',
                    'woo-detailed-style' => 'Detailed',
                ),
                'default' => 'woo-detailed-style'
            ),
            array(
                'id' => 'tek-woo-products-number',
                'type' => 'text',
                'title' => esc_html__('محصول در هر صفحه', 'sway'),
                'subtitle' => esc_html__('تعداد محصولات موجود در هر صفحه را تغییر دهید.', 'sway'),
                'default' => '9',
            ),
            array(
                'id' => 'tek-woo-shop-columns',
                'type' => 'button_set',
                'title' => esc_html__('لایه ی فروشگاه', 'sway'),
                'subtitle' => esc_html__('تعداد ستون های محصول را انتخاب کنید', 'sway'),
                'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
                'options'  => array(
                    'woo-2-columns' => '2 Columns + Sidebar',
                    'woo-3-columns-sidebar' => '3 Columns + Sidebar',
                    'woo-3-columns' => '3 Columns',
                    'woo-4-columns' => '4 Columns',
                ),
                'default' => 'woo-2-columns'
            ),
            array(
                'id' => 'tek-woo-sidebar-position',
                'type' => 'button_set',
                'title' => esc_html__('موقعیت نوار کناری', 'sway'),
                'subtitle' => esc_html__('انتخاب موقعیت نوار کناری', 'sway'),
                'options'  => array(
                    'woo-sidebar-left' => 'Left',
                    'woo-sidebar-right' => 'Right',
                ),
                'required' => array( 'tek-woo-shop-columns', 'equals', array( 'woo-2-columns', 'woo-3-columns-sidebar' ) ),
                'default' => 'woo-sidebar-right'
            ),
            array(
                'id' => 'tek-woo-mini-cart-view-text',
                'type' => 'text',
                'title' => esc_html__('مشاهده ی متن سبد خرید', 'sway'),
                'subtitle' => esc_html__('متن دکمه "مشاهده سبد خرید" را روی ابزارک سبد کوچک بازنویسی کنید.', 'sway'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-checkout-text',
                'type' => 'text',
                'title' => esc_html__('متن سبد خرید', 'sway'),
                'subtitle' => esc_html__('متن دکمه "سبد خرید" را در ابزارک سبد کوچک بازنویسی کنید.', 'sway'),
                'default' => ''
            ),
            array(
                'id' => 'tek-woo-mini-cart-empty-text',
                'type' => 'text',
                'title' => esc_html__('متن برای زمانی که سبد خرید خالی است', 'sway'),
                'subtitle' => esc_html__('متن "سبد خرید شما در حال حاضر خالی است" را بازنویسی کنید. متن بر روی ابزارک سبد خرید', 'sway'),
                'default' => ''
            ),

        )
    ) );

    Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Tag',
        'title' => esc_html__('صفحه محصول', 'sway'),
        'desc' => esc_html__('تنظیمات کلی صفحه تک محصول را ویرایش کنید.', 'sway'),
        'subsection' => true,
        'fields' => array(
          array(
              'id' => 'tek-woo-single-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('ناوبری شفاف', 'sway'),
              'subtitle' => esc_html__('ناوبری شفاف را در صفحات تک محصول فعال یا غیرفعال کنید.', 'sway'),
              'default' => false
          ),
          array(
              'id' => 'tek-woo-single-header',
              'type' => 'switch',
              'title' => esc_html__('نوار عنوان محصول', 'sway'),
              'subtitle' => esc_html__('نوار عنوان را در صفحات تک محصول فعال یا غیرفعال کنید.', 'sway'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-header-text-align',
              'type' => 'button_set',
              'title' => esc_html__('تراز متن نوار عنوان', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-woo-single-header','equals', '1'),
              'subtitle' => esc_html__('تراز متن را در قسمت نوار عنوان انتخاب کنید.', 'sway'),
              'default' => 'product-title-left'
          ),
          array(
              'id' => 'tek-woo-single-sidebar',
              'type' => 'switch',
              'title' => esc_html__('نوار کناری محصول', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن نوار کناری در صفحات تک محصول.', 'sway'),
              'default' => '1',
              '1' => 'Yes',
              '0' => 'No',
          ),
          array(
              'id' => 'tek-woo-single-sidebar-position',
              'type' => 'button_set',
              'title' => esc_html__('موقعیت نوار کناری', 'sway'),
              'subtitle' => esc_html__('موقعیت نوار کناری را انتخاب کنید', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'woo-single-sidebar-left' => 'Left',
                  'woo-single-sidebar-right' => 'Right',
              ),
              'required' => array('tek-woo-single-sidebar','equals','1'),
              'default' => 'woo-single-sidebar-right'
          ),
          array(
              'id' => 'tek-woo-single-image-position',
              'type' => 'button_set',
              'title' => esc_html__('موقعیت تصویر ویژه', 'sway'),
              'subtitle' => esc_html__('موقعیت تصویر محصول را کنترل کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-image-left' => 'Left',
                  'woo-image-right' => 'Right',
              ),
              'default' => 'woo-image-left'
          ),
          array(
              'id' => 'tek-woo-single-gallery',
              'type' => 'button_set',
              'title' => esc_html__('قالب گالری', 'sway'),
              'subtitle' => esc_html__('طرح گالری تصاویر محصول را کنترل کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options' => array(
                  'woo-gallery-thumbnails' => 'Thumbnails',
                  'woo-gallery-list' => 'List',
              ),
              'default' => 'woo-gallery-thumbnails'
          ),
          array(
              'id' => 'tek-woo-single-social-icons',
              'type' => 'switch',
              'title' => esc_html__('دکمه اشتراک در شبکه های اجتماعی', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن دکمه های اشتراک گذاری در شبکه های اجتماعی برای صفحات تک محصول.', 'sway'),
              'default' => true
          ),
        )
    ) );
  }

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Photos',
      'title' => esc_html__('نمونه کارها', 'sway'),
      'desc' => esc_html__('تنظیمات صفحه نمونه کارها را ویرایش کنید', 'sway'),
      'fields' => array(
        array(
            'id'=>'tek-portfolio-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('تنظیمات عمومی', 'sway'),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-cpt',
            'type' => 'switch',
            'title' => esc_html__('فعال کردن نمونه کارها', 'sway'),
            'subtitle' => esc_html__('فعال کردن/غیرفعال کردن نوع پست سفارشی نمونه کارها. برای اعمال تغییرات ، صفحه را بازخوانی کنید.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-slug',
            'type' => 'text',
            'title' => esc_html__('اسلاگ نمونه کارها', 'sway'),
            'subtitle' => __('بازنویسی اسلاگ اصلی نمونه کارها: domain.com/<strong>portfolio</strong>/portfolio-item-slug', 'sway'),
            'desc' => __('<strong>توجه:</strong> هنگامی که این تنظیم را تغییر می دهید لازم است <a href="https://www.swaytheme.com/documentation/knowledge-base/flush-rewrite-rules/" target="_blank">قوانین بازنویسی سریع</a>.', 'sway'),
            'default' => '',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
        ),
        array(
            'id'=>'tek-portfolio-settings-section-end',
            'type' => 'section',
            'indent' => false,
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-start',
            'type' => 'section',
            'title' => esc_html__('تنظیمات نمونه کارها صفحه تک', 'sway'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => true,
        ),
        array(
            'id' => 'tek-portfolio-single-nav',
            'type' => 'switch',
            'title' => esc_html__('پجینیشن قبل/بعد', 'sway'),
            'subtitle' => esc_html__('صفحه بندی نمونه کارها قبلی/بعدی را فعال/غیرفعال کنید. بخش صفحه بندی در زیر محتوا نمایش داده می شود.', 'sway'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => false,
        ),
        array(
            'id' => 'tek-portfolio-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('ناوبری "قبلی" متن پیوند', 'sway'),
            'subtitle' => esc_html__('متن "قبلی" را در پیمایش صفحات نمونه کارها بازنویسی کنید.', 'sway'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('ناوبری "بعدی" متن پیوند', 'sway'),
            'subtitle' => esc_html__('متن "بعدی" را در پیمایش صفحات نمونه کارها بازنویسی کنید.', 'sway'),
            'default' => '',
            'required' => array(
              'tek-portfolio-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts',
            'type' => 'switch',
            'title' => esc_html__('موارد نمونه کارهای اخیر', 'sway'),
            'subtitle' => esc_html__('فعال کردن/غیرفعال کردن موارد مربوط به نمونه کارها در صفحات نمونه کارها.', 'sway'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => true
        ),
        array(
            'id' => 'tek-portfolio-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('عنوان بخش نمونه کارها مرتبط', 'sway'),
            'subtitle' => esc_html__('عنوان بخش نمونه کارها را ویرایش کنید.', 'sway'),
            'default' => 'Related projects',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-number',
            'type' => 'slider',
            'title' => esc_html__( 'تعداد موارد مربوط به نمونه کارها', 'sway' ),
            'subtitle' => esc_html__( 'تعداد موارد مربوط به نمونه کارها را انتخاب کنید.', 'sway' ),
            'default' => 3,
            'max' => 20,
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-related-posts-button-text',
            'type' => 'text',
            'title' => esc_html__('متن پیوند نمونه کارها', 'sway'),
            'subtitle' => esc_html__('متن دکمه موارد مربوط به نمونه کارها را ویرایش کنید. پیش فرض روی "مشاهده پروژه" تنظیم شده است.', 'sway'),
            'default' => 'View project',
            'required' => array(
              'tek-portfolio-related-posts',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-portfolio-comments',
            'type' => 'switch',
            'title' => esc_html__('بخش نظرات', 'sway'),
            'subtitle' => esc_html__('بخش نظرات زیر محتوا را فعال/غیرفعال کنید.', 'sway'),
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'default' => false
        ),
        array(
            'id'=>'tek-portfolio-single-page-settings-section-end',
            'type' => 'section',
            'required' => array( 'tek-portfolio-cpt', 'equals', true ),
            'indent' => false,
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Newspaper',
      'title' => esc_html__('وبلاگ', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Notepad',
      'title' => esc_html__('تنظیمات وبلاگ', 'sway'),
      'desc' => esc_html__('صفحه پست های وبلاگ را ویرایش کنید و تنظیمات کلی را بایگانی کنید', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-blog-settings-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات عمومی', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('ناوبری شفاف', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن ناوبری شفاف در صفحه پست های وبلاگ.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-header-template',
              'type' => 'button_set',
              'title' => esc_html__('قالب سربرگ وبلاگ', 'sway'),
              'subtitle' => esc_html__(' استایل قالب سربرگ وبلاگ را انتخاب کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-header-titlebar' => 'Title bar',
                  'blog-header-revslider' => 'Revolution slider',
              ),
              'default' => 'blog-header-titlebar'
          ),
          array(
              'id' => 'tek-blog-template',
              'type' => 'button_set',
              'title' => esc_html__('قالب مقالات وبلاگ', 'sway'),
              'subtitle' => esc_html__('استایل قالب مقالات وبلاگ را انتخاب کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'img-top-list' => 'List top image',
                  'img-left-list' => 'List left image',
                  'minimal-list' => 'List minimal',
                  'minimal-grid' => 'Grid minimal',
                  'detailed-grid' => 'Grid detailed',
              ),
              'default' => 'img-top-list'
          ),
          array(
              'id' => 'tek-blog-sidebar',
              'type' => 'switch',
              'title' => esc_html__('نمایش نوارکناری', 'sway'),
              'subtitle' => esc_html__('فعال کردن نمایش نوار کناری وبلاگ', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-listing-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('نوارکناری چسبنده', 'sway'),
              'subtitle' => esc_html__('نوار کناری چسبنده را برای صفحه پست های وبلاگ فعال کنید.', 'sway'),
              'default' => false,
              'required' => array(
                  'tek-blog-sidebar',
                  'equals',
                  true
              ),
          ),
          array(
              'id' => 'tek-blog-excerpt',
              'type' => 'text',
              'title' => esc_html__('طول گزیده پست وبلاگ', 'sway'),
              'subtitle' => esc_html__('طول مقاله را در صفحه وبلاگ ویرایش کنید.', 'sway'),
              'default' => '20'
          ),
          array(
              'id' => 'tek-blog-read-more-text',
              'type' => 'text',
              'title' => esc_html__('متن ادامه مطلب', 'sway'),
              'subtitle' => esc_html__('متن "بیشتر بخوانید" را در مقالات وبلاگ بازنویسی کنید.', 'sway'),
              'desc' => esc_html__('تنظیمات متن ادامه مطلب را با صفحه وبلاگ اختصاص داده شده در "تنظیمات" جایگزین می کند > خواندن "و بایگانی وبلاگ ، نه عنصر وبلاگ.', 'sway'),
              'default' => ''
          ),
          array(
              'id'=>'tek-blog-settings-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-blog-title-section-start',
              'type' => 'section',
              'title' => esc_html__('نوار عنوان سربرگ وبلاگ', 'sway'),
              'indent' => true,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
          array(
              'id' => 'tek-blog-title-switch',
              'type' => 'switch',
              'title' => esc_html__('عنوان صفحه وبلاگ', 'sway'),
              'subtitle' => esc_html__('عنوان صفحه وبلاگ اختصاص داده شده را فعال/غیرفعال کنید.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-subtitle',
              'type' => 'text',
              'title' => esc_html__('زیرنویس صفحه وبلاگ', 'sway'),
              'subtitle' => esc_html__('متن زیرنویس را که در نوار عنوان صفحه وبلاگ اختصاصی نمایش داده می شود ، اضافه کنید.', 'sway'),
              'default' => 'This is where you can find the latest news and insights about Sway — new products, in-depth interviews and successfully finished projects. Never miss a beat.'
          ),
          array(
              'id' => 'tek-blog-header-text-align',
              'type' => 'button_set',
              'title' => esc_html__('تراز متن نوار عنوان', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'blog-title-left' => 'Left',
                  'blog-title-center' => 'Center',
              ),
              'required' => array('tek-blog-title-switch','equals', true),
              'subtitle' => esc_html__('تراز متن را در قسمت نوار عنوان انتخاب کنید.', 'sway'),
              'default' => 'blog-title-center'
          ),
          array(
              'id' => 'tek-blog-titlebar-background',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ پس زمینه نوار عنوان', 'sway'),
              'default' => '',
              'subtitle' => esc_html__('از این انتخاب کننده رنگ برای نادیده گرفتن رنگ پیش فرض نوار عنوان استفاده کنید.', 'sway'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-text-color',
              'type' => 'color',
              'transparent' => false,
              'title' => esc_html__('رنگ متن نوار عنوان', 'sway'),
              'default' => '',
              'subtitle' => esc_html__('از این انتخاب کننده رنگ برای نادیده گرفتن رنگ متن پیش فرض نوار عنوان استفاده کنید.', 'sway'),
              'validate' => 'color'
          ),
          array(
              'id' => 'tek-blog-featured-background-size',
              'type' => 'button_set',
              'title' => esc_html__('اندازه تصویر پس زمینه عنوان وبلاگ', 'sway'),
              'subtitle' => esc_html__('اندازه تصویر سربرگ وبلاگ را کنترل می کند. این گزینه با تصویر ویژه وبلاگ استفاده می شود.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'auto' => 'Auto',
                  'contain' => 'Contain',
                  'cover' => 'Cover',
              ),
              'default' => 'auto'
          ),
          array(
              'id' => 'tek-blog-featured-background-position',
              'type' => 'button_set',
              'title' => esc_html__('موقعیت تصویر پس زمینه سربرگ وبلاگ', 'sway'),
              'subtitle' => esc_html__('موقعیت تصویر سربرگ وبلاگ را کنترل کنید. این گزینه با تصویر ویژه وبلاگ استفاده می شود.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'center' => 'Center',
                  'top' => 'Top',
                  'right' => 'Right',
                  'bottom' => 'Bottom',
                  'left' => 'Left',
              ),
              'default' => 'bottom'
          ),
          array(
              'id'=>'tek-blog-title-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-blog-header-template','equals','blog-header-titlebar'),
          ),
          array(
              'id'=>'tek-blog-revslider-section-start',
              'type' => 'section',
              'title' => esc_html__('اسلایدر روولوشن سربرگ وبلاگ', 'sway'),
              'indent' => true,
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
          ),
          array(
              'id' => 'tek-blog-header-slider-alias',
              'type' => 'text',
              'title' => esc_html__('نام مستعار اسلایدر روولوشن', 'sway'),
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
              'default' => ''
          ),
          array(
              'id'=>'tek-blog-revslider-section-end',
              'type' => 'section',
              'indent' => false,
              'required' => array('tek-blog-header-template','equals','blog-header-revslider'),
          ),
          array(
              'id'=>'tek-blog-subscribe-form-section-start',
              'type' => 'section',
              'title' => esc_html__('فرم عضویت در خبرنامه وبلاگ', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-subscribe-section-switch',
              'type' => 'switch',
              'title' => esc_html__('بخش عضویت در خبرنامه', 'sway'),
              'subtitle' => esc_html__('بخش فرم اشتراک را فعال/غیرفعال کنید. این فرم در فهرست وبلاگ و پست های وبلاگ واحد در قسمت پاورقی نمایش داده می شود.', 'sway'),
              'default' => false
          ),
          array(
              'id' => 'tek-blog-subscribe-section-show',
              'type' => 'button_set',
              'title' => esc_html__('اشتراک در بخش مشاهده', 'sway'),
              'subtitle' => esc_html__('در کدام صفحات فرم اشتراک را نشان دهید ، انتخاب کنید.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'all-blog-pages' => 'All blog pages',
                  'archive-pages' => 'Blog archive pages',
                  'blog-single-pages' => 'Blog single pages',
              ),
              'required' => array('tek-blog-subscribe-section-switch','equals', true),
              'default' => 'all-blog-pages'
          ),
          array(
              'id' => 'tek-blog-subscribe-section-title',
              'type' => 'text',
              'title' => esc_html__('بخش عنوان فرم عضویت', 'sway'),
              'subtitle' => esc_html__('عنوان قسمت اشتراک را اضافه کنید.', 'sway'),
              'required' => array('tek-blog-subscribe-section-switch','equals', true),
              'default' => 'Subscribe to our newsletter'
          ),
          array(
              'id' => 'tek-blog-subscribe-section-subtitle',
              'type' => 'editor',
              'title' => esc_html__('زیرنویس بخش عضویت', 'sway'),
              'subtitle' => esc_html__('زیرنویس بخش اشتراک را اضافه کنید.', 'sway'),
              'default' => '',
              'args' => array(
                  'teeny' => true,
                  'textarea_rows' => 3,
                  'media_buttons' => false,
              ),
              'required' => array('tek-blog-subscribe-section-switch','equals', true),
          ),
          array(
              'id' => 'tek-blog-subscribe-section-form-id',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('عنوان بخش فرم عضویت', 'sway'),
              'subtitle' => esc_html__('فرم تماس 7 را انتخاب کنید تا به عنوان فرم خبرنامه استفاده شود.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'required' => array('tek-blog-subscribe-section-switch','equals', true),
          ),
          array(
              'id' => 'tek-blog-subscribe-section-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('تصویر پس زمینه بخش عضویت', 'sway'),
              'subtitle' => esc_html__('بارگذاری تصویر پس زمینه', 'sway'),
              'required' => array('tek-blog-subscribe-section-switch','equals', true),
              'default' => '',
          ),
          array(
              'id'=>'tek-blog-subscribe-form-section-end',
              'type' => 'section',
              'indent' => false,
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Pen',
      'title' => esc_html__('جزئیات پست', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی پست های وبلاگ واحد را ویرایش کنید', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-single-post-template',
            'type' => 'button_set',
            'title' => esc_html__('قالب جزئیات پست ها', 'sway'),
            'subtitle' => esc_html__('استایل قالب جزئیات پست را انتخاب کنید.', 'sway'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'single-post-layout-one' => 'Classic',
                'single-post-layout-two' => 'Modern',
            ),
            'default' => 'single-post-layout-one'
        ),
        array(
            'id' => 'tek-blog-single-sidebar',
            'type' => 'switch',
            'title' => esc_html__('نمایش نوار کناری', 'sway'),
            'subtitle' => esc_html__('نوار کناریجزئیات پست را فعال/غیرفعال کنید.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-sticky-sidebar',
            'type' => 'switch',
            'title' => esc_html__('نوارکناری چسبنده', 'sway'),
            'subtitle' => esc_html__('نوار کناری چسبنده را برای جزئیات پست های وبلاگ فعال کنید.', 'sway'),
            'default' => true,
            'required' => array(
                'tek-blog-single-sidebar',
                'equals',
                true
            ),
        ),
        array(
          'id'       => 'tek-blog-social-sharing-buttons',
          'type'     => 'checkbox',
          'title'    => __('دکمه های اشتراک در شبکه های اجتماعی', 'sway'),
          'subtitle' => __('دکمه های اشتراک گذاری در شبکه های اجتماعی قابل مشاهده در یک پست را انتخاب کنید', 'sway'),
          'options'  => array(
              '1' => 'Facebook',
              '2' => 'Twitter',
              '3' => 'Pinterest',
              '4' => 'LinkedIn'
          ),
          'default' => array(
              '1' => '1',
              '2' => '1',
              '3' => '1',
              '4' => '1'
          ),
        ),
        array(
            'id' => 'tek-author-box',
            'type' => 'switch',
            'title' => esc_html__('باکس نویسنده', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن باکس نویسنده در زیر محتوای پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-single-nav',
            'type' => 'switch',
            'title' => esc_html__('پجینیشن قبل/بعد', 'sway'),
            'subtitle' => esc_html__('صفحه بندی (پجینیشن) پست قبلی/بعدی را برای جزئیات پست ها فعال/غیرفعال کنید.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-blog-single-nav-prev-text',
            'type' => 'text',
            'title' => esc_html__('ناوبری متن "قبلی"', 'sway'),
            'subtitle' => esc_html__('متن «قبلی» را در ناوبری پست وبلاگ بازنویسی کنید.', 'sway'),
            'default' => '',
            'required' => array(
              'tek-blog-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-blog-single-nav-next-text',
            'type' => 'text',
            'title' => esc_html__('ناوبری متن "بعدی"', 'sway'),
            'subtitle' => esc_html__('بازنویسی متن "بعدی" در پیمایش پست وبلاگ جزئیات وبلاگ.', 'sway'),
            'default' => '',
            'required' => array(
              'tek-blog-single-nav',
              'equals',
              true
            ),
        ),
        array(
            'id' => 'tek-related-posts',
            'type' => 'switch',
            'title' => esc_html__('پست های اخیر', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن پست های مرتبط در صفحات جزئیات پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-related-posts-title',
            'type' => 'text',
            'title' => esc_html__('عنوان پست های اخیر', 'sway'),
            'default' => 'Related articles',
            'required' => array(
                      'tek-related-posts',
                      'equals',
                      true
                  ),
        ),
        array(
            'id' => 'tek-related-posts-number',
            'type' => 'slider',
            'title'    => esc_html__( 'تعداد پست های اخیر', 'sway' ),
            'subtitle' => esc_html__( 'تعداد پست هایی را که در قسمت پست های مرتبط نمایش داده می شوند ، کنترل می کند.', 'sway' ),
            'default'  => 3,
            'max'      => 20,
            'required' => array(
                'tek-related-posts',
                'equals',
                true
            ),
          ),
          array(
              'id'=>'tek-blog-reading-bar-section-start',
              'type' => 'section',
              'title' => esc_html__('نوار خواندن', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-blog-rebar',
              'type' => 'switch',
              'title' => esc_html__('نوار خواندن', 'sway'),
              'subtitle' => esc_html__('نوار پیشرفت خواندن را فعال/غیرفعال کنید. هنگامی که پست را می خوانید یا صفحه را اسکرول می کنید ، نوار پیشرفت با رنگ پر می شود.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-blog-rebar-position',
              'type' => 'button_set',
              'title' => esc_html__('موقعیت برای نوار خواندن', 'sway'),
              'subtitle' => esc_html__('انتخاب موقعیت نوار خواندن', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'position-top' => 'Top',
                  'position-bottom' => 'Bottom',
              ),
              'default' => 'position-top',
              'required' => array(
                'tek-blog-rebar',
                'equals',
                true
              ),
          ),
          array(
            'id' => 'tek-blog-rebar-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('رنگ نوار خواندن', 'sway'),
            'default' => '#777AF2',
            'subtitle' => esc_html__('رنگ پس زمینه را انتخاب کنید تا نوار پیشرفت پر شود.', 'sway'),
            'validate' => 'color',
            'required' => array(
              'tek-blog-rebar',
              'equals',
              true
            ),
          ),
          array(
              'id' => 'tek-blog-rebar-height',
              'type' => 'slider',
              'title' => esc_html__( 'ارتفاع نوار خواندن', 'sway' ),
              'subtitle' => esc_html__( 'ارتفاع نوار خواندن پیشرفت را انتخاب کنید.', 'sway' ),
              'default' => 5,
              'max' => 10,
              'required' => array(
                'tek-blog-rebar',
                'equals',
                true
              ),
          ),
          array(
              'id'=>'tek-blog-reading-bar-section-end',
              'type' => 'section',
              'indent' => false,
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Bookmark',
      'title' => esc_html__('متا وبلاگ', 'sway'),
      'desc' => esc_html__('تنظیمات موجود با این صفحه اصلی وبلاگ ، صفحه جزئیات پست وبلاگ و صفحات بایگانی وبلاگ را کنترل می کند. این تنظیمات تنظیمات عنصر پست شبکه ای یا پست ماسونری را بازنویسی نمی کنند.', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-post-meta',
            'type' => 'switch',
            'title' => esc_html__('متا پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن متا پست در پست های وبلاگ. همچنین می توانید تنظیمات متای فردی را در زیر کنترل کنید.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-date',
            'type' => 'switch',
            'title' => esc_html__('تاریخ متا پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن تاریخ متا پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-author',
            'type' => 'switch',
            'title' => esc_html__('متا نویسنده پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن متا نویسنده پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-categories',
            'type' => 'switch',
            'title' => esc_html__('متا دسته بندی های پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن دسته های متا پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-comments',
            'type' => 'switch',
            'title' => esc_html__('متا نظرات پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن نظرات متا پست.', 'sway'),
            'default' => true
        ),
        array(
            'id' => 'tek-post-meta-tags',
            'type' => 'switch',
            'title' => esc_html__('متا برچسب های پست', 'sway'),
            'subtitle' => esc_html__('فعال/غیرفعال کردن متا تگ های پست.', 'sway'),
            'default' => true
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Duplicate-Layer',
      'title' => esc_html__('عناصر', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Pencil-Ruler',
      'title' => esc_html__('تنظیمات عمومی', 'sway'),
      'desc' => esc_html__('عناصر تنظیمات کلی که در سراسر سایت اعمال می شوند.', 'sway'),
      'subsection' => true,
      'fields' => array(

          array(
              'id' => 'tek-global-radius',
              'type' => 'spinner',
              'title' => esc_html__('خمیدگی گوشه ها', 'sway'),
              'subtitle' => esc_html__('شعاع حاشیه را برای همه عناصر ویرایش کنید. مقدار پیکسل', 'sway'),
              'min' => 0,
              'max' => 25,
              'default' => 5,
          ),

          array(
              'id' => 'tek-cards-border-radius',
              'type' => 'spinner',
              'title' => esc_html__('خمیدگی حاشیه  ی کارت ها', 'sway'),
              'subtitle' => esc_html__('خمیدگی حاشیه را برای عناصر کارت ویرایش کنید. مقدار پیکسل', 'sway'),
              'min' => 0,
              'max' => 25,
              'default' => 5,
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-On-off',
      'title' => esc_html__('دکمه', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی دکمه', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-button-typo',
            'type' => 'typography',
            'title' => esc_html__('تایپوگرافی دکمه', 'sway'),
            'subtitle' => esc_html__('تایپوگرافی همه دکمه ها را کنترل کنید.', 'sway'),
            'line-height' => true,
            'text-align' => false,
            'color' => true,
            'text-transform' => true,
            'letter-spacing' => true,
            'units' => 'px',
            'default' => array(
              'font-size' => '16px',
              'line-height' => '17px',
              'letter-spacing' => '',
            ),
        ),

        array(
            'id' => 'tek-btn-border',
            'type' => 'spinner',
            'title'   => esc_html__('عرض حاشیه دکمه ها', 'sway'),
            'subtitle' => esc_html__('عرض حاشیه دکمه ها را کنترل کنید. مقدار پیکسل', 'sway'),
            'min' => 0,
            'max' => 10,
            'default' => 1,
        ),

        array(
            'id' => 'tek-btn-radius',
            'type' => 'spinner',
            'title' => esc_html__('شعاع حاشیه دکمه', 'sway'),
            'subtitle' => esc_html__('شعاع حاشیه دکمه ها را کنترل کنید. مقدار پیکسل', 'sway'),
            'min' => 0,
            'max' => 100,
            'default' => 5,
        ),

        array(
            'id' => 'tek-btn-padding',
            'type' => 'spacing',
            'mode' => 'padding',
            'units' => array('em', 'px'),
            'title' => esc_html__('پدینگ باکس دکمه (حاشیه ی داخلی)', 'sway'),
            'subtitle' => esc_html__('سطح بالایی/راست/پایین/چپ عنصر دکمه را کنترل می کند.', 'sway'),
        ),

        array(
            'id' => 'tek-btn-effect',
            'type' => 'button_set',
            'title' => esc_html__('افکت شناور (هاور) دکمه', 'sway'),
            'subtitle' => esc_html__('انتخاب افکت شناور (هاور) دکمه', 'sway'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                '' => 'Default',
                'btn-hover-1' => 'Shadow effect',
                'btn-hover-2' => 'Sweep to right',
            ),
            'default' => 'btn-hover-2'
        ),

        array(
            'id' => 'tek-btn-shadow',
            'type' => 'button_set',
            'title' => esc_html__('سایه ی دکمه', 'sway'),
            'subtitle' => esc_html__('انتخاب کنید تا جلوه سایه روی دکمه ها فعال شود.', 'sway'),
            'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
            'options'  => array(
                'shadow-on' => 'On',
                'shadow-off' => 'Off',
            ),
            'default' => 'shadow-off'
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Envelope',
      'title' => esc_html__('فرم تماس', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی فرم ها', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
            'id' => 'tek-contact-form-typo',
            'type' => 'typography',
            'title' => esc_html__('تایپوگرافی فرم', 'sway'),
            'subtitle' => esc_html__('تایپوگرافی فیلدهای فرم را کنترل کنید.', 'sway'),
            'google' => true,
            'font-family' => true,
            'font-style' => true,
            'font-size' => true,
            'line-height' => false,
            'color' => true,
            'text-align' => false,
            'text-transform' => true,
            'all_styles' => false,
            'units' => 'px',
        ),
        array(
          'id' => 'tek-contact-form-bg-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('رنگ پس زمینه فرم', 'sway'),
          'subtitle' => esc_html__('رنگ زمینه زمینه های فرم را کنترل می کند.', 'sway'),
          'default' => '',
          'validate' => 'color'
        ),
        array(
          'id' => 'tek-contact-form-placeholder-color',
          'type' => 'color',
          'transparent' => false,
          'title' => esc_html__('رنگ متن نگهدارنده ی فرم', 'sway'),
          'subtitle' => esc_html__('کنترل رنگ متن نگهدارنده  ی فیلد فرم', 'sway'),
          'default' => '',
          'validate' => 'color'
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Speach-BubbleAsking',
      'title' => esc_html__('سوالات متداول', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی سوالات متداول', 'sway'),
      'subsection' => true,
      'fields' => array(
        array(
          'id' => 'tek-faq-collapsible',
          'type' => 'switch',
          'title' => esc_html__('Auto collapse', 'sway'),
          'subtitle' => esc_html__('هنگام کلیک روی عنصر دیگری از همان نوع ، Auto collapse سوالات متداول را افزایش می دهد. فقط یک مورد در هر نقطه توسعه یافته باقی می ماند.', 'sway'),
          'default' => false
        ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Repair',
      'title' => esc_html__('صفحات مفید', 'sway'),
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-File-Search',
      'title' => esc_html__('صفحه ی جستجو', 'sway'),
      'desc' => esc_html__('تنظیمات عمومی صفحه ی جستجو', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id'=>'tek-search-page-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات عمومی صفحه ی جستجو', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-transparent-nav',
              'type' => 'switch',
              'title' => esc_html__('ناوبری شفاف', 'sway'),
              'subtitle' => esc_html__('ناوبری شفاف را در صفحه جستجو فعال/غیرفعال کنید', 'sway'),
              'default' => false
          ),
          array(
              'id' => 'tek-search-sidebar',
              'type' => 'switch',
              'title' => esc_html__('نمایش نوار کناری', 'sway'),
              'subtitle' => esc_html__('نوار کناری صفحه را فعال/غیرفعال کنید.', 'sway'),
              'default' => true
          ),
          array(
              'id' => 'tek-search-sticky-sidebar',
              'type' => 'switch',
              'title' => esc_html__('نوارکناری چسبنده', 'sway'),
              'subtitle' => esc_html__('قابلیت نوار کناری چسبنده را فعال/غیرفعال کنید.', 'sway'),
              'default' => true,
              'required' => array(
                  'tek-search-sidebar',
                  'equals',
                  true
              ),
          ),
          array(
              'id' => 'tek-search-title',
              'type' => 'text',
              'title' => esc_html__('عنوان صفحه', 'sway'),
              'subtitle' => esc_html__('عنوان صفحه "نتایج جستجو" را بازنویسی کنید.', 'sway'),
              'default' => ''
          ),
          array(
              'id'=>'tek-search-page-section-end',
              'type' => 'section',
              'indent' => false,
          ),
          array(
              'id'=>'tek-search-form-section-start',
              'type' => 'section',
              'title' => esc_html__('تنظیمات فرم جستجو', 'sway'),
              'indent' => true,
          ),
          array(
              'id' => 'tek-search-form-content',
              'type' => 'button_set',
              'title' => esc_html__('محتوای نتیجه ی جستجو', 'sway'),
              'subtitle' => esc_html__('نوع محتوایی را که در نتایج جستجو نمایش داده می شود انتخاب کنید.', 'sway'),
              'description' => esc_html__('تنظیمات مورد استفاده برای فرم نمایش داده شده در نوار بالای صفحه یا منوی اصلی.', 'sway'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  'search-all' => 'All post types',
                  'post' => 'Posts',
                  'portfolio' => 'Portfolio',
                  'product' => 'Products',
              ),
              'default' => 'search-all',
          ),
          array(
              'id'=>'tek-search-form-section-end',
              'type' => 'section',
              'indent' => false,
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Error-404Window',
      'title' => esc_html__('صفحه ی 404', 'sway'),
      'desc' => esc_html__('تنظیمات صفحه ی 404', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-404-title',
              'type' => 'text',
              'title' => esc_html__('عنوان صفحه', 'sway'),
              'subtitle' => esc_html__('تنظیم عنوان صفحه ی 404', 'sway'),
              'default' => '404 - Page Not Found'
          ),
          array(
              'id' => 'tek-404-subtitle',
              'type' => 'text',
              'title' => esc_html__('زیرنویس صفحه', 'sway'),
              'subtitle' => esc_html__('تنظیم زیرنویس صفحه ی 404', 'sway'),
              'default' => 'The page you are looking for does not exist.'
          ),
          array(
              'id' => 'tek-404-back',
              'type' => 'text',
              'title' => esc_html__('متن دکمه بازگشت به خانه', 'sway'),
              'subtitle' => esc_html__('تنظیم متن دکمه بازگشت به خانه', 'sway'),
              'default' => 'Back to homepage'
          ),
          array(
              'id' => 'tek-404-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('تصویر 404', 'sway'),
              'subtitle' => esc_html__('بارگذاری تصویر سفارشی 404', 'sway'),
          ),
      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Lock-2',
      'title' => esc_html__('صفحه ی تعمیر و نگهداری', 'sway'),
      'desc' => esc_html__('حالت تعمیر و نگهداری فقط برای کاربرانی که وارد سیستم نشده اند فعال می شود.', 'sway'),
      'subsection' => true,
      'fields' => array(
          array(
              'id' => 'tek-maintenance-mode',
              'type' => 'switch',
              'title' => esc_html__('فعال کردن حالت تعمیر و نگهداری', 'sway'),
              'subtitle' => esc_html__('فعال / غیر فعال کردن حالت تعمیر و نگهداری', 'sway'),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-title',
              'type' => 'text',
              'title' => esc_html__('عنوان صفحه', 'sway'),
              'subtitle' => esc_html__('عنوان صفحه تعمیر و نگهداری را ویرایش کنید ', 'sway'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => 'Sway is in the works!'
          ),
          array(
              'id' => 'tek-maintenance-content',
              'type' => 'editor',
              'title' => esc_html__('محتوای صفحه', 'sway'),
              'subtitle' => esc_html__('محتوای صفحه تعمیر و نگهداری را ویرایش کنید ', 'sway'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
              'args'   => array(
                'teeny'  => true,
                'textarea_rows' => 10,
                'media_buttons' => false,
              ),
          ),

          array(
              'id' => 'tek-maintenance-bg-image',
              'type' => 'media',
              'readonly' => false,
              'url' => true,
              'title' => esc_html__('تصویر پس زمینه صفحه', 'sway'),
              'subtitle' => esc_html__('بارگذاری تصویر پس زمینه صفحه', 'sway'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => '',
          ),

          array(
            'id' => 'tek-maintenance-text-color',
            'type' => 'color',
            'transparent' => false,
            'title' => esc_html__('رنگ متن', 'sway'),
            'subtitle' => esc_html__('بازنویسی رنگ متن اگر هیچ کدام انتخاب نشده باشد ، از رنگ تم پیش فرض استفاده می شود.', 'sway'),
            'required' => array('tek-maintenance-mode','equals', true),
            'default' => '',
            'validate' => 'color'
          ),

          array(
              'id' => 'tek-maintenance-countdown',
              'type' => 'switch',
              'title' => esc_html__('فعال کردن شمارش معکوس', 'sway'),
              'subtitle' => esc_html__('فعال/غیرفعال کردن تایمر شمارش معکوس', 'sway'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-count-day',
              'type' => 'text',
              'title' => esc_html__('روز پایان', 'sway'),
              'subtitle' => esc_html__('روز پایان کار را وارد کنید ، مثال : 5 روز دیگر', 'sway'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-month',
              'type' => 'text',
              'title' => esc_html__('ماه پایانی', 'sway'),
              'subtitle' => esc_html__('ماه پایانی را وارد کنید ، مثال : 1 ماه دیگر یا ماه خرداد', 'sway'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-count-year',
              'type' => 'text',
              'title' => esc_html__('End Year', 'sway'),
              'subtitle' => esc_html__('سال پایان را انتخاب کنید ، مثال : 1400', 'sway'),
              'required' => array('tek-maintenance-countdown','equals', true),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-subscribe',
              'type' => 'switch',
              'title' => esc_html__('فعال کردن فرم تماس', 'sway'),
              'subtitle' => esc_html__('فعال / غیرفعال کردن فرم تماس برای این صفحه', 'sway'),
              'required' => array('tek-maintenance-mode','equals', true),
              'default' => false
          ),
          array(
              'id' => 'tek-maintenance-form-select',
              'type' => 'select',
              'title' => esc_html__('افزونه ی فرم تماس', 'sway'),
              'required' => array('tek-maintenance-subscribe','equals',true),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'options'  => array(
                  '1' => 'Contact Form 7',
                  '2' => 'Ninja Forms',
                  '3' => 'Gravity Forms',
                  '4' => 'WP Forms',
                  '5' => 'Other',
              ),
              'default' => '1'
          ),
          array(
              'id' => 'tek-maintenance-contactf7-formid',
              'type' => 'select',
              'data' => 'posts',
              'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
              'title' => esc_html__('عنوان فرم تماس', 'sway'),
              'required' => array('tek-maintenance-form-select','equals','1'),
              'select2' => array('allowClear' => false, 'minimumResultsForSearch' => '-1'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-ninja-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Ninja Form', 'sway'),
              'required' => array('tek-maintenance-form-select','equals','2'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-gravity-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه Gravity Form', 'sway'),
              'required' => array('tek-maintenance-form-select','equals','3'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-wp-formid',
              'type' => 'text',
              'title' => esc_html__('شناسه WP Form', 'sway'),
              'required' => array('tek-maintenance-form-select','equals','4'),
              'default' => ''
          ),
          array(
              'id' => 'tek-maintenance-other-form-shortcode',
              'type' => 'text',
              'title' => esc_html__('کدکوتاه (شورتکد) فرم', 'sway'),
              'subtitle' => esc_html__('کد کوتاه افزونه فرم تماس سفارشی را وارد کنید.', 'sway'),
              'required' => array('tek-maintenance-form-select','equals','5'),
              'default' => ''
          ),

      )
  ) );

  Redux::setSection( $opt_name, array(
      'icon' => 'iconsmind-Coding',
      'title' => esc_html__('CSS/JS سفارشی', 'sway'),
      'fields' => array(
          array(
              'id' => 'tek-css',
              'type' => 'ace_editor',
              'title' => esc_html__('CSS', 'sway'),
              'subtitle' => esc_html__('کد CSS سفارشی را در قسمت جانبی وارد کنید. هیچ برچسب یا HTML را در این زمینه وارد نکنید. CSS سفارشی که در اینجا اضافه شده است ، موضوع CSS را بازنویسی می کند.', 'sway'),
              'mode' => 'css',
              'theme' => 'chrome',
          ),
          array(
                  'id' => 'tek-javascript',
                  'type' => 'ace_editor',
                  'title' => esc_html__( 'جاوا اسکریپت', 'sway' ),
                  'subtitle' => esc_html__( 'کد جاوا اسکریپت سفارشی را در قسمت جانبی وارد کنید.', 'sway' ),
                  'mode' => 'html',
                  'theme' => 'chrome',
              ),
      )
  ) );
