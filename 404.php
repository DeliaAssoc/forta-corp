<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Forta_Corporate_Theme
 */

get_header(); ?>
	<section class="page-banner" style="background-image: url( 'wp-content/uploads/2017/09/homepage-banner.jpg' );"> </section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="constrain">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'forta-corporate-theme' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><a href="/" class="site-font-accent">Please click here to return to the home page.</a></p>

						<img class="error-logo" src="wp-content/uploads/2017/09/forta-red-logomark.png" alt="Forta Corporation Logo">

					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
