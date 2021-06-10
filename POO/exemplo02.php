<?php
    class Carro{
        //ATRIBUTOS
        private $modelo;
        private $motor;
        private $ano;

        //MÉTODOS 
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getMotor():float{
            return $this->motor;
        }
        public function setMotor($motor){
            $this->motor = $motor;
        }

        public function getAno():int{
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function exibir(){
           return array(
                "Modelo: "=>$this->getModelo(),
                "Motor: "=>$this->getMotor(),
                "Ano: "=>$this->getAno()
           );
        }

    }
    $gol = new Carro();
    //$gol->modelo = "Gol GT"; Neste caso não podemos acessar o atributo direto pois ele é private
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");
    
    //Formas de visualização
    print_r($gol->exibir());//Essa forma não exibe o tipo de dado;
    echo "<br>";
    echo "<br>";
    var_dump($gol->exibir());//Essa forma exibe o tipo de dado;
?>