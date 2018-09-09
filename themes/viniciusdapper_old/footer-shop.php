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

	<!-- Footer -->
	<footer class="footer-interno">
		<div class="container-fluid no-padding">
			<?php if( is_page('categorias')) :  ?>
				<div class="padding-footer-category">
			<?php else: ?>
				<div class="padding-footer">
			<?php endif; ?>
			<div class="row">
					<div class="col-md-3">
						<?php if( is_page('categorias')) :  ?>
							<img src="<?php bloginfo('template_directory');?>/img/logo-rodape.png" alt="" class="logotipo-rodape">
						<?php else: ?>
							<img src="<?php bloginfo('template_directory');?>/img/logo-rodape.png" alt="" class="logotipo-rodape-single">
						<?php endif; ?>
				</div>
				<div class="col-md-2">
					<h4>Categorias</h4>
					<ul>
						<?php
                            wp_nav_menu( array( 
                                'theme_location' => 'menu_footer_interno', 
                                'container_class' => 'custom-menu-class',
                                'menu_class' => '' ) ); 
                        ?>
					</ul>
				</div>
				<div class="col-md-5">
					<h4>Institucional</h4>
					<p>
						Vinícius Dapper é uma sapataria artesanal para quem tem um estilo de vida urbano e sofisticado. Unindo a autenticidade do design com um savoir-faire altamente sofisticado, os sapatos Vinícius Dapper podem facilmente ser elevados à categoria de obras de arte...
					</p>
				</div>
				<div class="col-md-2">
					<h4>Fale Conosco</h4>
					<p>
						Endereço - Rua Nepal, 41, Novo Hamburgo - RS<br>
						<strong>E-mail</strong>
						contato@viniciusdapper.com
						<strong>Telefone</strong>
						(51) 3593-2633
					</p>
				</div>
			</div>
		
		</div>
	</footer> 
		<div class="row copyright">
				<div class="col-md-12">
					<div class="col-md-3">CNPJ: 15.472.365/0001-96</div>
					<div class="col-md-6">© 2017 Vinicius Dapper</div>
					<div class="col-md-3"><img src="<?php bloginfo('template_directory');?>/img/cards.png" alt=""></div>
				</div>
			</div>

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
