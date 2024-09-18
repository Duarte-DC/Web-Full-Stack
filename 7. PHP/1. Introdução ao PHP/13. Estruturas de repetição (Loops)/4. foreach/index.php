<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Repetiçĩes com foreach</title>
    </head>

    <body>
        <?php
            $itens = [
                'sofá', 
                'mesa', 
                'cadeira', 
                'fogão', 
                'geleira'
            ];

            echo '<pre>';
            print_r ($itens);
            echo '</pre>';

            foreach ($itens as $item) {
                echo $item;

                if ($item == 'mesa')
                    echo ' <strong> * (compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras) * </strong>';

                echo '<br>';
            }
        ?>
    </body>
    
</html>