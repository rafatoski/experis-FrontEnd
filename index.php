<?php
get_template_part('parts/header');
?>
<main>
    <div class="container my-4">
        <div class="row">
            <div class="col">

                <h1 class="fw-bold display-4 mb-3"><?php the_title(); ?></h1>
            </div>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                ?>
                <?php the_content(); ?>
                <?php
                endwhile;
            else :
                echo '<p>No hay entradas disponibles.</p>';
            endif;
            ?>
        </div>
    </div>
</main>
<?php
get_template_part('parts/footer');
?>
