<section class="l-section-other-questions">

    <h4><?php the_field('other_questions_title'); ?></h4>
    <!--<h4><span>OTRAS</span> PREGUNTAS</h4>-->

    <?php if( have_rows('other_questions') ): ?>
            <ul>
            <?php while( have_rows('other_questions') ): the_row(); ?>
                <li class="l-section-other-questions__question">
                    <h5><?php echo esc_html( get_sub_field('other_questions_question') ); ?></h5>
                    <button class="js-show-answer"><i class='bx bxs-down-arrow'></i></button>
                    <div class="m-other-answer"><?php echo wp_kses_post ( get_sub_field('other_questions_answer') ); ?></div>
                    <hr>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <!--
    <div class="l-section-other-questions__question">
        <h5>¿Cuentan con asesoría para armar una PC?</h5>
        <button class="js-show-answer"><i class='bx bxs-down-arrow'></i></button>
        <div class="m-other-answer">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vero tempora
            perspiciatis totam soluta voluptate, eos fugiat eveniet iure quibusdam vitae doloremque earum, asperiores,
            tenetur pariatur veritatis. Vitae, optio fuga!</div>
        <hr>
    </div>

    <div class="l-section-other-questions__question">
        <h5>¿Las PC preconfiguradas cuentan con garantía en sus piezas?</h5>
        <button class="js-show-answer"><i class='bx bxs-down-arrow'></i></button>
        <div class="m-other-answer">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vero tempora
            perspiciatis totam soluta voluptate, eos fugiat eveniet iure quibusdam vitae doloremque earum, asperiores,
            tenetur pariatur veritatis. Vitae, optio fuga!</div>
        <hr>
    </div>

    <div class="l-section-other-questions__question">
        <h5>Al elegir los componentes, ¿ustedes arman la conputadora o la entregan por piezas individuales?</h5>
        <button class="js-show-answer"><i class='bx bxs-down-arrow'></i></button>
        <div class="m-other-answer">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vero tempora
            perspiciatis totam soluta voluptate, eos fugiat eveniet iure quibusdam vitae doloremque earum, asperiores,
            tenetur pariatur veritatis. Vitae, optio fuga!</div>
        <hr>
    </div>-->

    <div class="l-section-other-questions__help">
    <?php if( have_rows('btn_help_group') ): ?>
        <?php while( have_rows('btn_help_group') ): the_row(); ?>
            <p><?php echo esc_html( get_sub_field('txt_before_btn') ); ?></p>
                
                <?php if( have_rows('btn_help') ): ?>
                    <?php while( have_rows('btn_help') ): the_row(); ?>
                        <a href=”<?php esc_attr( get_sub_field('btn_url') ); ?>”> <i class='bx bxl-whatsapp'></i> <?php echo esc_html( get_sub_field('btn_txt') ); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
        <!--<p>¿NECESITAS MÁS AYUDA?</p><a href=""><i class='bx bxl-whatsapp'></i> ENVÍANOS UN MENSAJE</a>-->
    </div>
</section>