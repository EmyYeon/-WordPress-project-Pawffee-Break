<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cafe-cafeteria' ); ?></a>

<?php if(get_theme_mod('cafe_cafeteria_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'cafe_cafeteria_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'cafe-cafeteria' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'cafe_cafeteria_preloader_type') == 'cube-loader') {?>
    	
    		<div class="cssloader">
    			<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<?php if ( get_theme_mod('cafe_cafeteria_social_links_settings') || get_theme_mod('cafe_cafeteria_register_text') || get_theme_mod('cafe_cafeteria_register_link') || get_theme_mod('cafe_cafeteria_login_text') || get_theme_mod('cafe_cafeteria_login_link') ) : ?>

<div class="top-header text-center py-3 wow fadeInRight">
	<div class="container">
		<div class="row">
		    <div class="col-xl-9 col-lg-6 col-md-6 align-self-center text-md-end text-center">
		    	<?php $cafe_cafeteria_settings = get_theme_mod( 'cafe_cafeteria_social_links_settings' ); ?>
				<div class="social-links text-center text-md-end mb-2 mb-md-0">
					<?php if ( is_array($cafe_cafeteria_settings) || is_object($cafe_cafeteria_settings) ){ ?>
			            <?php foreach( $cafe_cafeteria_settings as $cafe_cafeteria_setting ) { ?>
					        <a href="<?php echo esc_url( $cafe_cafeteria_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $cafe_cafeteria_setting['link_text'] ); ?> me-3"></i>
					        </a>
					    <?php } ?>
					<?php } ?>
				</div>
		    </div>
		    <div class="col-xl-3 col-lg-6 col-md-6 align-self-center text-md-end text-center">
	    	 	<?php if ( get_theme_mod('cafe_cafeteria_register_text') || get_theme_mod('cafe_cafeteria_register_link') ) : ?>
			    	<a href="<?php echo esc_url( get_theme_mod('cafe_cafeteria_register_link' ) ); ?>" class="mb-0 register-box"><?php echo esc_html( get_theme_mod('cafe_cafeteria_register_text' ) ); ?></a>
			  	<?php endif; ?>
			  	<?php if ( get_theme_mod('cafe_cafeteria_login_text') || get_theme_mod('cafe_cafeteria_login_link') ) : ?>
			    	<a href="<?php echo esc_url( get_theme_mod('cafe_cafeteria_login_link' ) ); ?>" class="mb-0 login-box"><i class="fas fa-lock me-2"></i><?php echo esc_html( get_theme_mod('cafe_cafeteria_login_text' ) ); ?></a>
			  	<?php endif; ?>
	    	</div>
		</div>
	</div>
</div>

<?php endif; ?>


<header id="site-navigation" class="wow fadeInLeft header text-center text-md-start <?php if( get_theme_mod( 'cafe_cafeteria_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
		    	<div class="logo text-center text-md-center text-lg-start">
			    	<div class="logo-image me-3">
				    	<?php the_custom_logo(); ?>
				    </div>
				    <div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('cafe_cafeteria_display_header_title', true) == true ) :
				      			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
				      			echo esc_attr(get_bloginfo('name'));
				      			echo '</a>';
			      		 	endif;
			      		 	if ( get_theme_mod('cafe_cafeteria_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
				</div>
		    </div>
			<div class="col-lg-7 col-md-10 col-sm-8 col-12 align-self-center">
				<button class="menu-toggle my-2 p-2" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'cafe-cafeteria' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-2 col-6 align-self-center">
				<?php if ( get_theme_mod('cafe_cafeteria_search_box_enable', true) == true ) : ?>
                    <div class="header-search text-center">
                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="search-form"><?php get_search_form();?></div>
                    </div>
                <?php endif; ?>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-2 col-6 text-center align-self-center">
				<?php if ( get_theme_mod('cafe_cafeteria_cart_box_enable', true) == true ) : ?>
					<?php if ( class_exists( 'woocommerce' ) ) {?>
						<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','cafe-cafeteria' ); ?>"><i class="fas fa-shopping-cart"></i><p class="cart-item-box"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></p></a>
					<?php }?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>

