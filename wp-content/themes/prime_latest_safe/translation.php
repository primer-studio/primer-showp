<?php
    function __translate_array($lang, $string, $before = null, $after = null) {
        $fa = [
            'tag' => 'برچسب',
            'tags' => 'برچسب‌ها',
            'category' => 'دسته‌بندی',
            'categories' => 'دسته‌بندی‌ها',
            'no products found.' => 'محصولی یافت نشد.',
            'product out of stock.' => 'محصول موجود نمی‌باشد.',
        ];
        echo $before . $$lang[$string] . $after;
    }