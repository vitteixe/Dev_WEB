<?php

    class Veiculo{

        public $placa;
        public $cor;

        function acelerar(){
            echo "Acelerando!";
        }

        function frear(){
            echo "Freando";
        }

    }


    class Carro extends Veiculo{ 

        function __construct($placa, $cor){
            $this-> placa = $placa;
            $this-> cor = $cor;
        }

        public $tetoSolar = true;

        function abrirTeto() {
            echo "Abrindo teto solar!";
        }

        function alterarPosicaoVolante(){
            echo "Alterando posição do volante";
        }
    }


    class Moto extends Veiculo{

        function __construct($placa, $cor){
            $this-> placa = $placa;
            $this-> cor = $cor;
        }

        public $contraPesoGuidao = true;

        function empinar(){
            echo "Empinando a moto";
        }
    }


    $carro = new Carro("ABC1234", "Branco");
    $moto = new Moto("DEF5678", "Vermelho");

    echo "<pre>";
        print_r($carro);
        echo "<br>";
        print_r($moto);
    echo "</pre>";

    $carro->acelerar();
    echo "<br>";

    $moto->acelerar();


    echo "<br> Moto: ";
    $moto->frear();
?>