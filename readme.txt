
ccAccessibleDropdownMenus Plugin Version 0.1
============================================

Purpose:
--------

Many sites have dropdown menus where the expanding of the links can only be triggered by a mouse hover. This means that for keyboard only users parts of the site are harder or sometimes impossible to reach.


This plugin attempts to make these dropdown menus keyboard accessible - intially in the WordPress default themes. When tabbing through the primary navigation the sub level menus will become visible and users will be able to tab to the lower level links.

Much work has been done in the area of accessible dropdown menus and there is nothing original in this plugin. But perhaps it is the first time that a solution has been placed in a WordPress plugin.

The mechanism used in this plugin has been copied from Blake Haswell's excellent example of a multi-level accessible dropdown menu. You can find it at: http://blakehaswell.com/lab/dropdown/deux/

I've made some necessary amendments to get it to work in WordPress - starting with the default WordPress themes.

Works With:
-----------

The plugin currently only works in the default WordPress themes 'twentyeleven' and 'twentyten' - this has been tested. 
It may work in child themes using those themes as the parent but that has not been tested.

The plugin may also work in any other themes that have the horizontal navigation in a container with an id of 'access' may also work. This also has not been tested.


What the Plugin Consists Of:
----------------------------

There are three files in the plugin folder:

readme.txt - this file

cc-accessible-dropdown-menus.php - PHP file containing the functions to insert the necessary code into WordPress pages

cc-accessible-dropdown-menus.js - 


How it Works:
-------------

The plugin uses a combination of CSS and javascript to enable the dropdown menus to be keyboard controlled.

An extra stylesheet block is included in the header section of each WordPress page and the small javascript file is included at the bottom of the page so as not to slow the page down.

Using the script, whenever a link in the menu gets focus its containing list item (<li>) is given a class of hover. This enables the new CSS definitions to open any hidden submenus and bring those links into the tabbing order.

In the absence of javascript the full submenu lists may not open but the individual sub-links can be tabbed to.

For a full description of the functionality see Blake Haswell's page at: http://blakehaswell.com/lab/dropdown/deux/


Installing the Plugin:
----------------------

Place the cc-accessible-dropdown-menus folder into the plugins folder within your site. Then go to the plugins page in the Admin area and activate the plugin. There are no options for the plugin in version 0.1.

Uninstalling the Plugin:
------------------------

Deactivate the plugin from the plugins page. If you wish to you can delete the cc-accessible-dropdown-menus folder from your plugins folder.



Changelog:
----------

0.1 - Initial version.

