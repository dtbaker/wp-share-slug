<?php
/**
 * Plugin Name: Sample Custom Post Type
 * Description: Sample Custom Post Type
 * Version: 0.1
 * Author: Your Name
 */

function create_post_type() {
	register_post_type( 'custom_articles',
		array(
			'labels'      => array(
				'name'          => __( 'Articles' ),
				'singular_name' => __( 'Article' )
			),
			'public'      => true,
			'has_archive' => true,
			// Notice: this 'articles' slug is designed to conflict with our post permalink structure of `/articles/%postname%/`
			// This will not work out of the box, because WordPress gets confused about if it should render a 'blog' or these cpt 'articles'
			'rewrite'     => array( 'slug' => 'articles', 'with_front' => false ),
		)
	);
}

add_action( 'init', 'create_post_type' );
