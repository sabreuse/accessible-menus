=== cc Accessible Dropdown Menus ===
Contributors: grahamarmfield, sabreuse
Donate link: http://example.com/
Tags: accessibility, a11y, menus, dropdown menus
Requires at least: 3.0.1
Tested up to: 3.6
Stable tag: 0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Makes dropdown menus in default WordPress themes keyboard accessible.

== Description ==

= Purpose: =

Many sites have dropdown menus where the expanding of the links can only be triggered by a mouse hover. This means that for keyboard only users parts of the site are harder or sometimes impossible to reach.


This plugin attempts to make these dropdown menus keyboard accessible - intially in the WordPress default themes. When tabbing through the primary navigation the sub level menus will become visible and users will be able to tab to the lower level links.

Much work has been done in the area of accessible dropdown menus and there is nothing original in this plugin. But perhaps it is the first time that a solution has been placed in a WordPress plugin.

The mechanism used in this plugin has been copied from Blake Haswell's excellent example of a multi-level accessible dropdown menu. You can find it at: http://blakehaswell.com/lab/dropdown/deux/

I've made some necessary amendments to get it to work in WordPress - starting with the default WordPress themes.

= Works With: =

The plugin currently only works in the default WordPress themes 'twentyeleven' and 'twentyten' - this has been tested. 
It may work in child themes using those themes as the parent but that has not been tested.

The plugin may also work in any other themes that have the horizontal navigation in a container with an id of 'access' may also work. This also has not been tested.


= How it Works: =

The plugin uses a combination of CSS and javascript to enable the dropdown menus to be keyboard controlled.

An extra stylesheet block is included in the header section of each WordPress page and the small javascript file is included at the bottom of the page so as not to slow the page down.

Using the script, whenever a link in the menu gets focus its containing list item (<li>) is given a class of hover. This enables the new CSS definitions to open any hidden submenus and bring those links into the tabbing order.

In the absence of javascript the full submenu lists may not open but the individual sub-links can be tabbed to.

For a full description of the functionality see Blake Haswell's page at: http://blakehaswell.com/lab/dropdown/deux/



== Installation ==

= Installing the Plugin: =

Place the cc-accessible-dropdown-menus folder into the plugins folder within your site. Then go to the plugins page in the Admin area and activate the plugin. There are no options for the plugin in version 0.1.

= Uninstalling the Plugin: =

Deactivate the plugin from the plugins page. If you wish to you can delete the cc-accessible-dropdown-menus folder from your plugins folder.

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Changelog ==

= 0.3 =
* Fix an issue that caused the keyboard access code to break mobile navigation.
* Complete rewrite of the original JavaScript, which didn't have an explicit license that I could find.

= 0.2 =
* Pre-release build for client needs. Compatible with Twenty Twelve & Twenty Thirteen.
* Correctly enqueue scripts.
* README Updates for initial Plugin Repo submission.

= 0.1 =
* Original version.
