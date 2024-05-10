<section class="l-section-billing-tutorials">
    <div class="m-title m-title--billing-tutorials">
        <code><?php the_field('title_billing_tutorials'); ?></code>
    </div>
    <div class="l-section-billing-tutorials--rows">

        <?php if( have_rows('billing_tutorials') ): ?>
            <ul class="slides_billing_tutorials">
            <?php while( have_rows('billing_tutorials') ): the_row(); 
                ?>
                <li>
                    <div class="m-tutorial">

                        <div class="m-tutorial--video" onclick="window.video.showModal()" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/vid-bg.jpg)">
                            <div class="inner">
                                <div class="m-overlay"></div>
                                <img width="1" height="1" src="<?php echo get_template_directory_uri() ?>/assets/img/Play-video-Edit.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async">
                            </div>
                        </div>

                        <dialog id="video">
                            <?php the_sub_field('billing_video_tutorial'); ?>
                            <button onclick="window.video.close()" aria-label="close" class="x">❌</button>
                        </dialog>
                        <div class="m-tutorial--title">
                            <p><?php echo esc_html( get_sub_field('billing_video_title') ); ?></p>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <!--
        <div class="m-tutorial">

            <div class="m-tutorial--video" onclick="window.video.showModal()" style="background-image: url(<?php //echo get_template_directory_uri() ?>/assets/img/vid-bg.jpg)">
                <div class="inner">
                    <div class="m-overlay"></div>
                    <img width="1" height="1" src="<?php //echo get_template_directory_uri() ?>/assets/img/Play-video-Edit.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async">
                </div>
            </div>

            <dialog id="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/an1AkP5d8sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <button onclick="window.video.close()" aria-label="close" class="x">❌</button>
            </dialog>
            <div class="m-tutorial--title">
                <p>Tutorial 1</p>
            </div>
        </div>

        <div class="m-tutorial">

            <div class="m-tutorial--video" onclick="window.video.showModal()" style="background-image: url(<?php //echo get_template_directory_uri() ?>/assets/img/vid-bg.jpg)">
                <div class="inner">
                    <div class="m-overlay"></div>
                    <img width="1" height="1" src="<?php //echo get_template_directory_uri() ?>/assets/img/Play-video-Edit.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async">
                </div>
            </div>

            <dialog id="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/an1AkP5d8sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <button onclick="window.video.close()" aria-label="close" class="x">❌</button>
            </dialog>
            <div class="m-tutorial--title">
                <p>Tutorial 4</p>
            </div>
        </div>

        <div class="m-tutorial">

            <div class="m-tutorial--video" onclick="window.video.showModal()" style="background-image: url(<?php //echo get_template_directory_uri() ?>/assets/img/vid-bg.jpg)">
                <div class="inner">
                    <div class="m-overlay"></div>
                    <img width="1" height="1" src="<?php //echo get_template_directory_uri() ?>/assets/img/Play-video-Edit.svg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async">
                </div>
            </div>

            <dialog id="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/an1AkP5d8sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <button onclick="window.video.close()" aria-label="close" class="x">❌</button>
            </dialog>
            <div class="m-tutorial--title">
                <p>Tutorial 3</p>
            </div>
        </div>
    </div>
                -->
</section>