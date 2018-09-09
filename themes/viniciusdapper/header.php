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
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
</head>

<body id="page-top" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-fixed-top">


<?php
   $blog_id = get_current_blog_id();
   if ( $blog_id == 1 ) {
?>

	<!-- Header -->
	<header class="home-header header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" class="img-responsive"></a>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="main-menu" class="nav navbar-nav">
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
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/sobre">Sobre</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/novidades/">Novidades</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right nav-login">
						
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/minha-conta"><div class="user"></div> <span class="separate">|</span></a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/carrinho"><div class="cart"></div> <span class="separate">|</span></a></li>
						<li class="home-language">
							
							<a href="#ds" id="ap-addGlobe">
								<i class="fa fa-globe" aria-hidden="true"></i> 
								<strong id="ap-addicon"><i class="fa fa-angle-down" aria-hidden="true"></i></strong> 
							</a>

							<div id="ap-links">
							    <a href="https://www.viniciusdapper.com" class="language-active">Português</a>
							    <a href="http://en.viniciusdapper.com">English</a>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

<?php } else { ?>
		
	<!-- ENG Header -->
	<header class="home-header header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" class="img-responsive"></a>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li>
							<div class="dropdown">
	                          <button class="dropbtn">Products</button>
	                          <div class="dropdown-content">
	                            <a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#classicos">Classics</a>
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#nordic">Nordic</a>
								<a class="page-scroll" href="<?php echo get_home_url(); ?>/categories#soho">Soho</a>
	                          </div>
                        	</div>
						</li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/about">About</a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/news/">News</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right nav-login">
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/my-account"><div class="user"></div> <span class="separate">|</span></a></li>
						<li><a class="page-scroll" href="<?php echo get_home_url(); ?>/cart"><div class="cart"></div><span class="separate">|</span></a></li>
						<li class="home-language">
							
							<a href="#ds" id="ap-addGlobe">
								<i class="fa fa-globe" aria-hidden="true"></i> 
								<strong id="ap-addicon"><i class="fa fa-angle-down" aria-hidden="true"></i></strong> 
							</a>

							<div id="ap-links">
							    <a href="https://www.viniciusdapper.com">Português</a>
							    <a href="http://en.viniciusdapper.com" class="language-active">English</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

<?php } ?>

