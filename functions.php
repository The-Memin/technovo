<?php

//add actions
/////////////
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );//add to the header the related styles files
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );//add to the very bottom of the html the related code files
add_action( 'after_setup_theme', 'woocommerce_support' );//add woocommerce support
//add_action( 'template_redirect', 'remove_woocommerce_styles_scripts', 999 );// remove all scripts from none woocommerce pages
add_action( 'wp_head', 'gtm',20 );//add gtm tag
add_action('woocommerce_after_shop_loop_item', 'nuevo_boton', 7);
add_action('woocommerce_after_shop_loop_item', 'close_div', 11);

add_action('woocommerce_before_shop_loop','open_div_shop', 19);//add an open div shop to contain order and sorting
add_action('woocommerce_before_shop_loop','open_and_close_div_shop', 31);//row
add_action('woocommerce_before_shop_loop','woocommerce_pagination', 32);//row
add_action('woocommerce_before_shop_loop','close_div_shop', 33);//add an close div shop to contain order and sorting
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_new', 11);

//add_action('woocommerce_before_single_product_summary', 'galeriaImagenes', 20);
//add_action('woocommerce_single_product_summary', 'product_title', 5);
//add_action('woocommerce_single_product_summary', 'product_code', 6);
//add_action('woocommerce_single_product_summary', 'product_price', 10);
//add_action('woocommerce_single_product_summary', 'product_payments', 31);
//add_action('woocommerce_single_product_summary', 'product_specs', 40);
add_action('woocommerce_after_single_product_summary', 'product_reasons', 15);
//add_action('woocommerce_after_single_product_summary', 'product_banner', 16);
//add_action('woocommerce_after_single_product_summary', 'product_features', 17);
//add_action('woocommerce_after_single_product_summary', 'product_faq', 18);
//add_action('woocommerce_after_single_product_summary', 'product_banner_two', 19);

add_action('woocommerce_before_main_content', 'mini_cart_button', 9);
add_action('wp_ajax_update_mini_cart', 'update_mini_cart');/*--Carrito---*/
add_action('wp_ajax_nopriv_update_mini_cart', 'update_mini_cart');
add_action('wp_ajax_update_total_cart', 'update_total_cart');
add_action('wp_ajax_nopriv_update_total_cart', 'update_total_cart');
add_action('wp_footer','custom_jquery_add_to_cart_script');
//add_action('woocommerce_single_product_summary', 'product_data', 65);

add_action('hook_product_info_moved', 'woocommerce_template_single_excerpt', 20);
add_action('hook_product_info_moved', 'woocommerce_template_single_add_to_cart', 30);


remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);


//add Filters
//////////////
add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );//remove fields from 
add_filter('upload_mimes', 'allow_svg_upload');
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

//add Functions
///////////////


function custom_jquery_add_to_cart_script(){
    if ( is_shop() || is_product_category() || is_product_tag() ): // Only for archives pages
        ?>
            <script type="text/javascript">
                (function($){ 

                    $( document.body ).on( 'added_to_cart', function(){
                        console.log('EVENT: added_to_cart');
                        $(".background-mini-cart").addClass("visible-background");
                        $(".mini-cart-visible-1").addClass("visible-1");
                        setTimeout(() =>{
                            $(".mini-cart").addClass("visible-cart");
                        }, 500);
                        $("body").addClass("no-scroll");
                    });

                })(jQuery);
            </script>
        <?php
    endif;
}?>
<?php 


function mini_cart_button(){

    ob_start();
    get_template_part('template-parts/mini-cart', 'mini-cart-button');
    return ob_get_clean();

    load_template('./template-parts/mini-cart/content-mini-cart-button.php');

}

function format_price_with_k() {

    $total_cart = WC()->cart->subtotal;
    
    if ($total_cart >= 1000) {
    
        return number_format($total_cart / 1000, 1) . 'K';
    } else {
        return wc_price($total_cart);
    }
}

function update_mini_cart() {
    echo WC()->cart->get_cart_contents_count();
    die();
}

function update_total_cart() {
    echo format_price_with_k();
    die();
}


function open_div_shop() {
    echo '<div class="l-container-top-archive"><div class="l-container-top-archive__row-one">';
}

function open_and_close_div_shop() {
    echo '</div><div class="l-container-top-archive__row-two">';
}

function close_div_shop() {
    echo '</div></div>';
}

add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}



add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}



