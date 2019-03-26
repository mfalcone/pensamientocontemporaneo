<?php
	/*-----------------------------------------------------------------------------------*/
	/*header
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<div class="container">
	<div class="row border-bottom border-dark border-2">
		<nav class="navbar navbar-expand-md navbar-light bg-faded">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			 <div class="navbar-collapse w-100 order-3 dual-collapse2">
			<?php
			wp_nav_menu([
			'menu'            => 'top',
			'theme_location'  => 'top',
			'container'       => 'div',
			'container_id'    => 'bs4navbar',
			'container_class' => 'collapse navbar-collapse',
			'menu_id'         => false,
			'menu_class'      => 'navbar-nav mr-auto',
			'depth'           => 2,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
			]);
		?>
	</div>	
		</nav>
	</div>
	<div class="row mt-5 mb-5">
		<div class="col-md-6">
			<a href="#">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Festival Pensamiento contemporaneo">
			</a>
		</div>
	</div>
</div>