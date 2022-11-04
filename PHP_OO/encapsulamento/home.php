<?php 

    class Pai{
        private $nome = "Wagner";
        protected $sobrenome = "Araújo";
        public $humor = "Feliz";

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        
        private function executarMania(){
            echo "assobiar";
        }

        protected function responder(){
            echo "oi";
        }

        public function executarAcao(){
            $x = rand(1,10);

            if($x >= 1 && $x <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
        }

    }
    
    class Filho extends Pai{
        /* 
            public function getAttr($attr){
                return $this->$attr;
            }

            public function setAttr($attr, $value){
                $this-> $attr = $value;
            }

            public function __get($attr){
                return $this->$attr;
            }

            public function __set($attr, $value){
                $this->$attr = $value;
            }
        */
        
        public function __construct(){
            // exibir métodos do objeto
            echo "<hr><pre>";
                print_r(get_class_methods($this));
            echo "</pre>";
        }

        # com método protected ele sobrepõe o método herdado do obj pai
        protected function responder(){
            echo "olá";
        }

        # com método private ele NÃO substituí o método herdado do obj pai
        private function executarMania(){
            echo "cantar";
        }
        
        public function x(){
            $this->executarMania();
        }

    }

    $pai = new Pai();
    
    /* echo $pai->nome . "<br>";
    $pai->sobrenome = "Teixeira";
    echo $pai->sobrenome;
    echo "<hr><br><br>";
    $pai->executarAcao(); */

    $filho = new Filho();
    echo "<pre>";
        print_r($filho);
    echo "</pre>";

    # Atributos privados não podem ser herdados através de métodos do objeto filho        

    /*
    $filho->__set("nome", "Vitor");
    echo "<pre>";
        print_r($filho);
    echo "</pre>"; */

    $filho->executarAcao();
    echo "<br>";

    echo $filho->x();
    
?>