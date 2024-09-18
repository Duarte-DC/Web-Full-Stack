/*  
Executa acao uma vez apos o tempo informado
    setTimeout (<acao>, <tempo em milissegundos>) 
    clearTimeout ()
*/
setTimeout (function () {
    document.write ('Teste - Time out')
}, 2000) 

/*
Sempre executa a acao apos o periodo informado
    setInterval (<acao>, <tempo em milissegundos>)
    clearInterval ()
*/
var i = 5

var x = setInterval (function () {
    document.write (`<br>${i}`)
    i --

    if (i === 0)
        clearInterval (x)
        //window.location.reload () - atualiza a pagina
}, 2000)