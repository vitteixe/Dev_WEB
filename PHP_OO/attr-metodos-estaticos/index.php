<?php

    class Exemplo{
        public static $attr1 = "Eu sou um atributo ESTÁTICO";
        public $attr2 = "Eu sou um atributo NORMAL";
        
        # os métodos estáticos não podem utilizar o ($this)
        public static function metodo1(){
            echo "Eu sou um método ESTÁTICO";
        }

        public function metodo2(){
            echo "Eu sou um método NORMAL";
        }

    }


    # $x = new Exemplo();

    # Quando temos atributos e métodos ESTÁTICOS dentro do objeto
    # não é necessário estanciar (new Exemplo() ) o objeto, basta utilizar ::
    
    echo Exemplo::$attr1;
    echo "<br>";
    
    Exemplo::metodo1();

    # Atributos estáticos, não podem ser acessados através do operado ->
    # $x->attr1;
   



?>