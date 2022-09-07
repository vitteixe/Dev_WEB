<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Variáveis - PHP</title>

</head>
<body>
    
    <?php 
        
        # String
        $nome = 'Vitor Teixeira';

        # Int
        $idade = 20;

        // float
        $peso = 65.5;

        // boolean     
        /* 
            True = 1 || False = vazio
        */
        $fumo = true;

        

    ?>

    <h1>Ficha cadastral</h1> <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?> anos</p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumo?></p>

</body>
</html>