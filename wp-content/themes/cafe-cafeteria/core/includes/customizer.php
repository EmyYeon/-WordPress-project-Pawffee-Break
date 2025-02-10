<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_cafeteria_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'cafe-cafeteria' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'cafe-cafeteria' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'cafe-cafeteria' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'cafe_cafeteria_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'cafe-cafeteria' ),
	) );

	Kirki::add_section( 'cafe_cafeteria_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'cafe-cafeteria' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_all_headings_typography',
		'section'     => 'cafe_cafeteria_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'cafe_cafeteria_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'cafe-cafeteria' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'cafe-cafeteria' ),
		'help'        => esc_html__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_body_content_typography',
		'section'     => 'cafe_cafeteria_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'cafe_cafeteria_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'cafe-cafeteria' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'cafe_cafeteria_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'cafe-cafeteria' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'cafe_cafeteria_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id_5',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_animation_enabled',
		'label'       => esc_html__( 'Turn To Show Animation', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

		// PANEL
	Kirki::add_panel( 'cafe_cafeteria_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'cafe-cafeteria' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'cafe_cafeteria_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'cafe_cafeteria_dark_colors',
	    'section'     => 'cafe_cafeteria_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'cafe-cafeteria' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'cafe_cafeteria_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'cafe-cafeteria' ),
	) );

	// Additional Settings

	Kirki::add_section( 'cafe_cafeteria_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id',
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset( [
		'settings'    => 'cafe_cafeteria_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'cafe-cafeteria' ),
			'Center' => esc_html__( 'Center', 'cafe-cafeteria' ),
			'Right'  => esc_html__( 'Right', 'cafe-cafeteria' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'cafe_cafeteria_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_cafe_cafeteria',
		'label'       => esc_html__( 'Menus Text Transform', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'cafe-cafeteria' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'cafe-cafeteria' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'cafe-cafeteria' ),

		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'None' => __('None','cafe-cafeteria'),
            'Zoominn' => __('Zoom Inn','cafe-cafeteria'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_cafeteria_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','cafe-cafeteria'),
            'cube-loader' => __('Type 2','cafe-cafeteria'),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria'),
            'One Column' => __('One Column','cafe-cafeteria')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'cafe_cafeteria_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'cafe-cafeteria' ),
		'panel'          => 'cafe_cafeteria_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'cafe_cafeteria_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'cafe_cafeteria_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria')
		],
	] );

}
	// COLOR SECTION

	Kirki::add_section( 'cafe_cafeteria_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_global_colors',
		'section'     => 'cafe_cafeteria_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cafe_cafeteria_global_color',
		'label'       => __( 'choose your Appropriate Color', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_color',
		'default'     => '#dfb581',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cafe_cafeteria_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_color',
		'default'     => '#723626',
	] );

	// POST SECTION

	Kirki::add_section( 'cafe_cafeteria_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'cafe_cafeteria_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'cafe-cafeteria' ),
		'section'  => 'cafe_cafeteria_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'cafe-cafeteria' ),
			'option2' => esc_html__( 'Post Title', 'cafe-cafeteria' ),
			'option3' => esc_html__( 'Post Content', 'cafe-cafeteria' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_cafeteria_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cafe_cafeteria_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria'),
            'Three Column' => __('Three Column','cafe-cafeteria'),
            'Four Column' => __('Four Column','cafe-cafeteria'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','cafe-cafeteria'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','cafe-cafeteria'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','cafe-cafeteria')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cafe-cafeteria'),
            'Right Sidebar' => __('Right Sidebar','cafe-cafeteria'),
            'Three Column' => __('Three Column','cafe-cafeteria'),
            'Four Column' => __('Four Column','cafe-cafeteria'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','cafe-cafeteria'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','cafe-cafeteria'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','cafe-cafeteria')
		],
	] );

	Kirki::add_field( 'cafe_cafeteria_config', [
		'type'        => 'select',
		'settings'    => 'cafe_cafeteria_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'cafe-cafeteria' ),
				'2' => __( '2 Column', 'cafe-cafeteria' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'cafe_cafeteria_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_breadcrumb_heading',
		'section'     => 'cafe_cafeteria_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'cafe_cafeteria_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'cafe-cafeteria' ),
        'section'  => 'cafe_cafeteria_bradcrumb',
    ] );


	// HEADER SECTION

	Kirki::add_section( 'cafe_cafeteria_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'cafe-cafeteria' ),
	    'panel'          => 'cafe_cafeteria_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_button1_text',
		'section'     => 'cafe_cafeteria_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 1 Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'cafe-cafeteria' ),
		'settings' => 'cafe_cafeteria_register_text',
		'section'  => 'cafe_cafeteria_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'cafe-cafeteria' ),
		'settings' => 'cafe_cafeteria_register_link',
		'section'  => 'cafe_cafeteria_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_button2_text',
		'section'     => 'cafe_cafeteria_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 2 Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'cafe-cafeteria' ),
		'settings' => 'cafe_cafeteria_login_text',
		'section'  => 'cafe_cafeteria_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'cafe-cafeteria' ),
		'settings' => 'cafe_cafeteria_login_link',
		'section'  => 'cafe_cafeteria_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_search',
		'section'     => 'cafe_cafeteria_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_cart',
		'section'     => 'cafe_cafeteria_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_cart_box_enable',
		'label'       => esc_html__( 'Cart Enable / Disable Button', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_socail_link',
		'section'     => 'cafe_cafeteria_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'cafe_cafeteria_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'cafe-cafeteria' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'cafe-cafeteria' ),
		'settings'     => 'cafe_cafeteria_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'cafe-cafeteria' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cafe-cafeteria' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'cafe-cafeteria' ),
				'description' => esc_html__( 'Add the social icon url here.', 'cafe-cafeteria' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'cafe_cafeteria_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'cafe-cafeteria' ),
        'panel'          => 'cafe_cafeteria_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_enable_heading',
		'section'     => 'cafe_cafeteria_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_slide_title_enable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_slide_text_enable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_slider_heading',
		'section'     => 'cafe_cafeteria_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'cafe_cafeteria_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'cafe_cafeteria_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'cafe-cafeteria' ),
		'priority'    => 10,
		'choices'     => cafe_cafeteria_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_excerpt_number',
		'section'     => 'cafe_cafeteria_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_cafeteria_slide_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_slider_button_heading',
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_cafeteria_slider_button_text',
		'section'  => 'cafe_cafeteria_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'cafe_cafeteria_enable_heading_22',
	'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'cafe-cafeteria' ) . '</h3>',
	'priority'    => 10,
] );

	new \Kirki\Field\Select(
[
	'settings'    => 'cafe_cafeteria_slider_content_alignment',
	'label'       => esc_html__( 'Slider Content Alignment', 'cafe-cafeteria' ),
	'section'     => 'cafe_cafeteria_blog_slide_section',
	'default'     => 'LEFT-ALIGN',
	'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
	'choices'     => [
		'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'cafe-cafeteria' ),
		'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'cafe-cafeteria' ),
		'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'cafe-cafeteria' ),

	],
] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'0' => esc_html__( '0', 'cafe-cafeteria' ),
			'0.1' => esc_html__( '0.1', 'cafe-cafeteria' ),
			'0.2' => esc_html__( '0.2', 'cafe-cafeteria' ),
			'0.3' => esc_html__( '0.3', 'cafe-cafeteria' ),
			'0.4' => esc_html__( '0.4', 'cafe-cafeteria' ),
			'0.5' => esc_html__( '0.5', 'cafe-cafeteria' ),
			'0.6' => esc_html__( '0.6', 'cafe-cafeteria' ),
			'0.7' => esc_html__( '0.7', 'cafe-cafeteria' ),
			'0.8' => esc_html__( '0.8', 'cafe-cafeteria' ),
			'0.9' => esc_html__( '0.9', 'cafe-cafeteria' ),
			'unset' => esc_html__( 'unset', 'cafe-cafeteria' ),
			

		],
	] );

	// OUR STORY SECTION

	Kirki::add_section( 'cafe_cafeteria_our_story_section', array(
        'title'          => esc_html__( 'Our Story Settings', 'cafe-cafeteria' ),
        'panel'          => 'cafe_cafeteria_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_our_story_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_services_enable_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Story Section', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_our_story_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_our_story_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_section_title_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_cafeteria_our_story_section_title',
		'section'  => 'cafe_cafeteria_our_story_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_image1_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 1', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'cafe_cafeteria_our_story_image1',
		'section'     => 'cafe_cafeteria_our_story_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_image2_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Image 2', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'image',
		'settings'    => 'cafe_cafeteria_our_story_image2',
		'section'     => 'cafe_cafeteria_our_story_section',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_text_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_cafeteria_our_story_heading_text',
		'section'  => 'cafe_cafeteria_our_story_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_page_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'cafe_cafeteria_our_story',
		'section'     => 'cafe_cafeteria_our_story_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_our_story_xcerpt_heading',
		'section'     => 'cafe_cafeteria_our_story_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cafe_cafeteria_story_excerpt_number',
		'label'       => esc_html__( 'About Us Content Range', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_our_story_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'cafe_cafeteria_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'cafe-cafeteria' ),
        'panel'          => 'cafe_cafeteria_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cafe-cafeteria' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CAFE_CAFETERIA_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cafe-cafeteria' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cafe_cafeteria_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cafe-cafeteria' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_footer_text_heading',
		'section'     => 'cafe_cafeteria_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_cafeteria_footer_text',
		'section'  => 'cafe_cafeteria_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_cafeteria_footer_enable_heading',
		'section'     => 'cafe_cafeteria_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'cafe-cafeteria' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_cafeteria_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-cafeteria' ),
			'off' => esc_html__( 'Disable', 'cafe-cafeteria' ),
		],
	] );

		Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'cafe_cafeteria_footer_text_heading_2',
	'section'     => 'cafe_cafeteria_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'cafe-cafeteria' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cafe_cafeteria_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'cafe-cafeteria' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'cafe-cafeteria' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'cafe-cafeteria' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'cafe-cafeteria' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'cafe_cafeteria_footer_text_heading_1',
	'section'     => 'cafe_cafeteria_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'cafe-cafeteria' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cafe_cafeteria_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'cafe-cafeteria' ),
		'section'     => 'cafe_cafeteria_footer_section',
		'default'     => '',
	] );
}

/*
 *  Customizer Notifications
 */

$cafe_cafeteria_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'cafe-cafeteria' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'cafe-cafeteria' ) . '</strong>'
            ),
        ),
    ),
    'cafe_cafeteria_recommended_actions'       => array(),
    'cafe_cafeteria_recommended_actions_title' => esc_html__( 'Recommended Actions', 'cafe-cafeteria' ),
    'cafe_cafeteria_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'cafe-cafeteria' ),
    'cafe_cafeteria_install_button_label'      => esc_html__( 'Install and Activate', 'cafe-cafeteria' ),
    'cafe_cafeteria_activate_button_label'     => esc_html__( 'Activate', 'cafe-cafeteria' ),
    'cafe_cafeteria_deactivate_button_label'   => esc_html__( 'Deactivate', 'cafe-cafeteria' ),
);

Cafe_Cafeteria_Customizer_Notify::init( apply_filters( 'cafe_cafeteria_customizer_notify_array', $cafe_cafeteria_config_customizer ) );