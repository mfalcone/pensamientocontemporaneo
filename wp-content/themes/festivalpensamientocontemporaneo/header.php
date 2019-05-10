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
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1898530543553293');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1898530543553293&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
		<div class="col-md-9">
			<ul class="list-inline social">
				<li class="list-inline-item"><a href="https://www.facebook.com/ciclocontemporaneo/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li class="list-inline-item"><a href="https://www.instagram.com/p_contemporaneo/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li class="list-inline-item"><a href="https://twitter.com/pcontemporaneo_" target="_blank"><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Festival Pensamiento contemporaneo">
			</a>
		</div>
	</div>
</div>