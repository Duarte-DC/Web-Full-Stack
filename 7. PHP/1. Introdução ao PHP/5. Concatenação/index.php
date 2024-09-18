<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Concatenação</title>
    </head>
    
    <body>
       <?php
            $nome = 'Duarte';
            $cor = 'preto';
            $idade = 23;
            $hobbie = 'Programar';

            echo 'Olá ' . $nome . ', vi que a sua cor preferida é ' . $cor .', vejo também que você possui ' . $idade . ' anos e que gosta de '. $hobbie;

            echo '<br/><hr>';

            echo "Olá $nome, vi que a sua cor preferida é $cor, vejo também que você possui $idade anos e que gosta de $hobbie"; // desvantagem = mais lento
       ?> 
    </body>
</html>