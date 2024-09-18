<!DOCTYPE html>
<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Condições encadeadas (else if)</title>
    </head>

    <body>
        <!-- 
            Oferecer fretes gratuítos caso o usuário tenha cartão da loja e também se a compra for superior a 1000MT
            e reduzir 50% do valor do frete se o valor das compras for igual ou superior a 750MT e 25% se o valor 
            das compras for superior ou igual a 500MT

        -->
        <?php

            $cartaoLoja = true;
            $valor = 1000;
            $frete = 100;

            $recebeuDesconto = true;

            if ($cartaoLoja && $valor >= 1000)
                $frete = 0;

                else if ($cartaoLoja && $valor >= 750)
                    $frete = 100 - (100 * 0.5);

                    else if ($cartaoLoja && $valor >= 500)
                        $frete = 100 - (100 * 0.25);

                        else
                            $recebeuDesconto = false;
        ?>


        <h1>Detalhes do pedido</h1>

        <!-- 
            Operador ternário: podem ser utilizados para condições simples
            <condição> ? true : false 
        -->
        
    
        <?php 
            /*
            $freteAux = $cartaoLoja && $valor >= 1000 ? 0 : 
                    ($cartaoLoja && $valor >= 750 ? (100 - (100 * 0.5)) : 
                    ($cartaoLoja && $valor >= 500 ? (100 - (100 * 0.25)) : 
                    $frete));

            $recebeuDesconto = $frete != freteAux ? true : false;

            $frete = freteAux;
            */
        ?>
    
        <p>
            O cliente possui cartão da loja? 
            <?= $cartaoLoja ? '<br> - Sim' : '<br> - Não'; ?>
        </p>

        <p>
            Valor da compra:
            <?= $valor . 'MT'?>
        </p> 

        <p>
            Desconto aplicado? 
            <?php 
                $teste = $recebeuDesconto ? '<br> - Sim': '<br> - Não';
                echo $teste;
            ?>
        </p>

        <p>
            Custo do frete:
            <?= $frete . 'MT'?>
        </p>
    </body>
</html>