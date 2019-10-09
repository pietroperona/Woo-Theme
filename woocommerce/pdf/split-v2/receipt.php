<?php do_action( 'woocommerce-pdf-invoices-packing-slips_before_document', $this->type, $this->order ); ?>
<?php
$order = $this->order;
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.7', '<' ) ) {
	$invoicetype = get_post_meta($order->id,"_billing_invoice_type",true);
	$prices_include_tax = $order->prices_include_tax; // 1
	$tax_display_cart = $order->tax_display_cart; //'incl'
	$display_totals_ex_tax = $order->display_totals_ex_tax; //false
	$display_cart_ex_tax = $order->display_cart_ex_tax; //false
} else {
	$invoicetype = get_post_meta($order->get_id(),"_billing_invoice_type",true);
	$prices_include_tax = $order->get_prices_include_tax(); // 1
	$tax_display_cart = get_option( 'woocommerce_tax_display_cart' ); //'incl'
	$display_totals_ex_tax = get_option( 'woocommerce_display_totals_ex_tax' ); //false
	$display_cart_ex_tax = get_option( 'woocommerce_display_cart_ex_tax' ); //false
}
$spedizione = $order->get_shipping_total();
$spedizionetax = $order->get_shipping_tax();
$lblFattura = __( 'Ricevuta', 'woocommerce-pdf-italian-add-on' );

$totals_table_data = array();
$tot_parz = 0;
$items = array();

$_tax = new WC_Tax();
$rates = $_tax->get_rates("");
$rates = array_shift($rates);

$shipping_tax_label = "";
if($rates["shipping"] == "yes") {
	$shipping_tax = (int)$rates["rate"];
	$shipping_tax_label = $rates["label"];
} else {
	$shipping_tax = 0;
}

$tot_parz_s = array();

if($rows = $order->get_items()) {
	foreach($rows as $item_id => $rs) {
		$qty = $rs->get_quantity();
		$line_total = $rs["line_total"];
		$line_subtotal = $rs["line_subtotal"];
		$tot_parz += $line_total;
		$sconto = ($line_subtotal - $line_total);
		$product = $rs->get_product();
		$thumbnail = $product->get_image();
		$sku = $product->get_sku();
		$weight = $product->get_weight();
		$metadata = $rs->get_formatted_meta_data();
		$meta = "";
		if(!empty($metadata)) {
			foreach($metadata as $itm) {
				$meta .= '<li><strong class="wc-item-meta-label">' .  $itm->key . ':</strong> <p>' .  $itm->value. '</p></li>';			
			}
		}
		if(!empty( $sku)) $meta .= '<li><strong class="wc-item-meta-label">' .__( 'SKU:', 'woocommerce' ) . '</strong> <p>' .  $sku . '</p></li>';
		if(!empty( $weight)) $meta .= '<li><strong class="wc-item-meta-label">' . __( 'Weight', 'woocommerce' ) . ':</strong> <p>' .  $weight . '</p></li>';
		if(!empty( $sconto)) $meta .= '<li><strong class="wc-item-meta-label">' . __( 'Discount:', 'woocommerce' ) . '</strong> <p>' .  wc_price($sconto) . '</p></li>';
		$totaltax = $rs->get_total_tax();
		$tax_class = $rs->get_tax_class();
		$rates = $_tax->get_rates($tax_class);
		$rates = array_shift($rates);
		$tax_rate = (int)$rates["rate"];
		$tax_label = $rates["label"];
		if(!isset($tot_parz_s[$tax_label])) $tot_parz_s[$tax_label] = 0;
		$tot_parz_s[$tax_label] += $line_total;
		
		$items[] = array("name" => $rs['name'], "line_total" => $line_total, "qty" => $qty, "sku" => $sku, "weight" => $weight, "meta" => $meta, "sconto" => $sconto, "tax_rates" => $tax_rate, "totaltax" => $totaltax, "thumbnail" => $thumbnail) ;
	}
}

