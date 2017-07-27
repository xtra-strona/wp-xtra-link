<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('template_url') ?>/assets/css/main.css" rel="stylesheet">

	<link href="<?php bloginfo('template_url') ?>/assets/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php bloginfo('template_url') ?>/assets/css/custom.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<script src="<?php bloginfo('template_url') ?>/assets/js/modernizr.custom.js"></script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			<i class="fa fa-arrow-right menu-close"></i>

        <?php echo strip_tags(xtra_nav(), '<a>'); ?>

			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>

		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>
