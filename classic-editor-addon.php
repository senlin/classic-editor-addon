<?php
/**
 * Plugin Name:			Classic Editor Addon
 * Description:			This free "Classic Editor Addon" plugin makes sure that the new block editor cannot be accidentally activated even while the "Classic Editor" plugin is active. See readme.txt for more details.

 * Author:				<a href="https://so-wp.com">Pieter Bos</a>, <a href="https://gschoppe.com">Greg Schoppe</a>
 * Version:				2.2.0

 * Requires at least:	4.9
 * Tested up to:		5.0

 * License:    			GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt

 * Text Domain: 		classic-editor-addon

 * GitHub Plugin URI:	https://github.com/senlin/classic-editor-addon
 * GitHub Branch:		master

 * @package WordPress
 * @author Pieter Bos &amp; GSchoppe
 * @since 1.0.0
 */

// don't load the plugin file directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Load WP_Dependency_Installer
include_once( __DIR__ . '/vendor/autoload.php' );
WP_Dependency_Installer::instance()->run( __DIR__ );

add_action( 'plugins_loaded', 'classic_editor_addon_post_init', 20, 0 );

function classic_editor_addon_post_init() {

	if ( class_exists( 'Classic_Editor' ) ) {
		/**
		 * Remove Settings link to the settings from the Plugins screen.
		 */
		remove_filter( 'plugin_action_links', array( 'Classic_Editor', 'add_settings_link' ) );
		remove_action( 'admin_init', array( 'Classic_Editor', 'register_settings' ) );
	}

}
