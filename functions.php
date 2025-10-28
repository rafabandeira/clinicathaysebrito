<?php
/**
 * Funções e definições do tema Clínica Thayse Brito
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ClinicaThayseBrito
 */

if ( ! defined( 'CLINICATB_VERSION' ) ) {
	// Substitua por um número de versão real para cache busting
	define( 'CLINICATB_VERSION', '1.0.0' );
}

/**
 * Configurações básicas do tema.
 */
function clinicathaysebrito_setup() {
	// Suporte para tradução
	load_theme_textdomain( 'clinicathaysebrito', get_template_directory() . '/languages' );

	// Adiciona suporte para title tag
	add_theme_support( 'title-tag' );

	// Adiciona suporte para post thumbnails (necessário para Profissionais, Tratamentos)
	add_theme_support( 'post-thumbnails' );

	// Suporte para Logotipo Customizado (usado no header)
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40, // Altura do logo no header
			'width'       => 150,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Registra o menu de navegação principal
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Menu Principal', 'clinicathaysebrito' ),
		)
	);

	// Suporte para HTML5
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'clinicathaysebrito_setup' );

/**
 * Enfileira scripts e estilos.
 */
function clinicathaysebrito_scripts() {
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap', array(), null );

	// Vendor CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '4.5.0' );
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0.1' );
	wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '2.0.7' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '4.1.1' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '2.3.4' );
	wp_enqueue_style( 'venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '1.9.3' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '2.3.4' );

	// Main Theme CSS (Conteúdo original do style.css movido para cá)
	wp_enqueue_style( 'clinicathaysebrito-style', get_template_directory_uri() . '/assets/css/style.css', array( 'bootstrap' ), CLINICATB_VERSION );
    
    // JS VENDORS
	// O jQuery já é registrado pelo WordPress, apenas o definimos como dependência.
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '4.5.0', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array( 'jquery' ), '1.4.1', true );
	wp_enqueue_script( 'php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0', true ); // Apenas validação; o envio será por plugin
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array( 'jquery' ), '4.0.1', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array( 'jquery', 'waypoints' ), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array( 'jquery' ), '1.9.3', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '2.3.4', true );
	wp_enqueue_script( 'maskedinput', get_template_directory_uri() . '/assets/vendor/maskedinput/jquery.maskedinput.min.js', array( 'jquery' ), '1.4.1', true );

	// Main Theme JS
	wp_enqueue_script( 'clinicathaysebrito-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'bootstrap-bundle', 'jquery-easing', 'aos' ), CLINICATB_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'clinicathaysebrito_scripts' );

/**
 * Inclui arquivos de configuração modularizados.
 */
// Registro de Custom Post Types (Tratamentos, Profissionais, Depoimentos)
require get_template_directory() . '/inc/post-types.php';

// Configuração do Customizer (Opções do Tema)
require get_template_directory() . '/inc/customizer.php';