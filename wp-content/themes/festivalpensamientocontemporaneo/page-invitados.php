
<?php 
/**
 * 	Template Name: Plantilla de invitados
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
		<?php endwhile;?>

	<?php else :?>
		404
	<?php endif;?>
</div>
 <div class="container content">
 	<div class="row">
<?php 
	$args = array( 'post_type' => array( 'invitados') , 'posts_per_page' => -1 );
	$bucle = new WP_Query( $args );
	$count = 0;
	while ( $bucle->have_posts() ) : $bucle->the_post();
	$count++;
 ?>

 	<div class="col-md-6">
 		<div class="row">
			<div class="col-md-6">
				<div class="img-wrap">
					<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('large');}?>" alt="" class="clipped-img" style="clip-path: url(#myClip<?php echo $count;?>);">
					<svg width="0" height="0">
					  <defs>
					    <clipPath id="myClip<?php echo $count;?>">
					      <path stroke="#FF0000" stroke-width="2" stroke-miterlimit="10" d="M253,37.646C210.275,3.206,162.312-8.298,109.082,6.013C53.449,20.969,12.231,66.394,0,119.487
						c1.212,0.825,2.546,1.62,3.754,2.574c4.671,3.686,7.817,8.491,9.841,14.004c5.042,13.735,4.855,27.354-1.237,40.762
						c-2.658,5.847-6.617,10.574-12.31,13.646c10.403,46.927,46.36,92.755,100.991,111.248c54.97,18.609,112.799,4.635,151.961-29.78
						V40.412C252.998,39.602,253,38.772,253,37.646"/>
					    </clipPath>
					  </defs>
					</svg>
					<svg class="bordersvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="255.67px" height="312.763px" viewBox="0 0 255.67 312.763" enable-background="new 0 0 255.67 312.763" xml:space="preserve">
					<path fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" d="M254,38.646  C211.275,4.206,163.312-7.298,110.082,7.013C54.449,21.969,13.231,67.394,1,120.487c1.212,0.825,2.546,1.62,3.754,2.574  c4.671,3.686,7.817,8.491,9.841,14.004c5.042,13.735,4.855,27.354-1.237,40.762c-2.658,5.847-6.617,10.574-12.31,13.646  c10.403,46.927,46.36,92.755,100.991,111.248c54.97,18.609,112.799,4.635,151.961-29.78V41.412  C253.998,40.602,254,39.772,254,38.646"/>
					</svg>
				</div>
			</div>
			<div class="col-md-6 pt-5">
				<h2><?php the_title();?></h2>
				<div><?php the_excerpt(); ?></div>
			</div>
		</div>
	</div>

<?php endwhile; // end of the loop. ?>
</div>
</div>
<?php get_footer(); ?>