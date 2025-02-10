<?php

class Cafe_Cafeteria_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $cafe_cafeteria_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $cafe_cafeteria_recommended_actions_title;
	
	private $cafe_cafeteria_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $cafe_cafeteria_install_button_label;
	
	private $cafe_cafeteria_activate_button_label;
	
	private $cafe_cafeteria_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Cafe_Cafeteria_Customizer_Notify ) ) {
			self::$instance = new Cafe_Cafeteria_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $cafe_cafeteria_customizer_notify_recommended_plugins;
		global $cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions;

		global $cafe_cafeteria_install_button_label;
		global $cafe_cafeteria_activate_button_label;
		global $cafe_cafeteria_deactivate_button_label;

		$this->cafe_cafeteria_recommended_actions = isset( $this->config['cafe_cafeteria_recommended_actions'] ) ? $this->config['cafe_cafeteria_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->cafe_cafeteria_recommended_actions_title = isset( $this->config['cafe_cafeteria_recommended_actions_title'] ) ? $this->config['cafe_cafeteria_recommended_actions_title'] : '';
		$this->cafe_cafeteria_recommended_plugins_title = isset( $this->config['cafe_cafeteria_recommended_plugins_title'] ) ? $this->config['cafe_cafeteria_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$cafe_cafeteria_customizer_notify_recommended_plugins = array();
		$cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$cafe_cafeteria_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->cafe_cafeteria_recommended_actions ) ) {
			$cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions = $this->cafe_cafeteria_recommended_actions;
		}

		$cafe_cafeteria_install_button_label    = isset( $this->config['cafe_cafeteria_install_button_label'] ) ? $this->config['cafe_cafeteria_install_button_label'] : '';
		$cafe_cafeteria_activate_button_label   = isset( $this->config['cafe_cafeteria_activate_button_label'] ) ? $this->config['cafe_cafeteria_activate_button_label'] : '';
		$cafe_cafeteria_deactivate_button_label = isset( $this->config['cafe_cafeteria_deactivate_button_label'] ) ? $this->config['cafe_cafeteria_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'cafe_cafeteria_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'cafe_cafeteria_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'cafe_cafeteria_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'cafe_cafeteria_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function cafe_cafeteria_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'cafe-cafeteria-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/cafe-cafeteria-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'cafe-cafeteria-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/cafe-cafeteria-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'cafe-cafeteria-customizer-notify-js', 'cafecafeteriaCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'cafe-cafeteria' ),
			)
		);

	}

	
	public function cafe_cafeteria_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/cafe-cafeteria-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Cafe_Cafeteria_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Cafe_Cafeteria_Customizer_Notify_Section(
				$wp_customize,
				'cafe-cafeteria-customizer-notify-section',
				array(
					'title'          => $this->cafe_cafeteria_recommended_actions_title,
					'plugin_text'    => $this->cafe_cafeteria_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function cafe_cafeteria_customizer_notify_dismiss_recommended_action_callback() {

		global $cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'cafe_cafeteria_customizer_notify_show' ) ) {

				$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions = get_option( 'cafe_cafeteria_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'cafe_cafeteria_customizer_notify_show', $cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions );

				
			} else {
				$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions = array();
				if ( ! empty( $cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions ) ) {
					foreach ( $cafe_cafeteria_customizer_notify_cafe_cafeteria_recommended_actions as $cafe_cafeteria_lite_customizer_notify_recommended_action ) {
						if ( $cafe_cafeteria_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions[ $cafe_cafeteria_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions[ $cafe_cafeteria_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'cafe_cafeteria_customizer_notify_show', $cafe_cafeteria_customizer_notify_show_cafe_cafeteria_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function cafe_cafeteria_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$cafe_cafeteria_lite_customizer_notify_show_recommended_plugins = get_option( 'cafe_cafeteria_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$cafe_cafeteria_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$cafe_cafeteria_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'cafe_cafeteria_customizer_notify_show_recommended_plugins', $cafe_cafeteria_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
