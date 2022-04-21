<?php

if (!defined('ABSPATH')) {
    exit;
}

//do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

//$ipg = WC()->payment_gateways();
//die(var_dump($ipg));

get_header();
?>
<main>
    <div id="main-wrapper" class="wrapper">
        <div class="data-entry-wrapper">
            <?php
//                $wc = New WC_Checkout();
            ?>
            <div class="data-entry-right">
                <div class="input-wrappers">
                    <form name="checkout" id="checkout" method="post" class="checkout woocommerce-checkout"
                          action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
                        <div class="form-row-double">
                            <div class="form-row">
                                <label for="name">
                                    نام
                                </label>
                                <input required type="text" name="billing_first_name" id="billing_first_name" placeholder=""  value="" autocomplete="given-name">
                            </div>
                            <div class="form-row">
                                <label for="f-name">
                                    نام خانوادگی
                                </label>
                                <input required type="text" name="billing_last_name" id="billing_last_name" placeholder=""  value="" autocomplete="family-name">
                            </div>
                        </div>
                        <div class="form-row-double">
                            <div class="form-row">
                                <label>
                                    شماره تلفن همراه:
                                </label>
                                <input required type="text" name="billing_phone" id="billing_phone">
                            </div>
                            <div class="form-row">
                                <label>
                                    ایمیل:
                                </label>
                                <input required type="email" name="billing_email" id="billing_email">
                            </div>
                        </div>
                        <div class="form-row-double">

                            <div class="form-row">
                                <label>
                                    استان
                                </label>
                                <select required name="billing_country" id="billing_country" onChange="irancitylist(this.value);">
                                    <option value="0">لطفا استان را انتخاب نمایید</option>
                                    <option value="تهران">تهران</option>
                                    <option value="گیلان">گیلان</option>
                                    <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                    <option value="خوزستان">خوزستان</option>
                                    <option value="فارس">فارس</option>
                                    <option value="اصفهان">اصفهان</option>
                                    <option value="خراسان رضوی">خراسان رضوی</option>
                                    <option value="قزوین">قزوین</option>
                                    <option value="سمنان">سمنان</option>
                                    <option value="قم">قم</option>
                                    <option value="مرکزی">مرکزی</option>
                                    <option value="زنجان">زنجان</option>
                                    <option value="مازندران">مازندران</option>
                                    <option value="گلستان">گلستان</option>
                                    <option value="اردبیل">اردبیل</option>
                                    <option value="آذربایجان غربی">آذربایجان غربی</option>
                                    <option value="همدان">همدان</option>
                                    <option value="کردستان">کردستان</option>
                                    <option value="کرمانشاه">کرمانشاه</option>
                                    <option value="لرستان">لرستان</option>
                                    <option value="بوشهر">بوشهر</option>
                                    <option value="کرمان">کرمان</option>
                                    <option value="هرمزگان">هرمزگان</option>
                                    <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                                    <option value="یزد">یزد</option>
                                    <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                    <option value="ایلام">ایلام</option>
                                    <option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
                                    <option value="خراسان شمالی">خراسان شمالی</option>
                                    <option value="خراسان جنوبی">خراسان جنوبی</option>
                                    <option value="البرز">البرز</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <label>
                                    شهر:
                                </label>
                                <select required name="billing_city" id="billing_city">
                                    <option value="0">لطفا استان را انتخاب نمایید</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row-double">
                            <div class="form-row">
                                <label>
                                    کد پستی:
                                </label>
                                <input required type="text" name="billing_postcode" id="billing_postcode">
                                <br>
                                <br>
                                <div class="form-row-checkbox">
                                    <input required type="checkbox" name="" required>
                                    <label>
                                        قوانین و مقررات شما را قبول دارم.
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <label>
                                    آدرس:
                                </label>
                                <textarea rows="5" cols="35" name="billing_address_1" id="billing_address_1">
                            </textarea>
                            </div>
                        </div>
                    </form>
                    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
                </div>
            </div>
            <div class="data-entry-left">
                <div class="invoice-wrapper">
                    <div class="invoice">
                        <?php
                        $cart_sum = 0;
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
                            $product = $cart_item['data'];
                            $product_id = $cart_item['product_id'];
                            $quantity = $cart_item['quantity'];
                            $price = WC()->cart->get_product_price( $product );
                            $price_without_unit = $product->price;
                            $cart_sum += $price_without_unit;
                            $subtotal = WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] );
                            $link = $product->get_permalink( $cart_item );
                            $thumbnail  = get_the_post_thumbnail_url( $product_id );
                            $remove_url = WC()->cart->get_remove_url( $cart_item_key );
                        ?>
                        <div class="invoice-item">
                            <p>
                                <a href="<?php echo $link; ?>" target="_blank"><?php echo $product->name; ?></a> <span> - <?php echo str_en_to_fa(number_format( (float) $quantity)); ?></span>                            </p>
                            <div class="doted"></div>
                            <p>
                                <?php echo str_en_to_fa(number_format( (float) $price_without_unit))  . ' ' . get_woocommerce_currency_symbol(); ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                        <hr>
                        <div class="invoice-item">
                            <p>
                                <?php echo __translate_array('fa', 'factor final price: ', '<span style="font-weight: bold">', '</span> ') ?>
                            </p>
                            <div class="doted"></div>
                            <p>
                                <?php echo str_en_to_fa(number_format($cart_sum)) . ' ' . get_woocommerce_currency_symbol(); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="invoice-btn-wrapper">
<!--                    <div class="pay-btn" style="background: var(--main-color-gold)">-->
<!--                        <p style="cursor: pointer" onclick="document.forms[0].submit()">ورود به صفحه پرداخت</p>-->
<!--                    </div>-->
                    <input class="pay-btn" type="submit" form="checkout" style="background: var(--main-color-gold); font-size: 24px; color: white; width: 100%; border: none; cursor:pointer;" value="ورود به صفحه پرداخت">
                    <div class="cancel-btn">
                        <p>لغو سفارش خرید</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
