<?php

    namespace Lib2;

    class Cliente implements CadastroInterface{

        public function __construct(){
            echo "<pre>";
                print_r(get_class_methods($this));
            echo "</pre>";
        }
        
        public $nome = "Julia";

        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){
            echo "<br><br> REMOVENDO.....";
        }
        
        public function salvar(){
            echo "Salvando!";
        }

    }

    interface CadastroInterface{
        public function remover();
    }

?>