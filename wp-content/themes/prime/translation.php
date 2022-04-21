<?php
    function __translate_array($lang, $string, $before = null, $after = null) {
        $fa = [
            'close' => 'بستن',
            'tag' => 'برچسب',
            'tags' => 'برچسب‌ها',
            'category' => 'دسته‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'no products found.' => 'محصولی یافت نشد.',
            'product out of stock.' => 'محصول موجود نمی‌باشد.',
            'shopping_cart' => 'سبد خرید',
            'added to cart.' => 'به سبد خرید اضافه شد.',
            'your cart is empty.' => 'سبد خرید شما خالی می‌باشد.',
            'factor final price: ' => 'قابل پرداخت:',
        ];
        echo $before . $$lang[$string] . $after;
    }