<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/53f00e20c6.js" crossorigin="anonymous"></script>
    <title><?= bloginfo('name'); ?></title>
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
    <div class="navigation">    
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">BOOKS</a></li>
            <li><a href="#">ILLUSTRATION</a></li>
            <li><a href="#">OTHER WORK</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>  
    </div>
</div>
</nav>
<div class="content-grid">