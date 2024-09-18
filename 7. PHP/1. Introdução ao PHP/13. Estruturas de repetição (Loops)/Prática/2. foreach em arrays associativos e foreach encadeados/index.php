<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <title>Foreach em arrays associativos e foreach encadeados</title>
    </head>

    <body>
        <?php
            $funcionarios = [
                ['Nome' => 'Duarte Charles', 'Salario' => 250000, 'Nascimento' => '23.09.2000'],
                ['Nome' => 'Ana Charles', 'Salario' => 240000, 'Nascimento' => '27.09.1995'],
                ['Nome' => 'Isabel Eunice', 'Salario' => 260000, 'Nascimento' => '06.01.1994'],
                ['Nome' => 'Aida Chamo', 'Salario' => 150000, 'Nascimento' => '11.07.1966'],
                ['Nome' => 'Artur Duarte', 'Salario' => 100000, 'Nascimento' => '04.12.1968']
            ];
        ?>

        <?php
            echo '<pre>';
            print_r ($funcionarios);
            echo '</pre>';
        ?>

        <br> <hr> <br>
        
        <?php
        /*
            foreach ($funcionarios as $indice => $nomeFuncionario) {
                echo 'ID: ' . $indice . '<br> Nome: ' . $nomeFuncionario . '<br> <br>';
            }
        */
            foreach ($funcionarios as $indice => $funcionario) {

                if ($indice != 0)
                    echo '<br>';

                foreach ($funcionario as $indice2 => $valor) {
                    echo $indice2 . ': ' . $valor . '<br>';
                }

                echo '<br> <hr>';
            }
        ?>
    </body>

</html>