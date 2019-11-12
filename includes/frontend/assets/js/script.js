jQuery( document ).ready( function( $ ){

	$( '#mx_simulation_configurator_request' ).on( 'submit', function( e ) {

		e.preventDefault();

		var nonce = $( this ).find( '#mxvfos_wpnonce_request' ).val();

		// Before we get into the specifics of your simulator, can you tell us ...
		// #edit-submitted-status-show
		var review1 = $( '#edit-submitted-status-show' ).text();

		// Please select from below the option that best describes how ...
		// #mx-question2-show
		var review2 = $( '#mx-question2-show' ).text();

		// Do you currently have a golf simulator?
		// #mx-question2-show
		var review3 = $( '#mx-question3-show' ).text();

		// Please select from below the option that best describes the environment into which you're planning to locate your simulator.
		// #mx-question4-show
		var review4 = $( '#mx-question4-show' ).text();

		// Please select from below the option that best describes your available space.
		// #mx-question5-show
		var review5 = $( '#mx-question5-show' ).text();

		// Location:
		// #mx-question6-show
		var review6 = $( '#mx-question6-show' ).text();

		// Wall Construction:
		// #mx-question7-show
		var review7 = $( '#mx-question7-show' ).text();

		// Floor type:
		// #mx-question8-show
		var review8 = $( '#mx-question8-show' ).text();

		// Ceiling type:
		// #mx-question9-show
		var review9 = $( '#mx-question9-show' ).text();

		// Ceilings:
		// #mx-question10-show
		var review10 = $( '#mx-question10-show' ).text();

		// Select any of the following that are near or within ...
		// #mx-question11-checkbox-area
		var review11_html = $( '#mx-question11-checkbox-area' ).html();

		review11_html = review11_html.trim();

		if( review11_html === '<li>None Selected</li>' ) {

			alert( 'Select any of the following that are near or within the room/area where you would like your simulator installed:' );

			return;

		}
		
		// Launch Monitor:
		// #mx-question_1
		var review12 = $( '#mx-question_1' ).text();

		// Computer:
		// #mx-question_2
		var review14 = $( '#mx-question_2' ).text();

		// Hitting Screen:
		// #mx-question_3
		var review15 = $( '#mx-question_3' ).text();

		// Projector:
		// #mx-question_4
		var review16 = $( '#mx-question_4' ).text();

		// Software:
		// #mx-question_5
		var review17 = $( '#mx-question_5' ).text();

		// Please review the course options below to give a sense of how many you might wish to kick off with
		// #mx-question12-show
		var review18 = $( '#mx-question12-show' ).text();

		// Football Skills:
		// #mx-question14-show
		var review19 = $( '#mx-question14-show' ).text();

		// Simulator Structure:
		// #mx-question_6
		var review20 = $( '#mx-question_6' ).text();

		// Hitting Mat:
		// #mx-question_7
		var review21 = $( '#mx-question_7' ).text();
		
		// Computer Cabinet:
		// #mx-question_8
		var review22 = $( '#mx-question_8' ).text();

		// Audio-Visual/Cinema:
		// #mx-question15-show
		var review23 = $( '#mx-question15-show' ).text();

		// Video Analysis and Pressure Mapping:
		// #mx-question16-show
		var review24 = $( '#mx-question16-show' ).text();

		// Simulator Structure:

		/*
		* personal data
		*/
		// region
		var user_region = $( '#edit-submitted-market' ).val();

		// name
		var user_name = $( '#edit-submitted-first-name' ).val();

		// last name
		var user_last_name = $( '#edit-submitted-last-name' ).val();

		// user email
		var user_email = $( '#edit-submitted-email' ).val();

		// user phone
		var user_phone = $( '#edit-submitted-phone' ).val();

		// add info textarea
		var add_info = $( '#edit-submitted-additional' ).val();

		/*
		* Form data
 		*/
 		var form_data = {
 			'review1': review1,
 			'review2': review2,
 			'review3': review3,
 			'review4': review4,
 			'review5': review5,
 			'review6': review6,
 			'review7': review7,
 			'review8': review8,
 			'review9': review9,
 			'review10': review10,
 			'review11_html': review11_html,
 			'review12': review12,
 			'review14': review14,
 			'review15': review15,
 			'review16': review16,
 			'review17': review17,
 			'review18': review18,
 			'review19': review19,
 			'review20': review20,
 			'review21': review21,
 			'review22': review22,
 			'review23': review23,
 			'review24': review24
 		};

		/*
		* user data
 		*/
 		var user_data = {
 			'user_region': user_region,
 			'user_name': user_name,
 			'user_last_name': user_last_name,
 			'user_email': user_email,
 			'user_phone': user_phone,
 			'add_info': add_info
 		};		


		var data = {

			'action': 'mxvfos_send_mail',
			'nonce': nonce,
			'user_data': user_data,
			'form_data': form_data
		};

		jQuery.post( mxvfos_front_localize.ajaxurl, data, function( response ){

			if( response === 'sent' ) {

				// alert( 'Thank you. Data\'s sent!' );

				$( '.mx-main-container-success' ).show();

				$( '.node-type-configurator' ).hide();

				$( '#mx_submit_button' ).remove();

				$( '#mx_simulation_configurator_request' ).find( 'input' ).attr( 'disabled', 'disabled' );

    			$( '#mx_simulation_configurator_request' ).find( 'select' ).attr( 'disabled', 'disabled' );

    			$( '#mx_simulation_configurator_request' ).find( 'textarea' ).attr( 'disabled', 'disabled' );

			}

		} );	

	} );

} );
