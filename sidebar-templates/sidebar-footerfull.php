<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-3 mx-auto">

				<!-- Links -->
				<?php dynamic_sidebar( 'sidebar-10' ); ?>


				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-3 mx-auto">
				<?php dynamic_sidebar( 'sidebar-11' ); ?>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-3 mx-auto">

				<?php dynamic_sidebar( 'sidebar-12' ); ?>


				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-3 mx-auto">

				<?php dynamic_sidebar( 'sidebar-13' ); ?>

				</div>
				<!-- Grid column -->

</div>
<!-- Grid row -->


		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
