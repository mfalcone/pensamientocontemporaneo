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
							<video id="video" autoplay="true" muted="muted" playsinline="true" controls style="max-width: 100%">
							  <source src="<?php echo content_url(); ?>/uploads/2019/festival-final.mp4" type="video/mp4">
							  Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="row">

							<?php the_content(); ?>
						
						<div class="col-md-12" style="margin-bottom:-100px;margin-top:200px">
							<img src="<?php echo get_template_directory_uri() ?>/img/img_elfestival.png" alt="el festival"> 
						</div>
					</div>
					
		<?php endwhile;?>

	<?php else :?>
		404
	<?php endif;?>
</div>
<!-- START: Mobile Autoplay Video -->
<script>
	jQuery(document).ready(function(){
		document.getElementById('video').play();
	})

</script>
<!-- END: Mobile Autoplay Video -->
<?php get_footer();?>