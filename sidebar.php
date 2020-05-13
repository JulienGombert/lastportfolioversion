<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolioJG
 */

if ( ! is_active_sidebar( 'right-sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'right-sidebar-1' ); ?>
</aside><!-- #secondary -->
