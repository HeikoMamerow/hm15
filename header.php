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
		<a class="hm-logolink" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Start">
			<img class="hm-logo" alt="Logo: <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABpCAMAAADySdbCAAAA/1BMVEUAAACyXoCyX4CzX4GzYIG0YYK0YoO0Y4S1ZYW2Zoa3Z4e3aIi3aYi4a4q5bIu5bYy6boy6bo27co+8cpC8c5C8c5G9dZK9dpO/eZW/epbAepbAe5fBfpnCf5rCgJvDgpzEg53FhZ/HiaLHi6PIi6TIjKTKkKfLkqnLk6rNl63Oma7Pm7DRnrPRn7PRoLTTorbUpLfUpbjUprnXq73XrL3XrL7Yrb7as8PbtMTctcXducjeu8nfvcvgvcvgv83iws/jxdHkxtLlydXmytXnzNfnzdjoz9no0Nrp0dvq09zr1t/t2OHu2+Pu3OPv3eTx4ejx4ujz5evz5uz06e716u91qf2LAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQffAwEVMxwqJ0ELAAAAGXRFWHRDb21tZW50AENyZWF0ZWQgd2l0aCBHSU1QV4EOFwAAAXpJREFUaN7t2MdWAkEQheG+gATHgAFFBbOYI6IYMWfB9P7P4vGwGMTpmZ7uqpVVD/B/y9un1QCCb0bFuqU+/3KdHaUDcBOn/6CrhADFOMCUBYBL8/4VbIAxc2DcCsC5ab8BO2DIFBi2BHBs1j+BLdBvBgxaAzg06ddhD3gmgOcAoBbdP4ALkI0Gck4AdqP6e3ADMlFAxhHAZnh/A65Az2dY/yPlDGAtDFiFO5B80/dbSQIAy3qgAgog0dT1X0ECYFEHzBMBeAnuP4MKmA0GymQA7oP6t6ADJoOACUIg6AlzAUpg9C8wQgrgrLt/Clog3w3kiQHU4yy9DeDFWXobANXOfg30wK/9zzIA2Pb7O+AA/PH8SrMA/niugwdIttr99xQTgEobWAEX0F6eZoIPmPsBFsAH4FGpJ3ACJaWmWQFc34EXKJaYgdgngAACCCCAAAIIwA+kew0vbQnsm37vbwkggAACCCCAAAIIIIAAAvwPoFzQ3pEpUNU3Ct8K6UaEmcf5DAAAAABJRU5ErkJggg==" />
			<div class="site-branding">
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->
		</a>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hm15' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
