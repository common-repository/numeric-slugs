=== Numeric Slugs ===
Contributors: spinfly
Donate link: 
Tags: numeric, slugs, postname, number, title, post
Requires at least: 3.3
Tested up to: 3.5.2
Stable tag: trunk 
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use post titles and slugs made of only numbers.

== Description ==

When using /sample-post/ or /%postname%/ permalinks and a slug consisting of only numbers, WordPress incorrectly interprets this as pagination and doesn't handle things correctly. This plug-in will send users to the correct post.

== Installation ==

The best way is always to install through the WordPress back-end.

If you want to do it manually:

1. Upload the `numeric-slugs` directory to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Which post titles does this affect? =

Posts with titles and slugs made entirely of numbers seem to be considered pagination by WordPress. Instead of getting paginated summary pages or "post not found" errors, this plug-in allows for the correct posts to be shown.

= What about WordPress 3.6? =

WordPress seems to have addressed this issue internally, so this plug-in is no longer required.

== Changelog ==

= 1.0.1 =
* Updated plug-in to work with all titles/slugs of any length that are entirely numbers.
* Expanded readme.txt

= 1.0.0 =
* Initial release