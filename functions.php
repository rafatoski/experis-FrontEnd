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

?>