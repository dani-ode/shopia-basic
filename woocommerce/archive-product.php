<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<?php get_template_part('/template-parts/navbar/navshop');?>

<?php if ( wp_is_mobile() ): ?>

	<article class="container p-0">
<?php else: ?>
	<br>
	<article class="container">
<?php endif ?>

	<div class="row">
		<div class="col-3 d-none d-md-block">
			<div class="all-content-cat bg-white m-2 mt-0 mb-5 rounded">
				<ul class="list-group">
					<?php
					
					$taxonomy     = 'product_cat';
					$orderby      = 'name';  
					$show_count   = 1;      // 1 for yes, 0 for no
					$pad_counts   = 0;      // 1 for yes, 0 for no
					$hierarchical = 1;      // 1 for yes, 0 for no  
					$title        = '';  
					$empty        = 0;

					$args = array(
						'taxonomy'     => $taxonomy,
						'orderby'      => $orderby,
						'show_count'   => $show_count,
						'pad_counts'   => $pad_counts,
						'hierarchical' => $hierarchical,
						'title_li'     => $title,
						'hide_empty'   => $empty
					);
					$all_categories = get_categories( $args );
					
					//Check if current category has subcategories
					function category_has_children( $term_id = 0, $taxonomy = 'product_cat' ) {
					$children = get_categories( array( 
						'child_of'      => $term_id,
						'taxonomy'      => $taxonomy,
						'hide_empty'    => false,
						'fields'        => 'ids',
						) );
						return ( $children );
					}
						
					foreach ($all_categories as $cat) {
					if($cat->category_parent == 0 ) {
						$category_id = $cat->term_id; 

						if( category_has_children( $category_id ) ):
							echo '<a class="list-group-item text-v-d d-none" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
							<path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
							</svg> '. $cat->name .'</a>';
						else:
							echo '<a class="list-group-item text-v-d" href="'. get_term_link($cat->slug, 'product_cat') .'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
							<path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
							</svg> '. $cat->name .'</a>';
						endif;



						$args2 = array(
								'taxonomy'     => $taxonomy,
								'child_of'     => 0,
								'parent'       => $category_id,
								'orderby'      => $orderby,
								'show_count'   => $show_count,
								'pad_counts'   => $pad_counts,
								'hierarchical' => $hierarchical,
								'title_li'     => $title,
								'hide_empty'   => $empty
						);
						$sub_cats = get_categories( $args2 );
								if($sub_cats) {
									foreach($sub_cats as $sub_category) {
										echo  '<a class="list-group-item text-v-d" href="'. get_term_link($sub_category->slug, 'product_cat') .'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
										<path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
										</svg> '. $sub_category->name .'</a>';
									}
								}
					}       
					}
					?>
				</ul>
			</div>
		</div>


		<div class="col product-arhive-canvas bg-white rounded p-3 mb-5">
			<div class="all-content">
			<?php 
			/**
			 * Hook: woocommerce_before_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 * @hooked WC_Structured_Data::generate_website_data() - 30
			 */
			do_action( 'woocommerce_before_main_content' );

			?>
			<section class="woocommerce-products-header">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>

				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				?>
			</section>

			<?php 
			if ( woocommerce_product_loop() ) {
			
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			
				woocommerce_product_loop_start();
			
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
			
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' );
			
						wc_get_template_part( 'content', 'product' );
					}
				}
			
				woocommerce_product_loop_end();
			
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}
			
			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
			
			/**
			 * Hook: woocommerce_sidebar.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			//do_action( 'woocommerce_sidebar' );
			?>
			</div>
		</div>
	</div>
	
</article>
<?php

get_template_part('/template-parts/footer/footershop');
get_footer( 'shop' );
