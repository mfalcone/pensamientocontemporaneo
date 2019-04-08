<?php
/**
 * 	Template Name: Festival Page
 *
 *	
 *
*/
get_header();?>
<div class="container content">
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-12 pl-0">
						<h1>Pensamiento contemporaneo, <br><span class="sec-pr">un festival anfibio</span></h1>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php the_content(); ?>
						</div>
						<div class="col-md-12" style="margin-bottom:-100px;margin-top:200px">
							<img src="<?php echo get_template_directory_uri() ?>/img/img_elfestival.png" alt="el festival"> 
						</div>
					</div>
					
		<?php endwhile;?>

	<?php else :?>
		404
	<?php endif;?>
</div>
<?php get_footer();?>