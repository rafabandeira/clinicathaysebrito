<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <?php 
	// Scripts de tracking (Google/Facebook) devem ser inseridos via plugin ou pelo hook 'wp_head'
	// Exemplo:
	/*
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KYKB47L996"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-KYKB47L996');
	</script>
	*/
  ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> <?php echo esc_html( get_theme_mod( 'clinicatb_topbar_schedule', 'Segunda a Sexta-feira das 9h às 19h, Sábado das 9h às 12h' ) ); ?>
      </div>
      <div class="d-flex align-items-center">
        <a href="<?php echo esc_url( get_theme_mod( 'clinicatb_topbar_whatsapp_url', '#' ) ); ?>" target="_blank" style="color: white">
            <i class="icofont-whatsapp"></i> <?php echo esc_html( get_theme_mod( 'clinicatb_topbar_whatsapp_text', 'WhatsApp 71 99171-7563' ) ); ?>
        </a>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <?php
      if ( has_custom_logo() ) {
          the_custom_logo();
      } else {
          echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="logo mr-auto"><img src="' . get_template_directory_uri() . '/assets/img/logo.png" alt="' . get_bloginfo( 'name' ) . '"></a>';
      }
      ?>

      <nav class="nav-menu d-none d-lg-block">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '', // A estrutura <ul> já é fornecida pelo WP
                'fallback_cb'    => false, // Não mostrar nada se o menu não existir
                'depth'          => 2, // Suporta 1 nível de dropdown
            )
        );
        ?>
      </nav><a href="#consulta" class="appointment-btn scrollto">
        <span class="d-none d-md-inline"><?php esc_html_e( 'Agende uma', 'clinicathaysebrito' ); ?></span> <?php esc_html_e( 'Consulta', 'clinicathaysebrito' ); ?>
      </a>

    </div>
  </header>