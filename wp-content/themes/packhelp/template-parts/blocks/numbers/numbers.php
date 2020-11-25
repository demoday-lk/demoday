<?php

/**
 * Numbers Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$numbers = get_field('numbers');

?>

<? if ($numbers) : ?>
    <section class="grid-container">
        <div class="row column">
            <ul class="vertical medium-horizontal menu expanded text-center">
                <? foreach ($numbers as $item) : ?>
                    <li>
                        <? if ($item['link']) : ?>
                            <a href="<?= $item['link']['url'] ?>">
                                <? if ($item['number']) : ?>
                                    <div class="stat"><?= $item['number'] ?></div>
                                <? endif ?>
                                <? if ($item['title']) : ?>
                                    <span><?= $item['title'] ?></span>
                                <? endif ?>
                            </a>
                        <? endif ?>
                    </li>
                <? endforeach; ?>

            </ul>
        </div>
    </section>
<? endif ?>