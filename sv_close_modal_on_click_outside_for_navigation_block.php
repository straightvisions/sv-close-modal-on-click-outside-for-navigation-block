<?php
/*
Version: 1.0.00
Plugin Name: SV Close Modal on Click Outside for Navigation Block
Text Domain: sv_close_modal_on_click_outside_for_navigation_block
Description: The modal for the mobile menu of the navigation block is closed by default only when the burger icon is clicked. This single-purpose-plugin adds a small Javascript snippet to the functionality so that the modal also closes when an area outside the menu is clicked.
Plugin URI: https://straightvisions.com/
Author: straightvisions GmbH
Author URI: https://straightvisions.com
Domain Path: /languages
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0-standalone.html
*/

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script('sv_close_modal_on_click_outside_for_navigation_block', plugin_dir_url( __FILE__ ).'/frontend.min.js', array('wp-block-navigation-view-2'), filemtime(plugin_dir_path( __FILE__ ).'/frontend.js'), true);
} );