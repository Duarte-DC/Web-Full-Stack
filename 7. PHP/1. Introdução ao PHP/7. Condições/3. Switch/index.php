<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Condição (switch)</title>
    </head>
    
    <body>
        <?php
            $opcao = '2';

            switch ($opcao) {
                case 1: echo 'opção 1'; break;
                case 2: echo 'opção 2'; break;
                case 3: echo 'opção 3'; break;
                default: echo 'opção Inválida'; break;
            }
            // mesmo que os tipos sejam diferentes o PHP tem a inteligencia de fazer casting automatico como no exemplo a cima
        ?>
    </body>
</html>