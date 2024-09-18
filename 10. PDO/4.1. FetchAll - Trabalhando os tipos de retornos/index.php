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

        $statement = $conexao -> query ($query);

        // FETCH_NUM    »   para índices numéricos
        // FETCH_OBJ    »   para recuperar objectos

        $lista = $statement -> fetchAll (PDO :: FETCH_OBJ);

        echo '<pre>';
        print_r ($lista);
        echo '</pre>';

        echo $lista [0] -> nome . ' - ';
        echo $lista [0] -> email . '<br>';

        echo $lista [1] -> nome . ' - ';
        echo $lista [1] -> email . '<br>';

    }   catch (PDOException $e) {
            echo 'Erro: '. $e -> getCode () . ' Mensagem: ' . $e -> getMessage ();

            // registrar erro
        }
?>