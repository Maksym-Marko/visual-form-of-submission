<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Main page Model
*/
class MXVFOS_Main_Page_Model extends MXVFOS_Model
{

	/*
	* Observe function
	*/
	public static function mxvfos_wp_ajax()
	{

		add_action( 'wp_ajax_mxvfos_update', array( 'MXVFOS_Main_Page_Model', 'prepare_update_form_data' ), 10, 1 );

	}

	/*
	* Prepare for data updates
	*/
	public static function prepare_update_form_data()
	{
		
		// Checked POST nonce is not empty
		if( empty( $_POST['nonce'] ) ) wp_die( '0' );

		// Checked or nonce match
		if( wp_verify_nonce( $_POST['nonce'], 'mxvfos_nonce_request' ) ){

			// Update data
			self::update_form_data( $_POST['mxvfos_some_string'] );		

		}

		wp_die();

	}

		// Update data
		public static function update_form_data( $string )
		{

			// update_options()

		}

	public function mxvfos_get_form_data()
	{
		return array(
			'field1' => 'some data'
		);
	}
	
}