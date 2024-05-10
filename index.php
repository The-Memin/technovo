<?php
/*
Displays single posts
*/
?>
<?php get_header() ?>
    <?php get_template_part( 'template-parts/home/content', 'home-social-networks'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-first-slider'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-advantages'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-external-means'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-featured-products'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-products-on-sale'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-more-about-us'); ?>
    <?php get_template_part( 'template-parts/home/content', 'home-testimonials'); ?>
<?php get_footer() ?>