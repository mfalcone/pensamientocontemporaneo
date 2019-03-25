<?php 
/**
 * 	Template Name: Bases Page
 *
 *	modelo de template para página custom
 *
*/
get_header(); ?>
<div class="container content">
		
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-12">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="col-md-6">
							<?php the_content(); ?>
							</div>
							
				<?php endwhile;?>

			<?php else :?>
				404
			<?php endif;?>
		</div>
<div class="row-fluid" style="overflow:hidden">
	<img src="<?php bloginfo('template_directory'); ?>/img/rana.png" alt="Festival Pensamiento contemporaneo" class="float-right">
</div>
<?php get_footer(); ?>