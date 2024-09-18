<?php
/* 
                        PHP 7   PHP 8
    0 == '0';           true    true
    0 == '0.0';         true    true
    0 == 'teste';       true    false
    0 == '';            true    false
    50 == '50';         true    true
    50 == '50teste'     true    false
*/
    $expressao = [
        '0 == "0"' => 0 == "0",
        '0 == "0.0"' => 0 == "0.0",
        '0 == "teste"' => 0 == "teste",
        '0 == ""' => 0 == "",
        '50 == "50"' => 50 == "50",
        '50 == "50teste"' => 50 == "50teste"
    ];

    foreach ($expressao as $operacao => $resultado) {
        echo 'Operação: '. $operacao .' | Resultado: '.($resultado ? 'Verdadeiro' : 'Falso');
        echo '<br>';
    }
    
?>