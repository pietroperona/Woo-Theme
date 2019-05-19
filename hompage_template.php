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
    <div class="row">
        <div class="col-sm-6 col-md-8 home-box1">
		<div class="h2" style="color:#000;">
		<b>SAPONI DA BARBA BIO</b>
		<p class="slick-box-p">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>
		</div>
		<div class="content hidden-xs">
			</div>
			<a href="#" class="btn btn-primary btn-bg-dark" tabindex="0">
			Scopri di più
			</a>		
		</div>
        <div class="col-sm-6 col-md-4" style="">
			<div class="row part"style="background-color: red;">
			<p class="slick-box-p">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>	
			</div>
			<div class="row part" style="background-color: grey;">
			<p class="slick-box-p">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>	
			</div>
        </div>
		<div class="col-sm-6 col-md-4" style="background-color: green; min-height: 600px; padding:20px;">
		<p class="slick-box-p">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>
		</div>
		<div class="col-sm-6 col-md-8" style="background-color: blue; min-height: 600px; padding:20px;">
		<p class="slick-box-p">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>
		</div>
    </div>
</div>

<?php get_footer(); ?>

