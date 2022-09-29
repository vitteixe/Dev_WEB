<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em Strings - PHP</title>
</head>

<body>

    <?php 

        $texto = "curso Completo de PHP";

        # string to lower    (caixa BAIXA)
        echo "$texto <br>";
        echo strtolower($texto) . "<br><br><hr>";
        
        # string to upper    (caixa ALTA)
        echo "$texto <br>";
        echo strtoupper($texto) . "<br><br><hr>";

        # upper case first    (primeira letra em caixa ALTA)
        echo "$texto <br>";
        echo ucfirst($texto) . "<br><br><hr>";

        # string length    (tamanho da string)
        echo "$texto <br>";
        echo strlen($texto) . "<br><br><hr>";

        # string replace    (substituir string)
        echo "$texto <br>";
        echo str_replace("PHP", "JavaScript", $texto) . "<br><br><hr>";

        # substr     (Cortar string )
        echo "$texto <br>";
        echo substr($texto, 0, 14) .  "...";

    ?>

</body>

</html>