<?php
/**
 * single
 *
 */

get_header(); ?>
<div class="container content">
	<?php if ( have_posts() ) : ?>
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-12 pl-0">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
		<?php endwhile;?>
		</div>
	<?php else :?>
		404
	<?php endif;?>
</div>
<?php get_footer(); ?>
