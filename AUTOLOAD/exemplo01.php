<?php
//Este códio não irá funcionar pois o arquivo Automovel.php está dentro da pasta Abstrata
// Neste caso para colocar o código funcional basta colocar o arquivo na raiz da pasta principal AUTOLOAD.

function __autoload($nomeClasse){
    var_dump($nomeClasse);// O var_dump neste caso mostra a chamado das duas classes 

    require_once("$nomeClasse.php");
}


$carro = new DelRey();// criando um novo objeto.
$carro->acelerar(80);


?>