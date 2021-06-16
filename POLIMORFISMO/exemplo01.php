<?php
    class Animal{
        public function falar(){
            return "Som";
        }
        public function mover(){
            return "Anda";
        }
    }
    class Cachorro extends Animal{
        //A class Cachorro herdou as informações da classe Animal que é a classe pai utilizando extends.
        public function falar(){//O polimorfismo permeti mudarmos o comportamento do método falar da classe Animal
            return "Late";
        }
        public function mover(){//O polimorfismo permeti mudarmos o comportamento do método mover da classe Animal
            return "Corre e " . parent::mover();// o parent acessar informações da classe pai, neste caso o metódo mover();
        }

    }
    class Gato extends Animal{
        public function falar(){//O polimorfismo permeti mudarmos o comportamento do método falar da classe Animal
            return "Miaaa";
        }
    }
    class Passaros extends Animal{
        public function falar(){
            return "Canta";
        }
        public function mover(){
            return "Voa e " . parent::mover();// o parent acessar informações da classe pai, neste caso o metódo mover();
        }
    }
    
    $pluto = new Cachorro();
    echo "CACHORRO" . "<br><br>";
    echo $pluto->falar() . "<br>";//Foi utilizado o Polimorfismo
    echo $pluto->mover() . "<br>";

    echo "-------------------------";

    echo "<br>";
    echo "GATO" . "<br><br>";
    $gato = new Gato();
    echo $gato->falar() . "<br>";//Foi utilizado o Polimorfismo
    echo $gato->mover() . "<br>";

    echo "-------------------------" . "<br>";
    echo "PASSARO" . "<br><br>";
    $passaros = new Passaros();
    echo $passaros->falar() . "<br>";
    echo $passaros->mover() . "<br>";



?>