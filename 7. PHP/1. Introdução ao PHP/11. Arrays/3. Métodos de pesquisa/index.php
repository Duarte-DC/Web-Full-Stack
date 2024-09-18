<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Arrays - Métodos de pesquisa</title>
    </head>
    
    <body>
        <h1>Métodos de pesquisa</h1>

        <hr>

        <h3>Usando array unidimensional</h3>

        <?php
            /*
                »   in_array () » retorna true ou false para existência do que está a ser pesquisado
                »   array_search () » retorna o indice do valor pesquisado, caso ele exista
            */
            $listaFrutas = [1 => 'Banana', 2 => 'Manga', 3 => 'Morango', 4 => 'Uva'];

            $existe = in_array ('Morango', $listaFrutas);

            $indice = array_search ('Morango', $listaFrutas);
        ?>

        <pre>
            <?= print_r ($listaFrutas) ?>
        </pre>
        
        <br> <br>

        <?php
            if ($existe)
                echo 'A fruta '. $listaFrutas [$indice] . ' encontra-se na lista e na posição ' . $indice;
            else
                echo 'A fruta pesquisada não existe no array';        
        ?>

        <br> <hr> <br> <br> <hr>


        <h3>Usando array multidimensional</h3>

        <?php
            $lista = [
                'frutas' => $listaFrutas, 
                'pessoas' => [1 => 'Duarte', 2 => 'Artur', 3 => 'Chamo', 4 => 'Charles']
            ];

            $existe = in_array ('Duarte', $lista ['pessoas']);

            $indice = array_search ('Duarte', $lista ['pessoas']);
        ?>

        <pre>
            <?= print_r ($lista) ?>
        </pre>

        <br> <br>

        <?php
            if ($existe != null)
                echo 'O nome ' . $lista ['pessoas'] [$indice] . ' encontra-se na lista e na posição ' . $indice;
            else
                echo 'O nome pesquisado não existe no array';
        ?>

        <hr>

    </body>
</html>