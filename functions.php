<?php

/**
 * Enqueue CSS and JS files
 */
function abtion_enqueueFiles() {
    // CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/build/main.css');
    wp_enqueue_style('fullpage', get_template_directory_uri() . '/assets/css/build/fullpage.min.css');
    wp_enqueue_style('flickity', get_template_directory_uri() . '/assets/css/build/flickity.min.css');

	// JS
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('flickity', get_template_directory_uri() . '/assets/js/flickity.pkgd.js');
    wp_enqueue_script('fullpage', get_template_directory_uri() . '/assets/js/fullpage.min.js');
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/build/app.js');
};
add_action('wp_enqueue_scripts', 'abtion_enqueueFiles');

/**
 * Register nav-menu
 */
register_nav_menus(array(
    'main' => 'mainMenu'
));

class subpage_Walker extends Walker_Page {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "\n$indent<div class='pages'><ul>\n";
        } else {
            $output .= "\n$indent<ul class='sub-menu'>\n";
        }
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            $output .= "$indent</ul></div>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }
};

// custom logo

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),

) );

// Remove the content editor on pages
add_action('admin_init', 'remove_textarea');

    function remove_textarea() {
            remove_post_type_support( 'page', 'editor' );
    };