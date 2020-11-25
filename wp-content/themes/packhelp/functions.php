<?php


// webpack scripts
if (defined('WEBPACK_SERVER')) {
    add_action('wp_enqueue_scripts', function () {
        wp_register_script('main-js', WEBPACK_SERVER . 'bundle.min.js', '', null);
        wp_enqueue_script('main-js');

        wp_register_style('main-css', WEBPACK_SERVER . 'bundle.min.css');
        wp_enqueue_style('main-css');
    });
}

include 'inc/add-theme-support.php';
include 'inc/register-nav-menus.php';
include 'inc/acf/acf-blocks.php';
include 'inc/register_post_type.php';