<?php
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = 7;
    
    $stmt->bindParam(":ID", $id);//bindParam identifica o parêmetro :ID automaticamente.

    $stmt->execute();

    echo "Deletado com sucesso!!!";
?>