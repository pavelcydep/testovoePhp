<?php
	include('./DB.php');
	$db = new DB;

	
	echo "<h1>До</h1><pre>";
	$res= $db->getAll('oc_product');

	
		
	$xml = new DomDocument('1.0','utf-8');
	$products = $xml->appendChild($xml->createElement('products'));
	foreach ($res as $data) {
	$product = $products->appendChild($xml->createElement('product'));
	$product_id=$product->appendChild($xml->createElement('product_id'));
	$model = $product->appendChild($xml->createElement('name'));
    $sku = $product->appendChild($xml->createElement('scu'));
	$upc= $product->appendChild($xml->createElement('upc'));
	$ean = $product->appendChild($xml->createElement('ean'));
	$jan = $product->appendChild($xml->createElement('jan'));
	$isbn = $product->appendChild($xml->createElement('isbn'));
	$mpn = $product->appendChild($xml->createElement('mpn'));
	$location = $product->appendChild($xml->createElement(''));
	$quantity = $product->appendChild($xml->createElement('quantity'));
	$stock_status_id = $product->appendChild($xml->createElement('stock_status_id'));
	$image = $product->appendChild($xml->createElement('image'));
	$manufacturer_id = $product->appendChild($xml->createElement('manufacturer_id'));
	$shipping = $product->appendChild($xml->createElement('shipping'));
	$price = $product->appendChild($xml->createElement('price'));
	$points = $product->appendChild($xml->createElement('points'));
	$tax_class_id = $product->appendChild($xml->createElement('tax_class_id'));
	$date_available = $product->appendChild($xml->createElement('date_available'));
	$weight = $product->appendChild($xml->createElement('weight'));
	$weight_class_id = $product->appendChild($xml->createElement('weight_class_id'));
	$length = $product->appendChild($xml->createElement('length'));
	$width = $product->appendChild($xml->createElement('width'));
	$height = $product->appendChild($xml->createElement('height'));
	$length_class_id = $product->appendChild($xml->createElement('length_class_id'));
	$subtract = $product->appendChild($xml->createElement('subtract'));
	$minimum = $product->appendChild($xml->createElement('minimum'));
	$sort_order = $product->appendChild($xml->createElement('sort_order'));
	$status = $product->appendChild($xml->createElement('status'));
	$viewed = $product->appendChild($xml->createElement('viewed'));
	$date_added = $product->appendChild($xml->createElement('date_added'));
	$date_modified = $product->appendChild($xml->createElement('date_modified'));

    $product_id->appendChild($xml->createTextNode($data['product_id']));
	$model->appendChild($xml->createTextNode($data['model']));
	$sku->appendChild($xml->createTextNode($data['sku']));
    $upc->appendChild($xml->createTextNode($data['upc']));
	$ean->appendChild($xml->createTextNode($data['ean']));
	$jan ->appendChild($xml->createTextNode($data['jan']));
	$isbn ->appendChild($xml->createTextNode($data['isbn']));
	$mpn ->appendChild($xml->createTextNode($data['mpn']));
	$location ->appendChild($xml->createTextNode($data['location']));
	$quantity ->appendChild($xml->createTextNode($data['quantity']));
	$stock_status_id ->appendChild($xml->createTextNode($data['stock_status_id']));
	$image ->appendChild($xml->createTextNode($data['image']));
	$manufacturer_id ->appendChild($xml->createTextNode($data['manufacturer_id']));
	$shipping ->appendChild($xml->createTextNode($data['shipping']));
	$price ->appendChild($xml->createTextNode($data['price']));
	$points ->appendChild($xml->createTextNode($data['points']));
	$tax_class_id ->appendChild($xml->createTextNode($data['tax_class_id']));
	$date_available ->appendChild($xml->createTextNode($data['date_available']));
	$weight->appendChild($xml->createTextNode($data['weight']));
	$weight_class_id ->appendChild($xml->createTextNode($data['weight_class_id']));
	$length ->appendChild($xml->createTextNode($data['length']));
	$width ->appendChild($xml->createTextNode($data['width']));
	$height ->appendChild($xml->createTextNode($data['height']));
	$length_class_id ->appendChild($xml->createTextNode($data['length_class_id']));
	$subtract ->appendChild($xml->createTextNode($data['subtract']));
	$minimum ->appendChild($xml->createTextNode($data['minimum']));
	$sort_order ->appendChild($xml->createTextNode($data['sort_order']));
	$status ->appendChild($xml->createTextNode($data['status']));
	$viewed ->appendChild($xml->createTextNode($data['viewed']));
	$date_added ->appendChild($xml->createTextNode($data['date_added']));
	$date_modified ->appendChild($xml->createTextNode($data['date_modified']));
}
	$xml->formatOutput = true;
	
$xml->save('myxml.xml');
