<?php

function wordpress_scripts() {
    $ver = 2;
    $themes_uri = get_template_directory_uri();

    wp_register_style('style', $themes_uri . '/assets/css/style.css', false, $ver);
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'wordpress_scripts');
add_action('init', 'custom_posts');