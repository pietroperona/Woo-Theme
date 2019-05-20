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
				<div style="padding-top:15%;">	
					<div class="h2" style="color:#000;">
						<b>PRODOTTI PER LA RASATURA</b>
						<p class="slick-box-p" style="padding-top:25px;">I Saponi da Barba Abbate y La Mantia sono specificatamente pensati per essere utilizzati dagli amanti della rasatura tradizionale. La schiuma viene applicata sulle zone da radere con il pennello da barba abbondantemente bagnato. Il vero vantaggio nell’utilizzo del sapone da barba, rispetto alle schiume in bomboletta, è il potere idratante.</p>
					</div>
					<div class="content hidden-xs">
					</div>
						<a href="#" class="btn btn-primary btn-bg-dark" tabindex="0">
						Scopri di più
						</a>		
				</div>
		    </div>
        <div class="col-sm-6 col-md-4" style="">
			<div class="row part"style="background-color: red;">
			<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<style type="text/css">
	#mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
	#mergeRow-gdpr {margin-top: 20px;}
	#mergeRow-gdpr fieldset label {font-weight: normal;}
	#mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
</style>
<div id="mc_embed_signup">
<form action="https://abbateylamantia.us19.list-manage.com/subscribe/post?u=eedbc9f7f11b22b2632570717&amp;id=1c3ee9372e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>ENTRA IN SHAVINGCLUB</h2>
	<p>Iscriviti alla nostra newsletter per ricevere offerte esclusive e notizie sui nostri prodotti in anteprima. Segui il tasso!</p>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
    <div class="content__gdpr">
        <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
		<label class="checkbox subfield" for="gdpr_16753"><input type="checkbox" id="gdpr_16753" name="gdpr[16753]" value="Y" class="av-checkbox "><span style="font-size: 9px;">Accetto di ricevere la newsletter e dichiaro di avere letto e accettato l’informativa privacy. Potrai disiscriverti in qualsiasi momento grazie al link presente in ciascuna newslette</span> </label>
        </fieldset>
    </div>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eedbc9f7f11b22b2632570717_1c3ee9372e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="ISCRIVITI ORA" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->	
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

