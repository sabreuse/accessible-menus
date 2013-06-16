<?php
/*
Plugin Name:  Keyboard Accessible Dropdown Menus
Description:  Makes dropdown menus in WordPress themes keyboard accessible
Version:      0.4
Author:       Amy Hendrix, Graham Armfield
License:      GPL2
Plugin URI:   http://github.com/sabreuse/accessible-menus
Author URI:   http://amyhendrix.net
*/

/*  Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function ccadm_scripts() {
	wp_enqueue_script(
		'ccadm_script', plugins_url( '/cc-accessible-dropdown-menus.js' , __FILE__ ), array( 'jquery'), false, true
	);
}
add_action( 'wp_enqueue_scripts', 'ccadm_scripts' );


function ccadm_styles() {
	if (!wp_is_mobile())
		{   $strHtml = '<style type="text/css">
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

		echo $strHtml;}
}
add_action('wp_head', 'ccadm_styles');
