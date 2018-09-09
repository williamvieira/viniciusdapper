<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package viniciusdapper
 */

?>

	</div><!-- #content -->


<?php
   $blog_id = get_current_blog_id();
   if ( 1 == $blog_id ) {
?>

<!-- Footer -->
	
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">	
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/vdapper/" target="_blank" class="social-face"></a></li>
						<li><a href="https://www.instagram.com/viniciusdapper/" target="_blank" class="social-inst"></a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<img src="<?php bloginfo('template_directory');?>/img/logo-rodape.png" alt="" class="logotipo-rodape">
				</div>
				<div class="col-md-3">
					<img src="<?php bloginfo('template_directory');?>/img/cards.png" alt="" class="img-cards">
				</div>
			</div>
					<hr>
			<div class="row">
				<div class="col-md-12">
					<p class="footertxt-adress">Rua Nepal, 41, Novo Hamburgo - RS   |   E-mail contato@viniciusdapper.com   |  Telefone (51) 3593-2633</p>
				</div>
			
			</div>
		</div>
	</footer>  
	<div class="container-fluid">
	<div class="row footer-bottom-box">
		<div class="col-md-12 menufooter">
			
						<?php
                            wp_nav_menu( array( 
                                'theme_location' => 'menu_footer', 
                                'container_class' => 'custom-menu-class',
                                'menu_class' => '' ) ); 
                        ?>
					
		</div>
		<div class="col-md-12 copyright">
			<div class="col-md-3"></div>
			<div class="col-md-6">CNPJ 15.472.365/0001-96 © 2017 Vinicius Dapper</div>
		</div>
	</div>
	</div>


<?php } else { ?>

<!-- Footer EN -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<img src="<?php bloginfo('template_directory');?>/img/logo-rodape.png" alt="" class="logotipo-rodape">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Rua Nepal, 41, Novo Hamburgo - RS   |   E-mail contato@viniciusdapper.com   |  Telefone (51) 3593-2633</p>
				</div>
			</div>
		</div>
	</footer>  
	<div class="row copyright">
		<div class="menufooter">
			<ul>
						<?php
                            wp_nav_menu( array( 
                                'theme_location' => 'menu_footer', 
                                'container_class' => 'custom-menu-class',
                                'menu_class' => '' ) ); 
                        ?>
					</ul>
		</div>
		<div class="col-md-12">
			<div class="col-md-3">CNPJ: 15.472.365/0001-96</div>
			<div class="col-md-6">© 2017 Vinicius Dapper</div>
			<div class="col-md-3"><img src="<?php bloginfo('template_directory');?>/img/cards.png" alt=""></div>
		</div>
	</div>
<?php } ?>

	

	<script>
	    function closeSearch(){
	     	document.getElementById("buscacampo").style.display = "none";
	    }

	    function openSearch(){
	    	document.getElementById("buscacampo").style.display = "block";
	    }
  	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/scrolling-nav.js"></script>
<?php wp_footer(); ?>

</body>
</html>
