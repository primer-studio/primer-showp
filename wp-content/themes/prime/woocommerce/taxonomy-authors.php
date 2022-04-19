<?php get_header(); ?>
<main>
    <div id="main-wrapper" class="wrapper">
        <div class="author-wrapper">
            <div class="author-img">
                <img src="https://via.placeholder.com/246" alt="عکس نویسنده" />
            </div>
            <div class="author-info">
                <div class="author-name">
                    <p>
                        <?php woocommerce_page_title(); ?>
                    </p>
                </div>
                <div class="author-desc">
                    <p>
                    <?php echo term_description(); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="author-bibliography-wrapper">
            <div class="author-bibliography-title">
                <h4>
                    لیست آثار
                </h4>
            </div>
            <div class="author-bibliography-items">
                <div class="author-bibliography-item">
                    <div class="author-book-title">
                        <h5>
                            تاملات سیاسی علامه طباطبایی
                        </h5>
                    </div>
                    <div class="shop-btn">
                        <img src="assets/img/shopping-cart.svg" alt="آیکون خرید" />
                    </div>
                </div>
                <div class="author-bibliography-item">
                    <div class="author-book-title">
                        <h5>
                            شهر مردگان
                        </h5>
                    </div>
                    <div class="shop-btn">
                        <img src="assets/img/shopping-cart.svg" alt="آیکون خرید" />
                    </div>
                </div>
                <div class="author-bibliography-item">
                    <div class="author-book-title">
                        <h5>
                            دین و دنیا
                        </h5>
                    </div>
                    <div class="shop-btn">
                        <img src="assets/img/shopping-cart.svg" alt="آیکون خرید" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>