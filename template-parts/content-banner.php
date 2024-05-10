<div class="l-section--banner l-sec">

    <div class="m-banner m-banner--tienda" style=" background-image: url(<?php the_field('shop_last_banner_img'); ?>);">

        <div class="inner">

            <div class="content">

                <h4><?php the_field('shop_last_banner_main_txt','option', false, false); ?></h4>

                <div class="btns-container">

                    <?php if( have_rows('shop_last_banner_first_btn', 'option') ): ?>
                        <?php while( have_rows('shop_last_banner_first_btn', 'option') ): the_row(); ?>
                            <a class="m-btn" href=”<?php esc_attr( get_sub_field('last_banner_btn_url') ); ?>”><?php echo esc_html( get_sub_field('last_banner_btn_text') ); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if( have_rows('shop_last_banner_second_btn', 'option') ): ?>
                        <?php while( have_rows('shop_last_banner_second_btn', 'option') ): the_row(); ?>
                            <a class="m-btn" href=”<?php the_sub_field('last_banner_btn_url'); ?>”><?php echo esc_html( get_sub_field('last_banner_btn_text') ); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!--<div class="m-btn">Contáctanos</div>-->

                    <!--<div class="m-btn">Descargar lista de precios</div>-->

                </div>  

            </div>

        </div>

    </div>

</div>