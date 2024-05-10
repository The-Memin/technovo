<section class="l-section-second-banner l-sec l-sec--mt" style="background-image: url(<?php the_field('second_banner_img_business') ?>);">
    <div class="inner">
        <div class="l-section-second-banner--row-two">
            <?php if( have_rows('second_banner_business_main_txt') ): ?>
                <?php while( have_rows('second_banner_business_main_txt') ): the_row(); ?>
                    <h1 style="color: <?php the_sub_field('second_banner_txt_color'); ?>"><?php echo esc_html( get_sub_field('second_banner_secondary_txt') ); ?></h1>
                    <h1 style="color: <?php the_sub_field('second_banner_txt_color'); ?>"><span><?php echo esc_html( get_sub_field('second_banner_main_txt') ); ?></span></h1>
                <?php endwhile; ?>
            <?php endif; ?> 

            <?php if( have_rows('second_banner_business_btn') ): ?>
                <?php while( have_rows('second_banner_business_btn') ): the_row(); ?>
                    <a class="m-btn-business" style="background-color: <?php the_sub_field('second_banner_btn_color'); ?>; color : <?php the_sub_field('second_banner_txt_color'); ?>"><?php echo esc_html( get_sub_field('second_banner_txt_btn') ); ?></a>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
        <!--<div class="l-section-second-banner--row-two">
            <h1>Lleva tu negocio <br> <span>Al siguiente nivel</span></h1>
            <a href="#">Solicitar cotización</a>
        </div>-->
    </div>

</section>