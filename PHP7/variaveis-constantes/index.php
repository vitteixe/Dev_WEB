<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Variáveis constantes - PHP</title>

</head>
<body>
    
    <?php 

        // Variáveis constantes não podem ser modificadas após declaradas.
        define("BD_URL", "endereco_bd_dev");
        define("BD_USUARIO", "usuario_dev");
        define("BD_SENHA", "senha_dev");
        
        echo BD_URL."<br>";
        echo BD_USUARIO."<br>";
        echo BD_SENHA;

    ?>

</body>
</html>