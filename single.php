<!-- Archivo de cabecera gobal de Wordpress -->
<?php 
  get_header(); 

  echo '<section class="habitos section_middle_center w_100 ">';
  if ( have_posts() ) : the_post(); 
      the_title('<h2>','</h2>');
      echo '<section class="section_top_center portadas_blog parallax-container" data-speed=".5" data-parallax="scroll" data-position="center" data-image-src="'; the_post_thumbnail_url();echo '">'; echo '</section>';
      echo '<article class="section_top_justify">';
        the_content();
        echo '<section class="comentarios w_100">';
        // echo '<a href="'; the_permalink(); echo'">Enviar >>'; echo '</a>';
          comments_template();
        echo '</section>';
      echo '</aticle>';
    endif;    
  echo '</section>';

  get_footer(); 
?>