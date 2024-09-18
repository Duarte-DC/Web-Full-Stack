<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Extra (false, null e empty)</title>
    </head>

    <body>
        <?php
            /* 
                false   »   tipo de variável booleana
                null e empty    »   valores especiais   
            */

            $funcionario1 = null;
            $funcionario2 = '';
            $funcionario3 = false;

        ?> 

        <h1>Valores null</h1>

        <?php
            // valores null
            if (is_null ($funcionario1)) // essa operação retorna true ou false (true se for null e false se for diferente de null)
                echo 'Sim, a variável é null';
            else 
                echo 'A variável não é null';

            echo '<hr>';

            if (is_null ($funcionario2))
                echo 'Sim, a variável é null';
            else
                echo 'A variável não é null';

            echo '<hr>';

            if (is_null ($funcionario3))
                echo 'Sim, a variável é null';
            else
                echo 'A variável não é null';
        ?>

        <br> <br> <br>

        <h1>Valores vazios</h1>

        <?php
            // valores vazios
            if (empty ($funcionario1)) // essa operação retorna true ou false (true se for null e false se for diferente de null)
                echo 'Sim, a variável está vazia';
            else 
                echo 'A variável não está vazia';

            echo '<hr>';

            if (empty ($funcionario2))
                echo 'Sim, a variável está vazia';
            else
                echo 'A variável não está vazia';

            echo '<hr>';

            if (empty ($funcionario3))
                echo 'Sim, a variável está vazia';
            else
                echo 'A variável não está vazia';
        ?>
    </body>
</html>