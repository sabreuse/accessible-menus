<?php
/*
Plugin Name:  Keyboard Accessible Dropdown Menus
Description:  Makes dropdown menus in default WordPress themes keyboard accessible
Version:      0.2
Author:       Amy Hendrix, based on previous work by Graham Armfield
*/

function ccadm_scripts() {
   wp_enqueue_script(
      'ccadm_script', plugins_url( '/cc-accessible-dropdown-menus.js' , __FILE__ ), array( 'jquery'), false, true
   );
}

add_action( 'wp_enqueue_scripts', 'ccadm_scripts' );


function reviseStyles() {
   $strHtml = '<style type="text/css">
   /* Extra styles to allow keyboard accessibility of dropdown menus */
   #site-navigation ul ul {
      display: block;
      margin-left:-9999px;
   }

   #site-navigation ul li.hover > ul,
   #site-navigation ul a:focus+ul {
   	margin-left:0;
   }
</style>';

   echo $strHtml;
}
add_action('wp_head', 'reviseStyles');