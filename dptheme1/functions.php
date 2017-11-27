<?php
function dptheme1_script_enqueque() {
wp_enqueque_style(‘customstyle’, get_template_directory_uri() . ‘/css/dptheme1.css’,  array(), ‘1.0.0’, ‘all’);

wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/dptheme1.js', array (), 1.0.0, true);
}

add_action(‘wp_enqueque_scripts’, ’dptheme1_script_enqueque’);
