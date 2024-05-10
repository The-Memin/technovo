    <div class="m-social-networks">
        <div class="m-social-item">
            <ul>
                <?php
                // Obtener el valor del campo repetidor
                $repeater_field = get_field('social_networks', 'option');

                if ($repeater_field) {
                    // Iterar sobre cada repetición del campo repetidor
                    while (have_rows('social_networks', 'option')) {
                        the_row();

                        // Obtener el valor del campo de grupo dentro de la repetición actual
                        $group_field = get_sub_field('social_item');

                        if ($group_field) {
                            // Mostrar los campos del grupo
                            echo '<li class="group-field">';

                            // Iterar sobre cada campo dentro del grupo
                            while (have_rows('social_item')) {
                                the_row();

                                // Mostrar los campos individuales dentro del grupo
                                $field1 = get_sub_field('icon');
                                $field2 = get_sub_field('url');


                                echo '<a href="' . $field2 . '">' . wp_get_attachment_image($field1) . '</a>';
                            }

                            echo '</li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="m-text-item">
            <p>// Home - TechNovo //</p>
        </div>
    </div>
    <div class="m-whatsapp">
        <?php
        $gropud_field = get_sub_field('whatsapp', 'option');
        if ($group_field) {
            // Mostrar los campos del grupo

            // Iterar sobre cada campo dentro del grupo
            while (have_rows('whatsapp', 'opction')) {
                the_row();

                // Mostrar los campos individuales dentro del grupo
                $field1 = get_sub_field('icon-wa');
                $field2 = get_sub_field('link-wa');


                echo '<a class="icon-wa" href="' . $field2 . '">' . wp_get_attachment_image($field1) . '</a>';
            }
        }
        ?>
    </div>