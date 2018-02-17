<?php
/**
 * Plugin Name: Gutenberg Block: Toolbar Control JSX Example
 * Plugin URI: https://github.com/modularwp/gutenberg-block-toolbar-control-jsx-example
 * Description: This is an example of a Gutenberg block with an alignment toolbar control in the block control area. Built with JSX and ES6.
 * Author: ModularWP
 * Author URI: https://modularwp.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function mdlr_block_toolbar_control_jsx_example_backend_enqueue() {
	wp_enqueue_script(
		'mdlr-block-toolbar-control-jsx-example-backend-script', // Unique handle.
		plugins_url( 'js/block.build.js', __FILE__ ), // block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ) // Dependencies, defined above.
	);
}
add_action( 'enqueue_block_editor_assets', 'mdlr_block_toolbar_control_jsx_example_backend_enqueue' );
