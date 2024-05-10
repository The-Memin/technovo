<?php

/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;

$rf = '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
    <g>
        <path class="st0" d="M200,42.98c-1.43,4.77-2.92,9.53-4.3,14.31c-6.36,22.17-12.69,44.36-19.04,66.53
        c-1.19,4.15-2.98,5.48-7.33,5.48c-34.44,0-68.87,0-103.31,0c-4.69,0-7.41,2.15-7.41,5.86c-0.01,3.69,2.74,5.86,7.41,5.86
        c34.37,0,68.74,0,103.12,0c4.69,0,7.41,2.16,7.41,5.86c0,3.7-2.73,5.86-7.41,5.86c-2.47,0-4.93,0-7.9,0
        c10.98,2.89,16.38,10.51,14.99,20.59c-1.11,8.07-8.91,14.61-17.32,14.55c-9.13-0.07-16.44-6.78-17.36-16.24
        c-0.76-7.78,4.1-16.5,15.08-18.81c-26.16,0-51.9,0-77.65,0c4.78,1.07,8.76,3.41,11.57,7.46c2.79,4.03,3.67,8.52,2.85,13.37
        c-1.34,8.03-9.38,14.54-17.63,14.21c-9.36-0.38-16.4-7.27-17.12-16.75c-0.65-8.51,5.65-16.27,14.72-18.38
        c-2.8,0-5.6,0.03-8.41-0.01c-8.29-0.1-14.92-4.89-17.25-12.43c-2.47-7.99,0.98-16.48,8.33-20.51c0.45-0.25,0.88-0.51,1.41-0.82
        c-7.05-31.7-14.08-63.35-21.14-95.13c-3.26,0-6.44,0-9.62,0c-6.84,0-13.67,0.04-20.51-0.02c-4.48-0.04-7.35-4.07-5.74-8
        c0.95-2.32,2.78-3.66,5.28-3.67c11.72-0.05,23.44-0.07,35.15,0c3.26,0.02,5.23,1.9,6.01,5.34c1.35,5.95,2.67,11.91,4.04,18.06
        c0.86,0,1.69,0,2.52,0c46.22,0,92.44,0.03,138.66-0.05c3.63-0.01,6.31,0.97,7.87,4.35C200,40.9,200,41.94,200,42.98z M186.34,47.41
        c-44.39,0-88.53,0-132.78,0c5.22,23.47,10.4,46.79,15.58,70.07c32.51,0,64.83,0,97.18,0C172.99,94.11,179.65,70.83,186.34,47.41z
        M82.02,170.31c-0.01-3.19-2.68-5.84-5.86-5.83c-3.19,0.01-5.84,2.68-5.83,5.86c0.01,3.19,2.68,5.84,5.86,5.83
        C79.38,176.16,82.03,173.49,82.02,170.31z M164.83,170.28c-0.03-3.19-2.7-5.82-5.89-5.8c-3.19,0.03-5.82,2.7-5.8,5.89
        c0.03,3.19,2.7,5.82,5.89,5.8C162.22,176.14,164.86,173.46,164.83,170.28z"></path>
    </g>
</svg>';

echo apply_filters(
    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
    sprintf(
        '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
        //esc_url($product->add_to_cart_url()),
        '',
        esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
        esc_attr(isset($args['class']) ? $args['class'] : 'button'),
        isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
        //esc_html($product->add_to_cart_text())
        $rf
    ),
    $product,
    $args
);
