<?php
    class Pessoa{
       public $nome; //ATRIBUTO

       public function falar(){//A função é Método da minha classe Pessoa.
            return "O meu nome é, " .$this->nome;
       }
    }

    $glaucio = new Pessoa();//Criando o Objeto glaucio.
    $glaucio->nome = "Glaucio Daniel.";//Acessando o atributo public $glaucio->nome e instanciando.
    echo $glaucio->falar();

?>