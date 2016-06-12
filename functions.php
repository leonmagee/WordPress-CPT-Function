<?php

/**
 * Include this in your functions.php file
 *
 */
include_once( 'directory/mm_create_wp_cpt.php' );

function mm_register_post_types() {

	mm_create_wp_cpt::create_post_type( 'testimonials', 'Testimonial', 'Testimonials', 'testimonials', 'format-quote' );

	mm_create_wp_cpt::create_post_type( 'press-release', 'Press Release', 'Press Releases', 'press-release', 'rss' );
}

add_action( 'init', 'mm_register_post_types' );
