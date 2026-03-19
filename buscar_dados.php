<?php
include 'config.php';

$sql = "SELECT status_operacional AS status, COUNT(*) AS total 
        FROM tbl_maquinas 
        GROUP BY status_operacional";

$stmt = $conn->prepare($sql);
$stmt->execute();

$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($dados);
?>