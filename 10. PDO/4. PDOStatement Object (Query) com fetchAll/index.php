<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO ( $dsn, $usuario, $senha);
/*
        $query = '
            create table if not exists usuarios (
                id int not null primary key auto_increment,
                nome varchar (50) not null,
                email varchar (100) not null,
                senha varchar (32) not null
            )
        ';

        $retorno = $conexao -> exec ($query);

        echo $retorno;
        // retorna 0

        $query = '
            insert into usuarios (
                nome,
                email,
                senha
            )   values 
                    ("Duarte Charles", "duartecharles.dc@gmail.com", "12345678");
        ';

        $retorno = $conexao -> exec ($query);

        $query = '
            insert into usuarios (
                nome,
                email,
                senha
            )   values 
                    ("Chamo Charles", "duartecharles226@gmail.com", "87654321");
        ';

        $retorno += $conexao -> exec ($query);

        $query = '
            insert into usuarios (
                nome,
                email,
                senha
            )   values 
                    ("Duarte dc", "duartedc@gmail.com", "dc123456");
        ';

        $retorno += $conexao -> exec ($query);
*/
        $query = '
            select
                *
            from 
                usuarios
        ';

        $statement = $conexao -> query ($query);
/*
        echo '<pre>';
        print_r($statement);
        echo '</pre>';
*/
        $lista = $statement -> fetchAll ();
/*
        echo '<pre>';
        print_r($lista);
        echo '</pre><br>';
*/

        echo $lista [0]['nome'] . ' - ';
        echo $lista [0]['email'] . '<br>';

        echo $lista [1]['nome'] . ' - ';
        echo $lista [1]['email'] . '<br>';

    }   catch (PDOException $e) {
            echo 'Erro: '. $e -> getCode () . ' Mensagem: ' . $e -> getMessage ();

            // registrar erro
        }
?>