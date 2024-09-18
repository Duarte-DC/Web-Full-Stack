<?php
    require_once ('config/validarAcesso.php');
?>
<?php
    // array para adicionar as linhas
    $chamados = [];

    // abrir arquivo
    $arquivo = fopen ('arquivo.txt', 'r');

    // percorrer enquanto houver registros (linhas) a serem recuperados
    /*while (! feof ($arquivo)) { // testa pelo fim de um arquivo
        // linhas
        $registro = fgets ($arquivo);

        $chamados [] = $registro;
    }*/
    // fechar o arquivo aberto
    // fclose ($arquivo);
?>

<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <!-- Favicon --> <link rel = "shortcut icon" href = "assets/images/logo.png" type = "image/x-icon">
         
        <!-- Bootstrap CSS --> <link rel = "stylesheet" href = "assets/styles/bootstrap.min.css">
        <!-- Normalize CSS --> <link rel = "stylesheet" href = "assets/styles/normalize.css">
        <!-- Style CSS --> <link rel = "stylesheet" href = "assets/styles/main.css">
        
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <!--[if lt IE 9]>
	        <script src = "scripts/html5shiv.js"></script>
        <![endif]-->
        
        <!-- Flexibility --> <script src = "scripts/flexibility.js"></script>
        <!-- Icons --> <script src = "https://kit.fontawesome.com/e33cdef215.js" crossorigin = "anonymous"></script>

        <style>
            .card-consultar-chamado {
                margin: 0 auto;
                padding: 30px 0 0 0;

                width: 100%;
            }
            
        </style>
        
        <title>App Help Desk</title>
    </head>
    
    <body>
        <header>
            <nav class = "navbar bg-dark navbar-dark">
                <div class = "container">
                    <a href = "home.php" class = "navbar-brand">
                        <img 
                            src = "assets/images/logo.png" 
                            width = "30" height = "30" 
                            class = "d-inline-block align-top" alt = ""
                        > App Help Desk
                    </a>

                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a 
                                href = "config/logoff.php" 
                                class = "nav-link"
                            >
                                <i class = "fa-solid fa-arrow-right-from-bracket me-2"></i>
                                SAIR
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class = "container">
            <div class = "row">
                <div class = "card-consultar-chamado">
                    <div class = "card">
                        <div class = "card-header">
                            Consulta de chamado
                        </div>

                        <div class = "card-body">

                        <?php foreach ($chamados as $chamado) { ?>
                            <?php
                                $chamado_dados = explode ('#', $chamado);

                                if ($_SESSION ['perfilID'] == 2) {
                                    // só vamos exibir o chamado se ele foi criado pelo usuário

                                    if ($_SESSION ['id'] != $chamado_dados [0])
                                        continue;
                                }
        
                                if (count ($chamado_dados) < 3) {
                                    continue;
                                }
                            ?>

                            <div class = "card mb3 mt-4 bg-light">
                                <div class = "card-body">
                                    <h5 class = "card-title">
                                        <?=$chamado_dados [0]?>
                                    </h5>
                                    <h6 class = "card-subtitile mb2 text-muted">
                                        <?= $chamado_dados [1] ?>
                                    </h6>
                                    <p class = "card-text">
                                        <?= $chamado_dados [2] ?>
                                    </p>
                                </div>
                            </div>

                        <?php } ?>

                            <div class = "row mt-5">
                                <div class = "col-3"></div>
                                <div class = "col-6 d-grid gap-2">
                                    <a 
                                        href = "home.php"
                                        class = "btn btn-danger btn-block"
                                    >
                                        Voltar
                                    </a>
                                </div>
                                <div class = "col-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>

        <!--                   ------                   < Javascript >                   ------                   -->
        <script src = "scripts/main.js"></script>

        <!-- Bootstrap Javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

        <script src = "scripts/bootstrap.bundle.min.js"></script>

        <script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity = "sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin = "anonymous">
        </script>
        
        <script src = "scripts/bootstrap.min.js"></script>
    </body>

</html>