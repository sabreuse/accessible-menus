<?php
/*
Plugin Name:  ccAccessibleDropdownMenus
Plugin URI:   http://www.coolfields.co.uk
Description:  Makes dropdown menus in default WordPress theme keyboard accessible
Version:      0.2
Author:       Graham Armfield
Author URI:   http://www.coolfields.co.uk
*/

function kadm_scripts() {
   wp_enqueue_script(
      'kadm_script', plugins_url( '/cc-accessible-dropdown-menus.js' , __FILE__ ), array( 'jquery'), false, true
   );
}

add_action( 'wp_enqueue_scripts', 'kadm_scripts' );


function reviseStyles() {
   $strHtml = '<style type="text/css">
   /* Extra styles to allow keyboard accessibility of dropdown menus in default Wordpress theme */
   #access ul ul {
      display: block;
      margin-left:-9999px;
   }

   #access a:focus,
   #access ul ul :focus {
   	background: #333;
   	color: #fff;
   }

   #access li.hover > a,
   #access ul ul .hover > a {
   	background: #333;
   	color: #fff;
   }

   #access ul li.hover > ul,
   #access ul a:focus+ul {
   	margin-left:0;
   }
</style>';

   echo $strHtml;
}
add_action('wp_head', 'reviseStyles');

?>