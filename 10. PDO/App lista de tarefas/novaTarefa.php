<!DOCTYPE html>

<html lang = "pt-pt">

    <head>
        <!-- Favicon --> <link rel = "shortcut icon" href = "#" type = "image/x-icon">
         
        <!-- Bootstrap CSS --> <link rel = "stylesheet" href = "assets/styles/bootstrap.min.css">
        <!-- Normalize CSS --> <link rel = "stylesheet" href = "assets/styles/normalize.css">
        <!-- Style CSS --> <link rel = "stylesheet" href = "assets/styles/main.css">
        
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <!--[if lt IE 9]>
	        <script src = "scripts/html5shiv.js"></script>
        <![endif]-->
        
        <!-- Babel --> <script src = "https://unpkg.com/@babel/standalone/babel.min.js"></script>
        <!-- Flexibility --> <script src = "scripts/flexibility.js"></script>
        <!-- Icons --> <script src = "https://kit.fontawesome.com/e33cdef215.js" crossorigin = "anonymous"></script>
        <!-- XML Para JSON --> <script src = "scripts/xmltojson.js"></script>
         
        <title>App lista de tarefas</title>
    </head>
    
    <body>
        <nav class = "navbar navbar-light bg-light">
            <div class = "container my-4">
                <a 
                    href = "#" 
                    class = "navbar-brand"
                >
                    <img 
                        src = "assets/images/logo.png"
                        width = "30" height = "30"
                        class = "d-inline-block align-top">
                    </img>
                    Lista de tarefas
                </a>
            </div>
        </nav>
        <?php 
            if (isset ($_GET ['inclusao']) && $_GET ['inclusao'] == 1) {
        ?>
            <div class="bg-success pt-2 text-white d-flex justify-content-center">
                <h5>Tarefa inserida com sucesso!</h5>
            </div>
        <?php } ?>

        <div class = "container app">
            <div class = "row">

                <div class = "col-md-3 menu">
                    <ul class = "list-group">
                        <a class = "list-group-item " href = "index.php">Tarefas pendentes</a>
                        <a class = "list-group-item active bg-success text-white border-success" href = "novaTarefa.php">Nova tarefa</a>
                        <a class = "list-group-item" href = "todasTarefas.php">Todas tarefas</a> 
                    </ul>
                </div>

                <div class = "col-md-9">
                    <div class = "container pagina">
                        <div class = "row">
                            <div class = "col">
                                <h4>Tarefas pendentes</h4>

                                <hr>

                                <form 
                                    action = "config/tarefaController.php?acao=inserir"
                                    method = "post"
                                >
                                    <div class = "my-3">
                                        <label 
                                            for = "tarefa"
                                            class = "mb-3"
                                        >
                                            Descrição da tarefa: 
                                        </label>

                                        <input 
                                            type = "text" 
                                            id = "tarefa"
                                            class = "form-control"
                                            name = "tarefa"
                                            placeholder = "Exemplo: Lavar o carro"
                                        >
                                    </div>

                                    <div class="row">
                                        <div class = "col-sm-9"> </div>
    
                                        <div class = "col-sm-3">
                                            <button class = "btn btn-success form-control">Cadastrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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