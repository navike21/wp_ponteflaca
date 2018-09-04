<?php
    /*Template Name: Equipo Template */
    get_header();
    if ( have_posts() ) : the_post();
        echo '<section class="conoce_ponteFlaca section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="bottom" data-image-src="'; the_post_thumbnail_url(); echo '">';   
            // echo '<div class="conoce_ponteFlaca section_middle_center">';
                    if ( is_active_sidebar( 'equipo_title' ) ) {
                    dynamic_sidebar( 'equipo_title' );
                }  
            // echo '</div>';
        echo '</section>';
        $loop = new WP_Query( 
            array( 
                'post_type'         => 'equipo', 
                'posts_per_page'    => -1, 
            )
        ); 
        while ( $loop->have_posts() ) : $loop->the_post();

            global $post; 
            // echo $post->ID ;
            
                if (has_post_thumbnail( $post->ID ) ):
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                endif;

                // echo $image[0];

                echo '<section class="conoce_ponteFlaca section_top_center">';
                echo '<article class="section_top_center">';
                    echo '<div class="perfil_team section_middle_center">';
                        echo '<img src="'.$image[0].'">';
                    echo '</div>';
                    echo '<p>&nbsp;</p>';
                        the_title('<h3>', '</h3>');
                        the_content();
                    echo '</article>';
                echo '</section>';
            // }
        endwhile;
        
    endif;
        get_footer();
?>