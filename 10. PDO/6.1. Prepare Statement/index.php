<?php 
    echo '<pre>';
    print_r ($_POST);
    echo '</pre>';
    
    if (!empty ($_POST ['usuario']) && !empty ($_POST ['senha'])) {
    
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';
    
        try {
            $conexao = new PDO ($dsn, $usuario, $senha);

            $query = "
                select
                    *
                from
                    usuarios
                    where
                        email = :usuario
                    AND 
                        senha = :senha
            ";

            $statement = $conexao -> prepare ($query);
            
            $statement -> bindValue (':usuario', $_POST ['usuario']);
            $statement -> bindValue (':senha', $_POST ['senha']);

            $statement -> execute ();

            $usuario = $statement -> fetch ();

            echo '<pre>';
            print_r ($usuario);
            echo '</pre>';
        
    
        }   catch (PDOException $e) {
                echo 'Erro: '. $e -> getCode () . ' Mensagem: ' . $e -> getMessage ();
            }
    }
?>

<!DOCTYPE HTML>

<html lang = "pt-br">

	<head>
		<meta charset = "UTF-8">

		<title>Requisições assícronas - XMLHttpRequest</title>
		
		<!-- bootstrap - link cdn -->
		<link 
			rel = "stylesheet" 
			href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
			crossorigin = "anonymous"
		>

        <script src = "scripts/main.js"></script>
	</head>

	<body>
        <div class = "container mt-5">
            <form 
                action = "index.php"
                method = "post"
            >
                <input 
                    type = "text" 
                    class = "form-control"
                    name = "usuario"
                    placeholder = "e-mail ou usuário"
                >

                <br>
    
                <input 
                    type = "password" 
                    class = "form-control"
                    name = "senha"
                    placeholder = "Palavra-passe"
                >

                <br>

                <div class = 'row'>
                    <div class = "col-sm-10">

                    </div>
                    <div class = "mx-auto col-sm-2">
                        <button class = " btn btn-primary form-control">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>