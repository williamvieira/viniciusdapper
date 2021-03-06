<?php
/*
 	* Template Name: Eng Homepage 
 */
get_header(); 
?>


<?php wp_footer(); ?>
	<!-- Banner -->
	<div class="container-fluid no-padding">
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>



		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
				<div class="item active">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner.png" style="width:100%;" class="desktopbanner">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner_mobile.png" style="width:100%;" class="mobilebanner">
			    </div>
			    <div class="item">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner2.png" style="width:100%;" class="desktopbanner">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner2_mobile.png" style="width:100%;" class="mobilebanner">
			    </div>
			    <div class="item">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner3.png" style="width:100%;" class="desktopbanner">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner3_mobile.png" style="width:100%;" class="mobilebanner">
			    </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
	    </div>
	</div>

	<!-- Produtos em Destaque -->
	<section class="product-featured">
		<div class="container-fluid">
			<div class="row">
				<h2>Featured Products</h2>
				<div class="col-md-12 col-sm-12">
				<?php
					$args = array( 'post_type' => 'product', 'posts_per_page' => 3,  'product_cat' => 'destaques','orderby' => 'desc' );
		        	$loop = new WP_Query( $args );
		        	while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
		        	
						<div class="col-md-4 col-sm-4">
							<a href="<?php the_permalink(); ?>">
							<div class="product-featured-body">
								<?php the_post_thumbnail(); ?>
								<p><?php the_title(); ?></p>
								
									<?php global $woocommerce;
										$currency = get_woocommerce_currency_symbol();
										$price = get_post_meta( get_the_ID(), '_regular_price', true);
										$sale = get_post_meta( get_the_ID(), '_sale_price', true);
									?>

									<strong itemprop="price" class="price"><?php echo $product->get_price_html(); ?></strong>
									
							</div>
							</a>
						</div>
					
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="campaign-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 txt-campaign">
					<div class="content-campaign">
						<h3>Made by hands passionate by shoes</h3>
						<!-- <p>Made by hands passionate by shoes</p> -->
						<a href="<?php echo get_home_url(); ?>/news/"><button class="btn-style-white"> Enter </button></a>
					</div>
				</div>		
				<div class="col-md-4 bg-campaign"></div>		
			</div>
		</div>
	</section>

	<section id="sobre" class="autor-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 autor-photo">
					<img src="<?php bloginfo('template_directory');?>/img/viniciusdapper.png" alt="">
				</div>

	            <?php $postid = get_the_ID(); ?>
	            <?php $key = 'resumo'; $resumo = get_post_meta($postid, $key, TRUE);?>
	            <?php $key2 = 'newsletter'; $newsletter = get_post_meta($postid, $key2, TRUE);?>
	          

				<div class="col-md-4 txt-autor">
					<h3>Vinícius Dapper</h3>
					<p>
					<?php echo $resumo ?></p>
					<button class="btn-style-black"><a href="<?php echo get_site_url(); ?>/about">About</a></button>
				</div>
			</div>
		</div>	
	</section>

	<section class="newletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<label><?php echo $newsletter ?></label>
					<input type="text">
					<button>Send</button>
				</div>	
			</div>
		</div>
	</section>
<?php get_footer(); ?>