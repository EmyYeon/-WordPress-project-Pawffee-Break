<?php if ( get_theme_mod('cafe_cafeteria_blog_box_enable',false) ) : ?>

<?php $cafe_cafeteria_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('cafe_cafeteria_blog_slide_category'),
  'posts_per_page' => get_theme_mod('cafe_cafeteria_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $cafe_cafeteria_arr_posts = new WP_Query( $cafe_cafeteria_args );
    if ( $cafe_cafeteria_arr_posts->have_posts() ) :
      while ( $cafe_cafeteria_arr_posts->have_posts() ) :
        $cafe_cafeteria_arr_posts->the_post();
        ?>
        <div class="blog_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="blog_inner_box wow zoomIn">
            <?php if ( get_theme_mod('cafe_cafeteria_slide_title_enable_disable', true) == true ) : ?>
              <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('cafe_cafeteria_slide_text_enable_disable', true) == true ) : ?>
              <p class="slider-text"><?php echo wp_trim_words( get_the_content(), get_theme_mod('cafe_cafeteria_slide_excerpt_number',15) ); ?></p>
            <?php endif; ?>
            <?php if ( get_theme_mod('cafe_cafeteria_slider_button_text', true) == true ) : ?>
              <p class="slider_btn my-5">
                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('cafe_cafeteria_slider_button_text' ) ); ?></a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>
