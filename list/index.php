<?php
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
require '../data/product.php';
$data = getListProducts();
echo json_encode($data);
?>