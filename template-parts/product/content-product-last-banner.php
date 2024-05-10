<?php

global $product;

$product_id = $product->get_id();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');

?>

<div id="product_banner_two">
    <div class="row_one">
        <?php echo '<img src= "' . $image[0] . '"/>'; ?>
    </div>
    <div class="row_two">
        <h4><?php the_field('last_banner_product_main_txt', 'option', false, false); ?></h4>
        <!--<h4><span>¿BUSCAS OTRA VERSIÓN </span> DE ESTE PRODUCTO?</h4>-->
        <p><?php echo wp_kses_post ( get_field('last_banner_product_secondary_txt', 'option') ); ?></p>
        <!--<p>Contacta a nuestro equipo, con gusto te ayudaremos a encontrar lo que necesitas.</p>-->
        <div class="btn">
        <?php if( have_rows('last_banner_product_first_btn', 'option') ): ?>
            <?php while( have_rows('last_banner_product_first_btn', 'option') ): the_row(); ?>
                    <a class="btn__item" href=”<?php esc_attr( get_sub_field('first_btn_url') ); ?>”><?php echo esc_html( get_sub_field('first_btn_txt') ); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
            <!--<div class="btn__item">CONTÁCTANOS</div>-->
        <?php if( have_rows('last_banner_product_second_btn', 'option') ): ?>
            <?php while( have_rows('last_banner_product_second_btn', 'option') ): the_row(); ?>
                    <a class="btn__item" href=”<?php esc_attr( get_sub_field('second_btn_url') ); ?>”><?php echo esc_html( get_sub_field('second_btn_txt') ); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
        <!--<div class="btn__item">DESCARGAR LISTA DE PRECIOS</div>-->
        </div>
    </div>
</div>    