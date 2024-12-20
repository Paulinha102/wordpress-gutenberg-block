<?php
/**
 * Plugin Name:       Block Waves
 * Description:       Wave blocks create in course WordPress Gutenberg Block Development with React JS and PHP.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Paula Santos
 * Author URI:        https://www.linkedin.com/in/paula--santos/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       block-waves
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
function create_custom_block_category($categories){
	array_unshift($categories, [
		'slug' => 'block_waves',
		'title' => 'Block Waves'
	]);
	return $categories;
}

function create_block_block_waves_block_init() {
	add_filter('block_categories_all', 'create_custom_block_category');
	register_block_type( __DIR__ . '/build/blocks/curvy' );
}
add_action( 'init', 'create_block_block_waves_block_init' );
