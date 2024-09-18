<!DOCTYPE html>
<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Variáveis</title>
    </head>

    <body>
        <!-- Comentário html -->
        <?php
            // comentário de uma linha

            # comentário de uma linha estilo shell

            /*
                comentário
                de
                multiplas
                linhas
            */

            $nome = 'Duarte Charles'; // String
            $idade = 23; // int
            $peso = 69.2; // float
            $fluente = true; // boolean: quando imprimimos em HTML (true = 1) (false = vazio)
            $respostaFluente = 'Sim';

            if ($fluente == false)
                $respostaFluente = 'Não'
        ?>

        <h1>Ficha cadastral</h1>

        <p>
            Nome:
            <?= $nome ?>
        </p>
        <p>
            Idade: 
            <?= $idade ?>
        </p>
        <p>
            Peso:
            <?= $peso ?>
        </p>
        <p>
            Fluente em português:
            <?= $respostaFluente ?>
        </p>

    </body> 
</html>