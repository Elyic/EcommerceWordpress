<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FreeBook
 */

?>

	</div><!-- #content -->

	<footer id="colophon" <?php freebook_footer_class() ?> role="contentinfo">
		<?php get_template_part( 'template-parts/footer/footer-area' ); ?>
		<?php get_template_part( apply_filters( 'freebook_footer_layout_template_slug', 'template-parts/footer/layout' ), get_theme_mod( 'footer_layout_type' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- {%FOOTER_LINK} -->
</body>
</html>
