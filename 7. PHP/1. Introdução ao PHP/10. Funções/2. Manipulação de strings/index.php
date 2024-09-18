<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Funções nativas para manipular strings</title>
    </head>

    <body>
        <?php
            /* 
                Funções nativas para manipular strings:
                »   strtolower ($texto)   »   Transforma todos os caracteres do string em minúsculos

                »   strtoupper ($texto)   »   Transforma todos os caracteres da string em MAIÚSCULOS

                »   ucfirst ($texto)    »   Transforma o primeiro caracter da string em MAIÚSCULO

                »   strlen ($texto)     »   Conta a quantidade de caracteres de uma string

                »   str_replace ('procura por', 'substitui por', $texto)    »   Substitui uma cadeira de caracteres por 
                    outra dentro de uma string 

                »   substr ($texto, <posição inicial>, <quantidade de caracteres>)    »    Retorna parte de uma string
            */

            $texto = 'curso completo de PHP';
        ?>

        <h1>Funções nativas para manipular strings</h1>

        <p> 
            Texto: <br>
            <?= $texto ?>
        </p>

        <hr>

        <p>
            » (strtolower): <br>
            <?= strtolower ($texto) ?>
        </p>

        <hr>

        <p>
            » (strtoupper): <br>
            <?= strtoupper ($texto) ?>
        </p>

        <hr>

        <p>
            » (ucfirst): <br>
            <?= ucfirst ($texto) ?>
        </p>

        <hr>

        <p>
            » (strlen): <br> 
            <?= strlen ($texto) ?>
        </p>

        <hr>

        <p>
            » (str_replace): <br>
            <?= str_replace ('PHP', 'PHP Orientado a Objetos', $texto)?>
        </p>

        <hr>

        <p>
            » (substr): <br>
            <?= '... ' . substr ($texto, 6, 8) .  ' ...'?>
        </p>

    </body>
</html>