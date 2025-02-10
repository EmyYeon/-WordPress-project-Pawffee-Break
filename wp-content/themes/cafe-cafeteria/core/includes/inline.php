<?php

$cafe_cafeteria_custom_css = '';


$cafe_cafeteria_is_dark_mode_enabled = get_theme_mod( 'cafe_cafeteria_is_dark_mode_enabled', false );

if ( $cafe_cafeteria_is_dark_mode_enabled ) {

    $cafe_cafeteria_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2),#story {';
    $cafe_cafeteria_custom_css .= 'background: #000;';
    $cafe_cafeteria_custom_css .= '}';

    $cafe_cafeteria_custom_css .= '.some {';
    $cafe_cafeteria_custom_css .= 'background: #000 !important;';
    $cafe_cafeteria_custom_css .= '}';

	$cafe_cafeteria_custom_css .= '.sticky .post-content{';
    $cafe_cafeteria_custom_css .= 'color: #000';
    $cafe_cafeteria_custom_css .= '}';

	$cafe_cafeteria_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a{';
    $cafe_cafeteria_custom_css .= 'color: #000 !important';
    $cafe_cafeteria_custom_css .= '}';

    $cafe_cafeteria_custom_css .= '.some{';
    $cafe_cafeteria_custom_css .= 'background: #fff;';
    $cafe_cafeteria_custom_css .= '}';

    $cafe_cafeteria_custom_css .= '.some {';
    $cafe_cafeteria_custom_css .= 'background: #fff !important;';
    $cafe_cafeteria_custom_css .= '}';
	

    $cafe_cafeteria_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span{';
    $cafe_cafeteria_custom_css .= 'color: #fff;';
    $cafe_cafeteria_custom_css .= '}';

    $cafe_cafeteria_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular,h2.woocommerce-loop-product__title{';
    $cafe_cafeteria_custom_css .= 'color: #fff !important;';
    $cafe_cafeteria_custom_css .= '}';

	$cafe_cafeteria_custom_css .= '.post-box{';
    $cafe_cafeteria_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $cafe_cafeteria_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$cafe_cafeteria_text_transform = get_theme_mod( 'menu_text_transform_cafe_cafeteria','UPPERCASE');

    if($cafe_cafeteria_text_transform == 'CAPITALISE'){

		$cafe_cafeteria_custom_css .='#main-menu ul li a{';

			$cafe_cafeteria_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$cafe_cafeteria_custom_css .='}';

	}else if($cafe_cafeteria_text_transform == 'UPPERCASE'){

		$cafe_cafeteria_custom_css .='#main-menu ul li a{';

			$cafe_cafeteria_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$cafe_cafeteria_custom_css .='}';

	}else if($cafe_cafeteria_text_transform == 'LOWERCASE'){

		$cafe_cafeteria_custom_css .='#main-menu ul li a{';

			$cafe_cafeteria_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$cafe_cafeteria_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

			$cafe_cafeteria_menu_zoom = get_theme_mod( 'cafe_cafeteria_menu_zoom','None');

		if($cafe_cafeteria_menu_zoom == 'None'){

			$cafe_cafeteria_custom_css .='#main-menu ul li a{';

				$cafe_cafeteria_custom_css .='';

			$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_menu_zoom == 'Zoominn'){

			$cafe_cafeteria_custom_css .='#main-menu ul li a:hover{';

				$cafe_cafeteria_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #dfb581;';

			$cafe_cafeteria_custom_css .='}';
		}

		/*---------------------------Container Width-------------------*/

	$cafe_cafeteria_container_width = get_theme_mod('cafe_cafeteria_container_width');

			$cafe_cafeteria_custom_css .='body{';

				$cafe_cafeteria_custom_css .='width: '.esc_attr($cafe_cafeteria_container_width).'%; margin: auto;';

			$cafe_cafeteria_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

$cafe_cafeteria_slider_content_alignment = get_theme_mod( 'cafe_cafeteria_slider_content_alignment','LEFT-ALIGN');

 if($cafe_cafeteria_slider_content_alignment == 'LEFT-ALIGN'){

		$cafe_cafeteria_custom_css .='.blog_inner_box{';

			$cafe_cafeteria_custom_css .='text-align:center;';

		$cafe_cafeteria_custom_css .='}';


	}else if($cafe_cafeteria_slider_content_alignment == 'CENTER-ALIGN'){

		$cafe_cafeteria_custom_css .='.blog_inner_box{';

			$cafe_cafeteria_custom_css .='text-align:center; right: 30%; left: 30%;';

		$cafe_cafeteria_custom_css .='}';


	}else if($cafe_cafeteria_slider_content_alignment == 'RIGHT-ALIGN'){

		$cafe_cafeteria_custom_css .='.blog_inner_box{';

			$cafe_cafeteria_custom_css .='text-align:center; right: 10%; left: 60%;';

		$cafe_cafeteria_custom_css .='}';

	}

		/*---------------------------Copyright Text alignment-------------------*/

$cafe_cafeteria_copyright_text_alignment = get_theme_mod( 'cafe_cafeteria_copyright_text_alignment','LEFT-ALIGN');

 if($cafe_cafeteria_copyright_text_alignment == 'LEFT-ALIGN'){

		$cafe_cafeteria_custom_css .='.copy-text p{';

			$cafe_cafeteria_custom_css .='text-align:left;';

		$cafe_cafeteria_custom_css .='}';


	}else if($cafe_cafeteria_copyright_text_alignment == 'CENTER-ALIGN'){

		$cafe_cafeteria_custom_css .='.copy-text p{';

			$cafe_cafeteria_custom_css .='text-align:center;';

		$cafe_cafeteria_custom_css .='}';


	}else if($cafe_cafeteria_copyright_text_alignment == 'RIGHT-ALIGN'){

		$cafe_cafeteria_custom_css .='.copy-text p{';

			$cafe_cafeteria_custom_css .='text-align:right;';

		$cafe_cafeteria_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$cafe_cafeteria_related_product_setting = get_theme_mod('cafe_cafeteria_related_product_setting',true);

	if($cafe_cafeteria_related_product_setting == false){

		$cafe_cafeteria_custom_css .='.related.products, .related h2{';

			$cafe_cafeteria_custom_css .='display: none;';

		$cafe_cafeteria_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$cafe_cafeteria_scroll_top_position = get_theme_mod( 'cafe_cafeteria_scroll_top_position','Right');

	if($cafe_cafeteria_scroll_top_position == 'Right'){

		$cafe_cafeteria_custom_css .='.scroll-up{';

			$cafe_cafeteria_custom_css .='right: 20px;';

		$cafe_cafeteria_custom_css .='}';

	}else if($cafe_cafeteria_scroll_top_position == 'Left'){

		$cafe_cafeteria_custom_css .='.scroll-up{';

			$cafe_cafeteria_custom_css .='left: 20px;';

		$cafe_cafeteria_custom_css .='}';

	}else if($cafe_cafeteria_scroll_top_position == 'Center'){

		$cafe_cafeteria_custom_css .='.scroll-up{';

			$cafe_cafeteria_custom_css .='right: 50%;left: 50%;';

		$cafe_cafeteria_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$cafe_cafeteria_pagination_setting = get_theme_mod('cafe_cafeteria_pagination_setting',true);

	if($cafe_cafeteria_pagination_setting == false){

		$cafe_cafeteria_custom_css .='.nav-links{';

			$cafe_cafeteria_custom_css .='display: none;';

		$cafe_cafeteria_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$cafe_cafeteria_slider_opacity_color = get_theme_mod( 'cafe_cafeteria_slider_opacity_color','0.6');

	if($cafe_cafeteria_slider_opacity_color == '0'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.1'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.1';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.2'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.2';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.3'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.3';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.4'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.4';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.5'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.5';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.6'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.6';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.7'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.7';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.8'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.8';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == '0.9'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:0.9';

		$cafe_cafeteria_custom_css .='}';

		}else if($cafe_cafeteria_slider_opacity_color == 'unset'){

		$cafe_cafeteria_custom_css .='.blog_box img{';

			$cafe_cafeteria_custom_css .='opacity:unset';

		$cafe_cafeteria_custom_css .='}';

		}
