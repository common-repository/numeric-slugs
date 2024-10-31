<?php

/*
Plugin Name: Numeric Slugs
Plugin URI: http://wordpress.org/plugins/numeric-slugs/
Description: When using /%postname%/ permalinks and a slug consisting of only numeric characters, WordPress incorrectly interprets this as pagination and doesn't handle things correctly. This plug-in will send users to the correct post.
Version: 1.0.1
Author: Jeff Nyveen
Author URI: http://web.jeffnyveen.com/
License: GPL2
*/

/*  Copyright 2013  Jeff Nyveen  (email : jnyveen@gmail.com)

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

// Force a flush of the rewrite rules when this plugin is activated
function allow_numeric_slugs_activate() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

register_activation_hook(__FILE__, 'allow_numeric_slugs_activate');

// Remove the offending rule and replace it with something else
function allow_numeric_slugs($rules) {
    $rules['^[0-9]+$'] = 'index.php?pagename=$matches[1]';
    return $rules;
}

add_filter('page_rewrite_rules', 'allow_numeric_slugs');
