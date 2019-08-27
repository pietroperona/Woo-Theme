<?php
/**
 * Template Name: FAQ
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



<div class="container container-faq">
<h2 class="home-product-slider-title">F.A.Q</h2>
<div id="accordion">
  <div class="faq-card">
    <div class="" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link btn-faq " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Come posso contattare la vostra assistenza clienti?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
	<p>E’ possibile chiedere informazioni, inviare comunicazioni, richiedere assistenza o inoltrare reclami contattando il Servizio Clienti di AYLM con le seguenti modalità:<br>

	Dal lunedì al venerdì dalle 8,00 alle 12,00 e dalle 14,00 alle 18,00 al numero +39xxxxxx;<br>
	per e-mail, all’indirizzo <a href="mailto:support@abbateylamantia.it">support@abbateylamantia.it</a> ;<br>

	<i>Il servizio Clienti risponderà ai reclami presentati entro cinque giorni lavorativi dal ricevimento degli stessi, a mezzo e-mail.</i> </p>     </div>
    </div>
  </div>
  <div class="faq-card">
    <div class="faq-card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link btn-faq collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Quali metodi di pagamento sono accettati?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
	  				<p><b>– Carta di credito</b> Alla conclusione della transazione online, l’istituto bancario di riferimento provvede ad autorizzare l’addebito dell’importo relativo all’acquisto effettuato. Le carte accettate sono: VISA, Mastercard e AMEX.</p>
					<p><b>– PayPal</b>, comprensiva della modalità di pagamento attraverso conto PayPal e della modalità di pagamento senza conto PayPal, tramite una delle carte di credito accettate da PayPal. Durante la procedura d’acquisto, dopo aver selezionato il metodo di pagamento prescelto e inserito i dati richiesti dal sistema, l’utente sarà reindirizzato sul sito www.paypal.com dove eseguirà il pagamento dei Prodotti in base alla procedura prevista e disciplinata da PayPal e ai termini e alle condizioni di contratto convenute tra l’utente e PayPal. I dati inseriti sul sito di PayPal saranno trattati direttamente dalla stessa e non saranno trasmessi o condivisi con ABBATE Y LA MANTIA S.R.L. L’Azienda non è quindi in grado di conoscere e non memorizza in alcun modo i dati della carta di credito collegata al conto PayPal dell’utente ovvero i dati di qualsiasi altro strumento di pagamento connesso con tale conto.</p>
					<p><b>– Contrassegno:</b> consente di pagare il bene acquistato al momento del suo arrivo a destinazione, consegnando la somma al corriere ( pagamento in contanti o assegno circolare).<br><br><b>– Bonifico</b> L’Importo Totale Dovuto sarà addebitato all’utente contestualmente alla conclusione del contratto on line. In caso di risoluzione del contratto di acquisto e in ogni altro caso di rimborso, a qualsiasi titolo, l’importo del rimborso dovuto all’utente (“Importo di Rimborso”) sarà accreditato sullo strumento di pagamento usato per l’acquisto. Nel caso di pagamento con contrassegno verrà effettuato un bonifico alle coordinate indicate dall’acquirente. I tempi di accredito sullo strumento di pagamento dipendono esclusivamente dallo strumento di pagamento usato. Una volta disposto l’ordine di accredito, ABBATE Y LA MANTIA S.R.L non potrà essere ritenuta responsabile per eventuali ritardi od omissioni nell’accredito all’utente dell’Importo di Rimborso, per contestare i quali l’utente dovrà rivolgersi direttamente all’istituto utilizzato.</p>
	</div>
    </div>
  </div>
  <div class="cfaq-ard">
    <div class="faq-card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link btn-faq collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Entro quanto posso restituire le marce acquistata?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
<p>L’utente che riveste la qualità di consumatore ha diritto di recedere dal contratto di acquisto del Prodotto, senza dover fornire alcuna motivazione entro il termine di trenta giorni di calendario (“Periodo di Recesso”). Il Periodo di Recesso scade dopo 30 giorni.</p>
	</div>
    </div>
  </div>
</div>
</div>



<?php get_footer(); ?>

