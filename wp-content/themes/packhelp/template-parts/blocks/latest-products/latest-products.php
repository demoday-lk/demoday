<?php

/**
 * Latest products Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$title = get_field('title') ? get_field('title') : 'Other products:' ;
$product_button_text = get_field('product_button_text') ? get_field('product_button_text') : 'Buy Now';
$posts_amount = $args['amount'] ? $args['amount'] : 9;
$tax_query = $args['categories'] ? [
    [
        'taxonomy' => 'category',
        'terms' => implode(',', $args['categories']),
    ],
] : false;

$products = get_posts(array(
        'numberposts' => $posts_amount,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'product',
        'tax_query' => $tax_query,
        'exclude' => array(get_the_id()),
    )
);

?>

<section class="grid-container">
    <div class="row column">
        <? if ($title) : ?>
            <h3><?= $title ?></h3>
        <? endif ?>
    </div>

    <? if ($products) : ?>
        <div class="grid-x grid-margin-x <?= ($args['classes']) ? $args['classes'] : 'small-up-1 medium-up-3' ?>">

            <? foreach ($products as $product) : ?>

                <? $post_id = $product->ID; ?>
                <? $price = get_field('price', $post_id); ?>
                <? $thumbnail = get_the_post_thumbnail_url($post_id); ?>

                <div class="cell">
                    <img class="thumbnail" src="<?= $thumbnail ?>">
                    <? if ($product->post_title) : ?>
                        <h5>
                            <?= $product->post_title ?>
                            <small><?= $price ?></small>
                        </h5>
                    <? endif ?>

                    <? if ($product->post_excerpt) : ?>
                        <p><?= $product->post_excerpt ?></p>
                    <? endif ?>

                    <? if ($product_button_text) : ?>
                        <a href="<?= $product->guid ?>" class="button hollow expanded"><?= $product_button_text ?></a>
                    <? endif ?>
                </div>
            <? endforeach; ?>

        </div>
    <? endif ?>
</section>