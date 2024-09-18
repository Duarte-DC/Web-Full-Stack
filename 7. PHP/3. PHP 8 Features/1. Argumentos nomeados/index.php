<?php
    function sendMail ($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: " . $destinatarios . "<br>";
        echo "CC: ". $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem ."<br>";
    }

    // convencional: respeitando a ordem dos parâmetros
    sendMail (
        "duartecharles.dc@gmail,com",
        "duartecharles226@gmail.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo '<br> <br>';

    sendMail (
        "duartecharles.dc@gmail,com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo '<br> <hr> <br>';

    sendMail (
        mensagem: "Dominando a feature de argumentos nomeados do PHP 8",
        destinatarios: "duartecharles.dc@gmail,com",
        cc: "duartecharles226@gmail.com",
        assunto: "Argumentos Nomeados"
    );
?>