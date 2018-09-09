<?php
/*
 	* Template Name: Rastreamento
 */
get_header( 'shop' );
?>


<?php wp_footer(); ?>
	

	<?php

		echo do_shortcode('[woocommerce_order_tracking]');

	?>

<?php get_footer(); ?>