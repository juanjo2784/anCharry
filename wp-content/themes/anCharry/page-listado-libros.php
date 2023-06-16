<?php
    /*
    * Template Name: Listado de Libros
    */
    get_header();
?>

    <main class="contenedor seccion ">
        <?php
            get_template_part('template-parts/pagina');
        ?>
        
        <?php anCharry_lista_libros(); ?>
    </main>

<?php get_footer(); ?>