<?php
/**
 * 	Template Name: mapa Page
 *
 *	
 *
*/
get_header();?>

<div class="container content">
	<?php if ( have_posts() ) : ?>
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-12 pl-0">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="col-md-12" style="padding:0">
						<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1dmZPQJARZqqj7NhlNz7Qg7x1Pyj4kdMG" width="100%" height="600"></iframe>
					</div>
					<div class="col-md-12 dos-columnas lista-mapas pt-3">
						<?php the_content(); ?>
					</div>
		<?php endwhile;?>
		</div>
	<?php else :?>
		404
	<?php endif;?>
</div>

<?php get_footer();?>