<?php
/*
Plugin Name:  ccAccessibleDropdownMenus
Plugin URI:   http://www.coolfields.co.uk
Description:  Makes dropdown menus in default WordPress theme keyboard accessible
Version:      0.2
Author:       Graham Armfield
Author URI:   http://www.coolfields.co.uk
*/
function writeScriptFile() {
   $path = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    echo '<script src="'.$path.'cc-accessible-dropdown-menus.js" type="text/javascript"></script>';
    echo '<script type="text/javascript"></script>';
}

add_action('wp_footer', 'writeScriptFile');


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