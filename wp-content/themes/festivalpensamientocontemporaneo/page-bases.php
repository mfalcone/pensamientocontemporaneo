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
							<div class="row">
								<div class="col-md-6">
								<?php the_content(); ?>
								</div>
								<div class="col-md-6  pt-5">
									<img src="<?php bloginfo('template_directory'); ?>/img/fallaras.jpg" alt="Cristina Fallaras" class="float-right border border-dark">
									<p class="text-light bg-dark float-right p-2 w-100" style="max-width: 402px;">Cristina Fallarás</p>
								</div>
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