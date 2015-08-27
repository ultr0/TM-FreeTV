<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package ultra
 * @since ultra 0.9
 * @license GPL 2.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->