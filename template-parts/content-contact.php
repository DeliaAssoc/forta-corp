<?php
/**
 * Template part for displaying page content in contact-templatge.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Corporate_Theme
 */

?>
	<?php if ( get_field( 'page_banner' ) ) : ?>
		<section class="page-banner" style="background-image: url( '<?php the_field( 'page_banner' ); ?>' )">
            <div class="constrain">
                <h1 class="page-accent-rgba"><?php the_title(); ?></h1>
            </div>
		</section>
	<?php endif; ?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="main-content">
		<div class="constrain">
			<div class="main-block">
				<?php the_content(); ?>
			</div>
			
			<aside class="contact-sidebar">

			<?php if ( have_rows( 'contact_sidebar' ) ) : ?>

				<?php while ( have_rows( 'contact_sidebar' ) ) : the_row(); ?>

					<?php the_sub_field( 'content_block' ); ?>
				
				<?php endwhile; ?>

			<?php endif; ?>

			<?php if ( get_field( 'company_information' ) == 'yes' ) : ?>

				<div class="sidebar-comp-info">
					<div class="top-info">
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_street' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_city' ); ?>, <?php echo get_theme_mod( 'forta_corporate_company_state' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_zip' ); ?> <?php echo get_theme_mod( 'forta_corporate_company_country' ); ?></span>
					</div>
					<div class="bottom-info">
						<?php if ( get_theme_mod( 'forta_corporate_company_phone' ) ) : ?>
							<span class="contact">
								<span class="title">Phone:</span> <a href="<?php echo get_theme_mod( 'forta_corporate_company_phone' ); ?>"><?php echo get_theme_mod( 'forta_corporate_company_phone' ); ?></a>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_corporate_company_tollfree' ) ) : ?>
							<span class="contact">
								<span class="title">Toll Free:</span> <a href="<?php echo get_theme_mod( 'forta_corporate_company_tollfree' ); ?>"><?php echo get_theme_mod( 'forta_corporate_company_tollfree' ); ?></a>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_corporate_company_fax' ) ) : ?>
							<span class="contact">
								<span class="title">Fax:</span> <?php echo get_theme_mod( 'forta_corporate_company_fax' ); ?>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_corporate_company_email' ) ) : ?>
							<span class="contact">
								<span class="title">Email:</span> <a href="mailto:<?php echo get_theme_mod( 'forta_corporate_company_email' ); ?>?subject=Contact from website"><?php echo get_theme_mod( 'forta_corporate_company_email' ); ?></a>
							</span>
						<?php endif; ?>
					</div>
				</div>

			<?php endif; ?>

			</aside>    
		</div>
	</section>

	<section class="gmap">
		
		<?php echo get_theme_mod( 'forta_corporate_company_gmap' ); ?>

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
