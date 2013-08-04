<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package jacksonthatsme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="l-container">
			<div class="site-branding">
				
			</div>
	
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<p class="menu-toggle">Menu</p>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
		<div class="l-container">