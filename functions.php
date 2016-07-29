<?php

require_once('wp_bootstrap_navwalker.php');

function kiransThemeResources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'kiransThemeResources');


//Get top ancestor
function get_top_ancestor_id() {


	global $post;


	if ($post->post_parent) {


		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}

	return $post->ID;

}


// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




function kiransTheme() {

	//Navigation Menus

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'kiransTheme' ),
) );

	//Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('banner-image', true);
}

add_action('after_setup_theme','kiransTheme');

function wpt_register_js() {
	wp_register_script('jquery.min', get_template_directory_uri() . '/resources/jquery/jquery.min.js', 'jquery');
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/resources/bootstrap/js/bootstrap.min.js', 'jquery');
	wp_register_script('jpBootstrapValidation.js', get_template_directory_uri() . '/resources/js/jqBootstrapValidation.js', 'jquery');
	wp_register_script('contact_me.js', get_template_directory_uri() . '/resources/js/contact_me.js', 'jquery');
	wp_register_script('clean-blog.min.js', get_template_directory_uri() . '/resources/js/clean-blog.min.js', 'jquery');	

	wp_enqueue_script('jquery.min');
    wp_enqueue_script('jquery.bootstrap.min');
    wp_enqueue_script('jpBootstrapValidation');
    wp_enqueue_script('contact_me');
    wp_enqueue_script('clean-blog.min.js');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/resources/bootstrap/css/bootstrap.min.css' );
    wp_register_style( 'style.min.css', get_template_directory_uri() . '/resources/css/style.min.css' );
	wp_register_style( 'font-awesome.min.css', get_template_directory_uri() . '/resources/font-awesome/css/font-awesome.min.css' );   

    wp_enqueue_style( 'bootstrap.min' );
    wp_enqueue_style( 'style.min.css' );
    wp_enqueue_style( 'font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );