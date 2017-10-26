<?php
/**
 * Template part for displaying page content in homepage.php template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Forta_Corporate_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'secondary' ); ?>>


	<?php if ( get_field( 'page_banner' ) ) : ?>
		<section class="page-banner" style="background-image: url( '<?php the_field( 'page_banner' ); ?>' )">
            <div class="constrain">
                <h1 class="page-accent-rgba"><?php the_title(); ?></h1>
            </div>
		</section>
	<?php endif; ?>

		<section class="main-content">
			<div class="constrain">
                <div class="main-block">
                    <?php the_content(); ?>
                </div>
                
                <aside class="general-sidebar">
                    <?php if ( is_active_sidebar( 'general-sidebar' ) ) : ?>

                        <?php dynamic_sidebar( 'general-sidebar' ); ?>

                    <?php endif; ?>
                </aside>    
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
