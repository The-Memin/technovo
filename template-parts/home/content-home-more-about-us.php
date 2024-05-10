<?php
$image = get_field('img_video', 'option');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if (!empty($image)) {
    $image_url = wp_get_attachment_image_src($image, $size);
    if (!empty($image_url[0])) { ?>

<?php }
}
?>

<div class="l-section-six l-sec l-sec--mt l-sec--full" style="background-image: url(<?php the_field('img_video', 'option'); ?>);">

    <div class="m-overlay"></div>

    <div class="inner">

        <div class="m-title m-title--section-six">
            <h4><?php the_field('section_title_6', 'option', false, false); ?></h4>
        </div>

        <?php if (have_rows('btn_video', 'option')) : ?>
            <?php while (have_rows('btn_video', 'option')) :
                the_row();

                // Get sub field values.
                $image = get_sub_field('button');
                $link = get_sub_field('link');

                echo '<a class="m-btn-play" href="' . $link . '">' . wp_get_attachment_image($image) . '</a>';
            ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

</div>