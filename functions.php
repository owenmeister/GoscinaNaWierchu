<?php

function load_stylesheets()
{
    wp_register_style('normalize', get_template_directory_uri() . './css/normalize.css', array(), 1, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . './css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function addjs()
{
    wp_register_script('popper', get_template_directory_uri() . './scripts/popper.js', array() , 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('scripts', get_template_directory_uri() . './scripts/scripts.js', array() , 1, 1, 1);
    wp_enqueue_script('scripts');

    //wp_register_script('flickity', get_template_directory_uri() . './scripts/flickity.pkgd.min.js', array() , 1, 1, 1);
    //wp_enqueue_script('flickity');
}

add_action('wp_enqueue_scripts', 'addjs');

?>