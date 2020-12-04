<?php
/**
 * The main file for CPT - Gallery
 *
 */
function add_gallery_cpt()
{
    $labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'gallery' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'gallery' ),
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
		'capability_type'       => 'page',
	);
}
add_action( 'init', 'add_gallery_cpt', 0 );