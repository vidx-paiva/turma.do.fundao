<?php
include 'config.php';

$nome = $_POST['campo'];

$sql = "INSERT INTO tbl_maquinas (eqpmt_nome) VALUES (:nome)";

$stmt = $conn->prepare($sql);


$stmt->execute([
    ':nome' => $nome
]);
?>