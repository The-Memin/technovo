<?php 
    
    $play_btnd = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve"><g><path class="st0" d="M100,0C44.86,0,0,44.86,0,100c0,55.14,44.86,100,100,100c55.14,0,100-44.86,100-100C200,44.86,155.14,0,100,0z    M79.07,145.33c0,2.06-1.68,3.73-3.73,3.73c-2.06,0-3.73-1.68-3.73-3.73V57.12c0-2.06,1.68-3.73,3.73-3.73   c2.06,0,3.73,1.68,3.73,3.73V145.33z M151.22,102.83l-50.02,42.88c-0.67,0.58-1.53,0.9-2.43,0.9c-0.54,0-1.07-0.11-1.56-0.34   c-1.32-0.61-2.17-1.94-2.17-3.39V57.12c0-1.45,0.85-2.78,2.17-3.39c1.32-0.6,2.89-0.39,3.99,0.56l50.02,42.88   c0.83,0.71,1.31,1.74,1.31,2.83C152.53,101.09,152.05,102.12,151.22,102.83z"/><polygon class="st0" points="143.06,100 102.51,65.24 102.51,134.76  "/></g></svg>';

?>

<section class="l-section-pc-tutorials">
    <h4><?php the_field('custom_pc_tutorials', false, false); ?></h4>
    <!--<h4><span>Si necesitas más ayuda revisa</span> NUESTRO TUTORIALES</h4>-->
    <div class="back-to">Regresar</div>

    <?php if( have_rows('custom_pc_tutorials_item') ): ?>
        <ul class="l-section-pc-tutorials__videos">
        <?php while( have_rows('custom_pc_tutorials_item') ): the_row(); ?>
            <li class="m-tutorial-pc">
                <div class="m-tutorial-pc m-tutorial-pc--video" style="background-image: url('<?php the_sub_field('custom_tutorial_item_preview'); ?>)">
                    <button onclick="window.dialog.showModal();">
                        <?php echo $play_btnd; ?>
                    </button>
                    
                    <dialog id="dialog">
                        <?php the_sub_field('custom_tutorial_item_video'); ?>
                        <button onclick="window.dialog.close();" aria-label="close" class="x">&times;</button>
                    </dialog>

                </div>
                <p class="m-tutorial-pc m-tutorial-pc--title"><?php echo esc_html( get_sub_field('custom_tutorial_item_title') ); ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <!--
    <div class="l-section-pc-tutorials__videos">
        <div class="m-tutorial-pc">
            <div class="m-tutorial-pc m-tutorial-pc--video" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/vid-bg.png')">
                
                <button onclick="window.dialog.showModal();">
                    <?php echo $play_btnd; ?>
                </button>
                
                <dialog id="dialog">
                    <iframe src="https://www.youtube.com/embed/an1AkP5d8sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <button onclick="window.dialog.close();" aria-label="close" class="x">&times;</button>
                </dialog>

            </div>
            <p class="m-tutorial-pc m-tutorial-pc--title">TUTORIAL 1</p>
        </div>

        <div class="m-tutorial-pc">
            <div class="m-tutorial-pc m-tutorial-pc--video" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/vid-bg.png')">
                
                <button onclick="window.dialog.showModal();">
                    <?php echo $play_btnd; ?>
                </button>   

                <dialog id="dialogo">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/an1AkP5d8sU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <button onclick="window.dialogo.close();" aria-label="close" class="x">&times;</button>
                </dialog>

            </div>
            <p class="m-tutorial-pc m-tutorial-pc--title">TUTORIAL 2</p>
        </div>
    </div>-->

</section>