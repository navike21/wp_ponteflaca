    <footer class="section_top_center w_100">
    <a href="https://api.whatsapp.com/send?phone=+51949371522&text=Hola, quisiera ponerme en contacto con ustedes" target="_blank" class="whatsapp" data-minwidth="40"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/whatsapp.svg" alt=""></a>
    <section class="instagram section_top_center w_100">
    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/instagram.svg" alt="Instagram" class="logo_instagram" data-minwidth="80">
    <h3 class="w_100 align_center">Síguenos en Instagram</h3>
    <div id="instagram" class="w_100 section_top_center">
        <div id="instafeed" class="section_top_justify"></div>
    </div>
    </section>
        <section class="w_100 formulario section_top_center">
            <section class="section_middle_justify">
                <h2 class="w_100 align_center data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000"">¿Tienes alguna consulta?</h2>
                <article data-aos-delay="700" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    <!-- <div class="info_footer"> -->
                    <?php
                        if ( is_active_sidebar( 'info_footer' ) ) {
                            dynamic_sidebar( 'info_footer' );
                        }
                    ?>
                    
                    <!-- </div> -->
                    <h4>Síguenos también en:</h4>
                    <aside class="section_middle_left follow_to">
                        <a href="https://www.instagram.com/Ponteflaca.oficial/" target="_blank">
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
                        <a href="https://www.facebook.com/ponteflacaoficial/" target="_blank">
                            <!-- facebook -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 17.8 32.2" xml:space="preserve">
                                <path class="rss_footer" d="M11.3,31.5v-14H16l0.7-5.5h-5.4V8.5c0-1.6,0.4-2.7,2.7-2.7l2.9,0V1c-0.5-0.1-2.2-0.2-4.2-0.2
                                c-4.2,0-7,2.5-7,7.2v4H0.9v5.5h4.7v14H11.3L11.3,31.5z"/>
                            </svg>
                        </a>
                    </aside>
                </article>
                <form class="section_top_center formulario form" id="formulario" data-nombre="formulario" data-destino="http://ponteflaca.pe/dataform/contact.php" action="index.html" method="post">
                    <label class="w_95">Nombre</label>
                    <input type="text" name="nombre" class="w_100 required">
                    <label class="w_95">Correo</label>
                    <input type="text" name="correo" class="w_100 required">
                    <label class="w_95">Asunto</label>
                    <input type="text" name="asunto" class="w_100 required">
                    <label class="w_95">Mensaje</label>
                    <textarea name="mensaje" rows="8" class="w_100 required"></textarea>
                    <div class="section_top_center w_100">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
                <input id="success_frm" type="hidden">
                <div class="loading section_middle_center"></div>
            </section>
        </section>
        <div class="w_100 section_top_center logo_footer" data-aos-delay="500" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
            <div class="w_100 align_center suscribete_footer">
                <!-- <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/suscribete.svg" alt=""> -->
                <a href="">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 150.7 41.5"  xml:space="preserve">
                            <g>
                            	<path class="rss_header" d="M149.1,27.5c0,9.1-4.2,13.3-13.3,13.3H15c-9.1,0-13.3-4.2-13.3-13.3V14.1C1.7,5,5.9,0.8,15,0.8h120.8
                            		c9.1,0,13.3,4.2,13.3,13.3V27.5z"/>
                            	<g>
                            		<g>
                            			<g>
                            				<path class="color_blanco" d="M17.1,26.6c-0.2-0.3-0.3-0.5-0.3-0.7c0-0.4,0.3-0.8,0.7-0.8c0.3,0,0.5,0.1,0.8,0.5c0.2,0.2,0.4,0.6,0.6,0.8
                            					c0.5,0.5,1.3,0.9,2.3,0.9c1.4,0,2.8-0.8,2.8-2.3c0-1-0.8-1.7-2.6-2.4l-0.9-0.3c-2.5-0.8-3.4-2.2-3.4-3.8c0-2,1.8-3.6,4.3-3.6
                            					c1.2,0,2.2,0.4,2.8,0.9c0.7,0.6,1.1,1.2,1.1,1.6c0,0.5-0.4,0.8-0.7,0.8c-0.4,0-0.5-0.1-0.9-0.6c-0.5-0.7-1.3-1.1-2.4-1.1
                            					c-1.4,0-2.6,0.8-2.6,2.1c0,1.1,0.8,1.7,2.8,2.4l0.9,0.3c2.4,0.9,3.3,2.1,3.3,3.8c0,2.4-2.3,3.7-4.4,3.7
                            					C19.4,28.7,17.9,27.9,17.1,26.6z"/>
                            				<path class="color_blanco" d="M29.5,25c0,0.7,0.1,1.1,0.2,1.4c0.3,0.6,0.9,1,1.7,1c0.7,0,1.5-0.3,2-0.8c0.3-0.3,0.6-0.7,0.6-1.7v-5.4
                            					c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7v8.5c0,0.4-0.4,0.8-0.8,0.8c-0.4,0-0.8-0.4-0.8-0.8v-0.5c-0.8,0.9-1.9,1.4-2.9,1.4
                            					c-2.1,0-3.3-1.4-3.3-3.6v-5.7c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7V25z"/>
                            				<path class="color_blanco" d="M43.6,21.2c-0.3,0-0.5-0.2-0.7-0.3l-0.3-0.3c-0.5-0.4-1-0.6-1.6-0.6c-1.2,0-1.7,0.6-1.7,1.3
                            					c0,0.5,0.3,1,1.7,1.5l0.4,0.1c2.5,0.8,3.1,1.8,3.1,3c0,1.8-1.7,2.8-3.3,2.8c-0.9,0-1.7-0.2-2.4-0.7c-0.6-0.4-1.1-0.9-1.1-1.4
                            					c0-0.5,0.3-0.8,0.7-0.8c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.5,0.6,0.9,0.9c0.3,0.2,0.7,0.4,1.4,0.4c0.8,0,1.7-0.5,1.7-1.4
                            					c0-0.6-0.4-1.1-2.2-1.7l-0.3-0.1c-2-0.7-2.6-1.6-2.6-2.8c0-1.7,1.5-2.7,3.4-2.7c0.7,0,1.5,0.2,2,0.6c0.5,0.3,1.1,0.8,1.1,1.4
                            					C44.2,21,43.9,21.2,43.6,21.2z"/>
                            				<path class="color_blanco" d="M53.2,19.4c0.7,0.5,1,1.1,1,1.5c0,0.3-0.2,0.7-0.7,0.7s-0.6-0.3-1-0.7c-0.5-0.6-1.1-0.9-1.8-0.9
                            					c-1.7,0-2.9,1.7-2.9,3.7c0,2,1.3,3.7,2.8,3.7c0.8,0,1.5-0.2,2.1-1.1c0.2-0.3,0.4-0.4,0.7-0.4c0.5,0,0.7,0.4,0.7,0.7
                            					c0,0.4-0.4,0.9-1.1,1.4c-0.6,0.4-1.5,0.8-2.4,0.8c-2.5,0-4.5-2.1-4.5-5.1c0-2.8,1.9-5.1,4.5-5.1C51.9,18.6,52.7,19,53.2,19.4z"
                            					/>
                            				<path class="color_blanco" d="M60.9,20.2c-0.1,0-0.3,0-0.4-0.1s-0.3-0.1-0.5-0.1c-0.4,0-0.9,0.2-1.3,0.5c-0.3,0.3-0.6,0.6-0.7,0.9
                            					c-0.1,0.3-0.2,0.7-0.2,1.1v5.3c0,0.4-0.4,0.7-0.8,0.7c-0.4,0-0.8-0.3-0.8-0.7v-8.5c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7
                            					V20c0.7-0.9,1.6-1.4,2.4-1.4c0.8,0,1.3,0.4,1.3,0.9C61.6,20,61.2,20.2,60.9,20.2z"/>
                            				<path class="color_blanco" d="M64.3,14.7c0.2-0.1,0.4-0.2,0.6-0.2c0.4,0,0.7,0.3,0.7,0.7c0,0.2-0.1,0.4-0.3,0.6l-1.9,1.6
                            					c-0.2,0.1-0.4,0.2-0.6,0.2c-0.4,0-0.7-0.4-0.7-0.7c0-0.2,0.1-0.4,0.3-0.6L64.3,14.7z M64.6,27.9c0,0.4-0.4,0.7-0.8,0.7
                            					c-0.4,0-0.8-0.3-0.8-0.7v-8.5c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7V27.9z"/>
                            				<path class="color_blanco" d="M71.6,28.7c-1.1,0-2.1-0.5-2.8-1.3v0.5c0,0.4-0.4,0.7-0.8,0.7c-0.4,0-0.8-0.3-0.8-0.7V15.3
                            					c0-0.4,0.4-0.7,0.8-0.7c0.4,0,0.8,0.3,0.8,0.7v4.6c0.7-0.8,1.7-1.3,2.8-1.3c2.6,0,4.1,2.4,4.1,5.1
                            					C75.7,26.3,74.1,28.7,71.6,28.7z M74.1,23.7c0-2-1-3.7-2.7-3.7c-0.8,0-1.7,0.4-2.2,1.1c-0.3,0.4-0.4,0.8-0.4,1.9v1.7
                            					c0,0.9,0.2,1.3,0.4,1.6c0.5,0.6,1.5,1.1,2.2,1.1C73.1,27.4,74.1,25.7,74.1,23.7z"/>
                            				<path class="color_blanco" d="M79.1,24c0,1.7,1.1,3.4,3,3.4c0.9,0,1.7-0.5,2.2-0.9c0.4-0.4,0.5-0.5,0.9-0.5c0.4,0,0.6,0.3,0.6,0.7
                            					c0,0.5-0.3,0.8-0.8,1.2c-0.6,0.4-1.6,0.9-2.9,0.9c-2.7,0-4.6-2.2-4.6-5c0-2.9,1.9-5.1,4.5-5.1c2.5,0,4.1,2,4.1,4.2
                            					c0,0.8-0.4,1.1-1.2,1.1H79.1z M79.1,22.7h5.2c0.1,0,0.2-0.1,0.2-0.2c0-1.1-0.8-2.5-2.5-2.5C80.4,20,79.4,21.4,79.1,22.7z"/>
                            				<path class="color_blanco" d="M88.6,20.1h-0.9c-0.4,0-0.6-0.3-0.6-0.7c0-0.4,0.3-0.7,0.6-0.7h0.9v-2c0-0.4,0.4-0.7,0.8-0.7
                            					c0.4,0,0.8,0.3,0.8,0.7v2h2c0.4,0,0.6,0.3,0.6,0.7c0,0.4-0.3,0.7-0.6,0.7h-2V26c0,0.9,0.4,1.2,1,1.2c0.5,0,0.8-0.2,1.2-0.2
                            					c0.4,0,0.6,0.3,0.6,0.6c0,0.3-0.2,0.6-0.7,0.8c-0.3,0.1-0.7,0.2-1.2,0.2c-0.9,0-1.7-0.4-2.1-1c-0.2-0.4-0.4-0.9-0.4-2V20.1z"/>
                            				<path class="color_blanco" d="M95.4,24c0,1.7,1.1,3.4,3,3.4c0.9,0,1.7-0.5,2.2-0.9c0.4-0.4,0.5-0.5,0.9-0.5c0.4,0,0.6,0.3,0.6,0.7
                            					c0,0.5-0.3,0.8-0.8,1.2c-0.6,0.4-1.6,0.9-2.9,0.9c-2.7,0-4.6-2.2-4.6-5c0-2.9,1.9-5.1,4.5-5.1c2.5,0,4.1,2,4.1,4.2
                            					c0,0.8-0.4,1.1-1.2,1.1H95.4z M95.5,22.7h5.2c0.1,0,0.2-0.1,0.2-0.2c0-1.1-0.8-2.5-2.5-2.5C96.7,20,95.7,21.4,95.5,22.7z"/>
                            			</g>
                            		</g>
                            		<g>
                            			<path class="color_blanco" d="M134.4,18.9L123,7.5c-0.3-0.3-0.8-0.3-1.1,0l-11.4,11.4c-0.1,0.1-0.2,0.3-0.2,0.5v14.1
                            				c0,0.4,0.3,0.8,0.8,0.8h22.8c0.4,0,0.8-0.3,0.8-0.8V19.4C134.6,19.2,134.6,19,134.4,18.9L134.4,18.9z M111.9,21.4l6.1,6.1
                            				l-6.1,4.5V21.4z M119.4,28.3h6.2l6,4.4h-18.1L119.4,28.3z M127,27.4l6.1-6.1V32L127,27.4z M122.5,9.1l10.3,10.3l-7.3,7.3h-6.1
                            				l-7.3-7.3L122.5,9.1z M122.5,9.1"/>
                            			<g>
                            				<g>
                            					<path class="color_blanco" d="M122.5,22.9l-3.8-3.8c0,0-1.8-2.1,0-3.7c1.8-1.5,3.4,0.3,3.8,0.6c0.4-0.3,2-2.1,3.8-0.6
                            						c1.8,1.5,0.1,3.7,0.1,3.7L122.5,22.9z"/>
                            				</g>
                            			</g>
                            		</g>
                            	</g>
                            </g>
                        </svg>
                    </a>
            </div>
            <a class="w_100 section_top_center up ancla" href="#topHome">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 129 129" style="enable-background:new 0 0 129 129;" xml:space="preserve">
                <style type="text/css">
                    .starrow{fill:#91C100;}
                </style>
                <g>
                    <g>
                        <path class="starrow" d="M122.6,64.5c0-32-26-58.1-58.1-58.1S6.4,32.5,6.4,64.5s26.1,58.1,58.1,58.1S122.6,96.5,122.6,64.5z
                            M14.6,64.5C14.6,37,37,14.6,64.5,14.6s49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5z"/>
                        <path class="starrow" d="M93.5,77.9c0.8-0.8,1.2-1.8,1.2-2.9c0-1-0.4-2.1-1.2-2.9L67.1,45.7c-0.8-0.8-1.8-1.2-2.9-1.2
                            s-2.1,0.4-2.9,1.2L34.9,72.1c-1.6,1.6-1.6,4.2,0,5.8s4.2,1.6,5.8,0l23.5-23.5l23.5,23.5C89.3,79.5,91.9,79.5,93.5,77.9z"/>
                    </g>
                </g>
                </svg>
            </a>
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
