<?php
function __autoload($nomeClasse){
    var_dump($nomeClasse);// O var_dump neste caso mostra a chamado das duas classes 

    require_once("$nomeClasse.php");
}


$carro = new DelRey();// criando um novo objeto.
$carro->acelerar(80);


?>