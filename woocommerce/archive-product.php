<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<header class="woocommerce-products-header">
	<?php if (apply_filters('woocommerce_show_page_title', false)) : ?>
		<h1 class="woocommerce-products-header__title page-title">
			<?php woocommerce_page_title(); ?>
		</h1>
	<?php endif; ?>



	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>

<?php get_template_part('template-parts/shop/content', 'shop-offers'); ?>

<hr class="hrTienda">

<?php get_template_part('template-parts/mini-cart/content', 'mini-cart-button'); ?>

<div class="filtro_productos">

	<div class="filtro">
		<?php echo do_shortcode('[woocommerce_product_filter update_address_bar="no" placeholder="¿Que estás buscando?"]') ?>
		<?php echo do_shortcode('[woocommerce_product_filter_category show_heading="no" style="inline" show_thumbnails="yes" depth="1" exclude="15"]') ?>

		<div class="main-open-filter flex-normal">

			<p>Filtrar productos</p>

			<div class="m-btn m-btn--border m-btn--icon show-filter flex-normal">

				<div class="txt">Abrir flitros</div>

				<div class="icon">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.9 321.9" style="enable-background:new 0 0 321.9 321.9;" xml:space="preserve">
						<g>
							<g>
								<g>
									<path d="M128.25,175.6c1.7,1.8,2.7,4.1,2.7,6.6v139.7l60-51.3v-88.4c0-2.5,1-4.8,2.7-6.6L295.15,65H26.75L128.25,175.6z"></path>
									<rect x="13.95" y="0" width="294" height="45"></rect>
								</g>
							</g>
						</g>
					</svg>

				</div>

			</div>

		</div>

	</div>

</div>



<div class="catalogo l-sec">

	<div class="filtros" id="filter-container">

		<div class="close close-filter-box">&times;</div>

		<div class="mobile-info">

			<h4>Filtra los productos

				<span class="icon">

					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 321.9 321.9" style="enable-background:new 0 0 321.9 321.9;" xml:space="preserve">
						<g>
							<g>
								<g>
									<path d="M128.25,175.6c1.7,1.8,2.7,4.1,2.7,6.6v139.7l60-51.3v-88.4c0-2.5,1-4.8,2.7-6.6L295.15,65H26.75L128.25,175.6z" />
									<rect x="13.95" y="0" width="294" height="45" />
								</g>
							</g>
						</g>
					</svg>

				</span>

			</h4>

			<p class="mini">Puedes usar más de un filtro al mismo tiempo</p>

			<div class="close-filters flex-normal">

				<p>Productos filtrados</p>

				<div class="m-btn m-btn--border close-filter-box">Ver productos</div>

			</div>

		</div>


		<?php echo do_shortcode('[woocommerce_product_filter_price]') ?>
		<?php //echo do_shortcode('[product_category_selector]') 
		?>
		<?php echo do_shortcode('[woocommerce_product_filter_category exclude="15" auto_expand="no"]') ?>
		<?php //echo do_shortcode('[woocommerce_product_filter_attribute attribute="Marca"]') 
		?>
		<?php echo do_shortcode('[woocommerce_product_filter_sale]') ?>
		<?php echo do_shortcode('[woocommerce_product_filter_reset show_heading="no" submit_button_label="Quitar filtros"]') ?>

	</div>
	<div class="productos-container">

		<?php
		if (woocommerce_product_loop()) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action('woocommerce_before_shop_loop');

			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action('woocommerce_after_shop_loop');
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action('woocommerce_no_products_found');
		}


		/**
		 * Hook: woocommerce_after_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');

		?>

		<!-- test redd -->
	<!-- test redd -->


	<?php

	get_template_part('template-parts/content', 'banner');

	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	do_action('woocommerce_sidebar');

	get_footer('shop'); ?>