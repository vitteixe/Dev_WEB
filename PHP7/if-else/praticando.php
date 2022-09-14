<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com IF/Else - PHP</title>
</head>
<body>
    
    <?php 

        $cartao = true;
        $valor_compra = 225;

        $valor_frete = 50;

        $recebeu_desconto_frete = false;

        if($cartao == true && $valor_compra >= 100){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }

    ?>

    <h1>Detalhe da compra</h1>

    <p>
        Possui cartão da loja?
        <?php 
            if($cartao){
                echo '<b>SIM</b>';
            } else{
                echo '<b>NÃO</b>';
            }
        ?>
    </p>

    <p>
        Valor da compra: R$ <?="<b>$valor_compra</b>"?>
    </p>

    <p>
        Recebeu desconto no frete?
        <?php 
            if($recebeu_desconto_frete){
                echo '<b>SIM</b>';
            } else{
                echo '<b>NÃO</b>';
            }
        ?>
    </p>

    <p>
        Valor do frete: R$ <?=$valor_frete?>
    </p>


</body>
</html>