<?php
    /*ENCAPSULAMENTO:
        - public        = O atributo pode ser acessado de qualquer lugar
        - protected     = O atributo pode ser acessado apenas pela classe e quem herda a classe pai
        - private       = O atributo pode ser acessado apenas dentro da classe.

    */

?>
<?php

    class Pessoa{
        public $nome = "Lanes Rocha";
        protected $idade = 34;
        private $senha = "123456";

        public function verDados(){
            echo $this->nome  . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }
    $objeto = new Pessoa();
    //echo $objeto->nome . "<br>";

    //echo $objeto->idade . "<br>";// Como é protected tanto a classe Pessoa e as classes que herdam 
                                   // a mesma consegue acessar o conteúdo do atributo $idade.

    //echo $objeto->senha . "<\br>";// Como é private esse atributo somente a classe Pesso consegui 
                                    //acessar o conteúdo do atributo $senha
    class Programador extends Pessoa{

        public function verDados(){
            echo get_class($this) . "<br>";

            echo $this->nome  . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        }
    }
    
    $objeto = new Programador();
    $objeto->verDados();

?>