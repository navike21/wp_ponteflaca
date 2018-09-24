<?php

/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */
add_theme_support( 'post-thumbnails' );

function menu_header() {
    register_nav_menus(
        array(
            'navegation' => __( 'Home Menu' ),
        )
    );
}
add_action( 'init', 'menu_header' );

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
  register_sidebar(
    array(
    	'name'          => __( 'Sidebar' ),
    	'id'            => 'sidebar',
    	'before_widget' => '<div class="widget">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
}
add_action('init','mis_widgets');

/**
 * Filtrar resultados de búsqueda para que solo muestre
 * posts en el listado
 */
function buscar_solo_posts($query) {
  if($query->is_search) {
      $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');

/**
* Filter the excerpt length to 30 words.
*
* @param int $length Excerpt length.
* @return int (Maybe) modified excerpt length.
*/
function wpdocs_custom_excerpt_length( $length ) {
return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Cargar Hojas de estilos
function custom_css(){
  wp_enqueue_style('bastemp', get_bloginfo('template_url')."/assets/css/bastemp.min.css", false, '1.1.2', 'all');
  wp_enqueue_style('aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", false, '1', 'all');
  wp_enqueue_style('slick', get_bloginfo('template_url')."/assets/plugins/slick/slick.css", false, '1', 'all');
  wp_enqueue_style('slick-theme', get_bloginfo('template_url')."/assets/plugins/slick/slick-theme.css", false, '1', 'all');
  wp_enqueue_style('style', get_bloginfo('template_url')."/assets/css/styles.min.css", false, '1.4.6', 'all');
}
add_action('wp_print_styles', 'custom_css');

//Cargador de Javascript
function custom_scripts() {
  // Registramos JQUERY
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, '3.2.1', false );
	wp_enqueue_script( 'jquery' );

  // Registramos Bastemp
	wp_deregister_script( 'bastemp' );
	wp_register_script( 'bastemp', get_bloginfo('template_url').'/assets/js/bastemp.min.js', false, '1.1.2', false );
	wp_enqueue_script( 'bastemp' );

  // Registramos Aos
	wp_deregister_script( 'aos' );
	wp_register_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, '1', false );
	wp_enqueue_script( 'aos' );
  // Registramos slick
	wp_deregister_script( 'slick' );
	wp_register_script( 'slick', get_bloginfo('template_url').'/assets/plugins/slick/slick.min.js', false, '1', false );
	wp_enqueue_script( 'slick' );

  // Registramos Parallax
    wp_deregister_script( 'parallax' );
    wp_register_script( 'parallax', get_bloginfo('template_url').'/assets/plugins/parallax/parallax.min.js', false, '1', false );
    wp_enqueue_script( 'parallax' );

  // Registramos instafeed
    wp_deregister_script( 'instafeed' );
    wp_register_script( 'instafeed', get_bloginfo('template_url').'/assets/plugins/instafeed/instafeed.min.js', false, '1', false );
    wp_enqueue_script( 'instafeed' );
  // Registramos js
	wp_deregister_script( 'js' );
	wp_register_script( 'js', get_bloginfo('template_url').'/assets/js/ready.min.js', false, '1.0.5', false );
	wp_enqueue_script( 'js' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

//logo
function custom_logo() {

    add_theme_support( 'custom-logo', array(
        'height'      => 110,
        'width'       => 413,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_logo' );


//SECTION INFO FOOTER
function info_footer() {
	register_sidebar( array(
		'name'          => 'Footer Information',
		'id'            => 'info_footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'info_footer' );

//SECTION CREDITS FOOTER
function credits() {
	register_sidebar( array(
		'name'          => 'Credits Footer',
		'id'            => 'credits',
		'before_widget' => '<div class="align_center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'credits' );


//Titulo de servicios
function servicios_title() {
	register_sidebar( array(
		'name'          => 'Title servicios',
		'id'            => 'servicios_title',
		'before_widget' => '<section class="fondo_blanco section_top_center w_100">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="w_80 align_center" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'servicios_title' );

//Te brindamos
function brindamos_title() {
	register_sidebar( array(
		'name'          => 'Brindamos',
    'id'            => 'brindamos_title',
    'description'   => 'Lista que ofrecemos al público',
		'before_widget' => '<article class="section_middle_center" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">',
    'after_widget'  => '</article>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'brindamos_title' );

//Titulo de blog
function blog_title() {
	register_sidebar( array(
		'name'          => 'Title blog',
		'id'            => 'blog_title',
		'before_widget' => '<section class="blog section_top_center w_100">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="w_80 align_center" data-aos-delay="300" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="ease-out-cubic" data-aos-duration="1000">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'blog_title' );

//Equipo
add_action( 'init', 'custom_page_equipo' );
function custom_page_equipo() {
	$label_equipo = array(
	      'name'                  => _x( 'Equipo', 'post type general name' ),
        'singular_name'         => _x( 'Equipo', 'post type singular name' ),
        'add_new'               => _x( 'Add new Item', 'book' ),
        'add_new_item'          => __( 'Add new Item' ),
        'edit_item'             => __( 'Edit Item' ),
        'new_item'              => __( 'New Item' ),
        'view_item'             => __( 'See Item' ),
        'search_items'          => __( 'Search Item' ),
        'not_found'             => __( 'Item not found' ),
        'not_found_in_trash'    => __( 'Item not found in the trash' ),
        'parent_item_colon'     => ''
    );
 
    // Creamos un array para $args
    $args_equipo = array( 'labels' => $label_equipo,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
        'rewrite'               => true,
        'menu_icon'             => 'dashicons-groups',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => null,
        'supports'              => array( 'title','editor', 'thumbnail' )
    );
 
    register_post_type( 'equipo', $args_equipo ); /* Registramos y a funcionar */
}
// SLIDER home
add_action( 'init', 'custom_page_slider' );
function custom_page_slider() {
	$label_slider = array(
	    'name'                  => _x( 'Slider home', 'post type general name' ),
        'singular_name'         => _x( 'Slider', 'post type singular name' ),
        'add_new'               => _x( 'Add new Slider', 'book' ),
        'add_new_item'          => __( 'Add new Slider' ),
        'edit_item'             => __( 'Edit Slider' ),
        'new_item'              => __( 'New Slider' ),
        'view_item'             => __( 'See Slider' ),
        'search_items'          => __( 'Search Slider' ),
        'not_found'             => __( 'Slider not found' ),
        'not_found_in_trash'    => __( 'Slider not found in the trash' ),
        'parent_item_colon'     => ''
    );
 
    // Creamos un array para $args
    $args_slider = array( 'labels' => $label_slider,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
        'rewrite'               => true,
        'menu_icon'             => 'dashicons-images-alt2',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => null,
        'supports'              => array( 'title', 'thumbnail' )
    );
 
    register_post_type( 'slider', $args_slider ); /* Registramos y a funcionar */
}
// Servicios
add_action( 'init', 'custom_page_servicios' );
function custom_page_servicios() {
	$label_servicios = array(
	      'name'                  => _x( 'Servicios', 'post type general name' ),
        'singular_name'         => _x( 'Servicios', 'post type singular name' ),
        'add_new'               => _x( 'Add new Item', 'book' ),
        'add_new_item'          => __( 'Add new Item' ),
        'edit_item'             => __( 'Edit Item' ),
        'new_item'              => __( 'New Item' ),
        'view_item'             => __( 'See Item' ),
        'search_items'          => __( 'Search Item' ),
        'not_found'             => __( 'Item not found' ),
        'not_found_in_trash'    => __( 'Item not found in the trash' ),
        'parent_item_colon'     => ''
    );
 
    // Creamos un array para $args
    $args_servicios = array( 'labels' => $label_servicios,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
        'rewrite'               => true,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => null,
        'supports'              => array( 'title','editor', 'thumbnail' )
    );
 
    register_post_type( 'servicios', $args_servicios ); /* Registramos y a funcionar */
}

//Titulo equipo
function equipo_title() {
	register_sidebar( array(
		'name'          => 'Titulo equipo',
		'id'            => 'equipo_title',
		'before_widget' => '<div class="conoce_ponteFlaca section_middle_center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'equipo_title' );

//portada_blog
function portada_blog() {
	register_sidebar( array(
		'name'          => 'Portada Blog',
		'id'            => 'portada_blog',
		'before_widget' => '<section class="section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="center" data-image-src="images/images_wp/sliderBLOG.jpg">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portada_blog' );

//titulo_de_blog
function titulo_de_blog() {
	register_sidebar( array(
		'name'          => 'Titulo de Blog',
		'id'            => 'titulo_de_blog',
		'before_widget' => '<section class="section_top_center w_100 parallax-container full_min_h" data-speed=".5" data-parallax="scroll" data-position="center" data-image-src="images/images_wp/sliderBLOG.jpg">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'titulo_de_blog' );


?>