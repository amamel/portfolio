<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mam.el
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="opacity: 1; display: block; transition: opacity 600ms ease-in 0s;">
		<header id="masthead" class="site-header" role="banner">
			<div class="container max-width flex justify-between nav-primary">
				<div class="flex justify-start items-center">
					<div class="site-logo">
						<a class="custom-logo-link" href="/" rel="home" itemprop="url">
						<?php
							if ( function_exists( 'the_custom_logo' ) ) {
    							the_custom_logo();
						}?></a>
					</div>
				</div>

				<div class="flex items-center">
					<!-- Begin Site Navigation -->
					<nav role="navigation" aria-label="Primary Menu">
					  	<input type="checkbox" id="nav" class="hidden"/>
					  	<label for="nav" class="nav-open" aria-controls="primary-menu" aria-expanded="false"><i></i><i></i><i></i></label>
					  	<div class="nav-container">
							<?php
						        wp_nav_menu(array(
						            'theme_location' => 'menu-1',
						            'menu_id'        => 'primary-menu',
						        ));
						    ?>
					  	</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header>
