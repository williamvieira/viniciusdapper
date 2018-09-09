<?php

	/*
 	* Template Name: Página
 	*/

	get_header( 'shop' );
?>


	<div id="primary" class="content-area single-wrap">
		
		<h1 class="titulo-page"><?php the_title(); ?></h1>

		
			<?php
 				while ( have_posts() ) : the_post(); ?>

				
		
						<?php the_content();?>
					
			<?php endwhile; ?>
			

		
	</div><!-- #primary -->

<?php
get_footer();