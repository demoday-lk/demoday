<?php

/**
 * Callout Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$data = $block['data'];
$title = $data['title'];
$description = $data['description'];
$cta_primary = $data['cta_primary'];
$cta_secondary = $data['cta_secondary'];

?>

<div class="callout large">
    <div class="row column text-center">
        <? if ($title) : ?>
            <h1><?= $title ?></h1>
        <? endif ?>

        <? if ($description) : ?>
            <p class="lead"><?= $description ?></p>
        <? endif ?>

        <? if ($cta_primary) : ?>
            <a href="<?= $cta_primary['url'] ?>" target="<?= $cta_primary['target'] ?>" class="button large"><?= $cta_primary['title'] ?></a>
        <? endif ?>

        <? if ($cta_secondary) : ?>
            <a href="<?= $cta_secondary['url'] ?>" target="<?= $cta_secondary['target'] ?>" class="button large hollow"><?= $cta_secondary['title'] ?></a>
        <? endif ?>
    </div>
</div>