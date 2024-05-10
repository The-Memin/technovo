<?php
add_action('wp_ajax_get_items_from_wc', 'get_items_from_wc_callback');
add_action('wp_ajax_nopriv_get_items_from_wc', 'get_items_from_wc_callback');

function get_items_from_wc_callback(){
    // Obtener los IDs de los productos de $_POST
    $itemIDs = $_POST['ids'];

    // Convertir los IDs en un array si no lo son
    if (!is_array($itemIDs)) {
        $itemIDs = array($itemIDs);
    }

    // Preparar un array para los datos de los productos
    $products_data = array();

    // Variable contador para ID
    $contador = 0;

    // Recorrer los IDs de los productos
    foreach ($itemIDs as $product_id) {
        // Obtener el producto
        $product = wc_get_product($product_id);

        // Verificar si el producto existe
        if ($product) {
            // Obtener el ID del producto
            $product_id = $product->get_id();

            // Obtener los datos del producto
            $product_data = array(
                'ID' => $contador, // Utilizar el índice del bucle como ID
                'Titulo' => $product->get_title(),
                'ImageUrl' => get_the_post_thumbnail_url($product_id, 'medium'),
                'Precio' => $product->get_price(),
                'procesadorId' => $product_id,
                'type' => "procesador"
            );

            // Agregar los datos del producto al array de datos de productos
            $products_data[] = $product_data;

            // Incrementar el contador
            $contador++;
        }
    }

    // Enviar los datos de los productos como JSON
    wp_send_json(json_encode($products_data));
}


?>