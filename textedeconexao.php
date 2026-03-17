<?php
try {
    // Configurações de conexão
    $conn = new PDO("mysql:host=localhost;dbname=db_SolResende;charset=utf8", "root", "alunolab");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão funcionando!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>