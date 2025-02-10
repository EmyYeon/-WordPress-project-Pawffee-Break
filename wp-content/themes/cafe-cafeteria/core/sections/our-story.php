<?php if ( get_theme_mod('cafe_cafeteria_our_story_enable',false) ) : ?>

  <section id="story" class="py-5">
    <div class="container">
      <?php if ( get_theme_mod('cafe_cafeteria_our_story_section_title') ) : ?>
        <h3 class="text-center mb-4 wow flip"><?php echo esc_html(get_theme_mod('cafe_cafeteria_our_story_section_title')) ?></h3>
      <?php endif; ?>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-center mb-2 mb-md-2  wow fadeInDown">
          <?php if ( get_theme_mod('cafe_cafeteria_our_story_image1') ) : ?>
            <img src="<?php echo esc_url(get_theme_mod('cafe_cafeteria_our_story_image1')) ?>">
          <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 align-self-center mb-2 mb-md-2  wow fadeInUp">
          <?php if ( get_theme_mod('cafe_cafeteria_our_story_image2') ) : ?>
            <img src="<?php echo esc_url(get_theme_mod('cafe_cafeteria_our_story_image2')) ?>">
          <?php endif; ?>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 align-self-center">
          <?php $cafe_cafeteria_slider_pages = array();
            $cafe_cafeteria_mod = intval( get_theme_mod( 'cafe_cafeteria_our_story' ));
            if ( 'page-none-selected' != $cafe_cafeteria_mod ) {
              $cafe_cafeteria_slider_pages[] = $cafe_cafeteria_mod;
            }
            if( !empty($cafe_cafeteria_slider_pages) ) :
              $cafe_cafeteria_args = array(
                'post_type' => 'page',
                'post__in' => $cafe_cafeteria_slider_pages,
                'orderby' => 'post__in'
              );
              $cafe_cafeteria_query = new WP_Query( $cafe_cafeteria_args );
              if ( $cafe_cafeteria_query->have_posts() ) :
                $i = 1;
          ?>
          <div class="inner-box p-3 wow fadeInRight">
            <?php  while ( $cafe_cafeteria_query->have_posts() ) : $cafe_cafeteria_query->the_post(); ?>
              <?php if ( get_theme_mod('cafe_cafeteria_our_story_heading_text') ) : ?>
                <span class="pb-2"><?php echo esc_html(get_theme_mod('cafe_cafeteria_our_story_heading_text')) ?></span>
              <?php endif; ?>
              <h4 class="pb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php echo wp_trim_words( get_the_content(), get_theme_mod('cafe_cafeteria_story_excerpt_number',15) ); ?>
            <?php $i++; endwhile;
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
