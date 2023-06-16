<?php
	/*

		Plugin Name: anCharry - Post Types
		Description: Añade Post Types al sitio anCharry
		Author: Asher Charlson
		Text Domain: anCharry
		
	*/

	if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function anCharry_Libros_post_type() {

	$labels = array(
		'name'                  => _x( 'Libros', 'Post Type General Name', 'anCharry' ),
		'singular_name'         => _x( 'Libro', 'Post Type Singular Name', 'anCharry' ),
		'menu_name'             => __( 'Libros', 'anCharry' ),
		'name_admin_bar'        => __( 'Libro', 'anCharry' ),
		'archives'              => __( 'Archivo', 'anCharry' ),
		'attributes'            => __( 'Atributos', 'anCharry' ),
		'parent_item_colon'     => __( 'Libro Padre', 'anCharry' ),
		'all_items'             => __( 'Todos Los Libros', 'anCharry' ),
		'add_new_item'          => __( 'Agregar Libro', 'anCharry' ),
		'add_new'               => __( 'Agregar Libro', 'anCharry' ),
		'new_item'              => __( 'Nueva Libro', 'anCharry' ),
		'edit_item'             => __( 'Editar Libro', 'anCharry' ),
		'update_item'           => __( 'Actualizar Libro', 'anCharry' ),
		'view_item'             => __( 'Ver Libro', 'anCharry' ),
		'view_items'            => __( 'Ver Libros', 'anCharry' ),
		'search_items'          => __( 'Buscar Libro', 'anCharry' ),
		'not_found'             => __( 'No Encontrado', 'anCharry' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'anCharry' ),
		'featured_image'        => __( 'Imagen Destacada', 'anCharry' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'anCharry' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'anCharry' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'anCharry' ),
		'insert_into_item'      => __( 'Insertar en Libro', 'anCharry' ),
		'uploaded_to_this_item' => __( 'Agregado en Libro', 'anCharry' ),
		'items_list'            => __( 'Lista de Libros', 'anCharry' ),
		'items_list_navigation' => __( 'Navegación de Libros', 'anCharry' ),
		'filter_items_list'     => __( 'Filtrar Libros', 'anCharry' ),
	);
	$args = [
		'label'                 => __( 'Libro', 'anCharry' ),
		'description'           => __( 'Libros para el Sitio Web', 'anCharry' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	];
	register_post_type( 'anCharry_Libros', $args );

}
add_action( 'init', 'anCharry_Libros_post_type', 0 );

function anCharry_Frases_post_type() {
	$labels = array(
		'name'                  => _x( 'Frases', 'Post Type General Name', 'anCharry' ),
		'singular_name'         => _x( 'Frase', 'Post Type Singular Name', 'anCharry' ),
		'menu_name'             => __( 'Frases', 'anCharry' ),
		'name_admin_bar'        => __( 'Frase', 'anCharry' ),
		'archives'              => __( 'Archivo', 'anCharry' ),
		'attributes'            => __( 'Atributos', 'anCharry' ),
		'parent_item_colon'     => __( 'Frase Padre', 'anCharry' ),
		'all_items'             => __( 'Todas Las Frases', 'anCharry' ),
		'add_new_item'          => __( 'Agregar Frase', 'anCharry' ),
		'add_new'               => __( 'Agregar Frase', 'anCharry' ),
		'new_item'              => __( 'Nueva Frase', 'anCharry' ),
		'edit_item'             => __( 'Editar Frase', 'anCharry' ),
		'update_item'           => __( 'Actualizar Frase', 'anCharry' ),
		'view_item'             => __( 'Ver Frase', 'anCharry' ),
		'view_items'            => __( 'Ver Frases', 'anCharry' ),
		'search_items'          => __( 'Buscar Frase', 'anCharry' ),
		'not_found'             => __( 'No Encontrado', 'anCharry' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'anCharry' ),
		'featured_image'        => __( 'Imagen Destacada', 'anCharry' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'anCharry' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'anCharry' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'anCharry' ),
		'insert_into_item'      => __( 'Insertar en Frase', 'anCharry' ),
		'uploaded_to_this_item' => __( 'Agregado en Frase', 'anCharry' ),
		'items_list'            => __( 'Lista de Frases', 'anCharry' ),
		'items_list_navigation' => __( 'Navegación de Frases', 'anCharry' ),
		'filter_items_list'     => __( 'Filtrar Frases', 'anCharry' ),
	);
	$args = array(
		'label'                 => __( 'Frases', 'anCharry' ),
		'description'           => __( 'Frases para el Sitio Web', 'anCharry' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'frases', $args );
}
add_action( 'init', 'anCharry_Frases_post_type', 0 );