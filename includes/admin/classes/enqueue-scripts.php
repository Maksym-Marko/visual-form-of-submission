<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXVFOS_Enqueue_Scripts
{

	/*
	* MXVFOS_Enqueue_Scripts
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
		add_action( 'admin_enqueue_scripts', array( 'MXVFOS_Enqueue_Scripts', 'mxvfos_enqueue' ) );

	}

		public static function mxvfos_enqueue()
		{

			wp_enqueue_style( 'mxvfos_font_awesome', MXVFOS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxvfos_admin_style', MXVFOS_PLUGIN_URL . 'includes/admin/assets/css/style.css', array( 'mxvfos_font_awesome' ), MXVFOS_PLUGIN_VERSION, 'all' );

			// wp_enqueue_script( 'mxvfos_admin_script_jq', MXVFOS_PLUGIN_URL . 'includes/admin/assets/js/jquery.js', array(), MXVFOS_PLUGIN_VERSION, false );

			wp_enqueue_script( 'mxvfos_admin_script', MXVFOS_PLUGIN_URL . 'includes/admin/assets/js/script.js', array( 'jquery' ), MXVFOS_PLUGIN_VERSION, false );

		}

}