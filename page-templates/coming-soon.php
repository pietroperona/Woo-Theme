<?php
/**
 * Template Name: Coming Soon Page
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="container coming-soon-container text-center">
	<h1 class="coming-soon-title">Coming Soon</h1>
	<button class="text-center btn-outline-primary btn-cmsoon add_to_cart_button" onclick="goBack()">TORNA ALLA PAGINA PRECEDENTE</button>

	<script>
	function goBack() {
	window.history.back();
	}
	</script>
	</div>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
