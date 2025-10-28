<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="<?php echo esc_attr( get_theme_mod( 'clinicatb_featured_1_icon', 'icofont-ello' ) ); ?>"></i></div>
          <h4 class="title"><a href=""><?php echo esc_html( get_theme_mod( 'clinicatb_featured_1_title', 'Emagrecimento' ) ); ?></a></h4>
          <div class="description"><?php echo wp_kses_post( get_theme_mod( 'clinicatb_featured_1_desc', 'Sociável <br>Saudável <br>Sustentável <br>Simples <br>Saboroso' ) ); ?></div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="<?php echo esc_attr( get_theme_mod( 'clinicatb_featured_2_icon', 'icofont-girl' ) ); ?>"></i></div>
          <h4 class="title"><a href=""><?php echo esc_html( get_theme_mod( 'clinicatb_featured_2_title', 'Estética Facial' ) ); ?></a></h4>
          <p class="description"><?php echo wp_kses_post( get_theme_mod( 'clinicatb_featured_2_desc', 'Os tratamentos de estética facial são muito procurados...' ) ); ?></p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="<?php echo esc_attr( get_theme_mod( 'clinicatb_featured_3_icon', 'icofont-icu' ) ); ?>"></i></div>
          <h4 class="title"><a href=""><?php echo esc_html( get_theme_mod( 'clinicatb_featured_3_title', 'Estética Corporal' ) ); ?></a></h4>
          <p class="description"><?php echo wp_kses_post( get_theme_mod( 'clinicatb_featured_3_desc', 'Uso de técnicas e procedimentos no sentido de delinear melhor a silhueta...' ) ); ?></p>
        </div>
      </div>

    </div>
  </div>
</section>```

[ /wp-content/themes/clinicathaysebrito/template-parts/section-cta.php ]
```php
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="text-center">
      <h3><?php echo esc_html( get_theme_mod( 'clinicatb_cta_title', 'Viva um novo estilo de vida' ) ); ?></h3>
      <p><?php echo wp_kses_post( get_theme_mod( 'clinicatb_cta_text', 'O primeiro passo é uma consulta inicial...' ) ); ?></p>
      <a class="cta-btn scrollto" href="#consulta"><?php esc_html_e( 'Agendar uma consulta', 'clinicathaysebrito' ); ?></a>
    </div>

  </div>
</section>```

[ /wp-content/themes/clinicathaysebrito/template-parts/section-about.php ]
```php
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
</section>```

[ /wp-content/themes/clinicathaysebrito/template-parts/section-testimonials.php ]
```php
<section id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?php esc_html_e( 'Depoimentos', 'clinicathaysebrito' ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'clinicatb_testimonials_intro', 'Nada melhor do que resultados reais para comprovar nossos procedimentos.' ) ); // Adicionar no Customizer
        ?></p>
    </div>

    <?php
    $args_depoimentos = array(
        'post_type'      => 'depoimento',
        'posts_per_page' => 10,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $query_depoimentos = new WP_Query( $args_depoimentos );

    if ( $query_depoimentos->have_posts() ) :
        ?>
        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">
        <?php
        while ( $query_depoimentos->have_posts() ) :
            $query_depoimentos->the_post();
            
            // O subtítulo (ex: 5S Emagrecimento) deve vir de um custom field
            // $subtitulo = get_post_meta( get_the_ID(), '_subtitulo_depoimento', true );
            $subtitulo = '5S Emagrecimento'; // Placeholder
            ?>
            <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo wp_kses_post( get_the_content() ); ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'thumbnail', array( 'class' => 'testimonial-img' ) );
                } else {
                    // Imagem placeholder se não houver thumbnail
                    echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/testimonials/testimonials-placeholder.jpg' ) . '" class="testimonial-img" alt="">';
                }
                ?>
                <h3><?php the_title(); ?></h3>
                <h4><?php echo esc_html( $subtitulo ); ?></h4>
            </div>
            <?php
        endwhile;
        ?>
        </div>
        <?php
        wp_reset_postdata();
    endif;
    ?>

  </div>
</section>```

[ /wp-content/themes/clinicathaysebrito/template-parts/section-professionals.php ]
```php
<section id="profissionais" class="doctors section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?php esc_html_e( 'Profissionais', 'clinicathaysebrito' ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'clinicatb_professionals_intro', 'Estética e saúde precisam estar unidas. Na Clínica Thayse Brito...' ) ); // Adicionar no Customizer
        ?></p>
    </div>

    <div class="row">
    <?php
    $args_profissionais = array(
        'post_type'      => 'profissional',
        'posts_per_page' => 3,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );
    $query_profissionais = new WP_Query( $args_profissionais );

    if ( $query_profissionais->have_posts() ) :
        $delay = 100;
        while ( $query_profissionais->have_posts() ) :
            $query_profissionais->the_post();
            
            // O Cargo (ex: Fisioterapeuta) deve vir de um custom field
            // $cargo = get_post_meta( get_the_ID(), '_cargo_profissional', true );
            $cargo = 'Profissional'; // Placeholder
            ?>
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                  <div class="member-img">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); // Assumindo 'large' size
                    } else {
                        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/doctors/doctors-placeholder.jpg' ) . '" class="img-fluid" alt="">';
                    }
                    ?>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4><?php the_title(); ?></h4>
                    <span><?php echo esc_html( $cargo ); ?></span>
                  </div>
                </div>
              </div>
            <?php
            $delay += 100;
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

    </div>

  </div>
</section>