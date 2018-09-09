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
					<p class="footertxt-adress">Rua Nepal, 41, Novo Hamburgo - RS   |   E-mail contato@viniciusdapper.com   |  Telefone +55 (51) 3593-2633</p>
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



<?php
   $blog_id = get_current_blog_id();
   if ( $blog_id  == 1) {
?>

<?php } else { ?>

<?php } ?>

	<script>
	    function closeSearch(){
	     	document.getElementById("buscacampo").style.display = "none";
	    }

	    function openSearch(){
	    	document.getElementById("buscacampo").style.display = "block";
	    }
  	</script>

    

	
	<script src="<?php bloginfo('template_directory');?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/scrolling-nav.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>


	<script type="text/javascript">      
		var ativo = 0;

		$("#ap-addGlobe").on("click", function(){

			if(ativo == 0){
				document.getElementById("ap-links").style.display = "block";

				document.getElementById("ap-addicon").innerHTML = "<i class='fa fa-angle-up' aria-hidden='true'></i>";
				ativo = 1;

			}else if(ativo == 1){
				document.getElementById("ap-links").style.display = "none";
				ativo = 0;
				document.getElementById("ap-addicon").innerHTML = "<i class='fa fa-angle-down' aria-hidden='true'></i>";
			}
		});


	</script>



	<?php wp_footer(); ?>
	
	

	</body>
</html>
