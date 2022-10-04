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

        /* 
        while(condição){

        }

        
        do {

        } while(condição);
        */
        
        # for(variavel; condicao; incremento){}
        
        for($i = 0; true; $i++){

            if($i >= 20){
                break;
            }

            echo $i . "<br>";
        }
    


    ?>

</body>

</html>