<?php
/**
 * Configuração do Customizer (Opções do Tema)
 *
 * @package ClinicaThayseBrito
 */

function clinicathaysebrito_customize_register( $wp_customize ) {

	// Painel Principal
	$wp_customize->add_panel(
		'clinicatb_theme_options',
		array(
			'title'    => __( 'Opções do Tema', 'clinicathaysebrito' ),
			'priority' => 10,
		)
	);

	// --- Seção: Top Bar ---
	$wp_customize->add_section(
		'clinicatb_topbar_section',
		array(
			'title'    => __( 'Barra do Topo', 'clinicathaysebrito' ),
			'panel'    => 'clinicatb_theme_options',
			'priority' => 10,
		)
	);
	// Setting: Horário
	$wp_customize->add_setting( 'clinicatb_topbar_schedule', array( 'default' => 'Segunda a Sexta-feira das 9h às 19h, Sábado das 9h às 12h', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_topbar_schedule', array( 'label' => __( 'Texto Horário', 'clinicathaysebrito' ), 'section' => 'clinicatb_topbar_section', 'type' => 'text' ) );
	// Setting: WhatsApp Link
	$wp_customize->add_setting( 'clinicatb_topbar_whatsapp_url', array( 'default' => 'https://api.whatsapp.com/send?phone=5571991717563', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'clinicatb_topbar_whatsapp_url', array( 'label' => __( 'Link WhatsApp', 'clinicathaysebrito' ), 'section' => 'clinicatb_topbar_section', 'type' => 'url' ) );
	// Setting: WhatsApp Texto
	$wp_customize->add_setting( 'clinicatb_topbar_whatsapp_text', array( 'default' => 'WhatsApp 71 99171-7563', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_topbar_whatsapp_text', array( 'label' => __( 'Texto WhatsApp', 'clinicathaysebrito' ), 'section' => 'clinicatb_topbar_section', 'type' => 'text' ) );

	// --- Seção: Herói ---
	$wp_customize->add_section(
		'clinicatb_hero_section',
		array(
			'title'    => __( 'Seção Herói', 'clinicathaysebrito' ),
			'panel'    => 'clinicatb_theme_options',
			'priority' => 20,
		)
	);
    // Slide 1
	$wp_customize->add_setting( 'clinicatb_hero_slide1_bg', array( 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clinicatb_hero_slide1_bg', array( 'label' => __( 'Slide 1: Imagem Fundo', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'settings' => 'clinicatb_hero_slide1_bg' ) ) );
	$wp_customize->add_setting( 'clinicatb_hero_slide1_title', array( 'default' => 'Bem vinda a <span>Clínica Thayse Brito</span>', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_hero_slide1_title', array( 'label' => __( 'Slide 1: Título', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'type' => 'textarea' ) );
	$wp_customize->add_setting( 'clinicatb_hero_slide1_text', array( 'default' => 'Somos um centro especializado em Emagrecimento e Estética Facial e Corporal...', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_hero_slide1_text', array( 'label' => __( 'Slide 1: Texto', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'type' => 'textarea' ) );
    
    // Slide 2 (Repetir padrão para Slide 2 e 3)
	$wp_customize->add_setting( 'clinicatb_hero_slide2_bg', array( 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clinicatb_hero_slide2_bg', array( 'label' => __( 'Slide 2: Imagem Fundo', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'settings' => 'clinicatb_hero_slide2_bg' ) ) );
	$wp_customize->add_setting( 'clinicatb_hero_slide2_title', array( 'default' => 'Emagrecimento', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_hero_slide2_title', array( 'label' => __( 'Slide 2: Título', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'type' => 'textarea' ) );
    // ...etc para texto do slide 2

    // Slide 3 (Repetir padrão)
	$wp_customize->add_setting( 'clinicatb_hero_slide3_bg', array( 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clinicatb_hero_slide3_bg', array( 'label' => __( 'Slide 3: Imagem Fundo', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'settings' => 'clinicatb_hero_slide3_bg' ) ) );
	$wp_customize->add_setting( 'clinicatb_hero_slide3_title', array( 'default' => 'Estética Facial e Corporal', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_hero_slide3_title', array( 'label' => __( 'Slide 3: Título', 'clinicathaysebrito' ), 'section' => 'clinicatb_hero_section', 'type' => 'textarea' ) );
    // ...etc para texto do slide 3

	// --- Seção: CTA (Chamada para Ação) ---
	$wp_customize->add_section(
		'clinicatb_cta_section',
		array(
			'title'    => __( 'CTA (Meio)', 'clinicathaysebrito' ),
			'panel'    => 'clinicatb_theme_options',
			'priority' => 30,
		)
	);
	$wp_customize->add_setting( 'clinicatb_cta_title', array( 'default' => 'Viva um novo estilo de vida', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_cta_title', array( 'label' => __( 'Título CTA', 'clinicathaysebrito' ), 'section' => 'clinicatb_cta_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'clinicatb_cta_text', array( 'default' => 'O primeiro passo é uma consulta inicial...', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_cta_text', array( 'label' => __( 'Texto CTA', 'clinicathaysebrito' ), 'section' => 'clinicatb_cta_section', 'type' => 'textarea' ) );

	// --- Seção: Sobre ---
	$wp_customize->add_section(
		'clinicatb_about_section',
		array(
			'title'    => __( 'Sobre a Clínica', 'clinicathaysebrito' ),
			'panel'    => 'clinicatb_theme_options',
			'priority' => 40,
		)
	);
	$wp_customize->add_setting( 'clinicatb_about_title', array( 'default' => 'Clínica Thayse Brito - Estética e Bem Estar', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_about_title', array( 'label' => __( 'Título', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'clinicatb_about_subtitle', array( 'default' => 'Um espaço aconchegante, reservado e pensado especialmente para receber você.', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_about_subtitle', array( 'label' => __( 'Subtítulo', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'clinicatb_about_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clinicatb_about_image', array( 'label' => __( 'Imagem Sobre', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'settings' => 'clinicatb_about_image' ) ) );
	$wp_customize->add_setting( 'clinicatb_about_content_title', array( 'default' => 'Acreditamos no poder da autoestima!', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_about_content_title', array( 'label' => __( 'Título Conteúdo', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'type' => 'text' ) );
    // Os itens da lista (<li>) devem ser idealmente um repeater, mas para o Customizer nativo, usaremos um editor de texto.
	$wp_customize->add_setting( 'clinicatb_about_list', array( 'default' => '<li><i class="icofont-check-circled"></i> Atendimento individual e personalizado;</li><li><i class="icofont-check-circled"></i> Local limpo, reservado e climatizado;</li>', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_about_list', array( 'label' => __( 'Lista de Itens (HTML)', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'type' => 'textarea' ) );
	$wp_customize->add_setting( 'clinicatb_about_footer_text', array( 'default' => 'Qual o melhor tratamento para você?...', 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( 'clinicatb_about_footer_text', array( 'label' => __( 'Texto Final', 'clinicathaysebrito' ), 'section' => 'clinicatb_about_section', 'type' => 'textarea' ) );

	// --- Seção: Contato & Rodapé ---
	$wp_customize->add_section(
		'clinicatb_contact_section',
		array(
			'title'    => __( 'Contato e Rodapé', 'clinicathaysebrito' ),
			'panel'    => 'clinicatb_theme_options',
			'priority' => 100,
		)
	);
	$wp_customize->add_setting( 'clinicatb_contact_map_iframe', array( 'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.885420246781!2d-38.459774684840646!3d-12.979179663479016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b0458359707%3A0xb201f51876934ef5!2sCl%C3%ADnica%20Thayse%20Brito!5e0!3m2!1spt-BR!2sbr!4v1659736138478!5m2!1spt-BR!2sbr' ) ); // Sanitização é complexa para iframes, use wp_kses com cuidado na exibição.
	$wp_customize->add_control( 'clinicatb_contact_map_iframe', array( 'label' => __( 'URL Iframe Mapa', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'url' ) );
	$wp_customize->add_setting( 'clinicatb_contact_address', array( 'default' => 'Av. Tancredo Neves, 939, Edf. Esplanada Tower, Sala 1205 - Caminho das Árvores, Salvador - BA, 41820-021', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_contact_address', array( 'label' => __( 'Endereço', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'text' ) );
	$wp_customize->add_setting( 'clinicatb_contact_email', array( 'default' => 'contato@clinicathaysebrito.com.br', 'sanitize_callback' => 'sanitize_email' ) );
	$wp_customize->add_control( 'clinicatb_contact_email', array( 'label' => __( 'Email', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'email' ) );
	$wp_customize->add_setting( 'clinicatb_contact_phone', array( 'default' => '71 99171-7563', 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( 'clinicatb_contact_phone', array( 'label' => __( 'Telefone', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'text' ) );
    
    // Links Sociais
	$wp_customize->add_setting( 'clinicatb_social_facebook', array( 'default' => 'https://www.facebook.com/clinicathaysebrito', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'clinicatb_social_facebook', array( 'label' => __( 'Facebook URL', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'url' ) );
	$wp_customize->add_setting( 'clinicatb_social_instagram', array( 'default' => 'https://www.instagram.com/clinicathaysebrito/', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'clinicatb_social_instagram', array( 'label' => __( 'Instagram URL', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'url' ) );
	$wp_customize->add_setting( 'clinicatb_social_whatsapp_footer', array( 'default' => 'https://api.whatsapp.com/send?phone=5571991717563', 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( 'clinicatb_social_whatsapp_footer', array( 'label' => __( 'WhatsApp URL (Rodapé)', 'clinicathaysebrito' ), 'section' => 'clinicatb_contact_section', 'type' => 'url' ) );

}
add_action( 'customize_register', 'clinicathaysebrito_customize_register' );