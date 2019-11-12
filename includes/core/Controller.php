<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Controllers class
*/
abstract class MXVFOS_Controller
{

	/**
	* Catch missing methods on the controller
	*/
	public function __call( $name, $arguments ) {

		echo 'Missing method "' . $name . '"!';

	}
	
}