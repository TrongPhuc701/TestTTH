<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'tramhuongviet-clone'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'tramhuongviet-clone-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});
