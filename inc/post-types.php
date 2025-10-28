<?php
/**
 * Registra Custom Post Types
 *
 * @package ClinicaThayseBrito
 */

function clinicathaysebrito_register_cpts() {

	/**
	 * Post Type: Tratamentos
	 */
	$labels_tratamentos = array(
		'name'          => esc_html__( 'Tratamentos', 'clinicathaysebrito' ),
		'singular_name' => esc_html__( 'Tratamento', 'clinicathaysebrito' ),
	);
	$args_tratamentos = array(
		'label'         => esc_html__( 'Tratamentos', 'clinicathaysebrito' ),
		'labels'        => $labels_tratamentos,
		'supports'      => array( 'title', 'editor', 'thumbnail' ), // Título, Descrição, Imagem (usar para ícone se desejar, ou metabox)
		'hierarchical'  => false,
		'public'        => false, // Não visível publicamente (sem single.php)
		'show_ui'       => true,
		'show_in_menu'  => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-star-filled',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export'    => true,
		'has_archive'   => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
		'show_in_rest'  => true,
	);
	register_post_type( 'tratamento', $args_tratamentos );

	/**
	 * Post Type: Profissionais
	 */
	$labels_profissionais = array(
		'name'          => esc_html__( 'Profissionais', 'clinicathaysebrito' ),
		'singular_name' => esc_html__( 'Profissional', 'clinicathaysebrito' ),
	);
	$args_profissionais = array(
		'label'         => esc_html__( 'Profissionais', 'clinicathaysebrito' ),
		'labels'        => $labels_profissionais,
		'supports'      => array( 'title', 'editor', 'thumbnail' ), // Título (Nome), Editor (Bio), Thumbnail (Foto)
		'hierarchical'  => false,
		'public'        => false,
		'show_ui'       => true,
		'show_in_menu'  => true,
		'menu_position' => 6,
		'menu_icon'     => 'dashicons-admin-users',
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
		'show_in_rest'  => true,
	);
	register_post_type( 'profissional', $args_profissionais );
    // Nota: O campo "Cargo" (ex: Esteticista) deve ser adicionado via Metabox (ACF ou nativo).

	/**
	 * Post Type: Depoimentos
	 */
	$labels_depoimentos = array(
		'name'          => esc_html__( 'Depoimentos', 'clinicathaysebrito' ),
		'singular_name' => esc_html__( 'Depoimento', 'clinicathaysebrito' ),
	);
	$args_depoimentos = array(
		'label'         => esc_html__( 'Depoimentos', 'clinicathaysebrito' ),
		'labels'        => $labels_depoimentos,
		'supports'      => array( 'title', 'editor', 'thumbnail' ), // Título (Nome do Cliente), Editor (Texto), Thumbnail (Foto)
		'hierarchical'  => false,
		'public'        => false,
		'show_ui'       => true,
		'show_in_menu'  => true,
		'menu_position' => 7,
		'menu_icon'     => 'dashicons-format-quote',
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
		'show_in_rest'  => true,
	);
	register_post_type( 'depoimento', $args_depoimentos );
    // Nota: O campo "Subtítulo" (ex: 5S Emagrecimento) deve ser adicionado via Metabox.
}
add_action( 'init', 'clinicathaysebrito_register_cpts', 0 );