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
            .card-abrir-chamado {
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
                <div class = "card-abrir-chamado">
                    <div class = "card">
                        <div class = "card-header">
                            Abertura de chamado
                        </div>

                        <div class = "card-body">
                            <div class = "row">
                                <div class = "col">
                                    <form 
                                        action = "config/registraChamado.php"
                                        method = "post"
                                    >

                                        <div class = "mb-3">
                                            <label class = "form-label">Titulo</label>
                                            <input 
                                                type = "text"
                                                class = "form-control"
                                                name = "titulo"
                                                placeholder = "Titulo"
                                            >
                                        </div>

                                        <?php
                                            if (isset ($_GET ['chamado']) && $_GET ['chamado'] == 'erro1') {
                                        ?>
                                        
                                        <div class = "text-danger mb-3">
                                            Insira um título
                                        </div>

                                        <?php } ?>

                                        <div class = "mb-3 mt-3">
                                            <label class = "form-label">Categoria</label>
                                            <select 
                                                class = "form-select"
                                                name = "categoria"
                                            >
                                                <option value = "0">-- Selecionar --</option>
                                                <option value = "1">Criação de Usuário</option>
                                                <option value = "2">Impressora</option>
                                                <option value = "3">Hardware</option>
                                                <option value = "4">Software</option>
                                                <option value = "5">Rede</option>
                                            </select>
                                        </div>

                                        <?php
                                            if (isset ($_GET ['chamado']) && $_GET ['chamado'] == 'erro2') {
                                        ?>
                                        
                                        <div class = "text-danger mb-3">
                                            Selecione uma categoria
                                        </div>

                                        <?php } ?>

                                        <div class = "mb-3">
                                            <label class = "form-label">Descrição</label>
                                            <textarea 
                                                class = "form-control"
                                                name = "descricao"
                                                rows = "3"
                                            >
                                            </textarea>
                                        </div>

                                        <?php
                                            if (isset ($_GET ['chamado']) && $_GET ['chamado'] == 'erro3') {
                                        ?>
                                        
                                        <div class = "text-danger mb-3">
                                            Escreva a descrição do problema
                                        </div>

                                        <?php } ?>

                                        <div class = "row mt-5">

                                            <div class = "col-6 d-grid gap-2">
                                                <a
                                                    href = "home.php"
                                                    class = "btn btn-danger btn-block"
                                                >
                                                    Voltar
                                                </a>
                                            </div>

                                            <div class = "col-6 d-grid gap-2">
                                                <button
                                                    type = "submit"
                                                    class = "btn btn-primary btn-block"
                                                >
                                                    Abrir
                                                </button>
                                            </div>

                                        </div>
                                    </form>
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