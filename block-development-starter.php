<?php
/**
 * Plugin Name:       Gutenberg Block Boilerplate
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Touhidul Sadeek
 * Author URI:        https://tcoderbd.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenberg-block-boilerplate
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function gutenberg_block_boilerplate_init() {
	foreach ( glob( __DIR__ . '/build/blocks/*/' ) as $path ) { 
		register_block_type( $path . '/' );
    }
}
add_action( 'init', 'gutenberg_block_boilerplate_init' );