<?php get_header(); ?>
    <main>
        <div id="main-wrapper" class="wrapper">
            <div class="author-wrapper">
                <div class="author-img">
                    <?php
                    // image id is stored as term meta
                    $image_id = get_term_meta( get_queried_object()->term_id, 'image', true );

                    // image data stored in array, second argument is which image size to retrieve
                    $image_data = wp_get_attachment_image_src( $image_id, 'full' );

                    // image url is the first item in the array (aka 0)
                    $image = (isset($image_data[0])) ? $image_data[0] : null;
                    if (!empty($image) && !is_null($image)):
                    ?>
                    <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo the_title(); ?>"/>
                    <?php else: ?>
                    <img src="https://via.placeholder.com/246"/>
                    <?php endif; ?>
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
                    <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
                    <div class="author-bibliography-item">
                        <div class="author-book-title">
                            <a href="<?php the_permalink(); ?>">
                                <h5>
                                    <?php echo the_title(); ?>
                                </h5>
                            </a>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <div class="shop-btn">

                                <img src="<?php echo get_stylesheet_directory_uri() . "/template-parts/assets/img/shopping-cart.svg" ?>"
                                     alt="آیکون خرید"/>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>