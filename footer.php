<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forta_Corporate_Theme
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="main-footer">
			<div class="constrain flexxed">
				<div class="footer-block col1">
					<?php if ( get_theme_mod( 'forta_corporate_footer_logo' ) ) : ?>
						<a href="/"><img src="<?php echo get_theme_mod( 'forta_corporate_footer_logo' ); ?>" alt=""></a>
					<?php endif; ?>
					<!-- <?php printf( get_bloginfo ( 'description' ) ); ?> -->
					<div class="footer-address">
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_street' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_city' ); ?>, <?php echo get_theme_mod( 'forta_corporate_company_state' ); ?></span>
						<span class="address"><?php echo get_theme_mod( 'forta_corporate_company_zip' ); ?> <?php echo get_theme_mod( 'forta_corporate_company_country' ); ?></span>
						<?php if ( get_theme_mod( 'forta_corporate_company_tollfree' ) ) : ?>
							<span class="contact">
								<span class="title">Toll Free:</span> <a href="tel:<?php echo get_theme_mod( 'forta_corporate_company_tollfree' ); ?>"><?php echo get_theme_mod( 'forta_corporate_company_tollfree' ); ?></a>
							</span>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'forta_corporate_company_email' ) ) : ?>
							<span class="contact">
								<span class="title">Email:</span> <a href="mailto:<?php echo get_theme_mod( 'forta_corporate_company_email' ); ?>?subject=Contact from website"><?php echo get_theme_mod( 'forta_corporate_company_email' ); ?></a>
							</span>
						<?php endif; ?>
					</div>
				</div>
				<div class="footer-block col2">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
						) );
					?>
					<?php
						$socialArray = array( 
							get_theme_mod( 'forta_corporate_social_facebook_link' ),
							get_theme_mod( 'forta_corporate_social_twitter_link' ),
							get_theme_mod( 'forta_corporate_social_gplus_link' ),
							get_theme_mod( 'forta_corporate_social_linkedin_link' ),
							get_theme_mod( 'forta_corporate_social_youtube_link' ),
							get_theme_mod( 'forta_corporate_social_vimeo_link' ),
							get_theme_mod( 'forta_corporate_social_pinterest_link' )
						);
					?>
					<?php if ( !empty( $socialArray ) ) : ?>
						<div class="social-media-links flexxed">
							<?php if ( get_theme_mod( 'forta_corporate_social_facebook_link' ) ) : ?>
								<a class="facebook-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_facebook_link' ) ); ?>">Facebook</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_twitter_link' ) ) : ?>
								<a class="twitter-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_twitter_link' ) ); ?>">Twitter</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_gplus_link' ) ) : ?>
								<a class="gplus-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_gplus_link' ) ); ?>">Google Plus</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_linkedin_link' ) ) : ?>
								<a class="linkedin-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_linkedin_link' ) ); ?>">LinkedIn</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_youtube_link' ) ) : ?>
								<a class="youtube-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_youtube_link' ) ); ?>">Youtube</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_vimeo_link' ) ) : ?>
								<a class="vimeo-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_vimeo_link' ) ); ?>">Vimeo</a>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'forta_corporate_social_pinterest_link' ) ) : ?>
								<a class="pinterest-icon" href="<?php echo esc_attr( get_theme_mod( 'forta_corporate_social_pinterest_link' ) ); ?>">Pinterest</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="legal-block">
						<div class="legal-box">&copy;<?php the_date( 'Y' ); ?> - <?php bloginfo( 'name' ); ?><sup>®</sup>&nbsp;Corporation
						</div>
						<div class="legal-box">All Rights Reserved</div>
						<div class="legal-box"><?php if ( get_theme_mod( 'forta_privacy_policy' ) ){ echo '<a href="' . get_theme_mod( 'forta_privacy_policy' ) . '">Privacy Policy</a>'; }?></div>
					</div>
				</div>
			</div><!-- .constrain -->
		</div><!-- .main-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<a id="btt-button" class="back-to-top site-accent" href="#top" ></a>

<?php wp_footer(); ?>

</body>
</html>