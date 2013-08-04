<?php
// adding the stylesheets
function theme_styles() {
	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	
}
//adding the custom js

function theme_js(){
	
	wp_enqueue_script( 'jacksonthatsme.js', get_template_directory_uri() . '/jacksonthatsme.js', array('jquery'), '', true );	

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable Custom Menus
add_theme_support( 'menus' );

?>