if($rows = $order->get_fees()) {
	foreach($rows as $rs) {
		$totaltax = $rs->get_total_tax();
		$tax_class = $rs->get_tax_class();
		$rates = $_tax->get_rates($tax_class);
		$rates = array_shift($rates);
		$tax_rate = (int)$rates["rate"];
		$items[] = array("name" => $rs['name'], "line_total" => $rs['line_total'], "qty" => 1, "sku" => "", "weight" => "", "meta" => "", "sconto" => 0, "tax_rates" => $tax_rate, "totaltax" => $totaltax, "thumbnail" => "") ;
		$tot_parz += $rs["line_total"];
		$tax_label = $rates["label"];
		if(!isset($tot_parz_s[$tax_label])) $tot_parz_s[$tax_label] = 0;
		$tot_parz_s[$tax_label] += $rs["line_total"];
	}
}

if($spedizione) {
	$items[] = array("name" => __( 'Shipping', 'woocommerce-pdf-invoices-packing-slips' ), "line_total" => $spedizione, "totaltax" => $spedizionetax,  "qty" => 1, "sku" => "", "weight" => "", "meta" => "", "sconto" => 0, "tax_rates" => $shipping_tax, "thumbnail" => "") ;
	$tot_parz += $spedizione;
	if(!isset($tot_parz_s[$shipping_tax_label])) $tot_parz_s[$shipping_tax_label] = 0;
	$tot_parz_s[$shipping_tax_label] += $spedizione;
}

foreach($tot_parz_s as $key => $value) {
	$totals_table_data[] = array("label" => __( "Totale Imponibile ", 'woocommerce-pdf-italian-add-on' ) . $key, "value" => wc_price($value), "class" => "");
}
$totals_table_data[] = array("label" => __( "Totale Imponibile", 'woocommerce-pdf-italian-add-on' ), "value" => wc_price($tot_parz), "class" => "totale");

$tot_iva = 0;
if ($taxes = $order->get_taxes()){
	foreach( $taxes as $tax ) {
		$tot_iva += ($tax[ 'tax_amount' ] + $tax[ 'shipping_tax_amount' ]);
		$totals_table_data[] = array("label" => "Totale " . $tax[ 'label' ], "value" => wc_price($tax[ 'tax_amount' ] + $tax[ 'shipping_tax_amount' ]), "class" => "");
	}
}
$totals_table_data[] = array("label" => __( "Totale IVA", 'woocommerce-pdf-italian-add-on' ), "value" => wc_price($tot_iva), "class" => "totale");

$numfattura = __( 'Ricevuta', 'woocommerce-pdf-italian-add-on' ) . ': <span>' . $this->get_receipt_number() . '</span>';
$ddfattura = __( 'Date' ) . ': <span>' . $this->get_receipt_date() . '</span>';

$totals_table_data[] = array("label" => __( 'Total', 'woocommerce-pdf-invoices-packing-slips' ), "value" => wc_price($order->get_total()), "class" => "totale");

$protocollo = is_ssl() ? "https://" : "http://";
?>
<table style="margin-bottom:1mm; width:180mm">
	<tr>
	<td colspan="3" class="header">
