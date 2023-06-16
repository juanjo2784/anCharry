<?php

// Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function gymfitness_setup() {
    // Imagenes Destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus() {
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ) );
}

add_action('init', 'gymfitness_menus');

function gymfitness_scripts_styles() {
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    if(is_page('galeria')) {
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3' );
    }
 
    if(is_front_page()) {
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.4.5');
    }

    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0' );

    // Archivos JS
    if(is_page('galeria')) {
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);
    }
    if(is_front_page()) {
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.4.5', true);
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    }
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

// Definir zona de widgets
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');


// Crear Shortcode
function anCharry_contacto_shortcode(){
    ?>
    <div class="mapa">
        <?php
            if(is_page('contacto')) {
                the_field('mapa');
            }
        ?>
    </div>
    
    <h2 class="text-center text-primary">Formulario de Contacto</h2>
    <div class="contenedor contenido-centrado">
    <?php
    echo do_shortcode('[contact-form-7 id="86" title="Formulario de contacto 1"]');
    ?>
    </div>
    <?php
}
add_shortcode('anCharry_contacto', 'anCharry_contacto_shortcode');

/** Imagenes dinamicas como BG */
function gymfitness_hero_imagen() {
    // Obtener el ID de la página de Inicio
    $front_id = get_option('page_on_front');

    // obtener la imagen
    $id_imagen = get_field('hero-imagen', $front_id);

    // Obtener la ruta de la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    // Crear CSS
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .header {
            background-image: linear-gradient( rgb(0 0 0 / .7), rgb(0 0 0 / .7)), url($imagen);
        }
    ";

    // Inyectar CSS
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'gymfitness_hero_imagen');