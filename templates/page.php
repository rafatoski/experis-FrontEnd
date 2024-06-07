<?php get_template_part('parts/header'); ?>

<main>
    <div class="container py-5">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_template_part('parts/footer'); ?>
