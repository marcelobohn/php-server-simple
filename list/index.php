<?php
header('Content-type: application/json');
$data = array();
array_push($data, array('id' => 1, 'nome' => 'banana', 'valor' => 1.25));
array_push($data, array('id' => 5, 'nome' => 'maca', 'valor' => 5.50));
echo json_encode($data);
?>