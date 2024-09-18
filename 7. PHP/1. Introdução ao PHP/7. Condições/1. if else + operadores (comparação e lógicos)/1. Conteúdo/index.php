<!DOCTYPE html>
<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <title>Condição if/else</title>
    </head>

    <body>
        <?php
            /*
                Operadores de comparação:

                »   == (igual)  »   verifica se os valores comparados são iguais
                »   === (idêntico)  »   verifica se os valores comparados são iguais e do mesmo tipo
                »   != (diferente)  »   verifica se os valores comparados são diferentes
                »   <> (diferente)  »   verifica se os valores comparados são diferentes
                »   !== (não idêntico)  »   verifica se os valores comparados são diferentes e de tipos diferentes
                »   < (Menor)   »   verifica se o valor da esquerda é menor que o valor da direita
                »   <= (Menor ou igual) »   verifica se o valor da esquerda é menor ou igual ao valor da direita
                »   > (Maior)   »   verifica se o valor a esquerda é maior que o valor da direita
                »   >= (Maior ou igual) »   veridica se o valor da esquerda é maior ou igual ao valor da direita
            */
            $numero1 = 10;
            $numero2 = 10;
            $numero3 = 20;

            if ($numero1 <> $numero2)
                echo 'Verdadeiro';
            else
                echo 'Falso';

            echo '<br/> <hr>';
            
            /*
                Operadores lógicos:
                
                »   AND ou && (e)   »   Verdadeiro se todas as expressões forem verdadeiras
                »   OR ou || (ou)   »   verdadeiro se pelo menos uma das expressões for verdadeira
                »   XOR (Xor)   »   Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas
                »   ! (Negação) »   Inverte o resultado da expressão
            */
            if ((22 == 22 && 3 == 3) && 5 != 5)
                echo 'Verdadeiro';
            else
                echo 'Falso';

            echo '<br/> <hr>';

            if ($numero1 == $numero2 XOR $numero3 > $numero1) 
                echo 'Verdadeiro';
            else 
                echo 'Falso';

            echo '<br/> <hr>';

            if ($numero1 == $numero2)
                echo 'Verdadeiro';
            else
                echo 'Falso';
        ?>

    </body>
</html>