    <footer>
    <section class="instagram section_top_center w_100">
    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="Instagram" class="logo_instagram" data-minwidth="80">
    <h3 class="w_100 align_center">Síguenos en Instagram</h3>
    <div id="instagram" class="w_100 section_top_center">
        <div id="instafeed" class="section_top_justify"></div>
    </div>
    </section>
        <section class="w_100 formulario section_top_center">
            <section class="section_middle_justify">
                <h2 class="w_100 align_center">¿Tienes alguna consulta?</h2>
                <article>
                    <div class="info_footer">
                    <?php
                        if ( is_active_sidebar( 'info_footer' ) ) {
                            dynamic_sidebar( 'info_footer' );
                        }
                    ?>
                    
                    </div>
                    <h4>Síguenos también en:</h4>
                    <aside class="section_middle_left">
                        <a href="#">
                            <!-- Instagram -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 33.1 32.2" xml:space="preserve">
                                <g>
                                    <path class="rss_footer" d="M22.7,31.5H10.4c-5.5,0-9.9-4.5-9.9-9.9V10.7c0-5.5,4.5-9.9,9.9-9.9h12.3c5.5,0,9.9,4.5,9.9,9.9v10.9
                                        C32.6,27,28.2,31.5,22.7,31.5z M10.4,3c-4.3,0-7.7,3.5-7.7,7.7v10.9c0,4.3,3.5,7.7,7.7,7.7h12.3c4.3,0,7.7-3.5,7.7-7.7V10.7
                                        C30.4,6.4,27,3,22.7,3H10.4z"/>
                                </g>
                                <g>
                                    <path class="rss_footer" d="M16.5,24.9c-4.9,0-8.8-4-8.8-8.8c0-4.9,4-8.8,8.8-8.8c4.9,0,8.8,4,8.8,8.8C25.4,21,21.4,24.9,16.5,24.9z
                                        M16.5,9.5c-3.7,0-6.6,3-6.6,6.6c0,3.7,3,6.6,6.6,6.6c3.7,0,6.6-3,6.6-6.6C23.2,12.4,20.2,9.5,16.5,9.5z"/>
                                </g>
                                <g>
                                    <path class="rss_footer" d="M27.1,7.5c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8C26.2,5.7,27.1,6.5,27.1,7.5z"/>
                                </g>
                            </svg>
                        </a>
                        <a href="#">
                            <!-- facebook -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 17.8 32.2" xml:space="preserve">
                                <path class="rss_footer" d="M11.3,31.5v-14H16l0.7-5.5h-5.4V8.5c0-1.6,0.4-2.7,2.7-2.7l2.9,0V1c-0.5-0.1-2.2-0.2-4.2-0.2
                                c-4.2,0-7,2.5-7,7.2v4H0.9v5.5h4.7v14H11.3L11.3,31.5z"/>
                            </svg>
                        </a>
                    </aside>
                </article>
                <form class="section_top_center" action="index.html" method="post">
                    <label class="w_95">Nombre</label>
                    <input type="text" name="" class="w_100">
                    <label class="w_95">Correo</label>
                    <input type="text" name="" class="w_100">
                    <label class="w_95">Asunto</label>
                    <input type="text" name="" class="w_100">
                    <label class="w_95">Mensaje</label>
                    <textarea name="name" rows="8" class="w_100"></textarea>
                    <div class="section_top_center w_100">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </section>
        </section>
        <div class="w_100 section_top_center logo_footer">
            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
            <div class="w_100 align_center suscribete_footer">
                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/suscribete.svg" alt="">
            </div>
        </div>
        <div class="derechos section_middle_justify w_100">
            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/lengua.svg" alt="">     
            <div class="credits">
                <?php
                    if ( is_active_sidebar( 'credits' ) ) {
                        dynamic_sidebar( 'credits' );
                    }
                ?>
            </div>
        </div>
    </footer>
<!-- No Tocar --> 
    <?php wp_footer(); ?>
  </body>
</html>
