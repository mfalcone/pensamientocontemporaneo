
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
 		<div class="cont-wrap">
		<h2><?php the_title();?></h2>
			<div>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">ver más</a>
			</div>
		</div>
	</div>

<?php endwhile; // end of the loop. ?>
</div>
</div>
<?php get_footer(); ?>