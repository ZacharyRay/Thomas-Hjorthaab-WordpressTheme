<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/53f00e20c6.js" crossorigin="anonymous"></script>
    <title><?= bloginfo('name'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
<nav>
	<?php // wp_nav_menu('main'); ?>

<div class="menu_wrapper">
    <div class="signature"><?php 
    if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?></div>
    <input id="burger" type="checkbox" />
    <label for="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>


    <?php wp_nav_menu(
        array(
                'theme_location' => 'main'
            )
        ); ?>
</div>
</nav>
<div class="content-grid">