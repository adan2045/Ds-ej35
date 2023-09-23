<?php
require_once '../../modelo/direccion.php';
require_once '../../modelo/titular.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';
header('Content-Type: application/json');

$Resp=new NuevoResponse;

$json=file_get_contents('php://input',true);
$req=json_decode($json);






echo json_encode($Resp);
