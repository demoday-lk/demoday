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
    }
}