<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Funções nativas para tarefas matemáticas</title>
    </head>

    <body>
        <?php 
            /*
                Funções nativas para terefas matemáticas:
                »   ceil ($numero)  »   Arredonda o valor para cima

                »   floor ($numero) »   Arredonda o valor para baixo

                »   round ($numero) »   Arredonda o valor com base nas casas decimais

                »   rand () » Gera um inteiro aleatório

                »   sqrt ($numero) »    Retorna a raíz quadrada
            */

            $numero = 10.6;
        ?>

        <h1>Funções nativas para terefas matemáticas</h1>

        <p>
            Número: <br>
            <?= $numero ?>
        </p>

        <hr>

        <p>
            » (ceil): <br>
            <?= ceil ($numero)?>
        </p>

        <hr>

        <p>
            » (floor): <br>
            <?= floor ($numero)?>
        </p>

        <hr>

        <p>
            » (round): <br>
            <?= round ($numero) ?>
        </p>

        <hr>

        <p>
            » (rand): <br>
            <?= rand () ?>
        </p>

        <hr>

        <p>
            » (sqrt): <br>
            <?= sqrt ($numero) ?>
        </p>
    </body>
</html>