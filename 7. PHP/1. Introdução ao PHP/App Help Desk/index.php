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
            .card-login {
                margin: 0 auto;
                padding: 30px 0 0 0;

                width: 350px;
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
                </div>
            </nav>
        </header>

        <main class = "container">
            <div class = "row">
                <div class = "card-login">
                    <div class = "card">

                        <div class = "card-header my-2">
                            Login
                        </div>

                        <div class = "card-body">
                            <form 
                                action = "config/validarLogin.php" 
                                method = "post"
                            > 

                                <div class = "mb-3">
                                    <input 
                                        type = "email"
                                        class = "form-control"
                                        name = "email"
                                        placeholder = "E-mail"
                                    >
                                </div>

                                <div class = "mb-3">
                                    <input
                                        type = "password"
                                        class = "form-control"
                                        name = "senha"
                                        placeholder = "Senha"
                                    >
                                </div>

                                <?php
                                    if (isset ($_GET ['login']) && $_GET ['login'] == 'erro') {
                                ?>
                                
                                <div class = "text-danger mb-3">
                                    Usuário ou senha inválido (s)
                                </div>

                                <?php } ?>

                                <?php
                                    if (isset ($_GET ['login']) && $_GET ['login'] == 'erro2') {
                                ?>

                                <div class = "text-danger mb-3">
                                    Faça login antes de acessar as páginas protegidas!
                                </div>

                                <?php } ?>

                                <div class = "d-grid gap-2">
                                    <button 
                                        type = "submit" 
                                        class = "btn btn-primary btn-block"
                                    >
                                        Entrar
                                    </button>
                                </div>
                            </form>
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