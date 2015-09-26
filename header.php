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
                    <div class="site-branding-box-left">
                        <svg height="100%" width="100%" viewBox="0 0 144 160"><g transform="translate(-617.35 -791.95)"><path d="m617 792 41 0 31 72 31-72 41 0v160h-41l0-56-62 0 0 56h-41z" fill="#b25e80" style="color-rendering:auto;image-rendering:auto;isolation:auto;mix-blend-mode:normal;shape-rendering:auto;solid-color:#000000"/></g></svg>
                    </div>
                    <div class="site-branding-box-right">
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<p class="site-description">Freelancer, Frontend Entwickler & WordPress-Genießer</p>
                    </div>
		</a><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'hm15' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
