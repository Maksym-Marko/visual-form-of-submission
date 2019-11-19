jQuery( document ).ready( function( $ ) {

	$( '#mxvfos_form_update_data' ).on( 'submit', function( e ){

		e.preventDefault();

		var cout_of_inputs = parseInt( $( '#mxvfos_form_update_data input:not(.mx-not-input)' ).length );

		var data_obj = {};

		for( var i = 0; i < cout_of_inputs; i++ ) {

			var field_val  = $( '#mx-field-' + i ).val();

			// console.log( field_val );

			field_val = field_val.replace( '\'', '&apos;' );
			field_val = field_val.replace( '’', '&apos;' );

			data_obj['mx-field-' + i] = field_val;			

		}

		var text_area1 = $( '#mx-field-24-t' ).val();

		var text_area2 = $( '#mx-field-72-t' ).val();

		// console.log( text_area2 );

		

		var nonce = $( this ).find( '#mxvfos_wpnonce' ).val();

		var data = {

			'action': 'mxvfos_update_form_data',
			'nonce': nonce,
			'data_obj': data_obj,
			'text_area1': text_area1,
			'text_area2': text_area2

		};

		jQuery.post( ajaxurl, data, function( response ){

			if( parseInt( response ) === 1 ) {

				alert( 'Data has updated.' );

			} else {

				alert( 'Something went wrong. Try to change data.' );

			}

		} );

	} );

} );