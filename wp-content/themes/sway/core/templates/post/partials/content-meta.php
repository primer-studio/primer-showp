<?php
/**
 * The template used for displaying meta information for single Blog posts
 */
 ?>
<?php
  $blog_template = $global_post_meta= $post_content = '';

  $blog_template = sway_get_option( 'tek-blog-template' );
  $global_post_meta = sway_get_option( 'tek-post-meta' );

  $post_meta_date = sway_get_option( 'tek-post-meta-date' );
  $post_meta_author = sway_get_option( 'tek-post-meta-author' );
  $post_meta_categories = sway_get_option( 'tek-post-meta-categories' );
  $post_meta_comments = sway_get_option( 'tek-post-meta-comments' );

  if ( ! class_exists( 'ReduxFramework' ) ) {
    $global_post_meta = $post_meta_date = $post_meta_author = $post_meta_categories = $post_meta_comments = true;
    $blog_template = 'img-top-list';
  }
?>

<?php if ( $global_post_meta == true ) : ?>
 <div class="entry-meta">
   <?php if ( is_sticky() ) echo '<span class="sticky-post"><span class="fas fa-thumbtack"></span>' . apply_filters( 'sticky-post-text', esc_html__("Sticky", "sway") ) . '</span>'; ?>

   <?php if ( is_single() && $post_meta_date == true ) : ?>
     <span class="published"><span class="far fa-clock"></span><?php the_time( get_option('date_format') ); ?></span>
   <?php elseif ( $post_meta_date == true ) : ?>
     <span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option('date_format') ); ?></a></span>
   <?php endif; ?>

   <?php if ( $post_meta_author == true ) : ?>
     <span class="author"><span class="far sway-author-meta"></span><?php the_author_posts_link(); ?></span>
   <?php endif; ?>

   <?php if ( $post_meta_categories == true ) : ?>
     <?php if ( $blog_template != 'detailed-grid' ) : ?>
       <span class="blog-label"><span class="far sway-categories-meta"></span><?php the_category(', '); ?></span>
     <?php endif; ?>
   <?php endif; ?>

   <?php if ( ! is_single() && $post_meta_comments == true ) : ?>
     <?php if ( $blog_template == 'img-top-list' || $blog_template == 'minimal-list' ) : ?>
       <span class="comment-count"><span class="far sway-comments-meta"></span><?php comments_popup_link( esc_html__('هیچ نظری وجود ندارد', 'sway'), esc_html__('1 نظر', 'sway'), esc_html__('% نظر', 'sway') ); ?></span>
     <?php elseif ( $blog_template == 'detailed-grid' ) : ?>
       <span class="comment-number"><span class="far sway-comments-meta"></span><?php echo get_comments_number(); ?></span>
     <?php elseif ( $blog_template == 'img-left-list' ) : ?>
       <span class="comment-count"><span class="far sway-comments-meta"></span><?php echo get_comments_number(); ?></span>
     <?php endif; ?>
   <?php endif; ?>

 </div>
<?php endif; ?>
