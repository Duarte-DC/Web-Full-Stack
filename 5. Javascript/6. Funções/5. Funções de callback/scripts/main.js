function exibirArtigo (id, callbackSucesso, callbackErro) {
    // lógica: recuperar o id via requisição http

    if (true) {
        callbackSucesso (`Funções de callback em JS`, `Funçõe de callback sucesso`)
    }
    else {
        callbackErro (`Erro ao recuperar os dados`)
    }
}

var callbackSucesso = function (titulo, descricao) {
    document.write (`<h1> ${titulo} </h1>`)
    document.write (`<hr>`)
    document.write (`<p> ${descricao} </p>`)
}
var callbackErro = function (erro) {
    document.write (`<p> ${erro} </p>`)
}

exibirArtigo (1, callbackSucesso, callbackErro)