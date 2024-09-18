<?php
    include ('menu.php'); // quando não encontra o script gera um warning e continua a interpretar o script a partir da linha abaixo
    
    include_once ('menu.php'); // o mesmo comportamento no tratamento de erros, porém só permite a inclusão de scripts por 1 vez 
    
    require ('menu.php'); // quando não encontra o script gera um fatal error
    
    require_once ('menu.php'); // o mesmo comportamento no tratamento de erros, porém só permite a inclusão de scripts por 1 vez
?>

<!DOCTYPE html>
<html lang = "pt-pt">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <title>Início</title>
    </head>

    <body>
        Conteudo da página (início)
    </body>
</html>