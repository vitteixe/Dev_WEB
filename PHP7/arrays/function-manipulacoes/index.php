<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de manipulação de Arrays - PHP</title>
</head>

<body>

    <?php 

        $array = ["notebook", "teclado"];
        
        # is_array() -> verifica se é uma array TRUE/FALSE
        $retorno = is_array($array);

        echo "<h2>is_array: </h2>";

        if($retorno){
            echo "Sim, é um array!";
        } else {
            echo "Não, não é um array!";
        }

        echo "<br><br><hr><br>";


        # -------------------------------------------------- #


        $array1 = [1 => "a", 7 => "b", 18 => "c"];

        echo "<h4>array_keys: </h4>";

        echo "<pre>";
            print_r($array1);
        echo "</pre>";

        # array_keys() -> retorna as chaves de um array
        $chave_array = array_keys($array1);

        echo "<h2>array_keys: </h2>";

        echo "<pre>";
            print_r($chave_array);
        echo "</pre>";

        echo "<br><br><hr><br>";


        # -------------------------------------------------- #

        
        $array2 = [
            "notebook", 
            "teclado", 
            "mouse", 
            "cabo HDMI", 
            "gabinete", 
            "fonte atx"
        ];
        
        echo "<h4>sort: </h4>";

        echo "<pre>";
            print_r($array2);
        echo "</pre>";


        # array_keys() -> ORDENA UM ARRAY E REAJUSTA SEUS INDICES
        sort($array2); //retorna true ou false se conseguiu ordenar

        echo "<h2>sort: </h2>";

        echo "<pre>";
            print_r($array2);
        echo "</pre>";

        echo "<br><br><hr><br>";


        # -------------------------------------------------- #


        $array3 = [
            "notebook", 
            "teclado", 
            "mouse", 
            "cabo HDMI", 
            "gabinete", 
            "fonte atx",
            "monitor",
            "luminaria",
            "HD"
        ];
        
        echo "<h4>asort: </h4>";

        echo "<pre>";
            print_r($array3);
        echo "</pre>";

        # array_keys() -> ORDENA UM ARRAY PRESERVANDO SEUS INDICES

        asort($array3); //retorna true ou false se conseguiu ordenar

        echo "<h2>asort: </h2>";

        echo "<pre>";
            print_r($array3);
        echo "</pre>";

        echo "<br><br><hr><br>";
        

        # -------------------------------------------------- #


        $array4 = [
            "notebook", 
            "teclado", 
            "mouse", 
            "cabo HDMI", 
            "gabinete", 
            "fonte atx",
            "monitor",
            "luminaria",
            "HD"
        ];
        
        echo "<h2>Cont: </h2>";

        echo "<pre>";
            print_r($array4);
            # count() -> CONTA A QUANTIDADE DE ELEMENTOS DE UM ARRAY
            echo "<h3>" . count($array4) . "</h3>";
        echo "</pre>";

        echo "<br><br><hr><br>";
        

        # -------------------------------------------------- #



        $arr1 = ["osx", "windows"];
        $arr2 = ["linux"];
        $arr3 = ["solaris"];

        # array_merge() -> JUNTA UM OU MAIS ARRAYS
        $novo_array = array_merge($arr1, $arr2, $arr3);

        echo "<h2>array_merge: </h2>";

        echo "<pre>";
            print_r($novo_array);
        echo "</pre>";
        
        echo "<br><br><hr><br>";
        

        # -------------------------------------------------- #


        $string = "04/10/2022";

        echo "<h2>explode: </h2>";

        # explode(delimitador, string que quer dividir)
        #
        # -> DIVIDE UMA STRING BASEADO EM UM DELIMITADOR
        $arr_retorno = explode("/", $string);

        echo "<pre>";
            echo $string;
            print_r($arr_retorno);
            echo $arr_retorno[2] . "-" . $arr_retorno[1] . "-" . $arr_retorno[0];
        echo "</pre>";
        
        echo "<br><br><hr><br>";
        

        # -------------------------------------------------- #


        $ARR = ["A", "b", "x", "y"]; // a,b,x,t

        # implode(o que quero incluir, aonde quero incluir) 
        #
        # -> JUNTA ELEMENTOS DE UMA ARRAY EM UMA STRING
        $str_retorno = implode(", ", $ARR);
        echo $str_retorno;

        
        echo "<br><br><br>";

    ?>

</body>

</html>