<?php
/**
 * Template part for style-2 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeBook
 */

$search       = get_theme_mod( 'header_search', freebook_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">
	<div class="header-container__top">
		<div class="header-container__flex">
			<div class="site-branding">
				<?php freebook_header_logo() ?>
				<?php freebook_site_description(); ?>
			</div>
			<div class="header-elements-wrap">
				<?php freebook_contact_block( 'header' ); ?>
				<?php freebook_header_btn(); ?>
			</div>
		</div>
	</div>

	<div class="header-container__bottom">
		<div class="header-container__flex">
			<?php freebook_main_menu(); ?>

			<?php if ( $search ) : ?>
			<div class="header-icons divider">
				<?php freebook_header_search( '<div class="header-search"><span class="search-form__toggle"></span>%s<span class="search-form__close"></span></div>' ); ?>
			</div>
			<?php endif; ?>

		</div>
	</div>
</div>
