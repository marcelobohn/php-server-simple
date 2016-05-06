<?php
function getListProducts() {
	$data = array();
	array_push($data, array('chave' => 1, 'nome' => 'banana', 'valor' => 1.25, 'status' => 'A', 'estoque' => 20));
	array_push($data, array('chave' => 2, 'nome' => 'bergamota', 'valor' => 2.25, 'status' => 'A', 'estoque' => 40));
	array_push($data, array('chave' => 3, 'nome' => 'laranja', 'valor' => 3.25, 'status' => 'A', 'estoque' => 50));
	array_push($data, array('chave' => 4, 'nome' => 'abacaxi', 'valor' => 3.75, 'status' => 'A', 'estoque' => 15));
	array_push($data, array('chave' => 5, 'nome' => 'maca', 'valor' => 5.50, 'status' => 'I', 'estoque' => 10));
	array_push($data, array('chave' => 6, 'nome' => 'melancia', 'valor' => 2.00, 'status' => 'A', 'estoque' => 100));
	array_push($data, array('chave' => 7, 'nome' => 'limão', 'valor' => 4.00, 'status' => 'A', 'estoque' => 25));
	return $data;
}
?>