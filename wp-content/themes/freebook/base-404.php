<?php get_header( freebook_template_base() ); ?>

	<?php freebook_site_breadcrumbs(); ?>

	<div <?php freebook_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php freebook_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include freebook_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer( freebook_template_base() ); ?>
