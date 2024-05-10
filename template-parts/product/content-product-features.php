<div class="accordion">
    <?php if( have_rows('spec_product', 'option') ): ?>
            <ul>
            <?php while( have_rows('spec_product', 'option') ): the_row(); ?>
                <li>
                    <h5> <?php echo esc_html( get_sub_field('spec_main_text') ); ?></h5>
                    <button class="accordion_btn js-show-answer"><i class='bx bxs-down-arrow'></i></button>
                    <div class="m-other-answer"><?php echo wp_kses_post ( get_sub_field('spec_description') ); ?></div>
                    <hr>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <!--
    <div class="accordion-header header-1">
        <div class="accordion_btn">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path>
                </g>
            </svg>
        </div>
        GENERAL
    </div>
    <div class="accordion-content_one">
        Lorem ipsum.
    </div>
    <hr>

    <div class="accordion-header header-2">
        <div class="accordion_btn">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path>
                </g>
            </svg>
        </div>
        CONECTIVIDAD
    </div>
    <div class="accordion-content_two">
        Lorem ipsum.
    </div>
    <hr>

    <div class="accordion-header header-3">
        <div class="accordion_btn">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path>
                </g>
            </svg>
        </div>
        GARANTIA / CERTIFICACIONES
    </div>
    <div class="accordion-content_three">
        Lorem ipsum.
    </div>
    <hr>

    <div class="accordion-header header-4">
        <div class="accordion_btn">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path>
                </g>
            </svg>
        </div>
        ESPECIFICACIONES
    </div>
    <div class="accordion-content_four">
        Lorem ipsum.
    </div>
    <hr>
    -->
</div>