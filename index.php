<?php
	include('./DB.php');
	$db = new DB;

	
	echo "<h1>До</h1><pre>";
	$res= $db->getAll('oc_product');

	
		
	$xml = new DomDocument('1.0','utf-8');
	$products = $xml->appendChild($xml->createElement('products'));
	foreach ($res as $data) {
	$product = $products->appendChild($xml->createElement('product'));
	$name = $product->appendChild($xml->createElement('name'));

   
	$name->appendChild($xml->createTextNode($data['model']));}
	$xml->formatOutput = true;
	
$xml->save('myxml.xml');
?>
