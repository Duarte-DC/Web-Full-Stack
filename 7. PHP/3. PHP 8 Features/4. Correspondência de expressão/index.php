<?php
    $busca = 1;

    switch ($busca) { // comparação por igualidade/equalidade (==)
        case '1': 
            $retornoSwitch = "Encontrou o texto 1";
            break;
        case 2:
            $retornoSwitch = "Encontrou o número 2";
            break;
        default:
            $retornoSwitch = "Não encontrou";
    }

    echo 'Resultado switch: ' . $retornoSwitch . '<hr>';
/*
    $retornoMatch = match ($busca) { // comparação por identidade/estrita (===)
        '1', 1 => 'Encontrou o texto 1 ou o número 1',
        '2', 2 => 'Encontrou o texto 2 ou o número 2',
        default => 'Não encontrou'
    };
*/

    $retornoMatch = match (true) {
        $busca < 20 => 'Encontrou',
        $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que 20 e menor que 30',
        default => 'Não encontrou'
    };
    echo 'Resultado Macth: ' . $retornoMatch;
?>