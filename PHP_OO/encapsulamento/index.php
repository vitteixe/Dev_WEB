<?php 

    class Pai{
        private $nome = "Wagner";
        protected $sobrenome = "Araújo";
        public $humor = "Feliz";
        
        # Os atributos e métodos private ou protected, não podem ser acessados de fora
        # Porém podem ser acessados através de métodos públicos que retornam o atributo desejado

        /*
            public function getNome(){
                return $this->nome;
            }

            public function setNome($value){

                if(strlen($value) >= 2){
                    $this->nome = $value;
                }

            }

            public function getSobrenome(){
                return $this->sobrenome;
            }
            public function setSobrenome($value){
                if(strlen($value) >=2){
                    $this->sobrenome = $value;
                }
            }
        */    
        
        # Podemos utilizar também métodos mágicos 

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        #----------------------------------------------------------------#

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

    $pai = new Pai();
    /*
        echo $pai->getNome() . "<br>";

        echo $pai->humor . "<br>";
        $pai->setNome("Jamilton");
        echo $pai->getNome();
        
        echo "<hr>";

        echo $pai->getSobrenome();
        $pai->setSobrenome("Teixeira");
        echo "<br>" . $pai->getSobrenome();
    */

    echo $pai->nome . "<br>";
    $pai->sobrenome = "Teixeira";
    echo $pai->sobrenome;
    echo "<hr><br><br>";

    $pai->executarAcao();

    
    
    
        
        




?>
