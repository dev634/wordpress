<?php

function my_general_section() {  
        add_settings_section(  
            'infos', // Section ID 
            'Informations Personnelles :', // Section Title
            'my_section_options_callback', // Callback
            'general' // What Page?  This makes the section show up on the General Settings Page
        );
    
        add_settings_field( // Option 1
            'info_tel', // Option ID
            'Numero de Telephone :', // Label
            'my_textbox_callback', // !important - This is where the args go!
            'general', // Page it will be displayed (General Settings)
            'infos', // Name of our section
            array( // The $args
                'info_tel' // Should match Option ID
            )  
        );

        add_settings_field( // Option 1
            'info_adress', // Option ID
            'Adresse :', // Label
            'my_textbox_callback', // !important - This is where the args go!
            'general', // Page it will be displayed (General Settings)
            'infos', // Name of our section
            array( // The $args
                'info_adress' // Should match Option ID
            )  
        );

        add_settings_field( // Option 1
            'info_zip', // Option ID
            'Code Postal :', // Label
            'my_textbox_callback', // !important - This is where the args go!
            'general', // Page it will be displayed (General Settings)
            'infos', // Name of our section
            array( // The $args
                'info_zip' // Should match Option ID
            )  
        );

        add_settings_field( // Option 1
            'info_city', // Option ID
            'Ville :', // Label
            'my_textbox_callback', // !important - This is where the args go!
            'general', // Page it will be displayed (General Settings)
            'infos', // Name of our section
            array( // The $args
                'info_city' // Should match Option ID
            )  
        );

        add_settings_field( // Option 1
            'info_country', // Option ID
            'Pays :', // Label
            'my_textbox_callback', // !important - This is where the args go!
            'general', // Page it will be displayed (General Settings)
            'infos', // Name of our section
            array( // The $args
                'info_country' // Should match Option ID
            )  
        );
    
        register_setting('general','info_tel', 'esc_attr');
        register_setting('general','info_adress', 'esc_attr');
        register_setting('general','info_zip', 'esc_attr');
        register_setting('general','info_city', 'esc_attr');
        register_setting('general','info_country', 'esc_attr');
    }
    
    function my_section_options_callback() { // Section Callback
        echo '<p>Veuillez entrer vos informations personnelles :</p>';  
    }
    
    function my_textbox_callback($args) {  // Textbox Callback
        $option = get_option($args[0]);
        echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
    }
add_action('admin_init', 'my_general_section');

