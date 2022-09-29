<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Incremento e decremento - PHP</title>
</head>

<body>

    <?php 

        function BV(){

            echo "<h1>Hellow World! </h1><br><h3>Bem-vindo ♥</h3>";

        }

        function calcArea($largura, $comprimento){

            $area = $largura * $comprimento;

            return $area;

        }

        $results = calcArea(30,50);

        

    ?>

    <?= 
        BV() . "<br> A área é ",
        $results ."m²";
    ?>

</body>

</html>