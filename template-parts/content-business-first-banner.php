<section class="l-section-business l-sec">
    <div class="l-section-business l-section-business--image" style="background-image: url(<?php the_field('first_banner_img_business'); ?>);">
        <div class="inner">
            <?php if( have_rows('first_banner_business_main_txt') ): ?>
                <?php while( have_rows('first_banner_business_main_txt') ): the_row(); ?>
                    <h1 style="color: <?php the_sub_field('first_banner_main_txt_color'); ?>"><?php echo esc_html( get_sub_field('first_banner_main_txt') ); ?></h1>
                <?php endwhile; ?>
            <?php endif; ?> 

            <?php if( have_rows('first_banner_business_btn') ): ?>
                <?php while( have_rows('first_banner_business_btn') ): the_row(); ?>
                    <a class="m-btn-business" style="border-color: <?php the_sub_field('first_banner_border_btn_color'); ?>; color : <?php the_sub_field('first_banner_txt_color'); ?>"><?php echo esc_html( get_sub_field('first_banner_txt_btn') ); ?></a>
                <?php endwhile; ?>
            <?php endif; ?> 
            <!--<h1>Digitaliza tu negocio con nosotros</h1>
            <a class="m-btn-business" href="">Solicitar cotización</a>-->
        </div>
    </div>
</section>
