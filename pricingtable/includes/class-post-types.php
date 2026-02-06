<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_post_types_pricingtable{
	
	public function __construct(){
		
		add_action( 'init', array( $this, '_posttype_pricingtable' ), 0 );


    }
	
	public function _posttype_pricingtable(){
		if ( post_type_exists( "pricingtable" ) )
		return;

		$singular  = __( 'Pricing Table', 'pricingtable' );
		$plural    = __( 'Pricing Tables', 'pricingtable' );
	 
	 
		register_post_type( "pricingtable",
			apply_filters( "_post_type_pricingtable", array(
				'labels' => array(
					'name' 					=> $plural,
					'singular_name' 		=> $singular,
					'menu_name'             => $singular,
/* translators: Post Type Name */
					'all_items'             => sprintf( __( 'All %s', 'pricingtable' ), $plural ),
/* translators: Post Type Name */
					'add_new' 				=> sprintf( __( 'Add %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'add_new_item' 			=> sprintf( __( 'Add %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'edit' 					=> __( 'Edit', 'pricingtable' ),
/* translators: Post Type Name */
					'edit_item' 			=> sprintf( __( 'Edit %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'new_item' 				=> sprintf( __( 'New %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'view' 					=> sprintf( __( 'View %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'view_item' 			=> sprintf( __( 'View %s', 'pricingtable' ), $singular ),
/* translators: Post Type Name */
					'search_items' 			=> sprintf( __( 'Search %s', 'pricingtable' ), $plural ),
/* translators: Post Type Name */
					'not_found' 			=> sprintf( __( 'No %s found', 'pricingtable' ), $plural ),
/* translators: Post Type Name */
					'not_found_in_trash' 	=> sprintf( __( 'No %s found in trash', 'pricingtable' ), $plural ),
/* translators: Post Type Name */
					'parent' 				=> sprintf( __( 'Parent %s', 'pricingtable' ), $singular )
				),
/* translators: Post Type Name */
				'description' => sprintf( __( 'This is where you can create and manage %s.', 'pricingtable' ), $plural ),
				'public' 				=> true,
				'show_ui' 				=> true,
				'capability_type' 		=> 'post',
				'map_meta_cap'          => true,
				'publicly_queryable' 	=> true,
				'exclude_from_search' 	=> false,
				'hierarchical' 			=> false,
				'rewrite' 				=> true,
				'query_var' 			=> true,
				'supports' 				=> array('title','author'),
				'show_in_nav_menus' 	=> false,
				'menu_icon' => 'dashicons-editor-table',
			) )
		); 
	 
	 
		}



}
	

new class_post_types_pricingtable();