<?php
function setup_the_theme(){

    //Nav Menu registration
    register_nav_menu('primary', 'Primary Navigation');
    register_nav_menu('secondary', 'Secondary Navigation');
    register_nav_menu('social','Top Social');

    //Theme support settings
    add_theme_support('custom-header');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'align-full' );
    add_theme_support('align-wide');
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(480,480);
    add_image_size( 'formations_thumbnail', 480, 480, true );

    add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image','quote','status', 'video','chat','audio' ) );
    

}


add_action('after_setup_theme', 'setup_the_theme');