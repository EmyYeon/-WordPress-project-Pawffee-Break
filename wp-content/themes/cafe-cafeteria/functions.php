<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function cafe_cafeteria_google_fonts() {

  require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

    wp_enqueue_style( 'cafe-cafeteria-google-fonts-great-vibes', 'https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    wp_enqueue_style( 'cafe-cafeteria-google-fonts-lora', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');
}

add_action( 'wp_enqueue_scripts', 'cafe_cafeteria_google_fonts' );


if (!function_exists('cafe_cafeteria_enqueue_scripts')) {

	function cafe_cafeteria_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',
			esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
      get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
      get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('cafe-cafeteria-style', get_stylesheet_uri(), array() );

		wp_style_add_data('cafe-cafeteria-style', 'rtl', 'replace');

		wp_enqueue_style(
			'cafe-cafeteria-media-css',
      get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'cafe-cafeteria-woocommerce-css',
      get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('dashicons');

		wp_enqueue_script(
			'cafe-cafeteria-navigation',
      get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
      get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'cafe-cafeteria-script',
      get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( get_theme_mod( 'cafe_cafeteria_animation_enabled', true ) ) {
	        wp_enqueue_script(
	            'cafe-cafeteria-wow-script',
	            get_template_directory_uri() . '/js/wow.js',
	            array( 'jquery' ),
	            '1.0',
	            true
	        );

	        wp_enqueue_style(
	            'cafe-cafeteria-animate',
	            get_template_directory_uri() . '/css/animate.css',
	            array(),
	            '4.1.1'
	        );
	    }

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$cafe_cafeteria_css = '';

		if ( get_header_image() ) :

			$cafe_cafeteria_css .=  '
				header.header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'cafe-cafeteria-style', $cafe_cafeteria_css );

		 // Theme stylesheet.
		wp_enqueue_style( 'cafe-cafeteria-style', get_stylesheet_uri() );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'cafe-cafeteria-style',$cafe_cafeteria_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'cafe_cafeteria_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('cafe_cafeteria_after_setup_theme')) {

	function cafe_cafeteria_after_setup_theme() {

		load_theme_textdomain( 'cafe-cafeteria-center', get_stylesheet_directory() . '/languages' );

		if ( ! isset( $cafe_cafeteria_content_width ) ) $cafe_cafeteria_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'cafe-cafeteria' ),
		));

		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( "responsive-embeds" );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-background', array(
		  'default-color' => 'ffffff'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
      		'flex-width' => true,
      		'flex-height' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'cafe_cafeteria_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/cafe-cafeteria-customizer-notify.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/**------------------------------------------------------------------------------------------
 * Enqueue theme logo style.
 */
