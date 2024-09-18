<!DOCTYPE html>
<html lang  = "pt-pt">
<head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <title>Funções - Introdução</title>
    </head>

    <body>
        <?php 
            // void (sem retorno)
            function exibirBoasVindas () {
                echo 'Bem vindo a sessão de funções em PHP!';
            }

            // return (com retorno)
            function calcularAreaTerreno ($x , $y) {
                return $x * $y;
            }

            $largura = 15;
            $comprimento = 30;
        ?>

        <p>
            <?= exibirBoasVindas () ?>
        </p>

        <p>
        q<?= calcularAreaTerreno ($largura, $comprimento) ?>
        </p>
    </body>
</html>