<?php if( have_rows('special_features_product', 'option') ): ?>
        <ul id="product_features">
        <?php while( have_rows('special_features_product', 'option') ): the_row(); ?>
            <li id="feature">
                <div class="row_one">
                    <?php the_sub_field('special_features_icon'); ?>
                </div>
                <div class="row_two">
                    <?php echo wp_kses_post ( get_sub_field('special_features_name') ); ?>
                </div>
            </li>
        <?php endwhile;  ?>
        </ul>
    <?php endif;  ?>
<!--
<div id="product_features">
            <div id="feature">
                <div class="row_one">
                    <svg fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16c8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 30.032c-7.72 0-14-6.312-14-14.032s6.28-14 14-14 14 6.28 14 14-6.28 14.032-14 14.032zM22.386 10.146l-9.388 9.446-4.228-4.227c-0.39-0.39-1.024-0.39-1.415 0s-0.391 1.023 0 1.414l4.95 4.95c0.39 0.39 1.024 0.39 1.415 0 0.045-0.045 0.084-0.094 0.119-0.145l9.962-10.024c0.39-0.39 0.39-1.024 0-1.415s-1.024-0.39-1.415 0z"></path> </g></svg>
                </div>
                <div class="row_two">CARACTERÍSTICA ESPECIAL</div>
            </div>
            
            <div id="feature">
                <div class="row_one">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 9C19 10.45 18.57 11.78 17.83 12.89C16.75 14.49 15.04 15.62 13.05 15.91C12.71 15.97 12.36 16 12 16C11.64 16 11.29 15.97 10.95 15.91C8.96 15.62 7.25 14.49 6.17 12.89C5.43 11.78 5 10.45 5 9C5 5.13 8.13 2 12 2C15.87 2 19 5.13 19 9Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21.25 18.47L19.6 18.86C19.23 18.95 18.94 19.23 18.86 19.6L18.51 21.07C18.32 21.87 17.3 22.11 16.77 21.48L12 16L7.22996 21.49C6.69996 22.12 5.67996 21.88 5.48996 21.08L5.13996 19.61C5.04996 19.24 4.75996 18.95 4.39996 18.87L2.74996 18.48C1.98996 18.3 1.71996 17.35 2.26996 16.8L6.16996 12.9C7.24996 14.5 8.95996 15.63 10.95 15.92C11.29 15.98 11.64 16.01 12 16.01C12.36 16.01 12.71 15.98 13.05 15.92C15.04 15.63 16.75 14.5 17.83 12.9L21.73 16.8C22.28 17.34 22.01 18.29 21.25 18.47Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.58 5.98L13.17 7.15999C13.25 7.31999 13.46 7.48 13.65 7.51L14.72 7.68999C15.4 7.79999 15.56 8.3 15.07 8.79L14.24 9.61998C14.1 9.75998 14.02 10.03 14.07 10.23L14.31 11.26C14.5 12.07 14.07 12.39 13.35 11.96L12.35 11.37C12.17 11.26 11.87 11.26 11.69 11.37L10.69 11.96C9.96997 12.38 9.53997 12.07 9.72997 11.26L9.96997 10.23C10.01 10.04 9.93997 9.75998 9.79997 9.61998L8.96997 8.79C8.47997 8.3 8.63997 7.80999 9.31997 7.68999L10.39 7.51C10.57 7.48 10.78 7.31999 10.86 7.15999L11.45 5.98C11.74 5.34 12.26 5.34 12.58 5.98Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="row_two">CARACTERÍSTICA ESPECIAL</div>
            </div>
            
            <div id="feature">
                <div class="row_one">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 11V13" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 8L11.8852 8.15313L9.12188 11.8375L9.07313 11.9025C9.043 11.9427 9.07166 12 9.12188 12V12H12.8107V12C12.8887 12 12.9332 12.0891 12.8864 12.1515L12.8107 12.2525L10.157 15.7907L10 16" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 16H16V16C17.1046 16 18 15.1046 18 14V10C18 8.89543 17.1046 8 16 8V8H15" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7 16H5V16C3.89543 16 3 15.1046 3 14V10C3 8.89543 3.89543 8 5 8V8H8" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="row_two">CARACTERÍSTICA ESPECIAL</div>
            </div>
           
            <div id="feature">
                <div class="row_one">
                    <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12.56,2.17a1,1,0,0,0-1.12,0c-.3.2-7.19,5-7.19,12.08a7.75,7.75,0,0,0,15.5,0C19.75,7.05,12.85,2.36,12.56,2.17ZM12,20a5.76,5.76,0,0,1-5.75-5.75c0-5,4.21-8.77,5.75-10,1.55,1.21,5.75,5,5.75,10A5.76,5.76,0,0,1,12,20Z"></path></g></svg>
                </div>
                <div class="row_two">CARACTERÍSTICA ESPECIAL</div>
            </div>
        </div>-->