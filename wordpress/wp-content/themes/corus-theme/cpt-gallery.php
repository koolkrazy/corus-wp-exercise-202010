<?php
/**
 * The main file for CPT - Gallery
 *
 */
function add_gallery_cpt()
{
    $labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Gallery' ),
        'parent_item_colon'   => __( 'Parent Gallery' ),
        'all_items'           => __( 'All Gallery' ),
        'view_item'           => __( 'View Gallery' ),
        'add_new_item'        => __( 'Add New Gallery' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Gallery' ),
        'update_item'         => __( 'Update Gallery' ),
        'search_items'        => __( 'Search Gallery' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'gallery' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'gallery', $args );
	flush_rewrite_rules();
}
add_action( 'init', 'add_gallery_cpt', 0 );