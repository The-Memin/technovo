<?php

add_action('wp_ajax_get_gbi_pc', 'get_gbi_pc_callback');
add_action('wp_ajax_nopriv_get_gbi_pc', 'get_gbi_pc_callback');

function get_gbi_pc_callback() {
    $procesadores = array();
    if (have_rows('opciones_dentro_gama_baja_intel', 'option')){

        // Loop through rows.
        while (have_rows('opciones_dentro_gama_baja_intel', 'option')) : the_row();
            $procesador = get_sub_field('procesador');
            $procesador_id = $procesador['procesador'][0];
            $product = wc_get_product($procesador_id);

            $new_procesador = array(
                'ID' => get_row_index()-1,
                'Titulo' => $product->get_title(),
                'ImageUrl' => get_the_post_thumbnail_url($procesador_id, 'medium'),
                'Precio' => $product->get_price(),
                'procesadorId'=>$procesador_id,
                'type'=>"procesador",
            );

            array_push($procesadores, json_encode($new_procesador));
        endwhile;

    }

   
    $response = array(
        'procesadores' => json_encode($procesadores),
    );

    // Devolver la respuesta en formato JSON
    wp_send_json($response);
}


?>