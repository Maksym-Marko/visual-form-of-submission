<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXVFOS_FrontEnd_Main
{

	/*
	* MXVFOS_FrontEnd_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxvfos_additional_classes()
	{

		// enqueue_scripts class
		mxvfos_require_class_file_frontend( 'enqueue-scripts.php' );

		MXVFOS_Enqueue_Scripts_Frontend::mxvfos_register();

		// shortcode class
		mxvfos_require_class_file_frontend( 'shortcode.php' );

		MXVFOS_Shortcode::create_shortcode();

		// send email
		mxvfos_require_class_file_frontend( 'send-email.php' );

		MXVFOSSendMailTo::mxvfos_wp_ajax();

	}

}

// Initialize
$initialize_admin_class = new MXVFOS_FrontEnd_Main();

// include classes
$initialize_admin_class->mxvfos_additional_classes();