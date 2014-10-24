<?php
/**
* Plugin Name: Custom WordPress Dashicons for TinyMCE Buttons
* Plugin URI: http://www.n7studios.co.uk/?p=2148&preview=true
* Version: 1.0
* Author: Tim Carr
* Author URI: http://www.n7studios.co.uk
* Description: Demonstrates how to use WordPress Dashicons in TinyMCE toolbar buttons.
*/

/**
* Called on the admin_head action, adds filters to:
* - register the TinyMCE Plugin Javascript,
* - add a button to the TinyMCE Editor
*/
function setupTinyMCEPlugins() {
	
	add_filter( 'mce_external_plugins', 'addTinyMCEPlugin' );
	add_filter( 'mce_buttons', 'addTinyMCEButton' );
	
}

/**
* Registers the TinyMCE Plugin Javascript
*
* @param array $plugins Plugins
* @return array Plugins
*/
function addTinyMCEPlugin( $plugins ) {
	
	$plugins['custom_tinymce_dashicons'] = plugins_url( 'custom-tinymce-dashicons.js', __FILE__ );
	return $plugins;
	
}

/**
* Adds a button to the TinyMCE Editor
*
* @param array $buttons Buttons
* @return array Buttons
*/
function addTinyMCEButton( $buttons ) {
	
	array_push( $buttons, 'custom_tinymce_dashicons' );
	return $buttons;
		
}

/**
* Called on the admin_enqueue_scripts action, enqueues CSS to 
* make all WordPress Dashicons available to TinyMCE. This is
* where most of the magic happens.
*/
function adminScriptsAndCSS() {
	
	wp_enqueue_style( 'custom_tinymce_dashicons', plugins_url( 'custom-tinymce-dashicons.css', __FILE__ ) );
		
}

// Register actions
add_action( 'admin_head', 'setupTinyMCEPlugins' );
add_action( 'admin_enqueue_scripts', 'adminScriptsAndCSS' );