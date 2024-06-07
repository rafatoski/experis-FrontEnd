<?php
function load_prices_from_json() {
    // Ruta al archivo JSON
    $json_file = get_stylesheet_directory() . '/assets/js/prices.json';

    // Verifica si el archivo existe
    if (file_exists($json_file)) {
        // Carga el contenido del archivo JSON
        $json_data = file_get_contents($json_file);

        // Decodifica el contenido JSON en un objeto PHP
        $prices = json_decode($json_data);

        // Devuelve el objeto con los precios
        return $prices;
    } else {
        // Si el archivo no existe, devuelve un objeto vacío
        return new stdClass();
    }
}

// Añadir soporte para plantillas personalizadas en la carpeta templates
function custom_page_template($template) {
    if (is_page_template('templates/page.php')) {
        $template = get_stylesheet_directory() . '/templates/page.php';
    }
    return $template;
}
add_filter('template_include', 'custom_page_template');

// Agregar clase a los elementos <li>
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Agregar clase a los enlaces <a>
function add_menu_link_class($atts, $item, $args) {
    if (isset($args->link_class)) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
// pagina de productos 

function create_product_post_type() {
    register_post_type('product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_product_post_type');
// Agregar un meta box para el enlace de YouTube
function agregar_meta_box_enlace_youtube() {
    add_meta_box(
        'enlace_youtube_meta_box', // ID
        'Enlace de YouTube', // Título
        'mostrar_meta_box_enlace_youtube', // Callback
        'product', // Pantalla donde se mostrará
        'normal', // Contexto
        'high' // Prioridad
    );
}
add_action('add_meta_boxes', 'agregar_meta_box_enlace_youtube');

// Mostrar el meta box
function mostrar_meta_box_enlace_youtube($post) {
    // Valor actual del meta field
    $enlace_youtube = get_post_meta($post->ID, '_enlace_youtube', true);
    ?>
    <label for="enlace_youtube">Enlace de YouTube:</label>
    <input type="text" id="enlace_youtube" name="enlace_youtube" value="<?php echo esc_attr($enlace_youtube); ?>" size="25" />
    <?php
}

// Guardar el valor del meta box
function guardar_meta_box_enlace_youtube($post_id) {
    // Verifica nonce
    if (!isset($_POST['enlace_youtube_nonce']) || !wp_verify_nonce($_POST['enlace_youtube_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // Verifica auto-salvado
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // Verifica permisos del usuario
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Guardar/actualizar el valor del campo personalizado
    $nuevo_enlace_youtube = (isset($_POST['enlace_youtube']) ? sanitize_text_field($_POST['enlace_youtube']) : '');
    update_post_meta($post_id, '_enlace_youtube', $nuevo_enlace_youtube);
}
add_action('save_post', 'guardar_meta_box_enlace_youtube');


// Registrar menús
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_my_menus');
?>
