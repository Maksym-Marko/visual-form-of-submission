<?php
	var_dump($data);
?>

<div class="mx-main-page-text-wrap">
	
	<h1><?php echo __( 'Form settings', 'mxvfos-domain' ); ?></h1>

	<div class="mx-block_wrap">

		<p><?php echo __( 'Copy and paste this shortcode to the page.', 'mxvfos-domain' ); ?></p>

		<span>[mxvfos_visual_form_of_submission]</span>

		<!-- <form id="mxvfos_form_update" class="mx-settings" method="post" action="">

			<h2>Default script</h2>
			<textarea name="mxvfos_some_string" id="mxvfos_some_string"><?php echo $data->some_field; ?></textarea>

			<p class="mx-submit_button_wrap">
				<input type="hidden" id="mxvfos_wpnonce" name="mxvfos_wpnonce" value="<?php echo wp_create_nonce( 'mxvfos_nonce_request' ) ;?>" />
				<input class="button-primary" type="submit" name="mxvfos_submit" value="Save" />
			</p>

		</form> -->

	</div>

</div>