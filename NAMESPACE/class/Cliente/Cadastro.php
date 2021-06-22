<?php
    namespace Cliente;
    class Cadastro extends \Cadastro{ // A contrabarra volta a raiz do projeto para localizar a class Cadastro(Herança) 
        public function registrarVenda(){
            echo "Foi registrado a vendo para o cliente " . $this->getNome();
        }
    }
?>