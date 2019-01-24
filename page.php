<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<section class="conoce_ponteFlaca section_top_center w_100" style="margin-top: 20vh;">
  <h1><?php the_title(); ?></h1>
  <div class="w_80">
    <?php the_content(); ?>
  </div>
</section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php //get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>