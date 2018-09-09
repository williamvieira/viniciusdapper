<?php
/*
 	* Template Name: Carrinho
 */
get_header( 'shop' );
?>
	
	<?php

		echo do_shortcode('[woocommerce_cart]');

	?>
	
<?php get_footer(); ?>