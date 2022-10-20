<?php 

    class Funcionario {

        # atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        # Getters e Setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($attr){
            return $this->$attr;
        }


        function resumirCadFunc(){
            echo $this->__get("nome") . " possui " . $this->__get("numFilhos") ." filho(s) <br><br>";
        }

    }

    $y = new Funcionario(); 
    $y->__set("nome", "Vitor");
    $y->__set("telefone", "1194928-5568");
    $y->__set("numFilhos", 2);
    $y->__set("cargo", "Desenvolvedor Web");
    $y->__set("salario", 2365.88);
    $y->resumirCadFunc();

    // echo $y->__get("nome") .  " possui " . $y->__get("numFilhos") . " filho(s) <br> Recebe " . $y->__get("salario") . " reais <br><br>";


   
    $x = new Funcionario();
    $x->__set("nome", "Julia");
    $x->__set("numFilhos", 0);
    $x->resumirCadFunc();
    // echo $x->__get("nome") .  " possui " . $x->__get("numFilhos") . " filho(s) <br><br>";

    
    
?>