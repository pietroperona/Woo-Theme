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

		<div class="row bottom-footer">

			<div class="col-md-12 col-lg-7 pull-lg-9 pr-0 text-left">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					<p>© <?php echo date("Y"); ?> <b>ABBATE Y LA MANTIA S.r.l.</b> All rights reserved.  Grosseto, Via Fanti n. 18. Tuscany - Italy </p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

			<div class="col-md-12 text-sm-left col-lg-5 push-lg-3 text-lg-right">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					<p>P.IVA: IT01638000537 - <a target="_blank" href="/privacy-policy/">Privacy</a> - <a target="_blank" href="https://www.iubenda.com/privacy-policy/51778837/cookie-policy">Cookie Policy</a> - <a target="_blank" href="https://www.koodit.it">Credits</a> - <a target="_blank" href="/company-info">Company Info</a></p>

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