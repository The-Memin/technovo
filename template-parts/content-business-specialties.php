<section class="l-section-specialties">
    <div class="l-section-specialties l-section-specialties--text">
        <?php if( have_rows('business_specialities_title') ): ?>
            <?php while( have_rows('business_specialities_title') ): the_row(); ?>
                <p style="color: <?php the_sub_field('business_specialities_title_color'); ?>"><span><?php echo esc_html( get_sub_field('business_specialities_txt') ); ?></span></p>
                <p style="color: <?php the_sub_field('business_specialities_title_color'); ?>"><?php echo esc_html( get_sub_field('business_specialities_main_txt') ); ?></p>
            <?php endwhile; ?>
        <?php endif; ?> 
        <!--<p><span>Somos</span></p>
        <p>Especialistas En</p>-->
    </div>
        <?php if( have_rows('first_speciality') ): ?>
            <?php while( have_rows('first_speciality') ): the_row(); ?>
                <div class="m-diamond" style="border-color: <?php the_sub_field('first_speciality_color') ?>;">
                    <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('first_speciality_img') ?>);">
                        <a href="">
                            <p style="color: <?php the_sub_field('first_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('first_speciality_name') ); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
        <!--<div class="m-diamond m-diamond--image-one" style="background-image: url(https://uploads-ssl.webflow.com/606e2eaa45ec23c5ce4596ec/615f6c52528a2d18a48d4eba_computo.png);">
            <a href="">
                <p>Cómputo</p>
            </a>
        </div>-->
        <?php if( have_rows('second_speciality') ): ?>
            <?php while( have_rows('second_speciality') ): the_row(); ?>
                <div class="m-diamond m-diamond--two" style="border-color: <?php the_sub_field('second_speciality_color') ?>;">
                    <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('second_speciality_img') ?>);">
                        <a href="">
                            <p style="color: <?php the_sub_field('second_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('second_speciality_name') ); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    <!--
    <div class="m-diamond m-diamond--two">
        <div class="m-diamond--two m-diamond--two--image-two" style="background-image: url(https://esemanal.mx/revista/wp-content/uploads/2019/04/Acer-expande-su-liderazgo-en-c%C3%B3mputo.jpg);">
            <a href="">
                <p>Pc Gamer</p>
            </a>
        </div>
    </div>-->
        <?php if( have_rows('third_speciality') ): ?>
            <?php while( have_rows('third_speciality') ): the_row(); ?>
                <div class="m-diamond m-diamond--three" style="border-color: <?php the_sub_field('third_speciality_color') ?>;">
                    <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('third_speciality_img') ?>);">
                        <a href="">
                            <p style="color: <?php the_sub_field('third_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('third_speciality_name') ); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    <!--
    <div class="m-diamond m-diamond--three" style="background-image: url(https://www.65ymas.com/uploads/s1/20/08/24/sabes-cuales-son-los-diferentes-tipos-de-cartuchos-de-impresora-de-tinta.jpeg);">
        <div class="m-diamond-three m-diamond--three--image-three">
            <a href="">
                <p>Consumibles</p>
            </a>
        </div>
    </div>-->
    <?php if( have_rows('fourth_speciality') ): ?>
        <?php while( have_rows('fourth_speciality') ): the_row(); ?>
            <div class="m-diamond m-diamond--four" style="border-color: <?php the_sub_field('fourth_speciality_color') ?>;">
                <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('fourth_speciality_img') ?>);">
                    <a href="">
                        <p style="color: <?php the_sub_field('fourth_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('fourth_speciality_name') ); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?> 
    
    <!--<div class="m-diamond m-diamond--four" style="background-image: url(https://soportepc.pe/wp-content/uploads/revslider/wdc-slider-one/slide-1-2.jpg);">
        <div class="m-diamond--four m-diamond--four--image-four">
            <a href="">
                <p>Servicio Técnico</p>
            </a>
        </div>
    </div>-->
    <?php if( have_rows('fifth_speciality') ): ?>
        <?php while( have_rows('fifth_speciality') ): the_row(); ?>
            <div class="m-diamond m-diamond--five" style="border-color: <?php the_sub_field('fifth_speciality_color') ?>;">
                <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('fifth_speciality_img') ?>);">
                    <a href="">
                        <p style="color: <?php the_sub_field('fifth_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('fifth_speciality_name') ); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?> 
    

    <!--<div class="m-diamond m-diamond--five" style="background-image: url(https://img.freepik.com/free-photo/modern-stationary-collection-arrangement_23-2149309643.jpg?w=2000);">
        <div class="m-diamond--five m-diamond--five--image-five">
            <a href="">
                <p>Gadgets</p>
            </a>
        </div>
    </div>-->
    <?php if( have_rows('sixth_speciality') ): ?>
        <?php while( have_rows('sixth_speciality') ): the_row(); ?>
            <div class="m-diamond m-diamond--six" style="border-color: <?php the_sub_field('sixth_speciality_color') ?>;">
                <div class="m-diamond m-diamond--image-one" style="background-image: url(<?php the_sub_field('sixth_speciality_img') ?>);">
                    <a href="">
                        <p style="color: <?php the_sub_field('sixth_speciality_color'); ?>;"><?php echo esc_html( get_sub_field('sixth_speciality_name') ); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?> 
    

    <!--<div class="m-diamond m-diamond--six" style="background-image: url(https://asia.canon/media/image/2020/08/20/1d9293898956405399672948583c3085_ProH_SS1-w-paper_EN_edited_small-570x400.png);">
        <div class="m-diamond--six m-diamond--six--image-six">
            <a href="">
                <p>Impresión</p>
            </a>
        </div>
    </div>-->
</section>