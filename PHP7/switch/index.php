<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - PHP</title>
</head>
<body>
    
    <?php 

        $parametro = true;

        switch ($parametro) {

            case 1:
                echo 'entrou no case 1';
            break;
            
            case 'abc':
                echo 'entrou no case abc';
            break;
            
            case false:
                echo 'entrou no case 3false';
            break; 

            default:
            echo 'entrou no case default';
            break;

        } 

    ?>


</body>
</html>