<?php
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
$data = array('um' => 55, 'dois' => 'segundo');
echo json_encode($data);
?>