function add_content_after_addtocart() {
  $current_product_id= get_the_ID();
  $product = wc_get_product($current_product_id);
  $checkout_url = WC()->cart->get_checkout_url();
  if($product->is_type('simple')){
    echo '<a href="'.$checkout_url.'?add-to-cart='.$current_product_id.'" class="buy_now">Comprar Ahora</a>';
  }
}

//add_action('woocommerce_after_add_to_cart_button', 'add_content_after_addtocart');



    foreach( wp_get_post_terms( get_the_id(), 'product_cat' ) as $term ){
        if( $term ){
            echo $term->name . '<br>'; // product category name
            if ($term->description)
                echo $term->description . '<br>'; // Product category description
        }
    }





function woo_remove_product_tabs ($tabs) {
  //unset ( $tabs['reviews'] );
  //unset ( $tabs['additional_information'] );
  
}

//add_filter('woocommerce_product_single_add_to_cart_text','custom_add_to_cart_button_woocommerce');
function custom_add_to_cart_button_woocommerce() {
return __('', 'woocommerce');
}

function nuevo_boton(){
   
  global $product;

  $id = $product->get_id();  

  if(106 === $id){
    //echo '<div class="l-btn-container"><a class="view_more_button" href="'. get_permalink() .'"> Ver  <span> Más</span></a>';
    echo '<div class="l-btn-container"><a class="view_more_button" href="'. get_permalink() .'"> Ver  <span> Más</span></a>';
  }else{
    echo '<div class="l-btn-container"><a class="view_more_button" href=""> Ver  <span> Más</span></a>';
  }
};

add_filter('woocommerce_loop_product_link','test_id');

function test_id($link){

    global $product;

    $id = $product->get_id(); 

    if(106 === $id){
        $link = $link;
    }else{
        $link = '';
    }

}

function close_div(){

    echo '</div>';

}

function woocommerce_add_to_cart_button_text_archives() {
    return __('', 'woocommerce' );
}


function product_category_selector_shortcode() {
  ob_start();
  ?>
  <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
      <?php
          $categories = get_terms('product_cat'); 
          if ($categories && !is_wp_error($categories)) {
              echo '<select name="product_cat" id="product-cat">';
              echo '<option value="">Todas las Categorías</option>';
              foreach ($categories as $category) {
                  echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
              }
              echo '</select>';
          }
      ?>
      <input type="submit" value="Filtrar">
  </form>
  <?php
  return ob_get_clean();
}
add_shortcode('product_category_selector', 'product_category_selector_shortcode');







function wpt_theme_styles() {// get the necesary files for the style of the theme

	//wp_enqueue_style( 'googlefont2_css', 'https://fonts.googleapis.com/css?family=Itim&text=Woof%26',20 );
  wp_enqueue_style( 'fonts', "https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap", '20' );

  wp_enqueue_style( 'genos', "https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", '20' );

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', 'all' );
  
  wp_enqueue_style( 'flexslider_css', get_template_directory_uri() . '/flexslider.css', 'all' );

  wp_enqueue_style( 'boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', '20' );
	
  // Remove woocommerce styles from non Woocomemrce pages
  /*if ( function_exists( 'is_woocommerce' ) ) {
      if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
         wp_dequeue_style( 'wc-gateway-ppec-frontend-cart' );
       }
     }*/
     
}


function wpt_theme_js() {// get the necesary code files for the theme to work 
    wp_enqueue_script('jquery');
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/code/general/code.js', array('jquery'), '', true );
    //wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/code/general/jquery.flexslider.js', array('jquery'), '', true );
    //wp_enqueue_script( 'flexslider2', get_template_directory_uri() . '/assets/code/general/jquery.flexslider-min.js', array('jquery'), '', true );
	
  
  // load custom code on page based on template name
  if(is_page()){ //Check if we are viewing a page
    global $wp_query;
   
          //Check which template is assigned to current page we are looking at
    $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    if($template_name == 'page-templates/page-contact.php'){
             //If page is draggable
       wp_enqueue_script('prueba_contact', 'https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js','', true);   
    }
  }

    if (is_product() && is_cart()) {
        
        wc_enqueue_js(
            "$(document).on( 'click', 'button.plus, button.minus', function() {
                    var qty = $( this ).parent( '.quantity' ).find( '.qty' );
                    var val = parseFloat(qty.val());
                    var max = parseFloat(qty.attr( 'max' ));
                    var min = parseFloat(qty.attr( 'min' ));
                    var step = parseFloat(qty.attr( 'step' ));
                    if ( $( this ).is( '.plus' ) ) {
                        if ( max && ( max <= val ) ) {
                        qty.val( max ).change();
                        } else {
                        qty.val( val + step ).change();
                        }
                    } else {
                        if ( min && ( min >= val ) ) {
                        qty.val( min ).change();
                        } else if ( val > 1 ) {
                        qty.val( val - step ).change();
                        }
                    }
                });"
        );
    }
    

}
function woocommerce_support() {// add support
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    //add_theme_support( 'menus' );
    //add_theme_support( 'post-thumbnails' );
}

