<?php
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
parse_str($_SERVER['QUERY_STRING'], $params);
$data = array();
switch ($params['chave']) {
    case '1':
        $data = array('chave' => 1, 'nome' => 'banana', 'valor' => 1.25, 'staus' => 'A', 'estoque' => 20);
        break;
    case '2':
        $data = array('chave' => 2, 'nome' => 'bergamota', 'valor' => 2.25, 'staus' => 'A', 'estoque' => 40);
        break;
    case '3':
        $data = array('chave' => 3, 'nome' => 'laranja', 'valor' => 3.25, 'staus' => 'A', 'estoque' => 50);
        break;
    case '4':
        $data = array('chave' => 4, 'nome' => 'abacaxi', 'valor' => 3.75, 'staus' => 'A', 'estoque' => 15);
        break;
    case '5':
        $data = array('chave' => 5, 'nome' => 'maca', 'valor' => 5.50, 'staus' => 'I', 'estoque' => 10);
        break;
}
echo json_encode($data);
?>