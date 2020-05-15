<?php
    
    
function pablo_admin_enqueue_scripts($hook){
    wp_register_script('adminjs',get_template_directory_uri() . '/js/admin.min.js',array('jquery'), '1.0');
    wp_register_style('admincss',get_template_directory_uri() . '/css/admin.css',array(), '1.0');
    wp_enqueue_script('adminjs');
    wp_enqueue_style('admincss');
}

add_action('admin_enqueue_scripts', 'pablo_admin_enqueue_scripts');