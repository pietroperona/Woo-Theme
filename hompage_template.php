<?php
/**
 * Template Name: Homepage
 * Template for displaying a koodit businesses single page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>	

<div class="container">

	<?php if ( is_active_sidebar( 'home-uomo' ) ) : ?>
    <?php dynamic_sidebar( 'home-uomo' ); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>

