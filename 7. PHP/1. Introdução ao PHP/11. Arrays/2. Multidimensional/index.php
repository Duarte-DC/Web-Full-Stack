<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Array multidimensional</title>
    </head>
    
    <body>
        <?php
            /*$lista = [];
        
            $lista ['frutas'] = [];
            $lista ['frutas'] [0] = 'Banana'; 
            $lista ['frutas'] [1] = 'Maçã'; 
            $lista ['frutas'] [2] = 'Morango'; 
            $lista ['frutas'] [3] = 'Uva'; 
        
            $lista ['pessoas'] = [];
            $lista ['pessoas'] [0] = 'Duarte'; 
            $lista ['pessoas'] [1] = 'Artur'; 
            $lista ['pessoas'] [2] = 'Chamo'; 
            $lista ['pessoas'] [3] = 'Charles'; 


            $lista = [$listaFrutas = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'], 
                    $listaPessoas = [1 => 'Duarte', 2 => 'Artur', 3 => 'Chamo', 4 => 'Charles']]; */

            
           $lista = [];

           $lista ['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
           $lista ['pessoas'] = [1 => 'Duarte', 2 => 'Artur', 3 => 'Chamo', 4 => 'Charles'];

        ?>
        <pre>
            <?= print_r ($lista) ?>
        </pre>

        <hr>

        <p>
            <?= $lista ['pessoas'] [1] . ' ' . $lista ['pessoas'] [2] . ' ' . $lista ['pessoas'] [3] . ' ' . $lista ['pessoas'] [4]  ?>
        </p>
    </body>
</html>