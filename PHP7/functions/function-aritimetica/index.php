<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas - PHP</title>
</head>

<body>

    <?php 

        $num = 8.5;

        $num2 = 7.3; 

        # arredonda para cima (ceil)
        echo "Número $num <br>";
        echo ceil($num) . "<hr><br><br>";

        # arredonda para baixo (floor)
        echo "Número $num <br>";
        echo floor($num) . "<hr><br><br>";

        # arredonda com base na fração (round)
        echo "Número 1: $num <br>";
        echo round($num) . "<br>";
        echo "Número 2: $num2 <br>";
        echo round($num2) . "<hr><br><br>";

        # gera valores aleatórios (rand (num1 até num2))
        echo rand(10,20) . "<hr><br><br>";

        # raiz quadrada (sqrt)
        echo "Número $num <br>";
        echo sqrt($num) . "<hr><br><br>";

    ?>

</body>

</html>