<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXVFOS_Admin_Main
{

	// list of model names used in the plugin
	public $models_collection = [
		'MXVFOS_Main_Page_Model'
	];

	/*
	* MXVFOS_Admin_Main constructor
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
		mxvfos_require_class_file_admin( 'enqueue-scripts.php' );

		MXVFOS_Enqueue_Scripts::mxvfos_register();

	}

	/*
	* Models Connection
	*/
	public function mxvfos_models_collection()
	{

		// require model file
		foreach ( $this->models_collection as $model ) {
			
			mxvfos_use_model( $model );

		}		

	}

	/**
	* registration ajax actions
	*/
	public function mxvfos_registration_ajax_actions()
	{

		// ajax requests to main page
		MXVFOS_Main_Page_Model::mxvfos_wp_ajax();

	}

	/*
	* Routes collection
	*/
	public function mxvfos_routes_collection()
	{

		// main menu item
		MXVFOS_Route::mxvfos_get( 'MXVFOS_Main_Page_Controller', 'index', '', [
			'page_title' => 'Visual form of submission',
			'menu_title' => 'Visual Form'
		] );

	}

}

// Initialize
$initialize_admin_class = new MXVFOS_Admin_Main();

// include classes
$initialize_admin_class->mxvfos_additional_classes();

// include models
$initialize_admin_class->mxvfos_models_collection();

// ajax requests
$initialize_admin_class->mxvfos_registration_ajax_actions();

// include controllers
$initialize_admin_class->mxvfos_routes_collection();