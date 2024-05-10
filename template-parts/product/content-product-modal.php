<?php 

    global $product;

    $product_id = $product->get_id();
    $product2 = new WC_product($product_id);
    $attachment_ids = $product2->get_gallery_image_ids();

    $image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');

?>

<div class="l-product-modal">

    <div class="m-overlay"></div>

    <div class="l-product-modal__container">

        <div class="m-flexslider-modal" id="modal-slider">

            <div class="m-flexslider-modal__close js-close-modal-slider">&times;</div>

            <div class="m-flexslider-modal__slides">

                <div class="m-flexslider-modal__slides__slide">

                    <div class="m-flexslider-modal__slides__slide__container">

                        <div class="m-flexslider-modal__slides__slide__container__container-zoom disable-hover">

                            <img class="js-zoom-image" src="<?php echo $image[0]; ?>" />

                        </div>

                    </div>

                </div>

                <?php  
                
                    foreach ($attachment_ids as $attachment_id) {

                        // Display the image URL
                        //echo $Original_image_url = wp_get_attachment_url( $attachment_id );
                
                        echo '<div class="m-flexslider-modal__slides__slide"><div class="m-flexslider-modal__slides__slide__container"><div class="m-flexslider-modal__slides__slide__container__container-zoom disable-hover">';
                
                        // Display Image instead of URL
                        echo '<img class="js-zoom-image" src="' . wp_get_attachment_url( $attachment_id ) . ' ?>" />';
                
                        echo '</div></div></div>';
                    }
                
                ?>

            </div>

        </div>

    </div>

</div>