<?php
defined('ABSPATH') OR exit('No direct script access allowed');

/**
 * Enqueue scripts and styles.
 *
 * wp_register_style('style', $themes_uri . '/assets/css/style.css', false, $ver);
 * wp_enqueue_style('style');
 *
 * wp_register_script('jquery', $themes_uri . '/assets/js/production.js', false, $ver, true);
 * wp_enqueue_script('jquery');
 * wp_enqueue_script('gmaps', '//maps.googleapis.com/maps/api/js?sensor=false', false, '', true);
 *
 */

function my_style_load() {
    $ver = 2;
    $themes_uri = get_template_directory_uri();

    wp_register_style('style', $themes_uri . '/assets/css/style.css', false, $ver);
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'my_style_load');

