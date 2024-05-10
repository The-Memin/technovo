<?php

/**
 * Template Name: TechNovo Cotizador
 *
 */
?>

<?php get_header()  ?>


<?php get_template_part('template-parts/content', 'build-your-pc'); ?>
<?php //get_template_part('template-parts/content', 'pc-tutorials'); ?>
<?php //get_template_part('template-parts/content', 'pc-questions'); ?>
<?php //get_template_part('template-parts/content', 'pc-other-questions'); ?>



<?php

//Procesador
//Motherboard
//Enfriamiento
//RAM
//HDD
//Video Grapfics Card
//Power Supply

//GamaBaja
$GamaBaja = array();

$GamaBaja =


    $args = array(
        'post_type' => 'product',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'procesadores',
                'operator' => 'IN',
            ),
        ),
        'meta_query' => array(
            array(
                'key'     => '_stock_status',
                'value'   => 'instock',
                'compare' => '=',
            ),
        ),
    );

//$wp_query = new WP_Query($args);
/*
$gamaBajaIntel = array();
*\


/*
if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
        $wp_query->the_post();
        $product = wc_get_product(get_the_ID());
        $tarjetas_madres_compatibles = get_field('tarjetas_madres_compatibles');

        $producto_data = array(
            'Titulo' => get_the_title(),
            'ImageUrl' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
            'Precio' => $product->get_price(),
            'tarjetasMadreCompatibles' => array(),
        );

        if ($tarjetas_madres_compatibles) {
            foreach ($tarjetas_madres_compatibles as $tarjeta_id) {
                $tarjeta = wc_get_product($tarjeta_id);

                $tarjeta_data = array(
                    'ID' => $tarjeta_id,
                    'Titulo' => $tarjeta->get_title(),
                    'ImageUrl' => get_the_post_thumbnail_url($tarjeta_id, 'medium'),
                    'Precio' => $tarjeta->get_price(),
                    'memoriasRamCompatibles' => array(),
                );

                $memorias_ram_compatibles = get_field('memorias_ram_compatibles', $tarjeta_id);
                if ($memorias_ram_compatibles) {
                    foreach ($memorias_ram_compatibles as $ram_id) {
                        $ram = wc_get_product($ram_id);

                        $ram_data = array(
                            //'ID_padre' => '',
                            'ID' => $ram_id,
                            'Titulo' => $ram->get_title(),
                            'ImageUrl' => get_the_post_thumbnail_url($ram_id, 'medium'),
                            'Precio' => $ram->get_price(),
                        );

                        $tarjeta_data['memoriasRamCompatibles'][] = $ram_data;
                    }
                }

                $producto_data['tarjetasMadreCompatibles'][] = $tarjeta_data;
            }
        }

        $gamaBajaIntel[] = $producto_data;
    }
}

wp_reset_postdata();
*/

// Check rows exists.



?>



<?php get_footer() ?>