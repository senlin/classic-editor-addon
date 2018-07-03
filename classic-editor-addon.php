<?php
/**
 * Plugin Name:	Classic Editor Addon
 * Description:	The Classic Editor plugin doesn't remove Gutenberg by default. This addon changes that and makes some more changes. See readme.txt for more details.

 * Author:		<a href="https://so-wp.com">Pieter Bos</a>, <a href="https://gschoppe.com">Greg Schoppe</a>
 * Version:		1.2

 * Requires at least:	4.9.6
 * Tested up to:		4.9.6

 * License:    			GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt

 * Text Domain: 		classic-editor-addon

 * GitHub Plugin URI:	https://github.com/senlin/classic-editor-addon
 * GitHub Branch:		master

 * @package WordPress
 * @author SO WP &amp; GSchoppe
 * @since 1.0.0
 */


// don't load the plugin file directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'plugins_loaded', 'classic_editor_addon_init', 1, 0 );

function classic_editor_addon_init() {
	/**
	 * Remove the Try Gutenberg Panel, slated for WordPress 4.9.8
	 */
	remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

	if ( function_exists( 'classic_editor_init_actions' ) ) {
		/**
		 * Change the default option of "no-replace" to "replace",
		 * which means the checkbox will be unticked and the plugin
		 * does what it says from the get-go (L336).
		 */
		add_filter( 'pre_option_classic-editor-replace', 'classic_editor_addon_hardcode_replace' );

		/**
		 * Remove Settings link to the settings from the Plugins screen (L277).
		 */
		add_action( 'plugins_loaded', 'classic_editor_addon_remove_settings_link' );

		/**
		 * Hide the Settings of the plugin on the Settings > Writing screen
		 */
		add_action( 'admin_footer', 'classic_editor_hide_settings' );
	}

}

function classic_editor_addon_hardcode_replace( $value ) {
	return 'replace';
}

function classic_editor_addon_remove_settings_link() {
	remove_filter( 'plugin_action_links', 'classic_editor_add_settings_link' );
}

function classic_editor_hide_settings() {
	echo '<style>#classic-editor-options{display:none;}</style>';
}
