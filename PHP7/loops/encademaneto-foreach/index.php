<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo Array com encadeamento de Foreach</title>
</head>

<body>

    <?php 

        $funcionarios = [
            ["nome" => "João", "salario" => 2500, "data_nasc" => "17/08/1980"],
            ["nome" => "Maria", "salario" => 3000],
            ["nome" => "Julia", "salario" => 2150],
        ];

        echo "<pre>";
            print_r($funcionarios);
        echo "</pre><br><hr>";


        # ARRAY as NOME DA VARIAVEL DO INDICE => ITEMD ENTRO DO INDICE
        foreach($funcionarios as $id => $func){
            
            foreach($func as $idfunc => $valor){
                echo "$idfunc -  $valor <br>";
            }

            echo "<hr><br>";

        }


    ?>

</body>

</html>