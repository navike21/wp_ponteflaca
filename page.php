<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section class="section_top_center w_100" style="margin-top: 24vh;">
  <!-- <h1><?php //the_title(); ?></h1> -->
  <section class="w_80 contendFrmSuscribe">
    <?php the_content(); ?>
  </section>
</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>