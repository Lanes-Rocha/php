<?php
//CONEXÃO MYSQL
    $conn = new PDO("mysql:dbname=dbphp7;localhost", "root", "");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach($results as $row){
        foreach($row as $key => $value){
            echo "<strong>".$key.": </strong>".$value."</br>";
        }
        echo"=========================================<br>";
    }
    
    //var_dump($results);

?>