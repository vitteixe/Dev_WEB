<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Datas - PHP</title>
</head>

<body>

    <?php 
        # documentações do PHP https://www.php.net/

        # recuperação de data atual / data corrente
        echo date("d / M / Y  H:i:s");
        echo "<br>";


        echo date_default_timezone_get();
        # Atualizando o continente da hora
        date_default_timezone_set("Europe/Brussels");
        
        echo "<br><br>";
        echo date_default_timezone_get() . "<br>";
        echo date("d / M / Y  H:i:s");

        echo "<br><br><br><hr><br><br><br>";

        # -------------------------------------------------------- #
        # calculo de datas (sempre utilize ANO/MES/DIA)

        $data_inicial = "2022-04-17";
        $data_final = "2022-10-03";

        # Convertendo data em timestamp 
        # retornará em segundos des de 01/01/1970

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo "Data Inicial = ". $data_inicial . " = " . $time_inicial;
        echo "<br>";
        echo "Data final = ". $data_final . " = " . $time_final;

        $diferenca_times = $time_final - $time_inicial; //abs retorna valor positivo
        echo "<br><br>";
        echo "A diferença de segundos entre a data inicial e final é $diferenca_times";

        echo "<br><br>";

        # segundo em um dia
        $sDia = 24 * 60 * 60;
        echo "Um dia possui $sDia segundos";

        echo "<br><br>";

        $diferenca_dias = $diferenca_times / $sDia;
        echo "A diferença entre $time_inicial e $time_final é de $diferenca_dias dias"

    ?>

</body>

</html>