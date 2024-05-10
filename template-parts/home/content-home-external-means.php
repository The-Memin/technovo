<div class="l-section-three l-sec l-sec--mt l-sec--small">
    <div class="m-title m-title--external-means">
        <h4><?php the_field('section_title_3', 'option', false, false); ?></h4>
    </div>
    <div class="l-section-three l-section-three--rows">

        <div class="m-row-item">
            <?php if (have_rows('link_ml', 'option')) : ?>
                <?php while (have_rows('link_ml', 'option')) :
                    the_row();

                    // Get sub field values.
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');

                ?>
                    <?php
                    echo '<a href="' . $link . '">' . wp_get_attachment_image($image) . '</a>';
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="m-row-item">
            <?php if (have_rows('link_amz', 'option')) : ?>
                <?php while (have_rows('link_amz', 'option')) :
                    the_row();

                    // Get sub field values.
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');

                ?>
                    <?php
                    echo '<a href="' . $link . '">' . wp_get_attachment_image($image) . '</a>';
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>