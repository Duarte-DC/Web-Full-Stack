<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Repetiçĩes com do while</title>
    </head>

    <body>
        <?php
            $comeu;
            $fatias = 8;

            do {
                $comeu ++;
                -- $fatias;
            
                echo 'Comeu: ' . $comeu . '<br> » ' . $fatias . ' fatias restantes<br>';

            } while ($fatias <= 8 && $fatias >= 1);
        ?>
    </body>
    
</html>