function gtm(){ //add google tag mannager?>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5MPFZLK');</script>
      <!-- End Google Tag Manager -->  
<?php }

/************************************************************
*********************WOOCOMMERCE*****************************
********help functions to start any soowommerce store*******
***********************************************************/



function custom_remove_woo_checkout_fields( $fields ) {//remove fields from checkout
   if ( function_exists( 'is_woocommerce' ) ) {
      // remove billing fields
      //unset($fields['billing']['billing_first_name']);
      unset($fields['billing']['billing_last_name']);
      unset($fields['billing']['billing_company']);
      //unset($fields['billing']['billing_address_1']);
      //unset($fields['billing']['billing_address_2']);
      //unset($fields['billing']['billing_city']);
      //unset($fields['billing']['billing_postcode']);
      //unset($fields['billing']['billing_country']);
      //unset($fields['billing']['billing_state']);
      unset($fields['billing']['billing_phone']);
      //unset($fields['billing']['billing_email']);
      
      
      // remove order comment fields
      unset($fields['order']['order_comments']);
      
      return $fields;
  }
}

function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}


if( function_exists('acf_add_options_page') ) {
    
acf_add_options_page(array(
    'page_title'    => 'Configurador PC',
    'menu_title'    => 'Configurador PC',
    'menu_slug'     => 'configurador-pc',
    'capability'    => 'edit_posts',
    'redirect'      => false
));  
  
acf_add_options_page(array(
      'page_title'    => 'Contenido editable',
      'menu_title'    => 'Contenido editable general',
      'menu_slug'     => 'contenido-editable',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Sigenos en redes',
        'menu_title'    => 'Sigenos en redes',
        'parent_slug'   => 'contenido-editable',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Página de Inicio',
        'menu_title'    => 'Página de Inicio',
        'parent_slug'   => 'contenido-editable',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Redes Sociales',
        'menu_title'    => 'Redes Sociales',
        'parent_slug'   => 'contenido-editable',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Tienda',
        'menu_title'    => 'Tienda',
        'parent_slug'   => 'contenido-editable',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Producto',
        'menu_title'    => 'Producto',
        'parent_slug'   => 'contenido-editable',
    ));

}


function prueba(){

    echo "hola";

}

/**
 * Shortcode - Render Woocommerce login/register form
 **/
add_shortcode('woo-login', function () {

    if (is_user_logged_in()) {
    } else {
        ob_start();
        echo '<div class="woocommerce">';
        wc_get_template('myaccount/form-login.php');
        echo '</div>';

        return ob_get_clean();
    }
});


/**
 * Mitigate theme before render
 **/
add_action('template_redirect', function () {

    global $post;

    if (has_shortcode($post->post_content, 'woo-login')) {
        // Add Woocommerce body classes
        add_filter('body_class', function ($body_classes) {
            $body_classes[] = 'woocommerce-account';
            $body_classes[] = 'woocommerce-page';

            return $body_classes;
        });
    }
});

/**
 * Change number of products that are displayed per page (shop page)
 */
//add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols = 2;
  return $cols;
}


add_filter('woocommerce_pagination_args', 'change_next_prev_icons');

function change_next_prev_icons($args){

    $args['prev_text'] = '<div class="m-prev-btn"><div class="m-prev-btn__icon"></div></div>';
    $args['next_text'] = '<div class="m-next-btn"><div class="m-next-btn__icon"></div></div>';

    return $args;

}

