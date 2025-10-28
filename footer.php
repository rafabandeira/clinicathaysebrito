<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3><?php bloginfo( 'name' ); ?></h3>
              <p>
                <?php echo nl2br( esc_html( get_theme_mod( 'clinicatb_contact_address', "Av. Tancredo Neves, 939, \nEdf. Esplanada Tower, Sala 1205 \nCaminho das Árvores, CEP 41820-021 \nSalvador, BA" ) ) ); ?><br>
                <br>
                <strong><i class="icofont-whatsapp"></i> <?php esc_html_e( 'WhatsApp:', 'clinicathaysebrito' ); ?></strong> <?php echo esc_html( get_theme_mod( 'clinicatb_contact_phone', '71 99171-7563' ) ); ?><br>
                <strong><i class="icofont-envelope"></i> <?php esc_html_e( 'Email:', 'clinicathaysebrito' ); ?></strong> <?php echo esc_html( get_theme_mod( 'clinicatb_contact_email', 'contato@clinicathaysebrito.com.br' ) ); ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="<?php echo esc_url( get_theme_mod( 'clinicatb_social_facebook', '#' ) ); ?>" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'clinicatb_social_instagram', '#' ) ); ?>" target="_blank"><i class="bx bxl-instagram"></i></a>
                <a href="<?php echo esc_url( get_theme_mod( 'clinicatb_social_whatsapp_footer', '#' ) ); ?>" target="_blank"><i class="bx bxl-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4><?php esc_html_e( 'Menu', 'clinicathaysebrito' ); ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#header"><?php esc_html_e( 'Home', 'clinicathaysebrito' ); ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#sobre"><?php esc_html_e( 'A Clínica', 'clinicathaysebrito' ); ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#tratamentos"><?php esc_html_e( 'Tratamentos', 'clinicathaysebrito' ); ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#profissionais"><?php esc_html_e( 'Profissionais', 'clinicathaysebrito' ); ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#contato"><?php esc_html_e( 'Contato', 'clinicathaysebrito' ); ?></a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4><?php esc_html_e( 'Novidades e Promoções?', 'clinicathaysebrito' ); ?></h4>
            <p><?php esc_html_e( 'Quer ficar sabendo de novidades e promoções da Clínica?<br>Deixa seu WhatsApp.', 'clinicathaysebrito' ); ?></p>
            <form action="#" method="post" role="form" class="php-email-form">
                <div class="form-group">
                    <input type="text" class="form-control" style="border: none" name="phone" id="phone3" placeholder="<?php esc_attr_e('Seu WhatsApp', 'clinicathaysebrito'); ?>" />
                    <input type="submit" value="<?php esc_attr_e( 'Enviar', 'clinicathaysebrito' ); ?>">
                </div>
            </form>

          </div>

        </div>
      </div>
    </div>

  </footer><div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php wp_footer(); ?>

</body>

</html>