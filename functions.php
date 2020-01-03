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

// Custom sidebar 
function my_custom_sidebar_init(){
	register_sidebar(
		array(
		'name' => esc_html__('Sidebar', 'miPrimerTema'),
		'id' => 'luis-sidebar',
		'description' => 'Dynaminc Right Sidebar Created by my own',
		'before_widget' => '<div id="%1$s" class="luis">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init','my_custom_sidebar_init');

 
/*
 -------------------------
 CUSTOM POST TYPE
 --------------------------

function awesome_custom_post_type(){
	$labels = array(
		'name' => 'Blog',
		'singular_name' => 'Blog',
		'add_new' => 'Add new post',
		'all_items' => 'All posts',
		'all_new_item' => 'Edit item',
		'edit_item' => 'Edit item',
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
//init the function hook 
add_action('init','awesome_custom_post_type');


function cptui_register_my_cpts_movie() {

	
	 * Post Type: Movies.
	 

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
*/


/*
@package miPimerTema
-------------------------
 CUSOM WIDGET CLASSS
--------------------------
*/

/*Creating the widget
class Luis_Widget extends WP_WIDGET{

	//setup the widget name, description, etc...
	public function __construct() {
		
		$widget_ops = array(
			'classname' => 'luis-scura-widget',
			'description' => 'Custom Widget created by Luis Scura',
		);
		parent::__construct( 'luis_scura', 'Luis Scura', $widget_ops );
	}

	//back-end display of widget
	public function form( $instance ) {
		$title = (!empty($instance['title']) ? $instance['title'] : 'Popular Posts');
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );

		$output = '<p>';
		$output = '<label for="'.esc_attr($this->get_field_id('title') ).'">Title:</label>';
		$output = '<input type="text" class="widefat customText" id="'.esc_attr($this->get_field_id('title') ).'"name="'.esc_attr($this->get_field_name('title') ).'" value="' .esc_attr($title).'"';
	
		$output .= '</p>';

		echo $output;
	}

	//update widget
	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title'] ) : '');

		return $instance;
	}

	//front-end display of widget
	public function widget($args, $instance){
		echo $args['before_widget'];
			//echo '<h3>Best movie title</h3>';
			/*if( !empty( $instance[ 'title' ] ) ):
				echo '<p id="movieToList">'. apply_filters( 'widget_title', $instance[ 'title' ] ).'</p>';
			endif;*/
			/*
			$args = array(   
				'post_type' => 'movie',
				'post_status' => 'publish',
				'posts_per_page' => 8, 
			);
	
			$loop = new WP_Query( $args); 
			echo '<h3>Recent Movies</h3>';
			echo '<ul id="movieList">';
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<li>
						<a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a>
					</li>';
			endwhile;
			echo '</ul>';
			wp_reset_postdata();   
		echo $args['after_widget'];
	}
}
*/

class ObjectsOrder_Widget extends WP_WIDGET{

	//setup the widget name, description, etc...
	public function __construct() {
		
		$widget_ops = array(
			'classname' => 'luis-scura-widget',
			'description' => 'Custom Widget created by Luis Scura 2',
		);
		parent::__construct( 'luis_scura2', 'Movies A-Z', $widget_ops );
	}

	//back-end display of widget
	public function form( $instance ) {
		$title = (!empty($instance['title']) ? $instance['title'] : 'Popular Posts');
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );

		$output = '<p>';
		$output = '<label for="'.esc_attr($this->get_field_id('title') ).'">Title:</label>';
		$output = '<input type="text" class="widefat customText" id="'.esc_attr($this->get_field_id('title') ).'"name="'.esc_attr($this->get_field_name('title') ).'" value="' .esc_attr($title).'"';
	
		$output .= '</p>';

		echo $output;
	}

	//update widget
	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title'] ) : '');

		return $instance;
	}

	//front-end display of widget
	public function widget($args, $instance){
		echo $args['before_widget'];
			$args = array(   
				'post_type' => 'objects',
				'post_status' => 'publish',
				'posts_per_page' => 8, 
				'orderby' => 'title',
				'order' =>'ASC'
			);
	
			$loop = new WP_Query( $args); 
			echo '<h3>'.$instance['title'].'</h3>';
			echo '<ul id="movieList">';
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<li>
						<a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a>
					</li>';
			endwhile;
			echo '</ul>';
			wp_reset_postdata();   
		echo $args['after_widget'];
	}
}
add_action( 'widgets_init', function() {
	register_widget( 'ObjectsOrder_Widget');
});
/*
add_action( 'widgets_init', function() {
	register_widget( 'Luis_Widget' );
} );
*/


	/*
		* Setup query to show the ‘services’ post type with ‘8’ posts.
		* Output the title with an excerpt.
	
	$args = array(  
		'post_type' => 'movie',
		'post_status' => 'publish',
		'posts_per_page' => 8, 
	);

	$loop = new WP_Query( $args); 
	echo '<h3>Recent Movies</h3>';
	echo '<ul>';
	while ( $loop->have_posts() ) : $loop->the_post();
		echo '<li><a href="'.get_permalink( $id ).'">'.get_the_title( $id ).'</a></li>';
	endwhile;
	echo '</ul>';

	wp_reset_postdata();
	*/
?>