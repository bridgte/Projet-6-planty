<?php

// BEGIN ENQUEUE PARENT ACTION

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . 'style.css');
}

// END ENQUEUE PARENT ACTION

function add_extra_item_to_nav_menu($items,$args) {
    echo($args->theme_location);
    return $items;
}

add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu',10,2);