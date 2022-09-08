<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Concatenação - PHP</title>

</head>
<body>
    
    <?php 

        $nome = 'Vitor';
        $cor = 'azul';
        $idade = 20;
        $atv_preferida = 'assistir série';

        // operador .
        echo 'Olá ' . $nome .', vi que sua cor preferida é '.$cor.', estou vendo também que você possui '.$idade.' anos e que gosta de '.$atv_preferida . '<br><br>';

        // aspas duplas *********
        echo "Olá $nome!, sua cor favorita é $cor?"

        


    ?>

</body>
</html>