<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require class for admin panel
*/
function mxvfos_require_class_file_admin( $file ) {

	require_once MXVFOS_PLUGIN_ABS_PATH . 'includes/admin/classes/' . $file;

}


/*
* Require class for frontend panel
*/
function mxvfos_require_class_file_frontend( $file ) {

	require_once MXVFOS_PLUGIN_ABS_PATH . 'includes/frontend/classes/' . $file;

}

/*
* Require a Model
*/
function mxvfos_use_model( $model ) {

	require_once MXVFOS_PLUGIN_ABS_PATH . 'includes/admin/models/' . $model . '.php';

}