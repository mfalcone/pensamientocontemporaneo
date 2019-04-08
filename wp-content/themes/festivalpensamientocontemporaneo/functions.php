<?php
require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

function estilosyjs()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), 1.0, false );
	
	
}
add_action( 'wp_enqueue_scripts', 'estilosyjs' );


add_theme_support( 'post-thumbnails' );
add_image_size( 'autores', 300, 300, true );


// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
return 35;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );