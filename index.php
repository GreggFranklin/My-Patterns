<?php
/**
 * Plugin Name: My Block Patterns
 * Description: A series of Block Patterns for this site.
 * Version: 1.0
 * Author: Gregg Franklin
 * @WordPress 5.5
 * Docs on functions used: https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 */
 
/* Remove the default Block Patterns */
 
 $core_block_patterns = array(
	'text-two-columns',
	'two-buttons',
	'two-images',
	'text-two-columns-with-images',
	'text-three-columns-buttons',
	'large-header',
	'large-header-paragraph',
	'three-buttons',
	'quote',
);

foreach ( $core_block_patterns as $core_block_pattern ) {
	unregister_block_pattern(
		'core/' . $core_block_pattern,
		includes_url() . '/block-patterns/' . $core_block_pattern . '.php'
	);
}
 
 /* Add custom Block Patterns */

$my_block_patterns = array(
	'hero3',
	'hero-video',
);

foreach ( $my_block_patterns as $my_block_pattern ) {
	
	register_block_pattern(
		'custom/' . $my_block_pattern,
		include( WP_PLUGIN_DIR . '/my_patterns/block-patterns/' . $my_block_pattern . '.php')
	);
}

register_block_pattern_category( 'heros', array( 'label' => _x( 'Heros', 'Block pattern category', 'gutenberg' ) ) );
 


