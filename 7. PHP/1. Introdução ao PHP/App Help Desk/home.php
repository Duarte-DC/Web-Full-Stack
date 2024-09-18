<?php
    require_once ('config/validarAcesso.php');
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
            .card-home {
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
                    <a href = "#" class = "navbar-brand">
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
                <div class = "card-home">
                    <div class = "card">

                        <div class = "card-header my-2">
                            Menu
                        </div>

                        <div class = "card-body">

                            <div class = "row">

                                <div class = "col-6 d-flex justify-content-center">
                                    <a href = "abrirChamado.php">
                                        <img 
                                            src = "assets/images/formulario_abrir_chamado.png" 
                                            width = "70" height = "70"
                                            alt = ""
                                        >
                                    </a>
                                </div>

                                <div class = "col-6 d-flex justify-content-center">
                                    <a href = "consultarChamado.php">
                                        <img 
                                            src = "assets/images/formulario_consultar_chamado.png" 
                                            width = "70" height = "70"
                                            alt = ""
                                        >
                                    </a>
                                </div>

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