function cafe_cafeteria_logo_resizer() {

    $cafe_cafeteria_theme_logo_size_css = '';
    $cafe_cafeteria_logo_resizer = get_theme_mod('cafe_cafeteria_logo_resizer');

	$cafe_cafeteria_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($cafe_cafeteria_logo_resizer).'px !important;
			width: '.esc_attr($cafe_cafeteria_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'cafe-cafeteria-style',$cafe_cafeteria_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'cafe_cafeteria_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function cafe_cafeteria_global_color() {

    $cafe_cafeteria_theme_color_css = '';
    $cafe_cafeteria_global_color = get_theme_mod('cafe_cafeteria_global_color');
    $cafe_cafeteria_global_color_2 = get_theme_mod('cafe_cafeteria_global_color_2');
    $cafe_cafeteria_copyright_bg = get_theme_mod('cafe_cafeteria_copyright_bg');

	$cafe_cafeteria_theme_color_css = '
		#main-menu ul.children li a:hover,#main-menu ul.sub-menu li a:hover,p.slider_btn a:hover,.pagination .nav-links a:hover,.pagination .nav-links a:focus,.pagination .nav-links span.current,.cafe-cafeteria-pagination span.current,.cafe-cafeteria-pagination span.current:hover,.cafe-cafeteria-pagination span.current:focus,.cafe-cafeteria-pagination a span:hover,.cafe-cafeteria-pagination a span:focus,.comment-respond input#submi,.comment-reply a,.sidebar-area .tagcloud a:hover,.searchform input[type=submit],.searchform input[type=submit]:hover ,.searchform input[type=submit]:focus,.comment-respond input#submit,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce a.added_to_cart,nav.woocommerce-MyAccount-navigation ul li,.wp-block-search .wp-block-search__button:hover,.menu-toggle,.scroll-up a,p.slider_btn a:hover,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.sidebar-area h4.title, .sidebar-area h1.wp-block-heading, .sidebar-area h2.wp-block-heading, .sidebar-area h3.wp-block-heading, .sidebar-area h4.wp-block-heading, .sidebar-area h5.wp-block-heading, .sidebar-area h6.wp-block-heading, .sidebar-area .wp-block-search__label,.sidebar-area .wp-block-search__button{
			background: '.esc_attr($cafe_cafeteria_global_color).';
		}
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .header i.fa.fa-search, .header i.fas.fa-shopping-cart,.menu-toggle, .dropdown-toggle, button.close-menu {
		        background: '.esc_attr($cafe_cafeteria_global_color).';
		    }
		}
		scroll-up a:hover,.blog_inner_box h3.post-title a, #main-menu ul li.current-menu-item > a, #main-menu ul li.current_page_item > a,#main-menu a:hover, #main-menu ul li a:hover,.inner-box span,.header-search .open-search-form i, a.cart-customlocation i {
			color: '.esc_attr($cafe_cafeteria_global_color).';
		}
		.content_inner_box hr,.call-us i,.slider .owl-carousel button.owl-dot.active,#courses hr,#checkout-payment #checkout-order-action button,.learnpress-page .lp-button,.learnpress-page #lp-button,p.slider_btn a {
			border-color: '.esc_attr($cafe_cafeteria_global_color).';
		}
		a.cart-customlocation p.cart-item-box,.tab-product span.onsale,.box-content a.button:hover,.box .box-content,.scroll-up a:hover,nav.woocommerce-MyAccount-navigation ul li:hover,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.comment-respond input#submit:hover, .comment-reply a:hover,a.shop-btn,.woocommerce .cart .button:hover,.woocommerce a.button.alt:hover,a.shop-btn:hover,.woocommerce button.button.alt:hover,.woocommerce a.added_to_cart:hover,.comment-respond input#submit:hover,.woocommerce #respond input#submit:.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit:hover,.woocommerce button.button.alt:hover,.woocommerce a.button:hover,.woocommerce a.added_to_cart:hover {
			background-color: '.esc_attr($cafe_cafeteria_global_color_2).';
		}
		.register-box, .sidebar-area .tagcloud a, p.wp-block-tag-cloud a {
			background: '.esc_attr($cafe_cafeteria_global_color_2).';
		}
		.woocommerce a.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce a.added_to_cart:hover,.comment-respond input#submit:hover,.scroll-up a:hover,nav.woocommerce-MyAccount-navigation ul li:hover {
			background-color: '.esc_attr($cafe_cafeteria_global_color_2).'!important;
		}
		 a:hover,.inner-box h4 a,.logo a:hover,.post-meta i,.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price{
			color: '.esc_attr($cafe_cafeteria_global_color_2).';
		}
		@media screen and (min-width: 320px) and (max-width: 767px) {
		    .header i.fa.fa-search, .header i.fas.fa-shopping-cart {
		        color: '.esc_attr($cafe_cafeteria_global_color_2).';
		    }
		}
		h3.text-center.mb-4 {
			color: '.esc_attr($cafe_cafeteria_global_color_2).'!important;
		}
		.slider .owl-carousel button.owl-dot.active, .sidebar-area h4.title {
			border-color: '.esc_attr($cafe_cafeteria_global_color_2).';
		}
		@media screen and (min-width: 320px) and (max-width: 767px)
		.page-template-frontpage #site-navigation {
				background: '.esc_attr($cafe_cafeteria_global_color_2).' !important;
		}
		.copyright {
			background: '.esc_attr($cafe_cafeteria_copyright_bg).';
		}
	';
    wp_add_inline_style( 'cafe-cafeteria-style',$cafe_cafeteria_theme_color_css );
    wp_add_inline_style( 'cafe-cafeteria-woocommerce-css',$cafe_cafeteria_theme_color_css );
}
add_action( 'wp_enqueue_scripts', 'cafe_cafeteria_global_color' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('cafe_cafeteria_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function cafe_cafeteria_comment($comment, $cafe_cafeteria_args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'cafe-cafeteria');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'cafe-cafeteria'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($cafe_cafeteria_args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $cafe_cafeteria_args['avatar_size']) echo get_avatar($comment, $cafe_cafeteria_args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'cafe-cafeteria'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'cafe-cafeteria' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'cafe-cafeteria'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $cafe_cafeteria_args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $cafe_cafeteria_args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for cafe_cafeteria_comment()

if (!function_exists('cafe_cafeteria_widgets_init')) {

	function cafe_cafeteria_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','cafe-cafeteria'),
			'id'   => 'cafe-cafeteria-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cafe-cafeteria'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 2','cafe-cafeteria'),
			'id'   => 'cafe-cafeteria-sidebar-2',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cafe-cafeteria'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar 3','cafe-cafeteria'),
			'id'   => 'cafe-cafeteria-sidebar-3',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'cafe-cafeteria'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','cafe-cafeteria'),
			'id'   => 'cafe-cafeteria-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'cafe-cafeteria'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'cafe_cafeteria_widgets_init' );

}

function cafe_cafeteria_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'cafe_cafeteria_woocommerce_header_add_to_cart_fragment' );

function cafe_cafeteria_woocommerce_header_add_to_cart_fragment( $cafe_cafeteria_fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','cafe-cafeteria' ); ?>"><i class="fas fa-shopping-cart"></i><p class="cart-item-box"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></p></a>
	<?php
	$cafe_cafeteria_fragments['a.cart-customlocation'] = ob_get_clean();
	return $cafe_cafeteria_fragments;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'cafe_cafeteria_loop_columns');
if (!function_exists('cafe_cafeteria_loop_columns')) {
	function cafe_cafeteria_loop_columns() {
		$cafe_cafeteria_columns = get_theme_mod( 'cafe_cafeteria_per_columns', 3 );
		return $cafe_cafeteria_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'cafe_cafeteria_per_page', 20 );
function cafe_cafeteria_per_page( $cafe_cafeteria_cols ) {
  	$cafe_cafeteria_cols = get_theme_mod( 'cafe_cafeteria_product_per_page', 9 );
	return $cafe_cafeteria_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'cafe_cafeteria_products_args' );
function cafe_cafeteria_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

add_action('after_switch_theme', 'cafe_cafeteria_setup_options');
function cafe_cafeteria_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

//add animation class
if ( class_exists( 'WooCommerce' ) ) { 
	add_filter('post_class', function($cafe_cafeteria, $class, $product_id) {
	    if( is_shop() || is_product_category() ){
	        
	        $cafe_cafeteria = array_merge(['wow','zoomIn'], $cafe_cafeteria);
	    }
	    return $cafe_cafeteria;
	},10,3);
}?>