<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function add_google_fonts() {

wp_register_style('GoogleFonts', 'http://fonts.googleapis.com/css?family=Megrim');

wp_enqueue_style('GoogleFonts');

}

add_action('wp_print_styles', 'add_google_fonts');

?>