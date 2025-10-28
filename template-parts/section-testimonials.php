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
</section>