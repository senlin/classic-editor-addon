<?php
/**
 * Plugin Name:			Classic Editor Addon
 * Description:			This free "Classic Editor Addon" plugin makes sure that Gutenberg cannot be accidentally activated even while the "Classic Editor" plugin is active. See readme.txt for more details.

 * Author:				<a href="https://so-wp.com">Pieter Bos</a>, <a href="https://gschoppe.com">Greg Schoppe</a>
 * Version:				2.1.0

 * Requires at least:	4.9
 * Tested up to:		4.9.8

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

	if ( function_exists( 'classic_editor_init_actions' ) ) {
		/**
		 * Remove Settings link to the settings from the Plugins screen (L277).
		 */
		remove_filter( 'plugin_action_links', 'classic_editor_add_settings_link' );
		remove_action( 'admin_init', 'classic_editor_admin_init' );
	}

}