function woocommerce_template_loop_product_title_new()
{

    $title = get_the_title();

    $trim_title = wp_trim_words( $title, 5 );

    echo '<h2 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . $trim_title . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}


function product_reasons()
{

    ob_start();
    get_template_part('template-parts/content', 'product-reasons');
    return ob_get_clean();

    load_template('./template-parts/content-product-reasons.php');

}

/*function product_banner()
{
    echo ('
    <div id="product_banner" style="background-image: url(' . get_template_directory_uri() . '/assets/img/product_banner.png)"><div class=""></div></div>    
    '); 

}*/
/*
function product_features()
{

    if( have_rows('special_features_product') ):
        echo '<ul id="product_features">';
        while( have_rows('special_features_product') ): the_row(); 
            echo '<li id="feature">';
                echo '<div class="row_one">';
                    the_sub_field('special_features_icon');
                echo '</div>';
                echo '<div class="row_two">';
                    echo wp_kses_post ( get_sub_field('special_features_name') );
                echo '</div>';
            echo '</li>';
        endwhile; 
        echo '</ul>';
    endif; 

    echo ('
    
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
        </div>
    
    ');
}
*/
/*function product_faq()
{

    echo ('

    <h4 id="faq_title"><span>PREGUNTAS</span> FRECUENTES</h4>
    <div class="accordion_faq"> 
        <div class="accordion-header_faq header-1">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Cuánto dura la batería?
        </div>
        <div class="accordion-content_one_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-2">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Es compatible con iphone?
        </div>
        <div class="accordion-content_two_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-3">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Es resistente al agua?</div>
        <div class="accordion-content_three_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-4">
            <div class="accordion_btn_faq">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
            </div>
            ¿Se puede usar como manos libres?
            </div>
        <div class="accordion-content_four_faq">
            Lorem ipsum.
        </div>
        <hr>

        <div class="accordion-header_faq header-5">
        <div class="accordion_btn_faq">
            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
        </div>
        ¿Está construido en plático o metal?
        </div>
    <div class="accordion-content_five_faq">
        Lorem ipsum.
    </div>
    <hr>

    <div class="accordion-header_faq header-6">
    <div class="accordion_btn_faq">
        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
    </div>
    ¿Cuentan con envío a toda la República?
    </div>
<div class="accordion-content_six_faq">
    Lorem ipsum.
</div>
<hr>
        
    
    
    </div>');
}*/

/*function product_banner_two()
{

    global $product;

    $product_id = $product->get_id();
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');

    echo ('
    <div id="product_banner_two">
        <div class="row_one">
            <img src= "' . $image[0] . '"/>
        </div>
        <div class="row_two">
            <h4><span>¿BUSCAS OTRA VERSIÓN </span> DE ESTE PRODUCTO?</h4>
            <p>Contacta a nuestro equipo, con gusto te ayudaremos a encontrar lo que necesitas.</p>
            <div class="btn">
                <div class="btn__item">CONTÁCTANOS</div>
                <div class="btn__item">DESCARGAR LISTA DE PRECIOS</div>
            </div>
        </div>
    </div>    
    ');
}*/

add_action('woocommerce_after_quantity_input_field', 'rk_display_quantity_plus');
add_action('woocommerce_before_quantity_input_field', 'rk_display_quantity_minus');

/**
 * Display plus button after Add to Cart button.
 */
function rk_display_quantity_plus() {
    echo '<button type="button" class="plus">+</button>';
}
/**
 * Display minus button before Add to Cart button.
 */
function rk_display_quantity_minus() {
    echo '<button type="button" class="minus">-</button>';
}


add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
    // Uncomment to view format of $toolbars
    /*
    echo '< pre >';
        print_r($toolbars);
    echo '< /pre >';
    die;
    */

    // Add a new toolbar called "Very Simple"
    // - this toolbar has only 1 row of buttons
    $toolbars['Very Simple' ] = array();
    $toolbars['Very Simple' ][1] = array('bold', 'italic', 'underline', 'forecolor');

    $toolbars['Empty' ] = array();
    $toolbars['Empty' ][2] = array();

    // Edit the "Full" toolbar and remove 'code'
    // - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
    if( ($key = array_search('code' , $toolbars['Full' ][3])) !== false )
    {
        unset( $toolbars['Full' ][3][$key] );
    }

    // remove the 'Basic' toolbar completely
    unset( $toolbars['Basic' ] );

    // return $toolbars - IMPORTANT!
    return $toolbars;
}

function remove_acf_wysiwyg_toolbar($field) {
    // Check if the field is a Text Window field
    if ($field['type'] === 'textarea') {
        // Remove the toolbar
        $field['toolbar'] = 'no';
    }
    return $field;
}

