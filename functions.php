<?php

// load scripts



 
function aquila_load_scripts(){


// load styles.
wp_register_style('style-css',get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');

wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',array(),false,'all');


// load scripts.
wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',array('jquery'),false,true);

wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',array(),false,true);




//enqueue styles.
wp_enqueue_style('style-css');
wp_enqueue_style('bootstrap-css');


//enqueue scripts.

wp_enqueue_script('bootstrap-js');
wp_enqueue_script('main-js');

}
add_action('wp_enqueue_scripts','aquila_load_scripts');

