<!doctype html>
<html>

<head>
	<meta charset="utf-8"/>
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	
	<meta name="keywords" content="Chris Cullmann, Digital Strategy, Healthcare Marketing, Creative Director, Creative Strategist, Technologist, Father, Husband, Creator" />
	<meta name="description" content="Chris Cullmann is a Digital Strategist and Creative Director. He works to craft projects that are both effective and aesthetically beautiful. His background in design and development help him plan and execute campaigns that reach across every channel from mail to socia and every platform from desktop to mobile." />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/jqueryShowoff/jquery.jshowoff.min.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

	
	
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="Chris Cullmann Digital Strategist">
	<meta name="twitter:description" content="Chris Cullmann is Director of Digital Strategy with COYNE PR where is develops content centric campaigns for greater audience engagement and optimal impact.">
	<meta name="twitter:creator" content="cullmann">
	<meta name="twitter:image:src" content="http://www.chriscullmann.com/wp-content/themes/cullmann-theme/images/chris-cullmann-logo.gif">
</head>
	
<body <?php body_class(); ?>>

<div id="container">

	<div id="headerContainer">
	<!--END HEADER//-->
		<a href="<?php bloginfo('siteurl'); ?>">
		<div id="header">			
			<h1>Chris Cullmann <!--<a title="<?php bloginfo('name'); ?>" >//--></h1> 
			<h2>Creative/Strategy</h2> 	
		</div>
		</a>
		
		<!--BEGIN NAVIGATION//-->	
		<div id="navigation">
				<?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => false )); ?>
		</div>
		<!--END NAVIGATION//-->	
		
	<!--END HEADER//-->
	</div>