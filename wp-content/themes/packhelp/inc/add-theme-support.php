<?php

add_theme_support('custom-logo', array(
    'height' => 38,
    'width' => 130,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array(get_bloginfo('name'), get_bloginfo('description')),
));

add_theme_support( 'post-thumbnails' );