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

        function trocarMarcha(){
            echo "Desengatar embreagem com o pé e engatar com a mão";
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

        # é possível sobrescrever um Método Herdado da classe Pai
        function trocarMarcha(){
            echo "Desengatar embreagem com a mão e engatar com o pé";
        }
    }


    $carro = new Carro("ABC1234", "Branco");
    $moto = new Moto("DEF5678", "Vermelho");

    $carro->trocarMarcha();
    echo "<br>";
    $moto->trocarMarcha();

?>