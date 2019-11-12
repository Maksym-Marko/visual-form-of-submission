<?php
/*
Plugin Name: Visual form of submission
Plugin URI: https://github.com/Maxim-us/wp-plugin-skeleton
Description: Brief description
Author: Marko Maksym
Version: 1.0
Author URI: https://github.com/Maxim-us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Unique string - MXVFOS
*/

/*
* Define MXVFOS_PLUGIN_PATH
*
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\visual-form-of-submission\visual-form-of-submission.php
*/
if ( ! defined( 'MXVFOS_PLUGIN_PATH' ) ) {

	define( 'MXVFOS_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXVFOS_PLUGIN_URL
*
* Return http://my-domain.com/wp-content/plugins/visual-form-of-submission/
*/
if ( ! defined( 'MXVFOS_PLUGIN_URL' ) ) {

	define( 'MXVFOS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXVFOS_PLUGN_BASE_NAME
*
* 	Return visual-form-of-submission/visual-form-of-submission.php
*/
if ( ! defined( 'MXVFOS_PLUGN_BASE_NAME' ) ) {

	define( 'MXVFOS_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Define MXVFOS_TABLE_SLUG
*/
if ( ! defined( 'MXVFOS_TABLE_SLUG' ) ) {

	define( 'MXVFOS_TABLE_SLUG', 'mxvfos_table_slug' );

}

/*
* Define MXVFOS_PLUGIN_ABS_PATH
* 
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\visual-form-of-submission/
*/
if ( ! defined( 'MXVFOS_PLUGIN_ABS_PATH' ) ) {

	define( 'MXVFOS_PLUGIN_ABS_PATH', dirname( MXVFOS_PLUGIN_PATH ) . '/' );

}

/*
* Define MXVFOS_PLUGIN_VERSION
*/
if ( ! defined( 'MXVFOS_PLUGIN_VERSION' ) ) {

	// version
	define( 'MXVFOS_PLUGIN_VERSION', time() ); // Must be replaced before production on for example '1.0'

}

/*
* Define MXVFOS_MAIN_MENU_SLUG
*/
if ( ! defined( 'MXVFOS_MAIN_MENU_SLUG' ) ) {

	// version
	define( 'MXVFOS_MAIN_MENU_SLUG', 'mxvfos-visual-form-of-submission-menu' );

}

/**
 * activation|deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'install.php';

/*
* Registration hooks
*/
// Activation
register_activation_hook( __FILE__, array( 'MXVFOS_Basis_Plugin_Class', 'activate' ) );

// Deactivation
register_deactivation_hook( __FILE__, array( 'MXVFOS_Basis_Plugin_Class', 'deactivate' ) );


/*
* Include the main MXVFOSVisualFormOfSubmission class
*/
if ( ! class_exists( 'MXVFOSVisualFormOfSubmission' ) ) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/final-class.php';

	/*
	* Translate plugin
	*/
	add_action( 'plugins_loaded', 'mxvfos_translate' );

	function mxvfos_translate()
	{

		load_plugin_textdomain( 'mxvfos-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

}