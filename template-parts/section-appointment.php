<section id="consulta" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php esc_html_e( 'Agende uma consulta', 'clinicathaysebrito' ); ?></h2>
          <p><?php echo esc_html( get_theme_mod( 'clinicatb_appointment_intro_text', 'Nos envie uma mensagens que entraremos em contato para confirmar o seu agendamento.' ) ); // Adicionar no customizer.php
            ?></p>
        </div>

        <?php
        // Substituir o formulário HTML estático por um shortcode de plugin (ex: Contact Form 7)
        // O plugin cuidará do envio de email (forms/appointment.php não é usado)
        
        // Exemplo:
        // echo do_shortcode( '[contact-form-7 id="XYZ" title="Formulário de Agendamento"]' );
        
        // Manterei o formulário estático por enquanto, mas ele NÃO FUNCIONARÁ sem um plugin ou AJAX handler.
        ?>
        <form action="#" method="post" role="form" class="php-email-form-shortcode" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align:center; font-style:italic;">
                <?php esc_html_e( 'Integre seu shortcode de formulário de contato aqui (ex: Contact Form 7).', 'clinicathaysebrito' ); ?>
            </p>
            </form>

      </div>
    </section>