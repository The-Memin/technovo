<section class="l-section-offers l-sec">
        <?php if( have_rows('products_on_sale', 'option') ): ?>
            <ul>
            <?php while( have_rows('products_on_sale', 'option') ): the_row(); 
                ?>
                <li style="background: url(<?php the_sub_field('product_on_sale'); ?>); background-size: cover; background-repeat: no-repeat;"> 
                    <div class="inner"></div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
</section>