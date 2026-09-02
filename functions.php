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
}

add_action('wp_enqueue_scripts', 'furniro_assets');