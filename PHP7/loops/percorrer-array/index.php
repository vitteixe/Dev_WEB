<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo Arrays (loops) - PHP</title>
</head>

<body>

    <?php 

        $registros = [
            "Titulo noticia 1", 
            "Titulo noticia 2", 
            "Titulo noticia 3"
        ];

        # WHILE

        $idx = 0;

        while($idx < 3){

            echo $registros[$idx] . "<hr>";
            $idx++;

        }

        echo  "<br><br><br><hr>";

        #######################################################

        $registros1 = [
            ["titulo" => "Titulo noticia 1", "conteudo" => "Conteúdo noticia 1"],
            ["titulo" => "Titulo noticia 2", "conteudo" => "Conteúdo noticia 2"],            
            ["titulo" => "Titulo noticia 3", "conteudo" => "Conteúdo noticia 3"],
            ["titulo" => "Titulo noticia 4", "conteudo" => "Conteúdo noticia 4"],
            ["titulo" => "Titulo noticia 5", "conteudo" => "Conteúdo noticia 5"],
        ];

        echo "<pre>";
            print_r($registros1);
        echo "</pre><br><br><hr>";

        $idx1 = 0;
        echo "O array possui: " . count($registros1) . " registros. <br>";
        # CONT -> conta a quantidade de elemento de array
        /*
        while($idx1 < count($registros1)){

            echo "<h3>". $registros1[$idx1]['titulo'] . "</h3>";
            echo "<p>". $registros1[$idx1]["conteudo"] ."</p>";
            echo "<br><hr>";
            $idx1++;
            
        }
        */

        # DO-WHILE
        /*
        do {
            echo "<h3>". $registros1[$idx1]['titulo'] . "</h3>";
            echo "<p>". $registros1[$idx1]["conteudo"] ."</p>";
            echo "<br><hr>";
            $idx1++;
        } while($idx1 < count($registros1));
        */

        for($IDX = 0; $IDX < count($registros1); $IDX++){
            echo "<h3>". $registros1[$IDX]['titulo'] . "</h3>";
            echo "<p>". $registros1[$IDX]["conteudo"] ."</p>";
            echo "<br><hr>";
        }

        

    ?>

</body>

</html>