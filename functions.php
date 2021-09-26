<?php

// load scripts



 
function aquila_load_scripts(){



wp_register_style('style-css',get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
wp_enqueue_style('style-css');


wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',array(),false,true);
wp_enqueue_script('main-js');


// wp_enqueue_style('stylesheet',get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
// // wp_enqueue_style('custom',get_template_directory_uri().'/custom.css',array('stylesheet'),'1','all');

}
add_action('wp_enqueue_scripts','aquila_load_scripts');

