<section id="tratamentos" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php esc_html_e( 'Tratamentos', 'clinicathaysebrito' ); ?></h2>
          <p><?php echo esc_html( get_theme_mod( 'clinicatb_treatments_intro_text', 'Muito além da busca pela beleza, é importante dar atenção à saúde...' ) ); // Adicionar esta setting no customizer.php se desejar
            ?></p>
        </div>

        <div class="row">
          <?php
            $args_tratamentos = array(
                'post_type'      => 'tratamento',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );
            $query_tratamentos = new WP_Query( $args_tratamentos );

            if ( $query_tratamentos->have_posts() ) :
                while ( $query_tratamentos->have_posts() ) :
                    $query_tratamentos->the_post();
                    // Nota: O ícone (ex: 'icofont-ui-laoding') deve ser salvo como um Custom Field (Metabox).
                    // Exemplo se usar ACF: $icon_class = get_field('icone_tratamento');
                    // Exemplo nativo: $icon_class = get_post_meta( get_the_ID(), '_icon_class', true );
                    $icon_class = 'icofont-star'; // Placeholder
                    ?>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100"> <div class="icon"><i class="<?php echo esc_attr( $icon_class ); ?>"></i></div>
                        <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
                        <div class="description"><?php the_content(); ?></div>
                    </div>

                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Nenhum tratamento encontrado
            endif;
            ?>
        </div>
      </div>
    </section>