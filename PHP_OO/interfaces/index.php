<?php

    
    # As interfaces implementa apenas MÉTODOS
    # Os métodos sempre precisam ser PÚBLICOS

    interface EquipamentoEletronicoInterface {

        public function ligar();
        public function desligar();

    }

    // ------------------------------

    # Para convocar a interFace, basta usar a palavra reservada IMPLEMENTS
    # Ao utilizar uma interface sempre é necessário implementar TODOS os métodos dentro da mesma

    class Geladeira implements EquipamentoEletronicoInterface{
        
        public function AbrirPorta(){
            echo "Abrindo porta";
        }

        public function ligar(){
            echo "Ligar";
        }

        public function desligar(){
            echo "Desligar";
        }

    }

    
    class TV implements EquipamentoEletronicoInterface{

        public function TrocarCanal(){
            echo "Trocando o canal";
        }

        public function ligar(){
            echo "Ligar";
        }

        public function desligar(){
            echo "Desligar";
        }

    }

    $x = new Geladeira();
    $y = new TV();

    #################################################################

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }


    # Para implementar mais de duas interfaces basta usar a vírgula

    class Humano implements MamiferoInterface, TerrestreInterface{

        public function respirar(){
            echo "Estou respirando";
        }

        public function andar(){
            echo "Estou andando";
        }

        public function conversar(){
            echo "Conversando...";
        }

    }

    class Baleia implements MamiferoInterface, AquaticoInterface{

        public function respirar(){
            echo "Estou respirando";
        }

        public function nadar(){
            echo "Estou nadando";
        }
        
        protected function esguichar(){
            echo "Esguichando...";
        }

    }

    $human = new Humano();
    $baleia = new Baleia();


    #################################################################


    # Assim como as classes, as interfaces também podem herdar métodos de outras interfaces
    # basta utilizar a palavra reservada EXTENDS

    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{

        public function comer(){
            echo "Comendo";
        }

        public function voar(){
            echo "Estou voando";
        }

    }


?>