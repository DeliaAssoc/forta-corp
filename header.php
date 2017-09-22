<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forta_Corporate_Theme
 */

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
<!doctype html>
<html id="top" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script src="https://use.fontawesome.com/d0180db23a.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Raleway:600,700|Roboto:300,400,500,700" rel="stylesheet">

	<?php wp_head(); ?>

	<?php if ( get_theme_mod( 'forta_corporate_accent_color' ) ) : ?>
	<style>
		.site-accent { background-color: <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>; }
		.site-font-accent { color:  <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>; }
		.site-accent-border { border-color: <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?> !important;  }
		.main-navigation li a:hover { color: <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>; }
		.footer-menu li a:hover { color:  <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>; }
		.footer-menu li a:before { color:  <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>; }
		h2, h3 { color:  <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?>;border-color: <?php echo get_theme_mod( 'forta_corporate_accent_color' ); ?> }
	</style>
	<?php endif; ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'forta-master' ); ?></a>

	<div class="mobile-nav site-accent">
		<div class="constrain">
			<i id="close-this" class="fa fa-times" aria-hidden="true"></i>

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

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</div>
	</div>

	<header id="masthead" class="main-header site-accent-border">
		<div class="constrain flexxed">

			<div class="site-branding">

				<div class="site-title">
					<!-- Use logo if one has been uploaded -->
					<?php if ( get_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
							<?php $description = get_bloginfo( 'description', 'display' ); ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						</a>
					<?php endif; ?>
				</div>			
			
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div class="site-motto motto site-font-accent">
					<?php printf( get_bloginfo ( 'description' ) ); ?>
				</div>
				
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->

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
		</div><!-- .constrained.flexxed -->

		<a class="mobile-nav-btn" href="#">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</a>
	</header><!-- #masthead -->

	<div id="content" class="site-content">