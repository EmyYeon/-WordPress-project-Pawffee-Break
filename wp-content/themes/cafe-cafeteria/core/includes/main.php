<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_cafe_cafeteria_dismissed_notice_handler', 'cafe_cafeteria_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function cafe_cafeteria_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function cafe_cafeteria_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            $current_screen = get_current_screen();
				if ( $current_screen->id !== 'appearance_page_cafe-cafeteria-guide-page' && $current_screen->id != 'migy_image_gallery_page_migy_templates' ) {
             $cafe_cafeteria_comments_theme = wp_get_theme(); ?>
            <div class="cafe-cafeteria-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="cafe-cafeteria-notice">
				<div class="cafe-cafeteria-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'cafe-cafeteria'); ?>">
				</div>
				<div class="cafe-cafeteria-notice-content">
					<div class="cafe-cafeteria-notice-heading"><?php esc_html_e('Thanks for installing ','cafe-cafeteria'); ?><?php echo esc_html( $cafe_cafeteria_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'cafe-cafeteria'), esc_url(admin_url('themes.php?page=cafe-cafeteria-guide-page'))); ?></p>
					<?php if (is_child_theme()) { ?>
						<?php $child_theme = wp_get_theme(); ?>
						<?php printf(esc_html__('You\'re using %1$s theme, It\'s a child theme of %2$s.', 'cafe-cafeteria'), '<strong>' . $child_theme->Name . '</strong>', '<strong>' . esc_html__('cafe_cafeteria', 'cafe-cafeteria') . '</strong>'); 
						?>
						<?php
						$copy_link_args = array(
							'page' => 'cafe-cafeteria',
							'action' => 'show_copy_settings',
						);
						$copy_link = add_query_arg($copy_link_args, admin_url('themes.php'));
						?>
						<?php printf('%s <a href="%s" class="go-to-setting">%s</a>', esc_html__('Now you can copy setting data from parent theme to this child theme', 'cafe-cafeteria'), esc_url($copy_link), esc_html__('Copy Settings', 'cafe-cafeteria')); ?>
					<?php } ?>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'cafe_cafeteria_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'cafe_cafeteria_getting_started' );
function cafe_cafeteria_getting_started() {
	add_theme_page( esc_html__('Get Started', 'cafe-cafeteria'), esc_html__('Get Started', 'cafe-cafeteria'), 'edit_theme_options', 'cafe-cafeteria-guide-page', 'cafe_cafeteria_test_guide');
	wp_enqueue_script( 'cafe-cafeteria-admin-script', get_template_directory_uri() . '/js/cafe-cafeteria-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'cafe-cafeteria-admin-script', 'cafe_cafeteria_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}

function cafe_cafeteria_admin_enqueue_scripts() {
	wp_enqueue_style( 'cafe-cafeteria-admin-style',get_template_directory_uri().'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'cafe_cafeteria_admin_enqueue_scripts' );

if ( ! defined( 'CAFE_CAFETERIA_DOCS_FREE' ) ) {
define('CAFE_CAFETERIA_DOCS_FREE',__('https://demo.misbahwp.com/docs/cafe-cafeteria-free-docs/','cafe-cafeteria'));
}
if ( ! defined( 'CAFE_CAFETERIA_DOCS_PRO' ) ) {
define('CAFE_CAFETERIA_DOCS_PRO',__('https://demo.misbahwp.com/docs/cafe-cafeteria-pro-docs','cafe-cafeteria'));
}
if ( ! defined( 'CAFE_CAFETERIA_BUY_NOW' ) ) {
define('CAFE_CAFETERIA_BUY_NOW',__('https://www.misbahwp.com/products/cafe-wordpress-theme','cafe-cafeteria'));
}
if ( ! defined( 'CAFE_CAFETERIA_SUPPORT_FREE' ) ) {
define('CAFE_CAFETERIA_SUPPORT_FREE',__('https://wordpress.org/support/theme/cafe-cafeteria','cafe-cafeteria'));
}
if ( ! defined( 'CAFE_CAFETERIA_REVIEW_FREE' ) ) {
define('CAFE_CAFETERIA_REVIEW_FREE',__('https://wordpress.org/support/theme/cafe-cafeteria/reviews/#new-post','cafe-cafeteria'));
}
if ( ! defined( 'CAFE_CAFETERIA_DEMO_PRO' ) ) {
define('CAFE_CAFETERIA_DEMO_PRO',__('https://demo.misbahwp.com/cafe-cafeteria/','cafe-cafeteria'));
}
if( ! defined( 'CAFE_CAFETERIA_THEME_BUNDLE' ) ) {
define('CAFE_CAFETERIA_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','cafe-cafeteria'));
}

function cafe_cafeteria_test_guide() { ?>
	<?php $cafe_cafeteria_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( CAFE_CAFETERIA_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'cafe-cafeteria' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'cafe-cafeteria' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( CAFE_CAFETERIA_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'cafe-cafeteria' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( CAFE_CAFETERIA_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'cafe-cafeteria' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','cafe-cafeteria'); ?><?php echo esc_html( $cafe_cafeteria_theme ); ?>  <span><?php esc_html_e('Version: ', 'cafe-cafeteria'); ?><?php echo esc_html($cafe_cafeteria_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$cafe_cafeteria_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $cafe_cafeteria_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'cafe-cafeteria' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','cafe-cafeteria'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( CAFE_CAFETERIA_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'cafe-cafeteria' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( CAFE_CAFETERIA_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'cafe-cafeteria' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( CAFE_CAFETERIA_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'cafe-cafeteria' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'cafe-cafeteria' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','cafe-cafeteria'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','cafe-cafeteria'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','cafe-cafeteria'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( CAFE_CAFETERIA_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'cafe-cafeteria' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','cafe-cafeteria'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','cafe-cafeteria'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','cafe-cafeteria'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','cafe-cafeteria'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
