<?php

add_action( 'wp_enqueue_scripts', function() {
//    <link rel="stylesheet" href="css/slick.css">
//	  <link rel="stylesheet" href="css/modaal.min.css">
//
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/src/css/slick.css' );
    wp_enqueue_style( 'modaal', get_template_directory_uri() . '/assets/src/css/modaal.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/src/css/style.css' );


    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.3.1.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquery.maskedinput.min', get_template_directory_uri() .'/assets/src/js/jquery.maskedinput.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/src/js/slick.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'modaal.min', get_template_directory_uri() .'/assets/src/js/modaal.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/src/js/script.js', array('jquery'), '1.0', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>