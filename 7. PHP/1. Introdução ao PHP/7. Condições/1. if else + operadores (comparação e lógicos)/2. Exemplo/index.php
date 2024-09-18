<!DOCTYPE html>
<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Exemplo</title>
    </head>

    <body>
       <!-- 
            Exemplo ecommerce: Oferecer fretes gratuítos caso o usuário tenha cartão da loja e também se a compra for superior a 1000MT 
        -->
        <?php

            $cartaoLoja = true;
            $valor = 1000;
            $frete = 100;

            $recebeuDesconto = false;

            if ($cartaoLoja && $valor >= 1000) {
                $frete = 0;
                $recebeuDesconto = true;
            }
        ?> 

        <h1>Detalhes do pedido</h1>

        <p>
            O cliente possui cartão da loja? 
            <?php
                if ($cartaoLoja)
                    echo '<br> - Sim';
                else 
                    echo '<br> - Não';
            ?>
        </p>

        <p>
            Valor da compra:
            <?= $valor . 'MT'?>
        </p>

        <p>
            Desconto aplicado? 
            <?php 
                if ($recebeuDesconto)
                    echo '<br> - Sim';
                else 
                    echo '<br> - Não'
            ?>
        </p>

        <p>
            Custo do frete:
            <?= $frete . 'MT'?>
        </p>
    </body>
</html>