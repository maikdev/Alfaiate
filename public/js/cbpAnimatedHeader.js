/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.elmaster' ),
		didScroll = false,
		changeHeaderOn = 750;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 100 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if(header!=null){
		
			if ( sy >= changeHeaderOn) {
				classie.remove( header, 'masthead-stacked' );
				classie.add( header, 'masthead-inline' );
			}
			else {
				classie.add( header, 'masthead-stacked' );
				classie.remove( header, 'masthead-inline' );
			}
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();