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