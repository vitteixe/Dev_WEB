<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach (loops) - PHP</title>
</head>

<body>

    <?php 

        $itens = [
            "sofá",
            "mesa",
            "cadeira",
            "fogão",
            "geladeira"
        ];

        echo "<pre>";
            print_r($itens);
        echo "</pre>";

        # foreach(Array que queremos percorrer + AS + variavel)
        foreach($itens as $item){
            echo "$item";
            
            if($item == "mesa"){
                echo " (*compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras*) <br>";
            }

            echo "<br>";

        }


    ?>

</body>

</html>