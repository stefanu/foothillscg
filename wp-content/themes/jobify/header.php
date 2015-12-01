<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Jobify
 * @since Jobify 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="viewport" content="initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/source/vendor/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<h1 class="site-title" id="company-logo">
					<a href="/foothillscg/"><img src="wp-includes/images/logo.png" "alt="Foothills Consulting Group Logo" /></a>
				</h1>
				
				</a>

				<nav id="site-navigation" class="site-primary-navigation slide-left">
					<a href="#" class="primary-menu-toggle"><i class="icon-cancel-circled"></i> <span><?php _e( 'Close', 'jobify' ); ?></span></a>
					<?php get_search_form(); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu-primary' ) ); ?>
				</nav>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<a href="#" class="primary-menu-toggle in-header"><i class="icon-menu" id="iconmenu"></i></a>
				<?php endif; ?>
			</div>

		</header><!-- #masthead -->

		<div id="main" class="site-main">
