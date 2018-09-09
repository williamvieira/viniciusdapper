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
						<a data-fancybox href="<?= get_the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(''); ?></a>
					<?php endif; ?>
				</div>

				<div class="col-md-6">
					
					<div class="post-content">
						<?php the_content();?>
						<?php
							$linkMateria = get_post_meta($post->ID,"url-materia-integra")[0];
							
							if($linkMateria != null){
						?>
							<a href="<?=$linkMateria?>" target="_blank" rel="noopener">Matéria na íntegra</a>
						<?php 
							}
						?>
					</div><!-- .entry-content -->
				</div>
			</div>


			<?php endwhile; ?>
	



			
		
	</div><!-- #primary -->

<?php
get_footer();