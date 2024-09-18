<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Repetiçĩes com while</title>
    </head>

    <body>
        <h3>Exemplo comer fatias de pizza</h3>

        <?php
            $fatias = 8;
            $comeu;

            echo '-- inicio do loop -- <br> <br>';
            while ($fatias <= 8 && $fatias >= 1) {

                -- $fatias;
                $comeu ++;
                
                echo 'Comeu: ' . $comeu . '<br> » ' . $fatias . ' Fatias restantes <br>';
            }
            echo '<br>-- fim do loop --';
        ?>

        <br> <hr> <br>

        <h3>Exemplo contagem crescente</h3>

        <?php 
            $num = 1;
            echo '-- inicio do loop -- <br> <br>';
            while ($num < 10) {
                echo $num . '<br>';
                
                if ($num >= 5)
                    break;

                $num++;
            }
            echo '<br>-- fim do loop --'
        ?>
    </body>

</html>