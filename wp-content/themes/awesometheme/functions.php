<?php

function awesome_script_enqueue(){
    wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0.', 'all');

    wp_enqueue_script('customscript',get_template_directory_uri().'/js/awesome.js',array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts','awesome_script_enqueue');

function awesome_theme_setup(){
    add_theme_support('menu');
    add_theme_support('widgets');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats',array('video',' aside','image'));
    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secendary','Footer Navigation');
    register_nav_menu('thirds','Sidbar Navigation');

}

add_action('init','awesome_theme_setup');
?>