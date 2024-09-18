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

        <title>App Send Mail</title>
    </head>

    <body>
        <div class = "container">

            <header class = "py-3 text-center">
                
                <img 
                    src = "assets/images/logo.png" 
                    alt = "" 
                    width = "72" height = "72"
                    class = "d-block mx-auto mb-2"
                >

                <h2>Send Mail</h2>

                <p class = "lead">Seu app de envio de e-mails particular!</p>

            </header>

            <main class = "row">

                <div class = "col-md-12">
                    <div class = "card-body font-weight-bold">
                        <form action = "config/processaEnvio.php" method = "post">

                            <div class = "mb-3">

                                <label for = "para">
                                    <strong>Para</strong>
                                </label>

                                <input 
                                    type = "email" 

                                    class = "form-control"
                                    id = "para" 
                                    name = "para"

                                    placeholder = "email@dominio.com"
                                >
                            </div>

                            <div class = "mb-3">

                                <label for = "assunto">
                                    <strong>Assunto</strong>
                                </label>

                                <input 
                                    type = "text" 

                                    class="form-control"    
                                    id = "assunto" 
                                    name = "assunto"

                                    placeholder = "Assunto do e-mail"
                                >
                            </div>

                            <div class = "mb-3">

                                <label for = "mensagem">
                                    <strong>Mensagem</strong>
                                </label>

                                <textarea 
                                    class = "form-control"
                                    id = "mensagem"
                                    name = "mensagem"
                                >
                                </textarea>
                            </div>

                            <button
                                class = "btn btn-primary"
                            >
                                Enviar Mensagem
                            </button>
                        </form>
                    </div>
                </div>

            </main>
        </div>

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