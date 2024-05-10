<div class="l-section-eight l-sec l-sec--mt">
    <div class="l-section-eight l-section-eight--row-one">
        <div class="m-title m-title--section-eight">
            <div>
                <h4><span style="color: #e6ae49;">// SÍGUENOS</span> <span style="color: #5b647c;">EN //</span></h4>
                <?php //the_field('section_title_8'); 
                ?>
            </div>
        </div>
        <div class="m-social-networks-eight">
            <?php if (have_rows('find_us_at', 'options')) : ?>
                <ul class="slides">
                    <?php while (have_rows('find_us_at', 'options')) :
                        the_row();
                        $image = get_sub_field('social_network');
                    ?>
                        <li>
                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                            <p>
                                <?php the_sub_field('caption', 'options'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>


    </div>
    <div class="l-section-eight l-section-eight--row-two">
        <?php
        $image = get_field('find_us_at_img', 'options');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } ?>
    </div>

</div>

<div class="sep"></div>