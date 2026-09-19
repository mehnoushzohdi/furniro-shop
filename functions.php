<?php

function furniro_assets() {

    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'bootstrap-icons',
        get_template_directory_uri() . '/css/bootstrap-icons.min.css'
    );

    wp_enqueue_style(
        'furniro-style',
        get_template_directory_uri() . '/css/style.css'
    );
    wp_enqueue_style(
        'furniro-shop',
        get_template_directory_uri() . '/css/shop.css'
    );
    wp_enqueue_style(
        'furniro-product',
        get_template_directory_uri() . '/css/product.css'
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'furniro-script',
        get_template_directory_uri() . '/js/script.js',
        [],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'furniro_assets');

function furniro_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'furniro_setup');
