<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Array unidimensional</title>
    </head>

    <body>
        <h1>Arrays sequenciais</h1>

        <?php
            //  »   arrays sequenciais (numéricos)
            $frutas = ['Banana', 'Abacaxi', 'Papaia', 'Manga', 'Melancia', 'Uva'];
            
            $frutas [] = 'Laranja'; // adiciona um novo olemento ao array
            
            
        ?>

        <pre>
            <?=
                var_dump ($frutas);

                echo '<br> <hr> <br>';

                print_r ($frutas);
            ?>
        </pre>
        
        <hr>
        
        <p>
            <?= ' » ' . $frutas [4] .'<br> » '. $frutas [6] . '<br> » ' . $frutas [1]; ?>
        </p>

        <hr> <hr> <br> <br> <hr> <hr>

        <h1>Arrays associativos</h1>

        <?php
            //  »   arrays associativos

            //$lista = ['a' => 'Rádio', 'b' => 'Televisão', 'c' => 'Microondas', 'd' => 'Geleira'];
    
            $lista ['a'] = 'Rádio';
            $lista ['b'] = 'Televisão';
            $lista ['c'] = 'Microondas';
            $lista ['d'] = 'Geleira';
        
        ?>

        <pre>
            <?= 
                var_dump ($lista); 

                echo '<br> <hr> <br>';
                
                print_r ($lista)
            ?>
        </pre>
        
        <hr>

        <p>
            <?= ' » ' . $lista ['b'] . '<br> » ' . $lista ['d']?>
        </p>

    </body>
</html>