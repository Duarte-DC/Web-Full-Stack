<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Funções nativas para manipular arrays</title>
    </head>

    <body>
        <?php
            /*
                is_array (array)    »   Verifica se o parâmetro é um array
                array_keys (array)  »   Retorna todas as chaves de um array
                sort (array)    »   Ordena um array e reajusta seus indices
                asort (array)   »   Ordena um array, preservando seus indices
                count (array)   »   Conta a quantidade de elementos de um array
                array_merge (array)   »   Funde um ou mais arrays
                explode (array)    »    Divide uma string baseada em um delimitador
                implode (array)    »    Junta elementos de um array em uma string
            */
            
            ?>

        <!-- is_array () -->

        <h3> » is_array</h3>

        <?php
            $array = 'String';

            if (is_array ($array))
                echo 'Sim, é um array';
            else
                echo 'Não é um array'
        ?>

        <br> <br> <hr> <br>

        <!-- array_keys -->

        <h3> » array_keys</h3>

        <?php 
            $lista = [
                1 => 'a', 
                7 => 'b', 
                18 => 'c'
            ];
            
            echo '<pre>';
            print_r ($lista); 
            echo '</pre>';

            $chaves = array_keys ($lista);

            echo '<pre>';
            print_r ($chaves); 
            echo '</pre>';
        ?>
    
        <br> <hr> <br>

        <!-- sort () -->

        <h3> » sort</h3>

        <?php 
            $listaComprasEscritorio = [
                'cabo hdmi', 
                'mouse', 
                'teclado', 
                'monitor', 
                'fonte', 
                'adaptador', 
                'gabinete', 
                'memoria ram'
            ];
            
            echo '<pre>';
            print_r ($listaComprasEscritorio); 
            echo '</pre>';
            
            sort ($listaComprasEscritorio);

            echo '<pre>';
            print_r ($listaComprasEscritorio); 
            echo '</pre>';
        ?>

        <br> <hr> <br>

        <!-- asort () -->

        <h3> » asort</h3>

        <?php
            $listaComprasCozinha = [
                'fogao',
                'mesa',
                'congelador',
                'geleira',
                'microondas',
                'batedeira',
                'liquidificador'
            ];

            echo '<pre>';
            print_r ($listaComprasCozinha); 
            echo '</pre>';

            asort ($listaComprasCozinha);

            echo '<pre>';
            print_r ($listaComprasCozinha); 
            echo '</pre>';
        ?>

        <br> <hr> <br>

        <!-- count () -->

        <h3> » count</h3>

        <p>
            <?= 'A lista de compras para escritorio tem ' . count ($listaComprasEscritorio) . ' elementos' ?>
        </p>

        <p>
            <?= 'A lista de compras para cozinha tem ' . count ($listaComprasCozinha) . ' elementos'?>
        </p>

        <br> <hr> <br>
        
        <!-- array_merge () -->

        <h3> » array_merge</h3>

        <?php
            $listaFinal = array_merge ($listaComprasCozinha, $listaComprasEscritorio);

            echo '<pre>';
            print_r ($listaFinal); 
            echo '</pre>';
        ?>

        <br> <hr> <br>

        <!-- explode () -->

        <h3> » explode</h3>

        <?php
            $string = '12/07/2024';
            $arrayRetorno = explode ('/', $string);

            echo $string;

            echo '<pre>';
            print_r ($arrayRetorno); 
            echo '</pre>';
        ?>

        <br> <hr> <br>

        <!-- implode () -->

        <h3> » implode</h3>

        <?php 
            $listaLetras = [
                'a',
                'b',
                'c',
                'd',
                'e'
            ];

            echo '<pre>';
            print_r ($listaLetras); 
            echo '</pre>';

            $stringLetras = implode (', ', $listaLetras);

            echo $stringLetras;
        ?>
        
    </body>
</html>