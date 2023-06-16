<?php
    get_header();
?>

  
    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Mis Libros</h2>

        <?php anCharry_lista_libros(); ?>

        <div class="contenedor-boton">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title('Libros') ) ); ?>" class="boton boton-primario">
                Ver Todos mis libros
            </a>
        </div>
    </main>

    <section class="testimoniales">
        <h2 class="text-center text-blanco">Frases de escritores</h2>

        <div class="contenedor-testimoniales swiper">
            <?php anCharry_frases(); ?>
        </div>
    </section>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestro Blog</h2>
        <p class="text-center">Aprende tips de nuestros instructores expertos</p>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );
                $blog = new WP_Query($args);
                while($blog->have_posts()) {
                    $blog->the_post();

                    get_template_part('template-parts/blog');
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>
    
<?php
    get_footer();
?>