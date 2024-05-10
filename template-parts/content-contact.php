<section class="l-section-contact l-sec">
    <div class="l-section-contact l-section-contact--row-one">
        
        <!--<div class="m-title m-title--contact">
            <?php //the_field('subtitle_contact'); ?>
        </div>-->
        <!--<div class="m-title m-title--contact">
            <?php// $subtitle_contact =  the_field('subtitle_contact', false, false); ?>
            <?php// echo '<h4>'.$subtitle_contact.'</h4>';?>
        </div>-->

        <?php if( have_rows('txt_before_title_contact') ): ?>
            <?php while( have_rows('txt_before_title_contact') ): the_row(); 

                $text_before_contact = get_sub_field('txt_before_title');
                $color_text_before_contact = get_sub_field('color_txt_before_title');

                ?>
                <div class="m-title m-title--before-contact">
                    <h4 style="color: <?php echo $color_text_before_contact ?>;"><?php echo esc_html( $text_before_contact ); ?></h4>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('title_contact') ): ?>
            <?php while( have_rows('title_contact') ): the_row(); 

                $text_contact = get_sub_field('title_contact');
                $color_text_contact = get_sub_field('color_title_contact');

                ?>
                <div class="m-title m-title--contact">
                    <h4 style="color: <?php echo $color_text_contact ?>;"><?php echo esc_html( $text_contact ); ?></h4>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('contact_info') ): ?>
            <ul class="l-contact-info-items">
                <?php while( have_rows('contact_info') ): the_row(); 
                ?>
                <li>
                    <?php the_sub_field('contact_icon', false, false); ?> <?php the_sub_field('contact_text'); ?>
                </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <!--<p><i class='bx bxs-phone'></i> 222 227 3741</p>
        <p><i class='bx bxl-whatsapp'></i> 222 674 1983</p>
        <p><i class='bx bxs-envelope'></i> administacion@technovo.mx</p>
        <p><i class='bx bxs-map'></i> Av. 9 Sur 12120, Guadalupe Hidalgo, 72490 Puebla, Pue.</p>-->
        <hr>  
        <!--<div class="social-networks">
            
            <a href="https://es-la.facebook.com/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;"
                    xml:space="preserve">
                    
                    <g>
                        <g id="XMLID_00000073722985710893945410000003434388005162684804_">
                            <path class="st0"
                                d="M100,200C44.86,200,0,155.14,0,100S44.86,0,100,0c55.14,0,100,44.86,100,100S155.14,200,100,200z M100,7.58    C49.04,7.58,7.58,49.04,7.58,100s41.46,92.42,92.42,92.42h0c50.96,0,92.42-41.46,92.42-92.42S150.96,7.58,100,7.58z" />
                        </g>
                        <path id="XMLID_00000090973763147894162620000018236319855641542555_" class="st0"
                            d="M85.34,158.15h23.42V99.51h16.34l1.74-19.64   h-18.08c0,0,0-7.33,0-11.18c0-4.63,0.93-6.46,5.41-6.46c3.6,0,12.68,0,12.68,0V41.85c0,0-13.36,0-16.22,0   c-17.43,0-25.28,7.68-25.28,22.37c0,12.8,0,15.66,0,15.66H73.16v19.88h12.18V158.15z" />
                    </g>
                </svg>
            </a>

            <a href="https://www.instagram.com/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">

                <g>
	<g id="XMLID_00000074400582186429378640000009793608111374429094_">
		<path class="st0" d="M100,200C44.86,200,0,155.14,0,100C0,44.86,44.86,0,100,0c55.14,0,100,44.86,100,100    C200,155.14,155.14,200,100,200z M100,7.58C49.04,7.58,7.58,49.04,7.58,100c0,50.96,41.46,92.42,92.42,92.42    c50.96,0,92.42-41.46,92.42-92.42C192.42,49.04,150.96,7.58,100,7.58z"/>
	</g>
	<g id="XMLID_00000153673245646252728780000002990877450069348510_">
		<path id="XMLID_00000088092371401727828060000002042590215587792003_" class="st0" d="M100,56.75c14.09,0,15.75,0.05,21.32,0.31    c5.14,0.23,7.94,1.09,9.8,1.82c2.46,0.96,4.22,2.1,6.07,3.95c1.85,1.85,2.99,3.6,3.95,6.07c0.72,1.86,1.58,4.65,1.82,9.8    c0.25,5.56,0.31,7.23,0.31,21.32s-0.06,15.75-0.31,21.32c-0.24,5.14-1.09,7.94-1.82,9.79c-0.96,2.46-2.1,4.22-3.95,6.07    c-1.85,1.85-3.6,2.99-6.07,3.95c-1.86,0.72-4.65,1.58-9.8,1.82c-5.56,0.25-7.23,0.31-21.32,0.31s-15.75-0.05-21.32-0.31    c-5.14-0.23-7.94-1.09-9.79-1.82c-2.46-0.96-4.22-2.1-6.07-3.95c-1.85-1.85-2.99-3.6-3.95-6.07c-0.72-1.86-1.58-4.65-1.82-9.79    c-0.25-5.56-0.31-7.23-0.31-21.32s0.05-15.75,0.31-21.32c0.24-5.14,1.1-7.94,1.82-9.8c0.96-2.46,2.1-4.22,3.95-6.07    c1.85-1.85,3.6-2.99,6.07-3.95c1.86-0.72,4.65-1.58,9.79-1.82C84.25,56.81,85.92,56.75,100,56.75 M100,47.25    c-14.33,0-16.12,0.06-21.75,0.32c-5.61,0.26-9.45,1.15-12.8,2.45c-3.47,1.35-6.41,3.15-9.34,6.08c-2.93,2.93-4.74,5.88-6.08,9.34    c-1.3,3.36-2.2,7.19-2.45,12.8c-0.26,5.63-0.32,7.42-0.32,21.75c0,14.33,0.06,16.12,0.32,21.75c0.26,5.61,1.15,9.45,2.45,12.8    c1.35,3.47,3.15,6.41,6.08,9.34c2.93,2.93,5.87,4.74,9.34,6.08c3.36,1.3,7.19,2.2,12.8,2.45c5.63,0.26,7.42,0.32,21.75,0.32    c14.33,0,16.12-0.06,21.75-0.32c5.62-0.26,9.45-1.15,12.8-2.45c3.47-1.35,6.41-3.15,9.34-6.08c2.93-2.93,4.74-5.88,6.08-9.34    c1.3-3.36,2.2-7.19,2.45-12.8c0.26-5.63,0.32-7.42,0.32-21.75c0-14.33-0.06-16.12-0.32-21.75c-0.26-5.61-1.15-9.45-2.45-12.8    c-1.35-3.47-3.15-6.41-6.08-9.34c-2.93-2.93-5.87-4.74-9.34-6.08c-3.36-1.3-7.19-2.2-12.8-2.45    C116.12,47.31,114.33,47.25,100,47.25"/>
		<path id="XMLID_00000130641030178564826140000016429308663380832186_" class="st0" d="M100,72.91    c-14.96,0-27.09,12.13-27.09,27.09c0,14.96,12.13,27.09,27.09,27.09c14.96,0,27.09-12.13,27.09-27.09    C127.09,85.04,114.96,72.91,100,72.91 M100,117.58c-9.71,0-17.58-7.87-17.58-17.58c0-9.71,7.87-17.58,17.58-17.58    s17.58,7.87,17.58,17.58C117.58,109.71,109.71,117.58,100,117.58"/>
		<path id="XMLID_00000158726488111802582760000010433602029130605236_" class="st0" d="M134.49,71.84c0,3.5-2.83,6.33-6.33,6.33    c-3.5,0-6.33-2.84-6.33-6.33c0-3.5,2.83-6.33,6.33-6.33C131.66,65.51,134.49,68.35,134.49,71.84"/>
	</g>
                </g>
                </svg>
            </a>

            <a href="https://www.tiktok.com/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
                    <g>
                        <path class="st0" d="M149.75,88.9c-0.95,0.09-1.9,0.14-2.86,0.15c-10.47,0-20.24-5.28-25.98-14.04v47.81   c0,19.52-15.82,35.34-35.34,35.34c-19.52,0-35.34-15.82-35.34-35.34c0-19.52,15.82-35.34,35.34-35.34l0,0   c0.74,0,1.46,0.07,2.18,0.11v17.41c-0.73-0.09-1.44-0.22-2.18-0.22c-9.96,0-18.03,8.07-18.03,18.03s8.07,18.03,18.03,18.03   c9.96,0,18.76-7.85,18.76-17.81l0.17-81.2h16.66c1.57,14.94,13.62,26.61,28.6,27.7V88.9"/>
                        <g id="XMLID_00000151525193975877125530000017888399595507205763_">
                            <path class="st0" d="M100,200C44.86,200,0,155.14,0,100C0,44.86,44.86,0,100,0c55.14,0,100,44.86,100,100    C200,155.14,155.14,200,100,200z M100,7.58C49.04,7.58,7.58,49.04,7.58,100c0,50.96,41.46,92.42,92.42,92.42    c50.96,0,92.42-41.46,92.42-92.42C192.42,49.04,150.96,7.58,100,7.58z"/>
                        </g>
                    </g>
                </svg>
            </a>

            <a href="https://www.youtube.com/">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
                <g>
                    <path class="st0" d="M168.66,65.28c-1.65-6.21-6.5-11.09-12.67-12.75C144.81,49.52,100,49.52,100,49.52s-44.81,0-55.99,3.01   c-6.17,1.66-11.02,6.55-12.67,12.75C28.35,76.53,28.35,100,28.35,100s0,23.47,2.99,34.72c1.65,6.21,6.5,11.09,12.67,12.75   c11.17,3.01,55.99,3.01,55.99,3.01s44.81,0,55.99-3.01c6.17-1.66,11.02-6.55,12.67-12.75c2.99-11.25,2.99-34.72,2.99-34.72   S171.65,76.53,168.66,65.28z M85.34,121.31V78.69L122.8,100L85.34,121.31z"/>
                    <g id="XMLID_00000142882774056608430790000001800133806802815421_">
                        <path class="st0" d="M100,200C44.86,200,0,155.14,0,100C0,44.86,44.86,0,100,0c55.14,0,100,44.86,100,100    C200,155.14,155.14,200,100,200z M100,7.58C49.04,7.58,7.58,49.04,7.58,100c0,50.96,41.46,92.42,92.42,92.42    c50.96,0,92.42-41.46,92.42-92.42C192.42,49.04,150.96,7.58,100,7.58z"/>
                    </g>
                </g>
            </svg>
            </a>
        </div>-->
        <div class="m-social-networks-contact">
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
    <div class="l-section-contact l-section-contact--row-two">
        <div class="inner">
            <?php the_field('video_contact_1'); ?>
        <!--
        <iframe width="560" height="315" src="https://www.youtube.com/embed/I7IyYhuMDwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        </div>
    </div>
</section>