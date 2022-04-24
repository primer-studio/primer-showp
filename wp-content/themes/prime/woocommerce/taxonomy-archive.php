<?php
$terms = get_terms([
    'taxonomy' => 'authors',
    'hide_empty' => false,
]);
//echo "<pre>";
//var_dump($terms[0]);
//die();
get_header();
?>
<main>
    <div id="main-wrapper" class="wrapper">
        <?php if (count($terms)) : foreach($terms as $term): ?>
        <div class="author-wrapper">
            <div class="author-img">
                <?php
                // image id is stored as term meta
                $image_id = get_term_meta( $term->term_id, 'image', true );

                // image data stored in array, second argument is which image size to retrieve
                $image_data = wp_get_attachment_image_src( $image_id, 'full' );

                // image url is the first item in the array (aka 0)
                $image = (isset($image_data[0])) ? $image_data[0] : null;
                if (!empty($image) && !is_null($image)):
                    ?>
                    <img class="border-rounded" src="<?php echo esc_url( $image ); ?>" alt="<?php echo the_title(); ?>"/>
                <?php else: ?>
                    <img class="border-rounded" src="https://via.placeholder.com/246"/>
                <?php endif; ?>
            </div>
            <div class="author-info">
                <div class="author-name">
                    <p>
                        <a href="<?php echo get_term_link($term); ?>">
                            <?php echo $term->name; ?>
                        </a>
                    </p>
                </div>
                <div class="author-desc">
                    <p>
                        <?php echo $term->description; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; else: ?>
        <p>نویسنده‌ای ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
