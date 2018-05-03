jQuery( document ).ready( function( $ ){

	$( '#|uniquestring|_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( '#|uniquestring|_wpnonce' ).val();
		var script_string = $( '#|uniquestring|_script_body' ).val();
		var block_string = $( '#|uniquestring|_block_body' ).val();
		var is_checked_restore = $( '#|uniquestring|_restore_data' ).prop( 'checked' );

		var start_restore = is_checked_restore === true ? 'restore' : '0';

		var current_url = $( '#|uniquestring|_current_url' ).val();

		var data = {

			'action': '|uniquestring|_update',
			'nonce': nonce,
			'script_string': script_string,
			'block_string': block_string,
			'is_checked_restore': start_restore,
			'current_url': current_url

		};

		jQuery.post( ajaxurl, data, function( response ){


			if( data.is_checked_restore === 'restore' ){

				setTimeout( function(){

					window.location.href = data.current_url;

				}, 100 );
				
			}

			alert( 'Changes saved!' );

		} );		

	} );

} );