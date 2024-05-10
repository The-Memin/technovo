<?php

$icon_product_images = '<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.9999 2C16.714 2 19.071 2 20.5354 3.46447C21.9999 4.92893 21.9999 7.28595 21.9999 12C21.9999 16.714 21.9999 19.0711 20.5354 20.5355C19.1784 21.8926 17.055 21.9921 12.9999 21.9994M2.00049 11C2.00779 6.94493 2.10734 4.8215 3.46438 3.46447C4.43813 2.49071 5.8065 2.16443 8 2.0551" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 12L17 7M17 7H13.25M17 7V10.75" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M2 18C2 16.1144 2 15.1716 2.58579 14.5858C3.17157 14 4.11438 14 6 14C7.88562 14 8.82843 14 9.41421 14.5858C10 15.1716 10 16.1144 10 18C10 19.8856 10 20.8284 9.41421 21.4142C8.82843 22 7.88562 22 6 22C4.11438 22 3.17157 22 2.58579 21.4142C2 20.8284 2 19.8856 2 18Z" stroke="#1C274C" stroke-width="1.5"></path> </g></svg>';

global $product;

$product_id = $product->get_id();
$product2 = new WC_product($product_id);
$attachment_ids = $product2->get_gallery_image_ids();

$image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');

?>

<div class="m-mobile-product-images">

    <div class="m-mobile-product-images__item js-feature-img-product" data-index="0">

        <img src="<?php echo $image[0]; ?>" />

        <div class="get-bigger">Presiona para agrandar</div>

    </div>

    <?php

    $i = 1;

    foreach ($attachment_ids as $attachment_id) {

        // Display the image URL
        //echo $Original_image_url = wp_get_attachment_url( $attachment_id );

        echo '<div class="m-mobile-product-images__item js-feature-img-product" data-index="' . $i++ . '">';

        // Display Image instead of URL
        echo wp_get_attachment_image($attachment_id, 'full');

        echo '<div class="get-bigger">Presiona para agrandar</div></div>';
    }

    ?>

</div>


<div class="main_info_container">

    <div class="product_images">

        <div id="feature_img" class="product_images__item js-feature-img-product" data-index="0">
            <img src="<?php echo $image[0]; ?>" /> 
            <div class="m-overlay"><?php echo $icon_product_images; ?></div>
        </div>

        <div id="gallery_img">

            <?php

            $i = 1;    

            foreach ($attachment_ids as $attachment_id) { ?>


                <div class="product_images__item js-feature-img-product" data-index="<?php echo $i++; ?>">
                    <img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" /> 
                    <div class="m-overlay"><?php echo $icon_product_images; ?></div>
                </div>

            <?php    

            }

            ?>

        </div>

    </div>