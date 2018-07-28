<?php 
  get_header(); 
  echo '<section class="slider_home full_min_h w_100">';
    $loop = new WP_Query( array( 'post_type' => 'slider' ) );
        while ( $loop->have_posts() ) : $loop->the_post();
            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );
            $urlImage = $src[0];
            if ( has_post_thumbnail() ){  
                echo '<div class="img_fondo item" data-image="'.$urlImage.'">';
                  echo '<div class="section_middle_center w_100 full_min_h">';
                    if ( is_active_sidebar( 'slider_title' ) ) {
                        dynamic_sidebar( 'slider_title' );
                    }
                  echo '</div>';
                echo '</div>';
            }     
        endwhile;
  echo '</section>';
  
  // echo '<section class="section_middle_center w_100 team">';
  //       echo '<a href="team.php" data-minwidth="250">';
         
  //       echo '</a>';
  // echo '</section>';

  echo '<section class="fondo_blanco section_top_center w_100">';
        if ( is_active_sidebar( 'servicios_title' ) ) {
                dynamic_sidebar( 'servicios_title' );
        echo '<div class="servicios section_top_justify">';
          
          global $post;
      
              $loop_servicios = new WP_Query( array( 'post_type' => 'servicios') );
              while ( $loop_servicios->have_posts() ) : $loop_servicios->the_post();
                  $src_servicios            = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );
                  // $urlImage_servicios      = $src_servicios[0];
                  // echo $urlServicios     = get_post_meta( $post->ID, '_keywords', true );
                  echo '<article>';
                echo '<div class="img_fondo" data-image="'.$src_servicios[0].'">&nbsp;';
                echo '</div>';
                  the_title( '<h3>', '</h3>' );
                  the_content();
                  echo '</article>';
              endwhile;
        echo '</div>';
            }
        
  echo '</section>';
  
  echo '<section class="brindamos section_middle_center">';
    echo '<article>';
      if ( is_active_sidebar( 'brindamos_title' ) ) {
                dynamic_sidebar( 'brindamos_title' );
            }            
    echo '</article>';
  echo '</section>';
  
  echo '<section class="blog section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="bottom" data-image-src="'.get_bloginfo('template_url').'/assets/images/background_blog.jpg">';
    if ( is_active_sidebar( 'blog_title' ) ) {
                    dynamic_sidebar( 'blog_title' );
         
        $the_query = new WP_Query( 'posts_per_page=5' );
        echo '<section class="section_top_justify">';
        while ($the_query -> have_posts()) : $the_query -> the_post();
          $src_blog            = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );
          $urlImage_blog      = $src[0];
          $urlblog     = get_post_meta( $post->ID, '_keywords', true );
            echo '<a href="'; the_permalink(); echo '">';
              echo '<div class="img_fondo" data-image="'.$src_blog[0].'">&nbsp;'; echo '</div>';
              the_title( '<h4 class="w_70 section_middle_center">', '</h4>' );
                echo '<div class="contenido w_90">';
                the_excerpt();
                echo '</div>';
              echo '</div>';
            // the_title();
            echo '</a>';
        endwhile;
        wp_reset_postdata();
      // $loop_blog = new WP_Query( array( 'post_type' => 'Entradas') );
      // while ( $loop_blog->have_posts() ) : $loop_blog->the_post();
      //   $src_blog            = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );
      //   $urlImage_blog      = $src[0];
      //   $urlblog     = get_post_meta( $post->ID, '_keywords', true );
      //   echo '<section class="section_top_justify">';
      //     echo '<a href="'.$urlblog.'">';
      //       echo '<div class="img_fondo" data-image="'.$src_blog[0].'">&nbsp;'; echo '</div>';
      //       the_title( '<h4 class="w_70 section_middle_center">', '</h4>' );
      //       echo '<div class="contenido w_90">';
      //         the_content();
      //       echo '</div>';
      //     echo '</a>';
      //   echo '</section>';
      // endwhile;

    echo '</section>';
    } 
  echo '</section>';            
            
  get_footer();
?>
