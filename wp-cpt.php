<?php

	function mm_create_post_type( $pt_name, $single_name, $plural_name, $slug, $public = true,
	$supports = array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' ) ) {
	
 
	
					register_post_type( $pt_name,
						
								array('menu_position' => 4,
									'exclude_from_search' => false,
									'labels' => array(
										'name' => __( "$plural_name" ),
										'singular_name' => __( "$single_name" ),
										'add_new' => _x( 'Add New', "$single_name" ),
										'add_new_item' => __( "Add New $single_name" ),
										'edit_item' => __( "Edit $single_name" ),
										'new_item' => __( "New $single_name" ),
										'all_items' => __( "All $plural_name" ),
										'view_item' => __( "View $single_name" ),
										'search_items' => __( "Search $plural_name" ),
										'not_found' =>  __( "No $single_name found" ),
										'not_found_in_trash' => __( "No $single_name found in Trash" ), 
										'parent_item_colon' => '',
										'menu_name' => "$plural_name"	
										),
							'public' => $public,
							'_builtin' => false,
							'rewrite' => array("slug"=>"$slug"),
							'has_archive' => true,
							'supports' => $supports,
							'taxonomies' => array('post_tag','category')
							)
					);
	}
	
    function mm_activate_post_types() {
    
    	mm_create_post_type( 'testimonials', 'Testimonial', 'Testimonials', 'testimonials' );
	}
	
	
    if ( function_exists( 'mm_activate_post_types' ) ) {
     
        add_action( 'init', 'mm_activate_post_types' );
    }
    
    function new_data() {
        
        return true;
    }
    
    //sdlkfjsdlf

?>
