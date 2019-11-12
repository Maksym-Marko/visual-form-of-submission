<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Error Handle calss
*/
class MXVFOS_Display_Error
{

	/**
	* Error notice
	*/
	public $mxvfos_error_notice = '';

	public function __construct( $mxvfos_error_notice )
	{

		$this->mxvfos_error_notice = $mxvfos_error_notice;

	}

	public function mxvfos_show_error()
	{
		
		add_action( 'admin_notices', function() { ?>

			<div class="notice notice-error is-dismissible">

			    <p><?php echo $this->mxvfos_error_notice; ?></p>
			    
			</div>
		    
		<?php } );

	}

}