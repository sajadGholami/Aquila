<?php

// load scripts



 
function aquila_load_scripts(){

wp_enqueue_style('stylesheet',get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
// wp_enqueue_style('custom',get_template_directory_uri().'/custom.css',array('stylesheet'),'1','all');

}
add_action('wp_enqueue_scripts','aquila_load_scripts');

