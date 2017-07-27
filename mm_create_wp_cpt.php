<?php

/**
 * Class mm_create_wp_cpt
 */
class mm_create_wp_cpt {

	/**
	 * Static Function create_post_type
	 *
	 * @param $pt_name
	 * @param $single_name
	 * @param $plural_name
	 * @param $slug
	 * @param string $dash_icon (see https://developer.wordpress.org/resource/dashicons)
	 * @param bool|true $public
	 * @param array $supports
	 *
	 */
	public static function create_post_type(
		$pt_name,
		$single_name,
		$plural_name,
		$slug,
		$dash_icon = 'admin-generic',
		$public = true,
		$supports = array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' )
	) {

		register_post_type( $pt_name,

			array(
				'menu_position'       => 4,
				'exclude_from_search' => false,
				'labels'              => array(
					'name'               => $plural_name,
					'singular_name'      => $single_name,
					'add_new'            => 'Add New ' . $single_name,
					'add_new_item'       => 'Add New ' . $single_name,
					'edit_item'          => 'Edit ' . $single_name,
					'new_item'           => 'New ' . $single_name,
					'all_items'          => 'All ' . $plural_name,
					'view_item'          => 'View' . $single_name,
					'search_items'       => 'Search ' . $plural_name,
					'not_found'          => 'No ' . $single_name . ' found',
					'not_found_in_trash' => 'No ' . $single_name . 'found in Trash',
					'parent_item_colon'  => '',
					'menu_name'          => $plural_name
				),
				'public'              => $public,
				'menu_icon'           => 'dashicons-' . $dash_icon,
				'_builtin'            => false,
				'rewrite'             => array( "slug" => $slug ),
				'has_archive'         => true,
				'supports'            => $supports,
				'taxonomies'          => array( 'post_tag', 'category' )
			)
		);
	}

}
