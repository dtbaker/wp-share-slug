<?php
/**
 * Plugin Name: Sample Share Post Slug
 * Description: Sample Share Post Slug
 * Version: 0.1
 * Author: Your Name
 */


function sample_parse_query( $query ) {
	if ( ! empty( $GLOBALS['sample_parse_query_running'] ) ) {
		return;
	}
	$GLOBALS['sample_parse_query_running'] = true;

	if ( ! empty( $query->query['name'] ) ) {
		// Check to see if this slug is a custom_articles post type.
		$post_type  = 'custom_articles'; // from our other sample plugin: register_post_type( 'custom_articles',
		$post_check = get_posts( [
			'name'           => $query->query['name'],
			'post_type'      => $post_type,
			'post_status'    => 'publish',
			'posts_per_page' => 1
		] );
		if ( $post_check ) {
			// We have found this other post type! yay!
			// Overwrite the global post_type query var so WordPress can keep rendering our expected page.
			$query->query['post_type'] = $post_type;
			$query->query_vars['post_type'] = $post_type;
		}
	}

	unset( $GLOBALS['sample_parse_query_running'] );
}

add_action( 'parse_query', 'sample_parse_query' );
