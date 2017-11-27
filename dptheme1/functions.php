<?php
function dptheme1_script_enqueque() {
wp_enqueque_style(‘customstyle’, get_template_directory_uri() . ‘/css/dptheme1.css’,  array(), ‘1.0.0’, ‘all’);

wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/dptheme1.js', array (), 1.0.0, true);
}

add_action(‘wp_enqueque_scripts’, ’dptheme1_script_enqueque’);

Function dptheme1_theme_setup() {
	add_theme_support(‘menus’);
				register_new_menu(‘primary’, ‘Primary  Header Navigation’);
				register_new_menu(‘secondary’, ‘Footer Navigation’);
}
//then call this function
add_action(‘init,  ‘dptheme1_theme_setup’);
//add_action(‘after_setup_theme’,  ‘dptheme1_theme_setup’);
