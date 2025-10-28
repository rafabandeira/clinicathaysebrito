<?php
// Imagens de fundo (default)
$slide1_bg = get_theme_mod( 'clinicatb_hero_slide1_bg', get_template_directory_uri() . '/assets/img/clinica/720015-PRSRP4-413.jpg' );
$slide2_bg = get_theme_mod( 'clinicatb_hero_slide2_bg', get_template_directory_uri() . '/assets/img/clinica/731.jpg' );
$slide3_bg = get_theme_mod( 'clinicatb_hero_slide3_bg', get_template_directory_uri() . '/assets/img/clinica/14317.jpg' );
?>
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url(<?php echo esc_url( $slide1_bg ); ?>)">
          <div class="container">
            <h2><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide1_title', 'Bem vinda a <span>Clínica Thayse Brito</span>' ) ); ?></h2>
            <p><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide1_text', 'Somos um centro especializado...' ) ); ?></p>
            <a href="#sobre" class="btn-get-started scrollto"><?php esc_html_e( 'A Clínica Thayse Brito', 'clinicathaysebrito' ); ?></a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(<?php echo esc_url( $slide2_bg ); ?>)">
          <div class="container">
            <h2><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide2_title', 'Emagrecimento' ) ); ?></h2>
            <p><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide2_text', '<strong>Você está em busca de uma vida mais saudável?</strong><br>...' ) ); ?></p>
            <a href="#sobre" class="btn-get-started scrollto"><?php esc_html_e( 'Saiba mais', 'clinicathaysebrito' ); ?></a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(<?php echo esc_url( $slide3_bg ); ?>)">
          <div class="container">
            <h2><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide3_title', 'Estética Facial e Corporal' ) ); ?></h2>
            <p><?php echo wp_kses_post( get_theme_mod( 'clinicatb_hero_slide3_text', '<strong>Qual o melhor tratamento para você?</strong><br>...' ) ); ?></p>
            <a href="#sobre" class="btn-get-started scrollto"><?php esc_html_e( 'Saiba mais', 'clinicathaysebrito' ); ?></a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only"><?php esc_html_e( 'Anterior', 'clinicathaysebrito' ); ?></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only"><?php esc_html_e( 'Próximo', 'clinicathaysebrito' ); ?></span>
      </a>

    </div>
  </section>