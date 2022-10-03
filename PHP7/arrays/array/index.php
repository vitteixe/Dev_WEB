<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - PHP</title>
</head>

<body>

    <?php 
        
        # sequenciais (numéricos)
        echo "<h2>Arrays sequenciais (numéricos)</h2>";
        $lista_frutas = array("Banana", "Maçã", "Morango", "Uva", "Abacate");

        #incluindo valor no array
        $lista_frutas[] = "Carambola";

        echo "<pre>";
            var_dump($lista_frutas);
        echo "</pre>";
        
        echo "<hr>";

        echo "<pre>";
            print_r($lista_frutas);
        echo "</pre>";

        echo "<br><br>";

        echo $lista_frutas[4];

        echo "<br><br><hr><br><br>";


        # associativos
        echo "<h2>Arrays associativos</h2>";
        $lista_compras = [
            "Doce" => "Açúcar", 
            "b" => "Café", 
            "legume1" => "Batata"
        ];

        $lista_compras["j"] = "Trakinas";

        echo "<pre>";
            print_r($lista_compras);
        echo "</pre>";

        echo $lista_compras["legume1"];

    ?>

</body>

</html>