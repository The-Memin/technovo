<?php
add_action('wp_ajax_get_gbi_compatibles', 'get_gbi_compatibles_callback');
add_action('wp_ajax_nopriv_get_gbi_compatibles', 'get_gbi_compatibles_callback');

function get_gbi_compatibles_callback(){
    $itemtype = $_POST['type'];
    $itemID = $_POST['id'];

    $datos_fila = get_field('opciones_dentro_gama_baja_intel', 'option')[$itemID];
    // Devolver la respuesta en formato JSON
    wp_send_json(json_encode($datos_fila));
}

?>