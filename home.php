<?php
  get_header();
  
    echo '<section class="section_middle_center w_100">';
        echo '<section class="section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="center" data-image-src="'; the_post_thumbnail_url(); echo '">';
            echo '<div class="section_middle_center full_min_h title_blog">';
                if ( is_active_sidebar( 'blog_title' ) ) {
                dynamic_sidebar( 'blog_title' );
                }
            echo '</div>';
        echo '</section>';
        echo '<section class="blog_habitos section_middle_center">';
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                    
                    the_title('<h2>', '</h2>');
                    echo '<img src="'.$thumb_url.'" width="90%">';
                    the_excerpt();
                    echo '<div class="section_bottom_center w_100">';
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