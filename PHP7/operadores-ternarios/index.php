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
        $valor_compra = 54.36;

        $valor_frete = 125;

        $recebeu_desconto_frete = false;

        $valor_frete_aux = $cartao && $valor_compra >= 400 ? 0 : ($cartao && $valor_compra >= 300 ? 10 : ($cartao && $valor_compra >= 100 ? 25 : $valor_frete) );

        $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;

        /*
        if($cartao && $valor_compra >= 400){
            $valor_frete = 0;
        } else if ($cartao && $valor_compra >= 300){
            $valor_frete = 10;
        } else if ($cartao && $valor_compra >= 100){
            $valor_frete = 25;
        } else {
            $recebeu_desconto_frete = false;
        }
        */

    ?>

    <h1>Detalhe da compra</h1>

    <p>
        Possui cartão da loja?
        
        <?= 
                #      (separar '?')
                // condição ? true : false    
            $cartao ? '<b>Sim</b>': '<b>Não</b>' ?>
        <?php 
            
     
        ?>
    </p>

    <p>
        Valor da compra: R$ <?="<b>$valor_compra</b>"?>
    </p>

    <p>
        Recebeu desconto no frete?
        <?= $recebeu_desconto_frete ? 'SIMM' : 'NÃOO'; ?>
    </p>

    <p>
        Valor do frete: R$ <?=$valor_frete?>
    </p>


</body>
</html>