<?php
	get_header();
	$query = new WC_Product_Query( array(
		'limit' => 10,
		'orderby' => 'id',
		'order' => 'DESC',
		'status' => 'publish',
		// 'paginate' => true,
		// 'return' => 'ids',
	) );
	$products = $query->get_products();
?>
<main>
	<div id="main-wrapper" class="wrapper">
		<div class="book-wrapper">
			<?php if (count($products)): ?>
				<?php foreach ($products as $product): ?>
				<div class="book-item" style="margin-bottom: 2%">
                    <div class="book-id">
                        <p>
                            <?php echo str_en_to_fa($product->get_id()); ?>
                        </p>
                    </div>
                    <div class="book-img text-align-center">
                        <?php echo $product->get_image(null, ['width' => 'auto', 'height' => '100%']); ?>
                    </div>
                    <div class="book-info">
						<div class="book-title">
                            <a href="<?php echo $product->get_permalink(); ?>"><h2><?php echo $product->get_name(); ?></h2></a>
                            <?php
                            $author = helper_get_product_taxonomies($product, 'authors');
                            $translator = helper_get_product_taxonomies($product, 'translators');
                            ?>
                            <a href="<?php echo $author['link']; ?>"><?php echo $author['name']; ?></a>
						</div>
						<div class="book-author">
                            <a href="<?php echo $translator['link']; ?>">
                                <h3>
							    <?php echo $translator['name']; ?>
							    </h3>
                            </a>
						</div>
                    </div>
                    <div class="shop-btn" <?php if (!helper_is_product_purchasable($product)): ?> style="background-color: #b1b1b1 !important;" <?php endif; ?>>
                        <?php if (helper_is_product_purchasable($product)) : ?>
                            <a href="<?php echo $product->add_to_cart_url(); ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/shopping-cart.svg'; ?>" alt="خرید"/>
                            </a>
                        <?php else: ?>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/template-parts/assets/img/shopping-cart.svg'; ?>" alt="خرید"/>
                        <?php endif; ?>
                    </div>
                </div>
				<?php endforeach; ?>
			<?php else: ?>
				<p><?php __translate_array('fa', 'no products found.') ?></p>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>