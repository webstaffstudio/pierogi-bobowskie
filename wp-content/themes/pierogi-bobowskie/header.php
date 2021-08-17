<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package pierogi_bobowskie
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="grid-container">
	<div class="header__row">
		<div class="hamburger-wrapper open-menu">
			<div class="hamburger-menu open"></div>
		</div>
		<a class="header__brand brand" href="<?php echo esc_url(home_url()); ?>">
			<?php if (get_header_image()) : ?>
				<img class="brand__img" src="<?php echo(get_header_image()); ?>" alt="<?php bloginfo('name'); ?>"/>
			<?php
			else :
				bloginfo('name');
			endif;
			?>
		</a><!-- /.brand -->
		<div class="desktop-menu">
			<nav class="nav-primary left-menu header__nav">
				<?php
				if (has_nav_menu('left_header_menu')) :
					wp_nav_menu(
							[
									'theme_location' => 'left_header_menu',
									'menu_id' => 'left_header_menu-menu',
									'menu_class' => 'nav-left_header_menu menu',
									'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown large-dropdown" data-parent-link="true">%3$s</ul>',
									'walker' => new pierogi_bobowskie_Navwalker(),
							]
					);
				endif;
				?>
			</nav><!-- /.nav-primary -->
			<nav class="nav-primary right-menu header__nav">
				<?php
				if (has_nav_menu('right_header_menu')) :
					wp_nav_menu(
							[
									'theme_location' => 'right_header_menu',
									'menu_id' => 'right_header_menu-menu',
									'menu_class' => 'nav-right_header_menu menu',
									'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown large-dropdown" data-parent-link="true">%3$s</ul>',
									'walker' => new pierogi_bobowskie_Navwalker(),
							]
					);
				endif;
				?>

			</nav><!-- /.nav-primary -->
		</div>
		<div class="mobile-menu" id="mobile-menu">
			<div class="hamburger-wrapper close-menu">
				<div class="hamburger-menu close animate"></div>
			</div>
			<nav class="mobile-menu__nav">
				<?php
				if (has_nav_menu('left_header_menu')) :
					wp_nav_menu(
							[
									'theme_location' => 'left_header_menu',
									'menu_id' => 'left_header_menu-menu',
									'menu_class' => 'nav-left_header_menu menu',
									'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown large-dropdown" data-parent-link="true">%3$s</ul>',
									'walker' => new pierogi_bobowskie_Navwalker(),
							]
					);
				endif;
				if (has_nav_menu('right_header_menu')) :
					wp_nav_menu(
							[
									'theme_location' => 'right_header_menu',
									'menu_id' => 'right_header_menu-menu',
									'menu_class' => 'nav-right_header_menu menu',
									'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown large-dropdown" data-parent-link="true">%3$s</ul>',
									'walker' => new pierogi_bobowskie_Navwalker(),
							]
					);
				endif;
				?>
			</nav>
		</div>
	</div><!-- /.header__row -->
	</div>
</header><!-- /.header -->
<main id="content" class="site-content">
