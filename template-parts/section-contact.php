<section id="contato" class="contact">
  <div class="container">

    <div class="section-title">
      <h2><?php esc_html_e( 'Contato', 'clinicathaysebrito' ); ?></h2>
      <p><?php echo esc_html( get_theme_mod( 'clinicatb_contact_intro', 'Tem alguma dúvida ou sugestão, aqui é o lugar certo, nos envie uma mensagem, será um prazer atendê-la.' ) ); // Adicionar no Customizer
        ?></p>
    </div>

  </div>

  <div>
    <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo esc_url( get_theme_mod( 'clinicatb_contact_map_iframe', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.885420246781!2d-38.459774684840646!3d-12.979179663479016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b0458359707%3A0xb201f51876934ef5!2sCl%C3%ADnica%20Thayse%20Brito!5e0!3m2!1spt-BR!2sbr!4v1659736138478!5m2!1spt-BR!2sbr' ) ); ?>" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container">

    <div class="row mt-5">

      <div class="col-lg-6">

        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3><?php esc_html_e( 'Endereço', 'clinicathaysebrito' ); ?></h3>
              <p><?php echo esc_html( get_theme_mod( 'clinicatb_contact_address', 'Av. Tancredo Neves, 939...' ) ); ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3><?php esc_html_e( 'Email', 'clinicathaysebrito' ); ?></h3>
              <p><?php echo esc_html( get_theme_mod( 'clinicatb_contact_email', 'contato@clinicathaysebrito.com.br' ) ); ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3><?php esc_html_e( 'Telefone', 'clinicathaysebrito' ); ?></h3>
              <p><?php echo esc_html( get_theme_mod( 'clinicatb_contact_phone', '71 99171-7563' ) ); ?></p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <?php
        // Shortcode para o formulário de contato (ex: CF7)
        // echo do_shortcode( '[contact-form-7 id="XYZ" title="Formulário de Contato"]' );
        ?>
        <form action="#" method="post" role="form" class="php-email-form-shortcode">
             <p style="text-align:center; font-style:italic;">
                <?php esc_html_e( 'Integre seu shortcode de formulário de contato aqui (ex: Contact Form 7).', 'clinicathaysebrito' ); ?>
            </p>
            </form>
      </div>

    </div>

  </div>
</section>