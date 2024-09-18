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
                where
                    id = 2
        ';

        $statement = $conexao -> query ($query);

        // FETCH_NUM    »   para índices numéricos
        // FETCH_OBJ    »   para recuperar objectos

        $usuario = $statement -> fetch (PDO :: FETCH_OBJ);

        echo '<pre>';
        print_r ($usuario);
        echo '</pre>';

        echo $usuario -> nome . ' - ';
        echo $usuario -> email . '<br>';

    }   catch (PDOException $e) {
            echo 'Erro: '. $e -> getCode () . ' Mensagem: ' . $e -> getMessage ();

            // registrar erro
        }
?>