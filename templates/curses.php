<?php
/*
 * Template Name: Curses
 * Description: Plantilla para mostrar todos los cursos disponibles.
 */

// Agregar el encabezado de WordPress
get_template_part('parts/header');
?>

<main>
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom"><i class="bi bi-journal-check"></i> All Courses</h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-2 py-5">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1, // Mostrar todos los cursos
            'order' => 'DESC',
        );

        $products_query = new WP_Query($args);

        if ($products_query->have_posts()) :
            while ($products_query->have_posts()) : $products_query->the_post();
                ?>
                <div class="col-md-4 mb-4">
                    <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none">
                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                             style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>');">
                            <div class="d-flex flex-column h-100 py-5 px-2 pb-3 text-shadow-1">
                                <h3 class="pt-5 mt-5 mb-4  lh-1 fw-bold"> <?php the_title(); ?> </h3>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="d-flex align-items-start me-3">
                                        <i class="bi bi-person-circle me-2"></i>
                                        <small> By <?php echo get_the_author(); ?></small>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <i class="bi bi-clock-history me-2"></i>
                                        <small><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata(); // Restablecer el loop original
        else :
            echo '<p>No hay cursos disponibles.</p>';
        endif;
        ?>
    </div>
</div>

</main>

<?php 
get_template_part('parts/footer');
?>