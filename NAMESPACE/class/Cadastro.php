<?php
    class Cadastro{
        private $nome;
        private $email;
        private $senha;
        // criando os gets
        public function getNome():string{
            return $this->nome;
        }
        public function getEmail():string{
            return $this->email;
        }
        public function getSenha():string{
            return $this->senha;
        }
        // criando os sets
        public function setNome($nome){
            return $this->nome = $nome;
        }
        public function setNome($email){
            return $this->email = $email;
        }
        public function setNome($senha){
            return $this->senha = $senha;
        }
    }
?>