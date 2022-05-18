<?php

function _add_javascript() {
	//wp_enqueue_script('theme', get_template_directory_uri() . '/assets/dist/js/main.js', array(), null, true );

    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.3.1.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery.maskedinput.min', get_template_directory_uri() .'/assets/src/js/jquery.maskedinput.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/src/js/slick.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'modaal.min', get_template_directory_uri() .'/assets/src/js/modaal.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/src/js/script.js', array('jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);

function _add_stylesheets() {
	//wp_enqueue_style('theme', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/src/css/slick.css' );
    wp_enqueue_style( 'modaal', get_template_directory_uri() . '/assets/src/css/modaal.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/src/css/style.css' );

}
add_action('wp_enqueue_scripts', '_add_stylesheets');
