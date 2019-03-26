<?php 
/**
 * 	Template Name: Formulario Page
 *
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
								<div class="col-md-4">
								<?php the_content(); ?>
								</div>
								<div class="col-md-8">
									<div class="embed-container" style="height: 1600px">
										<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdkFKV49jrlFGRtRJ13gj9Xg9shhUwZ95jTFxCXmUgRR-HCjQ/viewform?embedded=true" width="640" height="1602" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
									</div>
								</div>
							</div>
				<?php endwhile;?>
			<?php else :?>
				404
			<?php endif;?>
		</div>
<?php get_footer(); ?>