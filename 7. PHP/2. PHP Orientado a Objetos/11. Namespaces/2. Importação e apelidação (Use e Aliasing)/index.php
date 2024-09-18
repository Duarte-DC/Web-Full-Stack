<?php
    require 'bibliotecas/lib1/lib1.php';
    require 'bibliotecas/lib2/lib2.php';

    use A\Cliente;
    use B\Cliente as C2;

    $cliente = new Cliente ();

    echo '<pre>'; 
    print_r ($cliente);
    echo '</pre>';

    echo $cliente -> __get ('nome');


    echo '<hr>';

    // -------------------------------------------------------------

    $cliente = new C2 ();

    echo '<pre>'; 
    print_r ($cliente);
    echo '</pre>';

    echo $cliente -> __get ('nome');
?>