<?php
/*
 	* Template Name: Categorias
 */
get_header('shop'); ?>

<?php wp_custom_breadcrumbs(); ?>
        <div class="breadcump-category">
        	<?php echo '<div class="b-search_result_list__item_breadcrumbs breadcrumbs"></div>'; ?>
        </div> 

		<section id="classicos" class="category">
			<div class="row">
				<div class="col-md-12 no-padding">
					<div class="category-border-title"></div>
					<h2>Clássicos</h2>
					<div class="col-md-12 title-description">
						<?php echo category_description( $category_id ); ?>
						<?php $args = array( 'taxonomy' => 'product_cat' );
							$terms = get_terms('product_cat', $args);

						    $count = count($terms); 
						    if ($count > 0) {
						    	foreach ($terms as $term) {
						    		if ($term->slug === 'classicos') {
						    			echo $term->description;
						    		}
						       	} 
						    }
						?>
					</div>
					
					<?php 

						$args = array( 'post_type' => 'product', 'product_cat' => 'classicos' );
        				$loop = new WP_Query( $args ); 

					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<a href="<?php the_permalink(); ?>" titile="">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="category-img">
								<?php the_post_thumbnail('img-category'); ?>
							</div>
							<div class="category-text">
								<p><?php the_title(); ?></p>
								<?php global $woocommerce;
									$currency = get_woocommerce_currency_symbol();
									$price = get_post_meta( get_the_ID(), '_regular_price', true);
									$sale = get_post_meta( get_the_ID(), '_sale_price', true);
								?>
								<strong itemprop="price" class="price"><?php echo $product->get_price_html(); ?></strong>
							</div>
						</div>
					</a>
					<?php endwhile; ?>
			    	<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>

		<section id="nordic" class="category">
			<div class="row">
				<div class="col-md-12 no-padding">
					<div class="category-border-title"></div>
					<h2>Nordic</h2>
					<div class="col-md-12 title-description">
						<?php echo category_description( $category_id ); ?>
						<?php $args = array( 'taxonomy' => 'product_cat' );
							$terms = get_terms('product_cat', $args);

						    $count = count($terms); 
						    if ($count > 0) {
						    	foreach ($terms as $term) {
						    		if ($term->slug === 'nordic') {
						    			echo $term->description;
						    		} 
						       	} 
						    }
						?>
					</div>
					
					<?php 

						$args = array( 'post_type' => 'product', 'product_cat' => 'nordic' );
        				$loop = new WP_Query( $args ); 

					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<a href="<?php the_permalink(); ?>" titile="">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="category-img">
								<?php the_post_thumbnail('img-category'); ?>
							</div>
							<div class="category-text">
								<p><?php the_title(); ?></p>
								<?php global $woocommerce;
									$currency = get_woocommerce_currency_symbol();
									$price = get_post_meta( get_the_ID(), '_regular_price', true);
									$sale = get_post_meta( get_the_ID(), '_sale_price', true);
								?>
								<strong itemprop="price" class="price"><?php echo $product->get_price_html(); ?></strong>
							</div>
						</div>
					</a>
					<?php endwhile; ?>
			    	<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>

		<section id="soho" class="category">
			<div class="row">
				<div class="col-md-12 no-padding">
					<div class="category-border-title"></div>
					<h2>Soho</h2>
					<div class="col-md-12 title-description">
						<?php echo category_description( $category_id ); ?>
						<?php $args = array( 'taxonomy' => 'product_cat' );
							$terms = get_terms('product_cat', $args);

						    $count = count($terms); 
						    if ($count > 0) {
						    	foreach ($terms as $term) {
						    		if ($term->slug === 'soho') {
						    			echo $term->description;
						    		} 
						       	} 
						    }
						?>
					</div>
					
					<?php 

						$args = array( 'post_type' => 'product', 'product_cat' => 'soho' );
        				$loop = new WP_Query( $args ); 

					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<a href="<?php the_permalink(); ?>" titile="">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="category-img">
								<?php the_post_thumbnail('img-category'); ?>
							</div>
							<div class="category-text">
								<p><?php the_title(); ?></p>
								<?php global $woocommerce;
									$currency = get_woocommerce_currency_symbol();
									$price = get_post_meta( get_the_ID(), '_regular_price', true);
									$sale = get_post_meta( get_the_ID(), '_sale_price', true);
								?>
								<strong itemprop="price" class="price"><?php echo $product->get_price_html(); ?></strong>
							</div>
						</div>
					</a>
					<?php endwhile; ?>
			    	<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>


<?php get_footer(); ?>