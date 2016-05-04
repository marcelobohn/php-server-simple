<?php
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
$data = array();
array_push($data, array('chave' => 1, 'nome' => 'banana', 'valor' => 1.25, 'staus' => 'A', 'estoque' => 20));
array_push($data, array('chave' => 2, 'nome' => 'bergamota', 'valor' => 2.25, 'staus' => 'A', 'estoque' => 40));
array_push($data, array('chave' => 3, 'nome' => 'laranja', 'valor' => 3.25, 'staus' => 'A', 'estoque' => 50));
array_push($data, array('chave' => 4, 'nome' => 'abacaxi', 'valor' => 3.75, 'staus' => 'A', 'estoque' => 15));
array_push($data, array('chave' => 5, 'nome' => 'maca', 'valor' => 5.50, 'staus' => 'I', 'estoque' => 10));
echo json_encode($data);
?>