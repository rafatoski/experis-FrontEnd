<?php
/*
Template Name: Homepage
*/

get_template_part('parts/header');

?>
<section class="hero bg-light">
    <div class="px-4 pt-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis"> Unlock the World of Knowledge</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Embark on a journey of learning with our curated collection of video courses. Dive into a wealth of knowledge spanning diverse topics, from coding to cooking and everything in between. Get started today and unleash your potential! Join our community and gain access to exclusive content by subscribing now.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="btn btn-lg btn-dark rounded-pill px-4" href="https://buy.stripe.com/test_5kA17M0HDel46VW5kk">
                  Start Trial Now
                  <i class="bi bi-chevron-right fs-lg ms-2 me-n2"></i>
                </a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo-imagen.jpeg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image">                    
            </div>
        </div>
    </div>
</section>

<main>
    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom"><i class="bi bi-lightbulb"></i> Why Choose US</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Comprehensive Course Selection</h3>
                    <p>Explore a vast array of courses tailored to your interests and skill levels. Whether you're a beginner or an expert, there's something for everyone.</p>                    
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <i class="bi bi-building-check"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Expert-Led Instruction</h3>
                    <p>Learn from industry professionals and subject matter experts who are passionate about sharing their knowledge and insights with you. Gain valuable skills from the best in the business.</p>                    
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Interactive Learning Experience</h3>
                    <p>Immerse yourself in an engaging learning environment with interactive lessons, quizzes, and hands-on projects. Stay motivated and track your progress as you advance through each course.</p>
                    
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <i class="bi bi-calendar2-range"></i>
                    </div>
                    <h3 class="fs-2 text-body-emphasis">Flexible Access Anytime, Anywhere</h3>
                    <p>Enjoy the flexibility of learning at your own pace, wherever and whenever it's convenient for you. Access your courses from any device, whether you're at home, on the go, or anywhere in between.</p>                    
                </div>
        </div>
    </div>
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom"><i class="bi bi-journal-check"></i> Recent Courses</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-2 py-5">
        <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3, // Mostrar los 3 últimos productos
                'order' => 'DESC', // Ordenar de forma descendente (los más recientes primero)
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
                ?>
                <div class="col-md-4 mb-4">
                <a href="<?php the_permalink(); ?>" class="card-link text-decoration-none">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>');">
                        <div class="d-flex flex-column h-100 py-5 px-2 pb-3 text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4  lh-1 fw-bold"> <?php the_title(); ?> </h3>
                            <ul class="d-flex list-unstyled mt-auto">                                
                                <li class="d-flex align-items-start me-3">
                                     
                                <i class="bi bi-person-circle me-2"></i> <small> By <?php echo get_the_author(); ?></small>
                                </li>
                                <li class="d-flex align-items-start">
                                <i class="bi bi-clock-history me-2"></i><small><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></small>
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
                echo '<p>No hay productos disponibles.</p>';
            endif;
            ?>
    </div>
    <div class="container py-3">
        <?php
        $prices = load_prices_from_json();
        ?>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h3 class="display-5 fw-semibold"><i class="bi bi-tags"></i> Our Plans</h3>
            <p class="fs-5 text-body-secondary">Unlock your learning journey with our tailored pricing structure. <br/> Dive into a world of knowledge with clear plans and flexible options.</p>
        </div>
        <?php get_template_part('templates/template', 'pricing'); ?>    
    </div>
</main>
<?php
get_template_part('parts/footer');
?>
