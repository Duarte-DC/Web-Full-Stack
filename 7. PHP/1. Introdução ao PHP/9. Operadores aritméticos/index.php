<!DOCTYPE html>
    <html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Operadores aritméticos</title>
    </head>

    <body>
        <h1>Operadores aritméticos</h1>

        <?php 
            /*
                (+) Adição - soma valores
                (-) Subtração - diferença entre valores
                (*) Multiplicação - produto dos valores
                (/) Divisão - Quociente dos valores
                (%) Módulo - Resto existente em uma operação de divisão
            */

            $numero1 = 20;
            $numero2 = 2;
        ?>
        <p>            
            <?= "» $numero1 + $numero2 = " . ($numero1 + $numero2) . " » Soma"?>
        </p>
        <p>    
            <?= "» $numero1 - $numero2 = " . ($numero1 - $numero2) . " » Subtração"?>
        </p>
        <p>
            <?= "» $numero1 * $numero2 = " . ($numero1 * $numero2) . " » Multiplicação"?>
        </p>
        <p>
            <?= "» $numero1 / $numero2 = " . ($numero1 / $numero2) . " » Divisão"?>
        </p>
        <p>
            <?= "» $numero1 % $numero2 = " . ($numero1 % $numero2) . " » Resto de divisão"?>
        </p>

        <br>

        <h3> » Operadores aritméticos na atribuição</h3>

        <?php
            /* 
                Operações aritméticas na atribuição de valores
                    +, -, *, /
            */

            // Metodo 1:
                echo 'Atribuição Metodo 1: <br> ';

                $metodoAtribuicao1 = 10;
                echo '» Valor: ' . $metodoAtribuicao1;
                
                $metodoAtribuicao1 = $metodoAtribuicao1 + 5;
                echo '<br>» Depois da atrubuicao o valor fica: ' . $metodoAtribuicao1;

            // Metodo 2
                echo '<br> <br> Atribuição Metodo 2: <br> ';
                
                $metodoAtribuicao2 = 10;
                echo '» Valor: ' . $metodoAtribuicao2;

                $metodoAtribuicao2 += 5;
                echo '<br>» Depois da atrubuicao o valor fica: ' . $metodoAtribuicao2;

        ?>

        <br> <br> <br>
        
        <h3> » Operadores de incremento e decremento </h3>
        
        <?php
            /* 
                Operações de incimento e decremento
                    »   Pré-incremento (++$a)   -   Adiciona uma unidade antes de retornar $a
                    »   Pós-incremento ($a++)   -   Retorna $a e depois adiciona uma unidade
                    »   Pré-decremento (--$a)   -   Diminui uma unidade antes de retornar $a
                    »   Pós-decremento ($a--)   -   Retorna $a e depois diminui uma unidade
            */

            echo '<strong>Pós-incremento</strong> <br>';
            $a = 7;

            echo "O valor contido em a é $a <br>";
            echo 'O valor contido em a apos o incremento é ' . $a++ . '<br>';
            echo "O valor contido em a é $a <br>";


            echo '<br> <strong>Pre-incremento</strong> <br>';
            $b = 7;

            echo "O valor contido em b é $b <br>";
            echo 'O valor contido em b apos o incremento é ' . ++$b . '<br>';

            echo '<br> <strong>Pós-decremento</strong> <br>';
            $c = 7;

            echo "O valor contido em c é $c <br>";
            echo 'O valor contido em c apos o decremento é ' . $c-- . '<br>';
            echo "O valor contido em c é $c <br>";

            echo '<br> <strong>Pre-decremento</strong> <br>';
            $d = 7;

            echo "O valor contido em d é $d <br>";
            echo 'O valor contido em d apos o decremento é ' . --$d . '<br>';
        ?>
    </body>
</html>