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
									<div class="embed-container" style="height: 2200px">
										<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdkFKV49jrlFGRtRJ13gj9Xg9shhUwZ95jTFxCXmUgRR-HCjQ/viewform?usp=pp_url&entry.307578052=Lugar,+Fecha%0A%0AAtte+Festival+de+Pensamiento+Contempor%C3%A1neo+:%0APor+la+presente+dejo+constancia+de+que+el+medio+%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6.+est%C3%A1+interesado+en+que+el/la+periodista/editor/a+%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6+con+documento+%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6%E2%80%A6.+viaje+a+Rosario,+Argentina+y+participe+en+el+Taller+de+Cr%C3%B3nica+cultural:+Rosario,+una+ciudad+anfibia,+en+el+marco+del+festival+Pensamiento+Contempor%C3%A1neo+que+se+desarrollar%C3%A1+desde+el+13+de+mayo+hasta+el+18+de+mayo+de+2019%0A%0AFirma%0AAclaraci%C3%B3n%0ACargo%0AMedio" width="640" height="1602" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
									</div>
								</div>
							</div>
				<?php endwhile;?>
			<?php else :?>
				404
			<?php endif;?>
		</div>
<?php get_footer(); ?>