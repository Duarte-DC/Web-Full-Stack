<?php
    session_start ();

// Metodo 1: remover índices do array de sessão (1 a 1)
    /*
        unset ($_SESSION ['x']); // remover apenas um indice, se existir

        echo '<pre>';
        print_r ($_SESSION);
        echo '</pre>';
    */

/*
    Metodo 2:
    » destruír a variável de sessão
    » forçar um redirecionamento
*/
    session_destroy ();
    header ('Location: ../index.php');
?>