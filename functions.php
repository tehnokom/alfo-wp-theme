<?php


add_filter( 'show_admin_bar', '__return_false' ); ?>
 
<?php function hide_admin_bar_settings() {
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}
 
function disable_admin_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
    add_action( 'admin_print_scripts-profile.php', 
         'hide_admin_bar_settings' );
}
add_action( 'init', 'disable_admin_bar' , 9 );



function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// widget top
    register_sidebar(array(
        'name' => __('Menu top'),
        'id' => 'menu-top',
        'description' => __('Widget menu top'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));

// widget left
    register_sidebar(array(
        'name' => __('Menu left'),
        'id' => 'menu-left',
        'description' => __('Widget menu left'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));
	
// widget search
    register_sidebar(array(
        'name' => __('Menu search'),
        'id' => 'menu-search',
        'description' => __('Widget menu search'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));

// widget lingvo
    register_sidebar(array(
        'name' => __('Menu lingvo'),
        'id' => 'menu-lingvo',
        'description' => __('Widget menu lingvo'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	
	
// widget mobile
    register_sidebar(array(
        'name' => __('Menu mobile'),
        'id' => 'menu-mobile',
        'description' => __('Widget menu mobile'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	

// widget front page
    register_sidebar(array(
        'name' => __('Front page'),
        'id' => 'front-page',
        'description' => __('Widget front page'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));		
    
// widget muro maldekstre 1
    register_sidebar(array(
        'name' => __('Muro maldekstre 1'),
        'id' => 'muro-maldekstre-1',
        'description' => __('Widget muro maldekstre 1'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	

// widget muro maldekstre 2
    register_sidebar(array(
        'name' => __('Muro maldekstre 2'),
        'id' => 'muro-maldekstre-2',
        'description' => __('Widget muro maldekstre 2'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	

// widget muro maldekstre 3
    register_sidebar(array(
        'name' => __('Muro maldekstre 3'),
        'id' => 'muro-maldekstre-3',
        'description' => __('Widget muro maldekstre 3'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	    
    
// widget muro dekstre 1
    register_sidebar(array(
        'name' => __('Muro dekstre 1'),
        'id' => 'muro-dekstre-1',
        'description' => __('Widget muro dekstre 1'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	

// widget muro dekstre 2
    register_sidebar(array(
        'name' => __('Muro dekstre 2'),
        'id' => 'muro-dekstre-2',
        'description' => __('Widget muro dekstre 2'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	

// widget muro dekstre 3
    register_sidebar(array(
        'name' => __('Muro dekstre 3'),
        'id' => 'muro-dekstre-3',
        'description' => __('Widget muro dekstre 3'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3><a href="#">',
        'after_title' => '</a></h3>',
    ));	    


?>	