<?php
require '../data/product.php';
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

parse_str($_SERVER['QUERY_STRING'], $params);
$products = getListProducts();

foreach ($products as $product) {
    if (isset($params['chave']) and ($product['chave'] == $params['chave'])) {
    	$data = $product;
    }
    if (isset($params['nome']) and ($product['nome'] == $params['nome'])) {
    	$data = $product;
    }    
}
echo json_encode($data);
?>