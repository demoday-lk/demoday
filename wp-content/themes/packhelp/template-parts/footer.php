<?php

$copyright_text = get_field('copyright_text', 'option');;

?>

<footer>
    <div class="grid-x callout">

        <div class="small-12 medium-6 cell">
            <ul class="menu">
                <?= wp_nav_menu( array( 'theme_location' => 'secondary' ) ) ?>
            </ul>
        </div>

        <? if ($copyright_text) : ?>
            <div class="small-12 medium-6 cell">
                <ul class="menu align-right">
                    <li class="menu-text"><?= $copyright_text ?></li>
                </ul>
            </div>
        <? endif ?>
    </div>
</footer>