<?php get_header(); ?>
    <main>
        <div id="main-wrapper" class="wrapper">
            <div class="page-wrapper">
                <div class="contact-us-title">
                    <h1>
                        <?php echo the_title(); ?>
                    </h1>
                </div>
                <div class="contact-us-wrapper">
                    <div class="simple-page-content">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>