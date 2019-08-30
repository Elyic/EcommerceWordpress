<?php
/**
 * Template part for style-3 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeBook
 */
?>
<div class="header-container_wrap container">
	<?php freebook_vertical_main_menu(); ?>
	<div class="header-container__flex">
		<div class="site-branding">
			<?php freebook_header_logo() ?>
			<?php freebook_site_description(); ?>
		</div>

		<div class="header-icons">
			<?php freebook_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			<?php freebook_vertical_menu_toggle( 'main-menu' ); ?>
			<?php freebook_header_btn(); ?>
		</div>

	</div>
</div>
