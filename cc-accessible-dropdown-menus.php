<?php
/*
Plugin Name:  Keyboard Accessible Dropdown Menus
Description:  Makes dropdown menus in default WordPress themes keyboard accessible
Version:      0.3
Author:       Amy Hendrix, based on previous work by Graham Armfield
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
