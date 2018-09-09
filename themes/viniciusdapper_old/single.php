<?php
get_header( 'shop' );
?>



	<div id="primary" class="content-area single-wrap">
		
		<h1 class="titulo-page"><?php the_title(); ?></h1>

		
			<?php 
			while ( have_posts() ) : the_post(); ?>
			<div class="row post-box">
				<div class="col-md-6 thumb-post">
					<?php if(has_post_thumbnail( )): ?>
						<a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_post_thumbnail(''); ?></a>
					<?php endif; ?>
				</div>

				<div class="col-md-6">
					
					<div class="post-content">
						<?php the_content();?>
					</div><!-- .entry-content -->
				</div>
			</div>


			<?php endwhile; ?>
	



			
		
	</div><!-- #primary -->

<?php
get_footer();