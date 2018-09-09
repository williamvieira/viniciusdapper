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


	<?php get_template_part( 'head'); ?>


	<!-- Header -->
	<header class="header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>/home"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" class="img-responsive"></a>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#classicos">Clássicos</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#nordic">Nordic</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categorias#soho">Soho</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/categoria-produto/acessorios/">Acessórios</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/sobre">Sobre</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/novidades/">Novidades</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right nav-login">

						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/minha-conta"><div class="user"></div> <span class="separate">|</span></a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/carrinho"><div class="cart"></div></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>


