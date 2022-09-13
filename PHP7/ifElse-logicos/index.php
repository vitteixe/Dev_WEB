<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>If / Else (Operadores lógicos) - PHP</title>

</head>
<body>
    
    <?php 
        /* 
        AND ou && - Todas as expressões deve ser verdadeiras
        OR ou || - Apenas uma expressão deve ser verdadeira
        XOR - Uma deve ser verdadeira e outra falsa (retornará TRUE)
        ! - inverter o resultado da expressão (TRUE será false || FALSE será true)
        */

        if(22 == 22 && 3 == 3 && 5 != 5){
            echo "Verdadeiro! <br>";
        } else {    
            echo "Falso <br>";
        }


    ?>

</body>
</html>