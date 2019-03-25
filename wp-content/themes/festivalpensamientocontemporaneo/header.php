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
	<div class="row">
		<?php
			wp_nav_menu( array( 
			    'theme_location' => 'my-custom-menu', 
			    'container_class' => 'custom-menu-class' ) ); 
			?>
	</div>
	<div class="row">
		<div class="col-md-6">
			<a href="#">
				sdfasdf
			</a>
		</div>
	</div>
</div>