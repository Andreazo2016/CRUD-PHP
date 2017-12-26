<?php
    require_once "database/conexao.php";
    $sql = 'SELECT * FROM cliente';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $clientes = $stmt->fetchAll();
?>