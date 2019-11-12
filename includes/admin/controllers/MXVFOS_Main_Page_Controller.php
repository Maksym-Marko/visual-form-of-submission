<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXVFOS_Main_Page_Controller extends MXVFOS_Controller
{
	
	public function index()
	{

		$model_inst = new MXVFOS_Main_Page_Model();

		$data = $model_inst->mxvfos_get_form_data();

		return new MXVFOS_View( 'main-page', $data );

	}

}