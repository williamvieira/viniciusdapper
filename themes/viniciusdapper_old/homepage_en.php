<?php
/*
 	* Template Name: Homepage EN
 */
get_header(); 
?>


<?php wp_footer(); ?>
	<!-- Banner -->
	<div class="container-fluid no-padding">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
				<div class="item active">
			    	<img src="<?php bloginfo('template_directory');?>/img/banner.png" alt="Los Angeles" style="width:100%;">
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
    	<div class="col-md-12 no-padding">
    		<div class="col-md-4 no-padding">
    			<div class="body-banner-item">
    				<div class="banner-item">
	    				<div class="present"></div>
	    				<p>LOREM IPSUM DOLOR</p>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-4 no-padding">
    			<div class="body-banner-item">
    				<div class="banner-item">	
	    				<div class="shoe"></div>
	    				<p>LOREM R$100,00</p>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-4 no-padding">
    			<div class="body-banner-item">
    				<div class="banner-item">	
	    				<div class="truck"></div>
	    				<p>LOREM IPSUM DOLOR</p>
    				</div>
    			</div>
    		</div>
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
		        	<a href="<?php the_permalink(); ?>">
						<div class="col-md-4 col-sm-4">
							<div class="product-featured-body">
								<?php the_post_thumbnail(); ?>
								<p><?php the_title(); ?></p>
								<p>
									<?php global $woocommerce;
										$currency = get_woocommerce_currency_symbol();
										$price = get_post_meta( get_the_ID(), '_regular_price', true);
										$sale = get_post_meta( get_the_ID(), '_sale_price', true);
									?>

									<?php if($sale) : ?>
										<?php echo $currency;?>  <?php echo $price; ?>
									<?php elseif($price) : ?>
										<?php echo $currency;?>  <?php echo $price; ?>
									<?php endif; ?>
									
								</p>
							</div>
						</div>
					</a>
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
						<button class="btn-style-white"> Enter </button>
					</div>
				</div>		
				<div class="col-md-4 bg-campaign"></div>		
			</div>
		</div>
	</section>

	<section id="sobre" class="autor-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<img src="<?php bloginfo('template_directory');?>/img/viniciusdapper.png" alt="">
				</div>

            <?php $postid = get_the_ID(); ?>
            <?php $key = 'resumo'; $resumo = get_post_meta($postid, $key, TRUE);?>
            <?php $key2 = 'newsletter'; $newsletter = get_post_meta($postid, $key2, TRUE);?>
          

				<div class="col-md-4 txt-autor">
					<h3>Vinícius Dapper</h3>
					<p>
					<?php echo $resumo ?></p>
					<a href="http://labs.criaturo.com/viniciusdapper-homologacao/en/about">
					<button class="btn-style-black">About</button></a>
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