<?php
include 'config.php';
$dados = json_decode(file_get_contents("php://input"), true);

$maquina = $dados["maquina"];
$status = $dados["status"];

$log = "Máquina: $maquina | Status: $status";


file_put_contents("log.txt", $log . PHP_EOL, FILE_APPEND);

echo "OK";
?>