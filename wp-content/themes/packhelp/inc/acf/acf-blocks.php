<?php

add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'callout',
            'title'             => __('Callout'),
            'description'       => __('A custom callout block.'),
            'render_template'   => 'template-parts/blocks/callout/callout.php',
            'mode'              => 'edit',
            'keywords'          => array( 'callout' ),
        ));

        acf_register_block_type(array(
            'name'              => 'about-us',
            'title'             => __('About Us'),
            'description'       => __('An about us callout block.'),
            'render_template'   => 'template-parts/blocks/about-us/about-us.php',
            'mode'              => 'edit',
            'keywords'          => array( 'about-us' ),
        ));

        acf_register_block_type(array(
            'name'              => 'numbers',
            'title'             => __('Numbers'),
            'description'       => __('An numbers callout block.'),
            'render_template'   => 'template-parts/blocks/numbers/numbers.php',
            'mode'              => 'edit',
            'keywords'          => array( 'numbers' ),
        ));
    }
}