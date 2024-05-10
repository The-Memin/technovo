<section class="l-section-questions">
    <h4><?php the_field('faq_title', false, false); ?></h4>
    <!--<h4><span>PREGUNTAS</span> FRECUENTES</h4>-->
    <!--<div class="l-section-questions__rows">-->
        <?php if( have_rows('faqs') ): ?>
            <ul class="l-section-questions__rows">
            <?php while( have_rows('faqs') ): the_row(); ?>
                <li class="m-questions">
                    <div class="m-questions m-questions--question"><?php echo wp_kses_post ( get_sub_field('faqs_question') ); ?></div>
                    <hr>
                    <div class="m-questions m-questions--answer"><?php echo wp_kses_post ( get_sub_field('faqs_answer') ); ?></div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <!--
        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿Cuál es el presupuesto mínimo para armar una PC?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex
            </div>
        </div>

        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿Cuál procesador es mejor INTEL O AMD?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex eaque ipsa saepe atque porro reprehenderit
            </div>
        </div>

        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿Qué tarjeta de video me recomiendan para renderizar y correr juegos?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex eaque ipsa saepe atque porro reprehenderit
            </div>
        </div>

        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿Refrigeración líquida o por aire?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex eaque ipsa saepe atque porro reprehenderit, velit culpa nostrum quidem commodi
            </div>
        </div>

        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿La diferencia entre una fuente normal, semi-modular y modular?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex eaque ipsa saepe atque porro reprehenderit, velit culpa nostrum quidem commodi consectetur quae nulla assumenda id iusto
            </div>
        </div>

        <div class="m-questions">
            <div class="m-questions m-questions--question">
                ¿Qué es mejor una laptop o armar una PC?
            </div>
            <hr>
            <div class="m-questions m-questions--answer">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita harum nesciunt ex eaque ipsa saepe atque porro reprehenderit
            </div>
    <!--</div>
    </div>-->
</section>