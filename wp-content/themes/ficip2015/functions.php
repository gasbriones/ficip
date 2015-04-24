<?php
/* MENUS */
add_action( 'init', 'registrar_menu' );
function registrar_menu() {
register_nav_menu('superior-right', __('Menu Superior Right'));
}
register_sidebar(array(
    'name'         => __( 'Right home Sidebar' ),
    'id'           => 'sidebar-1',
    'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),
    'before_title' => '',
    'after_title'  => ''
));
/* FOTOS*/// Imagenes Destacadas
if (function_exists('add_theme_support')) {
   add_theme_support('post-thumbnails');//Agrega soporte
   add_image_size('destacada-thumbnail', 660, 396, true); // destacada list thumbnails.
   add_image_size('noticias-thumbnail', 312, 195, true); // noticias secundarias list thumbnails.
   add_image_size('page-thumbnail', 990, 442, true); // page y noticia adentro thumbnail
}
function get_terms_dropdown( $taxonomy, $args = array() ){
    $myterms = get_terms( $taxonomy, $args );
    $output = '<select name="' . $taxonomy . '">';
    foreach( $myterms as $term ){
        $output .="<option value='".$term->slug."'>".$term->name."</option>";
    }
    $output .="</select>";
    echo $output;
}

function thisYear(){
    return '2015';
}
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>