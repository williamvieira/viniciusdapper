<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package viniciusdapper
 */

?><!doctype html>

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php get_template_part( 'head'); ?>

<body id="page-top" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">

	<div class="search-container" id="buscacampo" style="display:none;">         
	 	<div class="container">
	        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	        	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="BUSCAR" value="<?php echo get_search_query(); ?>" name="s" />
	        	<input type="hidden" name="post_type" value="product" />
	        </form>
	        <a class="close-search" onclick="closeSearch();">X</a>
	    </div>
 	</div><!--//search_side_box-->

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
	<a href="http://labs.criaturo.com/viniciusdapper-homologacao" class="language-active">PT</a> / <a href="http://labs.criaturo.com/viniciusdapper-homologacao/en/">EN</a>
<?php } else { ?>
		<a href="http://labs.criaturo.com/viniciusdapper-homologacao">PT</a> / <a href="http://labs.criaturo.com/viniciusdapper-homologacao/en/" class="language-active">EN</a>
<?php } ?>
					
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-8 pull-right">
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
							<a href="<?php echo get_home_url(); ?>/minha-conta">Login</a> / <a href="">Cadastre-se</a>
						</div>
					</div>
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
					<a class="navbar-brand col-centered" href="<?php echo get_home_url(); ?>/home"><img src="<?php bloginfo('template_directory');?>/img/logo-interna.png" alt="" class="img-responsive"></a>

					<div class="search-form-interna">
						<button onclick="openSearch();" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php if( is_page('categorias')) :  ?>
							<li><a class="page-scroll" href="#classicos">Clássicos</a></li>
						<?php else : ?>
							<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#classicos">Clássicos</a></li>
						<?php endif; ?>
						<?php if( is_page('categorias')) :  ?>
							<li><a class="page-scroll" href="#nordic">Nordic</a></li>
						<?php else : ?>
							<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#nordic">Nordic</a></li>
						<?php endif; ?>
						<?php if( is_page('categorias')) :  ?>
							<li><a class="page-scroll" href="#soho">SOHO</a></li>
						<?php else : ?>
							<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#soho">SOHO</a></li>
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
				</div>
			</div>
		</nav>
	</header>

<div class="container">
