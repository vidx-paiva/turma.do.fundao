<?php
include 'config.php';
$dados = json_decode(file_get_contents("php://input"), true);
$maquina = $dados["maquina"];
$status = $dados["status"];
?>