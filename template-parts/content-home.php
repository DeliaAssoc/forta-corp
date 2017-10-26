<?php
/**
 * Template part for displaying page content in homepage.php template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Corporate_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php if ( get_field( 'page_banner' ) ) : ?>
		<?php $hBanner = get_field( 'page_banner' ); ?>
		<section class="page-banner" style="background-image: url( '<?php echo $hBanner[ 'url' ] ?>' );">
		</section>
	<?php endif; ?>

	<?php if ( get_field( 'page_logo' ) ) : ?>
		<?php $pLogo = get_field( 'page_logo' ); ?>
		<section class="page-logo">
			<div class="constrain">
				<div class="logo-container" style="background-image: url( '<?php echo $pLogo[ 'url' ] ?>' );"></div>
			</div>
		</section>
	<?php endif; ?>

		<section class="main-content">
			<div class="constrain">
				<?php the_content(); ?>
			</div>
		</section>

		<section class="company-divisions">
		<div class="constrain">
			
			<?php if ( have_rows( 'company_divisions', 'option' ) ) : ?>

				<?php while( have_rows( 'company_divisions', 'option' ) ) : the_row(); ?>
					<?php $dImage = get_sub_field( 'division_logo', 'option' ); ?>

					<a href="<?php the_sub_field( 'link_url', 'option' ); ?>" class="company-division" style="background-color: <?php the_sub_field( 'background_color', 'option' ); ?>">
						<img class="division-block-logo" src="<?php echo $dImage[ 'url' ] ?>" alt="<?php echo $dImage[ 'alt' ] ?>">
						<p><?php the_sub_field( 'division_block_content', 'option' ); ?></p>
						<span class="division-link"><?php the_sub_field( 'link_text', 'option' ); ?></span>
					</a>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</section>


</article><!-- #post-<?php the_ID(); ?> -->
