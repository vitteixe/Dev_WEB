<?php 

    namespace Lib1;

    class Cliente implements CadastroInterface{

        public function __construct(){
            echo "<pre>";
                print_r(get_class_methods($this));
            echo "</pre>";
        }
        
        public $nome = "Vitor";

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo "<br><br> SALVANDO.....";
        }

        public function remover(){
            echo "Removendo..";
        }
    }

    interface CadastroInterface{
        public function salvar();
    }   

?>