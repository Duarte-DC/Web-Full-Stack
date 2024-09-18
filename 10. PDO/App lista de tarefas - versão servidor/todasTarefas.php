<?php
    $acao = 'recuperar';

    require 'config/tarefaController.php';
?>

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
	        <script src = "scripts/html5shiv.jstext"></script>
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

        <div class = "container app">
            <div class = "row">

                <div class = "col-md-3 menu">
                    <div class = "list-group">
                        <a class = "list-group-item" href = "index.php">Tarefas pendentes</a>
                        <a class = "list-group-item" href = "novaTarefa.php">Nova tarefa</a>
                        <a class = "list-group-item active bg-success text-white border-success" href = "todasTarefas.php">Todas tarefas</a> 
                    </div>
                </div>

                <div class = "col-md-9">
                    <div class = "container pagina">
                        <div class = "row">
                            <div class = "col">
                                <h4>Tarefas pendentes</h4>

                                <hr>

                                <?php 
                                    foreach ($tarefas as $indice => $tarefa) {
                                ?>
                                    <div class = "row mb-3 d-flex align-items-center tarefa">
                                        <div 
                                            id = "tarefa<?= $tarefa -> id ?>"
                                            class = "col-sm-9"
                                        > 
                                            <?= $tarefa -> tarefa ?> (<?= $tarefa -> estado ?>) 
                                        </div>

                                        <div 
                                            class = "col-sm-3 d-flex justify-content-between"
                                        >
                                            <button
                                                class = 'btn'
                                                onclick = 'remover (<?= $tarefa -> id ?>)'
                                            > 
                                                <i class = "fa-solid fa-trash-can text-danger"></i> 
                                            </button>

                                            <?php
                                                if ($tarefa -> estado == 'Pendente') {
                                            ?>
                                                <button
                                                    class = 'btn'
                                                    onclick = "editar (<?= $tarefa -> id ?>, '<?= $tarefa -> tarefa ?>')"
                                                > 
                                                    <i class = "fa-solid fa-pen-to-square"></i> 
                                                </button>

                                                <button
                                                    class = 'btn'
                                                    onclick = 'marcarRealizada (<?= $tarefa -> id ?>)'
                                                > 
                                                    <i class = "fa-solid fa-circle-check text-success"></i> 
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--                   ------                   < Javascript >                   ------                   -->
        <script>

            function editar (id, textoTarefa) {
                // criar um form de edicao
                let formulario = document.createElement ('form')
                formulario.action = 'todasTarefas.php?acao=atualizar'
                formulario.method = 'post'
                formulario.className = 'row'

                // criar uma div 
                let div = document.createElement ('div')
                div.className = 'input-group'

                // criar um input para entrada de texto
                let inputTarefa = document.createElement ('input')
                inputTarefa.type = 'text'
                inputTarefa.name = 'tarefa'
                inputTarefa.className = 'col-9 form-control'
                inputTarefa.value = textoTarefa

                // criar um botao para envio do form
                let botao = document.createElement ('button')
                botao.type = 'submit'
                botao.className = 'col-3 btn btn-outline-success'
                botao.innerHTML = 'Atualizar'

                // criar um icone
                let icone = document.createElement ('i')
                icone.className = 'ms-2 fa-solid fa-pen-to-square'
                
                // criar um input hidden para guardar o id da tarefa
                let inputId = document.createElement ('input')
                inputId.type = 'hidden'
                inputId.name = 'id'
                inputId.value = id                
                
                formulario.appendChild (div) // incluir a div no formulario 
                div.appendChild (inputTarefa) // incuiir o inputTarefa na div
                div.appendChild (inputId) // incluir o input hidden na div
                div.appendChild (botao) // incluir o botao na div
                botao.appendChild (icone) // incluir o icone no botao

                let tarefa = document.getElementById ('tarefa' + id) // selecionar a div 
                tarefa.innerHTML = '' // limpar o texto da tarefa para inclusao do form
                tarefa.insertBefore (formulario, tarefa [0])// incluir o form na pagina
            }

            function remover (id) {
                location.href = 'todasTarefas.php?acao=remover&id=' + id
            }

            function marcarRealizada (id) {
                location.href = 'todasTarefas.php?acao=marcarRealizada&id=' + id
            }

        </script>

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