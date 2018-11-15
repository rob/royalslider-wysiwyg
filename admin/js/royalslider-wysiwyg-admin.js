/**
 * royalslider-wysiwyg-admin.js
 */

 (function( $ ) {

	'use strict';

	if ( 'undefined' != ( typeof jQuery && typeof jQuery.fn.jqte ) ) {

		$( '.slides-description-c' ).jqte( {
			sub:     false,
			sup:     false,
			indent:  false,
			outdent: false,
			strike:  false,
			format:  false,
		} );

	}

} )( jQuery );
