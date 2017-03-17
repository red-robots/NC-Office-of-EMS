<?php
/**
 * Template Name: REVC Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'revc' );

			endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
