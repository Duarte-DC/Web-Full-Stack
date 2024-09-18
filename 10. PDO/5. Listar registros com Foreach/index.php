<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO ( $dsn, $usuario, $senha);

        $query = '
            select
                *
            from 
                usuarios
        ';

/*
        $statement = $conexao -> query ($query);
        $listaUsuarios = $statement -> fetchAll (PDO :: FETCH_ASSOC);
    
        // echo '<pre>';
        // print_r ($listaUsuarios);
        // echo '</pre>';
        
        echo $listaUsuarios [0] -> nome . ' - ';
        echo $listaUsuarios [1]-> email . '<br>';

        foreach ($listaUsuarios as $chave => $valor) {
        
            // echo '<pre>';
            // print_r ($valor);
            // echo '</pre>';
        
            echo $valor ['nome'];
            echo '<hr>';
        }
*/

        foreach ($conexao -> query ($query) as $chave => $valor) {
        /*
            echo '<pre>';
            print_r ($valor);
            echo '</pre>';
        */
            echo $valor ['nome'] . '<hr>';
        }
    }   catch (PDOException $e) {
            echo 'Erro: '. $e -> getCode () . ' Mensagem: ' . $e -> getMessage ();

            // registrar erro
        }
?>