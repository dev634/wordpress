<?php

    add_action('wp_ajax_nopriv_mytheme_save_post','mytheme_save_post');
    add_action('wp_ajax_mytheme_save_post','mytheme_save_post');

    function mytheme_save_post(){
        $firstname = wp_strip_all_tags($_POST['nom']);
        $lastname = wp_strip_all_tags($_POST['prenom']);
        $title = wp_strip_all_tags($_POST['sujet']);
        $email = wp_strip_all_tags($_POST['email']);
        $message = wp_strip_all_tags($_POST['message']);

        echo $title . ' ,' . $firstname . ' ,' . $lastname . ' ,' . $email . ',' . $message;

        wp_die();
    }