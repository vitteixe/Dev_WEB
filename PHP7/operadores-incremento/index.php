<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Incremento e decremento - PHP</title>
</head>

<body>

    <h3>Pós-incremento</h3>

    <?php

    $a = 7;
    echo "O valor contido em a é $a <br>";
    echo "O valor contido em a após o incremento é " . $a++ . "<br>";
    echo "O valor contido em a é $a <br>";
    ?>

    <h3>Pré-incremento</h3>

    <?php

    $a = 9;
    echo "O valor contido em a é $a <br>";
    echo "O valor contido em a após o incremento é " . ++$a . "<br>";
    echo "O valor contido em a é $a <br>";
    ?>



    <h3>Pós-decremento</h3>

    <?php

    $a = 23;
    echo "O valor contido em a é $a <br>";
    echo "O valor contido em a após o decremento é " . $a-- . "<br>";
    echo "O valor contido em a é $a <br>";
    ?>

    <h3>Pré-decremento</h3>

    <?php

    $a = 12;
    echo "O valor contido em a é $a <br>";
    echo "O valor contido em a após o decremento é " . --$a . "<br>";
    echo "O valor contido em a é $a <br>";
    ?>

</body>

</html>