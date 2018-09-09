<?php
get_header( 'shop' );
?>

<div class="main-content single-wrap">

<?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
<?php endif; ?>

	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   		<h1 class="titulo-page"><?php the_title(); ?></h1>
	   		<?php the_content(); ?>
       <?php endwhile;  ?>  
       <?php endif;  ?>  
</div>

<?php get_footer(); ?>