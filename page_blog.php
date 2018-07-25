<?php
    /*Template Name: BLog Template */
    get_header();
    if ( have_posts() ) : the_post();
    echo '<section class="section_middle_center w_100 ">';
    echo '<section class="section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="center" data-image-src="'; the_post_thumbnail_url(); echo '">';
    echo '<section class="blog_habitos section_middle_center">'
        the_title('<h2>', '</h2>');
        the_content();
    echo '</section>';

    echo '<section class="blog_habitos section_middle_center w_100">';
    the_content();
    echo '</section>';
endif;
    get_footer();
?>