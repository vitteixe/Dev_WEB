<?php 

    class Funcionario {

        # atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;


        //-----------------------------------------------//
        # SETTERS
        function setNome($Nome){
            // PS -> sempre utilizar "$this->NomeDoAtributoDoObjeto"
            $this->nome = $Nome;
        }

        function setTel($tel){
            $this->telefone = $tel;
        }

        function setFilhos($NumFilhos){
            $this->numFilhos = $NumFilhos;
        }
        //-----------------------------------------------//

        # GETTERS
        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }
        function getTel(){
            return $this->telefone;
        }
        //-----------------------------------------------//


        # métodos
        function resumirCadFunc(){
            echo "$this->nome possui $this->numFilhos filho(s) <br><br>";
        }

        function modificarNumFilhos($numFilhos){
            # afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario(); 
    $y->setNome("José");
    $y->setFilhos(2);
    //$y->resumirCadFunc();
    echo $y->getNome() .  " possui " . $y->getNumFilhos() . " filho(s) <br><br>";

    $x = new Funcionario();
    $x->setNome("Julia");
    $x->setFilhos(0);
    $x->resumirCadFunc();

    echo "Essa a cima é a " . $x->getNome();
    
?>