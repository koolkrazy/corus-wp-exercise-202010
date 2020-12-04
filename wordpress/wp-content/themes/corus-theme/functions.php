<?php
/**
 * The main Functions File.
 *
 */
require_once get_template_directory() . '/cpt-gallery.php';

add_action( 'pre_get_posts', 'add_cpt_gallery_to_home' );

function add_cpt_gallery_to_home( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        $query->set( 'post_type', array( 'post', 'gallery') );
    }
}