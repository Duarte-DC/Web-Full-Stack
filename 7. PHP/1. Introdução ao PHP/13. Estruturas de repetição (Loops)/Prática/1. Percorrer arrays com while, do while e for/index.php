<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <title>Percorrer arrays com while, do while e for</title>
    </head>

    <body>
        <?php
            $registros = [
                ['titulo' => 'Titulo notícia 1', 'conteudo' => 'conteúdo notícia 1 ...'],
                ['titulo' => 'Titulo notícia 2', 'conteudo' => 'conteúdo notícia 2 ...'],
                ['titulo' => 'Titulo notícia 3', 'conteudo' => 'conteúdo notícia 3 ...'],
                ['titulo' => 'Titulo notícia 4', 'conteudo' => 'conteúdo notícia 4 ...']
            ];

            echo '<pre>';
            print_r ($registros);
            echo '</pre>';

            $tamanhoArray = count ($registros);
            
            ?> <br> <hr> <br>
        
        <h2>Usando while</h2> <br>
        
        <?php
            $indice = 0;
            
            while ($indice < $tamanhoArray) {
                echo '<h4>' . $registros [$indice] ['titulo'] . '</h4>' . 
                    '<p> » ' . $registros [$indice] ['conteudo'] . '</p> <br>';

                $indice ++;
            }
        ?>  <br> <hr> <br>

        <h2>Usando do while</h2> <br>

        <?php
            $indice = 0;

            do {
                echo '<h4>' . $registros [$indice] ['titulo'] . '</h4>' . 
                    '<p> » ' . $registros [$indice] ['conteudo'] . '</p> <br>';
                
                $indice ++;
            } while ($indice < $tamanhoArray);
        ?> <br> <hr> <br>

        <h2>Usando for</h2> <br>

        <?php
            for ($indice = 0; $indice < $tamanhoArray; $indice ++)
                echo '<h4>' . $registros [$indice] ['titulo'] . '</h4>' . 
                    '<p> » ' . $registros [$indice] ['conteudo'] . '</p> <br>';
        ?>

    </body>

</html>