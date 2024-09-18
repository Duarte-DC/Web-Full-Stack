<?php
    require 'tarefa.model.php';
    require 'tarefa.service.php';
    require 'conexao.php';



    $acao = isset ($_GET ['acao']) ? $_GET ['acao'] : $acao;
    $pagina = isset ($_GET ['pag']) && $_GET ['pag'] == 'index';

    $tarefa = new Tarefa ();
    $conexao = new Conexao ();
    $tarefaService = new TarefaService ($conexao, $tarefa);

    if ($acao == 'inserir') {

        $tarefa -> __set ('tarefa', $_POST ['tarefa']);
        $tarefaService -> inserir ();

            header ('Location: ../novaTarefa.php');
    
    }   else if ($acao == 'recuperar') {

            $tarefas = $tarefaService -> recuperar ();

            }   else if ($acao == 'atualizar') {

                    $tarefa -> __set('id', $_POST ['id']) -> __set('tarefa', $_POST ['tarefa']);
                    $tarefaService -> atualizar ();
                    
                    if ($pagina)
                        header('Location: ../index.php');
                    else
                        header ('Location: ../todasTarefas.php');

                }   else if ($acao == 'remover') {

                        $tarefa -> __set('id', $_GET ['id']);
                        $tarefaService -> remover ();
                        
                        if ($pagina)
                            header('Location: ../index.php');
                        else
                            header ('Location: ../todasTarefas.php');
                        
                    }   else if ($acao == 'marcarRealizada') {
                        
                            $tarefa -> __set('id', $_GET ['id']) -> __set ('idEstado', 2);
                            $tarefaService -> marcarRealizada ();
                            
                            if ($pagina)
                                header('Location: ../index.php');
                            else
                                header ('Location: ../todasTarefas.php');
                        }

?>