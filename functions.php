<?php
function add_css() 
     {

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap'); 

    wp_register_style('font', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('css', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('css');



    }   
    add_action('wp_enqueue_scripts', 'add_css');

    add_theme_support('menus');

    register_nav_menus(

    array(
        'top-menu' => __('Top Menu','theme'),
         )
);






