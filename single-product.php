<?php
get_template_part('parts/header');
?>
<main>
    <div class="container my-4">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
            
            // Obtener el enlace de YouTube desde el campo personalizado
            $enlace_youtube = get_post_meta(get_the_ID(), '_enlace_youtube', true);
            // Obtener la URL de la imagen destacada
            $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>

            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid">
                    <h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
                    <p class="col-md-8 fs-4"><?php the_content(); ?></p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3" style="background-image:<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
                        <h2>Change the background</h2>
                        <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                        <button class="btn btn-outline-light" type="button">Example button</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                        <h2>Add borders</h2>
                        <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                        <button class="btn btn-outline-secondary" type="button">Example button</button>
                    </div>
                </div>
            </div>

            <?php if ($background_image): ?>
                <div class="product-image my-4" style="background-image: url('<?php echo esc_url($background_image); ?>');"></div>
            <?php endif; ?>

            <?php if ($enlace_youtube): ?>
                <div class="product-video">
                    <h2>Video:</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo esc_attr($enlace_youtube); ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
            
        <?php
            endwhile;
        else :
            echo '<p>No hay productos disponibles.</p>';
        endif;
        ?>
    </div>
</main>
<?php
get_template_part('parts/footer');
?>
