<?php
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

    $id = 4;
    
    $stmt->execute(array($id));

    //$conn->rollback();//a função rollback() volta com as informações deletadas do banco.

    $conn->commit();//a função commit() confirma a exclusão do arquivo do banco
    echo "Deletado com sucesso!!!";
?>