<?php
/**
 * Plugin Name:			Classic Editor +
 * Description:			The "Classic Editor +" plugin disables the block editor, removes enqueued scripts/styles and brings back classic Widgets.

 * Author:			<a href="https://so-wp.com">Pieter Bos</a>, <a href="https://gschoppe.com">Greg Schoppe</a>
 * Version:			4.4.3

 * Requires at least:		5.5
 * Tested up to:		7.1

 * License:    			GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt

 * Text Domain: 		classic-editor-addon

 * GitHub Plugin URI:		https://github.com/senlin/classic-editor-addon
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
        wp_dequeue_style( 'wc-all-blocks-style' );
        wp_dequeue_style( 'wc-blocks-vendors-style' );
        wp_deregister_style( 'wc-blocks-style' );
        wp_deregister_style( 'wc-all-blocks-style' );
        wp_deregister_style( 'wc-blocks-vendors-style' );
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

/**
 * Remove Patterns
 *
 * @since 4.4.0
 */
if ( ! function_exists( 'cea_restrict_block_editor_patterns' ) ) {
    /**
     * Restricts block editor patterns in the editor by removing support for all patterns from:
     *   - Dotcom and plugins like Jetpack
     *   - Dotorg pattern directory except for theme patterns
     */
    function cea_restrict_block_editor_patterns( $dispatch_result, $request, $route ) {
        if ( strpos( $route, '/wp/v2/block-patterns/patterns' ) === 0 ) {
            $patterns = WP_Block_Patterns_Registry::get_instance()->get_all_registered();
            if ( ! empty( $patterns ) ) {
                // Remove theme support for all patterns from Dotcom, and plugins. See https://developer.wordpress.org/themes/features/block-patterns/#unregistering-block-patterns
                foreach ( $patterns as $pattern ) {
                    unregister_block_pattern( $pattern['name'] );
                }
                // Remove theme support for core patterns from the Dotorg pattern directory. See https://developer.wordpress.org/themes/features/block-patterns/#removing-core-patterns
                remove_theme_support( 'core-block-patterns' );
            }
        }
        return $dispatch_result;
    }
}


// Remove and unregister patterns from core, Dotcom, and plugins. See https://github.com/Automattic/jetpack/blob/d032fbb807e9cd69891e4fcbc0904a05508a1c67/projects/packages/jetpack-mu-wpcom/src/features/block-patterns/block-patterns.php#L107
add_filter( 'rest_dispatch_request', 'cea_restrict_block_editor_patterns', 12, 3 );


// Disable the remote patterns coming from the Dotorg pattern directory. See https://developer.wordpress.org/themes/features/block-patterns/#disabling-remote-patterns
add_filter( 'should_load_remote_block_patterns', '__return_false' );

// Hide Patterns menu item from Appearance sidebar menu. See https://wordpress.stackexchange.com/a/426325/180899
add_action( 'admin_init', 'cea_hide_wp_patterns_submenu', 100 );
function cea_hide_wp_patterns_submenu() {
    remove_submenu_page( 'themes.php', 'site-editor.php?path=/patterns' );
}

// Block access to Patterns page
add_action( 'admin_init', 'cea_restrict_patterns_editor_access' );

function cea_restrict_patterns_editor_access() {
    // Get the current URL.
    $current_url = isset( $_SERVER['REQUEST_URI'] )
        ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) )
        : '';

    if ( '' === $current_url ) {
        return;
    }

    // List of patterns editor URLs to block.
    $blocked_urls = array(
        '/wp-admin/site-editor.php?postType=wp_block',
        '/wp-admin/site-editor.php?path=/patterns',
        '/wp-admin/site-editor.php',
    );

    // Redirect if the current URL matches any of the blocked URLs.
    foreach ( $blocked_urls as $url ) {
        if ( false !== strpos( $current_url, $url ) ) {
            wp_safe_redirect( admin_url() );
            exit;
        }
    }
}

// Strip script handles from block types so WP_Block::render() cannot enqueue them at render time.
add_filter( 'block_type_metadata_settings', 'cea_strip_block_type_scripts', 10, 2 );
function cea_strip_block_type_scripts( $settings, $metadata ) {
    if ( ! is_admin() ) {
        $settings['script_handles']         = array();
        $settings['view_script_handles']    = array();
        $settings['view_script_module_ids'] = array();
        $settings['style_handles']          = array();
        $settings['view_style_handles']     = array();
    }
    return $settings;
}

// Strip block assets from all registered block types on the front end.
add_action( 'wp_loaded', 'cea_strip_registered_block_scripts', 100 );
function cea_strip_registered_block_scripts() {
    if ( is_admin() ) {
        return;
    }

    $registry = WP_Block_Type_Registry::get_instance();
    foreach ( $registry->get_all_registered() as $block_type ) {
        $block_type->script_handles         = array();
        $block_type->view_script_handles    = array();
        $block_type->view_script_module_ids = array();
        $block_type->style_handles          = array();
        $block_type->view_style_handles     = array();
    }
}

// Dequeue and deregister common core block scripts if enqueued directly.
add_action( 'wp_enqueue_scripts', 'cea_remove_block_scripts', 100 );
function cea_remove_block_scripts() {
    wp_dequeue_script( 'wp-block-library' );
    wp_deregister_script( 'wp-block-library' );

    // If script module API is available, dequeue any queued modules
    if ( function_exists( 'wp_script_modules' ) && method_exists( wp_script_modules(), 'get_queue' ) ) {
        $queue = wp_script_modules()->get_queue();
        if ( is_array( $queue ) && function_exists( 'wp_dequeue_script_module' ) ) {
            foreach ( $queue as $module_id ) {
                wp_dequeue_script_module( $module_id );
            }
        }
    }
}

// Safety net for global styles, which can also be enqueued late.
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
add_action( 'wp_footer', 'cea_dequeue_late_global_styles', 2 );
function cea_dequeue_late_global_styles() {
    wp_dequeue_style( 'global-styles' );
    wp_deregister_style( 'global-styles' );
}
