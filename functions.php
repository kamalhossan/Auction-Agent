<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 

function my_enqueue_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 

} 
function auctionagentBlogs() {
	ob_start();
	get_template_part('template-parts/blogs');
	$variable = ob_get_clean();
	return $variable;
}

add_shortcode( 'auctionagent-blogs', 'auctionagentBlogs' );

function wpdocs_custom_excerpt_length( $length ) {
	return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



function auctionagent_testimonials() {
		
	$labels =array(
	  'name'                     => __( 'Testimonials', 'houzez' ),
      'singular_name'            => __( 'Testimonial', 'houzez' ),
      'add_new'                  => __( 'Add New', 'houzez' ),
      'add_new_item'             => __( 'Add New Review', 'houzez' ),
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-calendar-alt',
		'menu_position'      => null,
		'supports'           => array( 'title', 'excerpt', 'custom-fields' ),
	);
	
	register_post_type( 'testimonials', $args );
}

add_action('init', 'auctionagent_testimonials');


function testimonials_shortcode() {
	ob_start();
	get_template_part('template-parts/testimonials');
	$variable = ob_get_clean();
	return $variable;
}

add_shortcode( 'auctionagent-review', 'testimonials_shortcode' );


if ( ! function_exists( 'houzez_child_register_nav_menu' ) ) {

	function houzez_custom_register_nav_menu(){
		register_nav_menus( array(
	    	'Buying_menu' => __( 'Buying Menu', 'houzez' ),
	    	'Quick_links'  => __( 'Quick Link', 'houzez' ),
		) );
	}
	add_action( 'after_setup_theme', 'houzez_custom_register_nav_menu', 0 );
}