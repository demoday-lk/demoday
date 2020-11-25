<?php

get_header();

$post_id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($post_id);
$price = get_field('price');
$sizes = get_field('sizes');

?>

    <article class="grid-container">
        <div class="grid-x grid-margin-x">
            <? if ($thumbnail) : ?>
                <div class="medium-6 cell">
                    <img class="thumbnail" src="<?= $thumbnail ?>">
                </div>
            <? endif ?>
            <div class="medium-6 large-5 cell large-offset-1">
                <h3><?= the_title() ?></h3>
                <p><?= the_content() ?></p>

                <? if ($sizes) : ?>
                    <div id="vue-calculator"
                         price='<?= $price ?>'
                         sizes='<?= json_encode($sizes) ?>'
                    ></div>
                <? endif ?>

                <a href="#" class="button large expanded">Buy Now</a>

                <? get_template_part('template-parts/social-share'); ?>

            </div>
        </div>

        <hr>

        <? get_template_part('template-parts/blocks/latest-products/latest-products', null,
            array(
                'classes' => 'medium-up-2 large-up-4',
                'categories' => wp_get_post_categories(get_the_ID(), array('fields' => 'ids')),
                'amount' => 8
            )
        ); ?>

        <hr>

    </article>

<?php

get_footer();
