<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Pesquisa em Array - PHP</title>
</head>

<body>

    <?php 

        $lista_frutas = ["Banana", "Maçã", "Morango", "Carambola"];

        echo "<pre>";
            print_r($lista_frutas);
        echo "</pre>";


        # in_array(O que procura, aonde procura) 
        # -> True || false para existência do que esta procurando
        
        $existe = in_array("Maçã", $lista_frutas);
        // true texto = 1
        // false texto = vazio
        if($existe){
            echo "Sim, o valor pesquisado existe no Array";
        } else {
            echo "Não, o valor pesquisado não existe no Array";
        }

        echo "<br><br>";

        # array_search(O que procura, aonde procura)
        # -> retorna o índice do valor pesquisado caso ele exista
        
        $EXISTE = array_search("Abacate", $lista_frutas);
        // caso não exista retorna null
        
        if($EXISTE != null){
            echo "Sim, o valor pesquisado existe no Array";
        } else{
            echo "Não, o valor pesquisado não existe no Array";
        }

        # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
        # PESQUISA MULTIDIMENSIONAL

        $lista_coisas = [
            "frutas" => $lista_frutas,
            "pessoas" => ["João", "Maria"]
        ];

        echo "<pre>";
            print_r($lista_coisas);
        echo "</pre>";

        echo in_array("Morango", $lista_coisas["frutas"]);

    ?>

</body>

</html>