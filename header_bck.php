<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				
				<div>
					<a class="search-ico" data-toggle="collapse" href="#top-search-wrapper" aria-expanded="false" aria-controls="top-search-wrapper">
					<i class="fa fa-search"></i>
					</a>
			</div>
				

			<?php if ( 'container' == $container ) : ?>
			<div class="navbar-content-area col">
						<a href="#" class="btn btn-navbartop btn-secondary cta-navbar d-md-inline-block  d-none btn-burnt-sienna float-lg-none" data-toggle-visibility="contact-block-menu">CONTATTACI</a>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
		<!-- search collpse block -->
		<div class="collapse" id="top-search-wrapper">
			<div class="wrapper topbar-search" id="full-width-search-wrapper">
						<div class="container">
							<div class="row">
							<div class="col">
								<form id="nav-search-form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<i class="fa fa-search"></i>	
									<label>
										<input type="search" class="top-search-field-wrapper"
											value="<?php echo get_search_query() ?>" name="s"
											title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" 
											placeholder="Ricerca nei contenuti ..."/>
									</label>
										<a class="search-ico" data-toggle="collapse" href="#top-search-wrapper">
										<span class="src-close"><i class="fa fa-close"></i></span>
										</a>
								</form>
							</div>
							
							</div>
						</div>
			</div>			
		</div>
	</div><!-- #wrapper-navbar end -->