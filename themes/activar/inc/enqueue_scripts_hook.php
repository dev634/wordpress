<?php
function my_scripts() {
    
    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js' , false, NULL, true );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), NULL, true );
    wp_register_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' , array('jquery'), NULL, true );
    wp_register_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js' , false, NULL, true );
    wp_register_script( 'nice', get_template_directory_uri() . '/js/jquery.nice-select.min.js' , array('jquery'), NULL, true );
    wp_register_script( 'slick', get_template_directory_uri() . '/js/jquery.slicknav.js' , array('jquery'), NULL, true );
    wp_register_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery'), NULL, true );
    wp_register_script('mansory', get_template_directory_uri() . '/js/masonry.pkgd.min.js' , false, NULL, true);
    wp_register_script('main', get_template_directory_uri() . '/js/main.js' , array('owl','jquery'), NULL, true);
    
    

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'magnific' );
    wp_enqueue_script( 'mixitup' );
    wp_enqueue_script( 'nice' );
    wp_enqueue_script( 'slick' );
    wp_enqueue_script( 'owl', array('jquery'));
    wp_enqueue_script( 'mansory');
    wp_enqueue_script( 'main',array('owl','jquery'));


}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_styles() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false ,'4.4.1', 'all');
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false ,'4.4.1', 'all');
    wp_register_style( 'elegant', get_template_directory_uri() . '/css/elegant-icons.css', false ,'4.4.1', 'all');
    wp_register_style( 'nice', get_template_directory_uri() . '/css/nice-select.css', false ,'4.4.1', 'all');
    wp_register_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', false ,'4.4.1', 'all');
    wp_register_style( 'magnific', get_template_directory_uri() . '/css/magnific-popup.css', false ,'4.4.1', 'all');
    wp_register_style( 'slick', get_template_directory_uri() . '/css/slicknav.min.css', false ,'4.4.1', 'all');
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', false ,'4.4.1', 'all');
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('elegant');
    wp_enqueue_style('nice');
    wp_enqueue_style('owl');
    wp_enqueue_style('magnific');
    wp_enqueue_style('slick');
    wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'my_styles' );