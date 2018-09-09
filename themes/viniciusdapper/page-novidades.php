<?php

	/*
 	* Template Name: Novidades
 	*/

	get_header( 'shop' );
?>


	<div id="primary" class="content-area single-wrap">
		
		<h1 class="titulo-page"><?php the_title(); ?></h1>

		<main id="main" class="site-main">
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
				$wp_query = new WP_Query($args);
				while ( have_posts() ) : the_post(); 
				
				$linkMateria = get_post_meta($post->ID,"url-materia-integra")[0];

			?>
			<div class="row post-box">
				<div class="col-md-6 thumb-post">
					<?php if(has_post_thumbnail( )): ?>
						<a data-fancybox href="<?= get_the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(''); ?></a>
					<?php endif; ?>
				</div>
				<div class="col-md-6">
					<header class="post-header">
						<a href="<?php echo ($linkMateria != null) ? $linkMateria : get_permalink( $post->ID ); ?>" <?= ($linkMateria != null)? "target='_tab'":""; ?>><?php the_title( '<h2 class="post-title">', '</h2>' ); ?></a>
					</header><!-- .post-header -->
					<div class="post-content">
						<a href="<?php echo ($linkMateria != null) ? $linkMateria : get_permalink( $post->ID ); ?>" <?= ($linkMateria != null)? "target='_tab'":""; ?>>
							<?php the_excerpt(); ?>
						</a>
					</div><!-- .entry-content -->
				</div>
			</div>
			<?php 
				endwhile; 
			?>
			
			<!-- then the pagination links -->
			<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
			<?php previous_posts_link( 'Newer posts &rarr;' ); ?>



			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();