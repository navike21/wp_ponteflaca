<?php
  get_header();
  
    echo '<section class="section_middle_center w_100">';
        echo '<section class="section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="center">';
            if ( is_active_sidebar( 'portada_blog' ) ) {
                    dynamic_sidebar( 'portada_blog' );
                    }
            echo '<div class="section_middle_center full_min_h title_blog">';
                
            echo '</div>';
        echo '</section>';
        echo '<section class="blog_habitos section_middle_center">';
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                    
                    the_title('<h2 data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">', '</h2>');
                    echo '<img src="'.$thumb_url.'" width="90%" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
                    echo '<div  class="section_top_center" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
                        the_excerpt();
                    echo '</div>';
                    echo '<div class="section_bottom_center w_100" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">';
                    echo '<a href="'; the_permalink(); echo '">Seguir Leyendo >>';
                    echo '</a>';
                    echo '</div>';
                endwhile;
            else :
                _e('Ups!, no hay entradas.');
            endif;
        echo '</section>';
    echo '</section>';
  
  get_footer();
?>