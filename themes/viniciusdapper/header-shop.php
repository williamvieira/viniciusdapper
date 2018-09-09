<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package viniciusdapper
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-61240291-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-61240291-13');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,600i,700,700i|PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sumana:400,700" rel="stylesheet">
	
	<script src="https://use.fontawesome.com/8df0f545f4.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon">	
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/responsivo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">



<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>
	<div class="search-container" id="buscacampo" style="display:none;">         
	 	<div class="container">
	        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	        	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s" />
	        	<input type="hidden" name="post_type" value="product" />
	        </form>
	        <a class="close-search" onclick="closeSearch();">X</a>
	    </div>
 	</div><!--//search_side_box-->
<?php } else { ?>
	<div class="search-container" id="buscacampo" style="display:none;">         
	 	<div class="container">
	        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	        	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />
	        	<input type="hidden" name="post_type" value="product" />
	        </form>
	        <a class="close-search" onclick="closeSearch();">X</a>
	    </div>
 	</div><!--//search_side_box-->
<?php } ?>



	<!-- Header -->
	<header class="header-shop">
		<div class="container-fluid header-interna">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-4 pull-left">
					<div class="header-language">

						<?php
						   $blog_id = get_current_blog_id();
						   if ( 1 == $blog_id ) {
						?>
							<a href="https://www.viniciusdapper.com" class="language-active">PT</a> | <a href="http://en.viniciusdapper.com">EN</a> 
						<?php } else { ?>
							<a href="https://www.viniciusdapper.com">PT</a> | <a href="http://en.viniciusdapper.com" class="language-active">EN</a> 
						<?php } ?>
					
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-8 pull-right">
					


					<?php
					   $blog_id = get_current_blog_id();
					   if ( 1 == $blog_id ) {
					?>


					<a href="<?php echo get_home_url(); ?>/carrinho">
						<p class="item-cart">
							<?php 
								global $woocommerce;
								$count = $woocommerce->cart->cart_contents_count;
								if ($count == 0){
									echo '0<span> item</span>';
								}
								if ($count == 1){
									echo '1 <span> item</span>';
								}
								if ($count > 1) {
									echo '';
									echo $count;
									echo ' <span>itens</span>';
								}		
							?>
						</p>
					</a>

						<div class="header-cart">
							<div class="body-cart-internal">
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/minha-conta"><div class="user"></div></a>
								&nbsp;<span class="separate">|</span>&nbsp;&nbsp;&nbsp;
							   <a class="page-scroll" href="<?php echo get_home_url(); ?>/carrinho"><div class="cart"></div></a>&nbsp;&nbsp;
							</div>
							<div class="header-login">
								<a href="<?php echo get_home_url(); ?>/minha-conta">Login</a>
							</div>
						</div>
					<?php } else { ?>


					<a href="<?php echo get_home_url(); ?>/cart">
						<p class="item-cart">
							<?php 
								global $woocommerce;
								$count = $woocommerce->cart->cart_contents_count;
								if ($count == 0){
									echo '0<span> item</span>';
								}
								if ($count == 1){
									echo '1 <span> item</span>';
								}
								if ($count > 1) {
									echo '';
									echo $count;
									echo ' <span>itens</span>';
								}		
							?>
						</p>
					</a>
					


						<div class="header-cart">
							<div class="body-cart-internal">
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/my-account"><div class="user"></div></a>
								&nbsp;<span class="separate">|</span>&nbsp;&nbsp;&nbsp;
							   <a class="page-scroll" href="<?php echo get_home_url(); ?>/cart"><div class="cart"></div></a>&nbsp;&nbsp;
							</div>
							<div class="header-login">
								<a href="<?php echo get_home_url(); ?>/my-account">Login</a>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand col-centered" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory');?>/img/logo-interna.png" alt="" class="img-responsive"></a>

					<div class="search-form-interna">
						<button onclick="openSearch();" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					


<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>

					<ul id="shop-main-menu" class="nav navbar-nav">
						<?php if( is_page('categorias')) :  ?>

						<li>
							<div class="dropdown">
	                          <button class="dropbtn">Produtos</button>
	                          <div class="dropdown-content">
	                            <a class="page-scroll" href="#classicos">Clássicos</a>
								<a class="page-scroll" href="#nordic">Nordic</a>
								<a class="page-scroll" href="#soho">Soho</a>
	                          </div>
                        	</div>
						</li>


							
							
							
						<?php else : ?>

						<li>
							<div class="dropdown">
	                          <button class="dropbtn">Produtos</button>
	                          <div class="dropdown-content">
	                            <a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#classicos">Clássicos</a>
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#nordic">Nordic</a>
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#soho">Soho</a>
	                          </div>
                        	</div>
						</li>
						<?php endif; ?>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/sobre">Sobre</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/novidades/">Novidades</a></li>
			
						<a href="<?php echo get_home_url(); ?>/carrinho">
							<p class="item-cart-responsive">
								<?php 
									global $woocommerce;
									$count = $woocommerce->cart->cart_contents_count;
									if ($count == 0){
										echo '0<span> item</span>';
									}
									if ($count == 1){
										echo '1 <span> item</span>';
									}
									if ($count > 1) {
										echo '';
										echo $count;
										echo ' <span>itens</span>';
									}		
								?>
							</p>
						</a>
						<div class="search-form-responsive">
							<button onclick="openSearch();" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</ul>
<?php } else { ?>
	<ul id="shop-main-menu"  class="nav navbar-nav">
		<?php if( is_page('categories')) :  ?>
			
			<li>
				<div class="dropdown">
                  <button class="dropbtn">Products</button>
                  <div class="dropdown-content">
                    <a class="page-scroll" href="#classicos">Clássicos</a>
					<a class="page-scroll" href="#nordic">Nordic</a>
					<a class="page-scroll" href="#soho">Soho</a>
                  </div>
            	</div>
			</li>


		<?php else : ?>
			<li>
				<div class="dropdown">
                  <button class="dropbtn">Products</button>
                  <div class="dropdown-content">
                   	<a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#classicos">Clássicos</a>
					<a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#nordic">Nordic</a>
					<a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#soho">Soho</a>
                  </div>
            	</div>
			</li>
		<?php endif; ?>
		<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/about">About</a></li>
		<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/news/">News</a></li>

		<a href="<?php echo get_home_url(); ?>/cart">
			<p class="item-cart-responsive">
				<?php 
					global $woocommerce;
					$count = $woocommerce->cart->cart_contents_count;
					if ($count == 0){
						echo '0<span> item</span>';
					}
					if ($count == 1){
						echo '1 <span> item</span>';
					}
					if ($count > 1) {
						echo '';
						echo $count;
						echo ' <span>itens</span>';
					}		
				?>
			</p>
		</a>
		<div class="search-form-responsive">
			<button onclick="openSearch();" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
	</ul>
<?php } ?>
				</div>
			</div>
		</nav>
	</header>

<div class="container">
