<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting - PHP</title>
</head>
<body>
    
    <?php 

        $valor = true;

        # $valor2 = (double) $valor; //flout ou real
        # $valor2 = (string) $valor;
        $valor2 = (string) $valor;

        # int / integer    ->    float / string
        # double / float   ->    int / string
        # bool             ->    int / string
        # string           ->    bool / int 

        //gettype() => retorna o tipo da variável
        echo "$valor " . gettype($valor);
        echo '<br>';
        echo "$valor2 " . gettype($valor2);

    ?>


</body>
</html>