<section class="l-section-brands l-sec l-sec--mt">
    <div class="m-title m-title--brands">
        <?php if( have_rows('top_title_brands') ): ?>
            <?php while( have_rows('top_title_brands') ): the_row(); ?>
                <h4 style="color: <?php the_sub_field('top_title_brands_color'); ?>">
                    <?php echo esc_html( get_sub_field('top_title_brands_txt') ); ?>
                </h4>
            <?php endwhile; ?>
        <?php endif; ?> 
        <?php if( have_rows('bottom_title_brands') ): ?>
            <?php while( have_rows('bottom_title_brands') ): the_row(); ?>
                <h4 style="color: <?php the_sub_field('bottom_title_brands_color'); ?>">
                    <?php echo esc_html( get_sub_field('bottom_title_brands_txt') ); ?>
                </h4>
            <?php endwhile; ?>
        <?php endif; ?> 
            <!--<code><?php //the_field('brands'); ?></code>-->
        </div>
    <div class="l-section-brands l-section-brands--flex-one">
        <?php if( have_rows('brands_images_1') ): ?>
            <ul class="m-slides-brands">
                <?php while( have_rows('brands_images_1') ): the_row(); 
                    ?>
                    <li>
                        <div class="m-brand" style="background-image: url(<?php the_sub_field('brand_img_1'); ?>);"> </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="l-section-brands l-section-brands--flex-two">
    <?php if( have_rows('brands_images_2') ): ?>
            <ul class="m-slides-brands">
                <?php while( have_rows('brands_images_2') ): the_row(); 
                    ?>
                    <li>
                        <div class="m-brand" style="background-image: url(<?php the_sub_field('brand_img_2'); ?>);"> </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="l-section-brands l-section-brands--flex-three">       
    <?php if( have_rows('brands_images_3') ): ?>
            <ul class="m-slides-brands">
                <?php while( have_rows('brands_images_3') ): the_row(); 
                    ?>
                    <li>
                        <div class="m-brand" style="background-image: url(<?php the_sub_field('brand_img_3'); ?>);"> </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>