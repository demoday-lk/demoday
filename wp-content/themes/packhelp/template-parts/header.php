<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];

?>

<!-- Start Top Bar -->
<div class="title-bar" data-responsive-toggle="mainNavigation" data-hide-for="medium">
    <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
        <div class="title-bar-title">Menu</div>
    </div>
    <div class="title-bar-right">
        <img src="<?= $custom_logo ?>" height="38" width="130" alt="company logo">
    </div>
</div>

<div class="top-bar" id="mainNavigation">
    <div class="top-bar-left">
        <ul class="menu vertical medium-horizontal">
            <li class="hide-for-small-only"><img src="<?= $custom_logo ?>"  height="38" width="130" alt="company logo"></li>
            <?= wp_nav_menu( array( 'theme_location' => 'primary' ) ) ?>
        </ul>
    </div>
</div>
<!-- End Top Bar -->