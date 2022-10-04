<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoWhile (loops) - PHP</title>
</head>

<body>

    <?php 

        $x = 0;

       do {
            echo ($x+=3) . "<br>";

            //continue
            //break
       } while($x < 9); 

    ?>

</body>

</html>