<?php 

    class Funcionario {

        # atributos
        public $nome = "Amelia Luiza";
        public $telefone = "4002-8922";
        public $numFilhos = 5;

        # métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            # afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();

    echo "<br>";

    $y->modificarNumFilhos(8);
    echo $y->resumirCadFunc();
    
    echo "<hr>";

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    
    echo "<br>";
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();

?>