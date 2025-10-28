<section id="sobre" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?php echo esc_html( get_theme_mod( 'clinicatb_about_title', 'Clínica Thayse Brito - Estética e Bem Estar' ) ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'clinicatb_about_subtitle', 'Um espaço aconchegante, reservado e pensado especialmente para receber você.' ) ); ?></p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <?php
        $about_img_url = get_theme_mod( 'clinicatb_about_image', get_template_directory_uri() . '/assets/img/clinica/IMG_20200309_212001.jpg' );
        ?>
        <img src="<?php echo esc_url( $about_img_url ); ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3><?php echo esc_html( get_theme_mod( 'clinicatb_about_content_title', 'Acreditamos no poder da autoestima! Nossos tratamentos estéticos para face e corpo ajudarão você a preservar sua juventude, beleza e confiança.' ) ); ?></h3>
        <p class="font-italic">
          <?php esc_html_e( 'O que espera você:', 'clinicathaysebrito' ); ?>
        </p>
        <ul>
            <?php
            // Esta lista deve ser editável no Customizer, idealmente com um repeater, ou um campo de texto simples com HTML.
            echo wp_kses_post(
                get_theme_mod(
                    'clinicatb_about_list',
                    '<li><i class="icofont-check-circled"></i> Atendimento individual e personalizado;</li>
                     <li><i class="icofont-check-circled"></i> Local limpo, reservado e climatizado;</li>
                     <li><i class="icofont-check-circled"></i> Profissionais pós-graduadas, responsáveis e experientes;</li>
                     <li><i class="icofont-check-circled"></i> Foco em resultados.</li>'
                )
            );
            ?>
        </ul>
        <p>
            <?php
            echo wp_kses_post(
                get_theme_mod(
                    'clinicatb_about_footer_text',
                    'Qual o melhor tratamento para você? Isso irá depender de uma boa avaliação feita pelas nossas profissionais. A <strong>responsabilidade com a sua saúde</strong> sempre será o principal fator nesse diagnóstico, acompanhado do <strong>foco em resultados com maior velocidade e menor custo</strong>.'
                )
            );
            ?>
        </p>
      </div>
    </div>

  </div>
</section>