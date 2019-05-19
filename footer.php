<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 col-lg-3 pull-lg-9 pr-0 text-left">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					<p>© 2019 <b>AYLM</b> All rights reserved.</p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

			<div class="col-md-12 text-sm-left col-lg-9 push-lg-3 text-lg-right">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					<p>P.IVA: IT00000000000 | <a href="#">Privacy</a> | <a href="#">Cookie Policy</a> | <a href="#">Company Info</a></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

