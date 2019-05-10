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
					<div class="row mb-4">
						<div class="col-md-12">
							<video style="max-width: 100%" autoplay>
							  <source src="<?php echo content_url(); ?>/uploads/2019/festival-video.mp4" type="video/mp4">
							  Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 pb-5 text-center">
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSc8CzF1IuP5v4ll8IjhQFbMyed0u_mLxwLuc9S-Tit7-U50DA/viewform?usp=send_form" target="_blank" class="reserva-tu-lugar">RESERVÁ TU LUGAR</a>
						</div>
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