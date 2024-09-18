<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Repetiçĩes com for</title>
    </head>

    <body>
        <?php
            for ($x = 1; $x <= 8; $x ++) {
                if ($x > 1)
                    echo 'Comeu ' . $x . ' fatias de pizza <br>';
                else
                    echo 'Comeu ' . $x . ' fatia de pizza <br>';
                
            }
        ?> 
    </body>
    
</html>