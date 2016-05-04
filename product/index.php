<?php
require '../data/product.php';
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

parse_str($_SERVER['QUERY_STRING'], $params);
$products = getListProducts();

foreach ($products as $product) {
    if ($product['chave'] == $params['chave']) {
    	$data = $product;
    }
}
echo json_encode($data);
?>