=== Accessible Dropdown Menus ===
Contributors: sabreuse, GrahamArmfield
Tags: accessibility, a11y, menus, dropdown menus, navigation, keyboard navigation
Requires at least: 3.4
Tested up to: 3.6
Stable tag: 0.4.1
License: MIT
License URI: http://opensource.org/licenses/MIT

Makes dropdown menus in many WordPress themes keyboard accessible.

== Description ==

= Purpose: =

Many sites have dropdown menus where the expanding of the links can only be triggered by a mouse hover. This means that for keyboard only users parts of the site are harder or sometimes impossible to reach.

This plugin makes these dropdown menus keyboard accessible. When tabbing through the primary navigation the sub level menus will become visible and users will be able to tab to the lower level links.

The current version has been tested by both sighted keyboard-only users and screen reader users. If it doesn't work for your reader, please let us know!

= How it Works: =

The plugin uses a combination of CSS and javascript to enable the dropdown menus to be keyboard controlled.

Using the script, whenever a link in the menu gets focus its containing list item (<li>) is given the necessary class. This enables the new CSS definitions to open any hidden submenus and bring those links into the tabbing order.

In the absence of javascript the full submenu lists may not open but the individual sub-links can be tabbed to.

= Credits: =

Current version built and maintained by Amy Hendrix.

The original version of this plugin was built by Graham Armfield. It is still available at http://www.coolfields.co.uk/2011/12/wordpress-keyboard-accessible-dropdown-menus-plugin-version-0-1/

The mechanism used in this plugin is based on the same logic used in Blake Haswell's excellent example of a multi-level accessible dropdown menu. You can find it at: http://blakehaswell.com/lab/dropdown/deux/


== Frequently Asked Questions ==

= Will this work with any theme? =

We can't guarantee that it works in all themes, but it now works with many more than in earlier versions. It has been tested in Twenty Ten through Twenty Thirteen, themes based on Automattic's Underscores base theme, and a number of others. The plugin looks for the "navigation" ARIA role rather than any particular ID, so it should work in most themes that correctly implement roles.

= What about child themes? =

If the plugin works in a parent theme, it should work in child themes based on that parent. However, because of the nature of child themes, this cannot be guaranteed.

== Changelog ==

= 0.4 =
* Extend to multiple themes: now works with all the Twenties, themes based on Underscores, and many others, provided they correctly use ARIA role=navigation for menus.
* JavaScript refactoring for better performance.

= 0.3 =
* Fix an issue that caused the keyboard access code to break mobile navigation.
* Completely replace the original JavaScript to modernize the code and allow for licensing.

= 0.2 =
* Pre-release build for client needs. Compatible with Twenty Twelve & Twenty Thirteen.
* Correctly enqueue scripts.
* Reformat README for Plugin Repo submission.

= 0.1 =
* Original version.
