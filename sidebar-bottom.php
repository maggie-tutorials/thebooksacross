<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_books_across
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-bottom container-col-3">
	<?php dynamic_sidebar( 'sidebar-bottom' ); ?>
</aside><!-- #secondary -->
