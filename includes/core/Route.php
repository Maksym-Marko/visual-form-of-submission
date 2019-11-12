<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// require Route-Registrar.php
require_once MXVFOS_PLUGIN_ABS_PATH . 'includes/core/Route-Registrar.php';

/*
* Routes class
*/
class MXVFOS_Route
{

	public function __construct()
	{
		// ...
	}
	
	public static function mxvfos_get( ...$args )
	{

		return new MXVFOS_Route_Registrar( ...$args );

	}
	
}