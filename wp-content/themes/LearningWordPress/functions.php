<?php

function learningWordPress_resources(){
	wp_enqueue_style('style' , get_stylesheet_uri());
}

add_action('wp_enqueue_scripts' , 'learningWordPress_resources');




// Get top ancestor

function get_top_ancestor_id() {

	global $post;

	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];

	}
	return $post->ID;
}

// Does page have children?
function has_chidren(){
	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);

}

// Customize excerpt word count length

function custom_excerpt_length(){
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');



//Theme functionality
function learningWordPress_setup() {

	//Navigation Menus (regisrar os menus)

	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		));


	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 200, array('left','top'));

}

add_action('after_setup_theme', 'learningWordPress_setup');


