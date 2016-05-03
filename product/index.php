<?php
header('Content-type: application/json');
parse_str($_SERVER['QUERY_STRING'], $params);
$data = array();
switch ($params['chave']) {
    case '1':
        $data = array('chave' => 1, 'nome' => 'banana', 'valor' => 1.25);
        break;
    case '5':
        $data = array('chave' => 5, 'nome' => 'maca', 'valor' => 5.50);
        break;
}
echo json_encode($data);
?>