<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While (loops) - PHP</title>
</head>

<body>

    <?php 
        $num = 0;

        echo " -- Início do LOOP -- <br>";

        # condição = Operadores comparação / lógicos
        while($num <= 100) {
            echo $num . "<br>";

            $num += 5;   // critério de parada

        }

        echo " -- Fim do LOOP -- ";

    ?>

</body>

</html>