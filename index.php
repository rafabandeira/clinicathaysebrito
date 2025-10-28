<?php
/**
 * O template principal (usado como Front Page estática).
 *
 * @package ClinicaThayseBrito
 */

get_header();
?>

  <?php get_template_part( 'template-parts/section-hero' ); ?>
  <main id="main">

    <?php get_template_part( 'template-parts/section-featured' ); ?>
    <?php get_template_part( 'template-parts/section-cta' ); ?>
    <?php get_template_part( 'template-parts/section-about' ); ?>
    <?php get_template_part( 'template-parts/section-treatments' ); ?>
    <?php get_template_part( 'template-parts/section-appointment' ); ?>
    <?php get_template_part( 'template-parts/section-testimonials' ); ?>
    <?php get_template_part( 'template-parts/section-professionals' ); ?>
    <?php get_template_part( 'template-parts/section-contact' ); ?>
    </main><?php
get_footer();