<section class="l-section-jobinfo" style="background-image:url(<?php the_field('banner_img_contact'); ?>)">
    <div class="m-overlay"></div>
    <div class="l-section-jobinfo l-section-jobinfo--row-one">
        <?php if( have_rows('main_text_banner_contact') ): ?>
            <?php while( have_rows('main_text_banner_contact') ): the_row(); 
                ?>
                <h1 style="color: <?php the_sub_field('text_color_banner_contact'); ?>;"><?php echo esc_html( get_sub_field('text_banner_contact') ); ?></h1>
            <?php endwhile; ?>
        <?php endif; ?> 
    <!--<h1>¡ Únete a nuestro equipo !</h1>-->

        <?php if( have_rows('btn_banner_contact') ): ?>
            <?php while( have_rows('btn_banner_contact') ): the_row();                     ?>
                <a style="background-color: <?php the_sub_field('btn_banner_color'); ?>; color : <?php the_sub_field('btn_banner_txt_color'); ?>"><?php echo esc_html( get_sub_field('btn_banner_txt') ); ?></a>
            <?php endwhile; ?>
        <?php endif; ?> 
        <!--<a href="#">Ver bolsa de trabajo</a>-->
    </div>
    <div class="l-section-jobinfo l-section-jobinfo--row-two"></div>
</section>