<?php
if( $this->get_header_logo_id() ) {
	$this->header_logo();
}
?>
	</td>
	</tr>
	<tr>
	<td valign="bottom" class="invoice-num"><?php echo $numfattura ?></td>
	<td colspan="2" valign="bottom" class="invoice-data"><?php echo $ddfattura ?></td>
	</tr>
	<tr>
		<td class="address shop-address">
			<div class="shop-name"><?php $this->shop_name(); ?></div>
			<div class="shop-address"><?php $this->shop_address(); ?></div>
		</td>
		<td class="address billing-address">
			<div class="recipient-address">
			<h3><?php _e( 'Indirizzo:', 'woocommerce-pdf-italian-add-on' ); ?></h3>
			<?php $this->billing_address(); ?>
			</div>
		</td>
		<td class="address shipping-address">
			<?php if ( isset($this->settings['display_shipping_address']) && $this->ships_to_different_address()) { ?>
			<div class="recipient-address">
			<h3><?php _e( 'Ship To:', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
			<?php $this->shipping_address(); ?>
			</div>
			<?php } ?>
		</td>
	</tr>
<?php if ( $this->get_shipping_notes() ) : ?>
	<tr>
		<td>&nbsp;</td>
		<td colspan="2">
			<div class="notes-shipping">
				<h3><?php _e( 'Customer Notes', 'woocommerce-pdf-invoices-packing-slips' ); ?></h3>
				<?php $this->shipping_notes(); ?>
			</div>
		</td>
	</tr>
<?php endif; ?>
</table>
<?php do_action( 'wpo_wcpdf_before_order_details', $this->type, $this->order ); ?>
<table class="order-details" style="margin-bottom:5mm; width:180mm">
	<thead>
		<tr>
			<th colspan="2" class="left product-label"><?php _e( 'Description', 'woocommerce-pdf-invoices-packing-slips' ) ?></th>
			<th class="right"><?php _e('Quantity', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="right"><?php _e('Price', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="right"><?php _e('Costo', 'woocommerce-pdf-italian-add-on' ); ?></th>
			<th class="right"><?php _e('VAT', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
			<th class="right"><?php _e('Total', 'woocommerce-pdf-invoices-packing-slips' ); ?></th>
		</tr>
	</thead>
	<tbody>
<?php if( sizeof( $items ) > 0 ) : foreach( $items as $item ) :
$qty = max( 1, $item['qty']);
$single_price = strip_tags(wc_price( $item['line_total']/ $qty));
$price = strip_tags(wc_price( $item['line_total']));
$meta = $item["meta"];
$totaltax = isset($item["totaltax"]) ? $item["totaltax"] : 0;
$tax_rates = !empty($item["totaltax"]) ? $item['tax_rates'] . "%" : "-";
//$tot = strip_tags(wc_price( $item['line_total'] * (1 + $item['tax_rates']*0.01)));
$tot = strip_tags(wc_price( $item['line_total'] + $totaltax));
$thumbnail = $item["thumbnail"];
if($thumbnail) $thumbnail = str_replace('src="//', 'src="' . $protocollo, $thumbnail);
?><tr>
<?php if($thumbnail) {?>
			<td class="thumbnail description" style="width:12mm">
			<?php	echo $thumbnail ?>
			</td>
			<td class="description" style="width:56mm">
<?php } else { ?>
			<td colspan="2" class="description" style="width:68mm">
<?php } ?>
				<div class="item-name"><?php echo $item['name']; ?></div>
<?php if($meta) { ?>
				<ul class="wc-item-meta">
					<?php echo $meta; ?>
				</ul>
<?php } ?>
			</td>
			<td class="right" style="width:20mm"><?php echo $qty; ?></td>
			<td class="right" style="width:20mm"><?php echo $single_price; ?></td>
			<td class="right" style="width:20mm"><?php echo $price; ?></td>
			<td class="right" style="width:20mm"><?php echo $tax_rates; ?></td>
			<td class="right" style="width:20mm"><?php echo $tot; ?></td>
		</tr><?php endforeach; endif; ?>
	</tbody>
	<tfoot>
		<tr class="no-borders">
			<td class="no-borders" colspan="99">
				<table class="totals">
					<tfoot>
						<?php foreach($totals_table_data as $key => $total) :?>
						<tr class="<?php echo $key . " " . $total['class']; ?>">
							<th class="right" style="width:112mm"><?php echo $total['label']; ?></th>
							<td class="right" style="width:20mm"><?php echo strip_tags($total['value']) ?></td>
							<td class="right" style="width:20mm">&nbsp;</td>
							<td class="right" style="width:20mm">&nbsp;</td>
						</tr>
						<?php endforeach; ?>
					</tfoot>
				</table>
			</td>
		</tr>
	</tfoot>
</table><!-- order-details -->
<?php do_action( 'wpo_wcpdf_after_order_details', $this->type, $this->order ); ?>
<?php if ( $this->get_footer() ): ?>
<div id="footer">
<?php $this->footer(); ?>
</div><!-- #letter-footer -->
<?php endif; ?>