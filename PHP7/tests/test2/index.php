<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST2 Números da MegaSena - PHP</title>
</head>

<body>


    

    <?php 

        $numbers = [];
        
        while(count($numbers) <= 5){

            $num = rand(1, 60);

            if(!in_array($num, $numbers)){
                $numbers[] = $num;
            }

        }

        echo "<pre>";
            print_r($numbers);
        echo "</pre>";

    ?>



</body>

</html>