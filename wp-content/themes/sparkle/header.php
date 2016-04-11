<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9">
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<?php wp_head(); ?>
</head>

<!--[if IE 9]>
 <body class="ie9">
<![endif]-->
<!--[if !IE]>-->
<body <?php body_class(); ?>>
<!--<![endif]-->
	<header class="header navbar-fixed-top nav-stacked">
		<div class="container">
			<nav class="main-nav">
				<a href="<?php bloginfo('url'); ?>" class="logo pull-left">
					<img class="headshot" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot.png" alt="">
				</a>
				<ul class="nav-links pull-right">
					<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#work" class="smoothScroll">Work</a></li>
					<li><a href="#contact" class="smoothScroll">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>