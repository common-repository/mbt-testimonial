<?php
// Register Custom Post Type mbt-testimonial
function create_mbttestimonial_cpt() {

	$labels = array(
		'name' => _x( 'MBT Testimonial', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'mbt-testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'MBT Testimonial', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'mbt-testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'mbt-testimonial Archives', 'textdomain' ),
		'attributes' => __( 'mbt-testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent mbt-testimonial:', 'textdomain' ),
		'all_items' => __( 'All MBT Testimonial', 'textdomain' ),
		'add_new_item' => __( 'Add New mbt-testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New mbt-testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit mbt-testimonial', 'textdomain' ),
		'update_item' => __( 'Update mbt-testimonial', 'textdomain' ),
		'view_item' => __( 'View mbt-testimonial', 'textdomain' ),
		'view_items' => __( 'View MBT Testimonial', 'textdomain' ),
		'search_items' => __( 'Search mbt-testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into mbt-testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this mbt-testimonial', 'textdomain' ),
		'items_list' => __( 'MBT Testimonial list', 'textdomain' ),
		'items_list_navigation' => __( 'MBT Testimonial list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter MBT Testimonial list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'mbt-testimonial', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type( 'mbttestimonial', $args );

}
add_action( 'init', 'create_mbttestimonial_cpt', 0 );