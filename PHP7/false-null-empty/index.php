<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FALSE NULL e EMPTY - PHP</title>
</head>

<body>

    <?php 

        # false (true/false) -> variável boolean
        # null e empty -> valores especiais

        $funcionario1 = null;
        $funcionario2 = "";
        $funcionario3 = "false";


        # Valore NULL -> quando contiver NULL
        if(is_null($funcionario1)){
            echo "Sim, a variável é NULL";
        } else {
            echo "Não, a variável não é NULL";
        }

        echo "<br>";

        if(is_null($funcionario2)){
            echo "Sim, a variável é NULL";
        } else {
            echo "Não, a variável não é NULL";
        }

        echo "<br><br><br>";


        # Valore VAZIOS? -> quando estiver vazio ou null
        if(empty($funcionario1)){
            echo "Sim, a variável esta VAZIA";
        } else {
            echo "Não, a variável não esta VAZIA";
        }

        echo "<br>";

        if(empty($funcionario2)){
            echo "Sim, a variável esta VAZIA";
        } else {
            echo "Não, a variável não esta VAZIA";
        }

        echo "<br><br><br>";
        
        
        
        if(is_null($funcionario3)){
            echo "Sim, a variável é NULL";
        } else {
            echo "Não, a variável não é NULL";
        }
        echo "<br>";
        if(empty($funcionario3)){
            echo "Sim, a variável é VAZIA";
        } else {
            echo "Não, a variável não é VAZIA";
        }


    ?>

</body>

</html>