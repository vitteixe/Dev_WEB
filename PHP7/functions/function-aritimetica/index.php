<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos - PHP</title>
</head>
<body>
    
    <?php 

        $num1 = 13;
        $num2 = 4;

        echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
        echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
        echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
        echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>"; 
        # o % Módulo retornará sempre o resto INTEIRO
    ?>


</body>
</html>