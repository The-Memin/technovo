<?php
add_action('wp_ajax_get_gbi_compatibles', 'get_gbi_compatibles_callback');
add_action('wp_ajax_nopriv_get_gbi_compatibles', 'get_gbi_compatibles_callback');

function get_gbi_compatibles_callback(){
    $itemtype = $_POST['type'];
    $itemID = $_POST['id'];

    $idsCompatibles = get_field('opciones_dentro_gama_baja_intel', 'option')[$itemID];
    // Devolver la respuesta en formato JSON
    $ids = array();
    $compatiblidades = array();
    $elements = ['procesador', 'tarjeta_madre', 'memoria_ram', 'enfriamiento','gabinete'];
    $index = 0;
    foreach($idsCompatibles as $key => $value) {
        $ids[$elements[$index]] = $value[$elements[$index]];
        $index++;
    }

    foreach ($ids as $producto => $ids) {
         // Preparar un array para los datos de los productos
        $products_data = array();

        // Variable contador para ID
        $contador = 0;

        // Recorrer los IDs de los productos
        foreach ($ids as $product_id) {
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
                    'productid' => $product_id,
                    'type' => $elements[$contador]
                );

                // Agregar los datos del producto al array de datos de productos
                $products_data[] = $product_data;

                // Incrementar el contador
                $contador++;
            }
        }
        array_push($compatiblidades, $products_data);
    }

    wp_send_json(json_encode($compatiblidades));
}

?>