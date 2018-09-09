<?php
/*
 	* Template Name: Checkout
 */
get_header( 'shop' );
?>
	
	<?php

		echo do_shortcode('[woocommerce_checkout]');

	?>


<?php get_footer(); ?>