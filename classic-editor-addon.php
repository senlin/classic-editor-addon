<?php
/**
 * Plugin Name:			Classic Editor +
 * Description:			The "Classic Editor +" plugin disables the block editor, removes enqueued scripts/styles and brings back classic Widgets.

 * Author:				<a href="https://so-wp.com">Pieter Bos</a>, <a href="https://gschoppe.com">Greg Schoppe</a>
 * Version:				4.2.0

 * Requires at least:	4.9
 * Tested up to:		6.2

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

// deactivate Classic Editor plugin
add_action( 'admin_init', 'cea_deactivate_ce' );
function cea_deactivate_ce() {
	if ( is_admin() && current_user_can( 'activate_plugins' ) &&  is_plugin_active( 'classic-editor/classic-editor.php' ) ) {

		deactivate_plugins( 'classic-editor/classic-editor.php' );

	}
}

add_action( 'enqueue_block_assets', 'cea_remove_block_styles', 100 );

function cea_remove_block_styles() {

	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library' );

	wp_dequeue_style( 'wp-block-library-theme' );
	wp_deregister_style( 'wp-block-library-theme' );
	
	// Remove inline global CSS on the front end.
	wp_dequeue_style( 'global-styles' );
	wp_deregister_style( 'global-styles' );
    
	// @2.5.0 add condition that checks for WooCommerce and removes call to block styles
	if ( class_exists( 'woocommerce' ) ) {
		wp_dequeue_style( 'wc-blocks-style' );
		wp_deregister_style( 'wc-blocks-style' );
	}
    
}

// Remove global styles and enqueueing of classic-themes.min.css 
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' );
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

/**
 * Bring back Classic Widgets
 *
 * @since 3.1.0
 * @src: https://plugins.svn.wordpress.org/classic-widgets/tags/0.3/classic-widgets.php
 */
// Disable the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disable the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Disable block styling that WPML adds to every page load regardless of whether Blocks are being used.
 * file that loads these styles: classes/block-editor/Loader.php (L25 & L77-84)
 */
add_action( 'wp_enqueue_scripts', 'cea_disable_wpml_block_styles', 11 );

function cea_disable_wpml_block_styles() {
    // Check if WPML is active and the WPML\BlockEditor\Loader class exists
    if ( function_exists( 'is_plugin_active' ) && is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) && class_exists( 'WPML\BlockEditor\Loader' ) ) {
        wp_deregister_style( WPML\BlockEditor\Loader::SCRIPT_NAME );
    }
}
