<h4 id="faq_title"><span>PREGUNTAS</span> FRECUENTES</h4>
    <div class="accordion_faq"> 

    <?php if( have_rows('product_faqs', 'option') ): ?>
            <ul>
            <?php while( have_rows('product_faqs', 'option') ): the_row(); ?>
                <li>
                    <h5> <?php echo esc_html( get_sub_field('product_faq_question') ); ?></h5>
                    <button class="accordion_btn js-show-answer"><i class='bx bxs-down-arrow'></i></button>
                    <div class="m-other-answer"><?php echo wp_kses_post ( get_sub_field('product_faq_answer') ); ?></div>
                    <hr>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <!--
        <div class="accordion-header_faq header-1">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Cuánto dura la batería?
        </div>
        <div class="accordion-content_one_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-2">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Es compatible con iphone?
        </div>
        <div class="accordion-content_two_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-3">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Es resistente al agua?</div>
        <div class="accordion-content_three_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-4">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Se puede usar como manos libres?
            </div>
        <div class="accordion-content_four_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-5">
        <div class="accordion_btn_faq">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
        </div>
        ¿Está construido en plático o metal?
        </div>
    <div class="accordion-content_five_faq">
        Lorem ipsum.
    </div>
    <hr>

    <div class="accordion-header_faq header-6">
    <div class="accordion_btn_faq">
        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
    </div>
    ¿Cuentan con envío a toda la República?
    </div>
<div class="accordion-content_six_faq">
    Lorem ipsum.
</div>
<hr>-->
    </div>