=== cc Accessible Dropdown Menus ===
Contributors: sabreuse, grahamarmfield
Tags: accessibility, a11y, menus, dropdown menus, navigation, keyboard navigation
Requires at least: 3.4
Tested up to: 3.6
Stable tag: 0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Makes dropdown menus in default WordPress themes keyboard accessible.

== Description ==

= Purpose: =

Many sites have dropdown menus where the expanding of the links can only be triggered by a mouse hover. This means that for keyboard only users parts of the site are harder or sometimes impossible to reach.

This plugin makes these dropdown menus keyboard accessible. When tabbing through the primary navigation the sub level menus will become visible and users will be able to tab to the lower level links.

The current version has been tested by sighted keyboard users as well as by users of the JAWS and NVDA screen readers. If you are a user of a different screen reader, we'd love to hear from you whether this solution works for you!

= How it Works: =

The plugin uses a combination of CSS and javascript to enable the dropdown menus to be keyboard controlled.

Using the script, whenever a link in the menu gets focus its containing list item (<li>) is given a class of hover. This enables the new CSS definitions to open any hidden submenus and bring those links into the tabbing order.

In the absence of javascript the full submenu lists may not open but the individual sub-links can be tabbed to.

= Credits: =

Current version built and maintained by Amy Hendrix.

The original version of this plugin was built by Graham Armfield. It is still available at http://www.coolfields.co.uk/2011/12/wordpress-keyboard-accessible-dropdown-menus-plugin-version-0-1/

The mechanism used in this plugin is based on the same logic used in Blake Haswell's excellent example of a multi-level accessible dropdown menu. You can find it at: http://blakehaswell.com/lab/dropdown/deux/


== Frequently Asked Questions ==

= Will this work with any theme? =

At the moment, the plugin works in Twenty Twelve and Twenty Thirteen. For Twenty Ten and Twenty Eleven, see Graham's original plugin at http://www.coolfields.co.uk/2011/12/wordpress-keyboard-accessible-dropdown-menus-plugin-version-0-1/. Support for other themes is planned for future releases.

= What about child themes? =

If the plugin works in a parent theme, it should work in most child themes based on that parent. However, because of the nature of child themes, this cannot be guaranteed in every case.

== Changelog ==

= 0.3 =
* Fix an issue that caused the keyboard access code to break mobile navigation.
* Completely replace the original JavaScript to modernize the code and allow for licensing.

= 0.2 =
* Pre-release build for client needs. Compatible with Twenty Twelve & Twenty Thirteen.
* Correctly enqueue scripts.
* Reformat README for Plugin Repo submission.

= 0.1 =
* Original version.
