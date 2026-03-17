<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_resendetech;charset=utf8", "app_resende", "fundao");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão funcionando!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>