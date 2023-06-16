<?php

function anCharry_frases() {
    ?>
    <ul class="listado-testimoniales swiper-wrapper">
            <?php 
                $args = array(
                    'post_type' => 'frases'
                );
                $testimoniales = new WP_Query($args);
                while($testimoniales->have_posts()) {
                    $testimoniales->the_post();
                ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>

                        <footer class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </footer>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}

function anCharry_lista_libros($cantidad = -1) {
    ?>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'anCharry_Libros',
                    'posts_per_page' => $cantidad
                );
                $libro = new WP_Query($args);
                while($libro->have_posts()) {
                    $libro->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>

                            <h4><?php the_field('genero'); ?></h4>
                            <p><?php the_field('descripcion'); ?></p>
                        </div>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}