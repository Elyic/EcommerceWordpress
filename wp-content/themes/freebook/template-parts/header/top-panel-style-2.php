<?php
/**
 * Template part for top panel in header (style-2 layout).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeBook
 */

// Don't show top panel if all elements are disabled.
if ( ! freebook_is_top_panel_visible() ) {
	return;
}
?>

<div class="top-panel <?php echo freebook_get_invert_class_customize_option( 'top_panel_bg' ); ?>">
	<div class="top-panel__container container">
		<div class="top-panel__top">
			<div class="top-panel__left">
				<?php freebook_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			</div>
			<div class="top-panel__right">
				<?php freebook_top_menu(); ?>
				<?php freebook_social_list( 'header' ); ?>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
