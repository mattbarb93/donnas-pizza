<?php
// Theme Support
    function ms_theme_setup(){
        add_theme_support('custom-logo');

        //Nav Menus
        register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));   
}
add_action('after_setup_theme', 'ms_theme_setup');

function customScripts() {
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . 'js/script.js', array('jquery'), false, false);
}

wp_enqueue_script('jquery');

add_action('wp_enqueue_script', 'customScripts');

function enableSlick() {
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . 'js//slick-1.8.1/slick/slick.min', array('jquery'), false, false);
}

wp_enqueue_script('jquery');

add_action('wp_enqueue_script', 'enableSlick');



