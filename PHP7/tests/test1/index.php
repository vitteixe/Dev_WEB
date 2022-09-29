<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST1 Calcular Imposto de Renda - PHP</title>
</head>

<body>


    <form method="post" action="">

        <label for="salario">Digite seu salário</label>
        <input name="salario" type="text"> 

        <button type="submit" name="submit"> Calcular</button>

    </form>


    <?php 
        function calcIRPF($salario){

            $imposto = 0;

            if($salario <= 1903.98){
                $imposto = 0;
            } else if ($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = ($salario * 7.5)/100;
            } else if ($salario >= 2826.66 && $salario <= 3751.05){
                $imposto = ($salario * 15)/100;
            } else if ($salario >= 3751.06 && $salario <= 4664.68){
                $imposto = ($salario * 22.5)/100;
            } else {
                $imposto = ($salario * 27.5)/100;
            }
            echo "<br>Como você recebe <b>R$". number_format($salario, 2) ."</b>, você pagará <b>R$". number_format($imposto, 2) ."</b> de Imposto de Renda";
        }

        if(isset($_POST["submit"])){

            $salario = $_POST["salario"];

            calcIRPF($salario);
            
        }

    ?>



</body>

</html>