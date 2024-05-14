<article class="m-item-list" id="<?php echo 'item-'.$args['id'];?>" data-step='<?php echo $args['id']?>'>
    <figure class="m-item-list__figure">
    
    <?php 
        get_template_part('template-parts/svg/svg',  $args['img_name'])
    ?>

    </figure>

    <div class="m-item-list__label">
        <h3>
            No haz seleccionado <?php echo $args['label'];?>
        </h3>
        <h3 class="product">
            <span class="product__name"></span>
            <span class="product__price"></span>
        </h3>
    </div>

</article>