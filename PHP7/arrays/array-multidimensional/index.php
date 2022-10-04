<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional - PHP</title>
</head>

<body>

    <?php 
        
        $lista_coisas = ["frutas","pessoas"];

        $lista_coisas["frutas"] = ["Banana","Maça","Abacate","uva"];

        $lista_coisas["pessoas"] = [
            "a" => ["nome" => "Vitor", "Idade" => 20, "Sexo" => "M"], 
            "b" => ["nome" => "Julia", "Idade" => 18, "Sexo" => "B"], 
            "c" => ["nome" => "Fernanda", "Idade" => 17, "Sexo" => "F"],
            "d" => ["nome" => "Thiago", "Idade" => 20, "Sexo" => "G"],
            "e" => ["nome" => "Marcos", "Idade" => 38, "Sexo" => "M"],
        ];

        $lista_coisas["pessoas"] = ["a" => [], "b"=> [], "c"=> []];
        $lista_coisas["pessoas"]["a"] = [
            "nome" => "Vitor",
            "idade" => 20,
            "email" => "vitoroliv@outlook.com"
        ];
        $lista_coisas["pessoas"]["b"] = [
            "nome" => "Julia",
            "idade" => 18,
            "email" => "julia.rosaparisi@gmail.com"
        ];
        $lista_coisas["pessoas"]["c"] = [
            "nome" => "Sueli",
            "idade" => 54,
            "email" => "sueliparisi@yahoo.com"
        ];


        echo "<pre>";
            print_r($lista_coisas);
        echo "</pre>";

        echo "<hr>";
        echo $lista_coisas["frutas"]["2"] . "<br>";
        print_r($lista_coisas["pessoas"]["b"]);
    ?>

</body>

</html>