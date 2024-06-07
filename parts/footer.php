<div class="container">

<div class="container-fluid bg-light">
    <?php echo do_shortcode('[activecampaign form=1 css=1]'); ?>
</div>
        <footer class="py-3 my-4">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => 'nav justify-content-center border-bottom pb-3 mb-3',
                    'add_li_class'  => 'nav-item',
                    'link_class' => 'nav-link',
                ));
                ?>
            <p class="text-center text-body-secondary">© 2024 <?php bloginfo('name'); ?>, Inc</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>
</html>
