<?php
/*
Plugin Name:  Keyboard Accessible Dropdown Menus
Description:  Makes dropdown menus in WordPress themes keyboard accessible
Version:      0.4
Author:       Amy Hendrix, Graham Armfield
License:      MIT
Plugin URI:   http://github.com/sabreuse/accessible-menus
Author URI:   http://amyhendrix.net
*/

/*  Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

function ccadm_scripts() {
	if ( !wp_is_mobile() ) {
		wp_enqueue_script(
			'ccadm_script', plugins_url( '/accessible-dropdown-menus.js' , __FILE__ ), array( 'jquery'), false, true);
	}
}
add_action( 'wp_enqueue_scripts', 'ccadm_scripts' );


function ccadm_styles() {
	if ( !wp_is_mobile() ) {
	$strHtml = '<style type="text/css">
		/* Extra styles to allow keyboard accessibility of dropdown menus */
		div:not(#wpadminbar) [role="navigation"] ul ul {
			display: block !important;
			margin-left:-9999px !important;
		}

		div:not(#wpadminbar) [role="navigation"] ul li.ccadm-hover > ul,
		div:not(#wpadminbar) [role="navigation"] ul a:focus+ul {
			margin-left:0 !important;
		}
	</style>';

		echo $strHtml;
	}
}
add_action('wp_head', 'ccadm_styles');
