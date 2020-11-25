<?php

/**
 * About us Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$title = get_field('title');
$description = get_field('description');
$image_url = get_field('image');
$what_we_do = get_field('what_we_do');

?>

<section class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="medium-6 cell small-order-2 medium-order-1">
            <? if ($title) : ?>
                <h2><?= $title ?></h2>
            <? endif ?>

            <? if ($description) : ?>
                <p><?= $description ?></p>
            <? endif ?>
        </div>


        <? if ($image_url) : ?>
            <div class="medium-6 cell small-order-1 medium-order-2">
                <img class="thumbnail" src="<?= $image_url ?>">
            </div>
        <? endif ?>
    </div>

    <? if ($what_we_do) : ?>
        <div class="grid-x grid-margin-x">

            <? foreach ($what_we_do as $item) : ?>
                <div class="medium-4 cell">
                    <? if ($item['title']) : ?>
                        <h3><?= $item['title'] ?></h3>
                    <? endif ?>
                    <? if ($item['description']) : ?>
                        <p><?= $item['description'] ?></p>
                    <? endif ?>
                </div>
            <? endforeach; ?>

        </div>
    <? endif ?>
</section>