add_filter('acf/render_field/type=textarea', 'remove_acf_wysiwyg_toolbar');


function intelGamaBaja() {
    // Tu lógica de procesamiento aquí
    $respuesta = array(
        'mensaje' => '¡La petición AJAX fue exitosa!'
    );
    wp_send_json($respuesta);
}
add_action('wp_ajax_mi_ajax', 'intelGamaBaja');
add_action('wp_ajax_nopriv_mi_ajax', 'intelGamaBaja');




function enqueue_admin_custom_css(){
    wp_enqueue_style( 'admin-custom', get_stylesheet_directory_uri() . '/assets/css/admin-custom.css' );
}

add_action('admin_enqueue_scripts', 'enqueue_admin_custom_css');


add_filter('woocommerce_package_rates', 'change_shipping_method_based_on_cart_total', 9999, 2);
function change_shipping_method_based_on_cart_total($rates, $package)
{

    // set the shipping class id to exclude
    $shipping_class_id = 150;

    // initializes the total cart of products
    $total_cart = 0;

    foreach (WC()->cart->get_cart() as $cart_item) {
        $product = $cart_item['data'];
        // if the product has the shipping class id equal to "$shipping_class_id" it is excluded from the count
        if ($product->get_shipping_class_id() == $shipping_class_id) {
            continue;
        }
        $qty = $cart_item['quantity'];
        $price = $cart_item['data']->get_price();
        // add the product line total to the total
        $total_cart += $price * $qty;
    }

    if($total_cart >= 50001){
        //unset($rates['flat_rate:2']);//350
        unset($rates['flat_rate:4']);//300
        unset($rates['flat_rate:5']);//225
        unset($rates['flat_rate:6']);//185
        unset($rates['flat_rate:7']);//125
        unset($rates['flat_rate:8']);//90
    }

    if ($total_cart > 18001 && $total_cart <= 50000) {
        unset($rates['flat_rate:2']); //350
        //unset($rates['flat_rate:4']); //300
        unset($rates['flat_rate:5']); //225
        unset($rates['flat_rate:6']); //185
        unset($rates['flat_rate:7']); //125
        unset($rates['flat_rate:8']);//90
    }

    if ($total_cart > 10001 && $total_cart <= 18001) {
        unset($rates['flat_rate:2']); //350
        unset($rates['flat_rate:4']); //300
        //unset($rates['flat_rate:5']); //225
        unset($rates['flat_rate:6']); //185
        unset($rates['flat_rate:7']); //125
        unset($rates['flat_rate:8']);//90
    }

    if ($total_cart > 3501 && $total_cart <= 10001) {
        unset($rates['flat_rate:2']); //350
        unset($rates['flat_rate:4']); //300
        unset($rates['flat_rate:5']); //225
        //unset($rates['flat_rate:6']); //185
        unset($rates['flat_rate:7']); //125
        unset($rates['flat_rate:8']);//90
    }

    if ($total_cart > 2501 && $total_cart <= 3501) {
        unset($rates['flat_rate:2']); //350
        unset($rates['flat_rate:4']); //300
        unset($rates['flat_rate:5']); //225
        unset($rates['flat_rate:6']); //185
        //unset($rates['flat_rate:7']); //125
        unset($rates['flat_rate:8']);//90
    }

    if ($total_cart <= 2501) {
        unset($rates['flat_rate:2']); //350
        unset($rates['flat_rate:4']); //300
        unset($rates['flat_rate:5']); //225
        unset($rates['flat_rate:6']); //185
        unset($rates['flat_rate:7']); //125
        //unset($rates['flat_rate:8']);//90
    }

    return $rates;
}

//add_filter('woocommerce_product_get_price', 'woocommerce_change_price_by_addition', 10, 2);

function woocommerce_change_price_by_addition($price, $product)
{

    // change the price by adding the 35 
    $price = ($price * 0.5);

    //return the new price
    return  $price;
}
require_once get_template_directory() . '/AJAX/ajax-functions.php';

add_action( 'wp_enqueue_scripts', 'my_ajax_script' );
function my_ajax_script() {
    wp_enqueue_script( 'my-ajax-script', get_template_directory_uri() . 'assets/code/general/getProcesadores.js', array('jquery') );
    wp_enqueue_script( 'my-ajax-script', get_template_directory_uri() . 'assets/code/general/getCompatibles.js', array('jquery') );
    wp_localize_script( 'my-ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}


?>

