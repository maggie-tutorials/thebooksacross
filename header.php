<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_books_across
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6436940501206651",
		enable_page_level_ads: true
	  });
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-books-across' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-logo">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars fa-2x"></i></button>
			<button class="menu-toggle -close" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-times fa-2x"></i></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
