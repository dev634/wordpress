<?php
function jmp_custom_post_type($post_id) {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		'name'                => _x( 'Images header', 'Post Type General Name'),
		'singular_name'       => _x( 'Image header', 'Post Type Singular Name'),
		'menu_name'           => __( 'Header 1'),
		'all_items'           => __( 'Toutes les images'),
		'view_item'           => __( 'Voir les images'),
		'add_new_item'        => __( 'Ajouter une nouvelle image'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer image'),
		'update_item'         => __( 'Modifier image'),
		'search_items'        => __( 'Rechercher une image'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Images'),
		'description'         => __( 'Toutes les images du header'),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-images-alt',
		'supports'            => array( 'title' , 'editor', 'thumbnail'),
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array('slug' => 'wp-content/uploads','with_front' => true),
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'header', $args );

}

add_action( 'init', 'jmp_custom_post_type', 0 );


function init_remove_support(){
    $post_type = 'planning';
    remove_post_type_support( $post_type, 'editor');
}

add_action('init', 'init_remove_support',100);


// add an acf custom group and fields
function register_custom_acf_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {

		// ACF Group: Formations
		acf_add_local_field_group( array (
			'key'      => 'formations',
			'title'    => 'Formations',
			'location' => array (
				array (
					array (
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'planning',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
		) );

		$args = array(
			'post_type' => 'formation',
		);

		$args_2 = array(
			'post_type' => 'planning',
		);

		$val = get_posts($args);
		$title_post = array();

		foreach($val as $value){
			array_push($title_post, $value->post_title);
		};

		$choiceTab = array();

		foreach($title_post as $value){
			$choiceTab[$value] = $value;
		}

		acf_add_local_field( array(
				'key'          => "Choix",
				'label'        => "Choix",
				'name'         => "choix",
				'type'         => 'checkbox',
				'parent'       => 'formations',
				'instructions' => '',
				'required'     => 0,
				'choices' => $choiceTab,
				'layout' => 'horizontal',
				'allow_custom' => false,
				'save_custom' => false,
				'toggle' => false,
				'return_format' => 'value',
			) );
	}

}

add_action( 'init', 'register_custom_acf_fields' );

function make_table(){
	
	if ( function_exists( 'acf_add_local_field_group' ) ) {

	$page_fields = get_field_objects(973);
	$days = $page_fields['jours']['value'];
	$formation = $page_fields['choix']['value'];
	$test = get_posts(array('post_type' == 'formations'));
	$id_array = array();
	foreach($test as $value){
		array_push($id_array,$value->ID);
	}

		foreach($days as $value){
			acf_add_local_field_group( array (
				'key'      => $value,
				'title'    => $value,
				'location' => array (
					array (
						array (
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'planning',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'layout' => 'special',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
			) );
			 
				foreach($formation as $value_2){
					$sanitize = sanitize_title($value_2);
					acf_add_local_field( array (
						'key' => $value . '_' . $sanitize,
						'label' => $value_2,
						'name' => $value . '_' . $sanitize,
						'type' => 'textarea',
						'instructions' => '',
						'parent'=> $value,
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => 'w20',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '4',
						'new_lines' => '',
						'readonly' => 0,
						'disabled' => 0,
					));
				}
			}
		}
}

add_action('init','make_table');
