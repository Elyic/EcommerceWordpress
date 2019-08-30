<?php
/**
 * Template part for style-6 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeBook
 */
?>
<div class="header-container_wrap container">
	<div class="row row-lg-center">
		<div class="col-xs-12 col-lg-4 col-lg-push-4">
			<div class="site-branding">
				<?php freebook_header_logo() ?>
				<?php freebook_site_description(); ?>
			</div>
		</div>

		<div class="col-xs-12 col-lg-4 col-lg-push-4">
			<div class="header-btn-wrap">
				<?php freebook_header_btn(); ?>
			</div>
		</div>

	</div>
	<?php freebook_main_menu(); ?>
</div>
