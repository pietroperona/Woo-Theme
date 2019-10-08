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
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700,800|Lato:300,400,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
<div class="container-fluid top-header-container">
	<div class="row">
		<div class="col text-center">
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

<?php if ( is_front_page() && is_home() ) : ?>

	<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

<?php else : ?>

	<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

<?php endif; ?>


<?php } else {
the_custom_logo();
} ?>

<!-- end custom logo -->
		</div>
	</div>
</div>

	<!-- ******************* The Navbar Area ******************* -->

	<!-- <div class="container-fluid top-header-container">
	<img src="<?php echo get_theme_mod( 'your_theme_mobile_logo' ); ?>" alt="mobile-AYLM-logo" class="d-sm-none">
	</div> -->

	<div id="wrapper-navbar" class="sticky-top sticky-offset" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg navbar-dark bg-aylm">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<script>
				jQuery(document).ready(function () {

					jQuery('.first-button').on('click', function () {

						jQuery('.animated-icon1').toggleClass('open');
				});
				jQuery('.second-button').on('click', function () {

					jQuery('.animated-icon2').toggleClass('open');
				});
				jQuery('.third-button').on('click', function () {

					jQuery('.animated-icon3').toggleClass('open');
				});
				});
				</script>
				<!-- Collapse button -->
				<button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<div class="animated-icon1"><span></span><span></span><span></span></div>
				</button>
				<!-- Mobile navbar logo -->
				<img src="<?php echo get_theme_mod( 'your_theme_mobile_logo' ); ?>" alt="mobile-AYLM-logo" class="navbar-brand-mobile d-sm-none">
				<!-- End of Mobile navbar logo -->

				<div class="header-lang-group lang-sel d-none d-md-block" >
				<?php do_action('wpml_add_language_selector'); ?>
				</div>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				
				<div class="header-ico-group d-none d-md-block ">
					<a href="/carrello" class="head-ico"><i class="fas fa-shopping-cart"></i></a>
					<a href="/my-account" class="head-ico"><i class="fas fa-user-circle"></i></a>
					<a href="/wishlist" class="head-ico"><i class="far fa-heart"></i></a>
					<a class="search-ico head-ico" data-toggle="collapse" href="#top-search-wrapper" aria-expanded="false" aria-controls="top-search-wrapper">
					<i class="fa fa-search"></i>
					</a>
				</div>


		</nav><!-- .site-navigation -->
	

	</div><!-- #wrapper-navbar end -->


	<div class="header-ico-group-mobile text-center d-sm-none"><?php do_action('wpml_add_language_selector'); ?></div>

	<!-- mobile sticky icon e-commerce -->
	<div class="header-ico-group-mobile scrollmenu-block scrollmenu-fixed text-center sticky-icon-header d-sm-none">
		<a href="/carrello" class="head-ico-mobile"><i class="fas fa-shopping-cart"></i></a>
		<a href="/my-account" class="head-ico-mobile"><i class="fas fa-user-circle"></i></a>
		<a href="/wishlist" class="head-ico-mobile"><i class="far fa-heart"></i></a>
		<a class="search-ico head-ico-mobile" data-toggle="collapse" href="#top-search-wrapper" aria-expanded="false" aria-controls="top-search-wrapper"><i class="fa fa-search"></i></a>
		<!-- <?php do_action('wpml_add_language_selector'); ?> -->
	</div>
	<!-- end mobile sticky icon e-commerce -->


		<!-- search collpse block -->
		<div class="collapse" id="top-search-wrapper">
			<div class="wrapper topbar-search" id="full-width-search-wrapper">
						<div class="container">
							<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<form id="nav-search-form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<i class="fa fa-search"></i>	
									<label>

											<input type="text"  class="top-search-field-wrapper" name="s" placeholder="Search product..." value="<?php the_search_query(); ?>">
    										<input type="hidden" name="post_type" value="product">
									</label>
										<a class="search-ico" data-toggle="collapse" href="#top-search-wrapper">
										<span class="src-close"><i class="fa fa-close"></i></span>
										</a>
								</form>
							</div>
							<div class="col-md-3"></div>
							
							</div>
						</div>
			</div>			
		</div>
		<!-- End of search collpse block -->
