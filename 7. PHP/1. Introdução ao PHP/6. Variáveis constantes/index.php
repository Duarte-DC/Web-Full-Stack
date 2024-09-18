<!DOCTYPE html>
<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Variáveis constantes</title>
    </head>

    <body>
        <?php
            //define ('NOME DA VARIAVEL', 'valor contido na variavel')
            define ('BD_URL', 'endereco_bd_dev');
            define ('BD_USUARIO', 'usuario_dev');
            define ('BD_SENHA', 'senha_dev');
        ?>

        <?= BD_URL . '<br/> <hr>' ?>
        <?= BD_USUARIO . '<br/> <hr>'?>
        <?= BD_SENHA ?>
    </body>
</html>