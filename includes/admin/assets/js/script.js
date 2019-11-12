jQuery( document ).ready( function( $ ) {

	$( '#mxvfos_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( this ).find( '#mxvfos_wpnonce' ).val();

		var someString = $( '#mxvfos_some_string' ).val();

		var data = {

			'action': 'mxvfos_update',
			'nonce': nonce,
			'mxvfos_some_string': someString

		};

		jQuery.post( mxmlb_admin_localize.ajaxurl, data, function( response ){

			// console.log( response );
			alert( 'Value updated.' );

		} );

	} );

} );