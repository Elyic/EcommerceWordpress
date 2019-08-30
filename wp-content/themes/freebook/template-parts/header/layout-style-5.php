<?php
/**
 * Template part for style-5 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FreeBook
 */
?>
<div class="header-container_wrap container">
	<div class="header-container__flex">
		<div class="site-branding">
			<?php freebook_header_logo() ?>
			<?php freebook_site_description(); ?>
		</div>
		<?php freebook_main_menu(); ?>
		<?php freebook_header_btn(); ?>
	</div>
</div>
