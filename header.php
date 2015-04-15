<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hm15
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hm15' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Start">
			<div class="site-branding-box-left"></div>
			<div class="site-branding-box-right">
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<p class="site-description">Freelancer, <span>Frontend Entwickler &</span> <span>WordPress-Genießer</span></p>
			</div>
		</a><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hm15' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
