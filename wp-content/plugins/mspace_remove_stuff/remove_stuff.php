<?php
/* 
Plugin Name: M Space Deregister WordPress Stuff
Plugin URI: http://mspacecreative.com
Description: Removes unwanted functionality in backend
Version: 1.0
Author: Matt Cyr
Author URI: http://mspacecreative.com
*/

function remove_menus(){
  
  //remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  
}

// Removes Comments from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');			//Comments
	//$wp_admin_bar->remove_node( 'new-post' );		//Posts
	$wp_admin_bar->remove_node( 'new-popuppress' );	//Popup Press
}

// REMOVE DATE PICKER
function slimline_remove_divi_date_scripts() {
	wp_deregister_script( 'et_pb_admin_date_addon_js' );
	wp_deregister_script( 'et_pb_admin_date_js' );
}

// Removes Projects CPT
function mytheme_et_project_posttype_args( $args ) {
	return array_merge( $args, array(
		'public'              => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => false,
		'show_in_nav_menus'   => false,
		'show_ui'             => false
	));
}

add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
add_action( 'admin_menu', 'remove_menus' );
// REMOVE DATE PICKER
add_action( 'admin_enqueue_scripts', 'slimline_remove_divi_date_scripts', 100 );
add_filter( 'et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1 );