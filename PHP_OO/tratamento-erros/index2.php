<?php 

    class ExceptionCostumer extends Exception{

        private $error = "";

        public function __construct($erro){
            $this-> error = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            echo "<div style='border 1px solid #000; padding: 15px; background-color: red; color white'>";
                echo $this->error;
            echo "</div>";
        }

    }

    try {

        throw new ExceptionCostumer("Esse é um erro de teste");

    } catch(ExceptionCostumer $e){
        echo $e->exibirMensagemErroCustomizada();
    }

?>