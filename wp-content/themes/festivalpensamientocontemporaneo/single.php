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
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="col-md-5">
							<img src="<?php the_post_thumbnail_url(); ?>"/>
					</div>
					<div class="col-md-7">
						<div class="col-md-12 pl-0">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="col-md-12 pl-0">
							<?php the_content(); ?>
						</div>	
					</div>
					<?php else: ?>
						<div class="col-md-12 pl-0">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="col-md-12 pl-0">
							<?php the_content(); ?>
						</div>	
					<?php endif; ?>
		<?php endwhile;?>
		</div>
	<?php else :?>
		404
	<?php endif;?>
</div>
<?php get_footer(); ?>
