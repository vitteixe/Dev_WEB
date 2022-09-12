<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>If / Else (Operadores condicionais) - PHP</title>

</head>
<body>
    
    <?php 
    /* 
        == igual
        === idêntico (igual e do mesmo tipo)
        != ou <> diferente
        !== não idêntico
        < menor
        > maior
        <= menor ou igual
        >= maior ou igual
    */

        if(25 >= 28){
            echo "Verdadeiro! <br>";
        } else {    
            echo "Falso <br>";
        }

        
        // caso seja apenas uma linha de comando, poderá descartar as chaves { }            
        if ("okay" === "okay") echo " sim okay === okay";

    ?>

</body>
</html>