<?php


    # O NAMESPACE é utilizado para obter duas classes/funções/interfaces com o mesmo nome

    namespace A;

    class Cliente implements CadastroInterface, \B\CadastroInterface{

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


    # ---------------------------------

    namespace B;

    class Cliente implements CadastroInterface, \A\CadastroInterface{

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



    # Para selecionar o namespace desejado, basta utilizar \ a barra invertida
    $c = new \B\Cliente();
    
    print_r($c);
    echo "<br>" . $c->__get("nome");




?>