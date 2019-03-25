<?php
require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

function estilosyjs()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), 1.0, false );
	
	
}
add_action( 'wp_enqueue_scripts', 'estilosyjs' );


