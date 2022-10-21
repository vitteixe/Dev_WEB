<?php 

    class Pessoa{

        public $nome;

        function __construct($name){
            $this->nome = $name;

            echo "Olá, " . $this->nome . "! <br>";
        }

        function __destruct(){
            echo "objeto destruído";
        }

        function  run(){
            return $this->nome . " está correndo <br>";
        }

    }


    $a = new Pessoa("Vitor");
    echo $a->run();
    
    # DESTRUINDO (a class necessita de um __destruct)
    unset($a);

?>