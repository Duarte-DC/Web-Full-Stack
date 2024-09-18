<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Casting de tipos (int), (bool), (floa) e (string)</title>
    </head>

    <body>
        <?php 
            // gettype () » retorna o tipo da variável
            $valor = 10;

            echo $valor . ' '. gettype ($valor);
            
            echo '<br> <br>';

            /* 
                »   float / double
                »   int / integer
                »   string
                »   bool / boolean

                Possíveis conversões:
                    »   int » string / float
                    »   float » string / int
                    »   string » string / int / float / boolean
                    »   boolean » string / int

            */
            $valorCast = (float) $valor;
            echo $valorCast . ' ' . gettype ($valorCast);
        ?>
    </body>
</html>