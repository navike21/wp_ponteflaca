<?php 
  get_header(); 
  echo '<section class="slider_home full_min_h w_100">';
    $loop = new WP_Query( array( 'post_type' => 'slider' ) );
        while ( $loop->have_posts() ) : $loop->the_post();
            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' );
            $urlImage = $src[0];
            if ( has_post_thumbnail() ){  
                echo '<div class="img_fondo full_min_h" data-image="'.$urlImage.'">';
                  echo '<div class="section_middle_center w_100 full_min_h">';
                    the_title('<h3>', '</h3>');
                  echo '</div>';
                echo '</div>';
            }     
        endwhile;
  echo '</section>';

  echo '<section class="section_middle_center w_100 team">';
        echo '<a href="" data-minwidth="250">';
          echo '<img src="'.get_template_directory_uri().'/assets/images/team2.png" alt="" class="hide_movile" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
          echo '<img src="'.get_template_directory_uri().'/assets/images/team3.png" alt="" class="hide_escritorio" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
        echo '</a>';
  echo '</section>';      


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
                  echo '<article data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
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
    // echo '<article class="section_middle_center" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
      if ( is_active_sidebar( 'brindamos_title' ) ) {
                dynamic_sidebar( 'brindamos_title' );
            }            
    // echo '</article>';
  echo '</section>';
  
  echo '<section class="blog section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="bottom" data-image-src="'.get_bloginfo('template_url').'/assets/images/sliderfondoBlog.jpg">';
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
              the_title( '<h4 class="w_70 section_middle_center" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">', '</h4>' );
              echo '<div class="contenido w_90" data-aos-delay="800" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
                the_excerpt();
              echo '</div>';
              // echo '<div class="fecha" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000"';
              // echo '</div>';
            echo '</a>';
        endwhile;
        wp_reset_postdata();        
    echo '</section>';
    } 
  echo '</section>';            
            
  get_footer();
?>
