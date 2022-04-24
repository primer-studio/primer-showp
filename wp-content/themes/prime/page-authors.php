<?php
$dataset = helper_get_tax_terms('authors');
get_header();
?>

    <main>
        <div id="main-wrapper" class="wrapper">
            <?php
            foreach ($dataset as $term):
                $term_id = $term->id;
                $link = get_term_link($term->slug, 'authors');
                $name = $term->name;
                $image_id = get_term_meta($term_id, 'image', true);

                // image data stored in array, second argument is which image size to retrieve
                $image_data = wp_get_attachment_image_src($image_id, 'full');

                // image url is the first item in the array (aka 0)
                $image = (isset($image_data[0])) ? $image_data[0] : null;
                ?>
                <div class="author-wrapper">
                    <div class="author-img">
                        <?php if (!empty($image) && !is_null($image)): ?>
                        <a href="<?php echo $link; ?>">
                            <img class="border-rounded" src="<?php echo esc_url($image); ?>"
                        </a>
                                 alt="<?php echo the_title(); ?>"/>
                        <?php else: ?>
                        <a href="<?php echo $link; ?>">
                            <img class="border-rounded" src="https://via.placeholder.com/246"/>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="author-info">
                        <div class="author-name">
                            <a href="<?php echo $link; ?>">
                                <p>
                                    <?php echo $name; ?>
                                </p>
                            </a>
                        </div>
                        <div class="author-desc">
                            <p>
                                <?php echo $term->description; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php get_footer(); ?>