<?php
    require_once("config.php");
    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Lanes Rocha");
    $cad->setEmail("lanes@gmail.com");
    $cad->setSenha("123456");

    $cad->registrarVenda();
?>