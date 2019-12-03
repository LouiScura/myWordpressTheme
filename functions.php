<?php
// Agregamos el Soporte para Thumbnails
add_theme_support( 'post-thumbnails' );

// Agregamos un tamaño de imagen y permitimos que la imagen se corte si no cabe.
//add_image_size( 'homepage-thumb', 1400, 700, true );

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

register_nav_menus(array(
    'menu-top' => 'Menu Principal',
	'menu-footer' => 'Menu Footer', 
)); 

register_sidebar(array(
    'name' => 'Header',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

register_sidebar(array(
    'name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
 
/*
  Custom post type
*/
function awesome_custom_post_type(){
	$labels = array(
		'name' => 'Blog',
		'singular_name' => 'Blog',
		'add_new' => 'Add new post',
		'all_items' => 'All posts',
		'all_new_item' => 'Edit item',
		'edit_item' => 'Edite item',
		'new_item' => 'New item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portafolio',
		'not_found' => 'No item found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierrarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array(
			'category',
			'post_tag'
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('blog',$args);
}
//init the function
add_action('init','awesome_custom_post_type');


function cptui_register_my_cpts_movie() {

	/**
	 * Post Type: Movies.
	 */

	$labels = [
		"name" => __( "Movies", "custom-post-type-ui" ),
		"singular_name" => __( "Movie", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Movies", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "movie", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail", "excerpt", "custom-fields", "revisions", "author" ],
	]; 

	register_post_type( "movie", $args );
}

add_action( 'init', 'cptui_register_my_cpts_movie' );


?>