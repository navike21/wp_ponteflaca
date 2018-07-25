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
  wp_enqueue_style('bastemp', "http://bastemp.com/css/bastemp.min.css", false, '1.1.2', 'all');
  wp_enqueue_style('slick', get_bloginfo('template_url')."/assets/plugins/slick/slick.css", false, '1', 'all');
  wp_enqueue_style('slick-theme', get_bloginfo('template_url')."/assets/plugins/slick/slick-theme.css", false, '1', 'all');
  wp_enqueue_style('style', get_bloginfo('template_url')."/assets/css/styles.min.css", false, '1.2.0', 'all');
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
	wp_register_script( 'bastemp', 'http://bastemp.com/js/bastemp.min.js', false, '1.1.2', false );
	wp_enqueue_script( 'bastemp' );

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
	wp_register_script( 'js', get_bloginfo('template_url').'/assets/js/ready.min.js', false, '1.0.3', false );
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


/**
 * SECTION INFO FOOTER
 **/
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
/**
 * SECTION CREDITS FOOTER
 **/
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

// Equipo
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

  // Blog
  // add_action( 'init', 'custom_page_blog' );
  // function custom_page_blog() {
  // 	$label_blog = array(
  // 	      'name'                  => _x( 'Blog', 'post type general name' ),
  //         'singular_name'         => _x( 'Blog', 'post type singular name' ),
  //         'add_new'               => _x( 'Add new Item', 'book' ),
  //         'add_new_item'          => __( 'Add new Item' ),
  //         'edit_item'             => __( 'Edit Item' ),
  //         'new_item'              => __( 'New Item' ),
  //         'view_item'             => __( 'See Item' ),
  //         'search_items'          => __( 'Search Item' ),
  //         'not_found'             => __( 'Item not found' ),
  //         'not_found_in_trash'    => __( 'Item not found in the trash' ),
  //         'parent_item_colon'     => ''
  //     );
  
  //     // Creamos un array para $args
  //     $args_blog = array( 'labels' => $label_blog,
  //         'public'                => true,
  //         'publicly_queryable'    => true,
  //         'show_ui'               => true,
  //         'query_var'             => true,
  //         'rewrite'               => true,
  //         'menu_icon'             => 'dashicons-format-status',
  //         'capability_type'       => 'post',
  //         'hierarchical'          => false,
  //         'menu_position'         => null,
  //         'supports'              => array( 'title','editor', 'thumbnail' )
  //     );
  
  //     register_post_type( 'blog', $args_blog ); /* Registramos y a funcionar */
  // }


?>

