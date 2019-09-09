<?php
function load_css() {
	wp_enqueue_style( 'upwebb_stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_css' );

function upwebb_theme_setup() {

	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );

	register_nav_menu('primary', 'Main navigation for top of page');
	register_nav_menu('secondary', 'Main navigation for secondary page');

}


add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', 'upwebb_theme_setup');

?>
