var janela

function abrirPopUp () {
    // window.open (URL, name, specs, replace)
    janela = window.open ('http://www.google.com', 'novaJanela', 'width = 800, height = 500')
}

function fecharPopUp () {
    if (janela && !janela.closed) {
        janela.close ();
    }
}