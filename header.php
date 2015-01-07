<?php
$options = \__::getOptions(array('gc_c_phone', 'gc_c_email'));
extract($options);
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if IE]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen" />
  <![endif]-->
	<script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="global-box cf">
  <div class="center-box cf">
	  <header id="header" class="cf">
		  <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="contact-header">
			  <p class="phone">Contact reception: <?php echo $gc_c_phone; ?></p>
				<p class="email"><a href="mailto:<?php echo $gc_c_email; ?>"><?php echo $gc_c_email; ?></a></p>
			</div>
			
			<nav class="main-menu cf">
			  <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false ) ); ?>
			</nav>
		</header>
		
		<section id="content-section" class="cf">
		
