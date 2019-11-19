<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXVFOS_Enqueue_Scripts_Frontend
{

	/*
	* MXVFOS_Enqueue_Scripts_Frontend
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public static function mxvfos_register()
	{

		// register scripts and styles
		add_action( 'wp_enqueue_scripts', array( 'MXVFOS_Enqueue_Scripts_Frontend', 'mxvfos_enqueue' ) );

	}

		public static function mxvfos_enqueue()
		{

			wp_enqueue_style( 'mxvfos_font_awesome', MXVFOS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );
			
			// wp_enqueue_style( 'mxvfos_style', MXVFOS_PLUGIN_URL . 'includes/frontend/assets/css/style.css', array( 'mxvfos_font_awesome' ), MXVFOS_PLUGIN_VERSION, 'all' );
			
			// wp_enqueue_script( 'mxvfos_script', MXVFOS_PLUGIN_URL . 'includes/frontend/assets/js/script.js', array( 'jquery' ), MXVFOS_PLUGIN_VERSION, false );

			// wp_localize_script( 'mxvfos_script', 'mxvfos_front_localize', array(
			// 	'ajaxurl' => admin_url( 'admin-ajax.php' )
			// ) );
		
		}

}