<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package FreeBook
 */

?>
<div class="footer-container <?php echo freebook_get_invert_class_customize_option( 'footer_bg' ); ?>">
	<div class="site-info container">
		<?php
			freebook_footer_logo();
			freebook_footer_menu();
			freebook_contact_block( 'footer' );
			freebook_social_list( 'footer' );
			freebook_footer_copyright();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
