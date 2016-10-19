<?php

show_admin_bar( false );

function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>