<div class="l-section-one l-sec">
    <div class="m-flexslider">

        <?php if (have_rows('slider', 'option')) : ?>

            <div class="flexslider">
                <div class="slides">
                    <?php while (have_rows('slider', 'option')) :
                        the_row();
                        $image = get_sub_field('img_slider');
                        $image_m = get_sub_field('img_slider_mobile'); 
                        ?>

                        <div class="slide">
                            
                            <div class="img hh" style="background-image: url(' <?php echo $image ?> ');">
                                <div class="inner"> </div>
                            </div>

                            <div class="img hh mobile" style="background-image: url(' <?php echo $image_m ?> ');">
                                <div class="inner"> </div>
                            </div>    
                            
                        </div>
                    <?php endwhile; ?>
                    </div>
            </div>
        <?php endif; ?>



        <div class="custom-navigation cs">
            <a href="#" class="flex-prev"><svg width="800px" height="800px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="16" height="16" id="icon-bound" fill="none" />
                    <polygon points="3,8 11,0 11,16" />
                </svg></a>
            <div class="custom-controls-container cc"></div>
            <a href="#" class="flex-next"><svg width="800px" height="800px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="16" height="16" id="icon-bound" fill="none" />
                    <polygon points="13,8 5,16 5,0" />
                </svg></a>
        </div>

    </div>
</div>